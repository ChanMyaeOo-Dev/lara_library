@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-12 px-0">
                <div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="mb-0 fs-4 text-black fw-semibold">
                            Project Books
                        </p>
                    </div>
                    <div class="book_grid_container">
                        @foreach ($books as $book)
                            <a href="{{ route('project-book', $book->slug) }}">
                                <div class="book-container border border-1" style="height: 300px;">
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
                            </a>
                        @endforeach
                    </div>
                    <div class=" mt-4">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
