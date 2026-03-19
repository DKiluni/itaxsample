@extends('layouts.app')

@section('title', 'Register/Update Property in eRits')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .red-fieldset {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px;
            border-radius: 4px;
        }
        .red-legend {
            color: #DA3832;
            font-weight: bold;
            font-size: 1rem;
            width: auto;
            padding: 0 5px;
            border: none;
            margin-bottom: 0;
        }
    </style>
@endpush

@section('content')
<div class="form-container" style="border: 1px solid #DA3832; border-radius: 4px; box-shadow: none; overflow: hidden; margin-top: 20px;">
    <div class="form-header-banner" style="background-color: #DA3832; color: #fff; text-align: center; padding: 10px; font-weight: bold; font-size: 1.1rem; text-transform: uppercase;">
        REGISTER/UPDATE PROPERTY IN ERITS
    </div>

    <div class="form-body" style="padding: 5px;">
        <fieldset class="red-fieldset">
            <div style="text-align: center; padding: 25px 15px 15px 15px; font-size: 15px; color: #333;">
                Your are now being redirected to eRits system. Please log in using your eCitizen credentials to continue.
            </div>
            
            <div style="text-align: center; padding: 10px 15px 25px 15px;">
                <button type="button" class="btn-custom btn-submit-orange" style="padding: 10px 40px; text-transform: none;" onclick="window.open('https://erits.kra.go.ke', '_blank')">Click here to proceed</button>
            </div>
        </fieldset>

        <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
        </div>
    </div>
</div>
@endsection
