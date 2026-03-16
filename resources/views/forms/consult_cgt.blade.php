@extends('layouts.app')

@section('title', 'Consult CGT Return')
@section('header', 'Consult CGT Return')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Consult CGT Return</div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">Search Criteria</div>
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">CGT Type</td>
                        <td class="input-cell">
                            <select class="form-select-custom" required>
                                <option>-- Select --</option>
                            </select>
                        </td>
                        <td class="label-cell">Taxpayer PIN</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Acknowledgement No :</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                        <td class="label-cell">Payment Registration Number :</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Type of Declaration</td>
                        <td class="input-cell">
                            <select class="form-select-custom">
                                <option>-- Select --</option>
                            </select>
                        </td>
                        <td class="label-cell"></td>
                        <td class="input-cell"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-footer-buttons">
            <button type="submit" class="btn-custom btn-submit-orange">Consult</button>
            <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
        </div>
    </div>
</div>
@endsection