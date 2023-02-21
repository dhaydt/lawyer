@push('css')
<meta name="title" content="amar advokat website hukum advokat" />
<meta name="description" content="Hukum Perusahaan - Hak Kekayaan Intelektual - Investasi - Properti - Pertambangan & Energi - Telekomunikasi - Dokumentasi Notaris - Perbankan & Keuangan - Asuransi - Ketenagakerjaan - Hukum Keluarga dan Perkawinan - Hukum Perdata & Pidana - Pengacara Retainer" />
<meta name="keyword" content="Hukum-Perusahaan,Hak-Kekayaan-Intelektual,Investasi,Properti,Pertambangan-dan-Energi,Telekomunikasi,Dokumentasi-Notaris,Perbankan-dan-Keuangan,Asuransi,Ketenagakerjaan,Hukum-Keluarga-dan-Perkawinan,Hukum-Perdata-dan-Pidana,Pengacara-Retainer" />
<link rel="canonical" href="{{ route('home') }}">
<meta property="og:image" content="{{ asset('storage/company'.'/'.$web_config['web_logo']) }}" />
<meta property="og:title" content="Amar Advokat Company Profile Firma Hukum" />
<meta property="og:url" content="https://amaradvokat.com/">
<meta property="og:description" content="Hukum Perusahaan - Hak Kekayaan Intelektual - Investasi - Properti - Pertambangan & Energi - Telekomunikasi - Dokumentasi Notaris - Perbankan & Keuangan - Asuransi - Ketenagakerjaan - Hukum Keluarga dan Perkawinan - Hukum Perdata & Pidana - Pengacara Retainer">

<meta property="twitter:card" content="{{ asset('storage/company'.'/'.$web_config['web_logo']) }}" />
<meta property="twitter:title" content="Amar Advokat Company Profile Firma Hukum" />
<meta property="twitter:url" content="https://amaradvokat.com/">
<meta property="twitter:description" content="Hukum Perusahaan - Hak Kekayaan Intelektual - Investasi - Properti - Pertambangan & Energi - Telekomunikasi - Dokumentasi Notaris - Perbankan & Keuangan - Asuransi - Ketenagakerjaan - Hukum Keluarga dan Perkawinan - Hukum Perdata & Pidana - Pengacara Retainer">
<style>
    .carousel-img {
        height: 100vh;
        object-fit: cover;
    }

    .owl-carousel .owl-dots {
        margin-top: -21vh;
        position: absolute;
        width: 100vw;
    }

    .owl-carousel .owl-dots .owl-dot {
        background: #a3a3a3;
        width: 30px;
    }

    .owl-carousel .owl-dots .owl-dot.active {
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
                autoplay: true,
                loop:true,
                dots: true,
                margin:10,
                autoplayHoverPause: false
            });
        });
</script>
@endpush