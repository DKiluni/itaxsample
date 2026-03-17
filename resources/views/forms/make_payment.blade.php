@extends('layouts.app')

@section('title', 'Make Payment')
@section('header', 'Make Payment')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Web Checkout Form</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Basic Details</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000X" required>
                        </td>
                        <td class="label-cell">TAXPAYER NAME<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="TAXPAYER NAME" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer Address<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <textarea class="form-textarea-custom" rows="3" required>DUMMY PHYSICAL ADDRESS, NAIROBI, KENYA</textarea>
                        </td>
                        <td class="label-cell">Email Address<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="DUMMY@EXAMPLE.COM" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Mode of Payment<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select class="form-select-custom" required>
                                <option>--Select--</option>
                            </select>
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-group">
            <div class="section-group-title">Payment Details</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Payment Registration Number<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" required>
                        </td>
                        <td class="label-cell">Amount to be Paid (Ksh)<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Mobile Number<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <div class="search-filter-row-custom">
                                <span>254</span>
                                <input type="text" class="form-input-custom" style="width: 150px;" required>
                            </div>
                            <div style="font-size: 10px; color: red;">[Example- 2547xxxxxxxxx]</div>
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
        </div>
    </div>
</div>
@endsection


