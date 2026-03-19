@extends('layouts.app')

@section('title', 'Generate Tax Type Specific Password')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="form-container">
        <div class="form-header-banner">
            Generate Tax Type Specific Password
        </div>

        <div class="form-body form-body-padded">
            <div class="warning-box-dark">
                <div class="warning-icon-header">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="warning-message-body">
                    This facility is not available for Individual Taxpayers.
                </div>
            </div>

            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Back</button>
            </div>
        </div>
    </div>
</div>
@endsection
