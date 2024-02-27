@if (count($galleries) > 0)
<section class="feature-project-area pt-125 pb-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <h6 class="left-line pl-75 pr-75">Our Gallery</h6>
                    <h2>WGDM<br>
                        <span>At a glance</span></h2>
                </div>
            </div>
        </div>
        <div class="row pb-100">
            @foreach ($galleries as $gallery)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.1s'>
                <div class="blogs mb-30">
                    <div class="blogs__thumb pos-rel">
                       <div class="blogs__thumb--img">
                           
                            <a  href="{{ asset("wgdm/images/gallery/$gallery->image") }}" data-lightbox="example-set" data-title="{{ $gallery->title }}"><img class="example-image" src="{{ asset("wgdm/images/gallery/$gallery->image") }}" alt="{{ $gallery->title }}"/></a>
                       </div>
                     
                    </div>
                   
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif