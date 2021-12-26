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

                                                <input class="form-control" placeholder=" عنوان  کالا"
                                                       type="text"
                                                       id="titleGroup">


                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtLastNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                    گروه بندی کالا
                                                </label>

                                                <select name="GroupProd" id="GroupProd" class="form-control" required>
                                                    <option value="0" >
                                                        لطفا گروه بندی  کالا را مشخص کنید
                                                    </option>
                                                    @if(count($GroupProd) > 0)
                                                        @foreach($GroupProd as $itemGorup)
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

                                                <label for="email"   class="col-lg-7 col-form-label text-end">
                                                    واحد کالا
                                                </label>

                                                <input class="form-control" placeholder=" واحد  کالا"
                                                       type="text"
                                                       id="unitProduct">



                                            </div>
                                            <div class="col-md-3">

                                                <label for="email"   class="col-lg-7 col-form-label text-end">
                                                    وزن
                                                </label>

                                                <input class="form-control" placeholder=" وزن  کالا"
                                                       type="text"
                                                       id="weightProduct">



                                            </div>
                                            <div class="col-md-3">

                                                <label for="email"   class="col-lg-7 col-form-label text-end">
                                                    قیمت کالا
                                                </label>

                                                <input class="form-control" placeholder=" قیمت  کالا"
                                                       type="text"
                                                       id="priceProduct">



                                            </div>
                                            <div class="col-md-6">

                                                <label for="email"   class="col-lg-7 col-form-label text-end">
                                                   بارگذاری تصویر کالا
                                                </label>

                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02"   v-on:change="onImageChangeFile">
                                                    <label class="input-group-text" for="inputGroupFile02" >انتخاب تصویر کالا</label>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">

                                            <div class="col-md-6">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                     توضیحات کالا
                                                </label>
                                                <textarea id="basic-conf" name="address" rows="4" dir="rtl" class="form-control">

                                                        </textarea>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="txtFirstNameBilling"
                                                       class="col-lg-7 col-form-label text-end">
                                                  وضعیت نمایش کالا در فروشگاه
                                                </label>

                                                <div class="form-check form-switch">
                                                    <div class="form-check form-switch form-switch-success font-30">
                                                        <input id="statususer"   class="form-check-input" type="checkbox" id="customSwitchSuccess"  data-on="active" data-off="inactive"  >

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
    <script src="{{asset("panel/plugins/tinymce/tinymce.min.js")}}"></script>
    <script src="{{asset("panel/pages/form-editor.init.js")}}"></script>
@endsection





