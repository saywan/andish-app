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
@include('home.header')
    <!-- End Main Header -->

    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="Content/images/logo-2.png" alt=""/></a>
                            </div>
                            <div class="content-box">
                                <h2> درباره ما </h2>
                                <p class="text">استدلال به نفع استفاده از متن پرکننده چیزی شبیه به این است: اگر در
                                    فرآیند مشاوره از محتوای واقعی استفاده می کنید ، هر زمان که به یک نقطه بررسی رسیدید ،
                                    در نهایت خود و نه طرح محتوا را بررسی و مذاکره می کنید.</p>
                                <a href="#" class="theme-btn btn-style-three"><span class="txt">مشاوره </span></a>
                            </div>
                            <div class="contact-info">
                                <h2>اطلاعات تماس </h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>شیکاگو، مرکز لوراس منطقه سه</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>شنبه - چهارشنبه | ساعت کاری 9 صبح تا 19
                                        عصر
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!-- Banner Section Three -->
    <section class="banner-section-three">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url(images/main-slider/image-2.jpg)">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-7.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>ما واقعاً تهیه می کنیم <br> اینجا برجسته است <br> راه حل های IT.</h1>
                            <div class="text">جمع آوری رویداد قدیمی به نفع تختخواب خجالتی <br> از آن زمان درآمد چیزهای
                                زیادی دارد.
                            </div>
                            <div class="button-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span
                                        class="txt">مطالعه بیشتر</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url(images/main-slider/image-2.jpg)">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-7.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>ما واقعاً تهیه می کنیم <br> اینجا برجسته است <br> راه حل های IT.</h1>
                            <div class="text">جمع آوری رویداد قدیمی به نفع تختخواب خجالتی <br> از آن زمان درآمد چیزهای
                                زیادی دارد.
                            </div>
                            <div class="button-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span
                                        class="txt">مطالعه بیشتر</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url(images/main-slider/image-2.jpg)">
                <div class="color-layer"></div>
                <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-7.png)"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column clearfix">
                        <div class="inner-column">
                            <h1>ما واقعاً تهیه می کنیم <br> اینجا برجسته است <br> راه حل های IT.</h1>
                            <div class="text">جمع آوری رویداد قدیمی به نفع تختخواب خجالتی <br> از آن زمان درآمد چیزهای
                                زیادی دارد.
                            </div>
                            <div class="button-box">
                                <a href="contact.html" class="theme-btn btn-style-one"><span
                                        class="txt">مطالعه بیشتر</span></a>
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
                                <h4><a href="services-detail.html">ضمانت نامه مدیریت IT</a></h4>
                                <div class="text">اجرای چرخه کامل محصول نرم افزار خود را به کارشناسی با تجربه ، طراحان
                                    UI / UX ، توسعه دهندگان ما بسپارید..
                                </div>
                                <a href="services-detail.html" class="more-detail">جزئیات بیشتر</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <div class="service-number">02</div>
                                <h4><a href="services-detail.html">کنترل خدمات محصول</a></h4>
                                <div class="text">اجرای چرخه کامل محصول نرم افزار خود را به کارشناسی با تجربه ، طراحان
                                    UI / UX ، توسعه دهندگان ما بسپارید..
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
                                <h4><a href="services-detail.html">سیستم کنترل کیفیت</a></h4>
                                <div class="text">اجرای چرخه کامل محصول نرم افزار خود را به کارشناسی با تجربه ، طراحان
                                    UI / UX ، توسعه دهندگان ما بسپارید..
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
    <section class="fluid-section-one">
        <div class="outer-container clearfix">

            <!-- Content Column -->
            <div class="content-column" style="background-image:url(images/background/pattern-13.png)">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">درباره آتچ</div>
                        <h2>مورد اعتماد <br> 5000+ مشتری خوشحال</h2>
                        <div class="text">گوش می دهیم. ما توصیه می کنیم. ما با هم طراحی می کنیم. مشتری های خوشحال و
                            روابط مداوم همان چیزی است که ما برای آن تلاش می کنیم. موفقیت با نتایج سنجیده می شود ،
                            مهمترین احساس مشتری در مورد تجربه خود با ماست. ما این بررسی ها را انجام می دهیم.
                        </div>
                    </div>
                    <div class="row clearfix">

                        <!-- Feature Block Three -->
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-web-1"></span>
                                </div>
                                <div class="number">478</div>
                                <div class="feature-text">مشتریان خوشحال</div>
                            </div>
                        </div>

                        <!-- Feature Block Three -->
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-designer"></span>
                                </div>
                                <div class="number">642</div>
                                <div class="feature-text">پروژه تکمیلی</div>
                            </div>
                        </div>

                        <!-- Feature Block Three -->
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-planet-earth"></span>
                                </div>
                                <div class="number">578</div>
                                <div class="feature-text">طراح ابری</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image:url(images/resource/image-1.jpg)">
                <figure class="image-box"><img src="Content/images/resource/image-1.jpg" alt=""></figure>
            </div>

        </div>
    </section>

    <!-- News Section Three -->
    <section class="news-section-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">آخرین خدمات ما</div>
                <h2>ما انواع خدمات را به صورت <br> فناوری اطلاعات ارائه میدهیم</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-5.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-6.jpg" alt=""/></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-7.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="news-detail.html">UI/UX طراحی </a></h4>
                                <div class="text">محصول مورد نیاز خود را به موقع با تیمی مجرب که از روند طراحی واضح و
                                    موثر استفاده می کند ، بسازید.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-5.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-6.jpg" alt=""/></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-7.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="news-detail.html">UI/UX طراحی </a></h4>
                                <div class="text">محصول مورد نیاز خود را به موقع با تیمی مجرب که از روند طراحی واضح و
                                    موثر استفاده می کند ، بسازید.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-5.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-coding-1"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three style-two">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-mobile-app"></span>
                                </div>
                                <h4><a href="news-detail.html">توسعه وب</a></h4>
                                <div class="text">ما چیزی فراتر از مهارت های خوب کد نویسی داریم. تجربه ما باعث می شود از
                                    دیگران جدا شویم توسعه وب.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-6.jpg" alt=""/></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <a href="news-detail.html"><img src="Content/images/resource/news-7.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <span class="icon flaticon-computer"></span>
                                </div>
                                <h4><a href="news-detail.html">UI/UX طراحی </a></h4>
                                <div class="text">محصول مورد نیاز خود را به موقع با تیمی مجرب که از روند طراحی واضح و
                                    موثر استفاده می کند ، بسازید.
                                </div>
                                <a class="read-more" href="news-detail.html">ادامه مطلب <span
                                        class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section Three -->

    <!-- Call To Action Two -->
    <section class="call-to-action-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="Content/images/resource/image-2.jpg" alt=""/>
                </div>
                <h3>ما خدمات فناوری اطلاعات خارجی را برای مشاغل کوچک و متوسط ارائه می دهیم</h3>
                <a href="services.html" class="theme-btn btn-style-two"><span class="txt">خدمات بیشتر</span></a>
            </div>
        </div>
    </section>
    <!-- End Call To Action Two -->

    <!-- Cases Section Two -->
    <section class="cases-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">آخرین مورد موردی</div>
                <h2>مطالب اخیر ما را می خواند <br> مطالعات موردی</h2>
            </div>
        </div>

        <div class="outer-container">

            <div class="five-item-carousel owl-carousel owl-theme">

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/6.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/6.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">برنامه رسانه های اجتماعی</a></h5>
                            <div class="category">مشاوره / فناوری</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/7.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/7.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">برنامه رسانه های اجتماعی</a></h5>
                            <div class="category">ایده ها / فناوری</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/8.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/8.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">وب سایت تجارت الکترونیکی</a></h5>
                            <div class="category">طراحی و توسعه</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/9.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/9.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">تجارت IT خود را توسعه دهید </a></h5>
                            <div class="category">پروژه / تجارت فناوری اطلاعات</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/10.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/10.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">راه حل IT خود را مدیریت کنید</a></h5>
                            <div class="category">راه حل IT</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/6.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/6.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">برنامه رسانه های اجتماعی</a></h5>
                            <div class="category">مشاوره / فناوری</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/7.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/7.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">برنامه رسانه های اجتماعی</a></h5>
                            <div class="category">ایده ها / فناوری</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/8.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/8.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">وب سایت تجارت الکترونیکی</a></h5>
                            <div class="category">طراحی و توسعه</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/9.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/9.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">تجارت IT خود را توسعه دهید </a></h5>
                            <div class="category">پروژه / تجارت فناوری اطلاعات</div>
                        </div>
                    </div>
                </div>

                <!-- Case Block Two -->
                <div class="case-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Content/images/gallery/10.jpg" alt=""/>
                            <div class="overlay-box">
                                <a href="images/gallery/10.jpg" data-fancybox="case-2" data-caption=""
                                   class="search-icon"><span class="icon flaticon-search"></span></a>
                                <a href="projects-detail.html"
                                   class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h5><a href="projects-detail.html">راه حل IT خود را مدیریت کنید</a></h5>
                            <div class="category">راه حل IT</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Cases Section Two -->

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">برنامه های قیمت گذاری ما</div>
                <h2>هزینه پروژه ماهانه <br> پلن قیمتها</h2>
            </div>

            <div class="row clearfix">

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h3>پایه </h3>
                        <div class="text">طراحی شده برای مشاغل با الزامات بهداشتی استاندارد</div>
                        <div class="price">70000 تومان<span>/ هر ماه </span></div>
                        <ul class="price-list">
                            <li>پشتیبانی 24/7</li>
                            <li>تنظیمات پیشرفته</li>
                            <li>16 گیگابایت فضا</li>
                            <li>پشتیبانی نامحدود</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one"><span
                                    class="txt">شروع کنید</span></a>
                        </div>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h3>استاندارد </h3>
                        <div class="text">طراحی شده برای مشاغل با الزامات بهداشتی استاندارد</div>
                        <div class="price">90000 تومان<span>/ هر ماه </span></div>
                        <ul class="price-list">
                            <li>پشتیبانی 24/7</li>
                            <li>تنظیمات پیشرفته</li>
                            <li>16 گیگابایت فضا</li>
                            <li>پشتیبانی نامحدود</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one"><span
                                    class="txt">شروع کنید</span></a>
                        </div>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h3>حرفه ای </h3>
                        <div class="text">طراحی شده برای مشاغل با الزامات بهداشتی استاندارد</div>
                        <div class="price">100000 تومان <span>/ هر ماه </span></div>
                        <ul class="price-list">
                            <li>پشتیبانی 24/7</li>
                            <li>تنظیمات پیشرفته</li>
                            <li>16 گیگابایت فضا</li>
                            <li>پشتیبانی نامحدود</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one"><span
                                    class="txt">شروع کنید</span></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
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

    @include('home.footer')


</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->

<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>انتخاب رنگ دلخواه</h6>
    </div>

    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>


    <a href="https://www.rtl-theme.com/user-profile/tn_plugin/" class="purchase-btn">خرید فقط با 89 هزار تومان</a>

    <div class="palate-foo">
        <span>در پنل مدیریت گزینه های بیشتری برای رنگ و یک ظاهر طراحی خواهید یافت. این انتخابگر رنگ فقط برای اهداف نمایشی استفاده می شود.</span>
    </div>

</div>

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
