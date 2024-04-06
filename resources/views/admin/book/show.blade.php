@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Book Details
        </h4>
    </div>

    <div class="d-flex gap-3 mb-3">
        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body">
                <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                    <img id="cover" src="{{ asset('storage/profile_background.jpg') }}"
                        class="rounded object-fit-cover">
                    <img id="profile" src="{{ asset('storage/' . $book->book_image) }}"
                        class="shadow-sm rounded-circle shadow object-fit-cover mx-auto" style="width:200px;height:200px;">
                </div>
                <p class="fs-4 mb-4 fw-bold text-center">{{ $book->title }}</p>

                <div class="mb-3">
                    <label for="" class="mb-1">Author</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->author }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Category</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->category->title }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Stock</label>
                    @if ($book->qty > 0)
                        <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">
                            {{ $book->qty . ' books available' }}
                        </p>
                    @else
                        <p class="fs-6 fw-normal bg-light text-danger border rounded px-3 py-2 mb-0">
                            Out Of Stock
                        </p>
                    @endif
                </div>
                <div class="d-flex align-items-center justify-content-between gap-2">
                    @if ($book->qty > 0)
                        <form action="{{ route('carts.store') }}" method="POST" class="w-100">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button class="btn p-2 btn-primary w-100">
                                <i class="bi bi-cart-plus"></i>
                                Add To Cart
                            </button>
                        </form>
                    @endif
                    <a href="{{ route('books.edit', $book->id) }}" class="btn p-2 btn-outline-primary w-100">
                        <i class="bi bi-pencil-square "></i>
                        Edit
                    </a>
                </div>


            </div>
        </div>
        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <p class="mb-2 mt-2 fs-4 fw-semibold text-primary">
                        <i class="bi bi-blockquote-right me-1"></i>
                        Book Description
                    </p>
                    <p id="description" class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3"
                        style="text-align:
                    justify;">
                        {{ $book->description }}
                    </p>
                    <p class="fs-4 mb-3 fw-semibold text-primary">
                        <i class="bi bi-calendar3 me-1"></i>
                        Borrowing Detail
                    </p>
                    <p class="fs-6 mb-2">
                        <i class="bi bi-clock"></i>
                        Duration
                    </p>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3">
                        {{ $setting->borrowing_duration . ' days' }}</p>

                    <p class="fs-6 mb-2">
                        <i class="bi bi-hourglass-bottom"></i>
                        Fine
                    </p>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3">
                        {{ $setting->fine_rate . ' Kyats per day.' }}
                    </p>
                </div>

                <a href="{{ route('settings.index') }}" class="btn lg_btn btn-dark w-100">
                    <i class="bi bi-gear"></i>
                    Change Settings
                </a>
            </div>
        </div>
    </div>
@endsection
