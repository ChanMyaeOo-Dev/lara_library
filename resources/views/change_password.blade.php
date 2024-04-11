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
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
                <div class="card rounded-sm bg-white p-2">
                    <div class="card-body">
                        <form action="{{ route('change-password', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="user_name" class="form-label">Current Password</label>
                                <div class="d-flex align-items-center border border-1 rounded">
                                    <input type="password"
                                        class="password_input @error('current_password') is-invalid @enderror text-dark border-0 w-100 px-3 bg-transparent py-2"
                                        name="current_password" id="current_password" placeholder="Enter Current Password"
                                        required>
                                    <button class="border-0 bg-transparent px-4 " type="button" id="toggleCurrentPassword">
                                        <i id="current_password_icon" class="bi bi-eye-slash-fill" aria-hidden="true"></i>
                                    </button>
                                </div>
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <div class="d-flex align-items-center border border-1 rounded">
                                    <input type="password"
                                        class="password_input @error('new_password') is-invalid @enderror text-dark border-0 w-100 px-3 bg-transparent py-2"
                                        name="new_password" id="new_password" placeholder="Enter New Password" required>
                                    <button class="border-0 bg-transparent px-4 " type="button" id="toggleNewPassword">
                                        <i id="new_password_icon" class="bi bi-eye-slash-fill" aria-hidden="true"></i>
                                    </button>
                                </div>
                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn lg_btn btn-primary float-end">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleCurrentPassword = document.getElementById('toggleCurrentPassword');
            var passwordInput = document.getElementById('current_password');
            var currentIcon = document.getElementById('current_password_icon');

            toggleCurrentPassword.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    currentIcon.classList.remove('bi-eye-slash-fill');
                    currentIcon.classList.add('bi-eye-fill');
                } else {
                    passwordInput.type = 'password';
                    currentIcon.classList.remove('bi-eye-fill');
                    currentIcon.classList.add('bi-eye-slash-fill');
                }
            });

            // For New Password
            var toggleNewPassword = document.getElementById('toggleNewPassword');
            var newPasswordInput = document.getElementById('new_password');
            var newIcon = document.getElementById('new_password_icon');

            toggleNewPassword.addEventListener('click', function() {
                if (newPasswordInput.type === 'password') {
                    newPasswordInput.type = 'text';
                    newIcon.classList.remove('bi-eye-slash-fill');
                    newIcon.classList.add('bi-eye-fill');
                } else {
                    newPasswordInput.type = 'password';
                    newIcon.classList.remove('bi-eye-fill');
                    newIcon.classList.add('bi-eye-slash-fill');
                }
            });
        });
    </script>
@endsection
