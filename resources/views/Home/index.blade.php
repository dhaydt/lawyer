@extends('layout.frontend.app')
@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        @include('Home.components.banner')
        @include('Home.components.jarralax')
        @include('Home.components.services')
        @include('Home.components.counter')
        @include('Home.components.testimoni')
        @include('Home.components.latest')
        <section class="pt40 pb40 bg-color text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                        <h3 class="no-bottom">Now! Get a Free Consultation for Your Case.</h3>
                    </div>
                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                        <a href="#" class="btn-custom btn-black light">Make Appointment</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->
{{-- @include('Home.components.floating') --}}
@endsection
