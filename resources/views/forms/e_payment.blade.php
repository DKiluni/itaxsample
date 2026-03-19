@extends('layouts.app')

@section('title', 'e-Payment')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">e-Payment</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Transaction Details</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Search Reference</td>
                        <td class="input-cell" colspan="3">
                            <div class="search-filter-row-custom">
                                <input type="text" class="form-input-custom" placeholder="Enter Reference No." required>
                                <button type="button" class="btn-custom btn-submit-orange">Search</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

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
@endsection


