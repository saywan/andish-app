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
    <link id="theme-color-file" href="{{asset("Content/js/sweet-alert2/sweetalert2.min.css")}}" rel="stylesheet">
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
                <li>جزئیات فروشگاه</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Single Section-->
    <section class="shop-single-section">
        <div class="auto-container">

            <!--Shop Single-->
            <div class="shop-page product-details" id="app">

                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">

                        <div class="image-column col-lg-7 col-md-12 col-sm-12">
                            <div class="carousel-outer">

                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li>
                                        <a href="" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید">
                                            <img src="{{asset($product->image)}}" alt="{{$product->title}}">
                                        </a>
                                    </li>
                                    {{--<li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>
                                    <li><a href="images/resource/products/13.jpg" class="lightbox-image"
                                           title="کپشن را اینجا بنویسید"><img src="images/resource/products/13.jpg"
                                                                              alt=""></a></li>--}}
                                </ul>

                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{asset($product->image)}}" alt=""></li>
                                </ul>

                            </div>
                        </div>

                        <!--Info Column-->
                        <div class="info-column col-lg-5 col-md-12 col-sm-12">
                            <div class="details-header">
                                <h2>
                                    {{$product->title}}
                                </h2>

                                @if($product->is_running_out == 0)

                                    <a href="#" class="product-name">
                                                        <span class="amount">
                                                            @if(empty($product->price))
                                                                0
                                                            @else
                                                                <div class="item-price">قیمت:
                                    {{number_format($product->price)}}
                                    تومان</div>
                                                            @endif


                                                        </span>
                                    </a>
                                @endif


                            </div>



                            <div class="other-options">
                                <div class="clearfix">
                                    @if($product->is_running_out == 0)
                                        <div class="pull-left">
                                            <div class="item-quantity">
                                                <select name="quantity" id="quantity" class="form-control" required>
                                                    <option value="0">
                                                        لطفا تعداد را انتخاب کنید
                                                    @for($i=1 ;$i <= $product->count ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>

                                                        @endfor
                                                        </option>
                                                </select>
                                                {{--  <input class="quantity-spinner" type="number"   value="1"  name="quantity" min="1" max="{{$product->count}}">--}}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="pull-left">


                                        {{--<input type="hidden" value="1" name="qty"/>--}}
                                        <input type="hidden" value="{{$product->price}}" name="price" id="price"/>
                                        <input type="hidden" value="{{$product->id}}" name="product_id" id="product_id"/>


                                        <div class="btns-box">
                                            @if($product->is_running_out == 1)
                                                <div class="alert alert-danger">
                                                    <span class="txt">
                                                        ناموجود
                                                    </span>
                                                </div>
                                            @else
                                                <button type="button" class="theme-btn btn-style-three" @click="AddBasket({{$product->id}})">
                                                    <span
                                                        class="txt">
                                                        افزودن به سبد خرید
                                                    </span>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <ul class="shop-list">
                                <li><strong>کد کالا </strong><span class="theme_color">.</span>
                                    {{     $product->AKC }}
                                </li>
                                {{-- <li><strong>دسته </strong><span class="theme_color">.</span>برندینگ / طراحی وب</li>
                                 <li><strong>اشتراک </strong><span class="theme_color">.</span></li>--}}
                                {{--   <li><a href="#">افزودن به علاقه مندیها .</a></li>--}}
                            </ul>

                        </div>

                    </div>
                </div>
                <!--Basic Details-->

                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-details" class="tab-btn active-btn">توضیحات</li>
                            {{--     <li data-tab="#prod-reviews" class="tab-btn">نظرات (2)</li>--}}
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="prod-details">
                                <div class="content">
                                    <p>
                                        {!!  $product->description !!}
                                    </p>
                                </div>
                            </div>

                            <!--Tab / Active Tab-->


                            <!--Tab-->
                            <div class="tab" id="prod-reviews">
                                <!--Reviews Container-->
                                <div class="reviews-container">

                                    <!--Review-->
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="images/resource/author-1.jpg" alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rev-header clearfix">
                                                <h4>مایکل روحانی</h4>
                                                <div class="rating"><span class="fa fa-star"></span> <span
                                                        class="fa fa-star"></span> <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span> <span
                                                        class="fa fa-star-o"></span></div>
                                                <div class="time">18 ساعت قبل</div>
                                            </div>
                                            <div class="rev-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                                                نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
                                                را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. .
                                            </div>
                                        </div>
                                    </div>

                                    <!--Review-->
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="images/resource/author-2.jpg" alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rev-header clearfix">
                                                <h4>دنی </h4>
                                                <div class="rating"><span class="fa fa-star"></span> <span
                                                        class="fa fa-star"></span> <span class="fa fa-star"></span>
                                                    <span class="fa fa-star-o"></span> <span
                                                        class="fa fa-star-o"></span></div>
                                                <div class="time">18 ساعت قبل</div>
                                            </div>
                                            <div class="rev-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                                                نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان
                                                را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. لورم ایپسوم
                                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                                لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود ابزارهای کاربردی می باشد..
                                            </div>
                                        </div>
                                    </div>

                                    <!--Add Review-->
                                    <div class="add-review">
                                        <h2>افزودن یک نظر </h2>

                                        <form method="post"
                                              action="https://expert-themes.com/html/globex/shop-single.html">
                                            <div class="row clearfix">
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <label> نام *</label>
                                                    <input type="text" name="name" value="" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <label> ایمیل *</label>
                                                    <input type="email" name="email" value="" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <label> وب سایت *</label>
                                                    <input type="text" name="website" value="" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <label> امتیاز </label>
                                                    <div class="rating">
                                                        <a href="#" class="rate-box" title="1 Out of 5"><span
                                                                class="fa fa-star"></span></a>
                                                        <a href="#" class="rate-box" title="2 Out of 5"><span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span></a>
                                                        <a href="#" class="rate-box" title="3 Out of 5"><span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"> </span> <span
                                                                class="fa fa-star"></span></a>
                                                        <a href="#" class="rate-box" title="4 Out of 5"><span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span></a>
                                                        <a href="#" class="rate-box" title="5 Out of 5"><span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span> <span
                                                                class="fa fa-star"></span></a>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <label>نظر شما </label>
                                                    <textarea name="review-message"></textarea>
                                                </div>
                                                <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                    <button type="button" class="theme-btn btn-style-three"><span
                                                            class="txt"> افزودن نظر</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!--End Tab-->

                        </div>
                    </div>

                </div>
                <!--End Product Info Tabs-->

            </div>

        </div>
    </section>
    <!--End Shop Single Section-->

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
