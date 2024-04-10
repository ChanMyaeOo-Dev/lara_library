<nav id="top_nav_bar" class="navbar navbar-expand-md navbar-light bg-white border-bottom fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
            <img src="{{ asset('storage/logo_landscape.png') }}" class="nav_logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <i class="bi bi-list text-dark"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pe-md-3">
                    <a class="nav-link" href="{{ route('login') }}">
                        Text Books
                    </a>
                </li>

                <li class="nav-item pe-md-3">
                    <a class="nav-link" href="{{ route('login') }}">
                        Project Books
                    </a>
                </li>

                <li class="nav-item pe-md-3">
                    <a class="nav-link" href="{{ route('login') }}">
                        Contact
                    </a>
                </li>

                <li class="nav-item pe-md-3 pb-2 pb-md-0 last_nav_item">
                    <a class="nav-link" href="{{ route('login') }}">
                        FAQs
                    </a>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('login') }}">
                                <i class="bi bi-person-circle me-1"></i>
                                {{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown my-3 my-md-0">
                        <div class=" d-flex align-items-center">
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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
