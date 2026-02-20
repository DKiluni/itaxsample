@extends('layouts.app')

@section('title', 'Management Sub Agents')
@section('header', 'Management Sub Agents')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Management Sub Agents</span>
        <i class="fas fa-file-invoice"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Information</div>
            <p style="color: #666; margin-bottom: 20px;">This is the dedicated form for <strong>Management Sub Agents</strong>.</p>
            
            <div class="form-group">
                <label class="form-label mandatory">National ID / PIN</label>
                <input type="text" class="form-control" placeholder="Enter identification number">
            </div>

            <div class="form-group">
                <label class="form-label mandatory">Name</label>
                <input type="text" class="form-control" placeholder="As per KRA records">
            </div>
            
             <div class="form-group">
                <label class="form-label">Reference Number</label>
                <input type="text" class="form-control" placeholder="If applicable">
            </div>

            <div class="form-group">
                <label class="form-label">Details</label>
                <textarea class="form-control" rows="4" placeholder="Enter more details here..."></textarea>
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-arrow-left"></i> Back</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-save"></i> Save Changes</button>
    </div>
</div>
@endsection