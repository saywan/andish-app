@extends('portal.layouts.adminMaster')
@section('styles')

@endsection

@section('main')

    <div class="page-content-tab" >

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">ثبت درصد  جدید</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row" id="app">
                <div class="col-12">
                    <div class="card">

                        <div class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="alert alert-danger" id="alert" style="display: none">


                                    </div>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                                            اطلاعات درصد  کالا
                                        </a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active" id="step1">

                                        <div class="form-group mb-3 row">
                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-4 col-form-label text-end">
                                                        عنوان درصد
                                                </label>

                                                    <input class="form-control" placeholder=" عنوان  درصد "
                                                           type="text"
                                                           id="titlePercent">
                                                    <span v-if="allerros.titlePercent"
                                                          class="badge badge-danger topM">
                                                @{{ allerros.titlePercent[0] }}
                                                        </span>

                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtLastNameBilling"
                                                       class="col-lg-4 col-form-label text-end">
                                                  مقدار درصد
                                                </label>

                                                    <input class="form-control currency1" placeholder="  مقدار درصد"
                                                           type="text"
                                                           id="percentProduct" >
                                                <div id="demo_out1"></div>
                                                    <span v-if="allerros.percentProduct"
                                                          class="badge badge-danger topM">
                                                @{{ allerros.percentProduct[0] }}
                                            </span>

                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtCompanyBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                 ارزش افزوده
                                                </label>

                                                <div class="input-group">
                                                    <div class="input-group-text">%</div>
                                                    <input class="form-control" placeholder="ارزش افزوده"
                                                           type="text" id="feeGroup" v-model="feeGroup">
                                                    <span v-if="allerros.feeGroup"
                                                          class="badge badge-danger topM">
                                                @{{ allerros.feeGroup[0] }}
                                            </span>

                                                </div>


                                            </div>
                                            <div class="col-md-3">

                                                <label for="email" class="col-lg-6 col-form-label text-end">
                                                   واحد درصد
                                                </label>

                                                <select class="form-control" id="unitPercent" name="unitPercent">

                                                    <option value="0">
                                                        لطفا واحد را انتخاب کنید
                                                    </option>
                                                    <option value="kilo" >
                                                         کیلو
                                                    </option>
                                                    <option value="numberic" >
                                                        عدد
                                                    </option>
                                                </select>
                                               {{-- <input class="form-control" placeholder=" واحد گروه کالا"
                                                       type="text"
                                                       id="unitGroup" >
                                                <span v-if="allerros.unitGroup"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.unitGroup[0] }}--}}
                                            </span>


                                            </div>
                                           {{-- <div class="col-md-3">

                                                <label for="email" class="col-lg-6 col-form-label text-end">
                                                    جمع کل درصد
                                                </label>

                                                <input class="form-control" placeholder=" جمع کل "
                                                       type="text"
                                                       id="TotalPercent" v-model="TotalPercent" disabled>
                                                <span v-if="allerros.TotalPercent"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.TotalPercent[0] }}
                                            </span>--}}


                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="button" id="step4Finish" class="btn btn-danger float-end"
                                                    @click="NewProductPercent()">
                                             ثبت درصد جدید
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

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
    <script>
        var e1 = document.getElementById('percentProduct');
        e1.oninput = myHandler1;
        e1.onpropertychange = e1.oninput; // for IE8
        function myHandler1() {
            document.getElementById('demo_out1').innerHTML = e1.value.toPersianLetter()+ "  ریال ";
        }

        var cleaveC = new Cleave('.currency1', {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand'
        });

        $("#unitPercent").change(function(){
           var value=$("#unitPercent option").filter(":selected").val();
           if(value ==0){

           }else if(value =='kilo'){
               $("#alert").fadeIn();
               $("#alert").html("فرمول محاسبه برحسب کیلو : درصد * ارزش افزوده می باشد ")
           }else{
               $("#alert").fadeOut();
           }

        });


    </script>
@endsection





