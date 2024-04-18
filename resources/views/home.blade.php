@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-9 px-0">

                <div class="container mb-4 px-0">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($banners as $key => $slider)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"
                                    aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $key }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner rounded">
                            @foreach ($banners as $key => $slider)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <a href="{{ route('banner_detail', $slider->id) }}" class="">
                                        <img src="{{ asset('Storage/' . $slider->image) }}" class="d-block w-100 rounded"
                                            alt="{{ $slider->description }}">
                                    </a>
                                </div>
                            @endforeach
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
                </div>

                {{-- Recommand --}}
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <p class="mb-0 fs-5 text-black fw-semibold">
                        Editor Choices
                    </p>
                    <a href="{{ route('books', 'editor-choices') }}" class=" nav-link ">
                        See All
                        <i class="bi bi-chevron-right ms-1 small"></i>
                    </a>
                </div>

                <div class="mb-4 recommand_box d-flex align-baseline">
                    <div class="recommand_container w-100 d-flex align-items-end justify-content-between gap-3">
                        @foreach ($editor_choices as $editor_choice)
                            <a href="{{ route('book', $editor_choice->book->slug) }}"
                                class="text-decoration-none text-dark w-100">
                                <div class="recommand_card w-100 mb-2 rounded">
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/' . $editor_choice->book->book_image) }}"
                                            class="recommand_image rounded shadow">
                                        <div class="recommand_text_box">
                                            <p class="mb-2 text-black fs-5" style="line-height: 1.2">
                                                {{ Str::words($editor_choice->book->title, 3, '...') }}
                                            </p>
                                            <span class="badge rounded-pill text-bg-dark">
                                                {{ Str::words($editor_choice->book->category->title, 2, '...') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Latest Arrival --}}
                <div class="mb-4">
                    <p class="mb-3 fs-5 text-black fw-semibold">
                        Latest Arrival
                    </p>
                    <div class="book_grid_container">
                        @foreach ($latest_arrival as $book)
                            <a href="{{ route('book', $book->slug) }}" class="text-decoration-none text-dark">
                                <div class="card-container border border-2 mb-2">
                                    <div class="animate_card">
                                        <div class="img-content">
                                            <img src="{{ asset('storage/' . $book->book_image) }}" class="">
                                        </div>
                                        <div class="content">
                                            <p class="fw-bold fs-5 mb-2">{{ Str::words($book->title, 3, '...') }}</p>
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ Str::words($book->author, 2, '...') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 text-nowrap">{{ Str::substr($book->title, 0, 14) . '...' }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>

                {{-- Project Books --}}
                <div class="mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="mb-0 fs-5 text-black fw-semibold">
                            Project Books
                        </p>
                        <a href="{{ route('project-books') }}" class=" nav-link ">
                            See All
                            <i class="bi bi-chevron-right ms-1 small"></i>
                        </a>
                    </div>
                    <div class="book_grid_container">
                        @foreach ($project_books as $book)
                            <a href="{{ route('project-book', $book->slug) }}" class="text-decoration-none text-dark">
                                <div class="card-container border border-2 mb-2">
                                    <div class="animate_card">
                                        <div class="img-content">
                                            <img src="{{ asset('storage/' . $book->cover_image) }}" class="">
                                        </div>
                                        <div class="content">
                                            <p class="fw-bold fs-5 mb-2">{{ Str::words($book->title, 3, '...') }}</p>
                                            <span
                                                class="badge rounded-pill text-bg-primary">{{ Str::limit($book->category, 10, '...') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 text-nowrap">{{ Str::substr($book->title, 0, 14) . '...' }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 px-0 ps-md-4 mt-3 mt-md-0">
                @auth
                    <div class="card bg-white p-2 mb-3">
                        <div class=" card-body">
                            {{-- Reading List --}}
                            <div class="mb-3 px-1 profile_card_item">
                                <a href="{{ route('student.show', Auth::user()->roll_number) }}" class="text-decoration-none">
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
                                <a href="{{ route('wishlists.index') }}" class="text-decoration-none">
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
                            <div class="mb-4 px-1 profile_card_item">
                                <a href="{{ route('bookmarks.index') }}" class="text-decoration-none">
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

                            <a href="{{ route('student.show', Auth::user()->roll_number) }}" class="btn btn-primary w-100">
                                <i class="bi bi-person-circle me-1"></i>
                                Profile
                            </a>
                        </div>
                    </div>
                @endauth

                <p class="mb-3 fs-5 text-black fw-semibold">
                    Filter
                </p>

                <div class="card bg-white p-2 mb-3">
                    <div class="card-body">
                        <div class="mb-1 px-1 profile_card_item">
                            <a href="{{ route('books', 'all') }}" class="text-decoration-none">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 text-black fw-bold">Categories</p>
                                    <p class="mb-0 text-dark">
                                        <span class="badge rounded-pill text-bg-primary">{{ count($categories) }}</span>
                                        <i class="bi bi-chevron-right small ms-1"></i>
                                    </p>
                                </div>
                            </a>
                        </div>
                        @foreach ($categories as $category)
                            <div class="mt-3 px-1 profile_card_item">
                                <a href="{{ route('books', $category->slug) }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-app-indicator me-1"></i>
                                            {{ $category->title }}
                                        </p>
                                        <i class="bi bi-chevron-right text-dark small"></i>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card bg-white p-2 mb-3">
                    <div class="card-body">
                        <p class="mb-1 px-1 text-black fw-bold">Popular</p>
                        @foreach ($popular_books as $popular_book)
                            <div class="mt-3 px-1 profile_card_item">
                                <a href="{{ route('book', $popular_book->slug) }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $popular_book->book_image) }}"
                                                class="object-fit-cover rounded me-2" style="width: 35px;height:35px;">
                                            <p class="mb-0 text-dark">
                                                {{ Str::words($popular_book->title, 2, '...') }}
                                            </p>
                                        </div>
                                        <i class="bi bi-chevron-right text-dark small"></i>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
