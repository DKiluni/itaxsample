@extends('layouts.app')

@section('title', 'Generate Tax Specific Password')
@section('header', 'Generate Tax Specific Password')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Generate Password</span>
        <i class="fas fa-key"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Password Generation</div>
            <p style="margin-bottom: 20px; color: #666; font-size: 0.9rem;">Select the tax type for which you want to generate a specific password.</p>
            
            <div class="form-group">
                <label class="form-label mandatory">Tax Type</label>
                <select class="form-control">
                    <option value="">--Select--</option>
                    <option value="VAT">Value Added Tax</option>
                    <option value="ITR">Income Tax Resident</option>
                    <option value="WEH">Withholding Tax</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-primary">Generate</button>
    </div>
</div>
@endsection
