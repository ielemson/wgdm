   <!-- header-area start -->
<header id="top-menu" class="transparent-head">
    <div class="header-top-area heding-bg pt-15 pb-15 d-none d-lg-block">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="top-cta">
                        <span class="media-link"><i class="far fa-envelope"></i> <a href="mailto:{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></span>
                        <span class="media-link"><i class="far fa-map-marker-alt"></i>{{ $setting->address }}
                        </span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-end">
                    <div class="login-area">
                        <a class="media-link" href="#"><i class="far fa-phone"></i>{!!$setting->phone!!}</a>
                    </div>
                    <div class="top-right-nav">
                        <ul>
                            <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fab fa-google"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area">
        <div class="container custom-container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                <a class="logo-img" href="{{ url('/') }}"><img src="{{ asset("assets/images/settings/$setting->website_logo") }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9 d-none d-lg-block text-lg-center text-xl-right">
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home <i class="far fa-home"></i></a></li>
                                <li><a href="{{ route('about.us') }}">About</a> <i class="far fa-info-circle"></i></li>
                                <li><a href="#">Events <i class="far fa-calendar"></i></a>
                                   
                                </li>
                                <li><a href="#">Project <i class="far fa-project-diagram"></i></a>
                                <li><a href="{{ route("frontend.blogs") }}">Blogs <i class="far fa-blog"></i></a>
                                    
                                </li>
                               
                                <li><a href="{{ route('contact.us') }}">Contact</a> <i class="far fa-address-book"></i></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-1 col-md-6 col-6 text-right">
                    <div class="hamburger-menu d-lg-block d-xl-none">
                        <a href="javascript:void(0);">
                            <i class="far fa-bars"></i>
                        </a>
                    </div>
                    <div class="quote-btn d-none d-xl-block">
                        <a href="{{ route('contact.us') }}" class="theme_btn theme_btn_bg">get a quote <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area end -->

<!-- slide-bar start -->
@include('frontend.include.aside')
<div class="body-overlay"></div>
<!-- slide-bar end -->