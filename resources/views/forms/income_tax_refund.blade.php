@extends('layouts.app')

@section('title', 'Income Tax Refund')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="form-container-red">
        <div class="form-header-banner-wizard" style="text-transform: uppercase;">
            INCOME TAX REFUND
        </div>

        <div class="form-body">
            <div class="liability-warning-banner">
                Please note that you cannot apply for a tax refund because of liability to be paid. Find below the details of the pending liabilities and then pay before proceeding with the application. Kindly liaise with your respective tax service office for further assistance to be facilitated with the refund application.
            </div>

            <div class="section-field" style="margin-top: 20px; margin-bottom: 30px;">
                <div class="section-title-legend">Pending Liabilities</div>
                <table class="inner-profile-table" style="width: 100%; border-collapse: collapse;">
                    <thead style="background-color: black; color: white;">
                        <tr>
                            <th style="border-right: 1px solid #fff; text-align: center; padding: 10px; font-weight: bold;">Obligation Name</th>
                            <th style="border-right: 1px solid #fff; text-align: center; padding: 10px; font-weight: bold;">From Date</th>
                            <th style="border-right: 1px solid #fff; text-align: center; padding: 10px; font-weight: bold;">To Date</th>
                            <th style="text-align: center; padding: 10px; font-weight: bold;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" style="text-align: center; color: #b3b3b3; padding: 40px 0; border: 1px solid #ccc; border-top: none;">
                                <i class="far fa-file-alt" style="font-size: 30px; display: block; margin-bottom: 10px; color: #ccc;"></i>
                                No Records Found
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection


