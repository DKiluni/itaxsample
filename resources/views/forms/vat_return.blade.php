@extends('layouts.app')

@section('title', 'VAT Return')
@section('header', 'Value Added Tax (VAT) Return Filing')


@section('content')
<div class="form-container">
    <div class="form-header">
        <span>VAT Return - Digital Service Tax</span>
        <span>Period: Jan 2026</span>
    </div>

    <div class="form-body">
        <div class="form-section">
            <div class="form-subheader">Section A: General Information</div>
            <div class="form-group">
                <label class="form-label">PIN</label>
                <input type="text" class="form-control" value="P05XXXXXXXX" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Taxpayer Name</label>
                <input type="text" class="form-control" value="John Doe Enterprises" disabled>
            </div>
        </div>

        <div class="form-section">
            <div class="form-subheader">Section B: Sales at 16% VAT</div>
            <p style="font-size: 0.8rem; color: #666; margin-bottom: 10px;">Provide details of all taxable supplies made during the period.</p>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Description of Supply</th>
                        <th class="text-right">Taxable Value (Kes)</th>
                        <th class="text-right">VAT Amount (Kes)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>General Supplies (16%)</td>
                        <td class="text-right"><input type="number" class="form-control text-right" style="max-width: 150px;" value="0.00"></td>
                        <td class="text-right"><input type="number" class="form-control text-right" style="max-width: 150px;" value="0.00" disabled></td>
                    </tr>
                    <tr>
                        <td>Digital Services (16%)</td>
                        <td class="text-right"><input type="number" class="form-control text-right" style="max-width: 150px;" value="0.00"></td>
                        <td class="text-right"><input type="number" class="form-control text-right" style="max-width: 150px;" value="0.00" disabled></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: bold; background: #eee;">
                        <td>TOTAL SALES</td>
                        <td class="text-right">0.00</td>
                        <td class="text-right">0.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="form-section">
            <div class="form-subheader">Section C: Final Tax Liability</div>
            <div class="form-group">
                <label class="form-label">Total VAT Due</label>
                <input type="text" class="form-control text-right" value="Kes. 0.00" disabled style="background: #fff8f8; font-weight: bold; color: var(--kra-red);">
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary"><i class="fas fa-save"></i> Save as Draft</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Validate and Submit</button>
    </div>
</div>
@endsection
