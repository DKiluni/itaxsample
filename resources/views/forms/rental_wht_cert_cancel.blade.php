@extends('layouts.app')

@section('title', 'Rental Income Withholding Certificate Cancellation')
@section('header', 'Rental Income Withholding Certificate Cancellation')
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
            RENTAL INCOME WITHHOLDING CERTIFICATE CANCELLATION
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Cancellation Details</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%;">Rental Income Withholding Certificate Number<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%;">
                                <input type="text" class="form-input-custom" required>
                            </td>
                            <td class="label-cell" style="width: 25%;">Payment Date</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY" required>
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
                                <textarea class="form-input-custom" rows="3" maxlength="200" id="reason_cancel" style="width: 100%; max-width: 400px;" required></textarea>
                                <div style="font-size: 0.8rem; color: #000; margin-top: 5px;">
                                    (Maximum characters: 200)<br>
                                    You have <input type="text" id="charsLeftCancel" value="200" readonly class="input-sm" style="border: 1px solid #000; text-align: center;"> characters left.
                                </div>
                            </td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="label-cell" colspan="2" style="background-color: #f9f9f9; padding: 10px;">
                                <div>Upload Document to support cancellation</div>
                                <div style="font-style: italic; font-size: 0.85rem; margin-top: 5px;">
                                    (Allowed File Types:<br>pdf,jfif,png,bmp,gif,tiff,xls,<br>xlsx,doc,docx,jpg,bmp,txt)<span class="required-star">*</span>
                                </div>
                            </td>
                            <td class="input-cell" colspan="2" style="vertical-align: middle;">
                                <div class="file-upload-custom" style="display: flex; align-items: center; border: 1px solid #ccc; background-color: #f5f5f5; padding: 2px; width: 250px;">
                                    <div class="file-upload-btn" style="background-color: #eaeaea; border: 1px solid #ccc; padding: 2px 5px; cursor: pointer; margin-right: 5px;" onclick="this.nextElementSibling.nextElementSibling.click()">Choose File</div>
                                    <span class="file-upload-name" style="color: #666; font-size: 0.9rem;">No file chosen</span>
                                    <input type="file" style="display: none;" required onchange="this.previousElementSibling.textContent = this.files.length > 0 ? this.files[0].name : 'No file chosen'">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            </div>
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

            const reasonCancel = document.getElementById('reason_cancel');
            const charsLeftCancel = document.getElementById('charsLeftCancel');

            if (reasonCancel && charsLeftCancel) {
                reasonCancel.addEventListener('input', () => {
                    const remaining = 200 - reasonCancel.value.length;
                    charsLeftCancel.value = remaining;
                });
            }
        });
    </script>
@endpush


