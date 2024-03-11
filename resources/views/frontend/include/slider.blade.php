@if (count($sliders) > 0)
    <!--slider-area start-->
    <div class="slider-area pos-rel">
        <div class="slider-active">
            @foreach ($sliders as $slider)
            <div class="single-slider slider-height pos-rel d-flex align-items-center"
                style="background-image: url({{ asset('assets/images/sliders') }}/{{$slider->img}});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slider__content text-left">
                                <span class="sub-title left-line pl-80 mb-35">{{ $slider->header }}</span>
                                <h1 class="main-title mb-35" data-animation="fadeInUp2" data-delay=".2s">Change World
                                    <span>{{ $slider->content }}</span></h1>
                                <ul class="btn-list">
                                    <li><a class="theme_btn theme_btn_bg" href="{{ route('about.us') }}"
                                            data-animation="fadeInLeft" data-delay=".7s">explore more <i
                                                class="far fa-arrow-right"></i></a>
                                    </li>
                                    <li><a class="theme_btn theme-border-btn" href="{{ route('donate') }}"
                                            data-animation="fadeInLeft" data-delay=".7s">donate now <i
                                                class="far fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--slider-area end-->
@endif
