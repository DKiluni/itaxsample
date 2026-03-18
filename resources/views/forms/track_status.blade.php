@extends('layouts.app')

@section('title', 'Track Status of Application')
@section('header', 'Track Status of Application')

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
            Consult Status of Cases
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Case Type<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <select class="form-select-custom">
                                    <option>Amendment</option>
                                    <option>Cancellation</option>
                                    <option>Return</option>
                                    <option>Payment</option>
                                    <option>Other Registration</option>
                                    <option>Tax Credit and Refund</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell">Reference Number</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">From Date</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                            <td class="label-cell">To Date</td>
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
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
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



