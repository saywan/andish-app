@extends('portal.layouts.adminMaster')
@section('styles')

@endsection

@section('main')
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">داشبورد مدیریت</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <p class="text-dark mb-1 fw-semibold">کل مشتریان شرکت</p>
                                    <h4 class="my-1">

                                        {{ \App\Helper\Helper::TotalUserCompany()  }}
                                    </h4>

                                </div>
                                <div class="col-auto align-self-center">
                                    <div
                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="user-check" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <p class="text-dark mb-1 fw-semibold">
                                        کل کالا های ثبت شده شرکت
                                    </p>
                                    <h4 class="my-1">

                                        {{ \App\Helper\Helper::TotalProductCompany()  }}
                                    </h4>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div
                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="shopping-cart"
                                           class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <p class="text-dark mb-1 fw-semibold">
                                        کل فاکتور های صادر شده
                                    </p>
                                    <h4 class="my-1">

                                        {{ \App\Helper\Helper::TotalFactorCompany()  }}
                                    </h4>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div
                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col">
                                    <p class="text-dark mb-1 fw-semibold">
                                        تعداد فاکتور در حال پردازش
                                    </p>
                                    <h4 class="my-1">

                                        {{ \App\Helper\Helper::TotalFactorProccsing()  }}
                                    </h4>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div
                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="dollar-sign" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div>
            </div><!--end row-->


            {{-- <div class="row">

                 <div class="col-lg-8">
                     <div class="card">
                         <div class="card-header">
                             <div class="row align-items-center">
                                 <div class="col">
                                     <h4 class="card-title">All Projects</h4>
                                 </div><!--end col-->
                                 <div class="col-auto">
                                     <a href="#" class="text-primary">View All</a>
                                 </div><!--end col-->
                             </div>  <!--end row-->
                         </div><!--end card-header-->
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-hover mb-0">
                                     <thead class="thead-light">
                                     <tr>
                                         <th>Project Name</th>
                                         <th>Client Name</th>
                                         <th>Start Date</th>
                                         <th>Deadline</th>
                                         <th>Status</th>
                                         <th>Progress</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                         <td>Product Devlopment</td>
                                         <td>
                                             <img src="panel/images/users/user-2.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Kevin J. Heal
                                         </td>
                                         <td>20/3/2021</td>
                                         <td>5/5/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">92%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar bg-success" role="progressbar"
                                                      style="width: 92%;" aria-valuenow="92" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>New Office Building</td>
                                         <td>
                                             <img src="panel/images/users/user-3.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Frank M. Lyons
                                         </td>
                                         <td>11/6/2021</td>
                                         <td>15/7/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">0%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar  bg-success" role="progressbar"
                                                      style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>Website &amp; Blog</td>
                                         <td>
                                             <img src="panel/images/users/user-4.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Hyman M. Cross
                                         </td>
                                         <td>21/6/2021</td>
                                         <td>3/7/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">0%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar  bg-success" role="progressbar"
                                                      style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>Market Research</td>
                                         <td>
                                             <img src="panel/images/users/user-5.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Angelo E. Butler
                                         </td>
                                         <td>30/4/2021</td>
                                         <td>1/6/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">78%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar  bg-success" role="progressbar"
                                                      style="width: 78%;" aria-valuenow="78" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>Export Marketing</td>
                                         <td>
                                             <img src="panel/images/users/user-6.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Robert C. Golding
                                         </td>
                                         <td>20/3/2021</td>
                                         <td>5/5/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">45%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar  bg-success" role="progressbar"
                                                      style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>

                                     <tr>
                                         <td>Website &amp; Blog</td>
                                         <td>
                                             <img src="panel/images/users/user-8.jpg" alt=""
                                                  class="thumb-sm rounded me-2">
                                             Phillip T. Morse
                                         </td>
                                         <td>8/4/2021</td>
                                         <td>2/6/2021</td>
                                         <td><span class="badge badge-md badge-boxed  badge-soft-danger">Complete</span>
                                         </td>
                                         <td>
                                             <small class="float-end ms-2 pt-1 font-10">100%</small>
                                             <div class="progress mt-2" style="height:3px;">
                                                 <div class="progress-bar  bg-pink" role="progressbar"
                                                      style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                             </div>
                                         </td>
                                     </tr>
                                     </tbody>
                                 </table>

                             </div><!--end table-responsive-->
                         </div><!--end card-body-->
                     </div><!--end card-->
                 </div>
                 <div class="col-lg-4">
                     <div class="card">
                         <div class="card-header">
                             <div class="row align-items-center">
                                 <div class="col">
                                     <h4 class="card-title">Activity</h4>
                                 </div><!--end col-->
                                 <div class="col-auto">
                                     <div class="dropdown">
                                         <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             All<i class="las la-angle-down ms-1"></i>
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-end">
                                             <a class="dropdown-item" href="#">Purchases</a>
                                             <a class="dropdown-item" href="#">Emails</a>
                                         </div>
                                     </div>
                                 </div><!--end col-->
                             </div>  <!--end row-->
                         </div><!--end card-header-->
                         <div class="card-body p-0">
                             <div class="p-3" style="height: 420px;" data-simplebar>
                                 <div class="activity">
                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <i class="las la-user-clock bg-soft-primary"></i>
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                     updated the status of <a href="#">Refund #1234</a> to awaiting
                                                     customer response
                                                 </p>
                                                 <small class="text-muted">10 Min ago</small>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                     was added to the group, group name is <a href="#">Overtake</a>
                                                 </p>
                                                 <small class="text-muted">50 Min ago</small>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <img src="panel/images/users/user-5.jpg" alt=""
                                                  class="rounded-circle thumb-sm">
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                     opened new showcase <a href="#">Mannat #112233</a> with theme market
                                                 </p>
                                                 <small class="text-muted">10 hours ago</small>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                     updated the status of <a href="#">Refund #1234</a> to awaiting
                                                     customer response
                                                 </p>
                                                 <small class="text-muted">Yesterday</small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                     was added to the group, group name is <a href="#">Overtake</a>
                                                 </p>
                                                 <small class="text-muted">14 Nov 2021</small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="activity-info">
                                         <div class="icon-info-activity">
                                             <img src="panel/images/users/user-4.jpg" alt=""
                                                  class="rounded-circle thumb-sm">
                                         </div>
                                         <div class="activity-info-text">
                                             <div class="d-flex justify-content-between align-items-center">
                                                 <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                     opened new showcase <a href="#">Mannat #112233</a> with theme market
                                                 </p>
                                                 <small class="text-muted">15 Nov 2021</small>
                                             </div>
                                         </div>
                                     </div>
                                 </div><!--end activity-->
                             </div><!--end analytics-dash-activity-->
                         </div>  <!--end card-body-->
                     </div><!--end card-->
                 </div>
             </div>--}}

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->

        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->

        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            طراحی توسعه سیوان گنجی
            <span class="text-muted d-none d-sm-inline-block float-end">

             کلیه حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد


            </span>
        </footer>
        <!-- end Footer -->
        <!--end footer-->
    </div>
@endsection

@section('scripts')

@endsection





