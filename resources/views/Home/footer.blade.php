
<?php
$setting=\App\Models\AdminSettings::find(1);
?>
<section class="info-section" style="background-image: url(images/background/6.jpg)">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Logo Column -->
            <div class="logo-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset("Content/images/hlogo-2.png")}}" alt=""/></a>
                    </div>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-pin"></span></div>
                    <ul>
                        <li><strong>آدرس </strong></li>
                        <li>
                            {!! $setting->contact_address !!}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                    <ul>
                        <li><strong>تلفن </strong></li>
                        <li>
                            {{  $setting->telephone_one_shop  }}
                        </li>
                        <li>
                            {{  $setting->telephone_two_shop  }}
                        </li>
                        <li>
                            {{  $setting->telephone_third_shop  }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-3 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box"><span class="flaticon-email-1"></span></div>
                    <ul>
                        <li><strong>ایمیل </strong></li>
                        <li>
                            {{  $setting->emails_site  }}
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="main-footer style-three">
    <div class="pattern-layer-three" style="background-image: url({{asset("Content/images/background/pattern-14.png")}})"></div>
    <div class="pattern-layer-four" style="background-image: url({{asset("Content/images/background/pattern-15.png")}})"></div>
    <!--Waves end-->
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <h5>درباره شرکت اندیش گستر</h5>
                        <div class="text">
                           شرکت اندیش گستر

                            <br/>
                            یکی از بزرگترین تامین کنندگان لوله و اتصالات پلی اتیلن آبرسانی، گاز رسانی و فاضلابی مطابق با استانداردهای معتبر ملی، بیـن المللی و سیـستم استاندارد مدیریت کیفیت ISO 9001-2015, ISO14001- 2015 , OHSAS 18001 در ایران است.
                         </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <h5>لینک های کمکی </h5>
                        <ul class="list-link">
                            <li><a href="#">مدیریت خدمات اطلاعاتی </a></li>
                            <li><a href="#">خدمات ابری </a></li>
                            <li><a href="#">پشتیبانی فناوری اطلاعات و مرکز پشتیبانی</a></li>
                            <li><a href="#">امنیت سایبری </a></li>
                            <li><a href="#">نرم افزار سفارشی </a></li>
                            <li><a href="#">مشاوره رایگان</a></li>
                            <li><a href="#">رشد تجارت ما</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-widget subscribe-widget">
                        <h5>مشترک شدن در خبرنامه</h5>
                        <div class="text">امروز برای نکات ، موارد دیگر ثبت نام کنید <br> آخرین اخبار محصول</div>
                        <!--Emailed Form-->
                        <div class="emailed-form">
                            <form method="post" action="https://expert-themes.com/html/globex/contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="ایمیل خود را وارد کنید" required>
                                    <button type="submit" class="theme-btn">اکنون مشترک شوید</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">کپی رایت 1400 | طراحی سایت توسط <a href="https://sganji.ir/" style="color: #ff1037" target="_blank">سیوان گنجی </a>. تمام حقوق مادی و معنوی برای شرکت اندیش گستر محفوظ می باشد..</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-nav">
                        <li><a href="#">درباره ما </a></li>
                        <li><a href="#">خدمات </a></li>
                        <li><a href="#">حریم خصوصی </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
