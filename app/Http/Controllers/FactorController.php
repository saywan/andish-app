<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\AdminSettings;
use App\Models\CartShop;
use App\Models\FactorOrderUser;
use App\Models\FactorUser;
use App\Models\FinalFactor;
use App\Models\OrdersProduct;
use App\Models\ProcessExitProduct;
use App\Models\Products;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
                $priceFactorCount = $FactorCheck->productQty;
                $priceTotalItem = $priceFactorExist * $priceFactorCount;


                $factorInfo = FactorUser::find($FactorCheck->FactorId);
                $totalPriceFactor = $factorInfo->final_total - $priceTotalItem;


                //check percent and value update
                if (!empty($factorInfo->extra_percent)) {

                    $extra_percent = $factorInfo->extra_percent;
                    $totalValueExtra = $totalPriceFactor * ($extra_percent / 100);


                } else {
                    $extraValue = 0;
                    $totalValueExtra = 0;
                }

                $final_total = $totalPriceFactor;
                $final_total_extra = $totalPriceFactor + $totalValueExtra;

                $factorInfo->update([
                    'extraValue' => $totalValueExtra,
                    'final_total' => $final_total,
                    'final_total_extra' => (int)$final_total_extra,
                ]);

                // Delete Item Factor
                $FactorCheck->delete();


                return response()->json(['status' => 200, 'message' => 'کالا مورد نظر با موفقیت حذف شد']);
            }


        }
    }


    public function ExportFinalFactor(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            $getInfoFactor = FactorUser::where('factorId', $request->FactorId)->first();
            if ($getInfoFactor) {
                $getAllItemFactor = FactorOrderUser::where('FactorId', $getInfoFactor->id)->get();
                $listItemFactorId = [];
                $totalQty = 0;
                if (count($getAllItemFactor) > 0) {

                    foreach ($getAllItemFactor as $itemSubFactor) {
                        $listItemFactorId[] = $itemSubFactor->id;
                        $totalQty += $itemSubFactor->productQty;
                    }

                }


                $checkFinalFactor = FinalFactor::where('factor_id', $request->FactorId)->first();
                if ($checkFinalFactor) {

                    $checkFinalFactor->update([
                        'factor_items_id' => $listItemFactorId,
                        'total_item_count' => $totalQty,
                    ]);
                    return response()->json(['status' => 200, 'message' => 'فاکتور رسمی با موفقیت صادر و ثبت شده']);
                } else {

                    $FinalFactor = new  FinalFactor();
                    $FinalFactor->factor_id = $request->FactorId;
                    $FinalFactor->user_id = $getInfoFactor->userId;
                    $FinalFactor->user_id_export = Auth::user()->id;
                    $FinalFactor->factor_items_id = $listItemFactorId;
                    $FinalFactor->total_item_count = $totalQty;
                    $FinalFactor->status = 'wait';
                    $FinalFactor->datereg = Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %y ');

                    if ($FinalFactor->save()) {

                        // Send SMS
                        Smsirlaravel::ultraFastSend([
                            'factor_id' => $request->FactorId,
                            'username' => Helper::getInfoUser($getInfoFactor->userId)['fullname'],
                            'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %Y ')
                        ], 64326, "09183732103");
                        

                        //09183732103

                        return response()->json(['status' => 200, 'message' => 'فاکتور رسمی با موفقیت صادر و ثبت شده']);
                    }
                }


            }


        }
    }

    public function showFinalFactor()
    {

        $Factor = FinalFactor::orderBy('id', 'DESC')->get();
        return view('portal.factor.finalFactor', compact('Factor'));

    }

    public function detailsFinalFactor($id)
    {

        $factor = FinalFactor::where('id', $id)->first();

        //dd($factor);


        if ($factor) {
            $getInfoItemFactor = $factor->factor_items_id;


            if (count($getInfoItemFactor) > 0) {
                $getItemSubFactor = FactorOrderUser::whereIn('id', $getInfoItemFactor)->get();
               // dd($getItemSubFactor);

                $getInfoProcessProduct = ProcessExitProduct::where('final_factor_id', $id)->get();
            //    dd($getInfoProcessProduct);

                /*foreach ($getInfoItemFactor as $itemSubFactor)
                {
                }*/
            }

            return view('portal.factor.detailsFactorFinal', compact('factor', 'getItemSubFactor', 'id', 'getInfoProcessProduct'));
        } else {
            return redirect()->back();
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

        if ($request->isMethod('post')) {

            $data = $request->all();
            $getProductStock = Products::where('id', $data['PID'])->first()->toArray();

            if ($getProductStock['count'] < $data['qtyProduct']) {

                $message = "تعداد درخواستی کالا بیش از حد موجودی انبار می باشد";
                return response()->json(['status' => 302, 'message' => $message]);
            }

            $priceItemFactor = str_replace(',', '', $getProductStock['price']);

            $checkExistProdcutInFactor = FactorOrderUser::where('prodId', $data['PID'])->first();


            // update Qty
            if ($checkExistProdcutInFactor) {


                $totalQty = $checkExistProdcutInFactor->productQty + $data['qtyProduct'];

                $price_with_count = $priceItemFactor * $totalQty;


                $checkExistProdcutInFactor->update([
                    'productQty' => $totalQty,
                    'prodPrice' => $priceItemFactor,
                ]);

                $infoCurrentFactor = FactorUser::where('id', $data['factorId'])->first();

                if (!empty($infoCurrentFactor->extra_percent)) {


                    //    Log::info("PriceFinalTotal: " . $infoCurrentFactor->final_total);
                    //    Log::info("PriceItemCount: " . $price_with_count);
                    //    Log::info("FinalWithCountOrder: " . $newTotalPriceItemFactor);
                    //    Log::info("FinalWithCountOrderPerpareSave: " . $final_total);

                    //   Calcution All Sum Item Factor

                    $getAllItemFactor = FactorOrderUser::select('prodPrice', 'productQty')
                        ->where('FactorId', $infoCurrentFactor->id)->get();


                    $total = 0;
                    foreach ($getAllItemFactor as $itemFactor) {
                        $total += $itemFactor->prodPrice * $itemFactor->productQty;
                    }


                    // Log::info("total: " . $total);

                    // dd($total);

                    $extra_percent = $infoCurrentFactor->extra_percent;
                    $newTotalPriceItemFactor = $total;
                    $totalValueExtra = $newTotalPriceItemFactor * ($extra_percent / 100);


                } else {
                    $extraValue = 0;
                    $totalValueExtra = 0;
                }

                $final_total = $newTotalPriceItemFactor;

                $final_total_extra = $newTotalPriceItemFactor + $totalValueExtra;

                $infoCurrentFactor->update([
                    'extraValue' => $totalValueExtra,
                    'final_total' => $final_total,
                    'final_total_extra' => (int)$final_total_extra,
                ]);
                return response()->json(['status' => 200, 'message' => 'اقلام مورد نظر با موفقیت ثبت شد']);

            } // Add new item current
            else {

                // Add to current edit factor Item
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


                    if (!empty($infoCurrentFactor->extra_percent)) {

                        $price_with_count = $priceItemFactor * $data['qtyProduct'];

                        $extra_percent = $infoCurrentFactor->extra_percent;
                        $newTotalPriceItemFactor = $price_with_count + $infoCurrentFactor->final_total;
                        $totalValueExtra = $newTotalPriceItemFactor * ($extra_percent / 100);

                    } else {
                        $extraValue = 0;
                        $totalValueExtra = 0;
                    }

                    $final_total = $newTotalPriceItemFactor;
                    $final_total_extra = $newTotalPriceItemFactor + $totalValueExtra;

                    $infoCurrentFactor->update([
                        'extraValue' => $totalValueExtra,
                        'final_total' => $final_total,
                        'final_total_extra' => (int)$final_total_extra,

                        // 'subtotal' => $priceItemFactor + $infoCurrentFactor['subtotal'],
                        // 'grandTotal' => $priceItemFactor + $infoCurrentFactor['grandTotal']
                    ]);

                    /*  $infoCurrentFactor->update([
                          'subtotal' => $priceItemFactor + $infoCurrentFactor['subtotal'],
                          'grandTotal' => $priceItemFactor + $infoCurrentFactor['grandTotal']
                      ]);*/


                    return response()->json(['status' => 200, 'message' => 'اقلام مورد نظر با موفقیت ثبت شد']);

                } else {

                    return response()->json(['status' => 401, 'message' => 'خطا مجدد تلاش کنید']);
                }
            }


        }

    }

    public function checkCoupon(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $id = $data['id'];
            $percentNumber = $data['percentOff'];

            if ($percentNumber < 0) {
                $message = "مقدار وارد شده درصد تخفیف نامعتبر است";
                return response()->json(['status' => 302, 'message' => $message]);
            }
            if ($percentNumber > 100) {
                $message = "مقدار وارد شده درصد تخفیف بین 1 الی 100 درصد وارد کنید";
                return response()->json(['status' => 302, 'message' => $message]);
            }

            $getInfo = FactorUser::where('id', $id)->first();
            //  percent_off

            $newPriceWithPercentTotal = $getInfo->final_total * ($percentNumber / 100);
            $newPriceWithPercentFinalExtraTotal = $getInfo->final_total_extra * ($percentNumber / 100);


            $getInfo->update([
                'final_total' => $newPriceWithPercentTotal,
                'final_total_extra' => $newPriceWithPercentFinalExtraTotal,
                'percent_off' => $percentNumber,
            ]);


            return response()->json(['status' => 200,]);

        }
    }

    public function moreDetailsItemProduct(Request $request)
    {


        // dd($request->all());

        $getInfoFactor = FactorUser::where('factorId', $request->factorId)->first();


        if ($getInfoFactor) {
            $getItemFactorProd = FactorOrderUser::where('id', $request->itemProductFinalFactor)->first();
            // dd( $request->itemProductFinalFactor);

            $variable_name = ' <div class="col-lg-12 col-md-12">
                                                        <h5 class="text-danger">
                                                            ' . $getItemFactorProd->prodname . '

                                                        </h5>
                                                        <br>

                                                        <form class="form-horizontal auth-form my-4" action="#">

                                                            <div class="row g-3">
                                                                <div class="form-group col-md-6">
                                                                    <label for="fullnameDelivery">نام تحویل گیرنده</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                               name="fullnameDelivery" id="fullnameDelivery"
                                                                               placeholder="نام تحویل گیرنده "
                                                                               value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="mobileDelivery">شماره موبایل گیرنده
                                                                        (اختیاری)</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                               name="mobileDelivery" id="mobileDelivery"
                                                                               placeholder=" شماره موبایل گیرنده (اختیاری)"
                                                                               value="">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="requestCountItem">
                                                                        تعداد خروج کالا
                                                                        (تعداد مجاز خروج <b class="text-danger">
                                                                            (  ' . $getItemFactorProd->productQty . ')
                                                                        </b>)
                                                                    </label>

                                                                    <input type="hidden" name="productOrderId"
                                                                           id="productOrderId"
                                                                           value="' . $getItemFactorProd->id . '">


                                                                  <input type="hidden" name="prodId"
                                                                           id="prodId"
                                                                           value="' . $getItemFactorProd->prodId . '">

                                                                    <input type="hidden" name="currentQtyItem"
                                                                           id="currentQtyItem"
                                                                           value="' . $getItemFactorProd->productQty . '">

                                                                    <input type="hidden" name="finalFactor" id="finalFactor"
                                                                           value="' . $getInfoFactor->id . '">

                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                               name="requestCountItem" id="requestCountItem"
                                                                               placeholder="تعداد حواله خروج کالا  را وارد کنید">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </form>
                                                    </div>';

        }


        return response()->json([
            'status' => 200,
            'html' => $variable_name,

        ])->setStatusCode(200);
    }

    public function ProcessExitProduct(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = $request->all();


            $getInfoProduct = Products::where('id', $data['prodId'])->first()->toArray();

            $getInfoOrderItemUser = FactorOrderUser::where('id', $data['productOrderId'])->where('FactorId', $data['finalFactor'])->first();


            //  dd($getInfoOrderItemUser);


            if ($getInfoOrderItemUser) {


                if ($getInfoOrderItemUser['productQty'] < $data['requestCountItem']) {

                    $message = "تعداد درخواست خروج کالا بیش از حد تعداد سفارش شده است دقت کنید";
                    return response()->json(['status' => 302, 'message' => $message]);
                }

                $ProcessExitProduct = ProcessExitProduct::where('product_order_id', $data['productOrderId'])->where('final_factor_id', $data['finalFactor'])->orderBy('id', 'desc')->first();

                //  dd($data);


                if ($ProcessExitProduct) {
                    if ($ProcessExitProduct['remin_count'] < $request->requestCountItem) {

                        $message = "ظرفیت خروج تمام شده است ";
                        return response()->json(['status' => 422, 'message' => $message]);
                    } else {

                        //   dd($ProcessExitProduct);

                        $processExitProduct = new ProcessExitProduct();
                        $processExitProduct->user_id = Auth::user()->id;
                        $processExitProduct->user_id_order = Helper::getInfoFactor($data['finalFactor'])->userId;
                        $processExitProduct->fullname_delivery = $request->fullnameDelivery;
                        $processExitProduct->mobile = $request->mobileDelivery;
                        $processExitProduct->final_factor_id = $data['finalFactor'];
                        $processExitProduct->product_order_id = $data['productOrderId'];
                        $processExitProduct->current_count = $ProcessExitProduct['current_count'];
                        $processExitProduct->exit_count = $request->requestCountItem;
                        $processExitProduct->remin_count = $ProcessExitProduct['remin_count'] - $request->requestCountItem;
                        $processExitProduct->datereg = Jalalian::fromCarbon(Carbon::now())->format('%A  %d %B %Y | H:i:s ');

                        if ($processExitProduct->save()) {
                            return response()->json(['status' => 200]);
                        } else {
                            return response()->json(['status' => 422]);
                        }
                    }


                } else {

                    // dd($data);

                    $processExitProduct = new ProcessExitProduct();
                    $processExitProduct->user_id = Auth::user()->id;
                    $processExitProduct->user_id_order = Helper::getInfoFactor($data['finalFactor'])->userId;
                    $processExitProduct->fullname_delivery = $request->fullnameDelivery;
                    $processExitProduct->mobile = $request->mobileDelivery;
                    $processExitProduct->final_factor_id = $data['finalFactor'];
                    $processExitProduct->product_order_id = $data['productOrderId'];
                    $processExitProduct->current_count = $request->currentQtyItem;
                    $processExitProduct->exit_count = $request->requestCountItem;
                    $processExitProduct->remin_count = $request->currentQtyItem - $request->requestCountItem;
                    $processExitProduct->datereg = Jalalian::fromCarbon(Carbon::now())->format('%A  %d %B %Y | H:i:s ');


                    if ($processExitProduct->save()) {
                        return response()->json(['status' => 200]);
                    } else {
                        return response()->json(['status' => 422]);
                    }

                }

            }

        } else {
            return response()->json(['status' => 419]);

        }


    }

    public function ProcessExitAllProduct(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = $request->all();


            $FactorOrderUser = FactorOrderUser::where('FactorId', $data['Id'])->get();
            $getInfoProccessExit = ProcessExitProduct::where('final_factor_id', $data['Id'])->get();

            if (count($getInfoProccessExit) == 0) {
                if (count($FactorOrderUser) > 0) {
                    foreach ($FactorOrderUser as $itemFactor) {
                        //dd( $itemFactor);
                        $getInfoUser = Helper::getInfoUser($itemFactor->userId);

                        $processExitProduct = new ProcessExitProduct();
                        $processExitProduct->user_id = Auth::user()->id;
                        $processExitProduct->user_id_order = $itemFactor->userId;
                        $processExitProduct->fullname_delivery = $getInfoUser['fullname'];
                        $processExitProduct->mobile = $getInfoUser['mobile'];
                        $processExitProduct->final_factor_id = $data['Id'];
                        $processExitProduct->product_order_id = $itemFactor->id;
                        $processExitProduct->current_count = $itemFactor->productQty;
                        $processExitProduct->exit_count = $itemFactor->productQty;
                        $processExitProduct->remin_count = 0;
                        $processExitProduct->datereg = Jalalian::fromCarbon(Carbon::now())->format('%A  %d %B %Y | H:i:s ');

                        $processExitProduct->save();

                    }
                    if ($processExitProduct) {
                        return response()->json(['status' => 200]);
                    } else {
                        return response()->json(['status' => 422]);
                    }

                }
            } else {
                return response()->json(['status' => 419, 'msg' => 'قبلا همه کالا خارج شده است']);
            }


        }


    }

    public function PrintPreviewExit($id)
    {
        $FinalFactor = FinalFactor::where('id', $id)->first();
        // dd($FinalFactor);

        $FactorOrderUser = FactorUser::where('factorId', $FinalFactor->factor_id)->first();
        // dd($FactorOrderUser->toArray());

        if ($FactorOrderUser) {

            $admin = AdminSettings::find(1);

            $ProcessExit=ProcessExitProduct::where('final_factor_id',$id)->get();

            return view('portal.factor.PrintPerviewExit', [
                'FinalFactor' => $FinalFactor,
                'ProcessExit' => $ProcessExit,
                'FactorOrderUser' => $FactorOrderUser,
                'id' => $id, 'admin' => $admin
            ]);
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

            return redirect()->route('portal.Factor');

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

            $final_total = str_replace(',', '', $data['totalPriceUser']);
            $final_total_extra = str_replace(',', '', $data['totalPriceUser']) + $totalValueExtra;

            DB::beginTransaction();

            $order = new FactorUser();
            $order->userId = $data['userIdOrder'];
            $order->userIdOrdered = Auth::user()->id;

            $order->factor_status = 'waitapprove';
            $order->pay_status = $data['Paymethod'];
            $order->NoteOrder = $data['messageNote'];
            $order->final_total = $final_total;
            $order->final_total_extra = (int)$final_total_extra;

            $order->address = $data['Address'];
            $order->taxcode = $data['codetax'];
            $order->projectname = $data['nameproject'];
            $order->number_paiman = $data['number_paiman'];
            $order->extraValue = (int)$totalValueExtra;
            $order->extra_percent = $extraValue;

            $order->IP = $request->ip();
            $order->datereg = Jalalian::fromCarbon(Carbon::now())->format('%A  %d %B %Y | H:i:s ');
            $order->save();

            $order_id = DB::getPdo()->lastInsertId();

            // Generate FactorID
            $factorId = $data['userIdOrder'] . Helper::GenerateTrackingCode(5);
            $factorId = $order_id . $factorId;
            $order->update([
                'factorId' => $factorId
            ]);

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

                Smsirlaravel::ultraFastSend([
                    'order_id' => $factorId,
                    'username' => Helper::getInfoUser($data['userIdOrder'])['fullname'],
                    'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %Y ')
                ], 64327, "09183732103");

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


        if ($request->extra_percent == 0) {
            $extraValue = 0;
            $totalAmount = $article->grandTotal;
        } else {
            $extraValue = (str_replace(',', '', $request->totalfactor) * ($request->extra_percent / 100));
            $totalAmount = str_replace(',', '', $article->final_total) + (int)$extraValue;

        }


        $article->update([
            'final_total_extra' => $totalAmount,
            'taxcode' => $request->taxcode,
            'number_paiman' => $request->number_paiman,
            'address' => $request->address,
            'projectname' => $request->projectname,
            'extraValue' => (int)$extraValue,
            'extra_percent' => $request->extra_percent,
            'datereg' => $request->datefactore,
            'user_id_edit' => Auth::user()->id,
        ]);

        Smsirlaravel::ultraFastSend([
            'order_id' => $article->factorId,
            'username' => Helper::getInfoUser(Auth::user()->id)['fullname'],
            'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %Y ')
        ], 64325, "09183732103");

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


            //   $extraValue = (str_replace(',', '', $request->totalfactor) * ($request->extra_percent / 100));
            //    $totalAmount = str_replace(',', '', $article->final_total) + (int)$extraValue;


            if (!empty($factor->extra_percent)) {

                $extra_percent = $factor->extra_percent;

                $totalValueExtra = $total * ($extra_percent / 100);


            } else {
                $extraValue = 0;
                $totalValueExtra = 0;
            }


            $final_total = $total;
            $final_total_extra = $total + $totalValueExtra;


            $factor->update([
                'extraValue' => $totalValueExtra,
                'final_total' => $final_total,
                'final_total_extra' => (int)$final_total_extra,
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
