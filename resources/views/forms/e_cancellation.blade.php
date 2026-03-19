@extends('layouts.app')

@section('title', 'e-Cancellation')

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
<div id="formSectionContainer">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container" style="border: 1px solid #DA3832; border-radius: 4px; box-shadow: none; overflow: hidden; margin-top: 5px;">
        <div class="form-header-banner" style="background-color: #DA3832; color: #fff; text-align: center; padding: 10px; font-weight: bold; font-size: 1.1rem; text-transform: uppercase;">
            E-CANCELLATION
        </div>

        <div class="form-body" style="padding: 5px;">
            <!-- Applicant Information Section -->
            <fieldset class="red-fieldset">
                <legend class="red-legend">Applicant Information</legend>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 30%;">Applicant Type<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 70%;">
                                <select class="form-select-custom" style="width: 250px;">
                                    <option value="">--Select--</option>
                                    <option value="">Agent</option>
                                    <option value="">Legal Representative</option>
                                    <option value="">Sub Agent</option>
                                    <option value="">Tax Payer</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" style="width: 250px;">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer Name</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" style="width: 250px;" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <!-- Tax Obligation(s) to be cancelled Section -->
            <fieldset class="red-fieldset">
                <legend class="red-legend">PIN /Tax Obligation(s) to be cancelled<span class="required-star">*</span></legend>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td style="padding: 6px 10px;">
                                <label style="display: flex; align-items: center; gap: 5px; cursor: pointer; font-size: 0.9rem;">
                                    <input type="checkbox"> Taxpayer PIN
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <!-- Reason(s) for Cancellation Section -->
            <fieldset class="red-fieldset">
                <legend class="red-legend">Reason(s) for Cancellation<span class="required-star">*</span></legend>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td style="width: 35%;">Business Closed</td>
                            <td style="width: 15%; text-align: center;"><input type="checkbox"></td>
                            <td style="width: 25%;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                        <tr>
                            <td>Business Inactive</td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Business Sold/Merged</td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No Longer have Tax Liability</td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>If Others, please specify</td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <!-- Upload Document Section -->
            <fieldset class="red-fieldset">
                <legend class="red-legend">Details Of Upload Document</legend>
                <div style="border: 1px solid #eee; padding: 15px; background-color: #fafafa;">
                    <div style="font-weight: bold; margin-bottom: 10px; font-size: 0.95rem;">Upload Document</div>
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                        <span style="font-size: 0.9rem;">Upload Supporting Document for Registration<span class="required-star">*</span></span>
                        <input type="file" style="font-size: 0.9rem;">
                    </div>
                    <div style="color: #DA3832; font-size: 0.85rem; font-weight: 500;">
                        All file types are allowed. Allowed File Size:-5 MB
                    </div>
                </div>
            </fieldset>

            <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="button" class="btn-custom btn-submit-orange">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection


