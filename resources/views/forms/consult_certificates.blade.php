@extends('layouts.app')

@section('title', 'Consult and Reprint Acknowledgement Receipt and Certificates')
@section('header', 'Consult and Reprint Acknowledgement Receipt and Certificates')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">
        CONSULT AND REPRINT ACKNOWLEDGEMENT RECEIPT AND CERTIFICATES
    </div>

    <div class="form-body" style="padding: 10px;">
        <div class="search-panel">
            <div class="form-group" style="grid-template-columns: 1fr; gap: 10px;">
                <label class="form-label">Search Criteria</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <select class="form-control" style="max-width: 200px;">
                        <option>Reference Number</option>
                        <option>PIN</option>
                        <option>Date Range</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Enter search term...">
                    <button class="btn-kra btn-kra-primary"><i class="fas fa-search"></i> Consult</button>
                </div>
            </div>
        </div>

        <div class="section-group">
            <div class="section-group-title" style="margin: 15px 15px 5px 15px;">Search Results</div>
            
            <div class="no-results" style="margin: 0 15px 15px 15px;">
                <i class="fas fa-info-circle"></i> No records found. Please enter search criteria above.
            </div>
        </div>
    </div>
</div>
@endsection