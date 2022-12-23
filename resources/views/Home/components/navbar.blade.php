@include('Home.components.partials._topbar')
<!-- header begin -->
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
                            <a href="index.html">
                                <img alt="" class="logo" src="{{ asset('assets/images/logo-light.png') }}" />
                                <img alt="" class="logo-2" src="{{ asset('assets/images/logo.png') }}" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="javascript:" class="active">Home</a></li>
                            <li><a href="javascript:" class="">About Us</a></li>
                            <li><a href="javascript:" class="">Company & Organization</a></li>
                            <li><a href="javascript:">Services</a>
                                <ul>
                                    <li><a href="javascript:">Our legal services</a></li>
                                    <li><a href="javascript:">Direct Consultation</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Carrier</a>
                            <li><a href="#">Posts & Journals</a>
                            <li><a href="javascript:">Other</a>
                                <ul>
                                    <li><a href="accordion.html">Other Infromation</a></li>
                                    <li><a href="alerts.html">Contact Us</a></li>
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
