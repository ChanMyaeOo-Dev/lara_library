@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-outline-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            {{ $book->title }}
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
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
                    <p id="description" class="fs-5 mb-3 w-75" style="text-align: justify;">
                        {{ $book->description }}
                    </p>

                    <p class="mb-3 fs-6">
                        Stock: {{ $book->qty }} books
                    </p>
                    <button class="btn btn-primary">Borrow Now</button>
                </div>
            </div>

        </div>
    </div>
@endsection
