@extends('layouts.app')

@section('title', 'Consultation of Previous Payments')
@section('header', 'Consultation of Previous Payments')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Consultation of Previous Payments</span>
        <i class="fas fa-search"></i>
    </div>

    <div class="form-body">
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

        <div class="form-section">
            <div class="form-subheader">Search Results</div>
            
            <div class="no-results">
                <i class="fas fa-info-circle"></i> No records found. Please enter search criteria above.
            </div>
        </div>
    </div>
</div>
@endsection