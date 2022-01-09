@extends('portal.layouts.adminMaster')
@section('styles')

@endsection

@section('main')

    <div class="page-content-tab"  id="app">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">

                            مدیریت صفحات سایت
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

                        <div  class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                                    مدیریت صفحه درباره ما
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                    مدیریت صفحه تماس با ما
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">
                                    مدیریت حریم خصوصی
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane p-3 active" id="home" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row mb-2">
                                            <label for="titlePageAbout" class="col-lg-3 col-form-label text-end">
                                                عنوان صفحه
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="titlePageAbout" name="titlePageAbout"
                                                       placeholder=" عنوان صفحه را وارد کنید" required="" type="text" value="{{$setting->about_title}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group row mb-2">
                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label text-end">
                                                کلمات کلیدی صفحه درباره ما
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="keywordPage" name="keywordPage"
                                                       placeholder=" کلمات کلیدی صفحه  را وارد کنید" required="" type="text" value="{{$setting->about_keyword}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row mb-2">
                                            <label for="txtCompanyBilling" class="col-lg-4 col-form-label text-end">
                                                توضیحات در مورد صفحه
                                            </label>
                                            <div class="col-lg-12">
                                                        <textarea id="basic-conf" name="address" rows="4" dir="rtl" class="form-control">
                                                            {!! $setting->about_desc !!}
                                                        </textarea>
                                            </div>
                                        </div><!--end form-group-->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row mb-2">

                                            <div class="col-lg-12">
                                                <button type="button"  class="btn btn-danger float-end"
                                                        @click="updateAboutPage()">
                                                  به روز رسانی صفحه
                                                </button>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->


                                </div>
                            </div>
                            <div class="tab-pane p-3" id="profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row mb-2">
                                            <label for="titlePageContact" class="col-lg-3 col-form-label text-end">
                                              عنوان صفحه تماس با ما
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="titlePageContact" name="titlePageContact"
                                                       placeholder="  عنوان صفحه تماس با ما را وارد کنید" required="" type="text" value="{{$setting->contact_title}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                    <div class="col-md-8">
                                        <div class="form-group row mb-2">
                                            <label for="keywordContactPage" class="col-lg-3 col-form-label text-end">
                                               کلمات کلیدی صفحه تماس با ما
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="keywordContactPage" name="keywordContactPage"
                                                       placeholder=" کلمات کلیدی صفحه  را وارد کنید" required="" type="text" value="{{$setting->contact_keyword}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row mb-2">
                                            <label for="telephone_one_shop" class="col-lg-3 col-form-label text-end">
                                            تلفن ثابت شرکت
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="telephone_one_shop" name="telephone_one_shop"
                                                       placeholder=" تلفن ثابت شرکت را وارد کنید" required="" type="text" value="{{$setting->telephone_one_shop}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-2">
                                            <label for="telephone_two_shop" class="col-lg-3 col-form-label text-end">
                                             شماره همراه
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="telephone_two_shop" name="telephone_two_shop"
                                                       placeholder=" تلفن ثابت شرکت را وارد کنید" required="" type="text" value="{{$setting->telephone_two_shop}}">
                                            </div>
                                        </div><!--end form-group-->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row mb-2">
                                            <label for="telephone_third_shop" class="col-lg-3 col-form-label text-end">
                                                شماره همراه سوم
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="telephone_third_shop" name="telephone_third_shop"
                                                       placeholder=" شماره همراه سوم را وارد کنید" required="" type="text" value="{{$setting->telephone_third_shop}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row mb-2">
                                            <label for="emails_site" class="col-lg-3 col-form-label text-end">
                                                پست الکترونیکی شرکت
                                            </label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="emails_site" name="emails_site"
                                                       placeholder=" پست الکترونیکی  را وارد کنید" required="" type="text" value="{{$setting->emails_site}}">
                                            </div>
                                            </div>
                                        </div><!--end form-group-->
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row mb-2">
                                            <label for="addressCompany" class="col-lg-4 col-form-label text-end">
                                                آدرس شرکت
                                            </label>
                                            <div class="col-lg-12">
                                                        <textarea id="addressCompany" name="addressCompany" rows="4" dir="rtl" class="form-control">
                                                            {!! $setting->contact_address !!}
                                                        </textarea>
                                            </div>
                                        </div><!--end form-group-->
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group row mb-2">

                                            <div class="col-lg-12">
                                                <button type="button"  class="btn btn-danger float-end"
                                                        @click="updateContactPage()">
                                                    به روز رسانی صفحه تماس با ما
                                                </button>
                                            </div>
                                        </div><!--end form-group-->
                                    </div><!--end col-->


                                </div>
                            </div>
                            <div class="tab-pane p-3" id="settings" role="tabpanel">
                                <p class="text-muted mb-0">
                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                </p>
                            </div>
                        </div>




                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
    <script src="{{asset("panel/plugins/tinymce/tinymce.min.js")}}"></script>
    <script src="{{asset("panel/pages/form-editor.init.js")}}"></script>
@endsection





