@extends('layouts.app')

@section('title', 'Change Password')
@section('header', 'Change Password')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Change Password</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Enter New Credentials</div>
            <div class="form-group">
                <label class="form-label mandatory">Old Password</label>
                <input type="password" class="form-control" placeholder="********">
            </div>
            <div class="form-group">
                <label class="form-label mandatory">New Password</label>
                <input type="password" class="form-control" placeholder="********">
            </div>
            <div class="form-group">
                <label class="form-label mandatory">Confirm New Password</label>
                <input type="password" class="form-control" placeholder="********">
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection