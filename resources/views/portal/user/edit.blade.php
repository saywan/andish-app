@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab" id="app">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">
                            لیست مشتریان شرکت اندیش گستر
                        </h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div  class="col-md-8 alert alert-info" v-for="list in allerros">
                    @{{ list }}
                </div>
                <div class="col-12 col-md-8 mx-auto">
                    <div class="card">

                        <div class="card-body">


                                <div class="form-group mb-3 row">
                                    <div class="col-md-4">
                                        <label for="firstname" >
                                            نام و نام خانوادگی:
                                        </label>
                                            <input class="form-control" id="firstname" name="firstname"
                                                   placeholder="نام مشتری را وارد کنید" required="" type="text" value="{{$user->fullname}}">

                                    </div>
                                    <div class="col-md-4">
                                        <label for="codemeli" >
                                            کد ملی:
                                        </label>

                                            <input class="form-control" id="codemeli" name="codemeli"
                                                   placeholder=" کد ملی مشتری را وارد کنید" required="" type="text" value="{{$user->codemeli}}">

                                    </div>
                                    <div class="col-md-4">
                                        <label for="mobile" >
                                            شماره همراه
                                        </label>
                                        <input class="form-control" id="mobile" name="mobile"
                                               placeholder=" شماره همراه را وارد کنید" required="" type="text" value="{{$user->mobile}}">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-md-4">
                                        <label for="email" >
                                            آدرس ایمیل
                                        </label>
                                        <input class="form-control" id="email" name="email"
                                               placeholder=" آدرس ایمیل  را وارد کنید" required="" type="email" value="{{$user->email}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="job" >
                                            شغل
                                        </label>
                                        <input class="form-control" id="job" name="job"
                                               placeholder="  شغل را وارد کنید"
                                               required="" type="text" value="{{$user->job}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="telephone" >
                                            تلفن ثابت
                                        </label>
                                        <input class="form-control" id="telephone" name="telephone"
                                               placeholder=" تلفن ثابت را وارد کنید" required="" type="text" value="{{$user->phone}}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-md-4">
                                        <label for="datebirth" >
                                            تاریخ تولد
                                        </label>
                                        <input class="form-control" id="datebirth" name="datebirth"
                                               placeholder=" تاریخ تولد را وارد کنید" required="" type="text" value="{{$user->brithday}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="accountno" >
                                            شماره حساب
                                        </label>
                                        <input class="form-control" id="accountno" name="accountno"
                                               placeholder=" شماره حساب را وارد کنید" required="" type="text" value="{{$user->accountno}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cardno" >
                                            شماره کارت
                                        </label>
                                        <input class="form-control" id="cardno" name="cardnumber"
                                               placeholder="شماره کارت را وارد کنید" required="" type="text" value="{{$user->cardnumber}}">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-md-6">
                                        <label for="cardtitle" >
                                            صاحب کارت بانک
                                        </label>
                                        <input class="form-control" id="cardtitle" name="cardtitle"
                                               placeholder="دارنده کارت   را وارد کنید" required="" type="text" value="{{$user->namecard}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cardtitle" >
                                            شماره شبا
                                        </label>
                                        <input class="form-control" id="shebacard" name="shebacard"
                                               placeholder="شماره شبا  را وارد کنید" required="" type="text" maxlength="24" value="{{$user->sheba}}">
                                    </div>


                                </div>
                                <div class="form-group mb-3 row">

                                    <div class="col-md-12">
                                        <label for="cardtitle" >
                                            نوع حساب کاربری
                                        </label>
                                        <select class="form-control" id="typeuser" name="typeuser">
                                            <option value="buyer">
                                                خریدار
                                            </option>
                                            <option value="seller">
                                                فروشنده
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="datebirth" >
                                        آدرس محل تولد
                                    </label>

                                    <textarea  id="address" name="address" rows="5" placeholder="About Me..." class="form-control">{{$user->address}} </textarea>
                                    <button class="btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0" @click="EditCustomer({{$user->id}})">به روز رسانی حساب کاربری</button>
                                    <a href="{{route('portal.User')}}" class="btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0">برگشت به لیست مشتریان</a>
                                </div>

                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div>
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
            </div>
        </div>


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

    </div>

@endsection

@section('scripts')
    {{--   <script src="{{asset("panel/plugins/tabulator/tabulator.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/xlsx.full.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.plugin.autotable.js")}}"></script>
       <script src="{{asset("panel/pages/datatable.init.js")}}"></script>--}}


@endsection





