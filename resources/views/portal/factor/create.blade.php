@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("panel/plugins/select/selectr.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab">

        <div class="container-fluid" id="app">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">ثبت فاکتور جدید</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if(\Illuminate\Support\Facades\Session::has('error_message'))
                            <div class="alert alert-danger"
                                 style="font-size: 15pt !important; text-align: center !important; width: 100% !important;">
                                {{\Illuminate\Support\Facades\Session::get('error_message')}}
                            </div>
                        @elseif(\Illuminate\Support\Facades\Session::has('success_message'))
                            <div class="alert alert-dismissible"
                                 style="color:#ffffff !important;background-color: #00bfd6 !important;font-size: 15pt !important; text-align: center !important; width: 100% !important;">
                                {{\Illuminate\Support\Facades\Session::get('success_message')}}
                                <a href="{{url('Cart')}}">سبد خرید</a>
                            </div>
                        @endif
                        <div class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active " id="step1-tab" data-bs-toggle="tab" href="#step1">
                                            ثبت و رزرو سفارش کالا
                                        </a>
                                        <a class="nav-link " id="step2-tab" data-bs-toggle="tab" href="#step2">
                                            پیش نمایش و ثبت فاکتور
                                        </a>
                                        {{-- <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">
                                            چاپ و نمایش فاکتور
                                         </a>--}}


                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane active" id="step1">
                                        <h4 class="card-title mt-3 mb-1">ثبت و درخواست اولیه کالا </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header bg-danger">
                                                        <h4 class="card-title text-white">
                                                            انتخاب مشتری
                                                        </h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">

                                                        <select id="default" name="userId">
                                                            <option value="0">
                                                                لطفا مشتری مورد نظر را انتخاب کنید
                                                            </option>
                                                            @foreach($AllUser as $itemuser)
                                                                <option value="{{$itemuser->id}}" {{(( $orderUserId ==$itemuser->id)? 'selected' : '')}}>
                                                                    {{$itemuser->fullname}}
                                                                    | کدملی :
                                                                    {{$itemuser->codemeli}}
                                                                    | شماره موبایل :
                                                                    {{$itemuser->mobile}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden"
                                                               value="{{\Illuminate\Support\Facades\Session::has('orderUserId') ? \Illuminate\Support\Facades\Session::get('orderUserId') : 0}}" id="orderUserId" name="orderUserId" disabled>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <h4 class="card-title text-white">
                                                            کالای های در سبد خرید مشتری
                                                        </h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        @if(!empty($userCartItems))
                                                            <?php  $total_price = 0; ?>

                                                            <div class="table-responsive">
                                                                <table class="table table-striped mb-0">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>ردیف</th>
                                                                        <th>شناسه کاربری</th>
                                                                        <th> کالا</th>
                                                                        <th> قیمت کالا</th>
                                                                        <th> تعداد درخواستی</th>
                                                                        <th> تاریخ رزرو</th>
                                                                        <th class="text-end">بیشتر</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    @foreach($userCartItems as $itemCart)
                                                                        <tr>
                                                                            <td>
                                                                                {{$itemCart['id']}}
                                                                            </td>
                                                                            <td>

                                                                                @if(is_null(\App\Helper\Helper::getInfoUser($itemCart['user_id'])['fullname']))
                                                                                    {{
                 \App\Helper\Helper::getInfoUser($itemCart['user_id'])['mobile']
                 }}
                                                                                @else
                                                                                    {{   \App\Helper\Helper::getInfoUser($itemCart['user_id'])['fullname']}}
                                                                                @endif

                                                                            </td>
                                                                            <td>
                                                                                {{
      \App\Helper\Helper::getInfoProduct($itemCart['product_id'])['title']
  }}
                                                                            </td>
                                                                            <td>
                                                                                {{$itemCart['price']}}
                                                                            </td>
                                                                            <td>
                                                                                {{$itemCart['qty']}}
                                                                            </td>
                                                                            <td>
                                                                                {{$itemCart['datereg']}}
                                                                            </td>
                                                                            <td class="text-end">
                                                                               {{-- <a href="#">
                                                                                    <i
                                                                                        class="las la-pen text-secondary font-16"></i>
                                                                                </a>--}}
                                                                                <a href="#"
                                                                                   @click="DeleteCartItem( {{$itemCart['id']}})"><i
                                                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        @else
                                                            <p class="text text-danger">
                                                                <i data-feather="shopping-bag"></i>
                                                                سفارش جدیدی یافت نشد
                                                            </p>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover" id="tableExport"
                                                       style="width:100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>کاربر ثبت کننده</th>
                                                        <th> عنوان کالا</th>
                                                        <th>گروه کالا</th>
                                                        <th> تعداد موحودی انبار</th>
                                                        <th>وزن کالا</th>
                                                        <th>قیمت کالا</th>
                                                        {{--  <th> درصد گروه بندی کالا</th>--}}
                                                        {{--    <th> ارزش افزوده کالا</th>
                                                            <th> واحد کالا</th>--}}
                                                        <th> وضعیت سفارش کالا</th>
                                                        <th>اطلاعات بیشتر</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(count($existProd) > 0)
                                                        @foreach($existProd as $itemUser)
                                                            <tr>
                                                                <td>  {{$itemUser->PID}}   </td>

                                                                <td>

                                                                    @if(is_null(\App\Helper\Helper::getInfoUser($itemUser->PUserId)['fullname']))
                                                                        {{
     \App\Helper\Helper::getInfoUser($itemUser->PUserId)['mobile']
     }}
                                                                    @else
                                                                        {{   \App\Helper\Helper::getInfoUser($itemUser->PUserId)['fullname']}}
                                                                    @endif

                                                                </td>
                                                                <td>  {{$itemUser->Ptitle}}
                                                                    <a href="" class="text text-success">
                                                                        <i data-feather="edit"></i>
                                                                        ویرایش کالا
                                                                    </a>
                                                                </td>
                                                                <td>  {{   $itemUser->Gtitle  }}
                                                                    <a href="" class="text text-danger">
                                                                        <i data-feather="edit"></i>
                                                                        ویرایش گروه
                                                                    </a>
                                                                </td>
                                                                <td>  {{   $itemUser->Pcount  }}    </td>
                                                                <td>  {{$itemUser->Pweight}}    </td>
                                                                <td>
                                                                    @if(!empty($itemUser->Pprice))
                                                                        {{$itemUser->Pprice}}
                                                                    @else

                                                                        {{$itemUser->Pprice}}
                                                                    @endif
                                                                </td>
                                                                {{--   <td> % {{$itemUser->Gpercent}}    </td>
                                                                   <td> % {{$itemUser->Gfee}}    </td>--}}
                                                                {{--      <td>  {{$itemUser->Gunit}}   </td>--}}
                                                                <td>
                                                                    <input type="text"
                                                                           class="form-control text-center text-danger"
                                                                           id="qtyProduct{{$itemUser->PID}}" value="1"
                                                                           data-value="qtyProduct">
                                                                    {{--    <input type="text" class="form-control form-control-lg text-center text-success"  placeholder="" v-model="unitamount"  debounce="200"   autocomplete="off" id="unitamount{{$itemUser->PID}}" >--}}

                                                                </td>

                                                                <td>
                                                                    <a href="#" title="ثبت سفارش "
                                                                       @click="OrderProduct({{$itemUser->PID}})">
                                                                        <i data-feather="shopping-cart"></i>
                                                                    </a>
                                                                 {{--   <a @click="DeleteProduct({{$itemUser->PID}})"
                                                                       title="">
                                                                        <i data-feather="trash"></i>
                                                                    </a>--}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td> لیست گروه کالایی خالی می باشد</td>
                                                        </tr>
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="">
                                            <button type="button" id="step1Next" class="btn btn-primary float-end">
                                                بعدی
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="step2">
                                        <h4 class="card-title mt-3 mb-1">
                                            پیش نمایش و ثبت و صدور فاکتور
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-10 mx-auto">
                                                <div class="card">
                                                    <div class="card-body invoice-head">
                                                        <div class="row">
                                                            <div class="col-md-4 align-self-center">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-small" class="logo-sm me-1" height="24">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-dark"
                                                                     height="16">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-light"
                                                                     height="16">
                                                                <p class="mt-2 mb-0 text-muted">
                                                                    شرکت اندیش گستر
                                                                </p>
                                                            </div><!--end col-->
                                                            <div class="col-md-8">

                                                                <ul class="list-inline mb-0 contact-detail float-end">
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-web"></i>
                                                                            <p class="text-muted mb-0">
                                                                                http://andishgostar.com
                                                                            </p>

                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-phone"></i>
                                                                            <p class="text-muted mb-0">

                                                                                09183732103
                                                                            </p>
                                                                            <p class="text-muted ">
                                                                                08733784480
                                                                            </p>

                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-map-marker"></i>
                                                                            <p class="text-muted mb-0">ایران , سنندج</p>
                                                                            <p class="text-muted mb-0">
                                                                                میدان جهاد ابتدای شهرک کوثر شرکت اندیش
                                                                                گستر کد پستی 6616894737
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive project-invoice">
                                                                    <table class="table table-bordered mb-0">
                                                                        <thead class="thead-light">
                                                                        <tr>
                                                                            <th>سفارش مشتری</th>
                                                                            <th>کالا</th>
                                                                            <th>تعداد</th>
                                                                            <th>قیمت واحد</th>
                                                                            <th>قیمت کل</th>
                                                                        </tr><!--end tr-->
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php  $total_price = 0; ?>
                                                                        @foreach($userCartItems as $itemCart)
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="text"
                                                                                           value="{{\App\Helper\Helper::getInfoUser($itemCart['user_id'])['fullname']}}"
                                                                                           class="form-control text-danger font-14"
                                                                                           name="userIdOrder"
                                                                                           id="userIdOrder"
                                                                                           data-id="{{$itemCart['user_id']}}"
                                                                                           disabled>
                                                                                </td>
                                                                                <td>

                                                                                    <h5 class="mt-0 mb-1 font-14">
                                                                                        {{$itemCart['product']['title']}}
                                                                                    </h5>
                                                                                    <p class="mb-0 text-muted">
                                                                                        جز گروه بندی کالا »
                                                                                        {{$itemCart['product']['title']}}
                                                                                    </p>
                                                                                </td>
                                                                                <td>  {{$itemCart['qty']}}</td>
                                                                                <td>
                                                                                    {{ $itemCart['product']['price'] }}
                                                                                    <span>تومان</span>

                                                                                </td>
                                                                                <td>
                                                                                    {{
    str_replace(',','',$itemCart['product']['price']) * $itemCart['qty']
    }}
                                                                                    <span>تومان</span>
                                                                                </td>
                                                                                @php $total_price=$total_price +( str_replace(',','',$itemCart['product']['price']) * $itemCart['qty']) @endphp
                                                                            </tr>
                                                                        @endforeach


                                                                        <tr>
                                                                            <td colspan="2" class="border-0"></td>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    جمع فاکتور
                                                                                </b>
                                                                            </td>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    {{ (empty($userCartItems)) ? 0 :  number_format($total_price)}}
                                                                                    تومان
                                                                                </b>
                                                                            </td>
                                                                        </tr><!--end tr-->
                                                                        <tr>
                                                                            <th colspan="2" class="border-0"></th>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    ارزش افزوده
                                                                                </b></td>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    0
                                                                                </b>
                                                                            </td>
                                                                        </tr><!--end tr-->
                                                                        <tr class="bg-black text-white">
                                                                            <th colspan="2" class="border-0"></th>
                                                                            <td class="border-0 font-14"><b>جمع کل
                                                                                </b>
                                                                            </td>
                                                                            <td class="border-0 font-14">
                                                                                <b>
                                                                                    {{ (empty($userCartItems)) ? 0 :  number_format($total_price)}}
                                                                                    <input type="hidden"
                                                                                           class="form-control"
                                                                                           name="totalPriceUser"
                                                                                           id="totalPriceUser"
                                                                                           value="{{ (empty($userCartItems)) ? 0 :  number_format($total_price)}}">
                                                                                    <span>تومان</span>
                                                                                </b>
                                                                            </td>
                                                                        </tr><!--end tr-->
                                                                        </tbody>
                                                                    </table><!--end table-->
                                                                </div>  <!--end /div-->
                                                            </div>  <!--end col-->
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h5 class="mt-4">موارد قابل ملاحظه فاکتور :</h5>
                                                                <ul class="ps-3">
                                                                    <li>
                                                                        <small class="text-danger font-12">
                                                                            <i data-feather="alert-triangle"></i>
                                                                            مدت اعتبار این پیش فاکتور 1 روز میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12">
                                                                            <i data-feather="shopping-cart"></i>
                                                                            محل تحویل درب کارخانه و هزینه حمل به عهده
                                                                            خریدار میباشد.

                                                                        </small>
                                                                    </li>

                                                                    <li>
                                                                        <small class="font-12 text-dark">
                                                                            <i data-feather="send"></i>
                                                                            زمان تحویل 3 روز بعد از تایید پیش فاکتور
                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="alert-triangle"></i>
                                                                            نحوه پرداخت نقدی میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="search"></i>
                                                                            هزینه های بازرسی به عهده خریدار میباشد.


                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-primary">
                                                                            " شماره حساب بانک تجارت 1111050496 بنام
                                                                            ارسلان لطف یار شماره کارت :
                                                                            5859831003255956 شماره شبا : IR 0601 8000
                                                                            0000 0011 1105 0496"

                                                                        </small>
                                                                    </li>
                                                                </ul>
                                                            </div> <!--end col-->
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="float-none float-md-end"
                                                                     style="width: 30%;">
                                                                    <small> مدیر فروش : ارسلان لطف یار</small>
                                                                    <img src="assets/images/signature.png" alt=""
                                                                         class="mt-2 mb-1" height="20">
                                                                    <p class="border-top">محل امضا شرکت</p>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                        <hr>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="form-group mb-3 row">
                                                                {{--  <div class="col-md-3">
                                                                      <label for="txtFirstNameBilling"
                                                                             class="col-lg-7 col-form-label text-end">
                                                                          وضعیت  سفارش
                                                                      </label>

                                                                      <select name="OrderStatus" id="OrderStatus" class="form-control" required>
                                                                          <option value="0" >
                                                                              لطفا وضعیت سفارش را مشخص کنید
                                                                          </option>
                                                                          <option value="waitapprove">
                                                                              منتظر پرداخت
                                                                          </option>
                                                                          <option value="approved">
                                                                            تایید و پرداخت شده
                                                                          </option>
                                                                          <option value="waitpay">
                                                                           منتظر پرداخت
                                                                          </option>
                                                                          <option value="processStore">

                                                                              در حال پردازش
                                                                          </option>
                                                                          <option value="processAccount">
                                                                             پردازش در حسابداری
                                                                          </option>
                                                                          <option value="prepareSending">
                                                                             آماده ارسال و تحویل به مشتری
                                                                          </option>
                                                                          <option value="sent">
                                                                            ارسال و تحویل داده شده
                                                                          </option>
                                                                          <option value="cancel">

                                                                            لغو سفارش
                                                                          </option>

                                                                      </select>


                                                                  </div>--}}
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        عنوان پروژه
                                                                    </label>

                                                                    <input type="text" class="form-control"
                                                                           name="nameproject" id="nameproject"
                                                                           placeholder="لطفا عنوان پروژه را وارد کنید">


                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        کد اقتصادی
                                                                    </label>

                                                                    <input type="text" class="form-control"
                                                                           name="codetax" id="codetax"
                                                                           placeholder="لطفا کد اقتصادی  را وارد کنید">

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        شماره پیمان
                                                                    </label>

                                                                    <input type="text" class="form-control"
                                                                           name="number_paiman" id="number_paiman"
                                                                           placeholder="لطفا شماره پیمان   را وارد کنید">

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                       درصد ارزش افزوده
                                                                    </label>

                                                                    <input type="text" class="form-control"
                                                                           name="extraValue" id="extraValue"
                                                                           placeholder="لطفا درصد ارزش افزوده را وارد کنید">

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        آدرس
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           name="Address" id="Address"
                                                                           placeholder="لطفا آدرس را وارد کنید">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        شیوه پرداخت
                                                                    </label>

                                                                    <select name="Paymethod" id="Paymethod"
                                                                            class="form-control" required>
                                                                        <option value="0">
                                                                            لطفا شیوه پرداخت را انتخاب کنید
                                                                        </option>
                                                                        <option value="Card">
                                                                            پرداخت با کارت بانکی
                                                                        </option>
                                                                        <option value="cheque">
                                                                            چک
                                                                        </option>
                                                                        <option value="paperpay">
                                                                            فیش بانکی
                                                                        </option>


                                                                    </select>


                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="txtFirstNameBilling"
                                                                           class="col-lg-7 col-form-label text-end">
                                                                        یادداشت های سفارش
                                                                    </label>

                                                                    <textarea class="form-control" rows="5"
                                                                              id="messageNote"
                                                                              placeholder="یادداشت سفارش (اختیاری)"></textarea>

                                                                </div>


                                                            </div>


                                                        </div>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                                                <div class="text-center">
                                                                    <small class="font-12">
                                                                        کل حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ
                                                                        می باشد .
                                                                    </small>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-xl-4">

                                                                <div class="float-end d-print-none mt-2 mt-md-0">


                                                                    {{--  <a href="javascript:window.print()"
                                                                         class="btn btn-de-info btn-sm">چاپ فاکتور</a>--}}
                                                                    <a @click="NewFactor()"
                                                                       class="btn btn-de-primary btn-sm">ثبت نهایی
                                                                        فاکتور</a>
                                                                    <button type="button" id="step2Prev"
                                                                            class="btn btn-de-danger btn-sm">
                                                                        ویرایش فاکتور
                                                                    </button>

                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div>

                                        <div>
                                            <button type="button" id="step2Prev" class="btn btn-secondary float-start">

                                                قبلی
                                            </button>
                                            <button type="button" id="step2Next" class="btn btn-primary float-end">
                                                بعدی
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step3">
                                        <h4 class="card-title mt-3 mb-1"> تنظیمات حساب کاربری</h4>

                                        <div class="row">
                                            <div class="col-lg-10 mx-auto">
                                                <div class="card">
                                                    <div class="card-body invoice-head">
                                                        <div class="row">
                                                            <div class="col-md-4 align-self-center">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-small" class="logo-sm me-1" height="24">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-dark"
                                                                     height="16">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-light"
                                                                     height="16">
                                                                <p class="mt-2 mb-0 text-muted">
                                                                    شرکت اندیش گستر
                                                                </p>
                                                            </div><!--end col-->
                                                            <div class="col-md-8">

                                                                <ul class="list-inline mb-0 contact-detail float-end">
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-web"></i>
                                                                            <p class="text-muted mb-0">
                                                                                http://andishgostar.com
                                                                            </p>

                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-phone"></i>
                                                                            <p class="text-muted mb-0">

                                                                                09183732103
                                                                            </p>
                                                                            <p class="text-muted mb-0">

                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-map-marker"></i>
                                                                            <p class="text-muted mb-0">ایران , سنندج</p>
                                                                            <p class="text-muted mb-0">
                                                                                میدان جهاد ابتدای شهرک کوثر شرکت اندیش
                                                                                گستر کد پستی 6616894737
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body">
                                                        <div class="row row-cols-3 d-flex justify-content-md-between">
                                                            <div class="col-md-3 d-print-flex">
                                                                <div class="">
                                                                    <h6 class="mb-0"><b>Order Date :</b> 11/05/2021</h6>
                                                                    <h6><b>Order ID :</b> # 23654789</h6>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-md-3 d-print-flex">
                                                                <div class="">
                                                                    <address class="font-13">
                                                                        <strong class="font-14">Billed To :</strong><br>
                                                                        Joe Smith<br>
                                                                        795 Folsom Ave<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                                                    </address>
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-md-3 d-print-flex">
                                                                <div class="">
                                                                    <address class="font-13">
                                                                        <strong class="font-14">Shipped To:</strong><br>
                                                                        Joe Smith<br>
                                                                        795 Folsom Ave<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                                                    </address>
                                                                </div>
                                                            </div> <!--end col-->
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive project-invoice">
                                                                    <table class="table table-bordered mb-0">
                                                                        <thead class="thead-light">
                                                                        <tr>
                                                                            <th>Project Breakdown</th>
                                                                            <th>Hours</th>
                                                                            <th>Rate</th>
                                                                            <th>Subtotal</th>
                                                                        </tr><!--end tr-->
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <h5 class="mt-0 mb-1 font-14">Project
                                                                                    Design</h5>
                                                                                <p class="mb-0 text-muted">It is a long
                                                                                    established fact that a reader will
                                                                                    be distracted.</p>
                                                                            </td>
                                                                            <td>60</td>
                                                                            <td>$50</td>
                                                                            <td>$3000.00</td>
                                                                        </tr><!--end tr-->
                                                                        <tr>
                                                                            <td>
                                                                                <h5 class="mt-0 mb-1 font-14">
                                                                                    Development</h5>
                                                                                <p class="mb-0 text-muted">It is a long
                                                                                    established fact that a reader will
                                                                                    be distracted.</p>
                                                                            </td>
                                                                            <td>100</td>
                                                                            <td>$50</td>
                                                                            <td>$5000.00</td>
                                                                        </tr><!--end tr-->
                                                                        <tr>
                                                                            <td>
                                                                                <h5 class="mt-0 mb-1 font-14">Testing &
                                                                                    Bug Fixing</h5>
                                                                                <p class="mb-0 text-muted">It is a long
                                                                                    established fact that a reader will
                                                                                    be distracted.</p>
                                                                            </td>
                                                                            <td>10</td>
                                                                            <td>$20</td>
                                                                            <td>$200.00</td>
                                                                        </tr><!--end tr-->

                                                                        <tr>
                                                                            <td colspan="2" class="border-0"></td>
                                                                            <td class="border-0 font-14 text-dark"><b>Sub
                                                                                    Total</b></td>
                                                                            <td class="border-0 font-14 text-dark"><b>$82,000.00</b>
                                                                            </td>
                                                                        </tr><!--end tr-->
                                                                        <tr>
                                                                            <th colspan="2" class="border-0"></th>
                                                                            <td class="border-0 font-14 text-dark"><b>Tax
                                                                                    Rate</b></td>
                                                                            <td class="border-0 font-14 text-dark"><b>$0.00%</b>
                                                                            </td>
                                                                        </tr><!--end tr-->
                                                                        <tr class="bg-black text-white">
                                                                            <th colspan="2" class="border-0"></th>
                                                                            <td class="border-0 font-14"><b>Total</b>
                                                                            </td>
                                                                            <td class="border-0 font-14">
                                                                                <b>$82,000.00</b></td>
                                                                        </tr><!--end tr-->
                                                                        </tbody>
                                                                    </table><!--end table-->
                                                                </div>  <!--end /div-->
                                                            </div>  <!--end col-->
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h5 class="mt-4">Terms And Condition :</h5>
                                                                <ul class="ps-3">
                                                                    <li><small class="font-12">All accounts are to be
                                                                            paid within 7 days from receipt of
                                                                            invoice. </small></li>
                                                                    <li><small class="font-12">To be paid by cheque or
                                                                            credit card or direct payment
                                                                            online.</small></li>
                                                                    <li><small class="font-12"> If account is not paid
                                                                            within 7 days the credits details supplied
                                                                            as confirmation of work undertaken will be
                                                                            charged the agreed quoted fee noted
                                                                            above.</small></li>
                                                                </ul>
                                                            </div> <!--end col-->
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="float-none float-md-end"
                                                                     style="width: 30%;">
                                                                    <small>Account Manager</small>
                                                                    <img src="assets/images/signature.png" alt=""
                                                                         class="mt-2 mb-1" height="20">
                                                                    <p class="border-top">Signature</p>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                        <hr>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                                                <div class="text-center"><small class="font-12">Thank
                                                                        you very much for doing business with
                                                                        us.</small></div>
                                                            </div><!--end col-->
                                                            <div class="col-lg-12 col-xl-4">
                                                                <div class="float-end d-print-none mt-2 mt-md-0">
                                                                    <a href="javascript:window.print()"
                                                                       class="btn btn-de-info btn-sm">Print</a>
                                                                    <a href="#"
                                                                       class="btn btn-de-primary btn-sm">Submit</a>
                                                                    <a href="#"
                                                                       class="btn btn-de-danger btn-sm">Cancel</a>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div>

                                        <div>
                                            <button type="button" id="step2Prev" class="btn btn-secondary float-start">

                                                قبلی
                                            </button>
                                            <button type="button" id="step4Finish" class="btn btn-danger float-end"
                                                    @click="NewCustomer()">
                                                ثبت
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            طراحی توسعه سیوان گنجی
            <span class="text-muted d-none d-sm-inline-block float-end">

             کلیه حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد


            </span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
@endsection

@section('scripts')

    <script src="{{asset("panel/pages/form-wizard.js")}}"></script>
    <script src="{{asset("panel/plugins/select/selectr.min.js")}}"></script>
    <script src="{{asset("panel/pages/forms-advanced.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("panel/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.js")}}"></script>

@endsection





