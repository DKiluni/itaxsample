@extends('layouts.app')

@section('title', 'Excise Goods License - Not Allowed')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="form-container-red" style="margin-top: 50px;">
    <div class="amendment-banner-wizard">
        Excise Goods License
    </div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Not Allowed</div>
            <div style="padding: 20px; text-align: center; font-weight: bold; font-size: 1.1rem; color: #333;">
                <i class="fas fa-exclamation-triangle" style="color: #DA3832; font-size: 2rem; margin-bottom: 15px; display: block;"></i>
                Please apply for Tax Compliance Certificate before proceeding with this application.
            </div>
        </div>
    </div>

    <div class="form-footer-grey-area">
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
    </div>
</div>
@endsection
