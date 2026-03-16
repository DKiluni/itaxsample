@extends('layouts.app')

@section('title', 'Consult and Reprint TCC')
@section('header', 'Consult and Reprint TCC')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        CONSULT AND REPRINT TAX COMPLIANCE CERTIFICATE
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Certificate Details</div>
            <table class="inner-profile-table table-4-col">
                <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">Certificate Serial Number</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom">
                </td>
                <td class="label-cell" style="width: 25%;">PIN of Taxpayer<span class="required-star">*</span></td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="A013758466Z" required>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Date of expiry</td>
                <td class="input-cell">
                    <input type="text" class="form-input-custom datepicker" style="width: 292px;" placeholder="DD/MM/YYYY" required>
                </td>
                <td class="label-cell">Date of Certificate</td>
                <td class="input-cell">
                    <input type="text" class="form-input-custom datepicker" style="width: 292px;" placeholder="DD/MM/YYYY" required>
                </td>
            </tr>
        </tbody>
            </table>
        </div>

        <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin-bottom: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
            <button type="button" class="btn-custom btn-submit-orange">Consult</button>
        </div>
    </div>
</div>

@endsection
