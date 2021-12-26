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

                        <h4 class="page-title">ثبت مشتری جدید</h4>
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
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">
                                         اطلاعات شخصی
                                        </a>
                                        <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">
                                           اطلاعات بانکی
                                        </a>
                                        <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">
                                           تنظیمات حساب کاربری
                                        </a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active" id="step1">
                                        <h4 class="card-title mt-3 mb-1">مشخصات شخصی</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtFirstNameBilling" class="col-lg-3 col-form-label text-end">
                                                        نام و نام خانوادگی:
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="firstname" name="firstname"
                                                               placeholder="نام مشتری را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtLastNameBilling" class="col-lg-3 col-form-label text-end">
                                                        کد ملی:
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="codemeli" name="codemeli"
                                                               placeholder=" کد ملی مشتری را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtCompanyBilling" class="col-lg-3 col-form-label text-end">
                                                        شماره همراه
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="mobile" name="mobile"
                                                               placeholder=" شماره همراه را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->

                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="email" class="col-lg-3 col-form-label text-end">
                                                        آدرس ایمیل
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="email" name="email"
                                                               placeholder=" آدرس ایمیل  را وارد کنید" required="" type="email">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label text-end">
                                                       شغل
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="job" name="job"
                                                               placeholder="  شغل را وارد کنید"
                                                               required="" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label text-end">
                                                        تلفن ثابت
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="telephone" name="telephone"
                                                               placeholder=" تلفن ثابت را وارد کنید" required="" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label text-end">
                                                       تاریخ تولد
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="datebirth" name="datebirth"
                                                               placeholder=" تاریخ تولد را وارد کنید" required="" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtAddress1Billing" class="col-lg-3 col-form-label text-end">
                                                        آدرس محل کار یا سکونت
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <textarea id="address" name="address" rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div>
                                        </div><!--end row-->

                                        <div class="">
                                            <button type="button" id="step1Next" class="btn btn-primary float-end">بعدی</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step2">
                                        <h4 class="card-title mt-3 mb-1"> اطلاعات بانکی</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtFirstNameShipping" class="col-lg-3 col-form-label text-end">
                                                     شماره حساب
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="accountno" name="accountno"
                                                               placeholder="شماره حساب را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtLastNameShipping" class="col-lg-3 col-form-label text-end">
                                                        شماره کارت
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="cardno" name="cardno"
                                                               placeholder="شماره کارت را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtCompanyShipping" class="col-lg-3 col-form-label text-end">
                                                        صاحب کارت بانک
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="cardtitle" name="cardtitle"
                                                               placeholder="دارنده کارت   را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="txtCityShipping" class="col-lg-3 col-form-label text-end">
                                                      شماره شبا
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="shebacard" name="shebacard"
                                                               placeholder="شماره شبا  را وارد کنید" required="" type="text" maxlength="24">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div>
                                        </div><!--end row-->


                                        <div>
                                            <button type="button" id="step2Prev" class="btn btn-secondary float-start">

                                                قبلی
                                            </button>
                                            <button type="button" id="step3Next" class="btn btn-primary float-end">بعدی</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step3">
                                        <h4 class="card-title mt-3 mb-1"> تنظیمات حساب کاربری</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="password" class="col-lg-3 col-form-label text-end">
                                                        رمز عبور
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" id="password" name="password"
                                                               placeholder=" رمز عبور خود را وارد کنید" required="" type="text">
                                                    </div>
                                                </div><!--end form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row mb-2">
                                                    <label for="ddlCreditCardType" class="col-lg-3 col-form-label text-end">
                                                        نوع حساب کاربری
                                                    </label>
                                                    <div class="col-lg-9">
                                                        <select class="form-control" id="typeuser" name="typeuser">
                                                            <option value="buyer">
                                                                خریدار
                                                            </option>
                                                            <option value="seller">
                                                                فروشنده
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div><!--end form-group-->
                                            </div>
                                        </div><!--end row-->

                                        <div>
                                            <button type="button" id="step2Prev" class="btn btn-secondary float-start">

                                                قبلی
                                            </button>
                                            <button type="button" id="step4Finish" class="btn btn-danger float-end" @click="NewCustomer()">
                                                ثبت
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





