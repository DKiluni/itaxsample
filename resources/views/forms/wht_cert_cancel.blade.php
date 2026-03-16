@extends('layouts.app')

@section('title', 'Withholding Certificate Cancellation')
@section('header', 'Withholding Certificate Cancellation')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    Fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="amendment-tabs-container">
        <div class="amendment-tab active" id="tab_single" onclick="switchTab('single-cert')">Single Certificate</div>
        <div class="amendment-tab" id="tab_multiple" onclick="switchTab('multiple-cert')">Multiple Certificates</div>
    </div>

    <div class="form-header-banner">
        CANCELLATION OF WITHHOLDING CERTIFICATE
    </div>

    <div class="tab-content-wrapper" style="border-top: none; padding: 0;">
        <!-- Single Certificate Tab -->
        <div id="single-cert" class="tab-pane active">
            <div class="form-body" style="padding: 10px;">
                <div class="section-group">
                    <div class="section-group-title">Cancellation Details</div>
                    <table class="inner-profile-table table-4-col">
                        <tbody>
                    <tr>
                        <td class="label-cell" style="width: 25%;">Withholding Certificate Number<span class="required-star">*</span></td>
                        <td class="input-cell" style="width: 25%;">
                            <input type="text" class="form-input-custom" required>
                        </td>
                        <td class="label-cell" style="width: 25%;">Date of Transaction</td>
                        <td class="input-cell" style="width: 25%;">
                            <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Withholder PIN</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Withholder Name</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Withholdee PIN</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Withholdee Name</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Withholding Amount (Ksh)</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Nature of Transaction</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Reason for Cancellation<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <textarea class="form-input-custom" rows="4" maxlength="500" id="reason_single" style="width: 100%; max-width: 400px;" required></textarea>
                            <div style="font-size: 0.8rem; color: #000; margin-top: 5px;">
                                (Maximum characters: 500)<br>
                                You have <input type="text" id="charsLeftSingle" value="500" readonly style="width: 30px; border: 1px solid #000; text-align: center;"> characters left.
                            </div>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                </tbody>
            </table>
            </div>

            <fieldset style="border: 1px solid #ccc; margin: 20px 15px; padding: 15px; background: #fff;">
                <legend style="font-size: 1rem; font-weight: bold; width: auto; border: none; margin-bottom: 0; padding: 0 5px;">Upload Document</legend>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 5px;">
                    <span style="font-weight: 500;">Upload Supporting Document for Cancellation <span class="required-star">*</span></span>
                    <div style="display: flex; align-items: center; border: 1px solid #ccc; background-color: #f5f5f5; padding: 2px; width: 300px;">
                        <div style="background-color: #eaeaea; border: 1px solid #ccc; padding: 2px 10px; cursor: pointer; margin-right: 5px;">Choose File</div>
                        <span style="color: #666; font-size: 0.9rem;">No file chosen</span>
                        <input type="file" style="display: none;" required>
                    </div>
                </div>
                <div style="color: red; font-size: 0.9rem; margin-bottom: 15px;">
                    Allowed file types are:- .doc, .docx, .pdf, .xls, .xlsx, .jpeg, .png, .gif, .ods, .jfif, .tiff, .tif, .zip, .bmp, .txt
                </div>
                
            </fieldset>
            
            <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin-bottom: 15px;">
                <button type="button" class="btn-custom btn-next-green" onclick="switchTab('multiple-cert')">Next</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            </div>
            </div>
        </div>

        <!-- Multiple Certificates Tab -->
        <div id="multiple-cert" class="tab-pane" style="display: none;">
            <div class="form-body" style="padding: 10px;">
            <fieldset style="border: 1px solid #ccc; padding: 15px; background: #fff; margin: 20px 15px;">
                <legend style="font-size: 1rem; font-weight: bold; width: auto; border: none; margin-bottom: 0; padding: 0 5px;">Consult Withholding Certificate(s)</legend>
                <table class="inner-profile-table table-4-col" style="border: none;">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="border: none; width: 25%;">PRN Number <span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none; width: 75%; display: flex; align-items: center; gap: 10px;">
                                <input type="text" class="form-input-custom" style="width: 250px;" required>
                                <button type="button" class="btn-custom btn-submit-orange">Consult</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="border: none;">Reason for Cancellation <span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none;">
                                <textarea class="form-input-custom" rows="4" maxlength="500" id="reason_multi" style="width: 100%; max-width: 400px;" required></textarea>
                                <div style="font-size: 0.8rem; color: #000; margin-top: 5px;">
                                    (Maximum characters: 500)<br>
                                    You have <input type="text" id="charsLeftMulti" value="500" readonly style="width: 30px; border: 1px solid #000; text-align: center;"> characters left.
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="border: 1px solid #ccc; padding: 15px; background: #fff; margin: 20px 15px;">
                <legend style="font-size: 1rem; font-weight: bold; width: auto; border: none; margin-bottom: 0; padding: 0 5px;">Withholding Certificate(s) Details</legend>
                <table class="inner-profile-table table-header-black" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 5%; text-align: center; background-color: #ddd;"><input type="checkbox"></th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Withholder PIN</th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Withholdee PIN</th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Withholdee Name</th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Date of Transaction</th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Withholding Amount (Ksh)</th>
                            <th style="background-color: #ddd; color: #000; border: 1px solid #ccc;">Withholding Certificate<br>Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" style="height: 30px;"></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="border: 1px solid #ccc; padding: 15px; background: #fff;">
                <legend style="font-size: 1rem; font-weight: bold; width: auto; border: none; margin-bottom: 0; padding: 0 5px;">Upload Document</legend>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 5px;">
                    <span style="font-weight: 500;">Upload Supporting Document for Cancellation <span class="required-star">*</span></span>
                    <div style="display: flex; align-items: center; border: 1px solid #ccc; background-color: #f5f5f5; padding: 2px; width: 300px;">
                        <div style="background-color: #eaeaea; border: 1px solid #ccc; padding: 2px 10px; cursor: pointer; margin-right: 5px;">Choose File</div>
                        <span style="color: #666; font-size: 0.9rem;">No file chosen</span>
                        <input type="file" style="display: none;" required>
                    </div>
                </div>
                <div style="color: red; font-size: 0.9rem; margin-bottom: 15px;">
                    Allowed file types are:- .doc, .docx, .pdf, .xls, .xlsx, .jpeg, .png, .gif, .ods, .jfif, .tiff, .tif, .zip, .bmp, .txt
                </div>
                
                
            </fieldset>
                <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin-bottom: 15px;">
                    <button type="button" class="btn-custom btn-prev-green" onclick="switchTab('single-cert')">Previous</button>
                    <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
                    <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function switchTab(tabId) {
        document.querySelectorAll('.tab-pane').forEach(pane => {
            pane.style.display = 'none';
            pane.classList.remove('active');
        });
        document.querySelectorAll('.amendment-tab').forEach(tab => tab.classList.remove('active'));
        
        const activePane = document.getElementById(tabId);
        activePane.style.display = 'block';
        activePane.classList.add('active');
        
        if (tabId === 'single-cert') {
            document.getElementById('tab_single').classList.add('active');
        } else {
            document.getElementById('tab_multiple').classList.add('active');
        }
    }

    const reasonSingle = document.getElementById('reason_single');
    const charsLeftSingle = document.getElementById('charsLeftSingle');
    if (reasonSingle && charsLeftSingle) {
        reasonSingle.addEventListener('input', () => {
            charsLeftSingle.value = 500 - reasonSingle.value.length;
        });
    }

    const reasonMulti = document.getElementById('reason_multi');
    const charsLeftMulti = document.getElementById('charsLeftMulti');
    if (reasonMulti && charsLeftMulti) {
        reasonMulti.addEventListener('input', () => {
            charsLeftMulti.value = 500 - reasonMulti.value.length;
        });
    }
</script>
@endpush

@endsection