@extends('layouts.app')

@section('title', 'Excise (Services Only) (Simplified)')
@section('header', 'Excise (Services Only) (Simplified)')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Excise (Services Only) (Simplified)</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">General Details</div>
            
             <div class="form-group">
                <label class="form-label mandatory">PIN</label>
                <input type="text" class="form-control" value="A001234567Z" disabled>
            </div>
            
            <div class="form-group">
                <label class="form-label mandatory">Reference</label>
                <input type="text" class="form-control" placeholder="Enter Reference">
            </div>

            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="5" placeholder="Enter description..."></textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label">Attachment</label>
                <input type="file" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection