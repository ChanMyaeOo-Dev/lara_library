@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Member informatoin edit
        </h4>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">
            <p class="fs-4 mb-3 fw-bold">Member Informations</p>
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 mt-2">

                    <div class="custom_photo_div d-inline-block">

                        <img src="{{ asset('storage/' . $user->profile_picture) }}"
                            class="w-100 shadow-sm rounded-3 shadow output">

                        <div class="custom_photo_add_icon">
                            <label for="image"
                                class="photo_choose_icon btn btn-outline-dark image rounded shadow-sm w-100 text-center">
                                <i class="bi bi-camera fs-5"></i>
                            </label>
                            <input type="hidden" value="{{ $user->profile_picture }}" name="old_profile_picture">
                            <input type="file" id="image" name="profile_picture" accept="image/*"
                                onchange="loadFile(event)" hidden>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $user->name }}" placeholder="Enter User Name...">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ $user->email }}" placeholder="Enter Member Email...">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Phone</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        value="{{ $user->phone }}" placeholder="Enter Member Phone...">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Member Role</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
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