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
    <div id="app" class="bg-white">
        @include('layouts.user_nav_bar')
        @yield('content')
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
