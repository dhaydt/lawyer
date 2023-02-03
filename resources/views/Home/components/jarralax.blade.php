<section class="no-top relative text-light jarralax_page">
    <div class="container">
        <div class="row bg-color no-gutters mt-100">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.1)" style="height: 400px;">
                    <img class="icofont-letter mb-2" src="{{ asset('storage/company/'.$web_config['slider_content_1']->icon) }}" style="height: 50px"/>
                    <div class="text">
                        <h4>{{$web_config['slider_content_1']->title}}</h4>
                        {{$web_config['slider_content_1']->content}}
                    </div>
                    <i class="wm icofont-letter"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.2)" style="height: 400px;">
                    <img class="icofont-letter mb-2" src="{{ asset('storage/company/'.$web_config['slider_content_2']->icon) }}" style="height: 50px"/>
                    <div class="text">
                        <h4>{{$web_config['slider_content_2']->title}}</h4>
                        {{$web_config['slider_content_2']->content}}
                    </div>
                    <i class="wm icofont-investigation"></i>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.3)" style="height: 400px;">
                    <img class="icofont-letter mb-2" src="{{ asset('storage/company/'.$web_config['slider_content_3']->icon) }}" style="height: 50px"/>
                    <div class="text">
                        <h4>{{$web_config['slider_content_3']->title}}</h4>
                        {{$web_config['slider_content_3']->content}}
                    </div>
                    <i class="wm icofont-hand-power"></i>
                </div>
            </div>
        </div>
    </div>
</section>
