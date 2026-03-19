@extends('layouts.app')

@section('title', 'Spirits & Illuminating Kerosene License')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with * are mandatory
</div>

<div class="form-container-red">
    <div class="amendment-banner-wizard">
        Spirits & Illuminating Kerosene License
    </div>

    <div class="form-body">
        <div class="section-group">
            <div class="section-group-title">General Details</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg" style="width: 25%;">PIN<span style="color: red;">*</span></td>
                        <td class="input-bg" style="width: 25%;">
                            <input type="text" value="A000000000X" class="form-input-custom" readonly>
                        </td>
                        <td class="label-bg" style="width: 25%;">Reference<span style="color: red;">*</span></td>
                        <td class="input-bg" style="width: 25%;">
                            <input type="text" class="form-input-custom" placeholder="Enter Reference">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-bg">Description</td>
                        <td colspan="3">
                            <textarea class="form-input-custom" rows="5" placeholder="Enter description..."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-bg">Attachment</td>
                        <td colspan="3">
                            <input type="file" class="form-input-custom">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="form-footer-grey-area">
        <button type="button" class="btn-primary-blue">Reset</button>
        <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
        <button type="button" class="btn-submit-orange">Submit</button>
    </div>
</div>
@endsection
