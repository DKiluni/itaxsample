@extends('layouts.app')

@section('title', 'PIN Registration')
@section('header', 'Taxpayer Registration')

@section('content')
<div class="form-container">
    <div class="form-tabs">
        <div class="form-tab active">Basic Information</div>
        <div class="form-tab">Obligation Details</div>
        <div class="form-tab">Agent Details</div>
        <div class="form-tab">Business Details</div>
    </div>

    <div class="form-header">
        <span>PIN Registration - Individual</span>
        <i class="fas fa-info-circle"></i>
    </div>

    <div class="form-body">
        
        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">Basic Details</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">Specifics</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">Declaration</div></div>
        </div>
        <div class="form-section">
            <div class="form-subheader">Basic Details</div>
            
            <div class="form-group">
                <label class="form-label mandatory">Taxpayer Type</label>
                <select class="form-control">
                    <option>Individual</option>
                    <option>Non-Individual</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label mandatory">Citizenship</label>
                <select class="form-control">
                    <option>Kenyan</option>
                    <option>Non-Kenyan Resident</option>
                    <option>Non-Kenyan Non-Resident</option>
                </select>
            </div>
        </div>

        <div class="form-section">
            <div class="form-subheader">Personal Details</div>
            
            <div class="form-group">
                <label class="form-label mandatory">National ID Number</label>
                <div style="display: flex; gap: 10px; width: 100%; max-width: 400px;">
                    <input type="text" class="form-control" placeholder="Enter ID Number">
                    <button class="btn-kra btn-kra-primary" style="padding: 5px 15px;">Verify</button>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" disabled value="[Verified from IPRS]">
            </div>

            <div class="form-group">
                <label class="form-label">Surname</label>
                <input type="text" class="form-control" disabled value="[Verified from IPRS]">
            </div>

            <div class="form-group">
                <label class="form-label mandatory">Date of Birth</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="form-section">
            <div class="form-subheader">Contact Details</div>
            
            <div class="form-group">
                <label class="form-label mandatory">Email Address</label>
                <input type="email" class="form-control" placeholder="example@domain.com">
            </div>

            <div class="form-group">
                <label class="form-label mandatory">Mobile Number</label>
                <input type="tel" class="form-control" placeholder="07XXXXXXXX">
            </div>
        </div>
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-arrow-left"></i> Back to Dashboard</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-arrow-right"></i> Next Step</button>
    </div>
</div>
@endsection
