<nav id="top_nav_bar" class="navbar navbar-expand-md navbar-light bg-white border-bottom fixed-top">
    <div class="container">
        <div class="d-flex align-items-center">
            <a class="navbar-brand fw-bold text-primary me-3" href="{{ url('/') }}">
                <img src="{{ asset('storage/logo_landscape.png') }}" class="nav_logo">
            </a>
            <!-- Button trigger modal -->
            <button type="button" class="d-none d-md-block bg-white border border-1 text-start text-dark rounded"
                id="search_custom_btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="bi bi-search me-1"></i>
                Search
            </button>
        </div>

        <div class="d-flex align-items-center">
            <button type="button"
                class="navbar-toggler d-block d-md-none me-2 d-flex align-items-center justify-content-center"
                data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="bi bi-search text-dark"></i>
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <i class="bi bi-list text-dark"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pe-md-3 {{ request()->routeIs('books*') ? 'nav_active' : '' }}">
                    <a class="nav-link" href="{{ route('books', 'all') }}">
                        Text Books
                    </a>
                </li>
                <li class="nav-item pe-md-3 {{ request()->routeIs('project-books*') ? 'nav_active' : '' }}">
                    <a class="nav-link" href="{{ route('project-books') }}">
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

<!--Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="searchModalLabel">Search Books</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" style="height: 650px;">
                <div class="dropdown">
                    <div class="border border-1 rounded d-flex align-items-center bg-white px-3 py-2 mb-3">
                        <i class="bi bi-search me-2 text-black-50"></i>
                        <input type="text" class="search_input w-100 bg-transparent border-0 rounded p-1 text-dark"
                            id="searchInput" placeholder="Type to search for books">
                    </div>
                    <div class="dropdown-menu custom-dropdown-menu dropdown-menu-right p-3 bg-white mb-4"
                        id="suggestions" aria-labelledby="searchInput">
                        <!-- Search results -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const suggestions = document.getElementById('suggestions');

        searchInput.addEventListener('input', function(event) {
            const inputValue = event.target.value.trim();

            if (inputValue === '') {
                suggestions.innerHTML = '';
                suggestions.classList.remove('show');
                return;
            }

            axios.get(`/books/search?query=${inputValue}`)
                .then(response => {
                    const books = response.data;
                    // Clear previous suggestions
                    suggestions.innerHTML = '';
                    books.forEach(book => {
                        const a = document.createElement('a');
                        var baseUrl = "{{ route('book', '') }}";
                        if (book.author == null) {
                            img_link = '{{ asset('storage/') }}' + '/' + book.cover_image;
                            baseUrl = "{{ route('project-book', '') }}";
                        }
                        a.href = baseUrl + '/' + book.slug;
                        a.classList.add('text-decoration-none', 'text-dark');

                        const div = document.createElement('div');
                        div.classList.add('d-flex', 'align-items-center', 'gap-2', 'mb-3');

                        const img = document.createElement('img');
                        img.src = '{{ asset('storage/') }}' + '/' + (book.author ? book
                            .book_image : book.cover_image);
                        img.classList.add('search_book_img', 'rounded');

                        const titleSpan = document.createElement('span');
                        titleSpan.textContent = book.title;
                        titleSpan.classList.add('text-dark');

                        div.appendChild(img);
                        div.appendChild(titleSpan);
                        a.appendChild(div);
                        suggestions.appendChild(a);
                    });

                    suggestions.classList.add('show');
                })
                .catch(error => {
                    console.error('Error fetching books:', error);
                });
        });

        // Hide suggestions when clicking outside the dropdown menu
        document.addEventListener('click', function(event) {
            if (!event.target.matches('.dropdown-toggle')) {
                suggestions.classList.remove('show');
            }
        });
    });
</script>
