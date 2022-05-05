@extends('portal.layouts.adminMaster')
@section('styles')
    <link rel="stylesheet" href="{{asset("panel/plugins/select/selectr.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab">

        <div class="container-fluid"  id="app">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">
                            ثبت گروه بندی کالای
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

                        <div class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <div class="alert alert-success" id="alert" style="display: none">

                                </div>
                                <div class="alert alert-info" id="alertnumberic" style="display: none">

                                </div>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                                            اطلاعات گروه بندی کالا
                                        </a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active" id="step1">

                                        <div class="form-group mb-3 row">

                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-4 col-form-label text-end">
                                                    عنوان گروه کالا
                                                </label>

                                                    <input class="form-control" placeholder=" عنوان گروه کالا"
                                                           type="text"
                                                           id="titleGroup">
                                                    <span v-if="allerros.titleGroup"
                                                          class="badge badge-danger topM">
                                                @{{ allerros.titleGroup[0] }}
                                                        </span>

                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                   دسته درصد کالای
                                                </label>

                                                <select id="default" name="percentgroup" class="percentgroup" >
                                                    <option value="0">
                                                       لطفا درصد کالای را وارد کنید
                                                    </option>
                                                    @foreach($percent as $itemPercent)
                                                        <option value="{{$itemPercent->id}}">
                                                            {{ $itemPercent->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                {{--  <input class="form-control" placeholder=" عنوان  کالا"
                                                         type="text"
                                                         id="titleGroup">--}}


                                            </div>
                                            <div class="col-md-3">

                                                <label for="email" class="col-lg-6 col-form-label text-end">
                                                    واحد کالا
                                                </label>

                                                <select class="form-control" id="unitPercent" name="unitPercent">

                                                    <option value="0">
                                                        لطفا واحد را انتخاب کنید
                                                    </option>
                                                    <option value="meter" >
                                                        متر
                                                    </option>
                                                    <option value="numerical" >
                                                        عدد
                                                    </option>
                                                    <option value="kilogarm" >
                                                        کیلوگرم
                                                    </option>
                                                    <option value="roll" >
                                                        رول
                                                    </option>
                                                    <option value="liter" >
                                                        لیتر
                                                    </option>
                                                </select>




                                            </div>

                                            <div class="col-md-3" style="display: none" id="weight">
                                                <label for="txtCompanyBilling"
                                                       class="col-lg-8 col-form-label text-end">
                                                   وزن کالا
                                                </label>

                                                <input class="form-control" placeholder="وزن کالا را وارد کنید"
                                                       type="text" id="weightProduct">
                                                <span v-if="allerros.weightProduct"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.weightProduct[0] }}
                                            </span>

                                            </div>

                                            <div class="col-md-3" style="display: none" id="pricepart">

                                                <label for="priceproduct" class="col-lg-6 col-form-label text-end">
                                                   قیمت کالا
                                                </label>

                                                <input class="form-control currency1" placeholder="قیمت کالا را وارد کنید"
                                                       type="text"
                                                       id="priceproduct">
                                                <span v-if="allerros.priceproduct"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.priceproduct[0] }}
                                            </span>


                                            </div>

                                            <div class="col-md-3">
                                                <label for="txtLastNameBilling"
                                                       class="col-lg-8 col-form-label text-end">
                                                    وضعیت انتشار گروه کالای
                                                </label>

                                                <div class="form-check form-switch form-switch-success font-30">
                                                    <input id="statususer"   class="form-check-input" type="checkbox" id="customSwitchSuccess"  data-on="active" data-off="inactive"  >

                                                </div>

                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="button" id="step4Finish" class="btn btn-danger float-end"
                                                    @click="NewProductGroup()">
                                                ثبت گروه کالا
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div>

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


    <script>
        var cleaveC = new Cleave('.currency1', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });
        $("#unitPercent").change(function(){
            var value=$("#unitPercent option").filter(":selected").val();

            if(value =='meter'){

                $("#alert").fadeIn();
                $("#weight").show();
                $("#alert").html("فرمول محاسبه قیمت گروه کالای برحسب متر : درصد تخفیف با احتساب درصد با افرزش افزوده * وزن  می باشد ")
            }
            else if(value =='numerical'){

                $("#alert").fadeOut();
                $("#weight").hide();

                $("#pricepart").show();
                $("#alertnumberic").fadeIn();
                $("#alertnumberic").html("فرمول محاسبه قیمت گروه کالای برحسب عدد :لیست قیمت * درصد + لیست قیمت محاسبه خواهد شد ");


            }
            else{
                $("#alert").fadeOut();
                $("#alertnumberic").fadeOut();
                $("#weight").hide();
                $("#pricepart").hide();
            }

        });

    </script>
@endsection





