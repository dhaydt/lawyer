
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
        <img src="{{ asset('storage/banner/'. $web_config['hero_banner']) }}" class="jarallax-img" alt="amaradvokat">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="spacer-single"></div>
                        <h1>{{ translate::translate('Law') }}</h1>
                        <p>{{ translate::translate('Applicable Laws') }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    @livewire('home.undang')
</div>
<!-- content close -->
@endsection
