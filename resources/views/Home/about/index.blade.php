@extends('layout.frontend.app')
@section('content')
<style>
    section.text-light{
        min-height: 537px;
    }
</style>

<section id="subheader" class="text-white" data-bgcolor="#111111">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="spacer-single"></div>
                    <h1>{{ translate::translate('About Us') }}</h1>
                    <p>{{ translate::translate('Reputation. Respect. Result.') }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title">{{ translate::translate('Our Company') }}</span><br>
                <h2>
                    {{ translate::translate('Let Our Experience') }}<br>{{ translate::translate('be Your Guide') }}
                </h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-capitalize" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">{{ translate::translate('Our story') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">{{ translate::translate('Our Expertise') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                            role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                    </li> --}}
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <p>{{ translate::translate($web_config['about_us']) }}</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <p>{{ translate::translate($web_config['expertise']) }}</p>
                    </div>
                    {{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                            aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum
                            veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore incididunt do fugiat
                            commodo aliquip sit id deserunt reprehenderit aliquip nostrud. Amet ex cupidatat
                            excepteur aute veniam incididunt mollit cupidatat esse irure officia elit do ipsum
                            ullamco Lorem.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="jarallax image-container col-md-6 pull-right">
        <img src="{{ asset('/'.$web_config['about_image']) }}" class="jarallax-img" alt="amaradvokat">
    </div>
</section>
<!-- section close -->
@foreach ($team as $c)
{{-- {{ dd($c[0]) }} --}}
<section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <span class="p-title">{{ $c[0]['position'] }}</span><br>
                <h2 class="text-capitalize">
                    {{ $c[0]['name'] }}
                </h2>
                <p>{{ translate::translate($c[0]['description']) }}</p>
                <div class="social-icons s1">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pos-right" data-bgimage="url({{ asset('/'.$c[0]['image']) }}) top"></div>
</section>
@if (isset($c[1]))
<section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-md-7">
                <span class="p-title">{{ $c[1]['position'] }}</span><br>
                <h2>
                    {{ $c[1]['name'] }}
                </h2>
                <p>{{ translate::translate($c[1]['description']) }}</p>
                <div class="social-icons s1">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6" data-bgimage="url({{ asset('/'.$c[1]['image']) }}) top"></div>
</section>
@endif
@endforeach
{{-- <section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <span class="p-title">Associate</span><br>
                <h2>
                    John Shepard
                </h2>
                <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt
                    officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure
                    magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod
                    consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu
                    exercitation irure Lorem incididunt nostrud.</p>
                <div class="social-icons s1">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pos-right" data-bgimage="url({{ asset('assets/images/background/5.jpg') }}) center"></div>
</section> --}}
@endsection
