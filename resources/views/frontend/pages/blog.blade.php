@php
    $setting = \App\Models\Setting::find(1);
@endphp
@extends('layouts.front')

@section('content')
@section('title', 'Our Blog')  
@include('frontend.include.innerBanner',['banner_title'=>'Blogs'])


<main>
        
    <!--page-title-area start-->
    @include('frontend.include.page_title',['bannerTitle'=>'Blogs','bannerImg'=>'/assets/img/about/banner.jpg'])
    <!--page-title-area area-->
    <!--contact-box-area start-->
      <!--blog-area start-->
      <section class="blog-details-area grey-bg pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 mb-40">
                    <div class="blogs__thumb--img white-bg pb-25">
                        <img src="{{asset('assets/images/news')}}/{{$blog->image}}" alt="">
                   </div>
                    <div class="blogs-details-content-area white-bg">
                        <div class="blogs blogs-03 white-bg wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="blogs__thumb pos-rel mb-35">
                                <a class="blog-tag" href="{{route('front.single.news',$blog->slug)}}">{{ $blog->category->name }}</a>
                            </div>
                            <div class="blogs__content blogs-03__content">
                                <h3 class="mb-20"><a href="{{route('front.single.news',$blog->slug)}}">
                                 {{$blog->title}}
                                </a></h3>
                                <div class="blogs__content--meta">
                                    <span><i class="far fa-user-circle"></i> By Admin</span>
                                    <span><i class="far fa-calendar-alt"></i> {{ Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM DD YY') }}</span>
                                    {{-- <span><i class="far fa-comment"></i> Comment (03)</span>
                                    <span><i class="far fa-heart"></i> Like (1K)</span> --}}
                                </div>
                                <p>
                                    {!!$blog->details!!}
                                </p>
                            </div>
                        </div>
                       
                       
                        <div class="blog-post-tag wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-7">
                                    
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-5">
                                    <div class="post-share-icon text-md-right mb-50">
                                        <span>Share :</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text={{route("front.single.news",$blog->slug)}}"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="blog-standard-right">
                       
                        <div class="widget mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <ul class="widget-list">
                                @foreach ($categories as $category)
                                <li>{{ $category->name }}<span class="f-right"><i class="far fa-chevron-right"></i></span></li>
                                
                                @endforeach
                              
                            </ul>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog-area end-->
</main>
@include('frontend.include.footer')
@endsection
