@extends('layouts.app')

@section('title', 'Objection to Tax Decision')
@section('header', 'Objection to Tax Decision')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Objection to Tax Decision</span>
        <i class="fas fa-tasks"></i>
    </div>

    <div class="form-body">
        
        <div class="form-section">
            <div class="form-subheader">Supporting Documents</div>
            <div class="upload-zone">
                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                <p style="color: #6b7280; font-size: 0.9rem;">Drag and drop files here or <span style="color: var(--kra-red); cursor: pointer; font-weight: 600;">Browse</span></p>
                <p style="font-size: 0.75rem; color: #9ca3af; margin-top: 5px;">Supported formats: PDF, JPG, PNG (Max 5MB)</p>
            </div>
        </div>
        <!-- Wizard Navigation -->
        <div class="wizard-steps">
            <div class="step-item active">
                <div class="step-circle">1</div>
                <div class="step-label">Basic Info</div>
            </div>
            <div class="step-item">
                <div class="step-circle">2</div>
                <div class="step-label">Details</div>
            </div>
            <div class="step-item">
                <div class="step-circle">3</div>
                <div class="step-label">Uploads</div>
            </div>
            <div class="step-item">
                <div class="step-circle">4</div>
                <div class="step-label">Summary</div>
            </div>
        </div>
    
        <div class="form-section">
            <div class="form-subheader">Step 1: Basic Information</div>
            
             <div class="form-group">
                <label class="form-label mandatory">Taxpayer PIN</label>
                <input type="text" class="form-control" value="A001234567Z" readonly style="background: #eee;">
            </div>

            <div class="form-group">
                <label class="form-label mandatory">Taxpayer Name</label>
                <input type="text" class="form-control" value="JOHN DOE" readonly style="background: #eee;">
            </div>
            
             <div class="form-group">
                <label class="form-label mandatory">Type of Application</label>
                <select class="form-control">
                    <option>Select Type...</option>
                    <option>New Application</option>
                    <option>Renewal</option>
                    <option>Amendment</option>
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-times-circle"></i> Cancel</button>
        <button class="btn-kra btn-kra-primary">Next <i class="fas fa-chevron-right" style="font-size: 0.8rem; margin-left: 5px;"></i></button>
    </div>
</div>
@endsection