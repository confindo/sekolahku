<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('template/header')
        @yield('optionalHeader')
    </head>
    <body>
        @yield('section')
    <body>
</html>