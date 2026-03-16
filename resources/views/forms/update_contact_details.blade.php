@extends('layouts.app')

@section('title', 'Update Contact Details')
@section('header', 'Update Contact Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        UPDATE CONTACT DETAILS
    </div>
    <div class="form-body" style="padding: 10px;">
        <div class="section-group">
            <div class="section-group-title">Contact Details</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell" style="width: 25%;">PIN</td>
                        <td class="input-cell" style="width: 25%;">
                            <input type="text" class="form-input-custom" value="A000000000A" readonly>
                        </td>
                        <td class="label-cell" style="width: 25%;">Taxpayer Name</td>
                        <td class="input-cell" style="width: 25%;">
                            <input type="text" class="form-input-custom" value="JOHN DOE" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Main Email Address <span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="JOHNDOE@EXAMPLE.COM">
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
                    </tr>
                    <tr>
                        <td class="label-cell">Mobile Number (1) <span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="0711111111" style="width: 60%;">
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
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
</div>
@endsection