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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
                    <i class="bi bi-lamp-fill me-1 fs-5"></i>
                    LMS Library
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class=" container-fluid">
            <div class="row min-vh-100 w-100">
                <div class="col-2 bg-light border-end p-0">
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

                    <a href="{{ route('category.index') }}" class="text-decoration-none">
                        <div
                            class="sidebar_item {{ request()->is('category') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-blockquote-right me-2"></i>
                            <p class="mb-0 text-uppercase">Categories</p>
                        </div>
                    </a>
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <div class="sidebar_item d-flex align-items-center p-2 mx-3 mb-2 rounded">
                            <i class="bi bi-book me-2"></i>
                            <p class="mb-0 text-uppercase">Books</p>
                        </div>
                    </a>

                </div>
                <div class="col-10 py-3">
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
</body>

</html>
