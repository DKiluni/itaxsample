@extends('layouts.app')

@section('title', 'Withholding VAT Certificate Cancellation')
@section('header', 'Withholding VAT Certificate Cancellation')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        WITHHOLDING VAT CERTIFICATE CANCELLATION
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Cancellation Details</div>
            <table class="inner-profile-table table-4-col">
                <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">Withholding VAT Certificate number<span class="required-star">*</span></td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" required>
                </td>
                <td class="label-cell" style="width: 25%;">Date of Transaction</td>
                <td class="input-cell" style="width: 25%;">
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
                    <select class="form-select-custom" required>
                        <option>--Select--</option>
                    </select>
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

        <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 5px; margin-bottom: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
            <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
        </div>
    </div>
</div>

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
@endsection


