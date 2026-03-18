@extends('layouts.app')

@section('title', 'Land Rent Refund Application Form')
@section('header', 'Land Rent Refund Application Form')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>
 
<!-- Unified Wizard Frame -->
<div class="form-container-red">
    <div class="header-wizard-container">
        <div class="tabs-nav-row">
            <div class="tab-item active" data-tab="tab_basic_info">Basic Info</div>
            <div class="tab-item" data-tab="tab_bank_details">Bank Details</div>
            <div class="tab-item" data-tab="tab_claim_details">Claim Details</div>
        </div>
        <div class="form-header-banner-wizard" style="text-align: center;">
            Land Rent Refund Application Form
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
                <button type="button" class="btn-wizard btn-wizard-next btn-next" data-next="tab_bank_details">Next</button>
                <button type="button" class="btn-wizard btn-wizard-submit">Submit</button>
                <button type="button" class="btn-wizard btn-wizard-cancel" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
            </div>
        </div>
 
        <!-- Tab 2: Bank Details -->
        <div class="tab-pane" id="tab_bank_details">
            <div class="form-body">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%; ">Bank Name<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                            <td class="label-cell" style="width: 25%; ">Branch Name<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">City/Town<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style="">Account Name<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Account Number<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style=""></td>
                            <td class="input-cell" style=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-footer-wizard">
                <button type="button" class="btn-wizard btn-wizard-prev btn-prev" data-prev="tab_basic_info">Previous</button>
                <button type="button" class="btn-wizard btn-wizard-next btn-next" data-next="tab_claim_details">Next</button>
                <button type="button" class="btn-wizard btn-wizard-submit">Submit</button>
                <button type="button" class="btn-wizard btn-wizard-cancel" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
            </div>
        </div>
 
        <!-- Tab 3: Claim Details -->
        <div class="tab-pane" id="tab_claim_details">
            <div class="form-body">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%; ">Refund Type<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <input type="text" class="form-input-custom" value="LANDRENT" readonly>
                            </td>
                            <td class="label-cell" style="width: 25%; ">Land Registrar Office<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Refund Claim Reason<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <textarea class="form-input-custom" rows="3" onkeyup="document.getElementById('charCount').textContent = 500 - this.value.length;"></textarea>
                                <div style="font-size: 0.75rem; color: #666; margin-top: 2px;">
                                    (Maximum characters: 500)<br>
                                    You have <span id="charCount">500</span> characters left.
                                </div>
                            </td>
                            <td class="label-cell" style="">Total Refund Claim Amount(Ksh)</td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div style="border-bottom: 2px solid #ddd; margin: 15px 0;"></div>

                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%; ">Payment Registration Number<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style="width: 25%; ">LR/Plot/Block Number<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; ">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">City/Town</td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style="">Land Rent Paid(Ksh)</td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Refund Claim Amount(Ksh)<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell" style=""></td>
                            <td class="input-cell" style=""></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display: flex; justify-content: center; gap: 10px; margin-top: 15px; padding-bottom: 15px; border-bottom: 2px solid #ddd; margin-bottom: 15px;">
                    <button type="button" id="btnAdd" class="btn-custom" style="background-color: #28a745; color: #fff; padding: 6px 25px; border-radius: 6px; border: none; font-weight: bold;">Add</button>
                    <button type="button" id="btnClear" class="btn-custom" style="background-color: #DA3832; color: #fff; padding: 6px 25px; border-radius: 6px; border: none; font-weight: bold;">Clear</button>
                </div>
 
                <div>
                    <table class="table-header-black" style="width: 100%; border-collapse: collapse; text-align: center;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Delete</th>
                                <th>Modify</th>
                                <th>Payment Registration Number</th>
                                <th>LR/Plot/Block Number</th>
                                <th>City/Town</th>
                                <th>Land Rent Paid(Ksh)</th>
                                <th>Refund Claim Amount(Ksh)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8">
                                    <div class="empty-table-state">
                                        <i class="far fa-file-alt"></i>
                                        <div>No Records Found</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div style="margin-top: 20px;">
                    <table class="table-header-black" style="width: 100%; border-collapse: collapse; text-align: center;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Payment Registration Number</th>
                                <th>Total Refund Claim Value for the PRN(Ksh)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <div class="empty-table-state">
                                        <i class="far fa-file-alt"></i>
                                        <div>No Records Found</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-footer-wizard">
                <button type="button" class="btn-wizard btn-wizard-prev btn-prev" data-prev="tab_bank_details">Previous</button>
                <button type="button" class="btn-wizard btn-wizard-submit">Submit</button>
                <button type="button" class="btn-wizard btn-wizard-cancel" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
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
            document.querySelector(`.tab-item[data-tab="${nextTab}"]`).click();
        });
    });

    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', function() {
            const prevTab = this.dataset.prev;
            document.querySelector(`.tab-item[data-tab="${prevTab}"]`).click();
        });
    });
</script>
@endpush
@endsection
