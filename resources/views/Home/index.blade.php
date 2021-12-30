
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

    <!-- Banner Section Three -->
    <section class="banner-section-three">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url({{asset("Content/images/main-slider/image-2.jpg")}})">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url({{asset("Content/images/main-slider/pattern-7.png")}})"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>
                               خوش آمدید
                                <br>
                                به وب سایت شرکت اندیش گستر

                            </h1>
                            <div class="text">
                                یکی از بزرگترین تامین کنندگان لوله و اتصالات پلی اتیلن آبرسانی
                                <br>
                                گاز رسانی

                            </div>
                            <div class="button-box">
                                <a href="{{url('/aboutUs')}}" class="theme-btn btn-style-one">
                                    <span class="txt">مطالعه بیشتر</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Banner Section Two -->

    <!-- Services Section Three -->
    <section class="services-section-three margin-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="service-number">01</div>
                                <h4>
                                    <a href="{{url('/')}}">
                                        تامین کنندگان لوله
                                    </a>
                                </h4>
                                <div class="text">
                                     تامین کنندگان لوله و اتصالات پلی اتیلن آبرسانی
                                </div>
                                <a href="{{url('/')}}" class="more-detail">جزئیات بیشتر</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="service-number">02</div>
                                <h4><a href="services-detail.html">
                                        تامین کنندگان لوله گاز
                                    </a>
                                </h4>
                                <div class="text">
                                    تامین کنندگان لوله و اتصالات پلی اتیلن آبرسانی
                                </div>
                                <a href="services-detail.html" class="more-detail">جزئیات بیشتر</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="service-number">03</div>
                                <h4><a href="services-detail.html">
                                        استانداردهای معتبر ملی

                                    </a></h4>
                             <div class="text">
                                 استانداردهای معتبر ملی
                             </div>
                                <a href="services-detail.html" class="more-detail">جزئیات بیشتر</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Three -->

    <!--Sponsors Section-->
    <section class="sponsors-section style-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">ما تجارت را تغییر می دهیم</div>
                        <h2>ما در حال ایجاد راه حل هستیم <br> برای سازمان شما</h2>
                    </div>
                    <div class="pull-right">
                        <div class="text">توسعه راه حل های نرم افزاری قابل اعتماد و مقیاس پذیر برای هر سیستم عامل ،
                            مرورگر و دستگاه. <br> ما تخصص عمیق صنعت و آخرین پیشرفت های فناوری اطلاعات را برای ارائه
                            سفارشی گرد هم آورده ایم <br> راه حل ها و محصولاتی که کاملاً متناسب با نیازها و رفتار
                            کاربرانشان است.
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/1.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/2.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/3.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/4.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/1.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/2.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/3.png" alt=""></a></div>
                    </li>
                    <li>
                        <div class="image-box"><a href="#"><img src="Content/images/clients/4.png" alt=""></a></div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Fluid Section One -->


    <!-- News Section Three -->

    <!-- End News Section Three -->

    <!-- Call To Action Two -->

    <!-- End Call To Action Two -->

    <!-- Cases Section Two -->

    <!-- End Cases Section Two -->

    <!-- Pricing Section -->

    <!-- End Pricing Section -->

    <!-- News Section Four -->
    <section class="news-section-four">
        <div class="image-layer" style="background-image: url(images/background/pattern-19.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">وبلاگ ما</div>
                <h2>بررسی <br> اخبار سایت </h2>
            </div>

            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-8.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">22 <span>خرداد </span></div>
                            <h4><a href="news-detail.html">بهترین فناوری راه حل فناوری اطلاعات جهان را تعریف کنید</a>
                            </h4>
                            <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                ...
                            </div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>تعداد 3 نظر</li>
                                <li><span class="icon flaticon-user"></span>ادمین</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-9.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">22 <span>خرداد </span></div>
                            <h4><a href="news-detail.html">شما باید 20 راز تغییر شکل دیجیتال را امتحان کنید</a></h4>
                            <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                ...
                            </div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>تعداد 3 نظر</li>
                                <li><span class="icon flaticon-user"></span>ادمین</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-10.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">22 <span>خرداد </span></div>
                            <h4><a href="news-detail.html">کنفرانس دیجیتال رویدادهای فناوری اطلاعات در سال 1400 </a>
                            </h4>
                            <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                ...
                            </div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-comment"></span>تعداد 3 نظر</li>
                                <li><span class="icon flaticon-user"></span>ادمین</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End News Section Four -->

    <!-- Info Section -->

    <!-- End Info Section -->

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
<script src="{{asset("Content/js/nav-tool.js")}}"></script>
<script src="{{asset("Content/js/jquery-ui.js")}}"></script>
<script src="{{asset("Content/js/script.js")}}"></script>
<script src="{{asset("Content/js/color-settings.js")}}"></script>

</body>


</html>
