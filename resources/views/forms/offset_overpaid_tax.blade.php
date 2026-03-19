@extends('layouts.app')

@section('title', 'Refund or Offset Overpaid Taxes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container-red">
    <div class="form-header-banner-wizard">
        Refund or Offset Overpaid Taxes
    </div>
    <div class="form-body">
        <table class="inner-profile-table">
            <tbody>
                <tr>
                    <td class="label-cell" style="width: 50%;">Type<span class="required-star">*</span></td>
                    <td class="input-cell" style="width: 50%;">
                        <select class="form-select-custom">
                            <option value="Self">Self</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <input type="text" class="form-input-custom" value="A013758466Z" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Taxpayer Name<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <input type="text" class="form-input-custom" value="DAVID KILUNI MWANIKI" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Refund/Offset<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <select class="form-select-custom">
                            <option>------Select------</option>
                            <option>Refund of Overpaid Tax</option>
                            <option>Offset of Overpaid Tax</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
            <button type="button" class="btn-custom btn-primary-blue">Next</button>
        </div>
    </div>
</div>
@endsection


