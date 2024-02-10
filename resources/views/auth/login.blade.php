@extends('layouts.front')

@php
    $setting = \App\Models\Setting::find(1);
@endphp

@section('content')
@section('title', 'Sign in')
@include('frontend.include.innerBanner', ['banner_title' => 'Sign in'])

{{-- <div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="user-img">
                    <img src="assets/images/register.jpg" alt="login"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-all-form">
                    <div class="contact-form">
                        <h3 class="user-title">
                            Sign in</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>
                                       
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"   required>
                                       
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    
                                </div>
                               
                                <div class="col-lg-12 form-condition">
                                    <div class="agree-label">
                                        <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                        <label for="chb1">
                                            Remember Me
                                            <a class="forget" href="{{route('password.forget')}}">Forgot Password?</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Login Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main>
        
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image:url(assets/img/bg/page-title-bg.jpg);">
        <div class="right-border-shape">
            <img src="assets/img/shape/02.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="page-title-wrapper text-center">
                        <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>Login</h1>
                        <div class="breadcrumb">
                            <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <li><a href="{{ url('/') }}">Home <i class="far fa-chevron-right"></i></a></li>
                                <li><a class="active" href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area area-->
   
   <!--contact-area start-->
   <section class="contact-details-area pb-120 wow fadeInUp2 animated" data-wow-delay='.3s'>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="post-form-area contact-form pt-125">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                       
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Your Email Address</h5>
                                <div class="input-text input-mail">
                                    {{-- <input type="email" c class="form-control @error('password') is-invalid @enderror" name="password"   required> --}}
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email"   required>
                                       
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="input-box mb-35">
                                <h5>Password</h5>
                                <div class="input-text input-password">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password"   required>
                                       
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-6">
                            <div class="msg-btn text-md-center">
                                <button class="theme_btn theme_btn_bg" type="submit">Login <i
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

</main>
@include('frontend.include.footer')
@endsection
