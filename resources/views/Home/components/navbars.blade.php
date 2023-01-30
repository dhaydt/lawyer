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
        max-height: 60px;
        width: auto;
    }

</style>
<header class="transparent scroll-light">
    <div class="container" style="max-width:1350px;">
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
                            <li><a href="{{ route('home') }}" class="text-capitalize {{ $active == 'home' ? 'active' : '' }}">{{ translate::translate('Home') }}</a></li>
                            <li><a href="{{ route('about_us') }}" class="{{ $active == 'about_us' ? 'active' : '' }}">{{ translate::translate('About Us') }}</a></li>
                            <li><a href="{{ route('organization') }}" class="text-capitalize {{ $active == 'organization' ? 'active' : '' }}">{{ translate::translate('Company & Organization') }}</a></li>
                            <li><a href="{{ route('posting') }}" class="text-capitalize {{ $active == 'content' ? 'active' : '' }}">{{ translate::translate('Posts & Journals') }}</a>
                            <li><a href="javascript:" class="text-capitalize {{ $active == 'services' || $active == 'consultation' ? 'active' : '' }}">{{ translate::translate('Services') }}</a>
                                <ul>
                                    <li><a href="text-capitalize {{ route('services') }}">{{ translate::translate('Our legal services') }}</a></li>
                                    <li><a href="text-capitalize {{ route('consultation') }}">{{ translate::translate('Direct Consultation') }}</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('carrier') }}" class="text-capitalize {{ $active == 'carrier' ? 'active' : '' }}">{{ translate::translate('career') }}</a>
                            <li><a href="#" class="text-capitalize {{ $active == 'information' || $active == 'contact_us' ? 'active' : ($active == 'gallery' ? 'active' : '') }}">{{ translate::translate('Other') }}</a>
                                <ul>
                                    <li><a href="{{ route('information') }}" class="text-capitalize">{{ translate::translate('Other Infromation') }}</a></li>
                                    <li><a href="{{ route('gallery') }}" class="text-capitalize">{{ translate::translate('Gallery') }}</a></li>
                                    <li><a href="{{ route('contact_us') }}" class="text-capitalize">{{ translate::translate('Contact Us') }}</a></li>
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
