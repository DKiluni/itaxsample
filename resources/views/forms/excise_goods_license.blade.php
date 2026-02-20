@extends('layouts.app')

@section('title', 'Excise Goods License')
@section('header', 'Excise Goods License')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Excise Goods License</span>
        <i class="fas fa-tasks"></i>
    </div>

    <div class="form-body">
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