@extends('layouts.app')

@section('title', 'Excise Refund')
@section('header', 'Excise Refund')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>Excise Refund</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        <div class="liability-warning-banner">
            Please note that you cannot apply for a tax refund because of liability to be paid. Find below the details of the pending liabilities and then pay before proceeding with the application. Kindly liaise with your respective tax service office for further assistance to be facilitated with the refund application.
        </div>

        <div class="section-field" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="section-title-legend">Pending Liabilities</div>
            <table class="inner-profile-table">
                <thead class="table-header-black">
                    <tr>
                        <th>Obligation Name</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" style="text-align: center;">No Records Found</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-field">
            <div class="section-title-legend">General Details</div>
            
             <div class="form-group">
                <label class="form-label mandatory">PIN</label>
                <input type="text" class="form-control" value="A000000000X" disabled>
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


