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
                        <a class="nav-link " id="step1-tab" data-bs-toggle="tab" href="#step1">
                            جزئیات فاکتور صادره شده آقای
                            <b class="text text-danger">
                                {{ \App\Helper\Helper::getInfoUser($factor->user_id)['fullname']  }}
                            </b>
                        </a>

                        <a class="nav-link " id="step2-tab" data-bs-toggle="tab" href="#step2">
                          ثبت حواله خروج بصورت تکی کالا
                        </a>
                        <a class="nav-link active" id="step22-tab" data-bs-toggle="tab" href="#step22">
                         ثبت حواله خروج همگانی کالا
                        </a>
                        <a class="nav-link " id="step222-tab" data-bs-toggle="tab" href="#step222">
                          چاپ حواله
                        </a>
                       {{-- <a class="nav-link " id="step3-tab" data-bs-toggle="tab" href="#step3">
                            اعمال تخفیف

                        </a>--}}

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane" id="step1">
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
                                       class="col-lg-12 col-form-label text-justify">
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
                                       class="col-lg-3 col-form-label text-center">
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

                                <input type="text"
                                       value="{{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['projectname']}}"
                                       class="form-control"
                                       id="projectname">


                            </div>
                            <div class="col-md-3">
                                <label for="txtLastNameBilling"
                                       class="col-lg-9 col-form-label text-center">
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
                    <div class="tab-pane " id="step3">
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="card">
                                <div class="card-header bg-danger text-center">
                                    <h4 class="card-title text-white"> قیمت نهای فاکتور بدونه ارزش افزوده </h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text text-muted text-center font-30">
                                        {{\App\Helper\Helper::getInfoFactorByFID($factor->factor_id)['final_total']}}
                                    </p>
                                </div>
                                <p class="card-footer bg-light-alt m-0 text-center">
                                    قیمت نهای فاکتور بدونه ارزش افزوده
                                </p>
                            </div>
                            <div class="form-group mb-3 row">
                                <div class="col-md-3">
                                    <label for="txtFirstNameBilling"
                                           class="col-lg-6 col-form-label text-end">
                                        درصد تخفیف
                                    </label>

                                    <input class="form-control" placeholder="درصد تخفیف را وارد کنید"
                                           type="text" id="percentOff" value="">

                                </div>
                            </div>
                            <div class="col-md-3">

                                <button type="button" id="step4Finish" class="btn btn-info float-end"
                                        @click="checkCoupon({{$factor->id}})">
                                    ثبت تخفیف
                                </button>

                            </div>
                        </div>


                    </div>
                    <div class="tab-pane active " id="step2">
                        <br>
                        <br>
                        <div class="form-row">
                            <b class="text-center text-danger">

                                مشخصات اقلام کالای ثبت شده فاکتور
                                :
                                <span class="text-dark font-weight-bold">
                                    تعداد اقلام سفارش کالا


                                       {{count($getItemSubFactor)}}

                                </span>
                            </b>


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
                                    <div class="col-md-2 text-center">
                                        <label for="txtLastNameBilling"
                                               class="col-lg-12 col-form-label text-center">
                                            تعین خروج
                                        </label>

                                        <input type="hidden" value="{{$factor->factor_id}}" name="factor_id"
                                               id="factor_id">


                                        <button type="button" class="btn btn-danger view_data" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalPrimary" data-target="{{$itemFact->id}}">

                                            ثبت حواله خروج کالا

                                        </button>

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


                            <div class="modal fade" id="exampleModalPrimary" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalPrimary{{$itemFact->id}}" aria-hidden="true">
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
                                            <div class="row" id="infoItem">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
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
                                            <button type="button" class="btn btn-de-info btn-sm"
                                                    data-bs-dismiss="modal">
                                                انصراف
                                            </button>


                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                    <td>  {{ \App\Helper\Helper::getInfoProductOrder($itemProcess->product_order_id)['title']  }} </td>
                                                    <td>  {{ $itemProcess->fullname_delivery  }} </td>
                                                    <td>  {{ $itemProcess->mobile  }} </td>
                                                    <td>  {{ $itemProcess->datereg  }} </td>
                                                    <td class="text-danger font-22">
                                                        {{ $itemProcess->exit_count  }}
                                                    </td>
                                                    <td class="text-danger font-22">
                                                        {{  $itemProcess->remin_count  }}
                                                     {{--   {{
     $itemProcess->current_count !=0  ?  $itemProcess->current_count -  $itemProcess->exit_count : $itemProcess->current_count
     }}--}}

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
                    <div class="tab-pane " id="step22">

                        <br>
                        <br>


                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white text-center">
                                    ثبت حواله خروج بصورت کامل
                                </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items text-center">
                                    <button type="button" class="btn btn-success"
                                            @click="ExportAllProcess({{$factor->id}})">
                                        <i class="mdi mdi-power-off me-2"></i>
                                     ثبت حواله بصورت کامل
                                    </button>

                                </div>
                            </div>
                            <p class="card-footer bg-light-alt m-0 text-center">
                                ثبت حواله بصورت کامل
                            </p>
                        </div>




                    </div>
                    <div class="tab-pane " id="step222">

                        <br>
                        <br>


                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="card-title text-white text-center">
                                    ثبت حواله خروج بصورت کامل
                                </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items text-center">
                                    <a href="{{url('portal/Factor/PrintPreviewExit/'.$id)}}"
                                       target="_blank"
                                       class="btn btn-info btn-lg">
                                        چاپ حواله خروج
                                    </a>

                                </div>
                            </div>
                            <p class="card-footer bg-light-alt m-0 text-center">
                                ثبت حواله بصورت کامل
                            </p>
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

        $(document).ready(function () {
            $('.view_data').click(function () {

                var itemProductFinalFactor = $(this).data("target");
                var factorId = $("#factor_id").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });


                $.ajax({
                    url: '/portal/moreDetailsItemProduct',
                    method: "post",
                    data: {itemProductFinalFactor: itemProductFinalFactor, factorId: factorId},
                    success: function (data) {
                        console.log(data);

                        $('#infoItem').html(data.html);
                        $('#exampleModalPrimary').modal("show");
                    }
                });
            });
        });
    </script>


@endsection





