@extends('layouts.app')

@section('title', 'Payment Registration')
@section('header', 'Payment Registration')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Payment Registration</span>
        <i class="fas fa-tasks"></i>
    </div>

    <div class="form-body">
        
                <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">Specifics</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">Declaration</div></div>
        </div>
        <!-- Wizard Navigation -->
        
    
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