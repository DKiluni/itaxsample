@extends('layouts.app')

@section('title', 'Rent Income Withholding Agent Cancellation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .red-fieldset {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px;
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')
<div class="form-container" style="border: 1px solid #DA3832; border-radius: 4px; box-shadow: none; overflow: hidden; margin-top: 20px;">
    <div class="form-header-banner" style="background-color: #DA3832; color: #fff; text-align: center; padding: 10px; font-weight: bold; font-size: 1.1rem; text-transform: uppercase;">
        Rent Income Withholding Agent Cancellation
    </div>

    <div class="form-body" style="padding: 5px;">
        <fieldset class="red-fieldset">
            <div style="text-align: center; padding: 25px 15px 15px 15px; font-size: 15px; color: #333;">
                The PIN is not registered as Rent Income Withholding Agent. Please consult KRA Station/ nearest Itax Support Centre to be assisted.
            </div>
        </fieldset>

        <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
        </div>
    </div>
</div>
@endsection
