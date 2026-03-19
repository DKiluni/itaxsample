@extends('layouts.app')

@section('title', 'VAT Withholding Exemption')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with * are mandatory
</div>

<div class="form-container-red">
    <div class="amendment-banner-wizard">
        VAT Withholding Exemption Application
    </div>

    <div class="section-group">
        <div class="section-group-title">Taxpayer Details</div>
        <table class="inner-table-custom">
            <tbody>
                <tr>
                    <td class="label-bg" style="width: 25%;">PIN<span style="color: red;">*</span></td>
                    <td class="input-bg" style="width: 25%;">
                        <input type="text" value="A000000000X" class="form-input-custom" readonly>
                    </td>
                    <td class="input-bg" style="width: 25%; font-weight: bold; background: #f8f9fa;">
                        TAXPAYER NAME
                    </td>
                    <td class="input-bg" style="width: 25%;">
                        <input type="text" value="TAXPAYER NAME" class="form-input-custom" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="label-bg">Main Email Address<span style="color: red;">*</span></td>
                    <td class="input-bg">
                        <input type="text" value="taxpayer@example.com" class="form-input-custom">
                    </td>
                    <td class="label-bg" colspan="2"></td>
                </tr>
                <tr>
                    <td class="label-bg">Mobile Number (1)<span style="color: red;">*</span></td>
                    <td class="input-bg">
                        <input type="text" value="0712345678" class="form-input-custom">
                    </td>
                    <td class="label-bg" colspan="2"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="text-align: center; margin-top: 20px; padding-bottom: 20px;">
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="border-radius: 4px; padding: 8px 30px;">Back</button>
        <button type="button" class="btn-submit-orange" style="border-radius: 4px; padding: 8px 30px; margin-left: 10px;">Submit</button>
    </div>
</div>
@endsection
