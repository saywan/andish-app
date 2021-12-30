<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>


    <meta charset="utf-8"/>
    <title>
        پنل مدیریت
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('panel/images/favicon.ico')}}">


    <link href="{{asset("panel/plugins/lightpicker/litepicker.css")}}" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="{{asset("panel/css/bootstrap-rtl.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("panel/css/icons.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("panel/css/app-rtl.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("panel/plugins/sweet-alert2/sweetalert2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/plugins/animate/animate.min.css")}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset("panel/plugins/toaster/iziToast.min.css")}}">
    @yield('styles')
</head>

<body id="body">
<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="{{route('portal.index')}}" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset("panel/images/logo-sm.png")}}" alt="logo-small" class="logo-sm">
                    </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                        data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="مدیریت مشتریان شرکت"
                        data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a><!--end nav-link-->
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="مدیریت کالا شرکت اندیش گستر"
                        data-bs-trigger="hover">
                        <a href="#MetricaProduct" id="product-tab" class="nav-link">
                            <i class="ti ti-shopping-cart menu-icon"></i>
                        </a><!--end nav-link-->
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit"
                        data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                            <i class="ti ti-settings menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="خروج    "
                        data-bs-trigger="hover">
                        <a href="#MetricaLogout" id="logout-tab" class="nav-link">
                            <i class="ti ti-power menu-icon"></i>
                        </a>




                    </li>


                   {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit"
                        data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                            <i class="ti ti-planet menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages"
                        data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-files menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication"
                        data-bs-trigger="hover">
                        <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                            <i class="ti ti-shield-lock menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->--}}
                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->

    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{route('portal.index')}}" class="logo">
                        <span>
                            <img src="{{asset("panel/images/loginmain.png")}}" alt="logo-large"
                                 class="logo-lg logo-dark">
                            <img src="{{asset('panel/images/loginmain.png')}}" alt="logo-large" class="logo-lg logo-light">
                        </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->

        @include('portal.layouts.Menu')
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
        {{--    <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="panel/images/flags/us_flag.jpg" alt="" class="thumb-xxs rounded-circle">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><img src="panel/images/flags/us_flag.jpg" alt="" height="15"
                                                           class="me-2">English</a>
                    <a class="dropdown-item" href="#"><img src="panel/images/flags/spain_flag.jpg" alt="" height="15"
                                                           class="me-2">Spanish</a>
                    <a class="dropdown-item" href="#"><img src="panel/images/flags/germany_flag.jpg" alt="" height="15"
                                                           class="me-2">German</a>
                    <a class="dropdown-item" href="#"><img src="panel/images/flags/french_flag.jpg" alt="" height="15"
                                                           class="me-2">French</a>
                </div>
            </li><!--end topbar-language-->

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-mail"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Emails <span class="badge bg-soft-primary badge-pill">3</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="panel/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="panel/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="panel/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="panel/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="panel/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>--}}

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <span class="alert-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-chart-arcs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-device-computer-camera"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-diamond"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-drone"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      {{--  <img src="panel/images/users/user-4.jpg" alt="profile-user"
                             class="rounded-circle me-2 thumb-sm"/>--}}
                        <div>
                            <small class="d-none d-md-block font-11">مدیریت</small>
                            <span class="d-none d-md-block fw-semibold font-12">
                                @if(Auth::check()))
                                {{Auth::user()->fullname}}
                                @endif
                                <i class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> پروفایل</a>

                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i   class="ti ti-power font-16 me-1 align-text-bottom"></i> خروج</a>

                   {{-- <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        خروج
                    </a>--}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li><!--end topbar-profile-->
           {{-- <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas"
                   data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>--}}
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" action="#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<!-- Top Bar End -->

<div class="page-wrapper">

    <!-- Page Content-->
@yield('main')
<!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('panel/plugins/lightpicker/litepicker.js')}}"></script>
<script src="{{asset("panel/plugins/apexcharts/apexcharts.min.js")}}"></script>
<script src="{{asset("panel/pages/projects-index.init.js")}}"></script>
<!-- App js -->
<script src="{{asset("panel/js/app.js")}}"></script>
<script src="{{asset("panel/plugins/sweet-alert2/sweetalert2.min.js")}}"></script>
<script src="{{asset("panel/pages/sweet-alert.init.js")}}"></script>
<script src="{{asset("panel/plugins/toaster/iziToast.min.js")}}"></script>
@yield('scripts')
</body>
<!--end body-->


</html>
