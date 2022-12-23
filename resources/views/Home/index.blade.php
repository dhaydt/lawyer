<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @include('Home.partials.head')
        <style>

        </style>
    </head>
    <body>

        @include('Home.partials.body')
        @include('Home.partials.footer')
    </body>
</html>

