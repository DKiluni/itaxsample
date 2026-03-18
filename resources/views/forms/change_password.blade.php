@extends('layouts.app')

@section('title', 'Change Password')
@section('header', 'Change Password')

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
            Change Password
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Enter New Credentials</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Old Password <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="password" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">New Password <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="password" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Confirm New Password <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="password" class="form-input-custom" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="reset" class="btn-custom btn-primary-blue">Reset</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection



