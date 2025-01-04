<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    .rotate-video {
        width: 100%; /* Adjust width to fit your layout */
        transform: rotate(90deg); /* Rotates the video 90 degrees */
        transform-origin: center; /* Sets the rotation axis to the center of the video */
    }
    /* .nav-link.active {

    } */
</style>
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg border border-bottom">
        <div class="container">
            <a class="navbar-brand mx-5 fs-3 text-dark fw-bold" href="{{ route('welcome') }}">
                Madina Cold Storage
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item p-2 fw-bold">
                        <a class="nav-link {{ Route::currentRouteName() == 'welcome' ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item p-2 fw-bold">
                        <a class="nav-link {{ Route::currentRouteName() == 'our_services' ? 'active' : '' }}" href="{{ route('our_services') }}">Our Services</a>
                    </li>
                    <li class="nav-item p-2 fw-bold">
                        <a class="nav-link {{ Route::currentRouteName() == 'about_us' ? 'active' : '' }}" href="{{ route('about_us') }}">About Us</a>
                    </li>
                    <li class="nav-item p-2 fw-bold">
                        <a class="nav-link {{ Route::currentRouteName() == 'our_gallery' ? 'active' : '' }}" href="{{ route('our_gallery') }}">Our Gallery</a>
                    </li>
                    <li class="nav-item p-2 fw-bold">
                        <a class="nav-link {{ Route::currentRouteName() == 'contact_us' ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact Us</a>
                    </li>
                </ul>
                <div>
                    <a class="btn btn-primary py-2 px-5" href="{{ route('contact_us') }}">GET A QUOTE</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer text-center text-muted  fw-bold py-3 border-top">
        @if (Route::has('login'))
        <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
        @endif
        @if (Route::has('register'))
        <a class="text-decoration-none text-muted" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
         - Copyrights &copy; Madina Cold Storage - 2024 
    </div>
</body>

</html>