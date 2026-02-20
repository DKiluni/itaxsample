@extends('layouts.app')

@section('title', 'Apply Payment Plan')
@section('header', 'Apply Payment Plan')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Apply Payment Plan</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        <div class="wizard-steps">
            <div class="step-item active"><div class="step-circle">1</div><div class="step-label">Basic Details</div></div>
            <div class="step-item"><div class="step-circle">2</div><div class="step-label">Specifics</div></div>
            <div class="step-item"><div class="step-circle">3</div><div class="step-label">Declaration</div></div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection