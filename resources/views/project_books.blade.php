@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-12 px-0">
                <div>
                    {{-- Recommand --}}
                    <div class="project_book_grid_container">
                        @foreach ($books as $book)
                            <a href="{{ route('project-book', $book->slug) }}" class="text-decoration-none text-dark col">
                                <div class="recommand_card w-100 rounded">
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/' . $book->cover_image) }}"
                                            class="recommand_image rounded shadow">
                                        <div class="recommand_text_box">
                                            <p class="mb-0 text-black fs-5" style="line-height: 1.2">
                                                {{ Str::words($book->title, 3, '...') }}
                                            </p>
                                            <p class="mb-0 fs-6 text-black-50 text-wrap">
                                                {{ 'by ' . Str::substr($book->description, 0, 30) . '...' }}
                                            </p>
                                            <span
                                                class="badge rounded-pill text-bg-dark">{{ Str::words($book->category, 2, '...') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{-- Pagination --}}
                    <div class=" mt-4">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
