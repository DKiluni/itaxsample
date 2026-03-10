@extends('layouts.app')

@section('title', 'Debt Details')
@section('header', 'Debt Details')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Debt Details</span>
        <i class="fas fa-file-alt"></i>
    </div>

    <div class="form-body">
        <div class="report-card">
            <h4 style="margin-bottom: 15px; color: #DA3832; border-bottom: 1px solid #DA3832; padding-bottom: 8px;">Taxpayer Details</h4>
            <div class="info-grid">
                <div class="info-item">
                    <label>PIN</label>
                    <span>A001234567Z</span>
                </div>
                <div class="info-item">
                    <label>Name</label>
                    <span>JOHN DOE</span>
                </div>
                <div class="info-item">
                    <label>Station</label>
                    <span>NAIROBI NORTH</span>
                </div>
                <div class="info-item">
                    <label>Status</label>
                    <span style="color: green; font-weight: bold;">ACTIVE</span>
                </div>
            </div>
        </div>

        <div class="form-section">
            <div class="form-subheader" style="color: #DA3832; font-weight: bold;">Report Data</div>
            <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">Select a period to view details.</p>
             <div style="display: flex; gap: 10px; margin-bottom: 20px; align-items: center; background: #f9fafb; padding: 15px; border: 1px solid #DA3832;">
                <label>From:</label>
                <input type="date" class="form-control" style="width: auto;">
                <label>To:</label>
                <input type="date" class="form-control" style="width: auto;">
                <button class="btn-kra btn-kra-secondary">Generate Report</button>
            </div>
            
            <table class="table" style="width: 100%; border-collapse: collapse; font-size: 0.9rem; border: 1px solid #ddd;">
                <thead class="table-header-black" style="text-align: center;">
                    <tr>
                        <th style="padding: 8px; border: 1px solid #fff;">Date</th>
                        <th style="padding: 8px; border: 1px solid #fff;">Transaction Type</th>
                        <th style="padding: 8px; border: 1px solid #fff;">Reference</th>
                        <th style="padding: 8px; border: 1px solid #fff;">Amount (Kes)</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td colspan="4" style="padding: 0;">
                            <div class="empty-state-container">
                                <i class="fas fa-file-alt"></i>
                                <span>No Records Found</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-print"></i> Print</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-download"></i> Export to Excel</button>
    </div>
</div>
@endsection