@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <h4 class="text-uppercase mb-0 text-primary fw-semibold">
            Borrow Detail Informations
        </h4>
    </div>

    <div class="d-flex gap-3 mb-3">

        {{-- Books Table --}}
        <div class="card w-75 rounded-sm bg-white p-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $cart->book->book_image) }}"
                                            class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                        <span>{{ $cart->book->title }}</span>
                                    </div>
                                </td>
                                <td>{{ $cart->book->author }}</td>
                                <td class="{{ $cart->book->category ? '' : 'text-black-50' }}">
                                    {{ $cart->book->category ? $cart->book->category->title : 'uncategorize' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-25">
            {{-- User Information --}}
            <div class="card rounded-sm bg-white mb-3 p-2">
                <div class="card-body">
                    <p class="fs-4 mb-3 text-primary fw-medium">
                        User Information
                    </p>
                    <p class="mb-0">
                        <i class="bi bi-person me-1"></i>
                        {{ $user->name }}
                    </p>

                    <hr class="my-2">
                    <p class="mb-0">
                        <i class="bi bi-phone me-1"></i>
                        {{ $user->phone }}
                    </p>

                    <hr class="my-2">
                    <p class="mb-0">
                        <i class="bi bi-envelope me-1"></i>
                        {{ $user->email }}
                    </p>
                </div>
            </div>
            {{-- Setting Card --}}
            <div class="card rounded-sm bg-white p-2">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="">
                        <p class="fs-4 mb-3 text-primary fw-medium">Borrowing Detail</p>
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

                    <form action="{{ route('transistions.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="duration" value="{{ $setting->borrowing_duration }}">
                        <input type="hidden" name="due_date" value="{{ $due_date }}">
                        <button class="btn btn-primary lg_btn w-100 mt-5">Confirm</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
