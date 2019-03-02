<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('template/header')
        @yield('optionalHeader')
    </head>
    <body>
        @yield('section')
        @include('template/footer')
    <body>
</html>