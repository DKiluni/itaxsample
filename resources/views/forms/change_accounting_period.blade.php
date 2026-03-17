@extends('layouts.app')

@section('title', 'Change Accounting Period')
@section('header', 'Change Accounting Period')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="form-container">
    <div class="warning-box">
        <div class="warning-header">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="warning-body">
            This facility is not available for Individual Taxpayers.
        </div>
    </div>
    
    <div class="back-btn-container">
        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
    </div>
</div>
@endsection


