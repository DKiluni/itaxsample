@extends('layouts.app')

@section('title', 'View Filed Return')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="form-container">
        <div class="form-header-banner">Consult e-Returns</div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 20%;">Acknowledgement No</td>
                            <td class="input-cell" style="width: 30%;">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style="width: 20%;">Type of Return</td>
                            <td class="input-cell" style="width: 30%;">
                                <select class="form-select-custom">
                                    <option value="">-- Select --</option>
                                    <option value="Original">Original</option>
                                    <option value="Amended">Amended</option>
                                    <option value="Resubmission NSSF">Resubmission NSSF</option>
                                    <option value="Supplementary">Supplementary</option>
                                    <option value="Both (Supplementary/Amended)">Both (Supplementary/Amended)</option>
                                    <option value="Additional Assessment">Additional Assessment</option>
                                    <option value="Default Assessment">Default Assessment</option>
                                    <option value="Appended">Appended</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Tax Obligation</td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option value="">-- Select --</option>
                                    <option value="Income Tax Withholding">Income Tax Withholding</option>
                                    <option value="Income Tax - Rent Income (MRI)">Income Tax - Rent Income (MRI)</option>
                                    <option value="Income Tax - Resident Individual">Income Tax - Resident Individual</option>
                                    <option value="Income Tax - Non-Resident Individual">Income Tax - Non-Resident Individual</option>
                                </select>
                            </td>
                            <td class="label-cell">Entity Type</td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option value="">-- Select --</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Return Period from</td>
                            <td class="input-cell">
                                <div class="search-filter-row-custom" style="padding: 0;">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                            <td class="label-cell">Return Period to</td>
                            <td class="input-cell">
                                <div class="search-filter-row-custom" style="padding: 0;">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row" style="justify-content: center; gap: 10px; margin-top: 20px;">
                <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.reload()">Clear</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr(".datepicker", {
            dateFormat: "d/m/Y",
            allowInput: true,
            disableMobile: true
        });
    });
</script>
@endpush
@endsection



