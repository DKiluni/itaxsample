@extends('layouts.app')

@section('title', 'Report Problem')

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
            Report Problem
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Submit a question to our support team</div>
                <div class="form-description">
                    Our dedicated staff will respond within 48 hours.
                </div>
                
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">First Name <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Email Address <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="email" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Subject <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Question <span class="required-star">*</span></td>
                            <td class="input-cell">
                                <textarea class="form-textarea-custom" rows="6" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Service</td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option value="">Select a Service</option>
                                    <option>Registration</option>
                                    <option>Returns</option>
                                    <option>Payments</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Category</td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option value="">Select a category</option>
                                    <option>Login Issues</option>
                                    <option>Technical Error</option>
                                    <option>Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Attach Documents</td>
                            <td class="input-cell">
                                <div class="file-upload-row">
                                    <input type="file" id="file-upload" class="hidden">
                                    <button type="button" class="file-upload-btn" onclick="document.getElementById('file-upload').click()">Choose File</button>
                                    <span class="file-upload-label">No file chosen</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit Your Question</button>
            </div>
        </div>
    </div>
</div>
@endsection
