@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Member informatoin
        </h4>
    </div>

    <div class="d-flex gap-3 mb-3">
        <div class="card h-auto w-25 rounded-sm bg-white p-2">
            <div class="card-body">
                <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                    <img id="cover" src="{{ asset('storage/show_back.jpg') }}" class="rounded object-fit-cover">
                    <img id="profile" src="{{ asset('storage/' . $user->profile_picture) }}"
                        class="shadow-sm rounded-circle shadow object-fit-cover mx-auto" style="width:150px;height:150px;">
                </div>
                <div class=" d-flex flex-column align-items-center justify-content-center mb-3">
                    <p class="fs-4 mb-0 fw-bold text-center">{{ $user->name }}</p>
                    <span class="badge text-bg-primary">{{ $user->role }}</span>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Roll Number</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $user->roll_number }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Email</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $user->email }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Phone</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $user->phone }}</p>
                </div>

                <a href="{{ route('users.edit', $user->id) }}" class="btn lg_btn btn-primary mb-0 w-100">
                    <i class="bi bi-pencil-square "></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card w-75 rounded-sm bg-white">
            <div class="card-body">
                <p class="mb-4 mt-2 fs-4 ps-1 fw-semibold text-primary">
                    <i class="bi bi-calendar3 me-1"></i>
                    Books To Be Return
                </p>
                <table id="data_table" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Book <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                            <th>Borrow Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                            <th>Due Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                            <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('storage/' . $transaction->book->book_image) }}"
                                            class="me-2 rounded border border-1" style="width: 45px;height:45px;">
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
                                <td>
                                    <div class="d-flex
                                        align-items-center">
                                        <form id="{{ 'update_form_' . $transaction->id }}"
                                            action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        </form>
                                        <!-- Button trigger modal -->
                                        <button id="{{ $transaction->book->title }}"
                                            transaction_id="{{ $transaction->id }}" onclick="returnBtnClick(this)"
                                            type="button" class="btn btn-sm btn-outline-dark me-1" data-bs-toggle="modal"
                                            data-bs-target="#return_model">
                                            <i class="bi bi-check2-square"></i>
                                        </button>

                                        <form id="{{ 'delete_form_' . $transaction->id }}"
                                            action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <!-- Button trigger modal -->
                                        <button id="{{ $transaction->book->title }}"
                                            transaction_id="{{ $transaction->id }}" onclick="returnBtnClick(this)"
                                            type="button" class="btn btn-sm btn-outline-dark me-1" data-bs-toggle="modal"
                                            data-bs-target="#delete_confirm_model">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <p class="mb-3 mt-2 fs-4 ps-1 fw-semibold text-primary">
                <i class="bi bi-calendar-date"></i>
                History
            </p>
            <table id="data_table_history" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Book <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Borrow Date<i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Returned_At <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $history->book->book_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
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
                            <td>
                                <div class="d-flex align-items-center">
                                    <form action="{{ route('transactions.destroy', $history->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-dark">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Return Modal -->
    <div class="modal fade" id="return_model" tabindex="-1" aria-labelledby="return_model_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="return_model_label">Confirm Returned</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="model_text" class="mb-0">
                        Are you sure to update this book as returned.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" id="update_form_btn" form="update_form_"
                        class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirm Modal -->
    <div class="modal fade" id="delete_confirm_model" tabindex="-1" aria-labelledby="delete_confirm_model_label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="delete_confirm_model_label">Confirm Returned</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="model_delete_text" class="mb-0">
                        Are you sure to delete the transaction for this book.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" id="delete_form_btn" form="delete_form_"
                        class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function returnBtnClick(event) {
            var title = event.id;
            var model_text = document.getElementById('model_text');
            var model_delete_text = document.getElementById('model_delete_text');

            var update_form_btn = document.getElementById('update_form_btn');
            var delete_form_btn = document.getElementById('delete_form_btn');
            var transaction_id = event.getAttribute('transaction_id');
            update_form_btn.setAttribute('form', 'update_form_' + transaction_id);
            delete_form_btn.setAttribute('form', 'delete_form_' + transaction_id);

            model_text.innerHTML = 'Are you sure to update this book, <strong>' + title + '</strong> as returned.';
            model_delete_text.innerHTML = 'Are you sure to delete the transaction for this book, <strong>' + title +
                '</strong>.';
        }
    </script>
@endsection
