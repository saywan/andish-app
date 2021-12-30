<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title>
        صفحه اصلی - شرکت اندیش گستر
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

    <!-- Sidebar Cart Item -->

    <!-- END sidebar widget item -->

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url({{asset("Content/images/background/pattern-16.png")}})"></div>
        <div class="auto-container">
            <h2>تماس با ما</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">صفحه اصلی </a></li>
                <li>تماس با ما</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="title-box">
                <div class="title">در تماس باشید</div>
                <h2>با شرکت اندیش گستر</h2>
                <div class="text">برای سوالات عمومی می توانید با تیم پشتیبانی اندیش گستر تماس بگیرید <br> با ایمیل <a href="mailto:{{$setting->emails_site}}">
                        {{$setting->emails_site}}
                    </a> در تماس باشید <a href="tel:  {{$setting->telephone_two_shop}}">  {{$setting->telephone_two_shop}}</a></div>
            </div>

            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>آدرس </strong></li>
                                <li>
                                    {!! $setting->contact_address !!}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <ul>
                                <li><strong>تلفن </strong></li>
                                <li> {{$setting->telephone_one_shop}}</li>
                                <li> {{$setting->telephone_two_shop}}</li>
                                <li> {{$setting->telephone_third_shop}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-email-1"></span></div>
                            <ul>
                                <li><strong>ایمیل </strong></li>
                                <li>
                                    {{$setting->emails_site}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                {{--<div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241" width="1348" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">پیامی ارسال کنید</div>
                        <h2>پیام ارسالی شما</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">
                            هدف ما ارائه خدمات و محصولات با کیفیت
                            <br> موقعیت در صنایع مربوطه و تیم ما کار می کند.</div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">

                <!-- Contact Form -->
                <form method="post" action="https://expert-themes.com/html/globex/sendemail.php" id="contact-form">
                    <div class="row clearfix">

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>نام شما *</label>
                            <input type="text" name="username" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label> ایمیل  ما *</label>
                            <input type="text" name="email" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label>شماره تلفن *</label>
                            <input type="text" name="phone" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label> وب سایت </label>
                            <input type="text" name="subject" placeholder="" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label>پیام شما *</label>
                            <textarea name="message" placeholder=""></textarea>
                        </div>

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">اکنون ارسال کنید </span></button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Contact Form -->

        </div>
    </section>
    <!-- End Contact Map Section -->

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
<script src="{{asset("Content/js/wow.js")}}"></script>
<script src="{{asset("Content/js/validate.js")}}"></script>
<script src="{{asset("Content/js/nav-tool.js")}}"></script>
<script src="{{asset("Content/js/jquery-ui.js")}}"></script>
<script src="{{asset("Content/js/script.js")}}"></script>
<script src="{{asset("Content/js/color-settings.js")}}"></script>

</body>


</html>
