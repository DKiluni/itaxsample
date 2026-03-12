@extends('layouts.app')

@section('title', 'Objection Application WHT VAT')
@section('header', 'Objection Application WHT VAT')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="amendment-tabs-container">
        <div class="amendment-tab active" id="tab_app" onclick="switchTab('application-details')">Application Details</div>
        <div class="amendment-tab" id="tab_obj" onclick="switchTab('objection-details')">Objection Details</div>
    </div>

    <div class="form-header-banner">REQUEST FOR OBJECTION APPLICATION OF WITHHOLDING VAT</div>

    <div class="tab-content-wrapper">
        <!-- Tab 1: Application Details -->
        <div id="application-details" class="tab-pane active">
            <div class="form-body" style="padding: 10px;">
                <div class="section-group">
                    <div class="section-group-title">Taxpayer Details</div>
                    <table class="inner-profile-table table-4-col">
                        <tbody>
                            <tr>
                                <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="3">
                                    <select class="form-select-custom" style="width: 250px;">
                                        <option>Taxpayer</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="background-color: #f9f9f9;">
                                <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="A013758466Z">
                                </td>
                                <td class="label-cell">Taxpayer Name</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" value="David Kiluni Mwaniki" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Application Details</div>
                    <table class="inner-profile-table table-4-col" style="margin-top: 5px;">
                        <tbody>
                            <tr>
                                <td class="label-cell">Assessment Number <span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom">
                                </td>
                                <td class="label-cell">Assessment Type</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px;">
                    <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
                    <button type="button" class="btn-custom btn-next-green" onclick="switchTab('objection-details')">Next</button>
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
                </div>
            </div>
        </div>

        <!-- Tab 2: Objection Details -->
        <div id="objection-details" class="tab-pane">
            <div class="form-body" style="padding: 10px;">
                <div class="section-group">
                    <div class="section-group-title">Objection Details</div>
                    <table class="inner-profile-table" style="width: 100%; border-collapse: collapse; margin-top: 5px;">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 15%;">Tax Obligation<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 18.33%;">
                                    <select class="form-select-custom">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 15%;">Assessment Period<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 18.33%;">
                                    <select class="form-select-custom">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 15%;">Withholding VAT Certificate Number<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 18.33%;">
                                    <select class="form-select-custom">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Assessment Amount (Ksh)<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom">
                                </td>
                                <td class="label-cell">Objected Amount (Ksh)<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom">
                                </td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Remarks<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="5">
                                    <textarea class="form-input-custom" rows="3" maxlength="400" id="remarks" style="width: 100%; max-width: 600px;"></textarea>
                                    <div style="font-size: 0.8rem; color: #666; margin-top: 5px;">
                                        (Maximum characters: 400)<br>
                                        You have <input type="text" id="charsLeft" value="400" readonly style="width: 40px; text-align: center; border: 1px solid #ccc; background: #fff;"> characters left.
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin: 10px 0;">
                        <button type="button" class="btn-custom btn-submit-orange" style="padding: 5px 30px;">Add</button>
                        <button type="button" class="btn-custom btn-primary-blue" style="padding: 5px 30px;" onclick="window.location.reload()">Clear</button>
                    </div>

                    <div style="margin-top: 20px;">
                        <table class="inner-profile-table table-header-black">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Delete</th>
                                    <th>Modify</th>
                                    <th>Tax Obligation</th>
                                    <th>Assessment Period</th>
                                    <th>Withholding VAT Certificate Number</th>
                                    <th>Assessment Amount (Ksh)</th>
                                    <th>Objected Amount (Ksh)</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="9">
                                        <div class="empty-table-state">
                                            <i class="far fa-file"></i>
                                            No Records Found
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin-top: 15px;">
                    <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
                    <button type="button" class="btn-custom btn-prev-green" onclick="switchTab('application-details')">Previous</button>
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function switchTab(tabId) {
        document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
        document.querySelectorAll('.amendment-tab').forEach(tab => tab.classList.remove('active'));
        
        document.getElementById(tabId).classList.add('active');
        if (tabId === 'application-details') {
            document.getElementById('tab_app').classList.add('active');
        } else {
            document.getElementById('tab_obj').classList.add('active');
        }
    }

    const remarks = document.getElementById('remarks');
    const charsLeft = document.getElementById('charsLeft');

    if (remarks && charsLeft) {
        remarks.addEventListener('input', () => {
            const remaining = 400 - remarks.value.length;
            charsLeft.value = remaining;
        });
    }
</script>
@endpush
@endsection