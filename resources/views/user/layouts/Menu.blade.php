


<div class="menu-body navbar-vertical tab-content" data-simplebar>
    <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
         aria-labelledby="dasboard-tab">


        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{url('User/index')}}">داشبورد کاربری</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">مشاهده فروشگاه  </a>
            </li>

        </ul><!--end nav-->
    </div>




    <div id="MetricaProduct" class="main-icon-menu-pane  tab-pane" role="tabpanel"
         aria-labelledby="product-tab">
        <div class="title-box">
            <h6 class="menu-title">
                مدیریت سفارشات
            </h6>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse_22">
            <!-- Navigation -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#Factor" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="ProductGroupPart">
                         فاکتور
                    </a>
                    <div class="collapse " id="Factor">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('User.Factor')}}">
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
