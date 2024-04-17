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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('layouts.nav_bar')
        <div class="container-fluid p-0">
            <div class="row min-vh-100 w-100">
                @include('layouts.side_bar')
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
