@extends('layout.frontend.app')
@section('content')
<div id="wrapper">
    @include('Home.components.navbar')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        @include('Home.components.banner')
        @include('Home.components.jarralax')
        @include('Home.components.klinik')
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
    <a href="#" id="back-to-top"></a>
    <!-- footer begin -->
    @include('Home.components.footer')
    <!-- footer close -->
    <div id="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
{{-- @include('Home.components.floating') --}}
<div id="purchase-now">
    <a href="https://themeforest.net/cart/add_items?ref=designesia&amp;item_ids=29485331"><span>$</span>14</a>
    <div class="pn-hover">Buy Now</div>
</div>
@endsection
