@extends('layouts.app')

@section('title', 'View Taxpayer Profile')
@section('header', 'View Taxpayer Profile')

@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Taxpayer Details</span>
        <i class="fas fa-user-circle"></i>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Basic Information</div>
            <div class="form-group">
                <label class="form-label">PIN</label>
                <input type="text" class="form-control" value="A001234567Z" readonly>
            </div>
            <div class="form-group">
                <label class="form-label">Taxpayer Name</label>
                <input type="text" class="form-control" value="JOHN DOE" readonly>
            </div>
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" value="john.doe@example.com" readonly>
            </div>
        </div>

        <div class="form-section">
            <div class="form-subheader">Tax Obligations</div>
            <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                <thead>
                    <tr style="background: var(--kra-light-blue); text-align: left;">
                        <th style="padding: 10px; border: 1px solid var(--kra-border-gray);">Obligation Name</th>
                        <th style="padding: 10px; border: 1px solid var(--kra-border-gray);">Effective From Date</th>
                        <th style="padding: 10px; border: 1px solid var(--kra-border-gray);">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray);">Income Tax - Resident Individual</td>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray);">01/01/2014</td>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray); color: green; font-weight: 600;">Active</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray);">Value Added Tax (VAT)</td>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray);">01/06/2018</td>
                        <td style="padding: 10px; border: 1px solid var(--kra-border-gray); color: green; font-weight: 600;">Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-primary"><i class="fas fa-times"></i> Close</button>
    </div>
</div>
@endsection