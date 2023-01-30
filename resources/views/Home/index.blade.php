@extends('layout.frontend.app')
@section('content')

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        @include('Home.components.banner')
        @include('Home.components.jarralax')
        @include('Home.components.services')
        @include('Home.components.experience')
        {{-- @include('Home.components.counter') --}}
        {{-- @include('Home.components.testimoni') --}}
        <section class="pt40 pb40 bg-color text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                        <h3 class="no-bottom">{{ translate::translate('Now! Get a Free Consultation for Your Case.') }}</h3>
                    </div>
                    <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                        <a href="https://wa.me/+62{{ (int)$web_config['wa'] }}?text=saya%20ingin%20konsultasi%20tentang%20" class="btn-custom btn-black light">{{ translate::translate('Direct Consultation') }}</a>
                    </div>
                </div>
            </div>
        </section>
        @include('Home.components.latest')
    </div>
    <!-- content close -->
{{-- @include('Home.components.floating') --}}
@endsection
