@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase">
            <i class="bi bi-blockquote-right"></i>
            Categories
        </h4>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Create New Category
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create New Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="category_create_form" action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="mb-1">Category Title</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Enter Category Title...">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
                        <button form="category_create_form" type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card rounded-sm">
        <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('category.edit', $category->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
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
