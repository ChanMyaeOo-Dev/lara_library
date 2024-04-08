@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-3 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase text-primary me-1 fw-bold">
            {{-- <i class="bi bi-book me-1"></i> --}}
            Dashboard
        </h4>
    </div>

    {{-- Number Cards --}}

    <div class="d-flex align-items-center justify-content-between gap-3 mb-3">

        <div class="w-100 card p-3 bg-white">
            <div class="card-body">
                <div class="d-flex align-items-start border-bottom py-2">
                    <div class="bg-primary rounded-circle p-3 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hi">
                            <path fill-rule="evenodd"
                                d="M19.902 4.098a3.75 3.75 0 0 0-5.304 0l-4.5 4.5a3.75 3.75 0 0 0 1.035 6.037.75.75 0 0 1-.646 1.353 5.25 5.25 0 0 1-1.449-8.45l4.5-4.5a5.25 5.25 0 1 1 7.424 7.424l-1.757 1.757a.75.75 0 1 1-1.06-1.06l1.757-1.757a3.75 3.75 0 0 0 0-5.304Zm-7.389 4.267a.75.75 0 0 1 1-.353 5.25 5.25 0 0 1 1.449 8.45l-4.5 4.5a5.25 5.25 0 1 1-7.424-7.424l1.757-1.757a.75.75 0 1 1 1.06 1.06l-1.757 1.757a3.75 3.75 0 1 0 5.304 5.304l4.5-4.5a3.75 3.75 0 0 0-1.035-6.037.75.75 0 0 1-.354-1Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Total Transactions</p>
                        <p class="mb-0 fs-3">{{ $transactionCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 card p-3 bg-white">
            <div class="card-body">
                <div class="d-flex align-items-start border-bottom py-2">
                    <div class="bg-primary rounded-circle p-3 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hi">
                            <path fill-rule="evenodd"
                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                clip-rule="evenodd" />
                            <path
                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Total Users</p>
                        <p class="mb-0 fs-3">{{ $userCount }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 card p-3 bg-white">
            <div class="card-body">
                <div class="d-flex align-items-start border-bottom py-2">
                    <div class="bg-primary rounded-circle p-3 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hi">
                            <path
                                d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Total Books</p>
                        <p class="mb-0 fs-3">{{ count($books) }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 card p-3 bg-white">
            <div class="card-body">
                <div class="d-flex align-items-start border-bottom py-2">
                    <div class="bg-primary rounded-circle p-3 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hi">
                            <path
                                d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                            <path
                                d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                            <path
                                d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-0 fs-5">Total Category</p>
                        <p class="mb-0 fs-3">{{ $categoryCount }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
        <div class="w-50 p-5 card bg-white">
            <h5 class="text-primary mb-4 fw-normal">
                Books Count By Category
            </h5>
            <canvas id="book_count_chart" class=""></canvas>
        </div>

        <div class="w-50 p-5 card bg-white">
            <h5 class="text-primary mb-4 fw-normal">
                Transaction Count In Last Six Months
            </h5>
            <canvas id="transaction_count_chart" class=""></canvas>
        </div>

    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Title <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Author <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Category <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Stock <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->created_at->format('M/d/Y') }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $book->book_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $book->title }}</span>
                                </div>
                            </td>
                            <td>{{ $book->author }}</td>
                            <td class={{ $book->category ? '' : 'text-black-50' }}>
                                {{ $book->category ? $book->category->title : 'uncategorize' }}</td>
                            <td class="{{ $book->qty <= 0 ? 'text-danger' : '' }}">
                                {{ $book->qty <= 0 ? 'out of stock' : $book->qty }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($book->qty > 0)
                                        <form action="{{ route('carts.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                                            <button class="btn btn-sm btn-outline-dark me-1">
                                                <i class="bi bi-cart-plus"></i>
                                            </button>
                                        </form>
                                    @endif
                                    <a href="{{ route('books.show', $book->slug) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>
                                    <a href="{{ route('books.edit', $book->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
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

    <script type="module">
        showBookCountChart({!! json_encode($categoryBookCount) !!});
        showTransactionCountChart({!! json_encode($transactionCountsInLastSixMonth) !!});
    </script>
@endsection
