<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Home.partials.meta')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amar Advokat</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11341882420">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11341882420');
    </script>

    @include('Home.partials.head')
</head>

<body>
    <div id="wrapper">
        @include('Home.components.navbars')
        @yield('content')
        @include('Home.partials.floating')
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        @include('Home.components.footer')
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    @include('Home.partials.footer')
</body>

</html>
