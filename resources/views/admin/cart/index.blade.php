@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase">
            <i class="bi bi-cart"></i>
            Cart
        </h4>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#user_id_model">
            Check Out
        </button>
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

    <div class="card rounded-sm bg-white">
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $cart)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $cart->book->book_image) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $cart->book->title }}</span>
                                </div>
                            </td>
                            <td>{{ $cart->book->author }}</td>
                            <td class={{ $cart->book->category ? '' : 'text-black-50' }}>
                                {{ $cart->book->category ? $cart->book->category->title : 'uncategorize' }}</td>
                            <td>
                                <form action="{{ route('carts.destroy', $cart->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
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
