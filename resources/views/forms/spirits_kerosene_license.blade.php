@extends('layouts.app')

@section('title', 'Spirits & Illuminating Kerosene License - Not Allowed')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div style="max-width: 900px; margin: 30px auto;">
    <div class="not-allowed-panel">
        <div class="not-allowed-header">
            <i class="fas fa-check-circle"></i>
            <span>Not Allowed</span>
        </div>
        <div class="not-allowed-body">
            Please apply for Tax Compliance Certificate before proceeding with this application.
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="border-radius: 4px; padding: 8px 30px;">Back</button>
    </div>
</div>
@endsection
