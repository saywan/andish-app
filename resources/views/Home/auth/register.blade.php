<?php
$setting = \App\Models\AdminSettings::find(1);
?>
    <!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title>
        عضویت - شرکت اندیش گستر
    </title>
    <!-- Stylesheets -->
    <link href="{{asset("Content/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/responsive.css")}}" rel="stylesheet">


    <!-- Color Switcher Mockup -->
    <link href="{{asset("Content/css/color-switcher-design.css")}}" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{{asset("Content/css/color-themes/default-theme.css")}}" rel="stylesheet">

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
                <li>ورود و ثبت نام</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Register Section-->
    <section class="register-section" id="app">
        <div class="auto-container">
            <div class="row clearfix">


                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12 text-center">

                    <div class="sec-title">
                        <h2>ثبت نام در اندیش گستر</h2>
                        <div class="separate"></div>
                    </div>

                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <ul style="list-style-type: disc !important;list-style: disc ">
                            @foreach($errors->all() as $error )
                                <li style="color: red">{{$error}}</li>
                            @endforeach
                        </ul>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}"  autocomplete="fullname" required autofocus oninvalid="this.setCustomValidity(' نام خود را وارد کنید')" oninput="this.setCustomValidity('')" tabindex="1" required placeholder="نام خود را وارد کنید">
                                @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" required autofocus oninvalid="this.setCustomValidity('شماره موبایل یا آدرس ایمیل معتبر را وارد کنید')" oninput="this.setCustomValidity('')" tabindex="1" required placeholder="آدرس ایمیل یا شماره موبایل خود را وارد کنید">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="adon-icon">
                                    <span class="fa fa-unlock-alt"></span>
                                </span>
                                <input id="passwordregister" type="password" class="form-control" name="passwordregister"  autocomplete="current-password"  autocomplete="password" autofocus oninvalid="this.setCustomValidity('گذرواژه را وارد کنید')" oninput="this.setCustomValidity('')" tabindex="2" required placeholder="گذرواژه خود را وارد کنید">

                                @error('passwordregister')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="submit" class="theme-btn btn-style-three"><span
                                            class="txt">ثبت نام در اندیش گستر </span>
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>

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
