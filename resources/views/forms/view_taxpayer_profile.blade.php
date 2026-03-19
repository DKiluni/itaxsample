@extends('layouts.app')

@section('title', 'View Taxpayer Profile')

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
            Taxpayer Profile
        </div>

        <div class="form-body">
            <!-- 1. Selection Container -->
            <div id="selectionBlock">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select id="applicantTypeSelection" class="form-select-custom" required>
                                    <option value="">--Select--</option>
                                    <option value="Agent">Agent</option>
                                    <option value="Taxpayer">Taxpayer</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 2. Agent Form Block -->
            <div id="agentFormBlock" class="hidden">
                <form id="agentProfileForm">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Applicant PIN</td>
                                <td class="input-cell">
                                    <input type="text" id="agentApplicantPin" class="form-input-custom" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Applicant Name</td>
                                <td class="input-cell">
                                    <input type="text" id="agentApplicantName" class="form-input-custom" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" id="agentTaxpayerPin" class="form-input-custom" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">TAXPAYER NAME</td>
                                <td class="input-cell">
                                    <input type="text" id="agentTaxpayerName" class="form-input-custom" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                        <button type="submit" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Submit</button>
                        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- 3. Taxpayer Form Block -->
            <div id="taxpayerFormBlock" class="hidden">
                <form id="taxpayerProfileFormOnly">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Taxpayer PIN</td>
                                <td class="input-cell">
                                    <input type="text" id="directTaxpayerPin" class="form-input-custom" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">TAXPAYER NAME</td>
                                <td class="input-cell">
                                    <input type="text" id="directTaxpayerName" class="form-input-custom" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                        <button type="submit" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Submit</button>
                        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 4. Profile Results Block -->
<div id="profileResultsBlock" class="hidden">
    <div class="form-container">
        <div class="form-header-banner">
            Taxpayer Profile Result
        </div>
        <div class="form-body">
            <!-- Applicant Details section (Only for Agent searches) -->
            <div id="res_applicant_section" class="hidden">
                <div class="section-group">
                    <div class="section-group-title">Applicant Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Applicant PIN</td>
                                <td id="res_app_pin" class="input-cell">-</td>
                            </tr>
                            <tr>
                                <td class="label-cell">Applicant Name</td>
                                <td id="res_app_name" class="input-cell">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="section-group">
                <div class="section-group-title">Taxpayer Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">PIN</td>
                            <td id="res_pin" class="input-cell">-</td>
                        </tr>
                        <tr>
                            <td class="label-cell">TAXPAYER NAME</td>
                            <td id="res_name" class="input-cell">-</td>
                        </tr>
                        <tr>
                            <td class="label-cell">Email Address</td>
                            <td id="res_email" class="input-cell">-</td>
                        </tr>
                        <tr>
                            <td class="label-cell">Physical Address</td>
                            <td id="res_address" class="input-cell">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group">
                <div class="section-group-title">Registration Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Date of Registration</td>
                            <td id="res_reg_date" class="input-cell">-</td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer Type</td>
                            <td id="res_type" class="input-cell">-</td>
                        </tr>
                        <tr>
                            <td class="label-cell">Status</td>
                            <td id="res_status" class="input-cell">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('applicantTypeSelection');
        const agentBlock = document.getElementById('agentFormBlock');
        const taxpayerBlock = document.getElementById('taxpayerFormBlock');
        const formSection = document.getElementById('formSectionContainer');
        const resultsBlock = document.getElementById('profileResultsBlock');
        
        // Agent Fields
        const agAppPin = document.getElementById('agentApplicantPin');
        const agAppName = document.getElementById('agentApplicantName');
        const agTaxPin = document.getElementById('agentTaxpayerPin');
        const agTaxName = document.getElementById('agentTaxpayerName');

        // Taxpayer Fields
        const txTaxPin = document.getElementById('directTaxpayerPin');
        const txTaxName = document.getElementById('directTaxpayerName');

        typeSelect.addEventListener('change', function() {
            const type = this.value;
            
            agentBlock.classList.add('hidden');
            taxpayerBlock.classList.add('hidden');
            
            if (type === 'Agent') {
                agentBlock.classList.remove('hidden');
                agAppPin.value = 'A000000000X';
                agAppName.value = 'TAXPAYER NAME';
                agTaxPin.value = '';
                agTaxName.value = '';
            } else if (type === 'Taxpayer') {
                taxpayerBlock.classList.remove('hidden');
                txTaxPin.value = 'A000000000X';
                txTaxName.value = 'TAXPAYER NAME';
            }
        });

        // Submission Logic
        const handleSub = (e) => {
            e.preventDefault();
            
            if (confirm("Do you want to submit your request")) {
                const type = typeSelect.value;
                const enteredPin = type === 'Agent' ? agTaxPin.value : txTaxPin.value;

                // Show/Hide Applicant Section
                const appSection = document.getElementById('res_applicant_section');
                if (type === 'Agent') {
                    appSection.classList.remove('hidden');
                    document.getElementById('res_app_pin').innerText = agAppPin.value;
                    document.getElementById('res_app_name').innerText = agAppName.value;
                } else {
                    appSection.classList.add('hidden');
                }

                // Populate demo taxpayer data
                document.getElementById('res_pin').innerText = enteredPin || 'A000000000X';
                document.getElementById('res_name').innerText = 'TAXPAYER NAME';
                document.getElementById('res_email').innerText = 'taxpayer@example.com';
                document.getElementById('res_address').innerText = 'SAMPLE RESIDENTIAL ADDRESS, NAIROBI, KENYA';
                document.getElementById('res_reg_date').innerText = '01/01/2020';
                document.getElementById('res_type').innerText = 'Individual';
                document.getElementById('res_status').innerText = 'Active';

                // Switch views
                formSection.classList.add('hidden');
                resultsBlock.classList.remove('hidden');
                
                window.scrollTo(0, 0);
            }
        };
        
        document.getElementById('agentProfileForm').addEventListener('submit', handleSub);
        document.getElementById('taxpayerProfileFormOnly').addEventListener('submit', handleSub);
    });
</script>
@endpush
@endsection



