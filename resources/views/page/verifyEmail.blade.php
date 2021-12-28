<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{$title_site}}
    </title>


    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">
</head>
<body>
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->

            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <table class="body-wrap"
                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;"
                           bgcolor="transparent">
                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
                                valign="top"></td>
                            <td class="container" width="600"
                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                                valign="top">
                                <div class="content"
                                     style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                    <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action"
                                           itemscope itemtype="http://schema.org/ConfirmAction"
                                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: transparent; margin: 0; border: 2px solid #016738"
                                           bgcolor="#fff">

                                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                            <td class="content-wrap"
                                                style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;"
                                                valign="top">
                                                <meta itemprop="name" content="Confirm Email"
                                                      style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"/>
                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                       style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;background-color:#016738;color: white !important;">
                                                        <td class="content-block" itemprop="handler" itemscope
                                                            itemtype="http://schema.org/HttpActionHandler"
                                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;"
                                                            valign="top">

                                                            <a href="{{ url('VerifyAccount/'.$token) }}"
                                                               class="btn-gradient-primary"
                                                               style=" font-size: 25px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 20px;color: white !important;">

                                                                تایید حساب کاربری
                                                            </a>
                                                        <!--                                                            <a href="{{url('/VerifyAccount='. $confirmation_code.'/token='.$token )}}"
                                                               class="btn-gradient-primary"
                                                               style=" font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 20px;color: #016738">

                                                                تایید حساب کاربری
                                                            </a>-->
                                                        </td>
                                                    </tr>

                                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;text-align: center">
                                                        <td class="content-block"
                                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; color: #010104; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;"
                                                            valign="top">
                                                            جهت تایید و ورود به حساب کاربری خود برروی لینک
                                                            ذیل کلیک کنید
                                                        </td>


                                                    </tr>

                                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                        <td class="content-block" itemprop="handler" itemscope
                                                            itemtype="http://schema.org/HttpActionHandler"
                                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;"
                                                            valign="top">
                                                            <a href="{{ url('VerifyAccount/'.$token) }}"
                                                               class="btn-gradient-primary"
                                                               style=" font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 20px;color: #016738">

                                                                تایید حساب کاربری
                                                            </a>

                                                        </td>
                                                    </tr>
                                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                        <td class="content-block"
                                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;"
                                                            valign="top">
                                                            <b>پشتیبانی </b> <b><span style="color: #016738;">
                                                                    تتر
                                                                </span> بانک</b>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table><!--end table-->
                                </div><!--end content-->
                            </td>
                            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
                                valign="top"></td>
                        </tr>
                    </table><!--end table-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->


    </div>
    <!-- end page content -->
</div>
</body>


</html>
