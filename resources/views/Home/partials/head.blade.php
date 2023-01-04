<link id="bootstrap" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link id="bootstrap-grid" href="{{ asset('assets/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
<link id="bootstrap-reboot" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
<!-- color scheme -->
<link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
@php($icon = \App\CPU\Helpers::get_config('web_icon'))
<link rel="shortcut icon" href="{{ asset('storage/company'.'/'.$icon) }}" />

<link rel="stylesheet" href="{{ asset('assets_metronic/owl/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets_metronic/owl/assets/owl.theme.default.min.css') }}">

<style>
    :root {
        --primary-color-rgb: 234, 166, 54;
        --primary-color: {{ $web_config['bg_color'] }};
    }

    .f-box.f-icon-rounded img {
        display: block;
        text-align: center;
        padding: 22px;
        width: 80px;
        height: 80px;
        border-radius: 3px;
    }
    .f-box.f-icon-left img {
        margin-right: 30px;
    }

</style>
@stack('css')
