@extends('layouts.app')

@section('title', 'Amend PIN Details')
@section('header', 'Amend PIN Details')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Amendment Application</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        
        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">Basic Details</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">Specifics</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">Declaration</div></div>
        </div>
        <div class="form-section">
            <div class="form-subheader">Amendment Type</div>
            <div class="form-group">
                <label class="form-label mandatory">Nature of Amendment</label>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <label style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                        <input type="radio" name="amend_type" value="online"> Online Amendment
                    </label>
                    <label style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem;">
                        <input type="radio" name="amend_type" value="manual"> Manual Amendment
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">PIN</label>
                <input type="text" class="form-control" value="A001234567Z" readonly>
            </div>
        </div>
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-primary"><i class="fas fa-arrow-right"></i> Next</button>
    </div>
</div>
@endsection