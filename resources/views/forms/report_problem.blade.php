@extends('layouts.app')

@section('title', 'Report Problem')
@section('header', 'Report Problem')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Report Problem</span>
        <i class="fas fa-edit"></i>
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
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection