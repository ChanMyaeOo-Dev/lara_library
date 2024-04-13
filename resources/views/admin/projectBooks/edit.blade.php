@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('project-books.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Edit Book
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Book Details</p>
            <form action="{{ route('project-books.update', $projectBook->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-2">
                    <div class="custom_photo_div d-inline-block">
                        <img src="{{ asset('storage/' . $projectBook->cover_image) }}"
                            class="w-100 shadow-sm rounded-3 shadow output">
                        <div class="custom_photo_add_icon">
                            <label for="image"
                                class="photo_choose_icon btn btn-outline-dark image rounded shadow-sm w-100 text-center">
                                <i class="bi bi-camera fs-5"></i>
                            </label>
                            <input type="file" id="image" name="cover_image" accept="image/*"
                                onchange="loadFile(event)" hidden>
                            <input type="hidden" name="old_cover_image" value="{{ $projectBook->cover_image }}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="mb-1">Book Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        value="{{ $projectBook->title }}" placeholder="Enter Book Title...">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Book Description</label>
                    <textarea class=" form-control @error('description') is-invalid @enderror" rows="6" name="description">{{ $projectBook->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Book Category</label>
                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
                        value="{{ $projectBook->category }}" placeholder="Enter Book Category...">
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Book Link</label>
                    <textarea class=" form-control @error('link') is-invalid @enderror" rows="6" name="link">{{ $projectBook->link }}</textarea>
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn lg_btn btn-primary float-end">Update Book</button>
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
