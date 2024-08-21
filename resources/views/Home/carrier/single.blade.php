@extends('layout.frontend.app')
@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/background/subheader.jpg') }}" class="jarallax-img" alt="amaradvokat">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-capitalize">{{ $judul }}</h1>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
@livewire('home.apply', ['data'=> $data])
@endsection
