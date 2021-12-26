@extends('portal.layouts.adminMaster')
@section('styles')

@endsection

@section('main')

    <div class="page-content-tab" id="app">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">ثبت گروبندی جدید</h4>
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
                                                       class="col-lg-3 col-form-label text-end">
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
                                                <label for="txtLastNameBilling"
                                                       class="col-lg-3 col-form-label text-end">
                                                    درصد گروه کالا
                                                </label>

                                                    <input class="form-control" placeholder="درصد گروه کالا"
                                                           type="text"
                                                           id="percentGroup">
                                                    <span v-if="allerros.percentGroup"
                                                          class="badge badge-danger topM">
                                                @{{ allerros.percentGroup[0] }}
                                            </span>

                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtCompanyBilling"
                                                       class="col-lg-5 col-form-label text-end">
                                                    ارزش افزوده گروه کالا
                                                </label>

                                                <input class="form-control" placeholder="ارزش افزوده گروه کالا"
                                                       type="text" id="feeGroup">
                                                <span v-if="allerros.feeGroup"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.feeGroup[0] }}
                                            </span>

                                            </div>
                                            <div class="col-md-3">

                                                <label for="email" class="col-lg-3 col-form-label text-end">
                                                    واحد گروه کالا
                                                </label>

                                                <input class="form-control" placeholder=" واحد گروه کالا"
                                                       type="text"
                                                       id="unitGroup">
                                                <span v-if="allerros.unitGroup"
                                                      class="badge badge-danger topM">
                                                @{{ allerros.unitGroup[0] }}
                                            </span>


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
  <i class="mdi mdi-heart text-danger"></i>
             کلیه حقوق مادی و معنوی برای شرکت اندیش گستر محففوظ می باشد
                <i class="mdi mdi-heart text-danger"></i>

            </span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
@endsection

@section('scripts')
    <script src="{{asset("panel/pages/form-wizard.js")}}"></script>
@endsection





