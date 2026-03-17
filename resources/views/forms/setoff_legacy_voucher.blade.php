@extends('layouts.app')

@section('title', 'Setoff Legacy Credit Voucher')
@section('header', 'Setoff Legacy Credit Voucher')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
@php
    $showUnauthorized = true; // Toggle this to show the unauthorized view
@endphp

@if($showUnauthorized)
<div class="form-container">
    <div class="warning-box">
        <div class="warning-header">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <div class="warning-body">
            This facility is not available for Individual Taxpayers.
        </div>
    </div>
    <div class="back-btn-container">
        <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Cancel</button>
    </div>
</div>
@else
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Setoff Legacy Credit Voucher</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">General Details</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000X" disabled required>
                        </td>
                        <td class="label-cell">Reference<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" placeholder="Enter Reference" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Description</td>
                        <td class="input-cell" colspan="3">
                            <textarea class="form-textarea-custom" rows="5" placeholder="Enter description..."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Attachment</td>
                        <td class="input-cell" colspan="3">
                            <input type="file" class="form-input-custom">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Reset</button>
        </div>
    </div>
</div>
@endif
@endsection


