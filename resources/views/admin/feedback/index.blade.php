@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase text-primary me-1 fw-bold">
            <i class="bi bi-messenger me-1"></i>
            Feedbacks
        </h4>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <table id="data_table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Date <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>User <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Message <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                        <th>Action <i class="ms-2 small bi bi-arrow-down-up text-black-50"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <tr>
                            <td>
                                {{ $feedback->created_at->format('d/m/Y') }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $feedback->user->profile_picture) }}"
                                        class="me-2 rounded border border-1" style="width: 45px;height:45px;">
                                    <span>{{ $feedback->user->name }}</span>
                                </div>
                            </td>
                            <td>{{ Str::words($feedback->message, 5, '...') }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('feedbacks.show', $feedback->id) }}"
                                        class="btn btn-sm btn-outline-dark me-1">
                                        <i class="bi bi-info-square"></i>
                                    </a>
                                    <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST">
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
