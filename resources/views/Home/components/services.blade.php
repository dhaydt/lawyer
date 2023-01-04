<section class="no-top klinik_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2 class="text-capitalize">scope of legal services</h2>
                    <div class="small-border"></div>
                </div>
            </div>
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 mb30">
                <div class="f-box f-icon-left f-icon-rounded">
                    <img src="{{ asset('storage/services'.'/'.$service->logo) }}" alt="" class="icofont-group bg-color text-light">
                    <div class="fb-text">
                        <h4>{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<section data-bgcolor="#f2f2f2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title">Experiences</span><br>
                <h2>
                    Why Choose Us?
                </h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">Our Attorneys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Our Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                            role="tab" aria-controls="pills-contact" aria-selected="false">Our Firm</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis
                            anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud
                            exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa
                            eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
                            minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation
                            irure Lorem incididunt nostrud.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex.
                            Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex
                            eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna
                            Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit
                            adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                            aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit
                            laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore
                            incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud.
                            Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure
                            officia elit do ipsum ullamco Lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jarallax image-container col-md-6 pull-right">
        <img src="{{ asset('assets/images/background/10.jpg') }}" class="jarallax-img" alt="">
    </div>
</section>
