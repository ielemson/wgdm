   <!-- header-area start -->
<header id="top-menu" class="transparent-head">
    <div class="header-top-area heding-bg pt-15 pb-15 d-none d-lg-block">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="top-cta">
                        <span class="media-link"><i class="far fa-envelope"></i> <a href="mailto:{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></span>
                        <span class="media-link"><i class="far fa-map-marker-alt"></i>{{ $setting->address }}
                            USA</span>
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
                        <a class="logo-img" href="{{ url('/') }}"><img src="{{ asset("assets/images/settings/$setting->website_logo") }}"
                                alt=""></a>
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
                                <li><a href="#">Pages <i class="far fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="">History</a></li>
                                        <li><a href="">Career</a></li>
                                        <li><a href="">Team</a></li>
                                        <li><a href="">FAQ</a></li>
                                    </ul>
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
            <a href="index.html">
                <img src="assets/img/logo/header_logo_one.png" alt="logo">
            </a>
        </div>
        <div class="offset-widget mb-40">
            <div class="info-widget">
                <h4 class="offset-title mb-20">About Us</h4>
                <p class="mb-30">
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                    was born and will give you a complete account of the system and expound the actual teachings of
                    the great explore
                </p>
                <a class="theme_btn theme_btn_bg" href="contact.html">Contact Us</a>
            </div>
        </div>
        <div class="offset-widget mb-30 pr-10">
            <div class="info-widget info-widget2">
                <h4 class="offset-title mb-20">Contact Info</h4>
                <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                <p> <i class="fal fa-envelope-open"></i> <a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="533a3d353c13362b323e233f367d303c3e">[email&#160;protected]</a> </p>
            </div>
        </div>
    </div>
    <!-- offset-sidebar end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li class="has-dropdown">
                <a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home Style 1</a></li>
                    <li><a href="index-2.html">Home Style 2</a></li>
                </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
            <li class="has-dropdown">
                <a href="#">Events</a>
                <ul class="sub-menu">
                    <li><a href="events.html">Events Grid</a></li>
                    <li><a href="events-details.html">Events Details</a></li>
                </ul>
            </li>
            <li class="has-dropdown"><a href="#">Project</a>
                <ul class="submenu">
                    <li><a href="project-01.html">Project One</a></li>
                    <li><a href="project-02.html">Project Two</a></li>
                    <li><a href="project-03.html">Project Three</a></li>
                    <li><a href="project-gallery.html">Project Gallery</a></li>
                    <li><a href="project-image.html">Project Image</a></li>
                    <li><a href="project-video.html">Project Video</a></li>
                </ul>
            </li>
            <li class="has-dropdown"><a href="#">Blogs</a>
                <ul class="submenu">
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-standard.html">Blog Standard</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="history.html">History</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contacts Us</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->