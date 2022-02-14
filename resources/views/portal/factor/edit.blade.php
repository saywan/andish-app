@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab" >

        <div class="container-fluid" id="app">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">
                            ویرایش فاکتور مشتری »
                        </h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <form action="#" method="post" id="custom-step">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab">
                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                            ویرایش فاکتور مشتری »

                            <b class="text text-danger">
                                {{ \App\Helper\Helper::getInfoUser($factor->userId)['fullname']  }}
                            </b>
                        </a>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active" id="step1">

                        <div class="form-group mb-3 row">
                            <div class="col-md-6">
                                <label for="txtFirstNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    شناسه فاکتور
                                </label>

                                <input class="form-control" placeholder=" شناسه فاکتور  "
                                       type="text"
                                       id="titleProduct" value="{{$factor->factorId}}" disabled>

                            </div>
                            <div class="col-md-6">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    مبلغ فاکتور
                                </label>

                                <input type="text" value="{{$factor->subtotal}}" class="form-control" id="totalfactor">


                            </div>
                            <div class="col-md-6">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    تاریخ
                                </label>

                                <input type="text" value="{{$factor->datereg}}" class="form-control" id="totalfactor">


                            </div>

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

                                @foreach($FactorItem as $itemFact)
                                <div class="form-group mb-3 row">
                                    <div class="col-md-3">
                                        <label for="txtFirstNameBilling"
                                               class="col-lg-3 col-form-label text-end">
                                            عنوان کالا
                                        </label>

                                        <input class="form-control" placeholder="{{$itemFact->prodname}}"
                                               type="text"
                                               id="titleProduct" value="{{$itemFact->prodname}}" disabled>

                                    </div>
                                    <div class="col-md-3">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-3 col-form-label text-end">
                                        قیمت واحد کالا
                                        </label>

                                        <input type="text" value="{{$itemFact->prodPrice}}" class="form-control" >


                                    </div>
                                    <div class="col-md-3">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-3 col-form-label text-end">
                                       تعداد سفارش
                                        </label>

                                        <input type="text" value="{{$itemFact->productQty}}" class="form-control" id="QtyOrder{{$itemFact->id}}">
                                        <button type="button"  class="btn btn-primary float-end"
                                                @click="EditCountItemFactor({{$itemFact->id}})">
                                            ویرایش تعداد کالا
                                        </button>
                                    </div>

                                </div>
                                @endforeach

                        </div>

                        <div class="text-center">
                            <button type="button" id="step4Finish" class="btn btn-info float-end"
                                    @click="EditFactor({{$factor->id}})">
                                ویرایش فاکتور
                            </button>
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


@endsection





