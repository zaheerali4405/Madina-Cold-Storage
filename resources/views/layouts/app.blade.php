<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        
        <!-- Header -->
        <div id="kt_header" class="header align-items-stretch">
            <div class="container-xxl d-flex align-items-stretch justify-content-between">

                <!--Logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                    <a href="/">MADINA COLD STORAGE</a>
                </div>

                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

                    <!-- Navbar -->
                    <div class="d-flex align-items-stretch" id="kt_header_nav">
                        <div class="header-menu align-items-stretch" data-kt-drawer="true"
                            data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                            data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                id="#kt_header_menu" data-kt-menu="true">

                                <div class="menu-item">
                                    <a class="menu-link py-3" href="/">
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>

                                <div class="menu-item menu-lg-down-accordion" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Customer</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Components</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Changelog</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion me-lg-1">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Products</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Components</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Changelog</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion me-lg-1">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Orders</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Components</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Changelog</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion me-lg-1">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Payments</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Components</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Changelog</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                    class="menu-item menu-lg-down-accordion me-lg-1">
                                    <span class="menu-link py-3">
                                        <span class="menu-title">Expenses</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Components</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link py-3" href="/">
                                                <span class="menu-title">Changelog</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User -->
                    <div class="d-flex align-items-stretch flex-shrink-0">
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            @guest
                            @if (Route::has('login'))
                            <div class="d-flex align-items-center mx-3">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @endif

                            @if (Route::has('register'))
                            <div class="d-flex align-items-center">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>    
                            @endif
                            @else
                            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    User
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-200px"
                                    data-kt-menu="true">
                                    <div class="menu-item">
                                        <div class="menu-content d-flex align-items-center">
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
                                                <a href="#"
                                                    class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item">
                                        <a href="/" class="menu-link">Account Settings</a>
                                    </div>

                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                            </div>
                            @endguest

                            

                            <!--begin::Heaeder menu toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                    id="kt_header_menu_mobile_toggle">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>

</html>