@extends('layouts.app')

@section('title', 'Update Contact Details')
@section('header', 'Update Contact Details')

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
            UPDATE CONTACT DETAILS
        </div>
        <div class="form-body">
            <div class="section-field">
                <div class="section-title-legend">Contact Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%; ">PIN</td>
                            <td class="input-cell" style="width: 25%; ">
                                <input type="text" class="form-input-custom" value="A000000000X" readonly>
                            </td>
                            <td class="label-cell" style="width: 25%; ">TAXPAYER NAME</td>
                            <td class="input-cell" style="width: 25%; ">
                                <input type="text" class="form-input-custom" value="TAXPAYER NAME" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Main Email Address <span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom" value="taxpayer@example.com">
                            </td>
                            <td class="label-cell" style=""></td>
                            <td class="input-cell" style=""></td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="">Mobile Number (1) <span class="required-star">*</span></td>
                            <td class="input-cell" style="">
                                <input type="text" class="form-input-custom" value="0712345678">
                            </td>
                            <td class="label-cell" style=""></td>
                            <td class="input-cell" style=""></td>
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



