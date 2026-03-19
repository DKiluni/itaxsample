@extends('layouts.app')

@section('title', 'Reprint Rental Income Withholding Certificate')
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
        REPRINT RENTAL INCOME WITHHOLDING CERTIFICATE
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Certificate Details</div>
            <table class="inner-profile-table table-4-col">
                <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">Withholding Certificate Number</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom">
                </td>
                <td class="label-cell" style="width: 25%;">Withholder PIN</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom">
                </td>
            </tr>
            <tr>
                <td class="label-cell">Date of Certificate</td>
                <td class="input-cell">
                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY" required>
                </td>
                <td class="label-cell">Withholdee PIN</td>
                <td class="input-cell">
                    <input type="text" class="form-input-custom">
                </td>
            </tr>
            <tr>
                <td class="label-cell">PRN Number</td>
                <td class="input-cell">
                    <input type="text" class="form-input-custom">
                </td>
                <td colspan="2"></td>
            </tr>
        </tbody>
            </table>
        </div>

        <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
            <button type="button" class="btn-custom btn-submit-orange">Consult</button>
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


