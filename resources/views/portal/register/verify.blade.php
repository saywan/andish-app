<!DOCTYPE html>
<html lang="fa">



<head>


    <meta charset="utf-8" />
    <title>
        تایید شماره موبایل
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
    <link href="{{asset("panel/plugins/sweet-alert2/sweetalert2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/plugins/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('{{asset("panel/images/p-1.png")}}'); background-size: cover; background-position: center center;direction: rtl">
<!-- Log In page -->
<div class="container" >
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-0 auth-header-box">
                            <div class="text-center p-3">
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{asset("panel/images/logo-sm.png")}}" height="50" alt="logo" class="auth-logo">
                                </a>
                                <h4 class="mt-3 mb-1 fw-semibold text-white font-18">تایید شماره موبایل</h4>
                                <p class="text-muted  mb-0">
                                    تایید شماره موبایل کاربری
                                </p>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <form class="my-4" action="" id="app">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="username">شماره موبایل</label>
                                    <input type="text" class="form-control" id="mobile_code" name="mobile_code" disabled value="{{base64_decode($mobile)}}" >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="verify">کد عضویت </label>
                                    <input type="text" class="form-control" id="verify" name="verify"  v-model="verify_code" >
                                </div>

                                <div class="form-group mb-0 row">
                                    {{--<div id="hideMsg" class="item">
                                        <h2><span>60</span></h2>
                                    </div>
                                    <div class="form-group" id="re-send" style="display:none">

                                        <div class="text-center">
                                            <a @click="Wo_ResendCode({{$mobile}})" class="single__purchase__btn btn-block" style="width: 101% !important;">
                                                ارسال مجدد
                                            </a>
                                            کد تایید را دریافت نکردید
                                        </div>
                                    </div>--}}
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="button" v-on:click="VerifySMSCode()">
                                            <i class="fas fa-sign-in-alt ms-1"></i>
                                            تایید شماره موبایل

                                        </button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->

                        </div><!--end card-body-->
                        <div class="card-body bg-light-alt text-center">
                            &copy; <script>
                                document.write(new Date().getFullYear())
                            </script>کلیه حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<!-- App js -->
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("panel/js/app.js")}}"></script>
<script src="{{asset("panel/plugins/sweet-alert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("panel/pages/sweet-alert.init.js")}}"></script>

<script>
    $(function () {
        Wo_SetTimer();
    });
    function Wo_SetTimer() {
        $("#hideMsg h2 span").text("60"), $("#hideMsg").fadeIn("fast");
        var e = $("#hideMsg h2 span").text(), n = setInterval(function () {
            $("#hideMsg h2 span").text(--e), 0 == e && $("#hideMsg").fadeOut("fast", function () {
                clearInterval(n), $("#re-send").fadeIn("fast")
            })
        }, 1e3)
    }
</script>

</body>


</html>
