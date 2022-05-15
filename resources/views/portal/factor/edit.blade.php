@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("panel/css/persian-datepicker.css")}}">
@endsection

@section('main')

    <div class="page-content-tab">

        <div class="container-fluid" id="app">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title alert alert-success">
                            ویرایش پیش فاکتور آقای »
                            <b>
                                {{  \App\Helper\Helper::getInfoUser($factor->userId)['fullname']  }}
                            </b>
                        </h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <br>
            <br>

            <!-- end page title end breadcrumb -->
            <form action="#" method="post" id="custom-step">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab">
                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                            ویرایش پیش فاکتور آقای »
                            <b class="text text-danger">
                                {{ \App\Helper\Helper::getInfoUser($factor->userId)['fullname']  }}
                            </b>
                        </a>
                        <a class="nav-link " id="step2-tab" data-bs-toggle="tab" href="#step2">
                            حذف اقلام از فاکتور
                        </a>
                        <a class="nav-link " id="step3-tab" data-bs-toggle="tab" href="#step3">
                            ثبت اقلام جدید به فاکتور
                        </a>
                        <a class="nav-link " id="step4-tab" data-bs-toggle="tab" href="#step4">
                            صدور پیش فاکتور
                        </a>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active" id="step1">

                        <div class="form-group mb-3 row">
                            <div class="col-md-3">
                                <label for="txtFirstNameBilling"
                                       class="col-lg-6 col-form-label text-end">
                                    شناسه فاکتور
                                </label>

                                <input class="form-control" placeholder=" شناسه فاکتور"
                                       type="text" id="titleProduct" value="{{$factor->factorId}}" disabled>

                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-12 col-form-label text-center">

                                    مبلغ فاکتور بدونه احتساب ارزش افزوده
                                </label>

                                <input type="text" value="{{$factor->final_total}}" class="form-control"
                                       id="totalfactor">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-12 col-form-label text-center">
                                    درصد ارزش افزوده
                                </label>

                                <input type="text" value="{{$factor->extra_percent}}" class="form-control"
                                       id="extra_percent" name="extra_percent">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-8 col-form-label text-end">
                                    مبلغ فاکتور با ارزش افزوده
                                </label>

                                <input type="text" value="{{$factor->final_total_extra}}" class="form-control"
                                       id="final_total_extra" disabled>


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-12 col-form-label text-center">
                                    مبلغ ارزش افزوده
                                </label>

                                <input type="text" value="{{$factor->extraValue}}" class="form-control" id="extraValue"
                                       name="extraValue" disabled>


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    تاریخ
                                </label>

                                <input type="text" value="{{$factor->datereg}}"
                                       class="form-control initial-value-example1" id="datefactore">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-9 col-form-label text-center">
                                    عنوان پروژه
                                </label>

                                <input type="text" value="{{$factor->projectname}}" class="form-control"
                                       id="projectname">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-9 col-form-label text-center">
                                    کد اقتصادی
                                </label>

                                <input type="text" value="{{$factor->taxcode}}" class="form-control" id="taxcode">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-6 col-form-label text-end">
                                    شماره پیمان
                                </label>

                                <input type="text" value="{{$factor->number_paiman}}" class="form-control"
                                       id="number_paiman">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    آدرس
                                </label>

                                <input type="text" value="{{$factor->address}}" class="form-control" id="address">


                            </div>


                            {{--  <div class="col-md-3">
                                  <label for="txtLastNameBilling"
                                         class="col-lg-4 col-form-label text-end">
                                     مقدار بدهی
                                  </label>

                                  <input type="text" value="{{$factor->Previous_debt}}" class="form-control"  id="Previous_debt" name="Previous_debt">



                              </div>--}}
                        </div>
                        <hr>
                        <div class="form-row">
                            <b class="text-center text-danger">

                                مشخصات کالا سفارش شده
                                :
                                <span class="text-dark">
                                     تعداد کل کالا
                                {{count($FactorItem)}}
                                </span>
                            </b>

                            @php $total_price=0; @endphp
                            @foreach($FactorItem as $itemFact)
                                <div class="form-group mb-3 row">
                                    <div class="col-md-3">
                                        <label for="txtFirstNameBilling"
                                               class="col-lg-6 col-form-label text-end">
                                            عنوان کالا
                                        </label>

                                        <input class="form-control" placeholder="{{$itemFact->prodname}}"
                                               type="text"
                                               id="titleProduct" value="{{$itemFact->prodname}}" disabled>

                                    </div>
                                    <div class="col-md-3">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-6 col-form-label text-center">
                                            قیمت واحد کالا
                                        </label>

                                        <input type="text" value="{{$itemFact->prodPrice}}" class="form-control" disabled>


                                    </div>

                                    <div class="col-md-3">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-6 col-form-label text-center">
                                            تعداد سفارش

                                        </label>

                                        <input type="text" value="{{$itemFact->productQty}}" class="form-control"
                                               id="QtyOrder{{$itemFact->id}}">
                                        <button type="button" class="btn btn-primary float-end mt-2"
                                                @click="EditCountItemFactor({{$itemFact->id}})">
                                            ویرایش تعداد کالا
                                        </button>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-12 col-form-label text-center">
                                            قیمت با احتساب تعداد سفارش
                                        </label>

                                        <input type="text" disabled
                                               value="{{$itemFact->productQty *  $itemFact->prodPrice}}"
                                               class="form-control">

                                    </div>

                                </div>
                                @php $total_price=$total_price +( $itemFact->productQty *  $itemFact->prodPrice ) @endphp
                            @endforeach

                            <hr>


                            <div class="card">
                                <div class="card-header bg-danger text-center">
                                    <h4 class="card-title text-white"> قیمت نهایی   تمام شده </h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text text-muted text-center font-30">
                                        {{number_format($factor->final_total_extra)}}
                                    </p>
                                </div><!--end card-body-->
                                <p class="card-footer bg-light-alt m-0 text-center">
                                    قیمت نهایی  تمام شده
                                </p>
                            </div>


                        </div>

                        <div class="text-center">
                            <button type="button" id="step4Finish" class="btn btn-info float-end"
                                    @click="EditFactor({{$factor->id}})">
                                ویرایش فاکتور
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane " id="step2">
                        <div class="card">
                            <div class="card-header bg-danger text-center">
                                <h4 class="card-title text-white"> قیمت نهای فاکتور با اقلام</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted text-center font-30">
                                    {{number_format($total_price)}}
                                </p>
                            </div><!--end card-body-->
                            <p class="card-footer bg-light-alt m-0 text-center">
                                قیمت نهای فاکتور با اقلام
                            </p>
                        </div>
                        <div class="form-group mb-3 row">
                            <div class="card-body">

                                @if(!empty($FactorItem))
                                    <div class="table-responsive col-md-10">
                                        <table class="table table-striped mb-0 text-center">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th> کالا</th>
                                                <th> قیمت کالا</th>
                                                <th> تعداد درخواستی</th>
                                                <th> قیمت کل</th>
                                                <th> تاریخ رزرو</th>
                                                <th class="text-end">بیشتر</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($FactorItem as $itemCart)
                                                <tr>
                                                    <td>
                                                        {{$itemCart->id}}
                                                    </td>
                                                    <td>
                                                        {{$itemCart->prodname}}
                                                    </td>
                                                    <td>
                                                        {{$itemCart->prodPrice}}
                                                    </td>
                                                    <td>
                                                        {{$itemCart->productQty}}
                                                    </td>
                                                    <td>
                                                        {{number_format($itemCart->productQty * $itemCart->prodPrice)}}
                                                    </td>
                                                    <td>
                                                        {{$itemCart->datereg}}
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" @click="DeleteCartItemFactor( {{$itemCart['id']}})">

                                                            <i data-feather="trash" class="text-danger font-16"></i>
                                                        </a>
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
                        <hr>
                    </div>
                    <div class="tab-pane " id="step3">

                        <div class="row">


                            <div class="table-responsive">
                                <br>
                                <br>
                                <br>
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
                                        <th> تعداد سفارش کالا</th>
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

                                                </td>
                                                <td>  {{   $itemUser->Gtitle  }}

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
                                                <td>
                                                    <input type="text"
                                                           class="form-control text-center text-danger"
                                                           id="qtyProduct{{$itemUser->PID}}" value="1"
                                                           data-value="qtyProduct">

                                                </td>

                                                <td>
                                                    <input type="hidden" value="{{$factor->id}}" id="factorId"
                                                           name="factorId">
                                                    <a href="#" title="ثبت سفارش "
                                                       @click="OrderProductToFactor({{$itemUser->PID}},{{$factor->userId}})">
                                                        <i data-feather="shopping-cart"
                                                           class="text-success font-16"></i>
                                                    </a>
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

                    </div>
                    <div class="tab-pane " id="step4">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-header bg-primary">
                                        <h4 class="card-title text-white">
                                            وضعیت فاکتور : پیش فاکتور
                                        </h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <p class="card-text text-muted">
                                            فاکتور فعلی در وضعیت پیش فاکتور قرار گرافته جهت اطمینان و صحت اقلام کالا از
                                            سمت مشتری فاکتور مورد نظر را می توانید نهایی و صادر کنید
                                        </p>
                                    </div><!--end card-body-->
                                    <p class="card-footer bg-light-alt m-0">
                                        پیش فاکتور
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="card-title text-white">
                                            دسترسی
                                        </h4>
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <div class="button-items text-center">
                                            <button type="button" class="btn btn-success"
                                                    @click="ExportFactor({{$factor->factorId}})">
                                                <i class="mdi mdi-check-all me-2"></i>
                                                ثبت و صدور فاکتور رسمی
                                            </button>

                                        </div>
                                    </div>
                                    <p class="card-footer bg-light-alt m-0">
                                        پیش فاکتور
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </form>

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
            </div>
        </div>

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

    </div>

@endsection

@section('scripts')
    {{--   <script src="{{asset("panel/plugins/tabulator/tabulator.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/xlsx.full.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.plugin.autotable.js")}}"></script>
       <script src="{{asset("panel/pages/datatable.init.js")}}"></script>--}}
    <script src="{{asset("panel/js/datepicker.js")}}"></script>
    <script src="{{asset("panel/js/persian-date.js")}}"></script>
    <script src="{{asset("panel/js/persian-datepicker.js")}}"></script>

    <script src="{{asset("panel/plugins/datatables/datatables.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("panel/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.js")}}"></script>

    <script type="text/javascript">
        $('.initial-value-example1').persianDatepicker({
            initialValue: false
        });


    </script>
@endsection





