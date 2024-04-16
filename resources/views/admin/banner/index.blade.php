@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase text-primary me-1 fw-bold">
            <i class="bi bi-images me-1"></i>
            Banners
        </h4>
        <a href="{{ route('banners.create') }}" type="button" class="btn lg_btn btn-primary">
            Add New Banner
        </a>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Image <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Descripton <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $banner->image) }}"
                                    class="me-2 rounded border border-1 object-fit-cover" style="width: 105px;height:45px;">
                            </td>
                            <td>{{ Str::words($banner->description, 10, '...') }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('banners.edit', $banner->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
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
