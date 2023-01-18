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
                    <h1>About Us</h1>
                    <p>Reputation. Respect. Result.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
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
                <p>{{ $c[0]['description'] }}</p>
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
    <div class="image-container col-md-6 pos-right" data-bgimage="url({{ asset('/'.$c[0]['image']) }}) center"></div>
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
                <p>{{ $c[1]['description'] }}</p>
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
    <div class="image-container col-md-6" data-bgimage="url({{ asset('/'.$c[1]['image']) }}) center"></div>
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
