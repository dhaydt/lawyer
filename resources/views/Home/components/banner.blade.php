@push('css')
<style>
    .carousel-img{
        height: 100vh;
        object-fit: cover;
    }
    .owl-carousel .owl-dots{
        margin-top: -21vh;
        position: absolute;
        width: 100vw;
    }
    .owl-carousel .owl-dots .owl-dot{
        background: #a3a3a3;
        width: 30px;
    }
    .owl-carousel .owl-dots .owl-dot.active{
        background: #5c5c5c;
    }
</style>
@endpush
<div id="top"></div>
<section aria-label="section" class="carousel-container vh-100 no-padding text-light">
    @php($banners = \App\CPU\Helpers::main_banner())
    <div class="owl-carousel">
        @foreach ($banners as $banner)
        <div class="img-banner">
            <img src="{{ asset('storage/banner'.'/'.$banner['photo']) }}" class="carousel-img" alt="">
        </div>
        @endforeach
    </div>
    <!-- Set up your HTML -->
    {{-- <img src="{{ asset('assets/images/background/6.jpg') }}" class="jarallax-img" alt=""> --}}
    <div class="v-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="wow fadeInUp" data-wow-delay=".4s">Trusted Law Firm</h3>
                    <h1 class="wow fadeInUp text-uppercase" data-wow-delay=".6s">We Have 95% Case Winning Rate
                    </h1>
                    <div class="spacer-20"></div>
                    {{-- <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="features.html">Contact Us</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')
<script>
    $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                center: true,
                items:1,
                autoplay: false,
                loop:true,
                dots: true,
                margin:10,
                autoplayHoverPause: true
            });
        });
</script>
@endpush
