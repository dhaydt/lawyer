<section data-bgcolor="#f2f2f2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title">{{ translate::translate('Experiences') }}</span><br>
                <h2>
                    {{ translate::translate('Why Choose Us?') }}
                </h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">{{ translate::translate('Our Story') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">{{ translate::translate('Our Expertise') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                            role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                    </li> --}}
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <p>{{ translate::translate($web_config['about_us']) }}</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <p>{{ translate::translate($web_config['expertise']) }}</p>
                    </div>
                    {{-- <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                            aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit
                            laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore
                            incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud.
                            Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure
                            officia elit do ipsum ullamco Lorem.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="jarallax image-container col-md-6 pull-right">
        <img src="{{ asset('/'.$web_config['about_image']) }}" class="jarallax-img" alt="amaradvokat">
    </div>
</section>
