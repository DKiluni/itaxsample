@extends('layouts.app')

@section('title', 'Consultation of Previous Payments')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Consultation of Previous Payments</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Search Criteria</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Search Criteria<span class="required-star">*</span></td>
                        <td class="input-cell" colspan="3">
                            <div class="search-filter-row-custom">
                                <select class="form-select-custom search-select-200" required>
                                    <option>Reference Number</option>
                                    <option>PIN</option>
                                    <option>Date Range</option>
                                </select>
                                <input type="text" class="form-input-custom" placeholder="Enter search term...">
                                <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Back</button>
        </div>
    </div>
</div>
@endsection


