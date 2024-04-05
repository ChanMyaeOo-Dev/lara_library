@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase mb-0">
            <i class="bi bi-clock-history"></i>
            Transactions
        </h4>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">

            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Book <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Student <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Borrow Date<i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Returned_At <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Is_Returned <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
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
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->created_at->format('M/d/Y') }}</td>
                            <td>

                                @if ($transaction->returned_at === null && $transaction->calculateFine($transaction, $setting->fine_rate) === null)
                                    -
                                @elseif ($transaction->returned_at === null && $transaction->calculateFine($transaction, $setting->fine_rate) != null)
                                    <span class="badge rounded text-bg-primary">
                                        {{ 'Fine: ' . $transaction->calculateFine($transaction, $setting->fine_rate) . ' Kyats' }}
                                    </span>
                                @elseif ($transaction->returned_at != null && $transaction->calculateFine($transaction, $setting->fine_rate) === null)
                                    {{ $transaction->returned_at }}
                                @elseif ($transaction->returned_at != null && $transaction->calculateFine($transaction, $setting->fine_rate) != null)
                                    <span class="mb-0">
                                        {{ $transaction->returned_at }}
                                    </span><br>
                                    <span class="badge rounded text-bg-primary">
                                        {{ 'Fine: ' . $transaction->calculateFine($transaction, $setting->fine_rate) . ' Kyats' }}
                                    </span>
                                @endif
                            </td>
                            <td>{{ $transaction->is_returned == 0 ? 'NO' : 'YES' }}</td>
                            <td>
                                <div class="d-flex
                                        align-items-center">
                                    <a href="{{ route('transactions.show', $transaction->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>

                                    <a href="{{ route('transactions.edit', $transaction->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil"></i>
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
