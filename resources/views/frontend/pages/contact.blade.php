@php
    $setting = \App\Models\Setting::find(1);
@endphp
@extends('layouts.front')

@section('content')
@section('title', 'Contact Us')  
@include('frontend.include.innerBanner',['banner_title'=>'Contact Us'])

{{-- <div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4  col-12 col-sm-12">
                <div class="contact-info-card">
                    <i class="ri-map-pin-fill"></i>
                    <h3>Our location
                    </h3>
                    <p>
                    {{$setting->address}}
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-card">
                    <i class="ri-mail-fill"></i>
                    <h3>Email us</h3>
                    <p>
                        <a href="#">
                            <span class="__cf_email__">{{$setting->email}}</span>
                        </a>
                    </p>
                  
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-card">
                    <i class="ri-phone-fill"></i>
                    <h3note>Phone</h3note>
                    <p>
                        <a href="#">{!!$setting->phone!!}</a>
                    </p>
                 
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="contact-widget-area pb-70" 
data-aos="fade-up"
data-aos-offset="300"
data-aos-easing="ease-in-sine">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>SEND MESSAGE</span>
            <h2>Ready to get started?</h2>
        </div>
        <div class="contact-form">
            <form action="{{ route('contact.form') }}" method="POST"  id="contactForm">
                @csrf
        
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                   

                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="7" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                  

                    <div class="form-group col-lg-6">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                &#x21bb;
                            </button>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" required data-error="Captcha cannot be empty" name="captcha" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn sendMesg">
                            Send Message
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<main>
        
    <!--page-title-area start-->
    @include('frontend.include.page_title',['bannerTitle'=>'Contact Us','bannerImg'=>'assets/img/about/banner.jpg'])
    <!--page-title-area area-->
    <!--contact-box-area start-->
    <section class="contact-box-area pb-80 pt-125">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Features Projects</h6>
                        <h2>We've Take A Mission To <br>
                            <span>Solve The Project</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="contact-box__icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-box__content">
                            <h4>Locations</h4>
                            <h5>{{ $setting->address }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="contact-box__icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="contact-box__content">
                            <h4>Email Us</h4>
                            <h5><a href="mailto:{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="contact-box d-lg-flex mb-50 wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="contact-box__icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="contact-box__content">
                            <h4>Phone Us</h4>
                            <h5>{{ $setting->phone }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-box-area end-->
   <!--contact-area start-->
   <section class="contact-details-area pb-120 wow fadeInUp2 animated" data-wow-delay='.3s'>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="post-form-area contact-form pt-125">
                    <div class="mx-auto">
                        @include('include.message')
                    </div>
                    <form action="{{ route('contact.form') }}" method="POST"  id="contactForm">
                        @csrf
                    <div class="row">
                        
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box">
                                <h5>Your Full Name</h5>
                                <div class="input-text mb-35">
                                    <input type="text" class="form-control" placeholder="Full Name Here" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Your Email Address</h5>
                                <div class="input-text input-mail">
                                    <input type="text" class="form-control" placeholder="Email Here" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Phone Number</h5>
                                <div class="input-text input-phone">
                                    <input type="text" class="form-control" placeholder="Write Your Phone Number" name="phone_number" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Subject</h5>
                                <div class="input-text input-sub">
                                    <input type="text" class="form-control" placeholder="I Would LIke To" name="msg_subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                               <h5>Captcha Code</h5>
                                <div class="input-text captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Enter Captcha</h5>
                                <div class="input-text input-sub">
                                    <input type="text" class="form-control" placeholder="Enter Captcha Code Here" name="captcha" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="input-box mb-35">
                                <h5>Leave A Message</h5>
                                <div class="input-text input-message">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Your Message" name="message_body" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-6">
                            <div class="msg-btn text-md-center">
                                <button type="submit" class="theme_btn theme_btn_bg" href="#">send  message <i
                                        class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-area end-->
<!--map-area start-->
<section class="contact-map-area">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="map-area map-02  wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29168.42973837642!2d90.37845363955077!3d23.958540550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1606918909925!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--map-area end-->
    <!--cta-area start-->
    <section class="cta-area theme-bg pt-55 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="section-title mb-30">
                            <h2>Become Our <b>Premium</b> Partner ?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="cta-btn tex-md-right">
                            <a class="theme_btn theme_btn_bg" href="contact.html">contact us <i
                                class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->
</main>
@include('frontend.include.footer')
@endsection
@push('extra-scripts')
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush