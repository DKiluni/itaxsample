@extends('layouts.app')

@section('title', 'Appeal to the Local Committee/Tribunal')
@section('header', 'Appeal to the Local Committee/Tribunal')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Appeal to the Local Committee/Tribunal</span>
        <i class="fas fa-edit"></i>
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
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection