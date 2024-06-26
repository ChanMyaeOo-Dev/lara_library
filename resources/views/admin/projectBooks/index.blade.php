@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase text-primary me-1 fw-bold">
            <i class="bi bi-book me-1"></i>
            Project Books
        </h4>
        <a href="{{ route('project-books.create') }}" type="button" class="btn lg_btn btn-primary">
            Add New Book
        </a>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Title <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Category <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->created_at->format('M/d/Y') }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $book->cover_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $book->title }}</span>
                                </div>
                            </td>
                            <td class={{ $book->category ? '' : 'text-black-50' }}>
                                {{ $book->category ? $book->category : 'uncategorize' }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('project-books.show', $book->slug) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>
                                    <a href="{{ route('project-books.edit', $book->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('project-books.destroy', $book->id) }}" method="POST">
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
