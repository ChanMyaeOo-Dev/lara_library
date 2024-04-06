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
        <div class="card h-auto w-25 rounded-sm bg-white p-2">
            <div class="card-body">
                <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                    <img id="cover" src="{{ asset('storage/profile_background.jpg') }}"
                        class="rounded object-fit-cover">
                    <img id="profile" src="{{ asset('storage/' . $book->book_image) }}"
                        class="shadow-sm rounded-circle shadow object-fit-cover mx-auto" style="width:150px;height:150px;">
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
        <div class="card w-75 rounded-sm bg-white">
            <div class="card-body">
                <p class="mb-4 mt-2 fs-4 ps-1 fw-semibold text-primary">
                    <i class="bi bi-calendar3 me-1"></i>
                    Books To Be Return
                </p>
            </div>
        </div>
    </div>

    <div class="d-flex gap-3">
        <div class="card w-75 rounded-sm bg-white p-2">
            <div class="card-body">
                <p class="fs-4 mb-3 fw-bold">Book Details</p>

                <div class="d-flex gap-4">
                    <img src="{{ asset('storage/' . $book->book_image) }}" class="shadow-sm rounded object-fit-cover"
                        style="width: 300px;height: 300px;">

                    <div class="">
                        <p class="fs-3 mb-1">{{ $book->title }}</p>
                        <div class="mb-3">
                            <span class="badge text-bg-info">{{ $book->author }}</span>
                            <span class="badge text-bg-warning">{{ $book->category->title }}</span>
                        </div>
                        <p class="fs-6 mb-2 text-black-50">Description</p>
                        <p id="description" class="fs-5 mb-3 pe-3" style="text-align: justify;">
                            {{ $book->description }}
                        </p>

                        <p class="mb-3 fs-6">
                            Stock: {{ $book->qty }} books
                        </p>
                        <form action="{{ route('carts.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button class="btn btn-primary">
                                <i class="bi bi-cart-plus"></i>
                                Add To Cart
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="card w-25 rounded-sm bg-white p-2">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="">
                    <p class="fs-4 mb-3 fw-bold">Borrowing Detail</p>
                    <p class="fs-6 mb-2">
                        <i class="bi bi-clock"></i>
                        Duration
                    </p>
                    <p class="fs-6">{{ $setting->borrowing_duration . ' days' }}</p>

                    <hr class="px-3 my-3">

                    <p class="fs-6 mb-2">
                        <i class="bi bi-hourglass-bottom"></i>
                        Fine
                    </p>
                    <p class="fs-6">{{ $setting->fine_rate . ' Kyats per day.' }}</p>

                    <hr class="px-3 my-3">
                </div>
                <a href="{{ route('settings.index') }}" class="btn lg_btn btn-dark w-100">
                    <i class="bi bi-gear"></i>
                    Change Settings
                </a>
            </div>
        </div>
    </div>
@endsection
