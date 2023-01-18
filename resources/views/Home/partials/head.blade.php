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
    .post-image{
            width: 100%;
            height: 247px;
            display: flex;
            justify-content: center;
        }
        .post-image img{
            height: 100%;
            width: auto;
            max-height: 247px;
        }
        ul.pagination li span, ul.pagination li button{
            font-size: 12px;
            color: rgb(105, 105, 105);
            border: solid 1px #eee;
            /* border-right: none; */
            background: none;
            padding: 15px 20px 15px 20px;
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }
        .pagination .page-item.active span{
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .pagination .page-item.disabled span{
            color: rgb(180, 180, 180);
            pointer-events: none;
        }
</style>
@stack('css')
@livewireStyles

