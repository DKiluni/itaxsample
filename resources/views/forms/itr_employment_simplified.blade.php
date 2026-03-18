@extends('layouts.app')

@section('title', 'ITR for Employment Income Only (Simplified)')
@section('header', 'ITR for Employment Income Only (Simplified)')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="form-container" style="padding: 10px;">
    <div class="unauthorized-v2-container" style="border: none; margin-bottom: 0;">
        <div class="unauthorized-v2-header">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="unauthorized-v2-body">
            You Do not have ITR for Employment Income Only Obligation.
        </div>
        <div class="unauthorized-v2-footer" style="padding-bottom: 20px;">
            <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 5px 25px; border: none; font-weight: bold;" onclick="window.history.back()">Back</button>
        </div>
    </div>
</div>
@endsection



