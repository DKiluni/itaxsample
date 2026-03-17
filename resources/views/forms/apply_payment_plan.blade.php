@extends('layouts.app')

@section('title', 'Apply Payment Plan')
@section('header', 'Apply Payment Plan')

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
    <div class="tabs-container">
        <div class="tab-item active" id="tab-A" onclick="showSection('A')">Section-A</div>
        <div class="tab-item" id="tab-B" onclick="showSection('B')">Section-B</div>
    </div>

    <div class="tab-content-wrapper">
        <!-- Section A Content -->
        <div id="section-A" class="tab-pane active">
            <div class="form-header-banner">New Payment Plan Application</div>
            <div class="form-body">
                <div class="section-group">
                    <div class="section-group-title">Applicant Information</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="3">
                                    <select class="form-select-custom" required>
                                        <option>Taxpayer</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="A000000000X" required>
                                </td>
                                <td class="label-cell">TAXPAYER NAME</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="TAXPAYER NAME">
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Mobile Number<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="0712345678" required>
                                </td>
                                <td class="label-cell">Tax Service Office</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="DUMMY TSO">
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Secondary Email Address</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom">
                                </td>
                                <td class="label-cell">Email Address</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="DUMMY@EXAMPLE.COM">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">PaymentPlan Details</div>
                    <div class="form-flex-center-gap">
                        <span>Tax Obligation(s)<span class="required-star">*</span></span>
                        <select class="form-select-custom width-300" required>
                            <option>--Select--</option>
                        </select>
                    </div>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Liability Details</div>
                    <div style="overflow-x: auto;">
                        <table class="table-custom-standard">
                            <thead class="thead-custom-gray">
                                <tr>
                                    <th class="th-custom-border">Tax Period(s)</th>
                                    <th class="th-custom-border">Principal Tax(Kshs)</th>
                                    <th class="th-custom-border">Fines Tax(Kshs)</th>
                                    <th class="th-custom-border">Interest (Ksh)</th>
                                    <th class="th-custom-border">Penalty (Ksh)</th>
                                    <th class="th-custom-border">Total Liability(Ksh)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" class="td-custom-placeholder"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-footer-buttons">
                        <button type="button" class="btn-custom btn-next-green" onclick="showSection('B')">Next</button>
                        <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section B Content -->
        <div id="section-B" class="tab-pane">
            <div class="form-header-banner">New Payment Plan Application</div>
            <div class="form-body" style="padding-top: 10px;">
                <table class="table-custom-standard" style="margin-bottom: 20px;">
                    <thead class="thead-custom-black">
                        <tr>
                            <th class="th-custom-border">Sr.No.</th>
                            <th class="th-custom-border">Tax Obligation(s)</th>
                            <th class="th-custom-border">Tax Period</th>
                            <th class="th-custom-border">Principal Tax (Ksh)</th>
                            <th class="th-custom-border">Fine (Ksh)</th>
                            <th class="th-custom-border">Interest (Ksh)</th>
                            <th class="th-custom-border">Penalty (Ksh)</th>
                            <th class="th-custom-border">Total Liability (Ksh)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" class="td-custom-placeholder"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="section-group">
                    <div class="section-group-title">New Payment Plan Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Total Tax<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom text-right" value="0" required>
                                </td>
                                <td class="label-cell">No. Of Installments<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom text-right" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Amount per Installment<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom text-right" value="0" required>
                                </td>
                                <td class="label-cell">Installment Frequency<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom" required>
                                        <option>Monthly</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Date of First Installment<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY" required>
                                </td>
                                <td class="label-cell"></td>
                                <td class="input-cell"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="disclaimer-container">
                    <span class="disclaimer-title">Disclaimer</span>
                    <div class="disclaimer-box" style="margin-top: 5px; margin-bottom: 10px;">
                        To avoid any inconvenience, kindly take note of the following:<br>
                        Ensure that all valid outstanding debts are fully included in your payment plan application.<br>
                        Any valid debt not captured will prevent you from obtaining a Tax Compliance Certificate (TCC), applying for refunds, or having any active agency notice lifted.
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; padding: 5px 0;">
                        <input type="checkbox" id="agreeCheckbox">
                        <label for="agreeCheckbox" class="form-legend-custom" style="font-weight: bold; cursor: pointer;">I agree to the given terms and conditions</label>
                    </div>
                    <div class="form-footer-buttons">
                        <button type="button" class="btn-custom btn-prev-green" onclick="showSection('A')">Previous</button>
                        <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    function showSection(section) {
        document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.tab-item').forEach(el => el.classList.remove('active'));
        
        if(section === 'A') {
            document.getElementById('section-A').classList.add('active');
            document.getElementById('tab-A').classList.add('active');
        } else {
            document.getElementById('section-B').classList.add('active');
            document.getElementById('tab-B').classList.add('active');
        }
    }

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


