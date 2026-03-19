@extends('layouts.app')

@section('title', 'Excise Goods License - Not Allowed')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .warning-container {
            border: 1px solid #DA3832;
            border-radius: 4px;
            overflow: hidden;
            margin-top: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .warning-header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid #000;
            font-weight: bold;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .warning-header i {
            color: #28a745;
            font-size: 1.5rem;
        }
        .warning-body {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            font-size: 1.1rem;
            color: #333;
            border-bottom: 1px solid #ddd;
        }
        .warning-footer {
            padding: 20px;
            text-align: center;
            background-color: #fff;
        }
    </style>
@endpush

@section('content')
<div style="max-width: 900px; margin: 0 auto;">
    <div class="warning-container">
        <div class="warning-header">
            <i class="fas fa-check-circle"></i>
            <span>Not Allowed</span>
        </div>
        <div class="warning-body">
            Please apply for Tax Compliance Certificate before proceeding with this application.
        </div>
        <div class="warning-footer">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
        </div>
    </div>
</div>
@endsection
