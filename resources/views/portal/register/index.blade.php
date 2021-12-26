<!DOCTYPE html>
<html lang="fa">



<head>


    <meta charset="utf-8" />
    <title>
        ثبت نام - پرتال شرکت اندیش گستر
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("panel/images/favicon.ico")}}">



    <!-- App css -->
    <link href="{{asset("panel/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/app.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('{{asset("panel/images/p-1.png")}}'); background-size: cover; background-position: center center;direction: rtl">
<!-- Log In page -->
<div class="container-md">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="#" class="logo logo-admin">
                                        <img src="{{asset("panel/images/loginmain.png")}}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">
                                        ایجاد حساب کاربری در پرتابل شرکت اندیش گستر
                                    </h4>
                                    <p class="text-muted  mb-0">
                                        ثبت نام و ایجاد حساب کاربری شرکت
                                    </p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form class="my-4" method="POST" action="{{ route('portal.CreateAdminRegister') }}">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="fullname">نام و نام خانوادگی</label>
                                        <input id="fullname" type="text"
                                               class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                               value="{{ old('fullname') }}" required autocomplete="fullname" autofocus
                                               placeholder="لطفا نام و نام خانوادگی را وارد کنید" oninvalid="this.setCustomValidity('نام و نام خانوادگی را وارد کنید')" oninput="this.setCustomValidity('')">
                                        @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><!--end form-group-->

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="email">آدرس ایمیل</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="آدرس ایمیل اختیاری است" oninvalid="this.setCustomValidity('آدرس ایمیل را وارد کنید')" oninput="this.setCustomValidity('')">

                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="mobile">شماره موبایل (نام کاربری) </label>
                                        <input id="mobile" type="text"
                                               class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                               value="{{ old('mobile') }}" required autocomplete="mobile" autofocus
                                               placeholder="لطفا شماره موبایل خود را وارد کنید" oninvalid="this.setCustomValidity('شماره موبایل را وارد کنید')" oninput="this.setCustomValidity('')">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="codemeli">کد ملی </label>
                                        <input id="codemeli" type="text"
                                               class="form-control @error('codemeli') is-invalid @enderror" name="codemeli"
                                               value="{{ old('mobile') }}" required autocomplete="codemeli" autofocus
                                               placeholder="لطفا کد ملی را وارد کنید" oninvalid="this.setCustomValidity('کد ملی را وارد کنید')" oninput="this.setCustomValidity('')">
                                        @error('codemeli')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="password">رمز عبور</label>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="رمز عبور خود را وارد کنید" oninvalid="this.setCustomValidity('رمز عبور را وارد کنید')" oninput="this.setCustomValidity('')">


                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-sign-in-alt ms-1"></i>
                                                    ثبت نام

                                                </button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                                <div class="m-3 text-center text-muted">
                                    <p class="mb-0">حساب کاربری دارید ؟ <a href="{{route('portal.Adminlogin')}}" class="text-primary ms-2">
                                        ورود به سیستم
                                        </a>
                                    </p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<!-- App js -->
<script src="{{asset("panel/js/app.js")}}"></script>

</body>


</html>
