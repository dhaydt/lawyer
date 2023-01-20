@extends('layout.frontend.app')
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-white">
        <img src="{{ asset('assets/images/background/subheader1.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>Our Legal Services</h1>
                        <p>Reputation. Respect. Result.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section>
        <div class="container">
            <div class="row">
                @foreach ($services as $s)
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <img src="{{ asset('storage/services'.'/'.$s->logo) }}" alt="" class="icofont-group bg-color text-light">
                        <div class="text mt-4">
                            <h4>{{ $s->title }}</h4>
                            {{ $s->description }}
                        </div>
                        <i class="wm icofont-worker"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black d-none">Read More</a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-medical-sign-alt"></i>
                        <div class="text">
                            <h4>Medical &amp; Health Care</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-medical-sign-alt"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-mining"></i>
                        <div class="text">
                            <h4>Mining</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-mining"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-law-order"></i>
                        <div class="text">
                            <h4>Civil &amp; Criminal</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-law-order"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-group-students"></i>
                        <div class="text">
                            <h4>Family &amp; Marriage</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-group-students"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-money"></i>
                        <div class="text">
                            <h4>Corporate &amp; Investment</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-money"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-building"></i>
                        <div class="text">
                            <h4>Property</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-building"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-bank"></i>
                        <div class="text">
                            <h4>Banking &amp; Insurance</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-bank"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-light-bulb"></i>
                        <div class="text">
                            <h4>Intellectual Property</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.
                        </div>
                        <i class="wm icofont-light-bulb"></i>
                        <div class="spacer-single"></div>
                        <a href="#" class="btn-custom btn-black">Read More</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>
@endsection
