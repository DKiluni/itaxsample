@extends('layouts.app')

@section('title', 'TCC/Exemption Checker')
@section('header', 'TCC/Exemption Checker')

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
            Authenticate TCC/Exemption Certificate/Excise License/Certificate Checker
        </div>

        <div class="form-body form-body-padded">
            <div class="form-description">
                The Certificate Checker allows you to confirm the validity of a Tax Compliance Certificate (TCC)/Exemption Certificate/Excise License. By entering a certificate/license Number,the system will generate and display the PIN, Name of the Holder and the Certificate/License status. Please enter your Certificate/License Number in the input box below.
            </div>
            
            <div class="section-group">
                <div class="section-group-title">Verify Certificate</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Type Of Certificate<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                    <option>Tax Compliance Certificate (TCC)</option>
                                    <option>IT Exemption Certificate</option>
                                    <option>Excise License Number</option>
                                    <option>Tax Relief Scheme Checker</option>
                                    <option>VAT Exemption Certificate</option>
                                    <option>Spirits and Illuminating Kerosene Checker</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Certificate/License Number<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Security Stamp<span class="required-star">*</span></td>
                            <td class="input-cell">
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
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Reset</button>
                <button type="submit" class="btn-custom btn-submit-orange">Verify</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
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
@endsection



