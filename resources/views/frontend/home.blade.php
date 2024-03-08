@extends('layouts.front')
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@section('content')
@section('title', 'Home')
{{-- include page header --}}
@include('frontend.include.header')

<main>
    @include('frontend.include.slider') 
    <!--about-us-area start-->
   @include('frontend.include.who_we_are')

   @include('frontend.include.support_us')
   
   @include('frontend.include.founder')
    <!--donation-area start-->
    @include('frontend.include.donate')

    @include('frontend.include.gallery')
    <!--donation-area end-->
    <!--project-area start-->
    {{-- <section class="project-area grey-bg pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Popular Project</h6>
                        <h2>We’ve Done Many Crowd <br>
                            <span>Founding Project</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="projects projects-02 white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="projects__thumb pos-rel">
                            <img src="https://devsnews.com/template/fande/fande/assets/img/project/05.jpg/" alt="">
                            <a href="#" class="new-tag">new</a>
                        </div>
                        <div class="projects__content">
                            <h4><a href="project-video.html">Gen3 Airoha Air Pro 3 TWS
                                    Cancel Headphone</a></h4>
                            <div class="skill mb-30">
                                <p>Raised <span>$2535</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="95">
                                        <h5>95%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="projects__content--manager">
                                <ul class="project-manager">
                                    <li><a href="#"><img src="https://devsnews.com/template/fande/fande/assets/img/project/01.png/" alt="">
                                            <span>Somalia</span></a></li>
                                    <li>
                                        <p class="time"><i class="far fa-clock"></i> 7 Days Left</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="projects projects-02 white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="projects__thumb pos-rel">
                            <img src="https://devsnews.com/template/fande/fande/assets/img/project/06.jpg/" alt="">
                            <a href="#" class="new-tag">new</a>
                        </div>
                        <div class="projects__content">
                            <h4><a href="project-video.html">Oculus Rift PC-Powered
                                    VR Gaming Headset</a></h4>
                            <div class="skill mb-30">
                                <p>Raised <span>$2535</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="85">
                                        <h5>85%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="projects__content--manager">
                                <ul class="project-manager">
                                    <li><a href="#"><img src="https://devsnews.com/template/fande/fande/assets/img/project/01.png/" alt="">
                                            <span>Somalia</span></a></li>
                                    <li>
                                        <p class="time"><i class="far fa-clock"></i> 7 Days Left</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="projects projects-02 white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="projects__thumb pos-rel">
                            <img src="https://devsnews.com/template/fande/fande/assets/img/project/07.jpg/" alt="">
                            <a href="#" class="new-tag">new</a>
                        </div>
                        <div class="projects__content">
                            <h4><a href="project-video.html">Inspiron 13.3 2-In Laptop I3
                                    4GB 50GB Windows</a></h4>
                            <div class="skill mb-30">
                                <p>Raised <span>$2535</span></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="85">
                                        <h5>85%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="projects__content--manager">
                                <ul class="project-manager">
                                    <li><a href="#"><img src="https://devsnews.com/template/fande/fande/assets/img/project/01.png/" alt="">
                                            <span>Somalia</span></a></li>
                                    <li>
                                        <p class="time"><i class="far fa-clock"></i> 7 Days Left</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--project-area end-->
    <!--subscribe-area start-->
    <section class="subscribe-area">
        <div class="container">
            <div class="subscribe-bg theme-bg2 pos-rel">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe-wrapper">
                            <div class="section-title text-left mb-30 wow fadeInLeft animated" data-wow-delay='.1s'>
                                <h6 class="left-line pl-75 pr-75">Newsletters</h6>
                                <h2>Subscribe Our<br>
                                    <span>Newsletters</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe-content wow fadeInRight animated" data-wow-delay='.1s'>
                            <h6>Get Every Single Update To Join Our Newsletters</h6>
                            <form class="subscribe-form" action="https://www.devsnews.com/template/fande/fande/form.php">
                                <input class="form-control" type="text" placeholder="Enter Your Email">
                                <button><i class="far fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe-area end-->
    <!--team-area start-->
    {{-- <section class="team-area pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-70 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Meet Our Team</h6>
                        <h2>We’ve Most Experience <br>
                            <span>Team Members</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <div class="team text-center mb-30">
                        <div class="team__thumb mb-25 pos-rel">
                            <div class="team-avatar">
                                <img src="assets/img/team/01.png" alt="">
                            </div>
                            <a class="msg-me" href="#"><i class="far fa-envelope-open"></i></a>
                        </div>
                        <div class="team__content">
                            <p>Web Designer</p>
                            <h5><a href="#">David SL Warner</a></h5>
                            <a class="more_btn" href="#"><i class="far fa-plus"></i></a>
                            <ul class="team__social mt-10">
                                <li>
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="team text-center mb-30">
                        <div class="team__thumb mb-25 pos-rel">
                            <div class="team-avatar">
                                <img src="assets/img/team/02.png" alt="">
                            </div>
                            <a class="msg-me" href="#"><i class="far fa-envelope-open"></i></a>
                        </div>
                        <div class="team__content">
                            <p>CEO & Founder</p>
                            <h5><a href="#">Somalia D Silva</a></h5>
                            <a class="more_btn" href="#"><i class="far fa-plus"></i></a>
                            <ul class="team__social mt-10">
                                <li>
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.5s'>
                    <div class="team text-center mb-30">
                        <div class="team__thumb mb-25 pos-rel">
                            <div class="team-avatar">
                                <img src="assets/img/team/03.png" alt="">
                            </div>
                            <a class="msg-me" href="#"><i class="far fa-envelope-open"></i></a>
                        </div>
                        <div class="team__content">
                            <p>Web Designer</p>
                            <h5><a href="#">Ryan Lima Alves</a></h5>
                            <a class="more_btn" href="#"><i class="far fa-plus"></i></a>
                            <ul class="team__social mt-10">
                                <li>
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.7s'>
                    <div class="team text-center mb-30">
                        <div class="team__thumb mb-25 pos-rel">
                            <div class="team-avatar">
                                <img src="assets/img/team/04.png" alt="">
                            </div>
                            <a class="msg-me" href="#"><i class="far fa-envelope-open"></i></a>
                        </div>
                        <div class="team__content">
                            <p>Web Designer</p>
                            <h5><a href="#">Breno Cavalcanti</a></h5>
                            <a class="more_btn" href="#"><i class="far fa-plus"></i></a>
                            <ul class="team__social mt-10">
                                <li>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--team-area end-->
    <!--counter-area start-->
    {{-- <section class="counter-area heding-bg pt-130 pb-100" style="background-image: url(assets/img/bg/03.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="counetrs__icon mb-30"><i class="far fa-gem"></i></div>
                        <h1><span class="counter">402</span>+</h1>
                        <p>Project Complate</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="counetrs__icon mb-30"><i class="fal fa-gift"></i></div>
                        <h1><span class="counter">365</span>+</h1>
                        <p>Global Partner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="counetrs__icon mb-30"><i class="far fa-trophy-alt"></i></div>
                        <h1><span class="counter">753</span>+</h1>
                        <p>Awards Winning</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.7s'>
                        <div class="counetrs__icon mb-30"><i class="far fa-users"></i></div>
                        <h1><span class="counter">862</span>+</h1>
                        <p>Active Volunteer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--counter-area end-->
    <!--testimonial-area start-->
    {{-- <section class="testimonial-area theme-bg2 pt-125 pb-130" style="background-image:url(assets/img/bg/04.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title white-title text-center mb-70 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Clients Feedback</h6>
                        <h2>356754+ Peoples Say<br>
                            <span>About Given </span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="row testimonial-active">
                    <div class="col-xl-6">
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="author-img fix pb-20">
                                <div class="author-avatar f-right">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                </div>
                            </div>
                            <div class="author-content mb-15">
                                <h5 class="left-line pl-40">David Michel,<span class="desig">CEO & Founder</span></h5>
                            </div>
                            <p class="semi-title mb-15">But I must explain to you how all this mistake denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of ter-builder</p>
                            <div class="review-icon">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <div class="author-img fix pb-20">
                                <div class="author-avatar f-right">
                                    <img src="assets/img/testimonial/02.png" alt="">
                                </div>
                            </div>
                            <div class="author-content mb-15">
                                <h5 class="left-line pl-40">Somalia Silva,<span class="desig">CEO & Founder</span></h5>
                            </div>
                            <p class="semi-title mb-15">But I must explain to you how all this mistake denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of ter-builder</p>
                            <div class="review-icon">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="author-img fix pb-20">
                                <div class="author-avatar f-right">
                                    <img src="assets/img/testimonial/01.png" alt="">
                                </div>
                            </div>
                            <div class="author-content mb-15">
                                <h5 class="left-line pl-40">David Michel,<span class="desig">CEO & Founder</span></h5>
                            </div>
                            <p class="semi-title mb-15">But I must explain to you how all this mistake denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of ter-builder</p>
                            <div class="review-icon">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <div class="author-img fix pb-20">
                                <div class="author-avatar f-right">
                                    <img src="assets/img/testimonial/02.png" alt="">
                                </div>
                            </div>
                            <div class="author-content mb-15">
                                <h5 class="left-line pl-40">Somalia Silva,<span class="desig">CEO & Founder</span></h5>
                            </div>
                            <p class="semi-title mb-15">But I must explain to you how all this mistake denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of ter-builder</p>
                            <div class="review-icon">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--testimonial-area end-->
    <!--brand-area start-->
    <section class="brand-area grey-bg2 pt-130">
        <div class="container custom-container-02">
          
        </div>
    </section>
    <!--brand-area end-->
   
    <!--cta-area start-->
    <section class="cta-area theme-bg pt-55 pb-25">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="section-title mb-30">
                            <h2>Want to <b>Partner</b> With Us ?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="cta-wrapper">
                        <div class="cta-btn text-md-right wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <a class="theme_btn theme_btn_bg" href="{{ route("contact.us") }}">contact us <i
                                class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->
</main>
{{-- include page footer --}}

@include('frontend.include.footer')
@endsection
