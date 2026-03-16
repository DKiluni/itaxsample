@extends('layouts.app')

@section('title', 'Rental Income Withholding Certificate Cancellation')
@section('header', 'Rental Income Withholding Certificate Cancellation')



@section('content')
<div class="mandatory-notice">
    Fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container" style="margin-top: 10px;">
    <div style="font-weight: bold; text-align: center; margin-bottom: 15px; font-size: 1.1rem;">
        Rental Income Withholding Certificate Number
    </div>

    <table class="inner-profile-table table-4-col">
        <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">Rental Income Withholding Certificate Number<span class="required-star">*</span></td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" required>
                </td>
                <td class="label-cell" style="width: 25%;">Payment Date</td>
                <td class="input-cell" style="width: 25%;">
                    <div style="display: flex; align-items: center; gap: 5px;">
                        <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                        <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();"><i class="far fa-calendar-alt"></i></span>
                    </div>
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
                        You have <input type="text" id="charsLeftCancel" value="200" readonly style="width: 30px; border: 1px solid #000; text-align: center;"> characters left.
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
                    <div style="display: flex; align-items: center; border: 1px solid #ccc; background-color: #f5f5f5; padding: 2px; width: 250px;">
                        <div style="background-color: #eaeaea; border: 1px solid #ccc; padding: 2px 5px; cursor: pointer; margin-right: 5px;">Choose File</div>
                        <span style="color: #666; font-size: 0.9rem;">No ...sen</span>
                        <input type="file" style="display: none;" required>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="form-footer-buttons" style="display: flex; justify-content: center; gap: 10px; margin-top: 15px;">
        <button type="submit" class="btn-custom" style="background-color: #000; color: #fff; padding: 5px 20px; text-transform: none; border: 1px solid #000; font-weight: bold;">Submit</button>
        <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 5px 20px; text-transform: none; border: 1px solid #000; font-weight: bold;" onclick="window.location.reload()">Clear</button>
    </div>
</div>

@push('scripts')
<script>
    const reasonCancel = document.getElementById('reason_cancel');
    const charsLeftCancel = document.getElementById('charsLeftCancel');

    if (reasonCancel && charsLeftCancel) {
        reasonCancel.addEventListener('input', () => {
            const remaining = 200 - reasonCancel.value.length;
            charsLeftCancel.value = remaining;
        });
    }
</script>
@endpush

@endsection