@extends('layouts.app')

@section('title', 'Installment Adjustment Voucher Application Form')
@section('header', 'Installment Adjustment Voucher Application Form')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>
 
<div class="form-container-red">
    <!-- Step 1: Landing -->
    <div id="step1_landing">
        <div class="form-body">
            <table class="inner-profile-table" style="margin-bottom: 0;">
                <thead>
                    <tr>
                        <th colspan="2" class="table-header-black" style="text-align: left; padding-left: 10px;">Installment Adjustment Voucher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="label-cell" style="width: 50%;">Type<span class="required-star">*</span></td>
                        <td class="input-cell" style="width: 50%;">
                            <select class="form-select-custom" style="width: auto; min-width: 200px;">
                                <option value="Self">Self</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A013758466Z" readonly style="width: auto; min-width: 200px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer Name<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="DAVID KILUNI MWANIKI" readonly style="width: auto; min-width: 200px;">
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div style="display: flex; justify-content: center; gap: 10px; padding: 20px 0;">
                <button type="button" class="btn-custom" onclick="window.location.href='{{ route('dashboard') }}'" style="background-color: #000; color: #fff; padding: 6px 30px; border: none; font-weight: bold;">Back</button>
                <button type="button" class="btn-custom" onclick="showWizard();" style="background-color: #000; color: #fff; padding: 6px 30px; border: none; font-weight: bold;">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 2: Wizard -->
    <div id="step2_wizard" style="display: none;">
        <div class="header-wizard-container">
            <div class="tabs-nav-row">
                <div class="tab-item active" data-tab="tab_basic_info">Basic Info</div>
                <div class="tab-item" data-tab="tab_claim_details">Claim Details</div>
            </div>
            <div class="form-header-banner-wizard">
                Installment Adjustment Voucher Application Form
            </div>
        </div>

        <div class="tab-content-wrapper">
            <!-- Tab 1: Basic Info -->
            <div class="tab-pane active" id="tab_basic_info">
                <div class="form-body">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25%;">Applicant Type<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <select class="form-select-custom">
                                        <option value="Taxpayer">Taxpayer</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25%; "></td>
                                <td class="input-cell" style="width: 25%; "></td>
                            </tr>
                            <tr>
                                <td class="label-cell" style="">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell" style="">
                                    <input type="text" class="form-input-custom" value="A013758466Z" readonly>
                                </td>
                                <td class="label-cell" style="">Taxpayer Name</td>
                                <td class="input-cell" style="">
                                    <input type="text" class="form-input-custom" value="David Kiluni Mwaniki" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-footer-wizard">
                    <button type="button" class="btn-wizard btn-wizard-next btn-next" data-next="tab_claim_details">Next</button>
                    <button type="button" class="btn-wizard btn-wizard-submit">Submit</button>
                    <button type="button" class="btn-wizard btn-wizard-cancel" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                </div>
            </div>
     
            <!-- Tab 2: Claim Details -->
            <div class="tab-pane" id="tab_claim_details">
                <div class="form-body">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25%;">Tax Obligation<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <select class="form-select-custom">
                                        <option>----SELECT----</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25%;">Claim Reason <span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25%;">
                                    <input type="text" class="form-input-custom" value="Excess Installment Tax" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell" style="">Remarks<span class="required-star">*</span></td>
                                <td class="input-cell" style="">
                                    <textarea class="form-input-custom" rows="3" onkeyup="document.getElementById('iavCharCount').textContent = 500 - this.value.length;"></textarea>
                                    <div style="font-size: 0.75rem; color: #666; margin-top: 2px;">
                                        (Maximum characters: 500)<br>
                                        You have <span id="iavCharCount">500</span> characters left.
                                    </div>
                                </td>
                                <td class="label-cell" style="">Total Claim Amount <span class="required-star">*</span></td>
                                <td class="input-cell" style="">
                                    <input type="text" class="form-input-custom">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="border: 1px solid #ccc; padding: 10px; margin-top: 15px; background-color: #fcfcfc;">
                        <table class="inner-profile-table" style="border: none;">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 25%; border: none;">Upload Supporting Document <span class="required-star">*</span></td>
                                    <td class="input-cell" style="border: none;">
                                        <input type="file" class="form-input-custom" style="padding: 3px; display: inline-block; width: auto;">
                                        <div style="font-size: 0.8rem; color: #DA3832; margin-top: 5px;">
                                            Allowed file types are:- .doc, .docx, .pdf, .xls, .xlsx, .jpeg, .png, .gif, .ods, .jfif, .tiff, .tif, .zip, .bmp, .txt
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="form-footer-wizard">
                    <button type="button" class="btn-wizard btn-wizard-prev btn-prev" data-prev="tab_basic_info">Previous</button>
                    <button type="button" class="btn-wizard btn-wizard-submit">Submit</button>
                    <button type="button" class="btn-wizard btn-wizard-cancel" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showWizard() {
        document.getElementById('step1_landing').style.display = 'none';
        document.getElementById('step2_wizard').style.display = 'block';
    }

    document.querySelectorAll('.tab-item').forEach(tab => {
        tab.addEventListener('click', function() {
            if (this.classList.contains('disabled')) return;
            
            document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
            
            this.classList.add('active');
            document.getElementById(this.dataset.tab).classList.add('active');
        });
    });

    document.querySelectorAll('.btn-next').forEach(btn => {
        btn.addEventListener('click', function() {
            const nextTab = this.dataset.next;
            if (nextTab) {
                document.querySelector(`.tab-item[data-tab="${nextTab}"]`).click();
            }
        });
    });

    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', function() {
            const prevTab = this.dataset.prev;
            if (prevTab) {
                document.querySelector(`.tab-item[data-tab="${prevTab}"]`).click();
            }
        });
    });
</script>
@endpush
@endsection


