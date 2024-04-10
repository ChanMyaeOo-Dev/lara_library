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
    <div id="app" class="bg-light">
        @include('layouts.user_nav_bar')
        @yield('content')
    </div>

    <div class="w-100 bg-white shadow pb-3 pt-2 pt-md-4">
        <div class="container">
            <div class="row border-bottom pb-3 d-none d-md-flex">
                <div class="col-4">
                    <p class="text-dark fw-semibold fs-6 mb-3 border-bottom pb-2">Contact Us</p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telephone-fill me-1"></i>
                        09-779866151
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-envelope-fill me-1"></i>
                        mmlibrary@gmail.com.mm
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telegram me-1"></i>
                        @mm-library-phat-kyi
                    </p>
                </div>

                <div class="col-4">
                    <p class="text-dark fw-semibold fs-6 mb-3 border-bottom pb-2">Contact Us</p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telephone-fill me-1"></i>
                        09-779866151
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-envelope-fill me-1"></i>
                        mmlibrary@gmail.com.mm
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telegram me-1"></i>
                        @mm-library-phat-kyi
                    </p>
                </div>

                <div class="col-4">
                    <p class="text-dark fw-semibold fs-6 mb-3 border-bottom pb-2">Contact Us</p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telephone-fill me-1"></i>
                        09-779866151
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-envelope-fill me-1"></i>
                        mmlibrary@gmail.com.mm
                    </p>
                    <p class="text-dark fw-normal fs-6 mb-1">
                        <i class="bi bi-telegram me-1"></i>
                        @mm-library-phat-kyi
                    </p>
                </div>

            </div>
            <div class=" d-flex align-items-center justify-content-center mt-3">
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
