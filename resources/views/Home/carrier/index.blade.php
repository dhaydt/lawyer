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
                        <h1>{{ translate::translate('Carrier') }}</h1>
                        <p>{{ translate::translate('Reputation. Respect. Result.') }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    @livewire('home.carrier');
</div>
@endsection
