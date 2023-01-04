@extends('layout.frontend.app')
@section('content')
<section id="subheader" class="text-white" data-bgcolor="#111111">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="spacer-single"></div>
                    <h1>Company & Organization</h1>
                    <p>Reputation. Respect. Result.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->
<section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <span class="p-title">Managing Partner</span><br>
                <h2>
                    Fynley Wilkinson
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
    <div class="image-container col-md-6 pos-right" data-bgimage="url({{ asset('assets/images/background/13.jpg') }}) center"></div>
</section>
<section data-bgcolor="#111111" class="text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-md-7">
                <span class="p-title">Senior Partner</span><br>
                <h2>
                    Sasha Welsh
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
    <div class="image-container col-md-6" data-bgimage="url({{ asset('assets/images/background/4.jpg') }}) center"></div>
</section>
<section data-bgcolor="#111111" class="text-light">
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
</section>
@endsection
