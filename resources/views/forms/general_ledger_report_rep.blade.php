@extends('layouts.app')

@section('title', 'General Ledger Report for Tax Rep')
@section('header', 'General Ledger Report for Tax Rep')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>General Ledger Report for Tax Rep</span>
        <i class="fas fa-file-alt"></i>
    </div>

    <div class="form-body">
        
        <div class="form-section">
            <div class="form-subheader">Financial Data Grid</div>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th class="text-right">Debit (Kes)</th>
                        <th class="text-right">Credit (Kes)</th>
                        <th class="text-right">Balance (Kes)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01/02/2026</td>
                        <td>Opening Balance</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">5,000.00</td>
                        <td class="text-right">5,000.00</td>
                    </tr>
                    <tr>
                        <td>15/02/2026</td>
                        <td>Monthly Installment</td>
                        <td class="text-right">1,200.00</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">3,800.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="report-card">
            <h4 style="margin-bottom: 15px; color: var(--kra-red); border-bottom: 1px solid #eee; padding-bottom: 8px;">Taxpayer Details</h4>
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
            <div class="form-subheader">Report Data</div>
            <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">Select a period to view details.</p>
             <div style="display: flex; gap: 10px; margin-bottom: 20px; align-items: center; background: #f9fafb; padding: 15px; border: 1px solid #eee;">
                <label>From:</label>
                <input type="date" class="form-control" style="width: auto;">
                <label>To:</label>
                <input type="date" class="form-control" style="width: auto;">
                <button class="btn-kra btn-kra-secondary">Generate Report</button>
            </div>
            
            <table class="table" style="width: 100%; border-collapse: collapse; font-size: 0.9rem;">
                <thead>
                    <tr style="background: #f1f2f3;">
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ddd; color: #444;">Date</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ddd; color: #444;">Transaction Type</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ddd; color: #444;">Reference</th>
                        <th style="padding: 12px; text-align: right; border-bottom: 2px solid #ddd; color: #444;">Amount (Kes)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" style="text-align: center; padding: 40px; color: #999;">
                            <i class="fas fa-inbox" style="font-size: 2rem; margin-bottom: 10px; display: block; opacity: 0.5;"></i>
                            No data loaded. Please generate report.
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