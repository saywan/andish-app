<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
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
        // dd($userCartItems);
        return view('portal.factor.create', compact('existProd', 'AllUser', 'userCartItems'));
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

            //echo "<pre>";print_r($data);die;
            //Check Product
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
                        'price' => $getProductStock['price'],
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
            return view('portal.factor.edit', ['factor' => $factor, 'FactorItem' => $FactorItem]);

        } else {

            return redirect()->back();

        }

    }

    public function NewFactor(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            //  dd($data);

            DB::beginTransaction();
            $factorId = $data['userIdOrder'] . Helper::GenerateTrackingCode(5);
            $order = new FactorUser();
            $order->userId = $data['userIdOrder'];
            $order->userIdOrdered = Auth::user()->id;
            $order->factorId = $factorId;
            $order->factor_status = 'waitapprove';
            $order->pay_status = $data['Paymethod'];
            $order->NoteOrder = $data['messageNote'];
            $order->subtotal = $data['totalPriceUser'];
            $order->grandTotal = $data['totalPriceUser'];
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
                $cartItem->prodPrice = $getProductDetails['price'];
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
            // dd($Factor);
            $ProductOrder = FactorOrderUser::where('FactorId', $id)->get();
            return view('portal.factor.PrintPerview', ['Factor' => $Factor, 'ProductOrder' => $ProductOrder, 'id' => $id]);
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

        $article->update([
            'grandTotal' => number_format($request->totalfactor),
            'subtotal' => number_format($request->totalfactor),
        ]);

        return response()->json(['status' => 200]);
    }

    public function UpdateItemFactor(Request $request)
    {

        $FactItem = FactorOrderUser::findOrFail($request->id);
        $FactItem->update([
            'productQty' => $request->QtyOrder,
        ]);

        $factor = FactorUser::where('id', $FactItem->FactorId)->first();

        if ($factor) {

            // $newTotal = str_replace(',', '', $article->prodPrice) * $request->QtyOrder;
            $getAllItemFactor = FactorOrderUser::select('prodPrice', 'productQty')->where('FactorId', $FactItem->FactorId)->get();

            $total = 0;
            foreach ($getAllItemFactor as $itemFactor) {
                $total += str_replace(',', '', $itemFactor->prodPrice) * $itemFactor->productQty;
            }

            // $FactorItem = FactorOrderUser::where('FactorId', $FactItem->id)->get()->sum('');
            $factor->update([
                'grandTotal' => number_format($total),
                'subtotal' => number_format($total),
            ]);
        }
        return response()->json(['status' => 200]);
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
