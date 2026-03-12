@extends('layouts.app')

@section('title', 'Setoff Advance Payment')
@section('header', 'Setoff Advance Payment')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
@php
    $showUnauthorized = true; // Toggle this to show the unauthorized view
@endphp

@if($showUnauthorized)
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
        <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
    </div>
</div>
@else
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Setoff Advance Payment / Offset Overpayment</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Advance Payment PRN Details / Offset Voucher Details</div>
            <div class="radio-group-container-custom">
                <label class="radio-label-custom">
                    <input type="radio" name="offset_type" checked> Payment Registration No(PRN)
                </label>
                <label class="radio-label-custom">
                    <input type="radio" name="offset_type"> Overpayment/Refund Adjustment Voucher(OAV/RAV)
                </label>
            </div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Taxpayer PIN</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Tax Payer Name</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">PRN/OAV/RAV Amount (Ksh)</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Reconciliation/Voucher Date</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Utilized Setoff Amounts (Ksh)</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Obligation</td>
                        <td class="input-cell">
                            <select class="form-select-custom">
                                <option>--Select--</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
        </div>
    </div>
</div>
@endif
@endsection