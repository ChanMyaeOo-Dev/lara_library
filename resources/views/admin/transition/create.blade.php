@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <h4 class="text-uppercase mb-0">
            Borrow Detail Informations
        </h4>
    </div>

    <div class="d-flex gap-3 mb-3">

        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body">
                <p class="fs-4 mb-3 fw-semibold">User Information</p>

                <div class="d-flex align-items-start gap-4">
                    <img src="{{ asset('storage/' . $user->profile_picture) }}" class="shadow-sm rounded object-fit-cover"
                        style="width: 120px;height: 120px;">

                    <div class="">
                        <p class="fs-4 mb-0 fw-normal">{{ $user->name }}</p>
                        <div class="mb-3">
                            <span class="badge text-bg-primary">{{ $user->role }}</span>
                        </div>
                        <p class="fs-6 mb-0">
                            <i class="bi bi-phone me-1"></i>
                            {{ $user->phone }}
                        </p>
                        <p class="fs-6 mb-0">
                            <i class="bi bi-envelope me-1"></i>
                            {{ $user->email }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body">
                <p class="fs-4 mb-3 fw-semibold">Book Information</p>

                <div class="d-flex gap-4">
                    <img src="{{ asset('storage/' . $book->book_image) }}" class="shadow-sm rounded object-fit-cover"
                        style="width: 120px;height: 120px;">

                    <div class="">
                        <p class="fs-3 mb-1">{{ $book->title }}</p>
                        <div class="mb-3">
                            <span class="badge text-bg-info">{{ $book->author }}</span>
                            <span class="badge text-bg-warning">{{ $book->category->title }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card w-25 rounded-sm bg-white p-2">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="">
                    <p class="fs-4 mb-3 fw-semibold">Borrowing Detail</p>
                    <p class="fs-6 mb-0">
                        <i class="bi bi-clock"></i>
                        Duration ({{ $setting->borrowing_duration . ' days' }})
                    </p>

                    <hr class="px-3 my-2">

                    <p class="fs-6 mb-0">
                        <i class="bi bi-hourglass-bottom"></i>
                        Fine ({{ $setting->fine_rate . ' Kyats per day.' }})
                    </p>

                    <hr class="px-3 my-2">

                    <p class="fs-6 mb-0">
                        <i class="bi bi-stopwatch"></i>
                        Due Date ({{ $due_date }})
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="card rounded-sm bg-white p-2">
        <div class="card-body">

            <img src="{{ asset('storage/' . 'logo_landscape.png') }}" alt="" class="" style="width:160px;">
            <p class=" text-uppercase fs-3">Invoice</p>
            <div class="">
                <div class=" d-flex align-items-center">
                    <img src="{{ asset('storage/' . $user->profile_picture) }}"
                        class="me-2 rounded-circle object-fit-cover" style="width: 60px;height: 60px;">
                    <div class="mb-3">
                        <p class="fs-4 mb-0 fw-normal">{{ $user->name }}</p>
                        <span class="badge text-bg-primary">{{ $user->role }}</span>
                    </div>
                </div>
                <p class="fs-6 mb-0">
                    <i class="bi bi-phone me-1"></i>
                    {{ $user->phone }}
                </p>
                <p class="fs-6 mb-0">
                    <i class="bi bi-envelope me-1"></i>
                    {{ $user->email }}
                </p>
            </div>

        </div>
    </div>
@endsection
