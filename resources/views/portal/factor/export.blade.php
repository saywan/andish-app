@extends('portal.layouts.adminMaster')
@section('styles')

    <link rel="stylesheet" href="{{asset("panel/plugins/datatables/datatables.min.css")}}">
    <link rel="stylesheet"
          href="{{asset("panel/plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("panel/plugins/select/selectr.min.css")}}">
@endsection

@section('main')

    <div class="page-content-tab">

        <div class="container-fluid" id="app">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">
                            نمایش و چاپ فاکتور
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
                        @if(\Illuminate\Support\Facades\Session::has('error_message'))
                            <div class="alert alert-danger"
                                 style="font-size: 15pt !important; text-align: center !important; width: 100% !important;">
                                {{\Illuminate\Support\Facades\Session::get('error_message')}}
                            </div>
                        @elseif(\Illuminate\Support\Facades\Session::has('success_message'))
                            <div class="alert alert-dismissible"
                                 style="color:#ffffff !important;background-color: #00bfd6 !important;font-size: 15pt !important; text-align: center !important; width: 100% !important;">
                                {{\Illuminate\Support\Facades\Session::get('success_message')}}
                                <a href="{{url('Cart')}}">سبد خرید</a>
                            </div>
                        @endif
                        <div class="col-md-8 alert alert-info" v-for="list in allerros">
                            @{{ list }}
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <a class="nav-link active " id="step1-tab" data-bs-toggle="tab" href="#step1">
                                            نمایش و چاپ فاکتور
                                        </a>



                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane active" id="step1">
                                        <h4 class="card-title mt-3 mb-1">نمایش و چاپ فاکتور </h4>
                                        <div class="row">
                                            <div class="col-lg-10 mx-auto">
                                                <div class="card">
                                                    <div class="card-body invoice-head">
                                                        <div class="row">
                                                            <div class="col-md-4 align-self-center">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-small" class="logo-sm me-1" height="24">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-dark"
                                                                     height="16">
                                                                <img src="{{asset("panel/images/logo.jpg")}}"
                                                                     alt="logo-large" class="logo-lg brand-light"
                                                                     height="16">
                                                                <p class="mt-2 mb-0 text-muted">
                                                                    شرکت اندیش گستر
                                                                </p>
                                                            </div><!--end col-->
                                                            <div class="col-md-8">

                                                                <ul class="list-inline mb-0 contact-detail float-end">
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-web"></i>
                                                                            <p class="text-muted mb-0">
                                                                                http://andishgostar.com
                                                                            </p>

                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-phone"></i>
                                                                            <p class="text-muted mb-0">

                                                                                09183732103
                                                                            </p>
                                                                            <p class="text-muted ">
                                                                                08733784480
                                                                            </p>

                                                                        </div>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <div class="ps-3">
                                                                            <i class="mdi mdi-map-marker"></i>
                                                                            <p class="text-muted mb-0">ایران , سنندج</p>
                                                                            <p class="text-muted mb-0">
                                                                                میدان جهاد ابتدای شهرک کوثر شرکت اندیش
                                                                                گستر کد پستی 6616894737
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive project-invoice">


                                                                    <table class="table table-bordered mb-0"
                                                                          >
                                                                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:24.05pt'>
                                                                            <td width=691 colspan=11 style='width:517.9pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:24.05pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1605;&#1588;&#1582;&#1589;&#1575;&#1578;
  &#1601;&#1585;&#1608;&#1588;&#1606;&#1583;&#1607;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:1;height:25.4pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.4pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-bidi'>&#1606;&#1575;&#1605;
  &#1588;&#1582;&#1589; &#1581;&#1602;&#1740;&#1602;&#1740; /
  &#1581;&#1602;&#1608;&#1602;&#1740;<span
                                                                                            style='mso-spacerun:yes'>                                                             
  </span>&#1588;&#1605;&#1575;&#1585;&#1607; &#1605;&#1604;&#1740; /
  &#1575;&#1602;&#1578;&#1589;&#1575;&#1583;&#1740;<o:p></o:p></span></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:2;height:21.85pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.85pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-bidi'>&#1606;&#1588;&#1575;&#1606;&#1740;<span
                                                                                            style='mso-spacerun:yes'>                           </span><span
                                                                                            style='mso-spacerun:yes'>                             </span><span
                                                                                            style='mso-spacerun:yes'>                              </span><span
                                                                                            style='mso-spacerun:yes'>    </span>&#1588;&#1605;&#1575;&#1585;&#1607;
  &#1578;&#1604;&#1601;&#1606;<o:p></o:p></span></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:3;height:26.3pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:26.3pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1605;&#1588;&#1582;&#1589;&#1575;&#1578; &#1582;&#1585;&#1740;&#1583;&#1575;&#1585;</span></b><span
                                                                                        lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-bidi'><o:p></o:p></span></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:4;height:21.85pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:21.85pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-bidi'>&#1606;&#1575;&#1605;
  &#1588;&#1582;&#1589; &#1581;&#1602;&#1740;&#1602;&#1740; /
  &#1581;&#1602;&#1608;&#1602;&#1740;<span
                                                                                            style='mso-spacerun:yes'>                                                 
  </span>&#1588;&#1605;&#1575;&#1585;&#1607; &#1605;&#1604;&#1740; /
  &#1575;&#1602;&#1578;&#1589;&#1575;&#1583;&#1740;</span><b><span lang=FA
                                                                   style='font-size:16.0pt;font-family:"B Nazanin"'><o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:5;height:18.25pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-bidi'>&#1606;&#1588;&#1575;&#1606;&#1740;<span
                                                                                            style='mso-spacerun:yes'>                                                                          
  </span>&#1588;&#1605;&#1575;&#1585;&#1607; &#1578;&#1604;&#1601;&#1606;</span><b><span
                                                                                            lang=FA style='font-size:16.0pt;font-family:"B Nazanin"'><o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:6;height:18.25pt'>
                                                                            <td width=691 colspan=11 valign=top style='width:517.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1605;&#1588;&#1582;&#1589;&#1575;&#1578;
  &#1705;&#1575;&#1604;&#1575; &#1740;&#1575;
  &#1582;&#1583;&#1605;&#1575;&#1578; &#1605;&#1608;&#1585;&#1583;
  &#1605;&#1593;&#1575;&#1605;&#1604;&#1607;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:39.7pt;mso-row-margin-left:
  .65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;mso-rotate:90;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-top:0in;margin-right:
  5.65pt;margin-bottom:0in;margin-left:5.65pt;text-align:center;line-height:
  normal'><span lang=FA style='font-family:"Arial",sans-serif;mso-ascii-font-family:
  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi'>&#1585;&#1583;&#1740;&#1601;<o:p></o:p></span></p>
                                                                            </td>
                                                                            <td width=47 style='width:35.45pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1705;&#1583; &#1705;&#1575;&#1604;&#1575;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=138 style='width:103.3pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1588;&#1585;&#1581; &#1705;&#1575;&#1604;&#1575;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=75 style='width:56.15pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1578;&#1593;&#1583;&#1575;&#1583; /
  &#1605;&#1602;&#1583;&#1575;&#1585;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=59 style='width:44.15pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1605;&#1576;&#1604;&#1594;
  &#1608;&#1575;&#1581;&#1583;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=80 colspan=2 style='width:59.9pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1605;&#1576;&#1604;&#1594; &#1705;&#1604;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=78 style='width:58.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1605;&#1576;&#1604;&#1594; &#1578;&#1582;&#1601;&#1740;&#1601;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=63 style='width:47.15pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1575;&#1585;&#1586;&#1588;
  &#1575;&#1601;&#1586;&#1608;&#1583;&#1607;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=118 style='width:88.65pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:39.7pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:10.0pt;
  font-family:"B Nazanin"'>&#1582;&#1575;&#1604;&#1589;
  &#1601;&#1575;&#1705;&#1578;&#1608;&#1585;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:8;height:18.25pt;mso-row-margin-left:.65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><span lang=FA style='font-family:"Arial",sans-serif;
  mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
  Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi'>1<o:p></o:p></span></p>
                                                                            </td>
                                                                            <td width=47 valign=top style='width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=138 valign=top style='width:103.3pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><span lang=FA style='font-family:"Arial",sans-serif;
  mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
  Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi'><o:p>&nbsp;</o:p></span></p>
                                                                            </td>
                                                                            <td width=75 valign=top style='width:56.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=59 valign=top style='width:44.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=80 colspan=2 valign=top style='width:59.9pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=78 valign=top style='width:58.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=63 valign=top style='width:47.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=118 valign=top style='width:88.65pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>1<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:9;height:18.25pt;mso-row-margin-left:.65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=32 valign=top style='width:24.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><span lang=FA style='font-family:"Arial",sans-serif;
  mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
  Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi'>2<o:p></o:p></span></p>
                                                                            </td>
                                                                            <td width=47 valign=top style='width:35.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=138 valign=top style='width:103.3pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><span lang=FA style='font-family:"Arial",sans-serif;
  mso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:
  Calibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi'><o:p>&nbsp;</o:p></span></p>
                                                                            </td>
                                                                            <td width=75 valign=top style='width:56.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=59 valign=top style='width:44.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=80 colspan=2 valign=top style='width:59.9pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                            <td width=78 valign=top style='width:58.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=63 valign=top style='width:47.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=118 valign=top style='width:88.65pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>2<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:10;height:18.25pt;mso-row-margin-left:.65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=351 colspan=5 valign=top style='width:263.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1580;&#1605;&#1593; &#1705;&#1604;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=80 colspan=2 valign=top style='width:59.9pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>4545<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=78 valign=top style='width:58.4pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=63 valign=top style='width:47.15pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>0<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=118 valign=top style='width:88.65pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>3<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:11;height:18.25pt;mso-row-margin-left:.65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=355 colspan=6 valign=top style='width:265.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1608;&#1590;&#1593;&#1740;&#1578;
  &#1601;&#1575;&#1705;&#1578;&#1608;&#1585;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=335 colspan=4 valign=top style='width:251.35pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:12;height:18.25pt;mso-row-margin-left:.65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=355 colspan=6 style='width:265.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:18.25pt'>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'>&#1578;&#1608;&#1590;&#1740;&#1581;&#1575;&#1578;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=335 colspan=4 valign=top style='width:251.35pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:18.25pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-hansi-font-family:IRANSansWeb;color:#EF4D56;letter-spacing:
  .1pt;background:white'>&#1605;&#1583;&#1578;
  &#1575;&#1593;&#1578;&#1576;&#1575;&#1585; &#1575;&#1740;&#1606;
  &#1662;&#1740;&#1588; &#1601;&#1575;&#1705;&#1578;&#1608;&#1585; 1
  &#1585;&#1608;&#1586; &#1605;&#1740;&#1576;&#1575;&#1588;&#1583;</span><span
                                                                                        dir=LTR></span><span dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;
  mso-bidi-font-family:"B Nazanin";color:#EF4D56;letter-spacing:.1pt;
  background:white'><span dir=LTR></span>.</span></span><b><span lang=FA
                                                                 style='font-size:16.0pt;font-family:"B Nazanin"'><o:p></o:p></span></b></p>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-hansi-font-family:IRANSansWeb;color:#000444;letter-spacing:
  .1pt;background:white'>&#1605;&#1581;&#1604;
  &#1578;&#1581;&#1608;&#1740;&#1604; &#1583;&#1585;&#1576;
  &#1705;&#1575;&#1585;&#1582;&#1575;&#1606;&#1607; &#1608;
  &#1607;&#1586;&#1740;&#1606;&#1607; &#1581;&#1605;&#1604; &#1576;&#1607;
  &#1593;&#1607;&#1583;&#1607; &#1582;&#1585;&#1740;&#1583;&#1575;&#1585;
  &#1605;&#1740;&#1576;&#1575;&#1588;&#1583;</span><span dir=LTR></span><span
                                                                                        dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;mso-bidi-font-family:
  "B Nazanin";color:#000444;letter-spacing:.1pt;background:white'><span
                                                                                            dir=LTR></span>.</span></span><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p></o:p></span></b></p>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-hansi-font-family:IRANSansWeb;color:#000444;letter-spacing:
  .1pt;background:white'>&#1586;&#1605;&#1575;&#1606;
  &#1578;&#1581;&#1608;&#1740;&#1604; 3 &#1585;&#1608;&#1586;
  &#1576;&#1593;&#1583; &#1575;&#1586; &#1578;&#1575;&#1740;&#1740;&#1583;
  &#1662;&#1740;&#1588; &#1601;&#1575;&#1705;&#1578;&#1608;&#1585;</span></span><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:
  IRANSansWeb;color:#EF4D56;letter-spacing:.1pt'><o:p></o:p></span></p>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        dir=LTR></span><span dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"B Nazanin";
  color:#EF4D56;letter-spacing:.1pt'><span dir=LTR></span>&nbsp;</span><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:
  IRANSansWeb;color:#EF4D56;letter-spacing:.1pt'>&#1606;&#1581;&#1608;&#1607;
  &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1606;&#1602;&#1583;&#1740;
  &#1605;&#1740;&#1576;&#1575;&#1588;&#1583;</span><span dir=LTR></span><span
                                                                                        dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"B Nazanin";color:#EF4D56;letter-spacing:
  .1pt'><span dir=LTR></span>.</span><span lang=FA style='font-size:9.0pt;
  font-family:"B Nazanin";mso-ascii-font-family:IRANSansWeb;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:IRANSansWeb;color:#EF4D56;letter-spacing:
  .1pt'><o:p></o:p></span></p>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        dir=LTR></span><span dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"B Nazanin";
  color:#EF4D56;letter-spacing:.1pt'><span dir=LTR></span>&nbsp;</span><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:
  IRANSansWeb;color:#EF4D56;letter-spacing:.1pt'>&#1607;&#1586;&#1740;&#1606;&#1607;
  &#1607;&#1575;&#1740; &#1576;&#1575;&#1586;&#1585;&#1587;&#1740;
  &#1576;&#1607; &#1593;&#1607;&#1583;&#1607;
  &#1582;&#1585;&#1740;&#1583;&#1575;&#1585;
  &#1605;&#1740;&#1576;&#1575;&#1588;&#1583;</span><span dir=LTR></span><span
                                                                                        dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"B Nazanin";color:#EF4D56;letter-spacing:
  .1pt'><span dir=LTR></span>.</span><span lang=FA style='font-size:9.0pt;
  font-family:"B Nazanin";mso-ascii-font-family:IRANSansWeb;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:IRANSansWeb;color:#0B51B7;letter-spacing:
  .1pt'><o:p></o:p></span></p>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><span
                                                                                        dir=LTR></span><span dir=LTR style='font-size:9.0pt;font-family:"IRANSansWeb",serif;
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"B Nazanin";
  color:#0B51B7;letter-spacing:.1pt'><span dir=LTR></span>&quot; </span><span
                                                                                        lang=FA style='font-size:9.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:
  IRANSansWeb;color:#0B51B7;letter-spacing:.1pt'>&#1588;&#1605;&#1575;&#1585;&#1607;
  &#1581;&#1587;&#1575;&#1576; &#1576;&#1575;&#1606;&#1705;
  &#1578;&#1580;&#1575;&#1585;&#1578; 1111050496 &#1576;&#1606;&#1575;&#1605;
  &#1575;&#1585;&#1587;&#1604;&#1575;&#1606; &#1604;&#1591;&#1601;
  &#1740;&#1575;&#1585; &#1588;&#1605;&#1575;&#1585;&#1607; <span class=GramE>&#1705;&#1575;&#1585;&#1578;
  :</span> 5859831003255956 &#1588;&#1605;&#1575;&#1585;&#1607;
  &#1588;&#1576;&#1575;</span><span dir=LTR></span><span dir=LTR
                                                         style='font-size:9.0pt;font-family:"IRANSansWeb",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"B Nazanin";color:#0B51B7;letter-spacing:
  .1pt'><span dir=LTR></span> : IR 0601 8000 0000 0011 1105 0496&quot;</span><span
                                                                                        dir=LTR style='font-size:10.0pt;font-family:"IRANSansWeb",serif;mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"B Nazanin";color:#000444;letter-spacing:
  .1pt'><o:p></o:p></span></p>
                                                                                <p class=MsoNormal align=center dir=RTL style='margin-bottom:0in;text-align:
  center;line-height:normal'><b><span lang=FA style='font-size:16.0pt;
  font-family:"B Nazanin"'><o:p>&nbsp;</o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;height:93.1pt;mso-row-margin-left:
  .65pt'>
                                                                            <td style='mso-cell-special:placeholder;border:none;padding:0in 0in 0in 0in'
                                                                                width=1><p class='MsoNormal'>&nbsp;</td>
                                                                            <td width=355 colspan=6 valign=top style='width:265.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:93.1pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><b><span
                                                                                            lang=FA style='font-size:12.0pt;font-family:"B Nazanin";color:black;
  mso-themecolor:text1'>&#1605;&#1607;&#1585; &#1608;
  &#1575;&#1605;&#1590;&#1575;&#1569;
  &#1582;&#1585;&#1740;&#1583;&#1575;&#1585;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                            <td width=335 colspan=4 valign=top style='width:251.35pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
  height:93.1pt'>
                                                                                <p class=MsoNormal dir=RTL style='margin-bottom:0in;line-height:normal'><b><span
                                                                                            lang=FA style='font-size:12.0pt;font-family:"B Nazanin";mso-ascii-font-family:
  IRANSansWeb;mso-hansi-font-family:IRANSansWeb;color:black;mso-themecolor:
  text1;letter-spacing:.1pt;background:white'>&#1605;&#1607;&#1585; &#1608;
  &#1575;&#1605;&#1590;&#1575;&#1569;
  &#1601;&#1585;&#1608;&#1588;&#1606;&#1583;&#1607;<o:p></o:p></span></b></p>
                                                                            </td>
                                                                        </tr>
                                                                        <![if !supportMisalignedColumns]>
                                                                        <tr height=0>
                                                                            <td width=1 style='border:none'></td>
                                                                            <td width=33 style='border:none'></td>
                                                                            <td width=47 style='border:none'></td>
                                                                            <td width=138 style='border:none'></td>
                                                                            <td width=75 style='border:none'></td>
                                                                            <td width=59 style='border:none'></td>
                                                                            <td width=4 style='border:none'></td>
                                                                            <td width=76 style='border:none'></td>
                                                                            <td width=78 style='border:none'></td>
                                                                            <td width=63 style='border:none'></td>
                                                                            <td width=118 style='border:none'></td>
                                                                        </tr>
                                                                        <![endif]>
                                                                    </table>



                                                                </div>  <!--end /div-->
                                                            </div>  <!--end col-->
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <h5 class="mt-4">موارد قابل ملاحظه فاکتور :</h5>
                                                                <ul class="ps-3">
                                                                    <li>
                                                                        <small class="text-danger font-12" >
                                                                            <i data-feather="alert-triangle" ></i>
                                                                            مدت اعتبار این پیش فاکتور 1 روز میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12">
                                                                            <i data-feather="shopping-cart" ></i>
                                                                            محل تحویل درب کارخانه و هزینه حمل به عهده خریدار میباشد.

                                                                        </small>
                                                                    </li>

                                                                    <li>
                                                                        <small class="font-12 text-dark">
                                                                            <i data-feather="send" ></i>
                                                                            زمان تحویل 3 روز بعد از تایید پیش فاکتور
                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="alert-triangle" ></i>
                                                                            نحوه پرداخت نقدی میباشد.

                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-danger">
                                                                            <i data-feather="search" ></i>
                                                                            هزینه های بازرسی به عهده خریدار میباشد.


                                                                        </small>
                                                                    </li>
                                                                    <li>
                                                                        <small class="font-12 text-primary">
                                                                            " شماره حساب بانک تجارت   1111050496  بنام ارسلان لطف یار شماره کارت  :
                                                                            5859831003255956  شماره شبا : IR 0601 8000 0000 0011 1105 0496"

                                                                        </small>
                                                                    </li>
                                                                </ul>
                                                            </div> <!--end col-->
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="float-none float-md-end"
                                                                     style="width: 30%;">
                                                                    <small>
                                                                        مدیر فروش شرکت : آقای ارسلان لطف یار
                                                                    </small>
                                                                    <img src="assets/images/signature.png" alt=""
                                                                         class="mt-2 mb-1" height="20">
                                                                    <p class="border-top">محل امضا شرکت</p>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                        <hr>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="form-group mb-3 row">
                                                                {{--  <div class="col-md-3">
                                                                      <label for="txtFirstNameBilling"
                                                                             class="col-lg-7 col-form-label text-end">
                                                                          وضعیت  سفارش
                                                                      </label>

                                                                      <select name="OrderStatus" id="OrderStatus" class="form-control" required>
                                                                          <option value="0" >
                                                                              لطفا وضعیت سفارش را مشخص کنید
                                                                          </option>
                                                                          <option value="waitapprove">
                                                                              منتظر پرداخت
                                                                          </option>
                                                                          <option value="approved">
                                                                            تایید و پرداخت شده
                                                                          </option>
                                                                          <option value="waitpay">
                                                                           منتظر پرداخت
                                                                          </option>
                                                                          <option value="processStore">

                                                                              در حال پردازش
                                                                          </option>
                                                                          <option value="processAccount">
                                                                             پردازش در حسابداری
                                                                          </option>
                                                                          <option value="prepareSending">
                                                                             آماده ارسال و تحویل به مشتری
                                                                          </option>
                                                                          <option value="sent">
                                                                            ارسال و تحویل داده شده
                                                                          </option>
                                                                          <option value="cancel">

                                                                            لغو سفارش
                                                                          </option>

                                                                      </select>


                                                                  </div>--}}




                                                            </div>


                                                        </div>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                                                <div class="text-center">
                                                                    <small class="font-12">
                                                                        کل حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد .
                                                                    </small>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-xl-4">

                                                                <div class="float-end d-print-none mt-2 mt-md-0">



                                                                    <a href="javascript:window.print()"
                                                                       class="btn btn-de-info btn-sm">چاپ فاکتور</a>

                                                                    {{--  <a  @click="NewFactor()"
                                                                          class="btn btn-de-primary btn-sm">ثبت نهایی فاکتور</a>
                                                                      <button type="button" id="step2Prev" class="btn btn-de-danger btn-sm">
                                                                          ویرایش فاکتور
                                                                      </button>--}}

                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div>
                                        </div>



                                        <div class="">
                                            <button type="button" id="step1Next" class="btn btn-primary float-end">
                                                بعدی
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
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
            </div><!--end offcanvas-body-->
        </div>
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

    <script src="{{asset("panel/pages/form-wizard.js")}}"></script>
    <script src="{{asset("panel/plugins/select/selectr.min.js")}}"></script>
    <script src="{{asset("panel/pages/forms-advanced.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("panel/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <script src="{{asset("panel/plugins/datatables/datatables.js")}}"></script>

@endsection





