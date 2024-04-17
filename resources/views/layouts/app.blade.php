<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> --}}


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app_client.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="bg-light">
        @include('layouts.user_nav_bar')
        @yield('content')
    </div>

    <div class="w-100 bg-white shadow py-2 py-md-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center mt-3">
                <div class="d-flex align-items-center me-2">
                    <a href="{{ route('/') }}" class="btn btn-light me-1">
                        <i class="text-dark bi bi-github"></i>
                    </a>
                    <a href="{{ route('/') }}" class="btn btn-light me-1">
                        <i class="text-dark bi bi-facebook"></i>
                    </a>
                    <a href="{{ route('/') }}" class="btn btn-light me-1">
                        <i class="text-dark bi bi-google"></i>
                    </a>
                </div>
                <p class="text-center text-dark mb-0">@2024</p>
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
