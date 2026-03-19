@extends('layouts.app')

@section('title', 'File Nil Return')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container">
        <div class="form-header-banner">Nil e-Return</div>

        <div class="form-body">
            <div class="section-field">
                <div class="section-title-legend">Nil Return Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 30%; ">Type<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <select class="form-select-custom">
                                    <option value="Self">Self</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Taxpayer PIN<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom" value="A013758466Z" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Tax Obligation<span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <select class="form-select-custom">
                                    <option value="">--Select--</option>
                                    <option value="Income Tax - Rent Income (MRI)">Income Tax - Rent Income (MRI)</option>
                                    <option value="Income Tax - Resident Individual">Income Tax - Resident Individual</option>
                                    <option value="Income Tax - Non-Resident Individual">Income Tax - Non-Resident Individual</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row" style="justify-content: center; gap: 10px; margin-top: 20px;">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="button" class="btn-custom btn-submit-orange">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection



