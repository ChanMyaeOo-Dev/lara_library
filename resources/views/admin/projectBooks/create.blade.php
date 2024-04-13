@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('project-books.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Add New Project Book
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Book Details</p>
            <form action="{{ route('project-books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-2">

                    <div class="custom_photo_div d-inline-block">

                        <img src="{{ asset('storage/default_book_image.jpg') }}"
                            class="w-100 shadow-sm rounded-3 shadow output">

                        <div class="custom_photo_add_icon">
                            <label for="image"
                                class="photo_choose_icon btn btn-outline-dark image rounded shadow-sm w-100 text-center">
                                <i class="bi bi-camera fs-5"></i>
                            </label>
                            <input type="file" id="image" name="cover_image" accept="image/*"
                                onchange="loadFile(event)" hidden>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-1">Book Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Enter Book Title...">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="mb-1">Book Description</label>
                    <textarea class=" form-control @error('description') is-invalid @enderror" rows="6" name="description"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Category</label>
                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                        placeholder="Enter Category...">
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Link</label>
                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                        placeholder="Enter Book Link...">
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn lg_btn btn-primary float-end">Add Book</button>
            </form>
        </div>
    </div>
    <script>
        let loadFile = function(event) {
            let output = document.querySelector(".output");
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
                let error_msg = document.querySelector(".alert-danger").remove();
            }
        };
    </script>
@endsection
