@extends('layouts.front')

@php
    $setting = \App\Models\Setting::find(1);
@endphp
@section('content')
@section('title', 'About Us')
@include('frontend.include.innerBanner', ['banner_title' => 'About Us'])


<main>
        
    <!--page-title-area start-->
  @include('frontend.include.page_title',['bannerTitle'=>'About Us','bannerImg'=>'assets/img/about/banner.jpg'])
    <!--page-title-area area-->
    <!--about-us-area start-->
    <section class="about-us-area-03 pt-130 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="about-img mb-50">
                        <div class="about-img__thumb wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <img src="{{ asset('assets/img/about/about.jpg') }}" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="about__wrapper about__wrap__03 pl-65 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="section-title text-left mb-35">
                            <h6 class="left-line pl-75">Who We Are</h6>
                            <h2>About Us</h2>
                        </div>
                        <p>Wilderness Guides & Development Mission Inc., is a non-profit Organization, managed under the discretion of the professionals, since 2016; for the elevations of the less-privileged.
                        </p>
                        <h3>Our Work</h3>
                        <p>We serve in downtrodden communities; changing conceptions and human behaviors, by funding individual beneficiaries in commerce, irrespective of race, creed, and or belief; while adhering to:
                            “ <b>A RESOLUTION PROJECT FOR MORAL EXCELENCE</b> ”
                            It’s a strict adherence to us, as to develop the sense of belonging in human endeavour; and not despised, being a citizen of this nation by provision of necessary guideline, development, and funding investment for every of our beneficiary.  
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->
    <!--feature-project-area start-->
    {{-- <section class="about-feature-project pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about__wrapper feature__wrapper mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="section-title text-left mb-25">
                            <h6 class="left-line pl-75">Features Projects</h6>
                            <h2>We Offer Awesome<br>
                            <span>Product For Business</span></h2>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusante
                            um doloremque laudantium totam rem aperiam, eaque ipsa quis autem vel eum iure reprehenderit qui in ea voluptate velit esse autem vel eum iure reprehenderit qui in ea voluptate velit esse quam </p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                <div class="single-feature mb-30">
                                    <div class="single-feature__icon mr-20">
                                        <i class="flaticon-dish"></i>
                                    </div>
                                    <div class="single-feature__content">
                                        <h5><a href="project-video.html">Raising Food</a></h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <div class="single-feature mb-30">
                                    <div class="single-feature__icon mr-20">
                                        <i class="flaticon-computer"></i>
                                    </div>
                                    <div class="single-feature__content">
                                        <h5><a href="project-video.html">Web Design</a></h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.4s'>
                                <div class="single-feature mb-30">
                                    <div class="single-feature__icon mr-20">
                                        <i class="flaticon-stethoscope"></i>
                                    </div>
                                    <div class="single-feature__content">
                                        <h5><a href="project-video.html">Medical & Health</a></h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.8s'>
                                <div class="single-feature mb-30">
                                    <div class="single-feature__icon mr-20">
                                        <i class="flaticon-project-management"></i>
                                    </div>
                                    <div class="single-feature__content">
                                        <h5><a href="project-video.html">Technology</a></h5>
                                        <p>Sed ut perspiciatis unde omnis iste natus error </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-img feature__img__box pl-65 mb-50 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="about-img__thumb">
                            <img src="https://devsnews.com/template/fande/fande/assets/img/project/12.jpg/" alt="">
                        </div>
                        <div class="about-img__style-text d-none d-md-block wow fadeInUp2 animated" data-wow-delay='.5s'>
                            <img src="https://devsnews.com/template/fande/fande/assets/img/project/02.png/" alt="">
                        </div>
                        <div class="about-img__style-shape">
                            <img src="assets/img/shape/07.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--feature-project-area end-->
     <!--counter-area start-->
     {{-- <section class="counter-area heding-bg pt-130 pb-95" style="background-image: url(assets/img/bg/03.png);">
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
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>
                        <div class="counetrs__icon mb-30"><i class="fal fa-gift"></i></div>
                        <h1><span class="counter">365</span>+</h1>
                        <p>Global Partner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="counetrs__icon mb-30"><i class="far fa-trophy-alt"></i></div>
                        <h1><span class="counter">753</span>+</h1>
                        <p>Awards Winning</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 wow fadeInUp2 animated" data-wow-delay='.4s'>
                        <div class="counetrs__icon mb-30"><i class="far fa-users"></i></div>
                        <h1><span class="counter">862</span>+</h1>
                        <p>Active Volunteer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--counter-area end-->
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
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
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
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.5s'>
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
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.7s'>
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
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.9s'>
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
    <!--donation-area start-->
    <section class="donation-area pt-125 pb-100" style="background-image:url(assets/img/about/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="donation-wrapper">
                        <div class="section-title white-title text-center mb-40 wow fadeInUp2 animated"
                            data-wow-delay='.2s'>
                            <h6 class="left-line pl-75 pr-75">Donate Now</h6>
                            <h2>Raise Your Hand To The<br>
                                <span>Right Place</span></h2>
                        </div>
                        <ul class="btn-list text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <li><a class="theme_btn theme_btn_bg" href="{{ route("contact.us") }}"
                                    data-animation="fadeInLeft" data-delay=".7s">explore more <i
                                        class="far fa-arrow-right"></i></a>
                            </li>
                            <li><a class="theme_btn theme-border-btn" href="{{ route("contact.us") }}"
                                    data-animation="fadeInLeft" data-delay=".7s">donate now <i
                                        class="far fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--donation-area end-->
    <!--testimonial-area start-->
    {{-- <section class="testimonial-area theme-bg2 pt-125 pb-130" style="background-image:url(assets/img/bg/04.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title white-title text-center mb-70 wow fadeInUp2 animated" data-wow-delay='.2s'>
                        <h6 class="left-line pl-75 pr-75">Clients Feedback</h6>
                        <h2>356754+ Peoples Say<br>
                            <span>About Given </span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="row testimonial-active">
                    <div class="col-xl-6">
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.3s'>
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
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.5s'>
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
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.3s'>
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
                        <div class="testimonial-item wow fadeInUp2 animated" data-wow-delay='.5s'>
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
       
    </section>
    <!--brand-area end-->
    <!--blog-area start-->
    {{-- <section class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-8 col-md-12">
                    <div class="blog-wrapper mb-30">
                        <div class="section-title text-left mb-70 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6 class="left-line pl-75 pr-75">Latest News</h6>
                            <h2>Every Update<br>
                                <span>News & Blog</span></h2>
                            <p>Sedut perspiciatis unde omnis iste natus error 
                                sit voluptatem accse doloremque laudantium 
                                totam rem aperiam eaque ipsa quae abillo</p>
                            <a href="blog-details.html" class="theme_btn theme_btn2 theme_btn_bg_02">view all news <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="blogs mb-30 mr-15">
                        <div class="blogs__thumb pos-rel mb-45">
                           <div class="blogs__thumb--img">
                                <img src="assets/img/blog/01.jpg" alt="">
                           </div>
                            <a class="blog-tag" href="blog-details.html">Education</a>
                        </div>
                        <div class="blogs__content">
                            <div class="blogs__content--meta mb-15">
                                <span><i class="far fa-calendar-alt"></i> 05 Nov 2020</span>
                                <span><i class="far fa-comment"></i> Comment (03)</span>
                            </div>
                            <h4 class="mb-20"><a href="blog-details.html">How Make Cross-Browser Testing More Lambda.</a></h4>
                            <ul class="project-manager">
                                <li><a href="blog-details.html"><img src="assets/img/blog/03.png" alt="">
                                        <span>David Zon</span></a></li>
                                <li>
                                    <a class="more_btn_02" href="blog-details.html">Read more <i class="far fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp2 animated" data-wow-delay='.5s'>
                    <div class="blogs mb-30 ml-15">
                        <div class="blogs__thumb pos-rel mb-45">
                           <div class="blogs__thumb--img">
                                <img src="assets/img/blog/02.jpg" alt="">
                           </div>
                            <a class="blog-tag" href="blog-details.html">Education</a>
                        </div>
                        <div class="blogs__content">
                            <div class="blogs__content--meta mb-15">
                                <span><i class="far fa-calendar-alt"></i> 05 Nov 2020</span>
                                <span><i class="far fa-comment"></i> Comment (03)</span>
                            </div>
                            <h4 class="mb-20"><a href="blog-details.html">How Make Cross-Browser Testing More Lambda.</a></h4>
                            <ul class="project-manager">
                                <li><a href="blog-details.html"><img src="assets/img/blog/04.png" alt="">
                                        <span>David Zon</span></a></li>
                                <li>
                                    <a class="more_btn_02" href="blog-details.html">Read more <i class="far fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--blog-area end-->
    <!--cta-area start-->
    <section class="cta-area theme-bg pt-55 pb-25">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="section-title mb-30">
                            <h2>Want to <b> Partner </b> With Us? </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="cta-wrapper">
                        <div class="cta-btn text-left text-md-right wow fadeInUp2 animated" data-wow-delay='.1s'>
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

@include('frontend.include.footer')
@endsection
