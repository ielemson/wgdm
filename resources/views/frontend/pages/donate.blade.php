@extends('layouts.front')

@php
    $setting = \App\Models\Setting::find(1);
@endphp
@section('content')
@section('title', 'About Us')
@include('frontend.include.innerBanner', ['banner_title' => 'Donate'])

<main>

  @include('frontend.include.page_title',['bannerTitle'=>'Donate','bannerImg'=>'assets/img/about/banner.jpg'])
 
   <!--career-area start-->
   <section class="career-area grey-bg pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="career-catagory-area">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="careers theme-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="careers-img" style="background-image:url(assets/img/goal/03.jpg);"></div>
                                <div class="careers__icon">
                                    <i class="fa fa-university"></i>
                                </div>
                                <h4>Zenith Bank</h4>
                                <p>NGN a/c: - 1016842068
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="careers theme-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="careers-img" style="background-image:url(assets/img/goal/03.jpg);"></div>
                                <div class="careers__icon">
                                    <i class="fa fa-university"></i>
                                </div>
                                <h4>Zenith Bank</h4>
                                <p>Pounds a/c: - 5060321063
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="careers theme-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="careers-img" style="background-image:url(assets/img/goal/03.jpg);"></div>
                                <div class="careers__icon">
                                    <i class="fa fa-university"></i>
                                </div>
                                <h4>Zenith Bank</h4>
                                <p>US-D a/c : 5071255898
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="careers theme-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="careers-img" style="background-image:url(assets/img/goal/03.jpg);"></div>
                                <div class="careers__icon">
                                    <i class="fa fa-university"></i>
                                </div>
                                <h4>Zenith Bank</h4>
                                <p>EURO a/c: 5080314535</p>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="careers theme-bg2 mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                <div class="careers-img" style="background-image:url(assets/img/goal/03.jpg);"></div>
                                <div class="careers__icon">
                                    <i class="fal fa-mouse"></i>
                                </div>
                                <h4>Finance & Banking</h4>
                                <p>15 Jobs Available</p>
                            </div>
                        </div> --}}
                    
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="faq-right">
                    <div class="widget mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="widget-donate-box pos-rel text-center" style="background-image:url(assets/img/events/15.jpg);">
                            <h5>Donate Now</h5>
                            <h3>
                                We thank you for your goodwill.
                            </h3>
                                <a class="theme_btn theme_btn_bg" href="#"
                                data-animation="fadeInLeft" data-delay=".5s">donate now <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="widget white-bg mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="widget-contact-box pos-rel">
                            <h4>Conatct Us</h4>
                            
                            <ul class="fot-list address-list mb-20">
                                <li><a href="#"><i class="far fa-map-marker-alt"></i>{{ $setting->address }}</a></li>
                                <li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="{{ $setting->email }}">{{ $setting->email }}</span></a></li>
                                <li><a href="#"><i class="far fa-phone-volume"></i>{{ $setting->phone }}</a></li>
                            </ul>
                            <ul class="team__social media-social mt-10">
                                {{-- <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-behance"></i>
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--career-area end-->

</main>

@include('frontend.include.footer')
@endsection
