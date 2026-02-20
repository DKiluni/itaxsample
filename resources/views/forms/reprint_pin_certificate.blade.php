@extends('layouts.app')

@section('title', 'Reprint PIN Certificate')
@section('header', 'Reprint PIN Certificate')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Reprint Acknowledgement Receipt</span>
        <i class="fas fa-print"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
    <div class="form-subheader">Transaction Details</div>
    <div class="form-group">
        <label class="form-label">Search Reference</label>
        <div style="display: flex; gap: 10px;">
            <input type="text" class="form-control" placeholder="Enter Reference No.">
            <button class="btn-kra btn-kra-primary"><i class="fas fa-search"></i> Search</button>
        </div>
    </div>
</div>
        <div class="form-section">
            <div class="form-subheader">Search Criteria</div>
            <p style="margin-bottom: 20px; color: #666; font-size: 0.9rem;">To reprint your PIN certificate, please select the taxpayer type and click submit.</p>
            
            <div class="form-group">
                <label class="form-label mandatory">Taxpayer Type</label>
                <select class="form-control">
                    <option value="">--Select--</option>
                    <option value="1">Individual</option>
                    <option value="2">Non-Individual</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-arrow-left"></i> Back</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection