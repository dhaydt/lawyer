@include('Home.components.partials._topbar')
<!-- header begin -->
<style>
    #wrapper header.transparent {
        background: #0000004d;
        margin-top: -5px;
    }

    #wrapper header.smaller.scroll-light {
        background: #ffffff;
        margin-top: 0;
        /* border-bottom: solid 1px #eeeeee; */
    }

    header #logo .logo,
    header #logo .logo-2 {
        max-height: 65px;
        width: auto;
    }

</style>
<header class="transparent scroll-light">
    <div class="dropdown position-absolute lang-dropdown d-none">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Lang
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="lang/id">ID</a></li>
            <li><a class="dropdown-item" href="lang/en">ENG</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img alt="" class="logo"
                                    src="{{ asset('storage/company'.'/'.$web_config['web_logo']) }}" />
                                <img alt="" class="logo-2"
                                    src="{{ asset('storage/company'.'/'.$web_config['web_logo']) }}" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="{{ route('home') }}" class="{{ $active == 'home' ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('about_us') }}" class="{{ $active == 'about_us' ? 'active' : '' }}">About Us</a></li>
                            <li><a href="{{ route('organization') }}" class="{{ $active == 'organization' ? 'active' : '' }}">Company & Organization</a></li>
                            <li><a href="{{ route('posting') }}" class="{{ $active == 'content' ? 'active' : '' }}">Posts & Journals</a>
                            <li><a href="javascript:" class="{{ $active == 'services' || $active == 'consultation' ? 'active' : '' }}">Services</a>
                                <ul>
                                    <li><a href="{{ route('services') }}">Our legal services</a></li>
                                    <li><a href="{{ route('consultation') }}">Direct Consultation</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('carrier') }}" class="{{ $active == 'carrier' ? 'active' : '' }}">Carrier</a>
                            <li><a href="#" class="{{ $active == 'information' || $active == 'contact_us' ? 'active' : ($active == 'gallery' ? 'active' : '') }}">Other</a>
                                <ul>
                                    <li><a href="{{ route('information') }}">Other Infromation</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                </ul>
                            </li>

                            </li>
                        </ul>
                        <!-- mainmenu close -->
                    </div>
                    <div class="de-flex-col">
                        {{-- <div class="h-phone md-hide"><span>Need&nbsp;Help?</span><i class="fa fa-phone"></i> 1 200 300 9000</div> --}}
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
