@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('project-books.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Book Details
        </h4>
    </div>
    <div class="card w-100 rounded-sm bg-white p-2">
        <div class="card-body">
            <img id="profile" src="{{ asset('storage/' . $book->cover_image) }}"
                class="shadow-sm rounded shadow object-fit-cover mb-4" style="width:160px;height:200px;">
            <p class="fs-4 mb-4 fw-bold">{{ $book->title }}</p>

            <div class="mb-3">
                <label for="" class="mb-1">Category</label>
                <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->category }}</p>
            </div>

            <div class="mb-3">
                <label for="" class="mb-1">Book Description</label>
                <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->description }}</p>
            </div>

            <a href="{{ route('project-books.edit', $book->id) }}" class="btn lg_btn float-end btn-primary">
                <i class="bi bi-pencil-square "></i>
                Edit Book
            </a>
        </div>
    </div>
@endsection
