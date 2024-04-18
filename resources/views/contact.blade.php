@extends('layouts.app')

@section('content')
    <div class="container pb-4">
        <div class="row min-vh-100 w-100 mx-0" id="app_layout">
            <div class="col-12 col-md-12 px-0">
                <p class="fw-bold text-primary fs-4">Contact Us</p>

                <div class="d-flex flex-column flex-md-row gap-3 w-100">
                    <div class="w-100 mb-3 mb-md-0">
                        <p class="mb-2 bg-white border border-1 rounded p-3">
                            <i class="bi bi-phone me-2"></i>
                            +959 779 866 151
                        </p>
                        <p class="mb-3 bg-white border border-1 rounded p-3">
                            <i class="bi bi-envelope me-2"></i>
                            chanmyaeoodev@gmail.com
                        </p>
                        <div class="card bg-white p-2">
                            <div class="card-body">
                                <p class="fw-normal text-dark fs-5 text-uppercase">Send us feedbacks</p>

                                <form action="{{ route('sendFeedback') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Say Something</label>
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>

                                    <button class="btn btn-dark lg_btn w-100">
                                        <i class="bi bi-send me-1"></i>
                                        Send
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white p-2 w-100">
                        <div class="card-body">
                            <iframe class="rounded"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.530229410496!2d96.12664027577925!3d16.84964541807244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194eb70b00001%3A0xb2a1f5694971b1b6!2sMICT%20Park%20Main%20Building!5e0!3m2!1sen!2smm!4v1713428528371!5m2!1sen!2smm"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="col-12 col-md-5 px-0 ps-md-3">

            </div> --}}
        </div>
    </div>
@endsection
