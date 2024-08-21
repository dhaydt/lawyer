@extends('layout.frontend.app')
@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ $web_config['banner_info'] }}" onerror="this.src='{{ asset('assets/images/background/subheader.jpg') }}'" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ translate::translate('Other Informations') }}</h1>
                    <p>{{ translate::translate('Reputation. Respect. Result.') }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section aria-label="section" class="jarallax text-light">
    <img src="{{ asset('assets/images/background/bgNotif.jpg') }}" class="jarallax-img" alt="amaradvokat">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-light">
                    <h2>{{ translate::translate('Announcement') }}</h2>
                    <div class="small-border"></div>
                </div>
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    @foreach ($notif as $n)
                    <div class="item">
                        <div class="de_testi opt-2 review">
                            <blockquote>
                                <i class="fa fa-quote-left id-color"></i>
                                <h3>{{ translate::translate($n->title) }}</h3>
                                <p>{{ translate::translate($n->description) }}</p>
                                {{-- <div class="de_testi_by"><span>John, Pixar Studio</span></div> --}}
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
