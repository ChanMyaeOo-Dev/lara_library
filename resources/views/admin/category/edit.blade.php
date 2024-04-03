@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('category.index') }}" class="btn btn-sm btn-outline-dark text-decoration-none me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Categories Edit
        </h4>
    </div>

    <div class="card bg-white rounded-sm w-50">
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="mb-1">Category Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $category->title }}"
                        placeholder="Enter Category Title...">
                </div>
                <button class="btn btn-primary float-end">Update</button>
            </form>
        </div>
    </div>
@endsection
