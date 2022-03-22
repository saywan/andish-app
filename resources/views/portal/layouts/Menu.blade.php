


<div class="menu-body navbar-vertical tab-content" data-simplebar>
    <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
         aria-labelledby="dasboard-tab">


        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{url('portal/index')}}">داشبورد مدیریت</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">مشاهده وب سایت </a>
            </li><!--end nav-item-->

        </ul><!--end nav-->
    </div>

    <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
         aria-labelledby="apps-tab">
        <div class="title-box">
            <h6 class="menu-title">امور مشتریان و پرسنل </h6>
        </div>

        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAnalytics">
                      مشتری
                    </a>
                    <div class="collapse " id="sidebarAnalytics">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('portal.createuser')}}" class="nav-link ">ثبت مشتری جدید</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('portal.User')}}" class="nav-link ">لیست مشتریان</a>
                            </li>

                        </ul>
                    </div>
                </li>
               {{-- <li class="nav-item">
                    <a class="nav-link" href="#sidebarLevel" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarLevel">
                       سطح دسترسی
                    </a>
                    <div class="collapse " id="sidebarLevel">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('portal.createRole')}}" class="nav-link ">ثبت سطح جدید</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('portal.Role')}}" class="nav-link ">لیست نقش و سطح ها</a>
                            </li>

                        </ul>
                    </div>
                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarEmployement" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarEmployement">
                      پرسنل
                    </a>
                    <div class="collapse " id="sidebarEmployement">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('portal.createEmployee')}}" class="nav-link ">ثبت پرسنل جدید</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('portal.Employee')}}" class="nav-link ">لیست پرسنل</a>
                            </li>

                        </ul>
                    </div>
                </li>



            </ul><!--end navbar-nav--->
        </div><!--end sidebarCollapse-->
    </div>


    <div id="MetricaProduct" class="main-icon-menu-pane  tab-pane" role="tabpanel"
         aria-labelledby="product-tab">
        <div class="title-box">
            <h6 class="menu-title"> مدیریت کالا و فاکتور</h6>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse_22">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#ProductPercentProduct" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="ProductPercentProduct">
                        تخفیفات و درصد کلایی
                    </a>
                    <div class="collapse " id="ProductPercentProduct">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.CreatePercentProduct')}}">
                                   ثبت درصد جدید
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.PercentProduct')}}">
                                لیست درصد کالای
                                </a>
                            </li>

                        </ul><!--end nav-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ProductGroupPart" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="ProductGroupPart">
                        گروه بندی کالا
                    </a>
                    <div class="collapse " id="ProductGroupPart">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.CreateGroupProduct')}}">
                                    ثبت گروه جدید
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.GroupProduct')}}">
                                    مدیریت گروه بندی
                                </a>
                            </li>

                        </ul><!--end nav-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ProductPart" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="ProductPart">
                       مدیریت کالا
                    </a>
                    <div class="collapse " id="ProductPart">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.CreateProduct')}}">
                                    ثبت کالا
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.Product')}}">
                                  مدیریت کالا
                                </a>
                            </li>

                        </ul><!--end nav-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Factor" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="ProductGroupPart">
                         فاکتور
                    </a>
                    <div class="collapse " id="Factor">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.CreateFactor')}}">
                                 ثبت فاکتور جدید
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('portal.Factor')}}">
                                   مدیریت فاکتور
                                </a>
                            </li>

                        </ul><!--end nav-->
                    </div>
                </li>

            </ul><!--end navbar-nav--->
        </div><!--end sidebarCollapse_2-->
    </div>


    <div id="MetricaLogout" class="main-icon-menu-pane  tab-pane" role="tabpanel"
         aria-labelledby="logout-tab">

        <div class="collapse navbar-collapse" id="sidebarCollapse_22">
            <!-- Navigation -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     خروج
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul><!--end nav-->
        </div><!--end sidebarCollapse_2-->
    </div>

    <div id="MetricaUikit" class="main-icon-menu-pane  tab-pane" role="tabpanel"
         aria-labelledby="uikit-tab">
        <div class="title-box">
            <h6 class="menu-title">مدیریت عمومی سامانه</h6>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse_2">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarElements">
                       مدیریت صفحات سایت
                    </a>
                    <div class="collapse " id="sidebarElements">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('portal.MangePage') }}">
                                    مدیریت صفحات سایت
                                </a>
                            </li><!--end nav-item-->


                        </ul><!--end nav-->
                    </div><!--end sidebarElements-->
                </li><!--end nav-item-->

            </ul><!--end navbar-nav--->
        </div><!--end sidebarCollapse_2-->
    </div>

    <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
        <div class="title-box">
            <h6 class="menu-title">Pages</h6>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="pages-profile.html">Profile</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-tour.html">Tour</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-timeline.html">Timeline</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-treeview.html">Treeview</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-starter.html">Starter Page</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-pricing.html">Pricing</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-blogs.html">Blogs</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-faq.html">FAQs</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="pages-gallery.html">Gallery</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div>

    <div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel"
         aria-labelledby="authentication-tab">
        <div class="title-box">
            <h6 class="menu-title">Authentication</h6>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="auth-login.html">Log in</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-login-alt.html">Log in alt</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-register.html">Register</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-register-alt.html">Register-alt</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-404.html">Error 404</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-404-alt.html">Error 404-alt</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-500.html">Error 500</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-500-alt.html">Error 500-alt</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div>
</div>
