@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab" id="app">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">
                            لیست درصد کالایی شرکت اندیش گستر
                        </h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                درصد کالایی اندیش گستر
                            </h4>

                            @if ( Session::has('error'))
                                <div
                                    class="alert custom-alert custom-alert-danger icon-custom-alert alert-danger shadow-sm fade show"
                                    role="alert">
                                    <i class="la la-skull-crossbones alert-icon text-danger align-self-center font-30 me-3"></i>
                                    <div class="alert-text my-1">
                                        <h5 class="mb-1 fw-bold mt-0">هشدار</h5>
                                        <span>
                                            {{Session::get('error')}}
                                        </span>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">

                                        </button>
                                    </div>
                                </div>
                            @endif

                            @if ( Session::has('success'))
                                <div
                                    class="alert custom-alert custom-alert-success icon-custom-alert alert-danger shadow-sm fade show"
                                    role="alert">
                                    <i class="la la-skull-crossbones alert-icon text-success align-self-center font-30 me-3"></i>
                                    <div class="alert-text my-1">
                                        <h5 class="mb-1 fw-bold mt-0">موفق آمیز</h5>
                                        <span>
                                            {{Session::get('success')}}
                                        </span>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">

                                        </button>
                                    </div>
                                </div>
                        </div>
                        @endif

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th> عنوان درصد کالایی</th>
                                    <th> درصد کالا</th>
                                    <th> ارزش افزوده</th>
                                    <th> واحد</th>
                                    <th> جمع کل</th>
                                    <th>تاریخ ثبت نام</th>
                                    <th>اطلاعات بیشتر</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($GProuct) > 0)
                                    @php  $i=1;  @endphp

                                    @foreach($GProuct as $itemUser)
                                        <tr class="text-center">
                                            <td>  {{$i++}}   </td>
                                            <td>  {{$itemUser->title}}   </td>
                                            <td>
                                                @if($itemUser->unit =='kilo')
                                                    <span class="text-danger font-20">
                                                              {{
    empty($itemUser->percent) ? 0 :  number_format($itemUser->percent)
}}
                                                    </span>
                                                @elseif($itemUser->unit =='numberic')
                                                    <span class="text-success font-20">

                                                        {{$itemUser->percent}}
                                                        %
                                                    </span>
                                                @endif
                                            </td>
                                            <td> %
                                             <span class="font-22">
                                                 {{$itemUser->fee}}
                                             </span>
                                            </td>
                                            <td>

                                                @if($itemUser->unit =='kilo')

                                                    <span class="text-danger font-26">
                                                       کیلو
                                                    </span>
                                                @elseif($itemUser->unit =='numberic')
                                                    <span class="text-success font-26">
                                                       عدد
                                                    </span>
                                                @endif
                                            </td>
                                            <td>

                                                @if($itemUser->unit =='kilo')

                                                <span class="font-25">
                                                      {{
    empty($itemUser->total) ? 0 :  number_format($itemUser->total)
}}
                                                </span>
                                                @elseif($itemUser->unit =='numberic')
                                                    %
                                                <span class="font-25">
                                                      {{
      empty($itemUser->total) ? 0 :  $itemUser->total
}}
                                                </span>



                                                    @endif

                                            </td>
                                            <td>  {{$itemUser->datereg}}   </td>


                                            <td>
                                                <a href="{{url('portal/PercentProduct/edit/'.$itemUser->id)}}"
                                                   title="ویرایش درصد  بندی کالا">
                                                    <i data-feather="edit"></i>
                                                </a>
                                                <a @click="DeletePercentProduct({{$itemUser->id}})"
                                                   title="حذف درصد  بندی کالا">
                                                    <i data-feather="trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td> لیست درصد کالایی خالی می باشد</td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </div><!-- container -->

    <!--Start Rightbar-->
    <!--Start Rightbar/offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
            <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h6>Account Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch1">
                    <label class="form-check-label" for="settings-switch1">Auto updates</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                    <label class="form-check-label" for="settings-switch2">Location Permission</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch3">
                    <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                </div><!--end form-switch-->
            </div><!--end /div-->
            <h6>General Settings</h6>
            <div class="p-2 text-start mt-3">
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch4">
                    <label class="form-check-label" for="settings-switch4">Show me Online</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                    <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                </div><!--end form-switch-->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="settings-switch6">
                    <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                </div><!--end form-switch-->
            </div><!--end /div-->
        </div>
    </div>


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

    </div>

@endsection

@section('scripts')
    {{--   <script src="{{asset("panel/plugins/tabulator/tabulator.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/xlsx.full.min.js")}}"></script>
       <script src="{{asset("panel/plugins/tabulator/jspdf.plugin.autotable.js")}}"></script>
       <script src="{{asset("panel/pages/datatable.init.js")}}"></script>--}}



    <script src="{{asset("panel/plugins/datatables/datatables.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("panel/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.js")}}"></script>


    <script>
        $(function () {
            $('#statususer').change(function () {


                var status = $(this).prop('checked') == true ? 'active' : 'inactive';

                var card_id = $(this).data('id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/portal/ChangeStatusUser',
                    data: {'action': 'ChangeStatusUser', 'status': status, 'card_id': card_id},
                    success: function (data) {
                        if (data.status == 200) {
                            /*   swal("وضعیت نمایش ", "وضعیت نمایش به روز رسانی شد", "success", {
                                   button: "باشه"
                               });*/
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'وضعیت حساب کاربری با موفقیت به روز رسانی شد',
                                showConfirmButton: true,
                            })

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {
                            swal(" خطا ", "خطا مجددا سعی کنید", "error", {
                                button: "باشه"
                            });
                        }
                    }
                });
            })
        })
    </script>

@endsection





