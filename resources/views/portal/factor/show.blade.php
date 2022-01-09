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

                        <h4 class="page-title">
                            نمایش و چاپ فاکتور
                        </h4>
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
                                          نمایش و چاپ فاکتور
                                        </a>



                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane active" id="step1">
                                        <h4 class="card-title mt-3 mb-1">نمایش و چاپ فاکتور </h4>
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

                                                                        @foreach($ProductOrder as $itemCart)
                                                                            <tr>
                                                                                <td>
                                                                                    {{
    \App\Helper\Helper::getInfoUser($itemCart->userId)['fullname']
}}
                                                                                </td>
                                                                                <td>

                                                                                    <h5 class="mt-0 mb-1 font-14">
                                                                                        {{\App\Helper\Helper::getInfoProduct($itemCart->prodId)['title']}}
                                                                                    </h5>

                                                                                </td>
                                                                                <td>  {{$itemCart->productQty }}</td>
                                                                                <td>
                                                                                    {{number_format( $itemCart->prodPrice) }}
                                                                                    <span>تومان</span>

                                                                                </td>
                                                                                <td>
                                                                                    {{
   number_format( $itemCart->prodPrice * $itemCart->productQty  )
    }}
                                                                                    <span>تومان</span>
                                                                                </td>

                                                                            </tr>
                                                                        @endforeach


                                                                        <tr>
                                                                            <td colspan="2" class="border-0"></td>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    جمع فاکتور
                                                                                </b>
                                                                            </td>
                                                                            <td class="border-0 font-14 text-dark"><b>
                                                                                    {{   $Factor->grandTotal  }} تومان
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
                                                                                    {{   $Factor->grandTotal  }} تومان

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
                                                                        <small class="text-danger font-12" >
                                                                            <i data-feather="alert-triangle" ></i>
                                                                            مدت اعتبار این پیش فاکتور 1 روز میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12">
                                                                            <i data-feather="shopping-cart" ></i>
                                                                            محل تحویل درب کارخانه و هزینه حمل به عهده خریدار میباشد.

                                                                        </small>
                                                                    </li>

                                                                    <li>
                                                                        <small class="font-12 text-dark">
                                                                            <i data-feather="send" ></i>
                                                                            زمان تحویل 3 روز بعد از تایید پیش فاکتور
                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="alert-triangle" ></i>
                                                                            نحوه پرداخت نقدی میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="search" ></i>
                                                                            هزینه های بازرسی به عهده خریدار میباشد.


                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-primary">
                                                                            " شماره حساب بانک تجارت   1111050496  بنام ارسلان لطف یار شماره کارت  :
                                                                            5859831003255956  شماره شبا : IR 0601 8000 0000 0011 1105 0496"

                                                                        </small>
                                                                    </li>
                                                                </ul>
                                                            </div> <!--end col-->
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="float-none float-md-end"
                                                                     style="width: 30%;">
                                                                    <small>
                                                                      مدیر فروش شرکت : آقای ارسلان لطف یار
                                                                    </small>
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




                                                            </div>


                                                        </div>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                                                <div class="text-center">
                                                                    <small class="font-12">
                                                                        کل حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد .
                                                                    </small>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-xl-4">

                                                                <div class="float-end d-print-none mt-2 mt-md-0">



                                                                      <a href="javascript:window.print()"
                                                                         class="btn btn-de-info btn-sm">چاپ فاکتور</a>

                                                                  {{--  <a  @click="NewFactor()"
                                                                        class="btn btn-de-primary btn-sm">ثبت نهایی فاکتور</a>
                                                                    <button type="button" id="step2Prev" class="btn btn-de-danger btn-sm">
                                                                        ویرایش فاکتور
                                                                    </button>--}}

                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div>



                                        <div class="">
                                            <button type="button" id="step1Next" class="btn btn-primary float-end">
                                                بعدی
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





