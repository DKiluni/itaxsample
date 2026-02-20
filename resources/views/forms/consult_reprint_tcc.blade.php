@extends('layouts.app')

@section('title', 'Consult and Reprint TCC')
@section('header', 'Consult and Reprint TCC')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>TCC Consultation</span>
        <i class="fas fa-search"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Search Criteria</div>
            <div class="form-group">
                <label class="form-label">TCC Reference Number</label>
                <input type="text" class="form-control" placeholder="Enter TCC Ref No.">
            </div>
            <div class="form-group">
                <label class="form-label">PIN</label>
                <input type="text" class="form-control" value="A001234567Z" readonly>
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-primary"><i class="fas fa-search"></i> Search</button>
    </div>
</div>
@endsection
