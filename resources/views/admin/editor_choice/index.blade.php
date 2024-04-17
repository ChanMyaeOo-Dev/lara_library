@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase text-primary me-1 fw-bold">
            <i class="bi bi-star me-1"></i>
            Editor Choices
        </h4>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Book <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Descripton <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($editorChoices as $editorChoice)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $editorChoice->book->book_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $editorChoice->book->title }}</span>
                                </div>
                            </td>
                            <td>{{ Str::words($editorChoice->book->description, 5, '...') }}</td>
                            <td>
                                <form action="{{ route('editor_choices.destroy', $editorChoice->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-dark">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
