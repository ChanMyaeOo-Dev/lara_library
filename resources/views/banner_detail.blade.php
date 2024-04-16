@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-9 px-0">
                <img src="{{ asset('Storage/' . $banner->image) }}" class="w-100 object-fit-cover mb-3 rounded shadow"
                    style="height: 300px;">

                <p class="mb-0 bg-light border border-1 rounded p-4 shadow-sm">
                    {{ $banner->description }}
                </p>
            </div>
            <div class="col-12 col-md-3 px-0 ps-md-3">
                <div class="card bg-white p-2 mb-3 overflow-auto h-100">
                    <div class="card-body">
                        <div class="mb-1 px-1 profile_card_item">
                            <a href="{{ route('books', 'all') }}" class="text-decoration-none">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 text-black fw-bold">Related</p>
                                </div>
                            </a>
                        </div>
                        @foreach ($banners as $banner)
                            <div
                                class="mt-3 px-1 profile_card_item {{ request()->id ? (request()->id == $banner->id ? 'category_active' : '') : '' }}">
                                <a href="{{ route('banner_detail', $banner->id) }}" class="text-decoration-none">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 text-dark">
                                            <i class="bi bi-app-indicator me-1"></i>
                                            {{ Str::words($banner->description, 2, '...') }}
                                        </p>
                                        <i class="bi bi-chevron-right text-dark small"></i>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
