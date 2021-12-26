<!DOCTYPE html>
<html lang="fa">



<head>


    <meta charset="utf-8" />
    <title>
        ورود به پرتال شرکت اندیش گشتر
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

<body id="body" class="auth-page" style="background-image: url('{{asset('panel/images/p-1.png')}}'); background-size: cover; background-position: center center;direction: rtl">
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
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="{{asset('panel/images/logo-sm.png')}}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">
                                        ورود به پرتال شرکت اندیش گستر
                                    </h4>
                                    <p class="text-muted  mb-0">
                                        ورود به سیستم
                                    </p>
                                </div>
                            </div>
                            <div class="card-body pt-0">

                                <form class="my-4" action="{{route('portal.checklogin')}}" method="post">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">شماره موبایل</label>
                                        <input id="mobile" type="text"
                                               class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                               value="{{ old('mobile') }}" required autocomplete="mobile" autofocus
                                               placeholder="لطفا شماره موبایل را وارد کنید">

                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">رمز عبور</label>

                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="رمز عبور خود را وارد کنید">


                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!--end form-group-->

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch form-switch-success">

                                                <label class="form-check-label" for="customSwitchSuccess">
                                                   مرا بخاطر بسپار
                                                </label>
                                                <input class="form-check-input" type="checkbox" id="customSwitchSuccess" name="remember" id="remember">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6 text-end">
                                            <a href="{{route('portal.auth-recover-pw')}}" class="text-muted font-13">

                                                یادآوری رمز عبور
                                                <i class="dripicons-lock"></i>
                                            </a>
                                        </div><!--end col-->
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-sign-in-alt ms-1"></i>
                                                    ورود به سیستم
                                                    </button>
                                            </div>

                                            <ul style="list-style: disc !important;">
                                                @foreach($errors->all() as $error )
                                                    <li style="color: red">{{$error}}</li>
                                                @endforeach
                                            </ul>

                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                                <div class="m-3 text-center text-muted">
                                    <p class="mb-0">حساب کاربری ندارید؟   <a href="{{route('portal.AdminRegister')}}" class="text-primary ms-2">ثبت حساب کاربری</a></p>
                                </div>
                                <hr class="hr-dashed mt-4">


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
