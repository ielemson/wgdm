<section class="page-title-area" style="background-image:url({{$bannerImg ?? ''}});">
    <div class="right-border-shape">
        <img src="assets/img/shape/02.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="page-title-wrapper text-center">
                    <h1 class="page-title wow fadeInUp2 animated" data-wow-delay='.1s'>{{ $bannerTitle ?? '' }}</h1>
                    <div class="breadcrumb">
                        <ul class="breadcrumb-list wow fadeInUp2 animated" data-wow-delay='.3s'>
                            <li><a href="{{ url('/') }}">Home <i class="far fa-chevron-right"></i></a></li>
                            <li><a class="active" href="#">{{ $bannerTitle ?? '' }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>