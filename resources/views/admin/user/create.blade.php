@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Add New Member
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Member Informations</p>
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 mt-2">

                    <div class="custom_photo_div d-inline-block">

                        <img src="{{ asset('storage/default_user.svg') }}" class="w-100 shadow-sm rounded-3 shadow output">

                        <div class="custom_photo_add_icon">
                            <label for="image"
                                class="photo_choose_icon btn btn-outline-dark image rounded shadow-sm w-100 text-center">
                                <i class="bi bi-camera fs-5"></i>
                            </label>
                            <input type="file" id="image" name="profile_picture" accept="image/*"
                                onchange="loadFile(event)" hidden>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" placeholder="Enter User Name...">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Roll Number</label>
                    <input type="text" name="roll_number" class="form-control @error('roll_number') is-invalid @enderror"
                        value="{{ old('roll_number') }}" placeholder="Enter Roll Number ...">
                    @error('roll_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Enter Member Email...">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Phone</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone') }}" placeholder="Enter Member Phone...">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Member Role</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option value="student" selected>Student</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button class="btn lg_btn btn-primary float-end">Add Member</button>
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
