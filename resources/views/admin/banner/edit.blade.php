@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('banners.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Edit Banner
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Book Details</p>
            <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-2">
                    <div class="banner_photo_div d-inline-block">
                        <img src="{{ asset('storage/' . $banner->image) }}" class="w-100 shadow-sm rounded-3 shadow output">
                        <div class="custom_photo_add_icon">
                            <label for="image"
                                class="photo_choose_icon btn btn-outline-dark image rounded shadow-sm w-100 text-center">
                                <i class="bi bi-camera fs-5"></i>
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="loadFile(event)"
                                hidden>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="mb-1">Description</label>
                    <textarea class=" @error('description') is-invalid @enderror form-control" rows="6" name="description">{{ $banner->description }}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn lg_btn btn-primary float-end">Update</button>
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
