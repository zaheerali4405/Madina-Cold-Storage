<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/plugins.bundle.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <div class="pt-5">
        @yield('content')
    </div>

</html>