@extends('layouts.dashboard_layout')

@section('content')
    <div class="my-4 d-flex align-items-center justify-content-between">
        <h4 class="text-uppercase mb-0">
            <i class="bi bi-gear me-1"></i>
            General Settings
        </h4>
        <button form="setting_form" type="submit" class="btn lg_btn btn-dark">
            Save Changes
        </button>
    </div>

    <div class="card rounded-sm bg-white">
        <div class="card-body">
            <form action="{{ route('settings.update', $setting->id) }}" id="setting_form" method="POST">
                @csrf
                @method('PUT')
            </form>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Borrowing Duration (days)</td>
                        <td>
                            <input form="setting_form" type="text" class=" form-control"
                                value="{{ $setting->borrowing_duration }}" name="borrowing_duration" required>
                        </td>
                    </tr>

                    <tr>
                        <td>Fine Rate (Kyats / day)</td>
                        <td>
                            <input form="setting_form" type="text" class=" form-control"
                                value="{{ $setting->fine_rate }}" name="fine_rate" required>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
