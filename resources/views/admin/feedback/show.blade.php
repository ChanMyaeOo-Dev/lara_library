@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center">
        <a href="{{ route('feedbacks.index') }}" class="btn btn-sm btn-dark me-2">
            <i class="bi bi-arrow-left"></i>
        </a>
        <h4 class="text-uppercase mb-0">
            Feedback
        </h4>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <p class="text-dark fs-6 mb-3">
                Feedback by : <a href="{{ route('users.show', $feedback->user->roll_number) }}"
                    class="text-decoration-none">{{ $feedback->user->name }}</a>
            </p>

            <p class="text-dark fs-6 bg-light mb-0 p-3 border border-1 rounded">
                {{ $feedback->message }}
            </p>

        </div>
    </div>
@endsection
