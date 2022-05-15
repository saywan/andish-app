<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="MahdiY">
    <title>
        چاپ حواله خروج
    </title>
    <link href="{{asset("panel/css/1.css")}}" rel="stylesheet">


</head>
<body>

<style>
    body {
        font-family: iranyekan !important;
        color: #000000;
    }

    .content.factor th {
        background: #ffffff;
    }

</style>
<div class="content factor">


    <div class="header">

        <div class="logo">
            <img style="width:60px" src="{{asset("panel/images/loginmain.png")}}" alt=" ">
        </div>

    </div>

    <table>
        <tr>
            <td style="width: 16.6667%;text-align: center" colspan="6">
                <div class="text">
                    فاکتور حواله خروج شرکت اندیش گستر
                </div>


            </td>
        </tr>
        <tr>
            <td>
                <p>

                    شماره فاکتور
                    {{$FactorOrderUser->factorId}}

                </p>
                <p>

                    عنوان پروژه :
                    {{$FactorOrderUser->projectname}}

                </p>

                <p>
                    {!! DNS1D::getBarcodeSVG($FactorOrderUser->factorId , "C39", 1, 25, '#2A3239') !!}
                </p>

            </td>

            <td>
                <p> تاریخ: {{$FactorOrderUser->datereg}}</p>
                <p> کد اقتصادی: {{$FactorOrderUser->taxcode}}</p>
                <p> شماره پیمان : {{$FactorOrderUser->number_paiman}}</p>

            </td>
        </tr>
        <tr style="display: none;">
            <th colspan="2">حمل و نقل</th>
        </tr>
        <tr style="display: none;">
            <td colspan="2">
                <p>
                    <b>خریدار: </b> {{\App\Helper\Helper::getInfoUser($FactorOrderUser->userId)['fullname']}} &emsp;&emsp;

                    <b>نشانی: </b> {{$FactorOrderUser->address}}
                </p>
            </td>
        </tr>
    </table>
    <table>
        <tr>


            <th width="50%">فروشنده</th>
            <th width="50%">خریدار</th>
        </tr>
        <tr>
            <td>
                <p>
                    <b>فروشنده: </b> {{$admin->sell_info}} &emsp;
                    <b>کد اقتصادی: </b>{{$admin->TaxCode}} &emsp;
                    <b>کد پستی: </b> {{$admin->postalcode_company}} &emsp;
                    <b>تلفن: </b> {{$admin->telephone}}  &emsp;
                </p>
                <p>
                    <b>نشانی: </b> {{$admin->address_company}}  &emsp;
                </p>
            </td>

            <td>

                <p>
                    <b>خریدار: </b> {{\App\Helper\Helper::getInfoUser($FactorOrderUser->userId)['fullname']}} &emsp;&emsp;

                    <b>نشانی: </b> {{$FactorOrderUser->address}} &emsp;&emsp;
                    <b>شماره تماس: </b> {{\App\Helper\Helper::getInfoUser($FactorOrderUser->userId)['mobile']}}
                </p>
            </td>
        </tr>
        <tr style="display: none;">
            <th colspan="2">حمل و نقل</th>
        </tr>
        <tr style="display: none;">
            <td colspan="2">
                <p>
                    <b>خریدار: </b> سیوان گنجی &emsp;&emsp;
                    <b>استان: </b>
                    کردستان <b>شهر: </b>
                    سنندج <b>کد پستی: </b>
                    ۶۶۱۴۹۵۷۴۸۱ <b>نشانی: </b>
                    خیابان ۱۷ شهریور خیابان ادریس جنب آشنای ۹ پلاک ۶۲ </p>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <th>ردیف</th>
            <th style="min-width: 300px;">شرح کالا یا خدمات</th>
            <th>تعداد کل سفارش</th>
            <th>تعداد خروج</th>
            <th>مانده خروج</th>
            <th>جمع کل<br/>(ریال)</th>
        </tr>
        @php $i=1;$total_price=0; @endphp
        @foreach($ProcessExit as $itemOrder)
            <tr>
                <td class="centerp">
                    {{    $i ++ }}
                </td>

                <td>
                    {{ \App\Helper\Helper::getInfoProductOrder($itemOrder->product_order_id)['title']  }}

                </td>
                <td class="centerp">
                    {{ $itemOrder->current_count }}
                </td>
                <td class="centerp">
                    {{ $itemOrder->exit_count }}
                </td>
                <td class="centerp">
                    {{ $itemOrder->remin_count }}
                </td>

                <td class="centerp">
                    <span class="woocommerce-Price-amount amount">
                        <bdi>
                             {{ number_format(\App\Helper\Helper::getInfoProducOrder($itemOrder->product_order_id)['prodPrice']  * $itemOrder->current_count)  }}
                            {{--{{
                                  number_format($itemOrder->productQty * str_replace(',','',$itemOrder->prodPrice))
                             }}--}}

                            <span class="woocommerce-Price-currencySymbol"></span>
                        </bdi>
                    </span>
                </td>
            </tr>
        @php
            $total_price=$total_price + \App\Helper\Helper::getInfoProducOrder($itemOrder->product_order_id)['prodPrice']  * $itemOrder->current_count;

        @endphp
    @endforeach
    <!----->
        <tr>
            <td colspan="4" class="leftp">روش پرداخت:</td>
            <td colspan="2" class="centerp">
                @if($FactorOrderUser->pay_status == 'Card')
                    <span class="text-primary">
                         <i data-feather="credit-card"></i>
                           پرداخت از طریق کارت
                    </span>
                @elseif($FactorOrderUser->pay_status == 'cheque')
                    <span class="text-danger">

                       <i data-feather="alert-triangle"></i>
                                  بصورت چک
                    </span>
                @elseif($FactorOrderUser->pay_status == 'paperpay')
                    <span class="text-primary">
                             <i data-feather="alert-triangle"></i>
                                    فیش بانکی
                           </span>

                @endif

            </td>
        </tr>
       {{-- <tr>
            <th colspan="3">ارزش افزوده</th>
            <th colspan="3"
                class="centerp">
                <span class="woocommerce-Price-amount amount">
                    <bdi>
                         @if( $FactorOrderUser->extraValue)
                            {{ $FactorOrderUser->extraValue }}
                        @endif
                        &nbsp;
                        &nbsp;&nbsp;<span class="woocommerce-Price-currencySymbol"></span>
                    </bdi>
                </span>
                ریال
            </th>
        </tr>--}}
        <tr>
            <th colspan="3">مجموع مبلغ نهایی</th>
            <th colspan="3"
                class="centerp">
                <span class="woocommerce-Price-amount amount">
                    <bdi>
                        {{ number_format($total_price) }}
                        &nbsp;
                        &nbsp;<span class="woocommerce-Price-currencySymbol"></span>
                    </bdi>
                </span>ریال
            </th>
        </tr>

        <tr>

            <th colspan="6"
                class="centerp">

                <ul class="ps-3" style="text-align: right">
                    <li>
                        <small class="text-danger font-12">
                            <i data-feather="alert-triangle"></i>
                            مدت اعتبار این پیش فاکتور 1 روز میباشد.

                        </small>
                    </li>
                    <li>
                        <small class="font-12">
                            <i data-feather="shopping-cart"></i>
                            محل تحویل درب کارخانه و هزینه حمل به عهده
                            خریدار میباشد.

                        </small>
                    </li>

                    <li>
                        <small class="font-12 text-dark">
                            <i data-feather="send"></i>
                            زمان تحویل 3 روز بعد از تایید پیش فاکتور
                        </small>
                    </li>
                    <li>
                        <small class="font-12 text-danger">
                            <i data-feather="alert-triangle"></i>
                            نحوه پرداخت نقدی میباشد.

                        </small>
                    </li>
                    <li>
                        <small class="font-12 text-danger">
                            <i data-feather="search"></i>
                            هزینه های بازرسی به عهده خریدار میباشد.


                        </small>
                    </li>
                    <li>
                        <small class="font-12 text-primary">
                            " شماره حساب بانک تجارت 1111050496 بنام
                            ارسلان لطف یار شماره کارت :
                            5859831003255956 شماره شبا : IR 0601 8000
                            0000 0011 1105 0496"

                        </small>
                    </li>
                </ul>

            </th>
        </tr>
    </table>
    {{-- <div class="emza centerp">
         <p>

         </p>
     </div>--}}
</div>

</body>
<script>
    window.print()
</script>
</html>
