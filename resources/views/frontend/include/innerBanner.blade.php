 <!-- preloader -->
 <div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!-- preloader end  -->
<!-- header-area start -->
<header id="top-menu">
    <div class="header-top-area  head-top-02 grey-bg pt-15 pb-15 d-none d-lg-block">
        <div class="container custom-container-03">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8">
                    <ul class="login-area">
                        <li><span>{{ $setting->email }}</span></li>
                        {{-- <li><a class="sign_btn" href="#"><i class="far fa-phone"></i> Sign up</a></li> --}}
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-5 d-none d-xl-block">
                    <div class="top-cta text-right">
                        <span class="media-link"><i class="far fa-envelope"></i> <a href="#" class="__cf_email__">{{ $setting->phone }}</a></span>
                        <span class="media-link"><i class="far fa-map-marker-alt"></i> {{ $setting->address }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area main-head-02">
        <div class="container custom-container-03">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a class="logo-img" href=""><img src="{{ asset("assets/images/settings/$setting->website_logo") }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-none d-lg-block text-lg-center text-xl-right">
                    <div class="main-menu main-menu-02 d-none d-lg-block">
                        <nav >
                            <ul>
                                <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home <i class="far fa-home"></i></a></li>
                                <li><a class="{{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about.us') }}">About</a> <i class="far fa-info-circle"></i></li>
                                <li><a href="#">Events <i class="far fa-calendar"></i></a>
                                   
                                </li>
                                <li><a href="#">Project <i class="far fa-project-diagram"></i></a>
                                <li><a href="{{ route('frontend.blogs') }}">Blogs <i class="far fa-blog"></i></a>
                                    
                                </li>
                               
                                <li><a class="{{ request()->is('contact-us') ? 'active' : '' }} " href="{{ route('contact.us') }}">Contact</a> <i class="far fa-address-book"></i></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-1 col-md-6 col-6 text-right d-flex align-items-center justify-content-end">
                    <div class="quote-btn mr-10">
                        <a href="{{ route('contact.us') }}" class="theme_btn theme_btn_bg">Donate Now<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                    <div class="hamburger-menu">
                        <a href="javascript:void(0);">
                            <img src="assets/img/logo/bar-icon-01.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area end -->

<!-- slide-bar start -->

    <!-- side-mobile-menu start -->
    @include('frontend.include.aside')
    <!-- side-mobile-menu end -->

<div class="body-overlay"></div>
<!-- slide-bar end -->