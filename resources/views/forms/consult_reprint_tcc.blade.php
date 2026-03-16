@extends('layouts.app')

@section('title', 'Consult and Reprint TCC')
@section('header', 'Consult and Reprint TCC')

@section('content')
<div class="mandatory-notice" style="color: red;">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container" style="margin-top: 10px;">
    <div style="font-weight: bold; text-align: center; margin-bottom: 15px; font-size: 1.1rem;">
        Consult and Reprint Tax Compliance Certificate
    </div>

    <table class="inner-profile-table table-4-col">
        <thead>
            <tr>
                <th colspan="4" style="background-color: #333; color: white; padding: 5px; text-align: center;">Consult and Reprint Tax Compliance Certificate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">Certificate Serial Number</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom">
                </td>
                <td class="label-cell" style="width: 25%;">PIN of Taxpayer<span class="required-star">*</span></td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="A013758466Z" required>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Date of expiry</td>
                <td class="input-cell">
                    <div style="display: flex; align-items: center; gap: 5px;">
                        <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                        <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();"><i class="far fa-calendar-alt"></i></span>
                    </div>
                </td>
                <td class="label-cell">Date of Certificate</td>
                <td class="input-cell">
                    <div style="display: flex; align-items: center; gap: 5px;">
                        <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                        <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();"><i class="far fa-calendar-alt"></i></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
        <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 5px 20px; text-transform: none; border: 1px solid #000; font-weight: bold;">Consult</button>
        <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 5px 20px; text-transform: none; border: 1px solid #000; font-weight: bold;" onclick="window.location.reload()">Clear</button>
    </div>
</div>

@endsection
