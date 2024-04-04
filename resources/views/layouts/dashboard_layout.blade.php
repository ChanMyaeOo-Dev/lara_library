<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav id="top_nav_bar" class="navbar navbar-expand-md navbar-light bg-white border-bottom fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                    <img src="{{ asset('storage/logo_landscape.png') }}" class="" style="width: 200px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item me-4 border-end pe-4">
                                <a href="{{ route('carts.index') }}" type="button"
                                    class="btn btn-light position-relative">
                                    <i class="bi bi-cart"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ $cartCount }}
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <div class=" d-flex align-items-center me-3">
                                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                        style="width: 40px;height:40px;"
                                        class="me-2 border border-2 rounded-circle object-fit-cover shadow-sm">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>{{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-0">
            <div class="row min-vh-100 w-100">
                <div id="side_bar" class="col-2 bg-white border-end ps-2 pe-1">
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <div class="sidebar_item d-flex align-items-center p-2 mx-3 mb-2 mt-3 rounded">
                            <i class="bi bi-house me-2"></i>
                            <p class="mb-0 text-uppercase">Dashboard</p>
                        </div>
                    </a>
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <div class="sidebar_item d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-calendar3-week me-2"></i>
                            <p class="mb-0 text-uppercase">Transistion</p>
                        </div>
                    </a>

                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <div class="sidebar_item d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-book me-2"></i>
                            <p class="mb-0 text-uppercase">Books</p>
                        </div>
                    </a>

                    <hr class="mx-4">

                    <p class="mb-3 text-secondary fs-6 mx-4">Library Management</p>

                    {{-- Category --}}
                    <a href="{{ route('category.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->routeIs('category*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-blockquote-right me-2"></i>
                            <p class="mb-0 text-uppercase">Categories</p>
                        </div>
                    </a>
                    {{-- Book --}}
                    <a href="{{ route('books.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->routeIs('books*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-book me-2"></i>
                            <p class="mb-0 text-uppercase">Books</p>
                        </div>
                    </a>
                    {{-- User --}}
                    <a href="{{ route('users.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->routeIs('users*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-people me-2"></i>
                            <p class="mb-0 text-uppercase">Users</p>
                        </div>
                    </a>
                    {{-- Transition --}}
                    <a href="{{ route('books.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->routeIs('transistions*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-router me-2"></i>
                            <p class="mb-0 text-uppercase">Transitions</p>
                        </div>
                    </a>

                    <hr class="mx-4">

                    <p class="mb-3 text-secondary fs-6 mx-4">Library Setting</p>

                    {{-- Setting --}}
                    <a href="{{ route('settings.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->routeIs('settings*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-gear me-2"></i>
                            <p class="mb-0 text-uppercase">Setting</p>
                        </div>
                    </a>



                </div>
                <div id="main_content" class="col-10 pb-4 mx-0 ps-3 pe-2">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <script type="module">
            showToast("{{ Session::get('message') }}");
        </script>
    @endif

    @if (session('error_message'))
        <script type="module">
            showError("{{ Session::get('error_message') }}");
        </script>
    @endif


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script type="module">
                showError("{{ $error }}");
            </script>
        @endforeach
    @endif

</body>

</html>
