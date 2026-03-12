@extends('layouts.app')

@section('title', 'Payment Registration')
@section('header', 'Payment Registration')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<div class="form-container">
    <div class="form-header-banner">Payment Registration</div>

    <!-- Step 1: e-PAYMENT -->
    <div id="step1">
        <div class="form-body">
            <div class="section-group">
                <div class="section-group-title">e-PAYMENT</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <select id="applicantType" class="form-select-custom">
                                    <option value="Taxpayer">Taxpayer</option>
                                    <option value="Agent">Agent</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" id="taxpayerPin" class="form-input-custom" value="A000000000X">
                            </td>
                            <td class="label-cell">Taxpayer Name</td>
                            <td class="input-cell">
                                <input type="text" id="taxpayerName" class="form-input-custom" value="DUMMY TAXPAYER NAME">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-footer-buttons">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="button" class="btn-custom btn-next-green" onclick="showStep2()">Next</button>
            </div>
        </div>
    </div>

    <!-- Step 2: Payment Information -->
    <div id="step2" class="hidden">
        <div class="form-body">
            <div class="section-group">
                <div class="section-group-title">Payment Information</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">PIN<span class="required-STAR">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                            <td class="label-cell">Taxpayer Name</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer Address</td>
                            <td class="input-cell">
                                <textarea class="form-textarea-custom" rows="3"></textarea>
                            </td>
                            <td class="label-cell">Email Id</td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Tax Head<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                            <td class="label-cell">Tax Sub Head<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Payment Type<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group">
                <div class="section-group-title">How do you want to pay?</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Mode of Payment<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <select class="form-select-custom">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-footer-buttons">
                <button type="button" class="btn-custom btn-cancel-red" onclick="showStep1()">Back</button>
                <button type="submit" class="btn-custom btn-submit-orange" onclick="alert('Payment Submitted')">Submit</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showStep2() {
        document.getElementById('step1').classList.add('hidden');
        document.getElementById('step2').classList.remove('hidden');
        window.scrollTo(0, 0);
    }
    function showStep1() {
        document.getElementById('step2').classList.add('hidden');
        document.getElementById('step1').classList.remove('hidden');
        window.scrollTo(0, 0);
    }
</script>
@endpush
@endsection