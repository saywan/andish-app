<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <title>
        سبد خرید | فروشگاه اینترنتی اندیش گستر
    </title>
    <!-- Stylesheets -->
    <link href="{{asset("Content/css/bootstrap.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("Content/css/responsive.css")}}" rel="stylesheet">


    <!-- Color Switcher Mockup -->
    <link href="{{asset("Content/css/color-switcher-design.css")}}" rel="stylesheet">
    <link id="theme-color-file" href="{{asset("Content/js/sweet-alert2/sweetalert2.min.css")}}" rel="stylesheet">
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
    <script src="{{asset("Content/js/sweet-alert2/sweetalert2.min.js")}}"></script>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
@include('Home.header')
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
        <div class="pattern-layer-one"
             style="background-image: url({{asset("Content/images/background/pattern-16.png")}})"></div>
        <div class="auto-container">
            <h2>جزئیات فروشگاه</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">صفحه اصلی </a></li>
                <li>سبد خرید</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Cart Section-->
    <section class="cart-section" id="app">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                @if(!empty($userCartItems))
                    <div class="table-outer">

                        <table class="cart-table">
                            <thead class="cart-header">
                            <tr>
                                <th class="prod-column">محصول</th>
                                <th class="price">قیمت</th>
                                <th>تعداد</th>
                                <th>مجموع</th>
                                <th>پاک کردن</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php  $total_price = 0; ?>
                            @foreach($userCartItems as $itemCart)
                                <tr>
                                    <td class="prod-column">
                                        <div class="column-box">
                                            <figure class="prod-thumb">
                                                <a href="#">
                                                    <img    src="{{$itemCart['product']['image']}}" alt=""></a>
                                            </figure>
                                            <h6 class="prod-title">
                                                {{$itemCart['product']['title']}}

                                            </h6>
                                        </div>
                                    </td>
                                    <td class="price"> {{number_format($itemCart['product']['price'])}} تومان</td>
                                    <td class="qty">
                                        {{--<input class="quantity-spinner" type="text" value="2"
                                                           name="quantity">--}}
                                        <input type="number" min="1" max="100"
                                               value="{{$itemCart['qty']}}"
                                               name="quantityCart" id="quantityCart" disabled>
                                        <div class="quantity-nav">
                                            <div class="quantity-button quantity-up"
                                                 id="quantity-plus"
                                                 @click="UpdateCart({{$itemCart['id']}},'plus')"
                                                 name="quantityplus">+
                                            </div>
                                            <div class="quantity-button quantity-down"
                                                 name="quantityminus"
                                                 @click="UpdateCart({{$itemCart['id']}},'minus')">
                                                -
                                            </div>
                                    </td>
                                    <td class="sub-total">  {{  number_format($itemCart['product']['price'] * $itemCart['qty']  )  }} تومان</td>
                                    <td class="remove"><a href="#" class="remove-btn"><span
                                                class="flaticon-multiply"></span></a></td>
                                </tr>
                                @php $total_price=$total_price +( $itemCart['product']['price'] * $itemCart['qty']) @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="coupon-outer clearfix">
                        <div class="pull-left">
                            <div class="apply-coupon clearfix">
                                <div class="form-group clearfix">
                                    <input type="text" name="coupon-code" value="" placeholder="ک تخفیف">
                                </div>
                                <div class="form-group clearfix">
                                    <button type="button" class="theme-btn coupon-btn btn-style-three"><span
                                            class="txt">اعمال کد </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="pull-right">
                            <button type="button" class="theme-btn btn-style-three"><span class="txt">بروز سبد</span>
                            </button>
                        </div>

                    </div>
                    <div class="cart-total-box">
                        <h4>مجموع سبد خرید</h4>
                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col col-title">مجموع کامل</span><span
                                    class="col">350000 توامن</span></li>
                            <li class="clearfix"><span class="col col-title">مالیات </span><span
                                    class="col">15000 تومان</span></li>
                            <li class="total clearfix"><span class="col col-title">مجموع </span><span class="col">365000 تومان</span>
                            </li>
                        </ul>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="theme-btn checkout-btn">ادامه به پرداخت</button>
                    </div>

                @else
                    <div class="alert alert-danger">
                        <h4>
                            سبد خرید شما در حال حاضر خالی است
                        </h4>
                    </div>
                    <a href="{{url('/shop')}}" class="btn btn-primary">
                        برگشت به فروشگاه شرکت اندیش گستر
                    </a>
                @endif

            </div>

        </div>
    </section>

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

<script src="{{asset("js/app.js")}}"></script>
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
<script src="{{asset("Content/js/mixitup.js")}}"></script>
<script src="{{asset("Content/js/wow.js")}}"></script>
<script src="{{asset("Content/js/nav-tool.js")}}"></script>
<script src="{{asset("Content/js/jquery-ui.js")}}"></script>
<script src="{{asset("Content/js/jquery.bootstrap-touchspin.js")}}"></script>
<script src="{{asset("Content/js/script.js")}}"></script>
<script src="{{asset("Content/js/color-settings.js")}}"></script>

</body>


</html>
