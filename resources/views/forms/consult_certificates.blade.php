@extends('layouts.app')

@section('title', 'Consult and Reprint Acknowledgement Receipt and Certificates')
@section('header', 'Consult and Reprint Acknowledgement Receipt and Certificates')
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
            Consult and Reprint Acknowledgement Receipt Form
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Section A Taxpayer details</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell">PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" value="AXXXXXXXXXZ">
                            </td>
                            <td class="label-cell">Taxpayer Name <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" value="DUMMY TAXPAYER NAME">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Address<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <textarea class="form-input-custom" rows="3">DUMMY ADDRESS, CITY, DISTRICT</textarea>
                            </td>
                            <td class="label-cell">Email Id <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" value="dummy@example.com">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group">
                <div class="section-group-title">Consult Criteria</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell">Business Process<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                    <option>Payment</option>
                                    <option>Taxpayer Registration</option>
                                    <option>Taxpayer Return Processing</option>
                                    <option>Taxpayer Credit and Refund</option>
                                    <option>Assessment and Taxpayer Services</option>
                                    <option>Debt and Enforcement</option>
                                    <option>Certificates</option>
                                    <option>Payment Plan Processing</option>
                                    <option>Audit</option>
                                    <option>Compliance and Monitoring</option>
                                </select>
                            </td>
                            <td class="label-cell">Business Sub Process<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Obligation Name</td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                    <option>Advance Tax</option>
                                    <option>Agency Notice</option>
                                    <option>AWWDA Bulk Water Supply Revenue</option>
                                    <option>Capital Gain Tax (CGT)</option>
                                    <option>Digital Asset Tax (DAT)</option>
                                    <option>Digital Service Tax (DST)</option>
                                    <option>Excise</option>
                                    <option>Excise Cash Bond</option>
                                    <option>Excise License Fee</option>
                                    <option>Foreign Amnesty</option>
                                    <option>Gaming and Pool Betting</option>
                                    <option>Housing Levy</option>
                                    <option>Import Certificate Fees</option>
                                    <option>Income Tax - Amnesty</option>
                                    <option>Income Tax - Company</option>
                                    <option>Income Tax - Non-Resident Individual</option>
                                    <option>Income Tax - Partnership</option>
                                    <option>Income Tax - PAYE</option>
                                    <option>Income Tax - Rent Income (MRI)</option>
                                    <option>Income Tax - Rent Income Withholding</option>
                                    <option>Income Tax - Resident Individual</option>
                                    <option>Income Tax - Shipping Tax</option>
                                    <option>Income Tax - Transmission of Messages</option>
                                    <option>Income Tax - Turnover Tax</option>
                                    <option>Income Tax - Withholding</option>
                                    <option>Intermediate Agent Registration License Fee</option>
                                    <option>Land Rates/ Lease Hold - Kiambu</option>
                                    <option>Land Rates/ Lease Hold - Laikipia</option>
                                    <option>Land Rates/ Lease Hold - Makueni</option>
                                    <option>Land Rent</option>
                                    <option>National Hospital Insurance Fund(NHIF)</option>
                                    <option>National Social Security Fund (NSSF)</option>
                                    <option>National Social Security Fund (NSSF)- Daily Rate</option>
                                    <option>National Social Security Fund (NSSF)- Regular</option>
                                    <option>NITA Levy</option>
                                    <option>Significant Economic Presence Tax (SEP)</option>
                                    <option>Single Business Permit - Kiambu</option>
                                    <option>Single Business Permit - Laikipia</option>
                                    <option>Single Business Permit - Makueni</option>
                                    <option>Standard Levy</option>
                                    <option>Sugar Development Levy</option>
                                    <option>TOT for Partner</option>
                                    <option>Value Added Tax (VAT)</option>
                                    <option>VAT on Services Imported</option>
                                    <option>VAT - Withholding</option>
                                    <option>Widows and Children's Pension Scheme (WCPS)</option>
                                </select>
                            </td>
                            <td class="label-cell">Acknowledgement/License/Notice/Unique Reference Number</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Acknowledgement Date From</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                            <td class="label-cell">Acknowledgement Date To</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Tax Period From</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                            <td class="label-cell">Tax Period To</td>
                            <td class="input-cell">
                                <div class="date-input-wrapper">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Back</button>
                <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Reset</button>
            </div>

            <div class="section-group" style="margin-top: 20px;">
                <div class="section-group-title">Output</div>
                <div style="font-size: 0.85rem; margin-bottom: 5px; font-weight: bold;">
                    Total Records : 0 <span style="float: right;">Current Page : 1 / 0</span>
                    <div style="clear: both;"></div>
                </div>
                <table class="inner-profile-table table-header-black">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Acknowledgement No.</th>
                            <th>Acknowledgement Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align: center; padding: 20px; color: #666;">No records found</td>
                        </tr>
                    </tbody>
                </table>
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



