@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <a href="{{ route('books.index') }}" class="btn btn-sm btn-dark me-2">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h4 class="text-uppercase mb-0">
                Book Details
            </h4>
        </div>

        <form action="{{ route('editor_choices.store') }}" method="POST">
            @csrf
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <button class="btn btn-outline-primary lg_btn">
                <i class="bi bi-star me-1"></i>
                Add To Editor Choice
            </button>
        </form>

    </div>

    <div class="d-flex gap-3 mb-3">
        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body">
                <div id="profile_cover" class="mb-3 d-flex flex-column align-items-center">
                    <img id="cover" src="{{ asset('storage/profile_background.jpg') }}"
                        class="rounded object-fit-cover">
                    <img id="profile" src="{{ asset('storage/' . $book->book_image) }}"
                        class="shadow-sm rounded-circle shadow object-fit-cover mx-auto" style="width:200px;height:200px;">
                </div>
                <p class="fs-4 mb-4 fw-bold text-center">{{ $book->title }}</p>

                <div class="mb-3">
                    <label for="" class="mb-1">Author</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->author }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Category</label>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">{{ $book->category->title }}</p>
                </div>

                <div class="mb-3">
                    <label for="" class="mb-1">Stock</label>
                    @if ($book->qty > 0)
                        <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-0">
                            {{ $book->qty . ' books available' }}
                        </p>
                    @else
                        <p class="fs-6 fw-normal bg-light text-danger border rounded px-3 py-2 mb-0">
                            Out Of Stock
                        </p>
                    @endif
                </div>
                <div class="d-flex align-items-center justify-content-between gap-2">
                    @if ($book->qty > 0)
                        <form action="{{ route('carts.store') }}" method="POST" class="w-100">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button class="btn p-2 btn-primary w-100">
                                <i class="bi bi-cart-plus"></i>
                                Add To Cart
                            </button>
                        </form>
                    @endif
                    <a href="{{ route('books.edit', $book->id) }}" class="btn p-2 btn-outline-primary w-100">
                        <i class="bi bi-pencil-square "></i>
                        Edit
                    </a>
                </div>


            </div>
        </div>
        <div class="card w-50 rounded-sm bg-white p-2">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <p class="mb-2 mt-2 fs-4 fw-semibold text-primary">
                        <i class="bi bi-blockquote-right me-1"></i>
                        Book Description
                    </p>
                    <p id="description" class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3"
                        style="text-align:
                    justify;">
                        {{ $book->description }}
                    </p>
                    <p class="fs-4 mb-3 fw-semibold text-primary">
                        <i class="bi bi-calendar3 me-1"></i>
                        Borrowing Detail
                    </p>
                    <p class="fs-6 mb-2">
                        <i class="bi bi-clock"></i>
                        Duration
                    </p>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3">
                        {{ $setting->borrowing_duration . ' days' }}</p>

                    <p class="fs-6 mb-2">
                        <i class="bi bi-hourglass-bottom"></i>
                        Fine
                    </p>
                    <p class="fs-6 fw-normal bg-light border rounded px-3 py-2 mb-3">
                        {{ $setting->fine_rate . ' Kyats per day.' }}
                    </p>
                </div>

                <a href="{{ route('settings.index') }}" class="btn lg_btn btn-dark w-100">
                    <i class="bi bi-gear"></i>
                    Change Settings
                </a>
            </div>
        </div>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <p class="mb-2 mt-2 fs-4 fw-semibold text-primary">
                <i class="bi bi-people me-1"></i>
                Borrowers
            </p>
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Roll No. <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Name <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Email <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Phone <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Role <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book->users as $user)
                        <tr>
                            <td>{{ $user->created_at->format('M/d/Y') }}</td>
                            <td>{{ $user->roll_number }}</td>
                            <td class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $user->profile_picture) }}"
                                    class="object-fit-cover me-2 rounded-circle" style="width:40px;height:40px;">
                                <span class="mb-0 pb-0">{{ $user->name }}</span>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td class="text-uppercase">{{ $user->role }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('users.show', $user->roll_number) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
