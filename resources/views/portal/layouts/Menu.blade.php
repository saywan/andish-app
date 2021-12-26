


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
            <h6 class="menu-title">امور مشتریان</h6>
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
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a href="{{route('portal.User')}}" class="nav-link ">لیست مشتریان</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarAnalytics-->
                </li><!--end nav-item-->



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
                    <a class="nav-link" href="{{route('portal.logout')}}">
                     خروج
                    </a>
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

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAdvancedUI">
                        Advanced UI
                    </a>
                    <div class="collapse " id="sidebarAdvancedUI">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-animation.html">Animation</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-files.html">File Manager</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarAdvancedUI-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarForms">
                        Forms
                    </a>
                    <div class="collapse " id="sidebarForms">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-validation.html">Validation</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-wizard.html">Wizard</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-editors.html">Editors</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-uploads.html">File Upload</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarForms-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarCharts">
                        Charts
                    </a>
                    <div class="collapse " id="sidebarCharts">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="charts-apex.html">Apex</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="charts-justgage.html">JustGage</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarCharts-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarTables">
                        Tables
                    </a>
                    <div class="collapse " id="sidebarTables">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="tables-basic.html">Basic</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="tables-datatable.html">Datatables</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="tables-editable.html">Editable</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarTables-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarIcons">
                        Icons
                    </a>
                    <div class="collapse " id="sidebarIcons">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="icons-tabler.html">Tabler</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="icons-feather.html">Feather</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarIcons-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarMaps">
                        Maps
                    </a>
                    <div class="collapse " id="sidebarMaps">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="maps-google.html">Google Maps</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarMaps-->
                </li><!--end nav-item-->

                <li class="nav-item">
                    <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarEmailTemplates">
                        Email Templates
                    </a>
                    <div class="collapse " id="sidebarEmailTemplates">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end sidebarEmailTemplates-->
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
