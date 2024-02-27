
  <!--footer-area start-->
  <footer class="footer-area heding-bg pos-rel pt-100" style="background-image:url(assets/img/bg/02.png)">
    <div class="container">
        <div class="footer-bottom-area">
            <div class="row mb-30">
                <div class="col-xl-2 col-lg-3 col-md-6  wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <div class="footer__widget mb-30">
                        <h5 class="semi-title mb-25">Quick Links</h5>
                        <ul class="fot-list">
                            <li><a href="{{ route('about.us') }}">About us</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="#">How It Works</a></li>
                            <li><a href="https://palpresmedia.com.ng">News & articles</a></li>
                            <li><a href="{{ route('contact.us') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="footer__widget mb-30 pl-40">
                        <h5 class="semi-title mb-25">Our Project</h5>
                        <ul class="fot-list">
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Film & Video</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Games</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.5s'>
                    <div class="footer__widget mb-25 pl-85">
                        <h5 class="semi-title mb-25">Our Project</h5>
                        <p class="mb-10">
                            {{ __('Welcome to Wilderness Guides & Development Mission') }}
                        </p>
                        <ul class="fot-list address-list">
                            <li><a href="#"><i class="far fa-map-marker-alt"></i>{{ $setting->address }}</a></li>
                            <li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__">{{ $setting->email }}</span></a></li>
                            <li><a href="#"><i class="far fa-phone-volume"></i>{{ $setting->phone }}</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.7s'>
                    <div class="footer__widget fot_abot mb-30 pl-85">
                        <h5 class="semi-title mb-25">Partner With  Us</h5>
                        <p class="mb-30">
                            {{ __('Wilderness Guides & Development Mission Inc.') }}
                        </p>
                            <div class="subscribe-content foter-subscribe">
                                <form class="subscribe-form" action="#">
                                    <input class="form-control" type="text" placeholder="Enter Your Email">
                                    <button><i class="far fa-arrow-right"></i></button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--scroll-target-btn-->
        <a href="#top-menu" class="scroll-target"><i class="far fa-arrow-up"></i></a>
        <!--scroll-target-btn-->
        <div class="copy-right-area pt-30">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="footer-log mb-30">
                        <a href="{{ url('/') }}" class="footer-logo mb-30"><img src="{{ asset("assets/images/settings/$setting->website_logo") }}"
                            alt=""></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="copyright mb-30 text-md-right">
                        <p>© {{ Date('Y') }} All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->