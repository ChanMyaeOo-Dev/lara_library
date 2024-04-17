@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-9 px-0">
                <div class="book_grid_container">
                    @foreach ($books as $book)
                        <a href="{{ route('book', $book->slug) }}" class="text-decoration-none text-dark">
                            <div class="card-container border border-2 mb-2" style="height: 300px;">
                                <div class="animate_card">
                                    <div class="img-content">
                                        <img src="{{ asset('storage/' . $book->book_image) }}" class="">
                                    </div>
                                    <div class="content">
                                        <p class="fw-bold fs-5 mb-2">{{ Str::words($book->title, 3, '...') }}</p>
                                        <span class="badge rounded-pill text-bg-primary">See More...</span>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-nowrap">{{ Str::substr($book->title, 0, 14) . '...' }}</p>
                        </a>
                    @endforeach
                </div>
                <div class=" mt-4">
                    {{ $books->links() }}
                </div>
            </div>
            <div class="col-12 col-md-3 px-0 ps-md-3">

                <div class="card bg-white p-2 mb-3">
                    <div class="card-body">
                        <form id="editorForm" method="GET">
                            <div class="form-check">
                                <input onchange="submitOrChangeAction()" class="form-check-input" type="checkbox"
                                    value="1" id="choices-check"
                                    {{ request()->slug === 'editor-choices' ? 'checked' : '' }}>
                                <label class="form-check-label" for="choices-check">
                                    Editor Choices
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-white p-2 mb-3 overflow-auto">
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
                            <div
                                class="mt-3 px-1 profile_card_item {{ request()->slug ? (request()->slug == $category->slug ? 'category_active' : '') : '' }}">
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
            </div>
        </div>
    </div>
    <script>
        function submitOrChangeAction() {
            var form = document.getElementById('editorForm');
            var checkbox = document.getElementById('choices-check');

            if (checkbox.checked) {
                form.action = "{{ route('books', 'editor-choices') }}";
                form.submit();
            } else {
                form.action = "{{ route('books', 'all') }}";
                form.submit();
            }
        }
    </script>
@endsection
