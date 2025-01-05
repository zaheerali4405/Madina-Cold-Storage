<!-- Header -->
<div class="header container-fluid d-flex align-items-center border" style="min-height: 60px;">

    <!--Logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15 ms-5">
        <a href="{{ route('welcome') }}" class="text-decoration-none fs-3 text-dark fw-bold">MADINA COLD STORAGE</a>
    </div>

    @guest

    @if (Route::has('login'))
    <!-- <div class="d-flex align-items-center mx-3">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </div> -->
    @endif
    @else
    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

        <!-- Navbar -->
        <div class="d-flex align-items-stretch">
            <div class="menu menu-lg-rounded menu-lg-row menu-state-bg menu-title-gray-800 menu-state-title-primary fw-bold align-items-stretch">

                <div class="menu-item">
                    <a href="{{ route('home') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'home') ? 'active' : '' }}">Dashboard</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('containers') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'container') ? 'active' : '' }}">Containers</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('products') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'product') ? 'active' : '' }}">Products</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('customers') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'customer') ? 'active' : '' }}">Customers</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('expenses') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'expense') ? 'active' : '' }}">Expenses</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('orders') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'order') ? 'active' : '' }}">Orders</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('dispatches') }}"
                        class="menu-link px-4 fs-5 {{ Str::contains(Route::currentRouteName(), 'dispatch') ? 'active' : '' }}">Dispatch</a>
                </div>
            </div>
        </div>

        <!-- User -->
        <div class="d-flex align-items-stretch flex-shrink-0">
            <div class="d-flex align-items-stretch flex-shrink-0">
                <div class="d-flex align-items-center mx-lg-4" id="kt_header_user_menu_toggle">
                    <div class="fw-bolder fs-5 cursor-pointer symbol symbol-30px symbol-md-40px"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-3 fs-6 w-200px"
                        data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content d-flex align-items-center">
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder fs-5">{{ Auth::user()->name }}</div>
                                    <div class="fw-bold text-muted fs-7">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-1"></div>
                        <div class="menu-item">
                            <a href="{{ route('change_password') }}" class="menu-link fs-6 text-decoration-none">Change
                                Password</a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link fs-6 text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endguest
</div>