@extends('layouts.app')

@section('title', 'Refund or Offset Overpaid Taxes')
@section('header', 'Refund or Offset Overpaid Taxes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-body">
        <table class="inner-profile-table" style="margin-bottom: 0;">
            <thead>
                <tr>
                    <th colspan="2" class="table-header-black" style="text-align: center;">Refund or Offset Overpaid Taxes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="label-cell" style="width: 50%;">Type<span class="required-star">*</span></td>
                    <td class="input-cell" style="width: 50%;">
                        <select class="form-select-custom" style="width: auto; min-width: 200px;">
                            <option value="Self">Self</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <input type="text" class="form-input-custom" value="A013758466Z" readonly style="width: auto; min-width: 200px;">
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Taxpayer Name<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <input type="text" class="form-input-custom" value="DAVID KILUNI MWANIKI" readonly style="width: auto; min-width: 200px;">
                    </td>
                </tr>
                <tr>
                    <td class="label-cell">Refund/Offset<span class="required-star">*</span></td>
                    <td class="input-cell">
                        <select class="form-select-custom" style="width: auto; min-width: 200px;">
                            <option>------Select------</option>
                            <option>Refund of Overpaid Tax</option>
                            <option>Offset of Overpaid Tax</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div style="display: flex; justify-content: center; gap: 10px; padding: 20px 0;">
            <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 6px 30px; border: none; font-weight: bold;">Back</button>
            <button type="button" class="btn-custom" style="background-color: #000; color: #fff; padding: 6px 30px; border: none; font-weight: bold;">Next</button>
        </div>
    </div>
@endsection


