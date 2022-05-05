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
                            جزئیات فاکتور صادره شده آقای
                            <b>
                                {{  \App\Helper\Helper::getInfoUser($factor->user_id)['fullname']  }}
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
                            جزئیات فاکتور صادره شده آقای
                            <b class="text text-danger">
                                {{ \App\Helper\Helper::getInfoUser($factor->user_id)['fullname']  }}
                            </b>
                        </a>
                        <a class="nav-link " id="step2-tab" data-bs-toggle="tab" href="#step2">
                            ثبت حواله خروج کالا
                        </a>


                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active" id="step1">
                        <br>
                        <br>
                        <div class="form-group mb-3 row">
                            <div class="col-md-3">
                                <label for="txtFirstNameBilling"
                                       class="col-lg-6 col-form-label text-end">
                                    شناسه فاکتور
                                </label>

                                <input class="form-control" placeholder=" شناسه فاکتور"
                                       type="text" id="titleProduct" value="{{$factor->factor_id}}" disabled>

                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-8 col-form-label text-end">
                                    مبلغ فاکتور بدونه احتساب ارزش افزوده
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['final_total']}}"
                                       class="form-control"
                                       id="totalfactor">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-12 col-form-label text-center">
                                    درصد ارزش افزوده
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['extra_percent']}}"
                                       class="form-control"
                                       id="extra_percent" name="extra_percent">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-8 col-form-label text-end">
                                    مبلغ فاکتور با ارزش افزوده
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['final_total_extra']}}"
                                       class="form-control"
                                       id="final_total_extra" disabled>


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-12 col-form-label text-center">
                                    مبلغ ارزش افزوده
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['extraValue']}}"
                                       class="form-control" id="extraValue"
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
                                       class="col-lg-3 col-form-label text-end">
                                    عنوان پروژه
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['projectname']}}"
                                       class="form-control"
                                       id="projectname">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    کد اقتصادی
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['taxcode']}}"
                                       class="form-control" id="taxcode">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-6 col-form-label text-end">
                                    شماره پیمان
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['number_paiman']}}"
                                       class="form-control"
                                       id="number_paiman">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-3 col-form-label text-end">
                                    آدرس
                                </label>

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['address']}}"
                                       class="form-control" id="address">


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
                        <div class="text-center">
                            <button type="button" id="step4Finish" class="btn btn-info float-end"
                                    @click="EditFactor({{$factor->id}})">
                                ویرایش فاکتور
                            </button>
                        </div>


                    </div>
                    <div class="tab-pane " id="step2">
                        <br>
                        <br>
                        <div class="form-row">
                            <b class="text-center text-danger">

                                مشخصات اقلام کالای ثبت شده فاکتور
                                :
                                <span class="text-dark">
                                    تعداد سفارش شده
                                {{count($getItemSubFactor)}}
                                </span>
                            </b>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalPrimary">

                                ثبت حواله خروج
                            </button>

                            <div class="modal fade" id="exampleModalPrimary" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalPrimary1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">
                                                ثبت حواله خروج کالا
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-12">
                                                    <h5>
                                                        ثبت حواله خروج کالا از انبار و تحویل به مشتری
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
                                                                           value="{{old('fullnameDelivery')}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="mobileDelivery">شماره موبایل گیرنده
                                                                    (اختیاری)</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                           name="mobileDelivery" id="mobileDelivery"
                                                                           placeholder=" شماره موبایل گیرنده (اختیاری)"
                                                                           value="{{old('mobileDelivery')}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="productExitId">
                                                                    انتخاب کالا جهت خروج
                                                                </label>
                                                                <div class="input-group mb-3">
                                                                    <select name="productExitId" id="productExitId"
                                                                            class="form-control">
                                                                        <option value="0">لطفا اقلام کالا را انتخاب
                                                                            کنید
                                                                        </option>
                                                                        @foreach($getItemSubFactor as $itemFact)
                                                                            <option value="{{$itemFact->id}}">
                                                                                {{$itemFact->prodname}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="requestCountItem">
                                                                    تعداد خروج کالا
                                                                    (تعداد سفارش اقلام <b class="text-danger">
                                                                        ({{$itemFact->productQty}})
                                                                    </b>)
                                                                </label>

                                                                <input type="hidden" name="currentQtyItem"
                                                                       id="currentQtyItem"
                                                                       value="{{$itemFact->productQty}}">
                                                                <input type="hidden" name="finalFactor" id="finalFactor"
                                                                       value="{{ $id}}">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control"
                                                                           name="requestCountItem" id="requestCountItem"
                                                                           placeholder="تعداد حواله خروج کالا  را وارد کنید">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-group mb-0 row">
                                                            <div class="col-12 mt-2">
                                                                <div class="d-grid">
                                                                    <button class="btn btn-primary btn-block"
                                                                            @click="addProcessExit()"
                                                                            type="button">
                                                                        ثبت خروج کالا

                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-de-info btn-sm"
                                                    data-bs-dismiss="modal">
                                                انصراف
                                            </button>


                                        </div>
                                    </div>
                                </div>
                            </div>


                            @foreach($getItemSubFactor as $itemFact)
                                <div class="form-group mb-3 row">
                                    <div class="col-md-3 text-center">
                                        <label for="txtFirstNameBilling"
                                               class="col-lg-3 col-form-label text-end">
                                            عنوان کالا
                                        </label>

                                        <input class="form-control" placeholder="{{$itemFact->prodname}}"
                                               type="text"
                                               id="titleProduct" value="{{$itemFact->prodname}}" disabled>

                                    </div>
                                    <div class="col-md-2 text-center">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-12 col-form-label text-center">
                                            قیمت واحد کالا
                                        </label>

                                        <input type="text" value="{{$itemFact->prodPrice}}" class="form-control"
                                               disabled>


                                    </div>
                                    <div class="col-md-2 text-center">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-12 col-form-label text-center">
                                            تعداد سفارش
                                        </label>

                                        <input type="text" value="{{$itemFact->productQty}}"
                                               class="form-control text-center"
                                               id="QtyOrder{{$itemFact->id}}" disabled>

                                    </div>


                                    {{--<div class="col-md-1">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-12 col-form-label text-end">
                                            خروج اول
                                        </label>
                                        <input type="text" value="{{$itemFact->productQty}}" class="form-control"
                                               id="QtyOrder{{$itemFact->id}}">
                                        <button type="button" class="btn btn-primary float-end"
                                                @click="EditCountItemFactor({{$itemFact->id}})">
                                          ثبت خروج
                                        </button>
                                    </div>
--}}


                                </div>
                            @endforeach

                        </div>

                        <div class="form-row">
                            <div class="card-body">
                                <p>
                                    خروج های ثبت شده جاری
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th> کالا</th>
                                            <th> تحویل گیرنده</th>
                                            <th> شماره تماس تحویل گیرنده</th>
                                            <th> تاریخ ثبت خروج</th>
                                            <th> تعداد خروج</th>
                                            <th> تعداد مانده خروج</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($getInfoProcessProduct) > 0)
                                            @foreach($getInfoProcessProduct as $itemProcess)
                                            <tr class="text-center text-justify">
                                                <td>  {{ $itemProcess->id  }} </td>
                                                <td>  {{ $itemProcess->product_order_id  }} </td>
                                                <td>  {{ $itemProcess->fullname_delivery  }} </td>
                                                <td>  {{ $itemProcess->mobile  }} </td>
                                                <td>  {{ $itemProcess->datereg  }} </td>
                                                <td class="text-danger font-22">
                                                    {{ $itemProcess->exit_count  }}
                                                </td>
                                                <td class="text-danger font-22">
                                                    {{ $itemProcess->current_count -  $itemProcess->exit_count  }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>

        </div><!-- container -->


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





