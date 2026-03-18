@extends('layouts.app')

@section('title', 'Generate Tax Specific Password')
@section('header', 'Generate Tax Specific Password')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container">
        <div class="form-header-banner">
            Generate Tax Specific Password
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Password Generation</div>
                <div class="form-description">
                    Select the tax type for which you want to generate a specific password.
                </div>
                
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Tax Type<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom" required>
                                    <option value="">--Select--</option>
                                    <option value="VAT">Value Added Tax</option>
                                    <option value="ITR">Income Tax Resident</option>
                                    <option value="WEH">Withholding Tax</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="btn-row">
                <button type="submit" class="btn-custom btn-submit-orange">Generate</button>
            </div>
        </div>
    </div>
</div>
@endsection



