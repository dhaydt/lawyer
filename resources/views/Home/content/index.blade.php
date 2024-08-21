@extends('layout.frontend.app')
@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('storage/banner/'. $web_config['hero_banner']) }}" class="jarallax-img" alt="amaradvokat">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>{{ translate::translate('Posts & Journals') }}</h1>
                    <p>{{ translate::translate('Reputation. Respect. Result.') }}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
@livewire('home.content')

@endsection
