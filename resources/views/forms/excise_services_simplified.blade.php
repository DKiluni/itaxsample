@extends('layouts.app')

@section('title', 'Excise (Services Only)')
@section('header', 'Excise (Services Only)')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="form-container" style="padding: 20px;">
    <div class="alert-panel">
        <div class="alert-panel-header">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="alert-panel-body">
            You Do not have Excise Obligation.
        </div>
    </div>
    <div class="alert-panel-action">
        <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
    </div>
</div>
@endsection



