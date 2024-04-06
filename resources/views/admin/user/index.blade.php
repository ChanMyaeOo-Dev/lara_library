@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase">
            <i class="bi bi-blockquote-right"></i>
            users
        </h4>
        <a href="{{ route('users.create') }}" type="button" class="btn lg_btn btn-primary">
            Add New User
        </a>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">

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
                    @foreach ($users as $user)
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
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-dark me-1">
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
