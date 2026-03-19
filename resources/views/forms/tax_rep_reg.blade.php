@extends('layouts.app')

@section('title', 'Tax Representative Registration - Not Available')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div style="max-width: 900px; margin: 30px auto;">
    <div class="form-container-red" style="padding: 40px 20px;">
        <div class="alert-panel" style="max-width: 700px; margin: 0 auto;">
            <div class="alert-panel-header">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="alert-panel-body">
                <div class="row">
                    <div class="col-md-6"><strong>PIN:</strong> A000000000X</div>
                    <div class="col-md-6"><strong>Name:</strong> TAXPAYER NAME</div>
                </div>
                This facility is not available for Individual Taxpayers.
            </div>
        </div>
        <div style="text-align: center; margin-top: 25px;">
            <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="border-radius: 4px; padding: 8px 30px;">Cancel</button>
        </div>
    </div>
</div>
@endsection
