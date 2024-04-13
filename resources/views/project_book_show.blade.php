@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
                    </ol>
                </nav>
                <div class="row mb-3">
                    <div class="card col-12 col-md-8 rounded-sm bg-white p-2">
                        <div class="card-body">
                            <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                                <img id="cover" src="{{ asset('storage/profile_background.jpg') }}"
                                    class="rounded object-fit-cover">
                                <img id="profile" src="{{ asset('storage/' . $book->cover_image) }}"
                                    class="rounded-4 object-fit-cover mx-auto" style="width:200px;height:200px;">
                            </div>
                            <p class="fs-4 mb-4 fw-bold text-center">{{ $book->title }}</p>

                            <div class="mb-3">
                                <label for="" class="mb-1">Category</label>
                                <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">
                                    {{ $book->category }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Description</label>
                                <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">
                                    {{ $book->description }}</p>
                            </div>

                            @auth
                                <a href="{{ $book->link }}" type="button" class="btn lg_btn p-2 btn-outline-primary w-100">
                                    <i class="bi bi-download me-1"></i>
                                    Download
                                </a>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" type="button" class="btn lg_btn p-2 btn-outline-primary w-100">
                                    <i class="bi bi-download me-1"></i>
                                    LogIn To Download
                                </a>
                            @endguest
                        </div>
                    </div>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0 col-12 col-md-4">
                        <div class="card rounded-sm bg-white p-2 h-100">
                            <div class="card-body">
                                <p class="mb-1 px-1 text-black fw-bold">Related Books</p>
                                @foreach ($related_books as $related_book)
                                    <div class="mt-3 px-1 profile_card_item">
                                        <a href="{{ route('project-book', $related_book->slug) }}"
                                            class="text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('storage/' . $related_book->cover_image) }}"
                                                        class="object-fit-cover rounded me-2"
                                                        style="width: 35px;height:35px;">
                                                    <p class="mb-0 text-dark">
                                                        {{ Str::words($related_book->title, 2, '...') }}
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
        </div>
    </div>
@endsection
