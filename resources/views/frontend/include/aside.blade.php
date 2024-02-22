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