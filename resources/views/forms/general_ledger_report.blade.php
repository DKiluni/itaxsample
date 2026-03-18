@extends('layouts.app')

@section('title', 'General Ledger Report')
@section('header', 'General Ledger Report')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .report-filter-row {
            background: repeating-linear-gradient(
                0deg,
                #f9f9f9,
                #f9f9f9 2px,
                #ffffff 2px,
                #ffffff 4px
            );
            border: 1px solid #ddd;
            padding: 10px;
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 0.85rem;
            margin-top: 5px;
        }
        .export-links-area {
            border: 1px solid #ddd;
            border-top: none;
            padding: 8px 15px;
            background-color: #fff;
            display: flex;
            gap: 15px;
        }
        .export-link-item {
            display: flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            color: #333;
            font-size: 0.85rem;
        }
        .export-link-item img {
            height: 18px;
        }
    </style>
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="form-container">
        <div class="form-header-banner">General Ledger Report</div>

        <div class="form-body" style="padding: 10px 20px;">
            <!-- Search Parameters Section -->
            <div class="section-group">
                <div class="section-group-title">Search Parameters</div>
                
                <table class="inner-profile-table" style="margin-bottom: 10px;">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 20%; border:none;">Tax Head/Sub Head<span class="required-star">*</span></td>
                            <td class="input-cell" style="border:none;">
                                <select class="form-input-custom" style="width: 100%;">
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
                                    <option value="ALL">ALL</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="btn-row" style="margin-top: 10px; justify-content: center;">
                    <button type="submit" class="btn-custom btn-submit-orange" style="padding: 4px 20px;">Show Ledger</button>
                    <button type="button" class="btn-custom btn-primary-blue" style="padding: 4px 20px;" onclick="window.location.reload()">Clear</button>
                </div>
            </div>

            <!-- Results Section -->
            <div class="section-group" style="margin-top: 30px;">
                <div class="section-group-title">General Ledger - Accounting Entries</div>
                
                <div class="report-filter-row">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        Group By: 
                        <select class="form-input-custom" style="width: auto; min-width: 150px;">
                            <option value="">--Select--</option>
                            <option value="Remove Grouping">Remove Grouping</option>
                            <option value="Tax Obligation">Tax Obligation</option>
                        </select>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        Account Type: 
                        <select class="form-input-custom" style="width: auto; min-width: 180px;">
                            <option value="">--Select--</option>
                            <option value="Taxpayer Main Account">Taxpayer Main Account</option>
                            <option value="Advance Payment">Advance Payment</option>
                            <option value="Payment Plan Installment Tax">Payment Plan Installment Tax</option>
                            <option value="Taxpayer Legacy Account">Taxpayer Legacy Account</option>
                            <option value="Refund Payable Amount">Refund Payable Amount</option>
                            <option value="Refund Application Account">Refund Application Account</option>
                            <option value="Voluntary Tax Disclosure Programme">Voluntary Tax Disclosure Programme</option>
                        </select>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        Transaction Type: 
                        <select class="form-input-custom" style="width: auto; min-width: 150px;">
                            <option value="">--Select--</option>
                            <option value="Payment">Payment</option>
                            <option value="Penalty">Penalty</option>
                            <option value="Interest">Interest</option>
                            <option value="Fine">Fine</option>
                            <option value="Self Assessment">Self Assessment</option>
                            <option value="Additional Assessment">Additional Assessment</option>
                            <option value="Default Assessment">Default Assessment</option>
                        </select>
                    </div>
                </div>

                <div class="export-links-area">
                    <a href="#" class="export-link-item">
                        <i class="fas fa-file-pdf" style="color: #DA3832; font-size: 1.1rem;"></i> PDF
                    </a>
                    <a href="#" class="export-link-item">
                        <i class="fas fa-file-excel" style="color: #1D6F42; font-size: 1.1rem;"></i> Excel
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



