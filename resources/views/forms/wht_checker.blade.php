@extends('layouts.app')

@section('title', 'WHT Checker')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush



@section('content')
<div id="formSectionContainer">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container">
        <div class="form-header-banner">
            Verify Withholding Certificate
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Verify Withholding Certificate</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Type Of Obligation<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <select class="form-select-custom" style="max-width: 300px;" required>
                                    <option value="">--Select--</option>
                                    <option>IT Withholding</option>
                                    <option>VAT Withholding</option>
                                    <option>MRI Withholding</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Withholder PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                            <td class="label-cell">Payee PIN</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Withholding Certificate Number<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                            <td class="label-cell">Date of Certificate</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Security Stamp<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <div class="search-filter-row-custom">
                                    <div onclick="refreshStamp()" style="cursor: pointer;">
                                        <i class="fas fa-sync-alt" style="color: #4CAF50; display: block;"></i>
                                    </div>
                                    <span id="stampQuestion" style="color: red; font-weight: bold; font-size: 1.1rem;"></span>
                                    <input type="text" class="form-input-custom" style="width: 80px; background: #f0f0f0;" required>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="btn-row">
                <button type="submit" class="btn-custom btn-submit-orange">Verify</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.href='{{ route('dashboard') }}'">Home</button>
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.reload()">Reset</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr(".datepicker", {
            dateFormat: "d/m/Y",
            allowInput: true,
            disableMobile: true
        });
        refreshStamp();
    });

    function refreshStamp() {
        const n1 = Math.floor(Math.random() * 100) + 10;
        const n2 = Math.floor(Math.random() * 10) + 1;
        const isAddition = Math.random() > 0.5;
        const question = isAddition ? `${n1} + ${n2} ?` : `${n1} - ${n2} ?`;
        document.getElementById('stampQuestion').innerText = question;
    }
</script>
@endpush



