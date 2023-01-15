@extends('layout.frontend.app')
@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/background/subheader.jpg') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Posts & Journals</h1>
                    <p>Reputation. Respect. Result.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
@livewire('home.content')

@endsection
