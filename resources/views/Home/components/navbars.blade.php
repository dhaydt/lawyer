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
    <div class="dropdown position-absolute lang-dropdown">
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
                            <li><a href="{{ route('home') }}" class="active">Home</a></li>
                            <li><a href="{{ route('about_us') }}" class="">About Us</a></li>
                            <li><a href="{{ route('organization') }}" class="">Company & Organization</a></li>
                            <li><a href="{{ route('posting') }}">Posts & Journals</a>
                            <li><a href="javascript:">Services</a>
                                <ul>
                                    <li><a href="javascript:">Our legal services</a></li>
                                    <li><a href="javascript:">Direct Consultation</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Carrier</a>
                            <li><a href="#">Other</a>
                                <ul>
                                    <li><a href="#">Other Infromation</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </li>

                            </li>
                        </ul>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
