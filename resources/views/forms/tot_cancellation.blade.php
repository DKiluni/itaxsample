@extends('layouts.app')

@section('title', 'TOT Cancellation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        .red-fieldset {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px;
            border-radius: 4px;
        }
        .red-legend {
            color: #DA3832;
            font-weight: bold;
            font-size: 1rem;
            width: auto;
            padding: 0 5px;
            border: none;
            margin-bottom: 0;
        }
    </style>
@endpush

@section('content')
<div class="mandatory-notice" style="color: red; font-weight: bold; margin-bottom: 10px;">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container" style="border: 1px solid #DA3832; border-radius: 4px; box-shadow: none; overflow: hidden; margin-top: 5px;">
    <div class="form-header-banner" style="background-color: #DA3832; color: #fff; text-align: center; padding: 10px; font-weight: bold; font-size: 1.1rem; text-transform: uppercase;">
        OPTED OUT TOT REGISTRATION
    </div>

    <div class="form-body" style="padding: 5px;">
        <fieldset class="red-fieldset">
            <legend class="red-legend">Applicant Information</legend>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="width: 30%;">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell" style="width: 70%;">
                            <select id="applicantTypeSelection" class="form-select-custom" style="width: 250px;" onchange="updateTOTFields()">
                                <option value="Taxpayer" selected>Taxpayer</option>
                                <option value="Agent">Agent</option>
                                <option value="Sub Agent">Sub Agent</option>
                            </select>
                        </td>
                    </tr>
                    
                    <!-- Applicant PIN/Name Rows (Visible for Agent/Sub Agent) -->
                    <tr id="totApplicantPinRow" style="display: none;">
                        <td class="label-cell">Applicant PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" value="A013758466Z" class="form-input-custom" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>
                    <tr id="totApplicantNameRow" style="display: none;">
                        <td class="label-cell">Applicant Name</td>
                        <td class="input-cell">
                            <input type="text" value="David Kiluni Mwaniki" class="form-input-custom" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>

                    <!-- Agent PIN/Name Rows (Visible for Sub Agent) -->
                    <tr id="totAgentPinRow" style="display: none;">
                        <td class="label-cell">Agent Pin<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" style="width: 250px;">
                        </td>
                    </tr>
                    <tr id="totAgentNameRow" style="display: none;">
                        <td class="label-cell">Agent Name<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>

                    <!-- Taxpayer PIN/Name Rows (Always visible, but logic changes) -->
                    <tr>
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" id="totTaxpayerPinInput" class="form-input-custom" style="width: 250px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer Name</td>
                        <td class="input-cell">
                            <input type="text" id="totTaxpayerNameInput" class="form-input-custom" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="submit" class="btn-custom btn-submit-orange">Next</button>
        </div>
    </div>
</div>

<script>
function updateTOTFields() {
    var type = document.getElementById('applicantTypeSelection').value;
    var appPinRow = document.getElementById('totApplicantPinRow');
    var appNameRow = document.getElementById('totApplicantNameRow');
    var agentPinRow = document.getElementById('totAgentPinRow');
    var agentNameRow = document.getElementById('totAgentNameRow');
    var tpPinInput = document.getElementById('totTaxpayerPinInput');
    var tpNameInput = document.getElementById('totTaxpayerNameInput');

    // Reset visibility
    appPinRow.style.display = 'none';
    appNameRow.style.display = 'none';
    agentPinRow.style.display = 'none';
    agentNameRow.style.display = 'none';

    if (type === 'Taxpayer') {
        tpPinInput.value = 'A013758466Z';
        tpPinInput.readOnly = true;
        tpPinInput.style.backgroundColor = '#eee';
        tpNameInput.value = 'David Kiluni Mwaniki';
    } else if (type === 'Agent') {
        appPinRow.style.display = 'table-row';
        appNameRow.style.display = 'table-row';
        tpPinInput.value = '';
        tpPinInput.readOnly = false;
        tpPinInput.style.backgroundColor = '#fff';
        tpNameInput.value = '';
    } else if (type === 'Sub Agent') {
        appPinRow.style.display = 'table-row';
        appNameRow.style.display = 'table-row';
        agentPinRow.style.display = 'table-row';
        agentNameRow.style.display = 'table-row';
        tpPinInput.value = '';
        tpPinInput.readOnly = false;
        tpPinInput.style.backgroundColor = '#fff';
        tpNameInput.value = '';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    updateTOTFields();
});
</script>
@endsection
