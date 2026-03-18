@extends('layouts.app')

@section('title', 'Inventory Refund')
@section('header', 'Inventory Refund')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .alert-panel {
            border: 1px solid #dc3545;
            border-radius: 4px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .alert-panel-header {
            background-color: #dc3545;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .alert-panel-body {
            padding: 15px;
            text-align: center;
            font-weight: bold;
            color: #000;
        }
        .btn-cancel-red {
            background-color: #d9534f;
            color: #fff;
            padding: 8px 30px;
            border-radius: 4px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
@endpush

@section('content')
<div class="form-container-red" style="padding: 40px 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 200px;">
    <div class="alert-panel" style="width: 100%; max-width: 800px; margin-bottom: 30px;">
        <div class="alert-panel-header">
            <i class="fas fa-exclamation-triangle" style="color: #ffc107; font-size: 24px;"></i>
        </div>
        <div class="alert-panel-body">
            Taxpayer is not registered in Value Added Tax or not registered for Value Added Tax within 3 months.
        </div>
    </div>

    <div>
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
    </div>
</div>
@endsection


