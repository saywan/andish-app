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

    <!-- Sidebar Cart Item -->

    <!-- END sidebar widget item -->

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
        <div class="auto-container">
            <h2> درباره ما </h2>
            <ul class="page-breadcrumb">
                <li><a href="index.html">صفحه اصلی </a></li>
                <li>درباره ما </li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">درباره شرکت</div>
                <h2>
                    {{$setting->about_title}}
               </h2>
            </div>
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            {!! $setting->about_desc !!}

                        </div>
                        <div class="blocks-outer">

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-award-1"></div>
                                    <h6>تجربه </h6>
                                    <div class="feature-text">تیم عالی ما متشکل از بیش از 1400 متخصص نرم افزار است.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon flaticon-technical-support"></div>
                                    <h6>پشتیبانی سریع </h6>
                                    <div class="feature-text">ما به شما کمک می کنیم ضمن به اشتراک گذاشتن ایده های جسورانه ، ایده های جدید پررنگ خود را ارسال کنید.</div>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="Content/images/icons/play-icon.png" alt="" /></i>&ensp; نمایش ویدئو </span></a>

                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column" style="background-image: url(images/icons/globe.png)">
                        <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png)"></div>
                        <div class="images-outer parallax-scene-1">
                            <div class="image" data-depth="0.10">
                                <img src="Content/images/resource/about-1.jpg" alt="" />
                            </div>
                            <div class="image-two" data-depth="0.30">
                                <img src="Content/images/resource/about-2.jpg" alt="" />
                            </div>
                            <div class="image-three" data-depth="0.20">
                                <img src="Content/images/resource/about-3.jpg" alt="" />
                            </div>
                            <div class="image-four" data-depth="0.30">
                                <img src="Content/images/resource/about-4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <a href="about.html" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>مطالعه بیشتر درباره شرکت</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">

                        <!-- Column -->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="330">0</span>+
                                    </div>
                                    <h4 class="counter-title">مشتریان فعال </h4>
                                </div>
                            </div>
                        </div>

                        <!-- Column -->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="5000" data-stop="850">0</span>+
                                    </div>
                                    <h4 class="counter-title">پروژه های انجام شده</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Column -->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="25">0</span>+
                                    </div>
                                    <h4 class="counter-title">مشاوران تیم</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Column -->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3500" data-stop="10">0</span>+
                                    </div>
                                    <h4 class="counter-title">سالهای باشکوه</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <!-- About Section Two -->
    <section class="about-section-two" style="background-image: url(images/background/3.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer" style="background-image: url(images/background/pattern-10.png)"></div>
                        <div class="image">
                            <img src="Content/images/resource/about-5.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Skill Column -->
                <div class="skill-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title">درباره گلوباکس</div>
                            <h2>تجارت خود را با ارائه دهنده پیشرو راه حل IT تغییر دهید.</h2>
                            <div class="text">گوش می دهیم. ما توصیه می کنیم. ما با هم طراحی می کنیم. مشتری های خوشحال و روابط مداوم همان چیزی است که ما برای آن تلاش می کنیم. موفقیت با نتایج سنجیده می شود ، مهمترین احساس مشتری در مورد تجربه خود با ماست.</div>
                        </div>

                        <!-- Skills -->
                        <div class="skills">

                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">UI/UX طراحی </div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
                                </div>
                            </div>

                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">توسعه اپ</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
                                </div>
                            </div>

                            <!-- Skill Item -->
                            <div class="skill-item">
                                <div class="skill-header clearfix">
                                    <div class="skill-title">توسعه وب</div>
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="73">0</span>%</div></div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="73"></div></div>
                                </div>
                            </div>

                        </div>

                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">مطالعه بیشتر</span></a>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section Two -->

    <!--Sponsors Section-->
    <section class="sponsors-section style-two">
        <div class="auto-container">

            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/4.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="Content/images/clients/4.png" alt=""></a></div></li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Process Section -->
    <section class="process-section">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-11.jpg)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/background/pattern-12.jpg)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">روند ما  </div>
                <h2>رانندگی نتایج مشتری با استفاده از جدید <br> نقطه نظرات نوآوری</h2>
            </div>
            <div class="row clearfix">

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">01</div>
                        <h4><a href="services-detail.html">راه حل های پایان به پایان و خدمات تضمین شده</a></h4>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</div>
                        <a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>ادامه مطلب </a>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">02</div>
                        <h4><a href="services-detail.html">پیش از منحنی ما در آینده فناوری اطلاعات شما را اثبات نمی کنیم</a></h4>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</div>
                        <a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>ادامه مطلب </a>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="number-box">03</div>
                        <h4><a href="services-detail.html">اطمینان از اطمینان از موفقیت هر پروژه ای را تجربه کنید</a></h4>
                        <div class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</div>
                        <a class="read-more" href="services-detail.html"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>ادامه مطلب </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Process Section -->

    <!-- Technology Section -->
    <section class="technology-section style-two" style="background-image: url(images/background/1.jpg)">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/background/pattern-6.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">تکنولوژی جدید</div>
                <h2>کنترل زمان واقعی زیرساخت شما  <br> راه حل های دیجیتال مارک دار</h2>
            </div>
            <div class="row clearfix">

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="services-detail.html" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-dashboard"></span>
                        </div>
                        <h6>آنالیز دیتا</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="services-detail.html" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-coding-3"></span>
                        </div>
                        <h6>توسعه وب</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="services-detail.html" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-design"></span>
                        </div>
                        <h6>Ul/UX طراحی </h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="services-detail.html" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-web-browser"></span>
                        </div>
                        <h6>آی کی و تست</h6>
                    </div>
                </div>

                <!-- Technology Block -->
                <div class="technology-block">
                    <div class="inner-box">
                        <a href="services-detail.html" class="overlay-link"></a>
                        <div class="icon-box">
                            <span class="flaticon-network-1"></span>
                        </div>
                        <h6>تیم اختصاصی</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Technology Section -->

    <!-- Experiance Section -->
    <section class="experiance-section" style="background-image: url(images/background/pattern-9.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">تجربه ، اجرا ، عالی بودن.</div>
                <h2>کاری که ما در واقع انجام می دهیم</h2>
            </div>

            <!-- Experiance Info Tabs -->
            <div class="experiance-info-tabs">
                <!-- Experiance Tabs -->
                <div class="experiance-tabs tabs-box">

                    <!-- Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-html" class="tab-btn"><span class="icon flaticon-html"></span>اچ تی ام ال </li>
                        <li data-tab="#prod-bootstrap" class="tab-btn"><span class="icon flaticon-bootstrap"></span>بوت استرپ </li>
                        <li data-tab="#prod-css" class="tab-btn active-btn"><span class="icon flaticon-css"></span>سی اس اس </li>
                        <li data-tab="#prod-php" class="tab-btn"><span class="icon flaticon-php"></span>پی اچ پی </li>
                        <li data-tab="#prod-java" class="tab-btn"><span class="icon flaticon-java"></span>جاوا اسکریپت </li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab" id="prod-html">
                            <div class="content">
                                <h4>خدمات توسعه وب سایت HTML</h4>
                                <div class="text">اینتیج شریک انتخابی بسیاری از شرکتهای پیشرو ، SME و چالشگران فناوری در جهان است. ما به مشاغل کمک می کنیم <br> از طریق توسعه نرم افزار سفارشی ، طراحی محصول ، تعداد و خدمات مشاوره ای ارزش آنها را بالا ببرید.</div>
                                <div class="btn-box text-center">
                                    <a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">مطالعه بیشتر</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-bootstrap">
                            <div class="content">
                                <h4>خدمات توسعه وب سایت بوت استرپ </h4>
                                <div class="text">اینتیج شریک انتخابی بسیاری از شرکتهای پیشرو ، SME و چالشگران فناوری در جهان است. ما به مشاغل کمک می کنیم <br> از طریق توسعه نرم افزار سفارشی ، طراحی محصول ، تعداد و خدمات مشاوره ای ارزش آنها را بالا ببرید.</div>
                                <div class="btn-box text-center">
                                    <a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">مطالعه بیشتر</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab active-tab" id="prod-css">
                            <div class="content">
                                <h4>خدمات توسعه وب سایت CSS</h4>
                                <div class="text">اینتیج شریک انتخابی بسیاری از شرکتهای پیشرو ، SME و چالشگران فناوری در جهان است. ما به مشاغل کمک می کنیم <br> از طریق توسعه نرم افزار سفارشی ، طراحی محصول ، تعداد و خدمات مشاوره ای ارزش آنها را بالا ببرید.</div>
                                <div class="btn-box text-center">
                                    <a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">مطالعه بیشتر</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-php">
                            <div class="content">
                                <h4>خدمات توسعه وب سایت Php</h4>
                                <div class="text">اینتیج شریک انتخابی بسیاری از شرکتهای پیشرو ، SME و چالشگران فناوری در جهان است. ما به مشاغل کمک می کنیم <br> از طریق توسعه نرم افزار سفارشی ، طراحی محصول ، تعداد و خدمات مشاوره ای ارزش آنها را بالا ببرید.</div>
                                <div class="btn-box text-center">
                                    <a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">مطالعه بیشتر</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="prod-java">
                            <div class="content">
                                <h4>خدمات توسعه وب سایت جاوا اسکریپت</h4>
                                <div class="text">اینتیج شریک انتخابی بسیاری از شرکتهای پیشرو ، SME و چالشگران فناوری در جهان است. ما به مشاغل کمک می کنیم <br> از طریق توسعه نرم افزار سفارشی ، طراحی محصول ، تعداد و خدمات مشاوره ای ارزش آنها را بالا ببرید.</div>
                                <div class="btn-box text-center">
                                    <a href="services-detail.html" class="theme-btn btn-style-three"><span class="txt">مطالعه بیشتر</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Experiance Section -->

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
