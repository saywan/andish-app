<?php
$setting = \App\Models\AdminSettings::find(1);
?>
    <!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title>
       تایید کد عضویت - شرکت اندیش گستر
    </title>
    <!-- Stylesheets -->
    <link href="{{asset("Content/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/responsive.css")}}" rel="stylesheet">


    <!-- Color Switcher Mockup -->
    <link href="{{asset("Content/css/color-switcher-design.css")}}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{{asset("Content/css/color-themes/teal-theme.css")}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset("Content/images/favicon.png")}}" type="image/x-icon">
    <link rel="icon" href="{{asset("Content/images/favicon.png")}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset("Content/js/respond.js")}}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
@include('Home.header')
<!-- End Main Header -->


    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
        <div class="auto-container">
            <h2>ورود و ثبت نام</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">صفحه اصلی </a></li>
                <li>تایید حساب کاربری</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Register Section-->
    <section class="register-section" id="app">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Form Column-->
                <div class="form-column column col-lg-12 col-md-12 col-sm-12 text-center">

                    @if(\Illuminate\Support\Facades\Session::has('status'))
                        <div class="alert alert-danger">

                                <div>
                                    <i class="fa fa-traffic-light"></i>
                                    {{ \Illuminate\Support\Facades\Session::get('status') }}
                                </div>

                        </div>
                    @else
                        <div class="sec-title">
                            <h2>تایید حساب کاربری</h2>
                            <div class="separate"></div>
                        </div>

                        <!--Login Form-->
                        <div class="styled-form register-form  text-center">
                            <p class="f-15 text-center alert alert-info">
                                لینک فعال سازی حساب کاربری به ایمیل شما ارسال شده است.جهت فعال سازی ایمیل خود را بررسی
                                نمایید.
                            </p>
                            <span class="text-primary">
                                صندوق ورودی یا هرزنامه ایمیل خود را بررسی کنید
                            </span>


                        </div>
                    @endif


                </div>

            </div>
        </div>
    </section>
    <!--End Register Section-->

    <!-- Main Footer -->
    @include('Home.footer')

</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->


<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
    <form method="post" action="https://expert-themes.com/html/globex/blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="اینجا جستجو کنید" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{asset("Content/js/jquery.js")}}"></script>
<script src="{{asset("Content/js/popper.min.js")}}"></script>
<script src="{{asset("Content/js/bootstrap.min.js")}}"></script>
<script src="{{asset("Content/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("Content/js/jquery.fancybox.js")}}"></script>
<script src="{{asset("Content/js/appear.js")}}"></script>
<script src="{{asset("Content/js/parallax.min.js")}}"></script>
<script src="{{asset("Content/js/tilt.jquery.min.js")}}"></script>
<script src="{{asset("Content/js/jquery.paroller.min.js")}}"></script>
<script src="{{asset("Content/js/owl.js")}}"></script>
<script src="{{asset("Content/js/mixitup")}}"></script>
<script src="{{asset("Content/js/nav-tool.js")}}"></script>
<script src="{{asset("Content/js/jquery-ui.js")}}"></script>
<script src="{{asset("Content/js/jquery.bootstrap-touchspin.js")}}"></script>
<script src="{{asset("Content/js/script.js")}}"></script>
<script src="{{asset("Content/js/color-settings.js")}}"></script>

</body>


</html>
