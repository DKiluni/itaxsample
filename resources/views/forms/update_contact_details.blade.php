@extends('layouts.app')

@section('title', 'Update Contact Details')
@section('header', 'Update Contact Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="mandatoryNotice">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star" style="color: red;">*</span> are mandatory
    </div>
</div>

<div class="form-container" style="border: none; box-shadow: none; background: transparent; padding: 0;">
    <div class="form-body" style="padding: 0;">
        <div class="tab-content-wrapper" style="min-height: auto; border-radius: 5px; overflow: hidden; border: 1px solid #DA3832; background: #fff; margin-top: 15px;">
            <div style="background-color: #DA3832; color: #fff; padding: 10px 15px; text-align: center; border-bottom: none; font-weight: bold; font-size: 1.1rem;">
                Amend Contact Details
            </div>
            
            <table class="inner-profile-table" style="margin-bottom: 0; border: none; width: 100%;">
                <tbody>
                    <tr>
                        <td class="label-cell" style="width: 25%; border-top: none; border-left: none;">PIN</td>
                        <td class="input-cell" style="width: 25%; border-top: none;">
                            <input type="text" class="form-input-custom" value="A000000000A" readonly style="background-color: #f3f4f6; color: #000;">
                        </td>
                        <td class="label-cell" style="width: 25%; border-top: none;">Taxpayer Name</td>
                        <td class="input-cell" style="width: 25%; border-top: none; border-right: none;">
                            <input type="text" class="form-input-custom" value="JOHN DOE" readonly style="background-color: #f3f4f6; color: #000;">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell" style="border-left: none;">Main Email Address <span style="color: red;">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="JOHNDOE@EXAMPLE.COM">
                        </td>
                        <td class="label-cell" style="background: #fbfbfb;"></td>
                        <td class="input-cell" style="border-right: none; background: #fbfbfb;"></td>
                    </tr>
                    <tr>
                        <td class="label-cell" style="border-left: none; border-bottom: none;">Mobile Number (1) <span style="color: red;">*</span></td>
                        <td class="input-cell" style="border-bottom: none;">
                            <input type="text" class="form-input-custom" value="0711111111" style="width: 60%;">
                        </td>
                        <td class="label-cell" style="border-bottom: none; background: #fbfbfb;"></td>
                        <td class="input-cell" style="border-right: none; border-bottom: none; background: #fbfbfb;"></td>
                    </tr>
                </tbody>
            </table>
            
            <div style="display: flex; justify-content: center; align-items: center; gap: 15px; padding: 15px; background-color: #f0f0f0; border-top: 1px solid #ccc; margin-bottom: 1px;">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Cancel</button>
                <button type="button" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection