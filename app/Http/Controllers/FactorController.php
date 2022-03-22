<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\AdminSettings;
use App\Models\CartShop;
use App\Models\FactorOrderUser;
use App\Models\FactorUser;
use App\Models\OrdersProduct;
use App\Models\Products;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Ipecompany\Smsirlaravel\Smsirlaravel;
use Morilog\Jalali\Jalalian;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Factor = FactorUser::all();
        return view('portal.factor.list', compact('Factor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $existProd = DB::table('product')
            ->select('product.id as PID', 'product.title as Ptitle', 'product.userid as PUserId', 'product.groupId as PgroupId', 'product.count as Pcount', 'product.unit as Punit', 'product.price as Pprice', 'product.weight as Pweight', 'product.datereg as Pdatereg', 'Group.id as GID', 'Group.title as Gtitle', 'Group.userId as GuserId', 'Group.datereg as Gdatereg')
            ->join('product_group as Group', 'Group.id', '=', 'product.groupId')->get();

        $AllUser = User::where('role_id', '!=', 1)->get();
        $userCartItems = CartShop::userCartItems();
        $orderUserId = Session::get('orderUserId');

        // Session::forget('orderUserId');


        return view('portal.factor.create', compact('existProd', 'AllUser', 'userCartItems', 'orderUserId'));
    }

    public function DeleteCartItem(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            // echo "<pre>";print_r($data);die;
            CartShop::where('id', $data['cartId'])->delete();
            $userCartItems = CartShop::userCartItems();

            return response()->json(['status' => 200, 'message' => 'کالا مورد نظر با موفقیت حذف شد']);

        }
    }

    public function DeleteCartItemFactor(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $FactorId = $data['FactorId'];
            $FactorCheck = FactorOrderUser::where('id', $FactorId)->first();
            if ($FactorCheck) {
                $priceFactorExist = $FactorCheck->prodPrice;
                $priceFactorExist = str_replace(',', '', $priceFactorExist);

                $factorInfo = FactorUser::select('grandTotal')->find($FactorCheck->FactorId);
                $totalPriceFactor = $factorInfo->grandTotal - $priceFactorExist;
                $factorInfo->update([
                    'grandTotal' => $totalPriceFactor,
                ]);

                // Delete Item Factor
                $FactorCheck->delete();


                return response()->json(['status' => 200, 'message' => 'کالا مورد نظر با موفقیت حذف شد']);
            }


        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->isMethod('post')) {
            $data = $request->all();

            /* if (empty($data['userId'])) {
                 return response()->json(['status' => 401, 'message' => 'لطفا مشتری مورد نظر را انتخاب کنید']);

             } else {

             }*/


            //echo "<pre>";print_r($data);die;
            //Check Product

            Session::put('orderUserId', $data['userId']);

            $getProductStock = Products::where('id', $data['PID'])->first()->toArray();

            if ($getProductStock['count'] < $data['qtyProduct']) {

                $message = "تعداد درخواستی کالا بیش از حد موجودی انبار می باشد";
                // Session::flash('error_message', $message);
                return response()->json(['status' => 302, 'message' => $message]);
            }
            // Generate Session Id if not exist
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);

            }
            //Check Product if already User Cart


            if (Auth::check()) {
                //User is login
                $countProducts = CartShop::where(['product_id' => $data['PID'], 'qty' => $data['qtyProduct'], 'user_id' => $data['userId']])->count();


            } else {
                //This is User not login
                $countProducts = CartShop::where(['product_id' => $data['PID'], 'qty' => $data['qtyProduct'], 'session_id' => Session::get('session_id')])->count();
            }


            $sumTotalQtyCart = CartShop::where(['product_id' => $data['PID'], 'session_id' => Session::get('session_id')])->sum('qty');


            if ($sumTotalQtyCart >= $getProductStock['count']) {
                $message = "محصول متاسفانه تمام شده قابل سفارش نیست ";
                Products::where('id', $data['PID'])->update([
                    'is_running_out' => 1
                ]);
                //  $message = "تعداد درخواستی کالا بیش از حد موجودی انبار می باشد";
                return response()->json(['status' => 302, 'message' => $message]);
                // Session::flash('error_message', $message);
                //  return redirect()->back();
            }

            if ($countProducts > 0) {
                $message = "محصول قبلا در سبد خرید شما اضافه شده";
                /*   Session::flash('error_message', $message);
                   return redirect()->back();*/
                return response()->json(['status' => 404, 'message' => $message]);
            } else if ($countProducts == 0) {

                $CurrentCart = CartShop::where(['product_id' => $data['PID'], 'session_id' => Session::get('session_id')])->first();
                if ($CurrentCart) {
                    $CurrentCart->update([
                        'qty' => $CurrentCart->qty + $data['qtyProduct']
                    ]);
                    $message = "تعداد محصول با موفقیت به روز رسانی شد";
                    return response()->json(['status' => 301, 'message' => $message]);
                    //  Session::flash('error_message', $message);
                    //   return redirect()->back();
                } else {

                    //Save Produce Cart
                    // echo "<pre>";print_r($data);die;
                    CartShop::insert([
                        'session_id' => $session_id,
                        'user_id' => $data['userId'],
                        'product_id' => $data['PID'],
                        'qty' => $data['qtyProduct'],
                        'price' => str_replace(',', '', $getProductStock['price']),
                        'datereg' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %y ')
                    ]);

                    $message = "محصول با موفقیت به سبد خرید اضافه شد";
                    return response()->json(['status' => 304, 'message' => $message]);
                    //   Session::flash('success_message', $message);
                    //  return redirect()->back();
                }


            }


        }

    }


    public function AddItemFactor(Request $request)
    {
        //
        if ($request->isMethod('post')) {
            $data = $request->all();


            $getProductStock = Products::where('id', $data['PID'])->first()->toArray();

            if ($getProductStock['count'] < $data['qtyProduct']) {

                $message = "تعداد درخواستی کالا بیش از حد موجودی انبار می باشد";
                return response()->json(['status' => 302, 'message' => $message]);
            }

            $priceItemFactor = str_replace(',', '', $getProductStock['price']);

            $checkExistProdcutInFactor = FactorOrderUser::where('prodId', $data['PID'])->first();
            if ($checkExistProdcutInFactor) {

                $totalQty = $checkExistProdcutInFactor->productQty + $data['qtyProduct'];
                $checkExistProdcutInFactor->update([
                    'productQty' => $totalQty,
                    'prodPrice' => $priceItemFactor * $totalQty,
                ]);

                $infoCurrentFactor = FactorUser::where('id', $data['factorId'])->first();
                $infoCurrentFactor->update([
                    'subtotal' => $priceItemFactor + $infoCurrentFactor['subtotal'],
                    'grandTotal' => $priceItemFactor + $infoCurrentFactor['grandTotal']
                ]);
                return response()->json(['status' => 200, 'message' => 'اقلام مورد نظر با موفقیت ثبت شد']);

            } else {

                // Add New Item Factor Current Factor
                $cartItem = new  FactorOrderUser();
                $cartItem->FactorId = $data['factorId'];
                $cartItem->userId = $data['userId'];
                $cartItem->prodId = $data['PID'];
                $cartItem->prodname = $getProductStock['title'];
                $cartItem->prodPrice = $priceItemFactor;
                $cartItem->productQty = $data['qtyProduct'];
                $cartItem->datereg = Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %Y ');
                if ($cartItem->save()) {

                    // updating Price Total Product
                    $infoCurrentFactor = FactorUser::where('id', $data['factorId'])->first();
                    $infoCurrentFactor->update([
                        'subtotal' => $priceItemFactor + $infoCurrentFactor['subtotal'],
                        'grandTotal' => $priceItemFactor + $infoCurrentFactor['grandTotal']
                    ]);


                    return response()->json(['status' => 200, 'message' => 'اقلام مورد نظر با موفقیت ثبت شد']);

                } else {

                    return response()->json(['status' => 401, 'message' => 'خطا مجدد تلاش کنید']);
                }
            }


        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $factor = FactorUser::where('id', $id)->first();
        if ($factor) {


            $FactorItem = FactorOrderUser::where('FactorId', $factor->id)->get();


            $existProd = DB::table('product')
                ->select('product.id as PID', 'product.title as Ptitle', 'product.userid as PUserId', 'product.groupId as PgroupId', 'product.count as Pcount', 'product.unit as Punit', 'product.price as Pprice', 'product.weight as Pweight', 'product.datereg as Pdatereg', 'Group.id as GID', 'Group.title as Gtitle', 'Group.userId as GuserId', 'Group.datereg as Gdatereg')
                ->join('product_group as Group', 'Group.id', '=', 'product.groupId')->get();

            $userCartItems = CartShop::userCartItems();
            $orderUserId = Session::get('orderUserId');

            // Session::forget('orderUserId');

            return view('portal.factor.edit', ['factor' => $factor, 'FactorItem' => $FactorItem, 'existProd' => $existProd, 'userCartItems' => $userCartItems, 'orderUserId' => $orderUserId]);

        } else {

            return redirect()->back();

        }

    }

    public function NewFactor(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();


            if ($data['extraValue'] != 0) {
                $extraValue = $data['extraValue'];

                //   $totalPriceUser = str_replace(',', '', $data['totalPriceUser']) + (($data['extraValue'] / 109) * 100);
                $totalValueExtra = str_replace(',', '', $data['totalPriceUser']) * ($data['extraValue'] / 100);


            } else {
                $extraValue = 0;
                $totalValueExtra = 0;
            }

            // dd((int)$totalValueExtra);


            //  dd('ExtraValue: ' . $extraValue . '  Total : ' . $totalPriceUser . ' Price ' . $data['totalPriceUser']);


            DB::beginTransaction();
            $factorId = $data['userIdOrder'] . Helper::GenerateTrackingCode(5);
            $order = new FactorUser();
            $order->userId = $data['userIdOrder'];
            $order->userIdOrdered = Auth::user()->id;
            $order->factorId = $factorId;
            $order->factor_status = 'waitapprove';
            $order->pay_status = $data['Paymethod'];
            $order->NoteOrder = $data['messageNote'];
            $order->subtotal = str_replace(',', '', $data['totalPriceUser']);
            $order->grandTotal = str_replace(',', '', $data['totalPriceUser']);

            $order->address = $data['Address'];
            $order->taxcode = $data['codetax'];
            $order->projectname = $data['nameproject'];
            $order->number_paiman = $data['number_paiman'];
            $order->extraValue = (int)$totalValueExtra;
            $order->extra_percent = $data['extraValue'];

            $order->IP = $request->ip();
            $order->datereg = Jalalian::fromCarbon(Carbon::now())->format('%A  %d %B %Y | H:i:s ');
            $order->save();

            $order_id = DB::getPdo()->lastInsertId();
            $cartItems = CartShop::where('user_id', $data['userIdOrder'])->get()->toArray();
            foreach ($cartItems as $key => $item) {

                $cartItem = new  FactorOrderUser();
                $cartItem->FactorId = $order_id;
                $cartItem->userId = $data['userIdOrder'];

                $getProductDetails = Products::select('title', 'price')->where('id', $item['product_id'])->first()->toArray();


                $cartItem->prodId = $item['product_id'];
                $cartItem->prodname = $getProductDetails['title'];
                $cartItem->prodPrice = str_replace(',', '', $getProductDetails['price']);
                $cartItem->productQty = $item['qty'];
                $cartItem->datereg = Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %Y ');
                $cartItem->save();


                //   Smsirlaravel::ultraFastSend(['OrderNo' => $factorId, 'shopping' => 'http://www.coffee-karo.com'], 45470, "09188720548");

            }


            if ($order_id) {

                // sms send order user

                /*  Smsirlaravel::ultraFastSend(['username' => Helper::getInfoUser($data['userIdOrder'])['fullname'], 'OrderNo' => $factorId, 'visitsite' => 'http://andishgostar.com'], 45480, Helper::getInfoUser($data['userIdOrder'])['mobile']);

                  $userInfo = User::where('role_id', 1)->first();
                  if ($userInfo) {
                      Smsirlaravel::ultraFastSend(['OrderNo' => $factorId], 45486, $userInfo->mobile);
                  }*/


                CartShop::where('user_id', $data['userIdOrder'])->delete();
                Session::put('order_id', $order_id);

                Session::forget('orderUserId', $order_id);

                DB::commit();
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }

        }

    }

    public function showFactor($id)
    {
        $Factor = FactorUser::find($id);
        if ($Factor) {
            // dd($Factor);
            $ProductOrder = FactorOrderUser::where('FactorId', $id)->get();
            return view('portal.factor.show', ['Factor' => $Factor, 'ProductOrder' => $ProductOrder, 'id' => $id]);
        }
    }

    public function PrintPreview($id)
    {
        $Factor = FactorUser::find($id);
        if ($Factor) {
            $admin = AdminSettings::find(1);

            $ProductOrder = FactorOrderUser::where('FactorId', $id)->get();
            return view('portal.factor.PrintPerview', ['Factor' => $Factor, 'ProductOrder' => $ProductOrder, 'id' => $id, 'admin' => $admin]);
        }
    }

    public function ChangeStatusOrder(Request $request)
    {
        $Factor = FactorUser::find($request->id);
        if ($Factor) {

            $Factor->update([
                'factor_status' => $request->type,
            ]);
            if ($Factor) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $article = FactorUser::findOrFail($request->id);


        // dd($request->all());


        if ($request->extra_percent == 0) {
            $extraValue = 0;
            $totalAmount = $article->grandTotal;
        } else {
            $extraValue = (str_replace(',', '', $request->totalfactor) * ($request->extra_percent / 100));
            $totalAmount = str_replace(',', '', $article->grandTotal) + (int)$extraValue;
        }


        $article->update([
            'grandTotal' => $totalAmount,
            'subtotal' => $totalAmount,
            'taxcode' => $request->taxcode,
            'number_paiman' => $request->number_paiman,
            'address' => $request->address,
            'projectname' => $request->projectname,
            'extraValue' => (int)$extraValue,
            'extra_percent' => $request->extra_percent,
            'datereg' => $request->datefactore,
        ]);

        return response()->json(['status' => 200]);
    }

    public function UpdateItemFactor(Request $request)
    {

        $itemFactorId = $request->id;
        $qtyOrder = $request->QtyOrder;
        $factorItem = FactorOrderUser::find($itemFactorId);
        $factorItem->update([
            'productQty' => $qtyOrder,
        ]);
        $factor = FactorUser::where('id', $factorItem->FactorId)->first();
        if ($factor) {
            $getAllItemFactor = FactorOrderUser::select('prodPrice', 'productQty')
                ->where('FactorId', $factorItem->FactorId)->get();
            $total = 0;
            foreach ($getAllItemFactor as $itemFactor) {
                $total += $itemFactor->prodPrice * $itemFactor->productQty;
            }
            $factor->update([
                'grandTotal' => $total,
                'subtotal' => $total,
            ]);
            return response()->json(['status' => 200]);

        } else {

            return response()->json(['status' => 422, 'message' => 'خطا']);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Factor = FactorUser::find($request->id);
        if ($Factor) {

            $FactorUserOrder = FactorOrderUser::where('FactorId', $request->id)->get();
            foreach ($FactorUserOrder as $itemFa) {
                $itemFa->delete();
            }
            if ($Factor->delete()) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }
    }
}
