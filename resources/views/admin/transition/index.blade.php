@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase">
            <i class="bi bi-blockquote-right"></i>
            Books
        </h4>
        <a href="{{ route('books.create') }}" type="button" class="btn lg_btn btn-dark">
            Add New Book
        </a>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">

            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Book <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Student <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Is_Returned <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Returned_At <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->created_at->format('M/d/Y') }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $transaction->book->book_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $transaction->book->title }}</span>
                                </div>
                            </td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->is_returned == 0 ? 'NO' : 'YES' }}</td>
                            <td>{{ $transaction->returned_at == null ? '-' : $transaction->returned_at }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('transactions.show', $transaction->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>
                                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
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
@endsection
