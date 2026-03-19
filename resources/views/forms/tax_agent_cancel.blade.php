@extends('layouts.app')

@section('title', 'Tax Agent Cancellation - Not Available')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="form-container-red" style="margin-top: 50px;">
    <div class="amendment-banner-wizard">
        Tax Agent Cancellation
    </div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Not Available</div>
            <div style="padding: 20px; text-align: center; font-weight: bold; font-size: 1.1rem; color: #333;">
                <i class="fas fa-exclamation-triangle" style="color: #DA3832; font-size: 2rem; margin-bottom: 15px; display: block;"></i>
                <div style="margin-bottom: 20px;">
                    <strong>PIN:</strong> A000000000X &nbsp;&nbsp;&nbsp; <strong>Name:</strong> TAXPAYER NAME
                </div>
                This facility is not available for Individual Taxpayers.
            </div>
        </div>
    </div>

    <div class="form-footer-grey-area">
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
    </div>
</div>
@endsection
