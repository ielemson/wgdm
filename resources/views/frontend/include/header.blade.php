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
                                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about.us') }}">About</a></li>
                                <li><a href="#">Events</a>
                                   
                                </li>
                                <li><a href="#">Project</a><li><a href="#">Blogs</a>
                                    
                                </li>
                               
                                <li><a href="{{ route('contact.us') }}">Contact</a></li>
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
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
    </div>

    <!-- offset-sidebar start -->
    <div class="offset-sidebar">
        <div class="offset-widget offset-logo mb-30">
            <a href="{{ url('/') }}">
                <img src="{{ asset("assets/images/settings/$setting->website_logo") }}" alt="logo">
            </a>
        </div>
        <div class="offset-widget mb-40">
            <div class="info-widget">
                <h4 class="offset-title mb-20">About Us</h4>
                <p class="mb-30">
                    Wilderness Guides & Development Mission Inc., is a non-profit Organization, managed under the discretion of the professionals, since 2016; for the elevations of the less-privileged.
                </p>
                <a class="theme_btn theme_btn_bg" href="{{ route('contact.us') }}">Contact Us</a>
            </div>
        </div>
        <div class="offset-widget mb-30 pr-10">
            <div class="info-widget info-widget2">
                <h4 class="offset-title mb-20">Contact Info</h4>
                <p> <i class="fal fa-address-book"></i> 23/A, Marina Lagos Nigeria</p>
                <p> <i class="fal fa-phone"></i> +234(0) 123456789</p>
                <p> <i class="fal fa-envelope-open"></i> <a href="#" class="__cf_email__" data-cfemail="533a3d353c13362b323e233f367d303c3e">info@wgdm.org</a> </p>
            </div>
        </div>
    </div>
    <!-- offset-sidebar end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li>
                <a href="{{ url("/") }}">Home</a>
                
            </li>
            <li><a href="{{ route("about.us") }}">About Us</a></li>
            
            <li ><a href="#">Events</a>
            </li>
            <li><a href="#">Project</a>
              
            </li>
            <li>
                <a href="#">Blogs</a>
                
            </li>
            <li><a href="{{ route("contact.us") }}">Contacts Us</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->