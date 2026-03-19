@extends('layouts.app')

@section('title', 'Application for Destruction of Excisable Goods')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container-red">
    <div class="amendment-tabs-container">
        <div class="amendment-tab active" id="tab-app" onclick="showTab('app')">Application Details</div>
        <div class="amendment-tab" id="tab-goods" onclick="showTab('goods')">Goods Details</div>
    </div>

    <div class="amendment-banner-wizard">
        Application for Destruction of Excisable Goods
    </div>

    <div class="form-body">
        <div id="section-app" class="tab-pane active" style="padding: 0;">
            <div class="section-group">
                <div class="section-group-title">Taxpayer Details</div>
                <table class="inner-table-custom">
                    <tbody>
                        <tr>
                            <td class="label-bg">Applicant Type<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom" style="width: 100%;">
                                    <option value="Taxpayer">Taxpayer</option>
                                </select>
                            </td>
                            <td class="label-bg" colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="label-bg">Taxpayer PIN<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <input type="text" value="A000000000X" class="form-input-custom" style="width: 100%;" readonly>
                            </td>
                            <td class="label-bg" style="width: 20%;">Taxpayer Name</td>
                            <td class="input-bg" style="width: 30%;">
                                <input type="text" value="TAXPAYER NAME" class="form-input-custom" style="width: 100%;" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group">
                <div class="section-group-title">Company Registration Details</div>
                <table class="inner-table-custom">
                    <tbody>
                        <tr>
                            <td class="label-bg">Company Registration Date</td>
                            <td class="input-bg"><input type="text" class="form-input-custom" readonly></td>
                            <td class="label-bg">Form Account Number</td>
                            <td class="input-bg"><input type="text" class="form-input-custom" readonly></td>
                        </tr>
                        <tr>
                            <td class="label-bg">Mobile Number<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" value="0712345678" class="form-input-custom"></td>
                            <td class="label-bg">Email Address<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" value="taxpayer@example.com" class="form-input-custom"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group">
                <div class="section-group-title">Principal Physical Address</div>
                <table class="inner-table-custom">
                    <tbody>
                        <tr>
                            <td class="label-bg">L.R. Number</td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                            <td class="label-bg">Building<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td class="label-bg">Street/Road<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                            <td class="label-bg">City/Town<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td class="label-bg">County<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom"><option>--Select--</option></select>
                            </td>
                            <td class="label-bg">District<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom"><option>--Select--</option></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-bg">Tax Service Office(TSO)</td>
                            <td class="input-bg"><input type="text" class="form-input-custom" readonly></td>
                            <td class="label-bg">Tax Area/Locality<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom"><option>--Select--</option></select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="form-footer-grey-area">
                <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                <button type="button" class="btn-submit-orange" onclick="showTab('goods')">Next</button>
            </div>
        </div>

        <div id="section-goods" class="tab-pane" style="padding: 0;">
            <div class="section-group">
                <div class="section-group-title">Goods Details</div>
                <table class="inner-table-custom">
                    <tbody>
                        <tr>
                            <td class="label-bg">Classification of Excisable Goods<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom"><option>--Select--</option></select>
                            </td>
                            <td class="label-bg">Measurement Unit<span style="color: red;">*</span></td>
                            <td class="input-bg">
                                <select class="form-select-custom" readonly><option>--Select--</option></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-bg">Quantity of Goods<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                            <td class="label-bg">Duty Paid/Payable (Ksh)<span style="color: red;">*</span></td>
                            <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td class="label-bg">Reasons for Destruction<span style="color: red;">*</span></td>
                            <td colspan="3">
                                <textarea class="form-input-custom" id="reasons" onkeyup="countChars('reasons', 'char-count-reasons', 250)" style="height: 60px;"></textarea>
                                <div class="char-count">(Maximum characters: 250) <br> You have <span id="char-count-reasons">250</span> characters left.</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-bg">Proposed Procedure/Method of Destruction<span style="color: red;">*</span></td>
                            <td colspan="3">
                                <textarea class="form-input-custom" id="procedure" onkeyup="countChars('procedure', 'char-count-procedure', 250)" style="height: 60px;"></textarea>
                                <div class="char-count">(Maximum characters: 250) <br> You have <span id="char-count-procedure">250</span> characters left.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="upload-section-padded" style="margin: 20px;">
                <div style="display: flex; gap: 20px; align-items: start;">
                    <div class="upload-info-text">Upload Document<br><span>(Allowed File Types: pdf,jfif,png,bmp,gif,tiff,xls,xlsx,doc,docx,jpg,bmp,txt)</span></div>
                    <div><input type="file" style="border: 1px solid #ccc; padding: 5px;"></div>
                </div>
            </div>

            <div class="form-footer-grey-area">
                <button type="button" class="btn-cancel-red" onclick="showTab('app')">Previous</button>
                <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                <button type="button" class="btn-submit-orange">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showTab(tab) {
        document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.amendment-tab').forEach(el => el.classList.remove('active'));
        
        if (tab === 'app') {
            document.getElementById('section-app').classList.add('active');
            document.getElementById('tab-app').classList.add('active');
        } else {
            document.getElementById('section-goods').classList.add('active');
            document.getElementById('tab-goods').classList.add('active');
        }
    }

    function countChars(inputId, counterId, max) {
        const input = document.getElementById(inputId);
        const counter = document.getElementById(counterId);
        const remaining = max - input.value.length;
        counter.innerText = remaining;
    }
</script>
@endpush
@endsection
