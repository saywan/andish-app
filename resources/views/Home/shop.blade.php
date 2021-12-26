<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title>
        فروشگاه - شرکت اندیش گستر
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
                                <a href="index.html"><img src="images/logo-2.png" alt=""/></a>
                            </div>
                            <div class="content-box">
                                <h2> درباره ما </h2>
                                <p class="text">استدلال به نفع استفاده از متن پرکننده چیزی شبیه به این است: اگر در
                                    فرآیند مشاوره از محتوای واقعی استفاده می کنید ، هر زمان که به یک نقطه بررسی رسیدید ،
                                    در نهایت خود و نه طرح محتوا را بررسی و مذاکره می کنید.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">مشاوره </span></a>
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

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
        <div class="auto-container">
            <h2>فروشگاه ما </h2>
            <ul class="page-breadcrumb">
                <li><a href="index.html">صفحه اصلی </a></li>
                <li>فروشگاه ما</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="sidebar-side right-sidebar col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-inner">

                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <div class="sidebar-title">
                                    <h5>جستجو : -</h5>
                                </div>
                                <form method="post" action="https://expert-themes.com/html/globex/contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="جستجو ... "
                                               required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!-- Categories Widget -->
                            <div class="sidebar-widget categories-widget">
                                <div class="sidebar-title">
                                    <h5>دسته بندی: -</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="blog-cat">
                                        <li><a href="#">مشاوره <span>( 05 )</span></a></li>
                                        <li><a href="#">داده های سایبری <span>( 23 )</span></a></li>
                                        <li><a href="#">طراحی <span>( 22 )</span></a></li>
                                        <li><a href="#">دیجیتال <span>( 15 )</span></a></li>
                                        <li><a href="#">مارکتینگ <span>( 36 )</span></a></li>
                                        <li><a href="#">امنیت <span>( 48 )</span></a></li>
                                        <li><a href="#">UI/UX طراحی <span>( 06 )</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h5>پست های اخیر : -</h5>
                                </div>
                                <div class="widget-content">
                                    <article class="post">
                                        <figure class="post-thumb"><img src="images/resource/post-thumb-5.jpg" alt=""><a
                                                href="news-detail.html" class="overlay-box"><span
                                                    class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a href="news-detail.html">بهترین فناوری راه حل فناوری اطلاعات
                                                جهان را تعریف کنید</a></div>
                                        <div class="post-info">خرداد 1400</div>
                                    </article>
                                    <article class="post">
                                        <figure class="post-thumb"><img src="images/resource/post-thumb-6.jpg" alt=""><a
                                                href="news-detail.html" class="overlay-box"><span
                                                    class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a href="news-detail.html">شما باید 20 راز تغییر شکل دیجیتال
                                                را امتحان کنید</a></div>
                                        <div class="post-info">خرداد 1400</div>
                                    </article>
                                    <article class="post">
                                        <figure class="post-thumb"><img src="images/resource/post-thumb-7.jpg" alt=""><a
                                                href="news-detail.html" class="overlay-box"><span
                                                    class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a href="news-detail.html">10 چارچوب های PHP شما باید در هر
                                                کجا استفاده کنید</a></div>
                                        <div class="post-info">خرداد 1400</div>
                                    </article>
                                </div>
                            </div>

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-tags">
                                <div class="sidebar-title">
                                    <h5>برچسب ها : -</h5>
                                </div>
                                <div class="widget-content">
                                    <a href="#">شرکتی </a>
                                    <a href="#">مشتری </a>
                                    <a href="#">سایبر </a>
                                    <a href="#">داده </a>
                                    <a href="#">طراحی </a>
                                    <a href="#">خدمات اطلاعاتی </a>
                                    <a href="#">مارکتینگ </a>
                                    <a href="#">موضوع </a>
                                    <a href="#">عملیاتی </a>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Shop Single-->
                    <div class="shop-section">

                        <!--Sort By-->
                        <div class="items-sorting">
                            <div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h6>نمایش موارد 1-9 از 36 نتیجه</h6>
                                </div>
                                <div class="select-column pull-right col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>مرتب سازی پیش فرض</option>
                                            <option>توسط فروشنده</option>
                                            <option>توسط قیمت</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="our-shops">

                            <div class="row clearfix">


                                @if(count($product) > 0)
                                    @foreach($product as $itemProd)
                                        <div class="single-product-item col-lg-4 col-md-6 col-sm-12 text-center">
                                            <a href="{{url('Product/'.$itemProd->slug.'/'.$itemProd->id)}}">
                                                <div class="img-holder">

                                                    <img width="270" height="300"
                                                         src="{{asset($itemProd->image)}}"
                                                         class="" alt="{{$itemProd->title}}">

                                                </div>
                                            </a>
                                            <div class="title-holder text-center">
                                                <div class="static-content">
                                                    <h3 class="title text-center">
                                                        <a href="{{url('Product/'.$itemProd->slug.'/'.$itemProd->id)}}">
                                                            {{$itemProd->title}}
                                                        </a>
                                                    </h3>
                                                    <span class="price">
                                                        <span class="amount"><span
                                                                class="">تومان </span>
                                                        {{  number_format(  $itemProd->price) }}
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="overlay-content">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a href="shop-single.html"><span
                                                                    class="flaticon-shopping-cart"></span>
                                                                <div class="toltip-content">
                                                                    <p>افزودن به سبد</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-single.html" class=""><span
                                                                    class="fa fa-heart"></span>
                                                                <div class="toltip-content">
                                                                    <p>افزودن به علاقه مندیها</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{asset("Content/images/resource/products/1.jpg")}}"
                                                               class="lightbox-image"
                                                               data-fancybox="shop-gallery"><span
                                                                    class="fa fa-expand"></span>
                                                                <div class="toltip-content">
                                                                    <p>بزرگنمایی </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination text-center">
                            <ul class="clearfix">
                                <li>
                                    <a href="#">
                                        {{$product->links()}}
                                    </a>
                                </li>
                                {{--<li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>--}}
                            </ul>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Info Section -->
    <section class="info-section" style="background-image: url(images/background/6.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Logo Column -->
                <div class="logo-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo-2.png" alt=""/></a>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box"><span class="flaticon-pin"></span></div>
                        <ul>
                            <li><strong>آدرس </strong></li>
                            <li>ایران، ارومیه، شاهین دژ</li>
                        </ul>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                        <ul>
                            <li><strong>تلفن </strong></li>
                            <li>+ 786 875 864 75</li>
                        </ul>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box"><span class="flaticon-email-1"></span></div>
                        <ul>
                            <li><strong>ایمیل </strong></li>
                            <li>support@globex.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
