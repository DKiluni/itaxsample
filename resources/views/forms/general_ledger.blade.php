@extends('layouts.app')

@section('title', 'General Ledger')
@section('header', 'General Ledger')

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
            GENERAL LEDGER
        </div>

        <div class="form-body form-body-padded">
            <!-- Taxpayer Detail Section -->
            <div class="section-group">
                <div class="section-group-title">Taxpayer Detail</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%;">PIN<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%;">
                                <input type="text" class="form-input-custom" value="A013758466Z" readonly>
                            </td>
                            <td class="label-cell" style="width: 25%;">Name</td>
                            <td class="input-cell" style="width: 25%;">
                                <input type="text" class="form-input-custom" value="DAVID KILUNI MWANIKI" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Search Parameters Section -->
            <div class="section-group">
                <div class="section-group-title">Search Parameters</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%;">Transaction Type</td>
                            <td class="input-cell" style="width: 25%;">
                                <select class="form-input-custom">
                                    <option value="">--Select--</option>
                                    <option value="Payment">Payment</option>
                                    <option value="Penalty">Penalty</option>
                                    <option value="Interest">Interest</option>
                                    <option value="Fine">Fine</option>
                                    <option value="Self Assessment">Self Assessment</option>
                                    <option value="Additional Assessment">Additional Assessment</option>
                                    <option value="Default Assessment">Default Assessment</option>
                                </select>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Account Type<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-input-custom" required>
                                    <option value="">--Select--</option>
                                    <option value="Taxpayer Main Account">Taxpayer Main Account</option>
                                    <option value="Advance Payment">Advance Payment</option>
                                    <option value="Payment Plan Installment">Payment Plan Installment</option>
                                    <option value="Refund Payable Account">Refund Payable Account</option>
                                    <option value="Refund Application Account">Refund Application Account</option>
                                    <option value="Taxpayer Legacy Account">Taxpayer Legacy Account</option>
                                </select>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Tax Head/Sub Head<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-input-custom" required>
                                    <option value="">--Select--</option>
                                    <option value="(0101)Income Tax - Resident Individual">(0101)Income Tax - Resident Individual</option>
                                    <option value="(0602)Agency Notice">(0602)Agency Notice</option>
                                    <option value="(0501)Advance Tax">(0501)Advance Tax</option>
                                    <option value="(0601)Excise Cash Bond">(0601)Excise Cash Bond</option>
                                    <option value="(0202)VAT on Services Imported">(0202)VAT on Services Imported</option>
                                    <option value="(0105)Income Tax - Withholding">(0105)Income Tax - Withholding</option>
                                    <option value="(0109)Income Tax - Transmission of Messages">(0109)Income Tax - Transmission of Messages</option>
                                    <option value="(0203)VAT - Withholding">(0203)VAT - Withholding</option>
                                    <option value="(0110)Capital Gain Tax (CGT)">(0110)Capital Gain Tax (CGT)</option>
                                    <option value="(0112)Income Tax - Amnesty">(0112)Income Tax - Amnesty</option>
                                    <option value="(0113)Income Tax - Rent Income Withholding">(0113)Income Tax - Rent Income Withholding</option>
                                    <option value="(0601)National Hospital Insurance Fund(NHIF)">(0601)National Hospital Insurance Fund(NHIF)</option>
                                    <option value="(0121)TOT for Partner">(0121)TOT for Partner</option>
                                    <option value="(0144)Digital Service Tax (DST)">(0144)Digital Service Tax (DST)</option>
                                    <option value="(0108)Income Tax Shipping Tax">(0108)Income Tax Shipping Tax</option>
                                    <option value="(0145)Digital Asset Tax (DAT)">(0145)Digital Asset Tax (DAT)</option>
                                    <option value="(0111)Income Tax - Rent Income (MRI)">(0111)Income Tax - Rent Income (MRI)</option>
                                    <option value="(0403)Import Certificate Fees">(0403)Import Certificate Fees</option>
                                    <option value="(0147)Significant Economic Presence Tax (SEP)">(0147)Significant Economic Presence Tax (SEP)</option>
                                </select>
                            </td>
                            <td class="label-cell">Tax Period<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-input-custom" required>
                                    <option value="">--Select--</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Transaction From Date</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                            </td>
                            <td class="label-cell">Transaction To Date</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row" style="text-align: center; background-color: #fff; padding: 10px; margin-top: 20px;">
                <button type="submit" class="btn-custom btn-submit-orange" style="margin-right: 10px;">Show Ledger</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
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
        });
    </script>
@endpush



