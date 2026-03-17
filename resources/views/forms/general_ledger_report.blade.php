@extends('layouts.app')

@section('title', 'General Ledger Report')
@section('header', 'General Ledger Report')



@section('content')
<div class="form-container">
    <div class="form-header-banner">
        General Ledger Report
    </div>

    <div class="form-body">
        
        <div class="form-section">
            <div class="form-subheader" style="color: #DA3832; font-weight: bold;">Financial Data Grid</div>
            <table class="table" style="width: 100%; border-collapse: collapse; font-size: 0.9rem; border: 1px solid #ddd;">
                <thead class="table-header-black" style="text-align: center;">
                    <tr>
                        <th style="padding: 8px; border: 1px solid #fff;">Date</th>
                        <th style="padding: 8px; border: 1px solid #fff;">Description</th>
                        <th class="text-right" style="padding: 8px; border: 1px solid #fff;">Debit (Kes)</th>
                        <th class="text-right" style="padding: 8px; border: 1px solid #fff;">Credit (Kes)</th>
                        <th class="text-right" style="padding: 8px; border: 1px solid #fff;">Balance (Kes)</th>
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
            <h4 style="margin-bottom: 15px; color: #DA3832; border-bottom: 1px solid #DA3832; padding-bottom: 8px;">Taxpayer Details</h4>
            <div class="info-grid">
                <div class="info-item">
                    <label>PIN</label>
                    <span>A000000000X</span>
                </div>
                <div class="info-item">
                    <label>Name</label>
                    <span>TAXPAYER NAME</span>
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
             <div class="form-search-filter">
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


