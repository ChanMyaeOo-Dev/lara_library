@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-outline-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Edit Book
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Book Details</p>
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="mb-1">Book Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $book->title }}"
                        placeholder="Enter Book Title...">
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Author Name</label>
                    <input type="text" name="author" class="form-control" value="{{ $book->author }}"
                        placeholder="Enter Author Name...">
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Choose Book Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Book Copies</label>
                    <input type="number" name="qty" class="form-control" value="{{ $book->qty }}"
                        placeholder="Enter Book Copies...">
                </div>

                <button class="btn lg_btn btn-primary float-end">Update Book</button>
            </form>
        </div>
    </div>
@endsection
