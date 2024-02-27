@php
    $setting = \App\Models\Setting::find(1);
@endphp
@extends('layouts.front')

@section('content')
@section('title', 'Our Blog')  
@include('frontend.include.innerBanner',['banner_title'=>'Blogs'])


<main>
        
    <!--page-title-area start-->
    @include('frontend.include.page_title',['bannerTitle'=>'Blogs','bannerImg'=>'assets/img/about/banner.jpg'])
    <!--page-title-area area-->
    <!--contact-box-area start-->
    <section class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                @if (count($blogs) > 0)
              @foreach ($blogs as $post)
              <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.1s'>
            
                <div class="blogs mb-30">
                 <div class="blogs__thumb pos-rel mb-45">
                    <div class="blogs__thumb--img">
                         <img src="{{asset('assets/images/news')}}/{{$post->image}}" alt="">
                    </div>
                     <a class="blog-tag" href="{{route('front.single.news',$post->slug)}}">{{ $post->category->name }}</a>
                 </div>
                 <div class="blogs__content">
                     <div class="blogs__content--meta mb-15">
                         <span><i class="far fa-calendar-alt"></i> {{ Carbon\Carbon::parse($post->created_at)->isoFormat('MMM DD YY') }}</span>
                         {{-- <span><i class="far fa-comment"></i> Comment (03)</span> --}}
                     </div>
                     <h4 class="mb-20"><a href="{{route('front.single.news',$post->slug)}}">
                     {{ $post->title }}   
                    </a></h4>
                     <ul class="project-manager">
                         <li><a href="#"><img src="assets/img/blog/04.png" alt="">
                                 <span>admin</span></a></li>
                         <li>
                             <a class="more_btn_02" href="{{route('front.single.news',$post->slug)}}">Read more <i class="far fa-arrow-right"></i></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
              @endforeach
                @endif
              
            </div>
        </div>
    </section>
</main>
@include('frontend.include.footer')
@endsection
