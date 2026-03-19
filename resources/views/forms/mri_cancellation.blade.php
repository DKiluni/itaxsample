@extends('layouts.app')

@section('title', 'Opted Out Landlord Registration')

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
        OPTED OUT LANDLORD REGISTRATION
    </div>

    <div class="form-body" style="padding: 5px;">
        <fieldset class="red-fieldset">
            <legend class="red-legend">Applicant Information</legend>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="width: 30%;">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell" style="width: 70%;">
                            <select id="applicantType" class="form-select-custom" style="width: 250px;" onchange="toggleAgentFields()">
                                <option value="Taxpayer" selected>Taxpayer</option>
                                <option value="Agent">Agent</option>
                            </select>
                        </td>
                    </tr>
                    <tr id="rowApplicantPin" style="display: none;">
                        <td class="label-cell">Applicant PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" id="applicantPin" class="form-input-custom" value="A013758466Z" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>
                    <tr id="rowApplicantName" style="display: none;">
                        <td class="label-cell">Applicant Name</td>
                        <td class="input-cell">
                            <input type="text" id="applicantName" class="form-input-custom" value="David Kiluni Mwaniki" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell" id="tdTaxpayerPin">
                            <input type="text" id="taxpayerPinInput" class="form-input-custom" style="width: 250px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer Name</td>
                        <td class="input-cell" id="tdTaxpayerName">
                            <input type="text" id="taxpayerNameInput" class="form-input-custom" style="width: 250px; background-color: #eee;" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="button" class="btn-custom btn-submit-orange">Submit</button>
        </div>
    </div>
</div>

<script>
function toggleAgentFields() {
    var type = document.getElementById('applicantType').value;
    var rowPin = document.getElementById('rowApplicantPin');
    var rowName = document.getElementById('rowApplicantName');
    var tpPin = document.getElementById('taxpayerPinInput');
    var tpName = document.getElementById('taxpayerNameInput');

    if (type === 'Agent') {
        rowPin.style.display = 'table-row';
        rowName.style.display = 'table-row';
        tpPin.value = '';
        tpPin.readOnly = false;
        tpPin.style.backgroundColor = '#fff';
        tpName.value = '';
    } else {
        rowPin.style.display = 'none';
        rowName.style.display = 'none';
        tpPin.value = 'A013758466Z';
        tpPin.readOnly = true;
        tpPin.style.backgroundColor = '#eee';
        tpName.value = 'David Kiluni Mwaniki';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    toggleAgentFields();
});
</script>
@endsection
