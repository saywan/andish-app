
<?php
$setting=\App\Models\AdminSettings::find(1);
?>




<header class="main-header header-style-one">



    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="{{url('/')}}">
                        <img src="{{asset("Content/images/login.png")}}" alt="" title=""></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تغییر ناوبری ">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li>
                                <a href="{{url('/')}}">
                                    صفحه اصلی
                                </a>
                            </li>

                            <li>
                                <a href="{{url('/shop')}}">
                                    فروشگاه شرکت
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/blogs')}}">
                                    وبلاگ
                                </a>
                            </li>

                            <li class="dropdown">
                                <a href="#">پروژه های ما </a>
                                <ul>
                                    <li><a href="{{url('Project')}}">
                                            مشتریان اندیش گستر
                                        </a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/aboutUs')}}">
                                    درباره ما
                                </a>
                            </li>
                            <li><a href="{{url('/contactUs')}}">تماس با ما </a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Cart Box -->
                    <div class="cart-box">
                        <div class="dropdown">
                            <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span>
                                <span class="total-cart">0</span>
                            </button>
                            <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">

                               {{-- <div class="cart-product">
                                    <div class="inner">
                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                        <div class="image"><img src="images/resource/post-thumb-1.jpg" alt="" /></div>
                                        <h3><a href="shop-single.html">کیف پول </a></h3>
                                        <div class="quantity-text"> تعداد  1</div>
                                        <div class="price">99000 تومان</div>
                                    </div>
                                </div>--}}


                                <div class="cart-total">جمع کل:  <span>
                                    0
                                    </span></div>
                                <ul class="btns-boxed">
                                    <li><a href="">نمایش سبد </a></li>
                                    <li><a href="">پرداخت </a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                    <!-- Quote Btn -->
                    <div class="btn-box">
                        <a href="{{route('register')}}" class="theme-btn btn-style-one">
                            <span class="txt">
                                ثبت نام
                            </span>
                        </a>
                        <a href="{{route('login')}}" class="theme-btn btn-style-one">
                            <span class="txt">
                                ورود
                            </span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{url('/')}}" title=""><img src="{{asset("Content/images/login.png")}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Cart Box -->
                    <div class="cart-box">
                        <div class="dropdown">
                            <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
                            <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu">

                                <div class="cart-product">
                                    <div class="inner">
                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                        <div class="image"><img src="images/resource/post-thumb-1.jpg" alt="" /></div>
                                        <h3><a href="shop-single.html">کیف پول </a></h3>
                                        <div class="quantity-text"> تعداد  1</div>
                                        <div class="price">99000 تومان</div>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="inner">
                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                        <div class="image"><img src="images/resource/post-thumb-2.jpg" alt="" /></div>
                                        <h3><a href="shop-single.html">جعبه بوکس</a></h3>
                                        <div class="quantity-text"> تعداد  1</div>
                                        <div class="price">99000 تومان</div>
                                    </div>
                                </div>
                                <div class="cart-total">جمع کل:  <span>198000 تومان</span></div>
                                <ul class="btns-boxed">
                                    <li><a href="shopping-cart.html">نمایش سبد </a></li>
                                    <li><a href="checkout.html">پرداخت </a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset("images/logo.png")}}" alt="" title=""></a></div>
            <div class="menu-outer">

            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>



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
                            <a href="{{url('/')}}"><img src="{{asset("Content/images/loginmain.png")}}" alt="" width="100" height="60"/></a>
                        </div>
                        <div class="content-box">
                            <h2> درباره ما </h2>
                            <p class="text-justify">
                                شرکت اندیش گستر
                                یکی از بزرگترین تامین کنندگان لوله و اتصالات پلی اتیلن آبرسانی، گاز رسانی و فاضلابی مطابق با استانداردهای معتبر ملی، بیـن المللی و سیـستم استاندارد مدیریت کیفیت ISO 9001-2015, ISO14001- 2015 , OHSAS 18001 در ایران است.

                            </p>
                            <a href="{{url('contactUs')}}" class="theme-btn btn-style-three"><span class="txt">مشاوره </span></a>
                        </div>
                        <div class="contact-info">
                            <h2>اطلاعات تماس </h2>
                            <ul class="list-style-one">
                                <li><span class="icon fa fa-location-arrow"></span>
                                    {!! $setting->contact_address !!}
                                </li>
                                <li><span class="icon fa fa-phone"></span>
                                    {{$setting->telephone_one_shop}}
                                </li>
                                <li><span class="icon fa fa-envelope"></span>
                                    {{$setting->emails_site}}
                                </li>
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
