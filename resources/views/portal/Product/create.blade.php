@extends('portal.layouts.adminMaster')
@section('styles')
    <link rel="stylesheet" href="{{asset("panel/plugins/select/selectr.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">ثبت کالای جدید</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card" id="app">

                        <div class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                                            اطلاعات کالا
                                        </a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active" id="step1">

                                        <div class="form-group mb-3 row">
                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                    عنوان کالا
                                                </label>

                                                <select id="default" name="titleProduct" class="titleProduct">
                                                    <option value="0">
                                                        لطفا کالا مورد نظر را انتخاب کنید
                                                    </option>
                                                    @foreach($GroupProd as $itemGroup)
                                                        <option value="{{$itemGroup->id}}">
                                                            {{ $itemGroup->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                {{--  <input class="form-control" placeholder=" عنوان  کالا"
                                                         type="text"
                                                         id="titleGroup">--}}


                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtLastNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                    دسته تخفیف
                                                </label>

                                                <select name="PercentGroup" id="PercentGroup" class="form-control"
                                                        required>
                                                    <option value="0">
                                                        لطفا دسته تخفیف را انتخاب کنید
                                                    </option>
                                                    @if(count($ProdPercent) > 0)
                                                        @foreach($ProdPercent as $itemGorup)
                                                            <option value="{{$itemGorup->id}}">
                                                                {{$itemGorup->title}}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>


                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtCompanyBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                    تعداد موجودی در انبار
                                                </label>

                                                <input class="form-control" placeholder="تعداد موجودی در انبار"
                                                       type="text" id="countProduct">


                                            </div>
                                            <div class="col-md-3">

                                                <label for="email" class="col-lg-7 col-form-label text-end">
                                                    واحد کالا
                                                </label>

                                                <input class="form-control" placeholder=" واحد  کالا"
                                                       type="text"
                                                       id="unitProduct" disabled>


                                            </div>
                                            {{--<div class="col-md-3">

                                                <label for="email" class="col-lg-7 col-form-label text-end">
                                                    وزن
                                                </label>

                                                <input class="form-control" placeholder=" وزن  کالا"
                                                       type="text"
                                                       id="weightProduct">


                                            </div>--}}
                                            <div class="col-md-3">

                                                <label for="email" class="col-lg-7 col-form-label text-end">
                                                    قیمت کالا
                                                </label>

                                                <input class="form-control" placeholder=" قیمت  کالا"
                                                       type="text"
                                                       id="priceProduct" disabled>

                                                <span id="numberToWord">

                                                </span>

                                            </div>
                                            <div class="col-md-6">

                                                <label for="email" class="col-lg-7 col-form-label text-end">
                                                    بارگذاری تصویر کالا
                                                </label>

                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02"
                                                           v-on:change="onImageChangeFile">
                                                    <label class="input-group-text" for="inputGroupFile02">انتخاب تصویر
                                                        کالا</label>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">

                                            <div class="col-md-12">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                    توضیحات کالا
                                                </label>
                                                <textarea id="basic-conf" name="address" rows="4" dir="rtl"
                                                          class="form-control">

                                                        </textarea>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-12 col-form-label text-end">
                                                    وضعیت نمایش کالا در فروشگاه
                                                </label>

                                                <div class="form-check form-switch">
                                                    <div class="form-check form-switch form-switch-success font-30">
                                                        <input id="statususer" class="form-check-input" type="checkbox"
                                                               id="customSwitchSuccess" data-on="active"
                                                               data-off="inactive">

                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <button type="button" id="step4Finish" class="btn btn-danger float-end"
                                                    @click="NewProduct()">
                                                ثبت کالا
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
    <script src="{{asset("panel/plugins/tinymce/tinymce.min.js")}}"></script>
    <script src="{{asset("panel/pages/form-editor.init.js")}}"></script>
    <script src="{{asset("panel/js/persian-tools.umd.js")}}"></script>
    <script type="text/javascript">

        $("#PercentGroup").change(function () {

            /*  var option = $(this).find('option:selected');
              var value = option.val();
              var text = option.text();*/

            var PercentGroupId = $("#PercentGroup option").filter(":selected").val();
            var ProductId = $('select[name="titleProduct"]').find(":selected").val();
            if(ProductId == 0)
            {
                iziToast.error({
                    title: 'کالا',
                    message: 'لطفا کالا مورد نظر را انتخاب کنید',
                    position: 'topLeft'
                });
                return  false;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '/portal/getPriceProduct',
                data: {'action': 'getPriceProduct', 'ProductId': ProductId, 'PercentGroupId': PercentGroupId},
                success: function (data) {
                    if (data.status == 200) {
                        /*   swal("وضعیت نمایش ", "وضعیت نمایش به روز رسانی شد", "success", {
                               button: "باشه"
                           });*/
                      //  $("#priceProduct").val(data.result);
                       // $("#priceProduct").val(PersianJs(data.result).digitsToWords());

                      /*  let sign = prompt("Number ");

                        if (sign) {
                            alert(PersianTools.numberToWords(sign));
                        }*/

                       // console.log(PersianTools.numberToWords("3720497501"));

                        $("#priceProduct").val(data.result );

                        if(data.unit !='متر')
                        {
                            $("#numberToWord").append(PersianTools.numberToWords(data.result) + ' تومان ');
                        }


                        $("#unitProduct").val(data.unit);
                       /* Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'وضعیت حساب کاربری با موفقیت به روز رسانی شد',
                            showConfirmButton: true,
                        })*/

                     /*   setTimeout(function () {
                            window.location.reload();
                        }, 3000);*/
                    } else {
                        swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                            button: "باشه"
                        });
                    }
                }
            });


        });

    </script>
@endsection





