@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-decoration-none"
                                href="{{ route('/') }}">{{ $user->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
                <div class="card rounded-sm bg-white p-2">
                    <div class="card-body">
                        <p class="fs-4 mb-3 fw-bold">Member Informations</p>
                        <form action="{{ route('student.update', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
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
                                        <input type="hidden" value="{{ $user->profile_picture }}"
                                            name="old_profile_picture">
                                        <input type="file" id="image" name="profile_picture" accept="image/*"
                                            onchange="loadFile(event)" hidden>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}"
                                    placeholder="Enter User Name...">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Roll Number</label>
                                <input type="text" name="roll_number"
                                    class="form-control @error('roll_number') is-invalid @enderror"
                                    value="{{ $user->roll_number }}" placeholder="Enter Roll Number...">
                                @error('roll_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Email</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}"
                                    placeholder="Enter Member Email...">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Phone</label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phone }}"
                                    placeholder="Enter Member Phone...">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="mb-1">Member Role</label>
                                <select class="form-select" aria-label="Default select example" name="role">
                                    <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Student
                                    </option>
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn lg_btn btn-primary float-end">Update</button>
                        </form>
                    </div>
                </div>
            </div>
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
