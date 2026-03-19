@extends('layouts.app')

@section('title', 'Notice of intention to Appeal')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        NOTICE OF INTENTION TO APPEAL TO THE TRIBUNAL
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Taxpayer Details</div>
            <table class="inner-profile-table table-4-col">
                <tbody>
                    <tr>
                        <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell" colspan="3">
                            <select class="form-select-custom" required>
                                <option>Taxpayer</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000X" required>
                        </td>
                        <td class="label-cell">TAXPAYER NAME</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="David Kiluni Mwaniki" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-group">
            <div class="section-group-title" style="margin: 15px 15px 5px 15px;">Section B : Notice Details</div>
            <table class="inner-profile-table table-4-col" style="border: 1px solid var(--kra-border-gray);">
                <tbody>
                    <tr>
                        <td class="label-cell">Confirmed/Amended notice number from objection<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" required>
                        </td>
                        <td class="label-cell">Assessment Type</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr style="background-color: #f9f9f9;">
                        <td class="label-cell">Tax Obligation<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select class="form-select-custom" required>
                                <option>--Select--</option>
                            </select>
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
                    </tr>
                    <tr>
                        <td class="label-cell">Appellate Body<span class="required-star">*</span></td>
                        <td class="input-cell" colspan="3">
                            <select class="form-select-custom" required>
                                <option>--Select--</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
            <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
        </div>
    </div>
</div>
@endsection


