
@extends('layout.frontend.app')
@push('css')
    <style>
        .img-frame{
            height: 370px;
        }
        .img-frame img{
            height: 228px;
            width: 228px;
        }
    </style>
@endpush
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax text-white">
        <img src="{{ asset('assets/images/background/subheader3.jpg') }}" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>{{ translate::translate('Company & Organization') }}</h1>
                        <p>{{ translate::translate('Reputation. Respect. Result.') }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <section aria-label="section" data-bgcolor="#ffffff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <span class="p-title">{{ translate::translate('Who We Are') }}</span><br>
                    <h2>{{ translate::translate('Your partner for legal') }}</h2>
                    <p>{{ translate::translate($web_config['we_are']) }}</p>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="de-images">
                        <div class="di-text text-white bg-color">
                            <h1>{{ $web_config['case_count'] }}</h1><span>{{ translate::translate("Solved Cases") }}</span>
                        </div>
                        <img class="di-small-2" src="{{ asset('assets/images/misc/d2.jpg') }}" alt="" />
                        <img class="di-big img-fluid" src="{{ asset('assets/images/misc/d1.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section data-bgcolor="#111111" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-7">
                    <span class="p-title">Features</span><br>
                    <h2>
                        Let Our Experience<br>be Your Guide
                    </h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Our Attorneys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Our Expertise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim
                                sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation
                                proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit
                                cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat
                                culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex.
                                Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod
                                voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna Lorem id et
                                dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing ut
                                in id occaecat pariatur ut ullamco ea tempor duis.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                                aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum
                                veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat
                                commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat
                                excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum
                                ullamco Lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jarallax image-container col-md-6 pull-right">
            <img src="{{ asset('assets/images/background/9.jpg') }}" class="jarallax-img" alt="">
        </div>
    </section> --}}
    <section id="section-text" data-bgcolor="#111111" class="text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de_count ultra-big s2 text-center">
                        <h3 class="timer" data-to="{{ $web_config['exp_count'] }}" data-speed="1000">{{ $web_config['exp_count'] }}</h3>
                        <span class="id-color">{{ translate::translate('Years of Experience') }}</span>
                    </div>
                </div>
                <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <span class="p-title">{{ translate::translate('Welcome') }}</span><br>
                    <h2>{{ $web_config['name'] }} {{ translate::translate('is Your Best Partner for Legal Solutions') }}</h2>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                    <p>
                        {{ translate::translate($web_config['exp_content']) }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>{{ translate::translate('Our Client') }}</h2>
                    <div class="small-border"></div>
                </div>
                @foreach ($client as $c)
                <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="javascript:"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="javascript:"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="javascript:"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="fpw-overlay-btm"></div>
                            <div class="img-frame">
                                <img src="{{ asset('/' . $c['img']) }}" class="fp-image img-fluid" alt="">
                            </div>
                        </div>
                        <h4>{{ $c['name'] }}</h4>
                        {{-- Managing Partner --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-letter"></i>
                        <div class="text">
                            <h4>Request Quote</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem.
                        </div>
                        <i class="wm icofont-letter"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-investigation"></i>
                        <div class="text">
                            <h4>Investigation</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem.
                        </div>
                        <i class="wm icofont-investigation"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box f-boxed style-3 text-center">
                        <i class="id-color icofont-hand-power"></i>
                        <div class="text">
                            <h4>Case Fight</h4>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem.
                        </div>
                        <i class="wm icofont-hand-power"></i>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>
<!-- content close -->
@endsection
