<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        @include('template/header')
        @yield('optionalHeader')
    </head>
    <body>
        @yield('section')
    <body>
</html>