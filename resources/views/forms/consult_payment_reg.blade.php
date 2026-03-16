@extends('layouts.app')

@section('title', 'Consult Payment Registration')
@section('header', 'Consult Payment Registration')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Consult Payment Registration</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Search Criteria</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell" colspan="3">
                            <select class="form-select-custom" required>
                                <option>Taxpayer</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000X" required>
                        </td>
                        <td class="label-cell">Payment Registration Number</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.history.back()">Back</button>
            <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
        </div>
    </div>
</div>
@endsection