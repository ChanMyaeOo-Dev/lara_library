@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-9 px-0">
                <div class="dropdown mb-3">
                    <div class="border border-1 rounded d-flex align-items-center bg-white px-3 py-2 mb-2">
                        <i class="bi bi-search me-2 text-black-50"></i>
                        <input type="text" class="search_input w-100 bg-transparent border-0 rounded p-1 text-dark"
                            id="searchInput" placeholder="Type to search for books">
                    </div>
                    <div class="dropdown-menu custom-dropdown-menu dropdown-menu-right p-3 bg-white" id="suggestions"
                        aria-labelledby="searchInput">
                        <!-- Search results -->
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide mb-4">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item rounded active">
                            <img src="https://img.freepik.com/free-photo/wet-vietnam-mountain-flow-stream-rural_1417-1357.jpg?w=2000"
                                class="d-block w-100 rounded h-100 object-fit-cover" alt="...">
                        </div>
                        <div class="carousel-item rounded">
                            <img src="https://img.freepik.com/free-photo/asian-woman-wearing-vietnam-culture-traditional-strawberry-garden-doi-ang-khang-chiang-mai-thailand_335224-760.jpg?w=2000"
                                class="d-block w-100 rounded h-100 object-fit-cover" alt="...">
                        </div>
                        <div class="carousel-item rounded">
                            <img src="https://img.freepik.com/free-photo/landscape-railay-beach-sunrise-krabi-thailand_335224-1398.jpg?w=2000"
                                class="d-block w-100 rounded h-100 object-fit-cover" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- Latest Arrival --}}
                <div>
                    <h5 class="text-dark mb-3 fw-normal">
                        Latest Arrival
                    </h5>
                    <div class="book_grid_container">
                        @foreach ($books as $book)
                            <a href="{{ route('text-books.show', $book->slug) }}" class="h-100">
                                <div class="card-container border border-1">
                                    <div class="animate_card">
                                        <div class="img-content">
                                            <img src="{{ asset('storage/' . $book->book_image) }}" class="">
                                        </div>
                                        <div class="content">
                                            <p class="fw-bold fs-5 mb-2">{{ $book->title }}</p>
                                            <span class="badge rounded-pill text-bg-primary">{{ $book->author }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 px-0 ps-md-3">
                <div class="card bg-white p-2 mb-3">
                    <div class=" card-body">
                        @auth
                            {{-- <div class="d-flex align-items-center gap-3 mb-5">
                                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                    class="rounded-4 object-fit-cover" style="width:50px;height:50px;">
                                <div>
                                    <p class="mb-0 text-black fs-5">{{ Auth::user()->name }}</p>
                                    <p class="mb-0 text-dark fs-6">{{ Auth::user()->roll_number }}</p>
                                </div>
                            </div> --}}

                            {{-- Reading List --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-book me-1"></i>
                                            Reading List
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->userCurrentTransactions) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Wish List --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-heart me-1"></i>
                                            Wish List
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->wishlists) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Bookmark --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-bookmark me-1"></i>
                                            Bookmark
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->bookmarks) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Setting --}}
                            <div class="mb-4 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-gear me-1"></i>
                                            Setting
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <button class="btn btn-primary w-100">
                                <i class="bi bi-pencil-square me-1"></i>
                                Profile
                            </button>
                        @endauth
                    </div>
                </div>
                <div class="card bg-white p-2 mb-3">
                    <div class=" card-body">
                        @auth
                            <p class="mb-3 text-black fw-bold">Categories</p>
                            {{-- Reading List --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-book me-1"></i>
                                            Reading List
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->userCurrentTransactions) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Wish List --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-heart me-1"></i>
                                            Wish List
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->wishlists) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Bookmark --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-bookmark me-1"></i>
                                            Bookmark
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ count(Auth::user()->bookmarks) }}</span>
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            {{-- Setting --}}
                            <div class="mb-4 px-1 profile_card_item">
                                <a href="{{ route('text-books.index') }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-gear me-1"></i>
                                            Setting
                                        </p>
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-chevron-right small ms-1"></i>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <button class="btn btn-primary w-100">
                                <i class="bi bi-pencil-square me-1"></i>
                                Profile
                            </button>
                        @endauth
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
                            const div = document.createElement('div');
                            div.classList.add('d-flex', 'align-items-center', 'gap-2', 'mb-3');
                            const img = document.createElement('img');
                            const img_link = '{{ asset('storage/') }}' + '/' + book.book_image;
                            img.src = img_link;
                            img.classList.add('search_book_img', 'rounded');
                            const a = document.createElement('a');
                            a.href = 'http://localhost:8000/admin/books/' + book.slug;
                            a.textContent = book.title;
                            a.classList.add('text-decoration-none', 'text-dark');
                            div.appendChild(img);
                            div.appendChild(a);
                            suggestions.appendChild(div);
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
@endsection
