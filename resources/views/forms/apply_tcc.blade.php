@extends('layouts.app')

@section('title', 'Application for Tax Compliance Certificate')
@section('header', 'Application for Tax Compliance Certificate')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        TAX COMPLIANCE CERTIFICATE
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Application Details</div>
            <table class="inner-profile-table table-4-col">
                <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">PIN of Taxpayer</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="A000000000X" readonly>
                </td>
                <td class="label-cell" style="width: 25%;">Name of Taxpayer</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="David Kiluni Mwaniki" readonly>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Reason for Application<span class="required-star">*</span></td>
                <td class="input-cell" colspan="4">
                    <select class="form-select-custom" required>
                        <option>--Select--</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
        </div>

    <fieldset style="border: 1px solid #ccc; padding: 10px; margin: 15px; background: #fff;">
        <legend style="font-size: 0.9rem; font-weight: bold; width: auto; border: none; margin-bottom: 5px; padding: 0 5px;">Details of Pending Returns</legend>
        <div style="display: flex; justify-content: space-between; padding: 5px; background-color: #f9f9f9;">
            <div style="width: 45%;">Income Tax - Rent Income (MRI)</div>
            <div style="width: 45%; text-align: center; color: #666;">Details of Pending Liability</div>
        </div>
    </fieldset>

    <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 15px;">
        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
        <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
        <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
    </div>
    </div>
</div>

@endsection


