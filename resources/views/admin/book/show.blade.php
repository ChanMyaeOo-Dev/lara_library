@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('books.index') }}" class="btn btn-sm btn-outline-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            {{ $book->title }}
        </h4>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="user_id_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="user_id_modelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="user_id_modelLabel">Enter User Id</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="user_id_form" action="{{ route('transistions.create') }}" method="GET" target="_blank">
                        <input form="user_id_form" type="hidden" name="book" value="{{ $book->id }}">
                        <div class="mb-3">
                            <label for="" class="mb-1">User Id</label>
                            <input form="user_id_form" type="text" name="user_id" class="form-control"
                                placeholder="Enter User Id...">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button form="user_id_form" type="submit" data-bs-dismiss="modal"
                        class="btn btn-primary">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex gap-3">
        <div class="card w-75 rounded-sm bg-white p-2">
            <div class="card-body">
                <p class="fs-4 mb-3 fw-bold">Book Details</p>

                <div class="d-flex gap-4">
                    <img src="{{ asset('storage/' . $book->book_image) }}" class="shadow-sm rounded object-fit-cover"
                        style="width: 300px;height: 300px;">

                    <div class="">
                        <p class="fs-3 mb-1">{{ $book->title }}</p>
                        <div class="mb-3">
                            <span class="badge text-bg-info">{{ $book->author }}</span>
                            <span class="badge text-bg-warning">{{ $book->category->title }}</span>
                        </div>
                        <p class="fs-6 mb-2 text-black-50">Description</p>
                        <p id="description" class="fs-5 mb-3 pe-3" style="text-align: justify;">
                            {{ $book->description }}
                        </p>

                        <p class="mb-3 fs-6">
                            Stock: {{ $book->qty }} books
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#user_id_model">
                            Borrow Now
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="card w-25 rounded-sm bg-white p-2">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="">
                    <p class="fs-4 mb-3 fw-bold">Borrowing Detail</p>
                    <p class="fs-6 mb-2">
                        <i class="bi bi-clock"></i>
                        Duration
                    </p>
                    <p class="fs-6">{{ $setting->borrowing_duration . ' days' }}</p>

                    <hr class="px-3 my-3">

                    <p class="fs-6 mb-2">
                        <i class="bi bi-hourglass-bottom"></i>
                        Fine
                    </p>
                    <p class="fs-6">{{ $setting->fine_rate . ' Kyats per day.' }}</p>

                    <hr class="px-3 my-3">
                </div>
                <a href="{{ route('settings.index') }}" class="btn lg_btn btn-dark w-100">
                    <i class="bi bi-gear"></i>
                    Change Settings
                </a>
            </div>
        </div>
    </div>
@endsection
