@extends('layouts.app')

@section('title', 'Consult Payments')
@section('header', 'Consult Payments')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Consult Payments</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Search Criteria</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Case Type<span class="required-star">*</span></td>
                        <td class="input-cell" colspan="3">
                            <select class="form-select-custom" required>
                                <option>Payment</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000X" required>
                        </td>
                        <td class="label-cell">Payment Registration Number</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Withholding Agency Number</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Payment Status</td>
                        <td class="input-cell">
                            <select class="form-select-custom">
                                <option>All</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">From Date</td>
                        <td class="input-cell">
                            <div class="search-filter-row-custom">
                               <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY" required>
                            </div>
                        </td>
                        <td class="label-cell">To Date</td>
                        <td class="input-cell">
                            <div class="search-filter-row-custom">
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY" required>
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
                            <span id="stampQuestion" style="color: red; font-weight: bold; font-size: 1.1rem;">114 - 13 ?</span>
                                <input type="text" class="form-input-custom" style="width: 80px; background: #f0f0f0;" required>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Back</button>
            <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
        </div>
    </div>
</div>

@push('scripts')
    <!-- Flatpickr JS -->
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