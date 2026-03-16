@extends('layouts.app')

@section('title', 'Application for Tax Compliance Certificate')
@section('header', 'Application for Tax Compliance Certificate')



@section('content')
<div class="mandatory-notice" style="color: red;">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container" style="margin-top: 10px;">
    <div style="font-weight: bold; text-align: center; margin-bottom: 15px; font-size: 1.1rem;">
        Tax Compliance Certificate
    </div>

    <table class="inner-profile-table table-4-col">
        <thead>
            <tr>
                <th colspan="4" style="background-color: #333; color: white; padding: 5px; text-align: center;">Tax Compliance Certificate</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label-cell" style="width: 25%;">PIN of Taxpayer</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="A013758466Z" readonly>
                </td>
                <td class="label-cell" style="width: 25%;">Name of Taxpayer</td>
                <td class="input-cell" style="width: 25%;">
                    <input type="text" class="form-input-custom" value="David Kiluni Mwaniki" readonly>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Reason for Application<span class="required-star">*</span></td>
                <td class="input-cell" colspan="4">
                    <select class="form-select-custom" required>
                        <option>--Select--</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <fieldset style="border: 1px solid #ccc; padding: 10px; margin-top: 15px; background: #fff;">
        <legend style="font-size: 0.9rem; font-weight: bold; width: auto; border: none; margin-bottom: 5px; padding: 0 5px;">Details of Pending Returns</legend>
        <div style="display: flex; justify-content: space-between; padding: 5px; background-color: #f9f9f9;">
            <div style="width: 45%;">Income Tax - Rent Income (MRI)</div>
            <div style="width: 45%; text-align: center; color: #666;">Details of Pending Liability</div>
        </div>
    </fieldset>
</div>

@endsection