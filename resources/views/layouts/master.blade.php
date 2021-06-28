<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Matrix Server</title>
        @include('layouts.head')
        @yield('head')
    </head>
    <body>
        @yield('content')
    </body>
        @include('layouts.jslinks')
        @yield('jslinks')
</html>
