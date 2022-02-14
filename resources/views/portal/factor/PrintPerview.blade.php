
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="MahdiY">
    <title>
        صدور و چاپ فاکتور
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
        <div class="logo"><img style="width:200px" src="{{asset("panel/images/loginmain.png")}}" alt=" ">&nbsp;</div>
        <div class="text">فاکتور</div>
        <div class="info">
            <svg  id="barcode"></svg>
            <script>
                window.print()
            </script>
            </p>
            <p>تاریخ: 2022/02/11</p>
        </div>
    </div>
    <table>
        <tr>
            <th width="50%">فروشنده</th>
            <th width="50%">خریدار</th>
        </tr>
        <tr>
            <td>
                <p>
                    <b>فروشنده: </b>
                    &emsp;&emsp;
                    <b>استان: </b>
                    <b>شهر: </b>
                    <b>کد پستی: </b>
                    <b>تلفن: </b>
                    <b style="display: none;">کد اقتصادی: </b>
                    <b style="display: none;">شماره ثبت: </b>
                </p>
                <p>
                    <b>نشانی: </b>
                </p>
            </td>

            <td>
                <p>
                    <b>خریدار: </b>
                    سیوان گنجی                    &emsp;&emsp;
                    <b>استان: </b>
                    کردستان                    <b>شهر: </b>
                    سنندج                    <b>کد پستی: </b>
                    ۶۶۱۴۹۵۷۴۸۱                    <b>شماره تماس: </b>
                    ۰۸۷۳۳۱۸۱۷۳۹                </p>
                <p>
                    <b>نشانی: </b>
                    خیابان ۱۷ شهریور خیابان ادریس جنب آشنای ۹ پلاک ۶۲		                            </p>
            </td>
        </tr>
        <tr style="display: none;">
            <th colspan="2">حمل و نقل</th>
        </tr>
        <tr style="display: none;">
            <td colspan="2">
                <p>
                    <b>خریدار: </b> سیوان گنجی                    &emsp;&emsp;
                    <b>استان: </b>
                    کردستان                    <b>شهر: </b>
                    سنندج                    <b>کد پستی: </b>
                    ۶۶۱۴۹۵۷۴۸۱                    <b>نشانی: </b>
                    خیابان ۱۷ شهریور خیابان ادریس جنب آشنای ۹ پلاک ۶۲					                </p>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <th>ردیف</th>
            <th>کد کالا</th>
            <th style="min-width: 300px;">شرح کالا یا خدمات</th>
            <th>تعداد</th>
            <th>تاریخ انقضا</th>
            <th>مبلغ واحد<br/>(تومان)</th>
            <th>مبلغ کل<br/>(تومان)</th>
        </tr>
        <tr>
            <td class="centerp">۱</td>
            <td class="centerp">۶۲۸۱۰۳۱۲۷۳۲۳۴</td>
            <td>
                روغن مو روزانه گلیس Gliss مدل Oil-Elixir 					<p><strong class="wc-item-meta-label">آماده بسته بندی:</strong> <p>انجام شده</p></p>                </td>
            <td class="centerp">۱</td>
            <td class="centerp">
                -                </td>
            <td class="centerp"><span class="woocommerce-Price-amount amount"><bdi>۹۵,۰۰۰&nbsp;<span class="woocommerce-Price-currencySymbol"></span></bdi></span></td>
            <td class="centerp"><span class="woocommerce-Price-amount amount"><bdi>۹۵,۰۰۰&nbsp;<span class="woocommerce-Price-currencySymbol"></span></bdi></span></td>
        </tr>
        <!----->
        <tr>
            <td colspan="4" class="leftp">روش پرداخت:</td>
            <td colspan="2" class="centerp">بانک سامان</td>
        </tr>
        <tr>
            <th colspan="3">مجموع مبلغ نهایی</th>
            <th colspan="3"
                class="centerp"><span class="woocommerce-Price-amount amount"><bdi>۹۵,۰۰۰&nbsp;<span class="woocommerce-Price-currencySymbol"></span></bdi></span>تومان</th>
        </tr>
    </table>
    <div class="emza centerp">
        <p>عرضه موادغذایی و محصولات سلامتی و بهداشتی</p>
    </div>
</div>

</body>

</html>
