<section class="no-top klinik_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="text-capitalize"><a href="{{ route('services') }}">{{ translate::translate('scope of legal services') }}</a></h2>
                    <div class="small-border"></div>
                </div>
            </div>
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 mb30">
                <div class="f-box f-icon-left f-icon-rounded">
                    <img src="{{ asset('storage/services'.'/'.$service->logo) }}" alt="amaradvokat" class="icofont-group bg-color text-light">
                    <div class="fb-text">
                        <h4>{{ translate::translate($service->title) }}</h4>
                        <p>{{ translate::translate($service->description) }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

