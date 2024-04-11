@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
                    </ol>
                </nav>
                <div class="row mb-3">
                    <div class="col-12 col-md-3 px-0 mb-3 mb-md-0">
                        <div class="card rounded-sm bg-white p-2 me-0 me-md-3">
                            <div class="card-body">
                                <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                                    <img id="cover" src="{{ asset('storage/profile_background.jpg') }}"
                                        class="rounded object-fit-cover">
                                    <img id="profile" src="{{ asset('storage/' . $user->profile_picture) }}"
                                        class="shadow-sm rounded-circle shadow object-fit-cover mx-auto"
                                        style="width:150px;height:150px;">
                                </div>
                                <div class=" d-flex flex-column align-items-center justify-content-center mb-3">
                                    <p class="fs-4 mb-0 fw-bold text-center">{{ $user->name }}</p>
                                    <span class="badge text-bg-primary">{{ $user->role }}</span>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="mb-1">Roll Number</label>
                                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">
                                        {{ $user->roll_number }}
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="mb-1">Email</label>
                                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $user->email }}</p>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="mb-1">Phone</label>
                                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $user->phone }}</p>
                                </div>

                                <div>
                                    <a href="{{ route('student.edit', $user->roll_number) }}"
                                        class="btn lg_btn btn-outline-primary mb-2 w-100">
                                        <i class="bi bi-pencil-square "></i>
                                        Edit
                                    </a>
                                    <a href="{{ route('change-password') }}" class="btn lg_btn btn-primary mb-0 w-100">
                                        <i class="bi bi-lock"></i>
                                        Change Password
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-9 rounded-sm bg-white">
                        <div class="card-body">
                            <p class="mb-4 mt-2 fs-4 ps-1 fw-semibold text-primary">
                                <i class="bi bi-calendar3 me-1"></i>
                                Reading List
                            </p>
                            <table class="table d-none d-md-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Book</th>
                                        <th>Borrow Date</th>
                                        <th>Due Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->userCurrentTransactions as $transaction)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('storage/' . $transaction->book->book_image) }}"
                                                        class="me-2 rounded border border-1"
                                                        style="width: 45px;height:45px;">
                                                    <span>{{ $transaction->book->title }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $transaction->created_at->format('M/d/Y') }}</td>
                                            <td>
                                                @if ($transaction->calculateFine($transaction, $setting->fine_rate) === null)
                                                    <span class="mb-0">
                                                        {{ date('M/d/Y', strtotime($transaction->due_date)) }}
                                                    </span>
                                                @else
                                                    <span class="mb-0">
                                                        {{ date('M/d/Y', strtotime($transaction->due_date)) }}
                                                    </span><br>
                                                    <span class="badge rounded text-bg-primary">
                                                        {{ 'Fine: ' . $transaction->calculateFine($transaction, $setting->fine_rate) . ' Kyats' }}
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @foreach ($user->userCurrentTransactions as $transaction)
                                <div class="mb-3 d-block d-md-none">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $transaction->book->book_image) }}"
                                            class="me-2 rounded border border-1" style="width: 50px;height:50px;">
                                        <div>
                                            <p class="text-dark mb-0 fw-semibold">{{ $transaction->book->title }}</p>
                                            <span class="fs-6 text-black-50 fw-normal">
                                                Due Date: {{ $transaction->due_date }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card col-12 rounded-sm bg-white mt-3">
                        <div class="card-body">
                            <p class="mb-3 mt-2 fs-4 ps-1 fw-semibold text-primary">
                                <i class="bi bi-calendar-date"></i>
                                History
                            </p>
                            <div class="d-none d-md-table w-100">
                                <table id="data_table_history" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Book</th>
                                            <th>Borrow Dat</th>
                                            <th>Returned_At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->userPreviousTransactions as $history)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('storage/' . $history->book->book_image) }}"
                                                            class="me-2 rounded border border-1"
                                                            style="width: 45px;height:45px;">
                                                        <span>{{ $history->book->title }}</span>
                                                    </div>
                                                </td>
                                                <td>{{ $history->created_at->format('M/d/Y') }}</td>
                                                <td>

                                                    @if ($history->returned_at === null && $history->calculateFine($history, $setting->fine_rate) === null)
                                                        -
                                                    @elseif ($history->returned_at === null && $history->calculateFine($history, $setting->fine_rate) != null)
                                                        <span class="badge rounded text-bg-primary">
                                                            {{ 'Fine: ' . $history->calculateFine($history, $setting->fine_rate) . ' Kyats' }}
                                                        </span>
                                                    @elseif ($history->returned_at != null && $history->calculateFine($history, $setting->fine_rate) === null)
                                                        {{ $history->returned_at }}
                                                    @elseif ($history->returned_at != null && $history->calculateFine($history, $setting->fine_rate) != null)
                                                        <span class="mb-0">
                                                            {{ $history->returned_at }}
                                                        </span><br>
                                                        <span class="badge rounded text-bg-primary">
                                                            {{ 'Fine: ' . $history->calculateFine($history, $setting->fine_rate) . ' Kyats' }}
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @foreach ($user->userPreviousTransactions as $transaction)
                                <div class="mb-3 d-block d-md-none">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $transaction->book->book_image) }}"
                                            class="me-2 rounded border border-1" style="width: 50px;height:50px;">
                                        <div>
                                            <p class="text-dark mb-0 fw-semibold">{{ $transaction->book->title }}</p>
                                            <span class="fs-6 text-black-50 fw-normal">
                                                Return At: {{ $transaction->returned_at }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
