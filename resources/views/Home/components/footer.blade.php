<style>
    .tiktok{
        background: var(--primary-color);
        padding: 5px 8px;
        transition: .2s;
        border-radius: 4px;
    }
    .tiktok img{
        height: 16px;
    }
    .tiktok:hover{
        border: 1px solid #fff;
    }
</style>
<footer class="footer_page">

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <a href="index.html"><img alt="" class="img-fluid mb20" src="images/logo-light.png"></a>
                    <address class="s1">
                        <span><i class="id-color fa fa-map-marker fa-lg text-capitalize"></i>{{ $web_config['address'] }}</span>
                        <span><i class="id-color fa fa-phone fa-lg"></i>+62{{ (int)$web_config['phone'] }}</span>
                        <span><i class="id-color fa fa-fax fa-lg"></i>{{ $web_config['fax'] }}</span>
                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><ahref="mailto:contact@example.com">{{ $web_config['email'] }}</ahref=></span>
                        <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="{{ asset('storage/company_profile'.'/'.$web_config['company_profile']) }}">{{ translate::translate('Download Company Profile') }}</a></span>
                    </address>
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="id-color mb20">{{ translate::translate('Legal Services') }}</h5>
                <ul class="ul-style-2">
                    @foreach ($web_config['services']->take(10) as $item)
                        <li>{{ translate::translate($item['title']) }}</li>
                    @endforeach
                    {{-- <li>Construction and Real Estate</li>
                    <li>Commercial Duspute Resolution</li>
                    <li>Employment</li>
                    <li>Banking and Finance</li> --}}
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h5 class="id-color">{{ translate::translate('Newsletter') }}</h5>
                    <p>{{ translate::translate('Signup for our newsletter to get the latest news, updates and special offers in your inbox.') }}
                    </p>
                    {{-- <form action="https://www.designesia.com/themes/justica/blank.php" class="row"
                        id="form_subscribe" method="post" name="form_subscribe">
                        <div class="col text-center">
                            <input class="form-control" id="name_1" name="name_1" placeholder="enter your email"
                                type="text" /> 
                                <a href="#" id="btn-submit"><i
                                    class="fa fa-long-arrow-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </form> --}}
                    <div class="spacer-10"></div>
                    <small>{{ translate::translate('Your email is safe with us. We don\'t spam.') }}</small>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            &copy; Copyright 2022

                        </div>
                        <div class="de-flex-col">
                            <div class="social-icons">
                                @if ($web_config['fb'] != '')
                                <a href="{{ $web_config['fb'] }}" target="_blank" data-bs-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a>
                                @endif
                                @if ($web_config['twitter'] != '')
                                <a href="{{ $web_config['twitter'] }}" target="_blank" data-bs-toggle="tooltip" title="Youtube"><i class="fa fa-youtube fa-lg"></i></a>
                                @endif
                                @if ($web_config['linkedin'] != '')
                                <a href="{{ $web_config['linkedin'] }}" target="_blank" data-bs-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin fa-lg"></i></a>
                                @endif
                                @if ($web_config['ig'] != '')
                                <a href="{{ $web_config['ig'] }}" target="_blank" data-bs-toggle="tooltip" title="Instagram"><i class="fa fa-instagram fa-lg"></i></a>
                                @endif
                                @if ($web_config['tiktok'] != '')
                                <a href="{{ $web_config['tiktok'] }}" class="tiktok" target="_blank" data-bs-toggle="tooltip" title="Tiktok"><img src="{{ asset('assets/images/tiktok.png') }}" class="fa-tiktok fa-lg" /></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
