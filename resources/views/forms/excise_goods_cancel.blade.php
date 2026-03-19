@extends('layouts.app')

@section('title', 'Cancellation of Excise License')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container-red">
    <div class="amendment-banner-wizard">
        Cancellation of Excise License
    </div>

    <div class="section-group">
        <div class="section-group-title">Section A : Taxpayer Details</div>
        <table class="inner-table-custom">
            <tbody>
                <tr>
                    <td class="label-bg" style="width: 20%;">Applicant Type<span style="color: red;">*</span></td>
                    <td class="input-bg" style="width: 30%;">
                        <select class="form-select-custom" style="width: 100%;">
                            <option value="Taxpayer">Taxpayer</option>
                        </select>
                    </td>
                    <td class="label-bg" colspan="2"></td>
                </tr>
                <tr>
                    <td class="label-bg">Taxpayer PIN<span style="color: red;">*</span></td>
                    <td class="input-bg">
                        <input type="text" value="A000000000X" class="form-input-custom" style="width: 100%;" readonly>
                    </td>
                    <td class="label-bg" style="width: 20%;">Taxpayer Name</td>
                    <td class="input-bg" style="width: 30%;">
                        <input type="text" value="TAXPAYER NAME" class="form-input-custom" style="width: 100%;" readonly>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="section-group">
        <div class="section-group-title">Section B : Excise License For Cancellation <span style="color: red;">*</span></div>
        <table class="data-table-custom">
            <thead>
                <tr class="table-header-black">
                    <th style="width: 80px;">Sr. No.</th>
                    <th>Excisable Goods License For</th>
                    <th style="width: 80px;">Select</th>
                    <th>Excise License Number</th>
                    <th>Reason(s) For Cancellation</th>
                    <th>Other Reason</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td><input type="text" class="form-input-custom" style="width: 100%;" readonly></td>
                    <td style="text-align: center;"><input type="checkbox"></td>
                    <td><input type="text" class="form-input-custom" style="width: 100%;" readonly></td>
                    <td>
                        <select class="form-select-custom" style="width: 100%;">
                            <option>--Select--</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-input-custom" style="width: 100%;"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="upload-section-padded" style="margin: 20px;">
        <div style="display: flex; gap: 20px; align-items: start;">
            <div class="upload-info-text">Upload Document<br><span>(Allowed File Types: pdf,jfif,png,bmp,gif,tiff,xls,xlsx,doc,docx,jpg,bmp,txt)</span></div>
            <div><input type="file" style="border: 1px solid #ccc; padding: 5px;"></div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 20px; padding-bottom: 20px;">
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="border-radius: 4px; padding: 8px 30px;">Back</button>
        <button type="button" class="btn-submit-orange" style="border-radius: 4px; padding: 8px 30px; margin-left: 10px;">Submit</button>
    </div>
</div>
@endsection
