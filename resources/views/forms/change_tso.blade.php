@extends('layouts.app')

@section('title', 'Change Tax Service Office')
@section('header', 'Change Tax Service Office')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="mandatoryNotice">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>
</div>

<div class="form-container" style="border: none; background: transparent; padding: 0; box-shadow: none;">
    <div style="text-align: center; font-size: 1.2rem; font-weight: bold; margin-bottom: 15px; color: #000;">
        Change Of TSO Application Form
    </div>

    <div class="form-body" style="padding: 0;">
        <!-- Tab Navigation -->
        <div style="display: flex; overflow-x: auto; margin-bottom: -1px; z-index: 2; position: relative; padding-left: 10px; align-items: flex-end;">
            <div class="tso-tab-btn tso-tab-active" id="tab_a" onclick="showSectionA()">Section A</div>
            <div class="tso-tab-btn tso-tab-inactive" id="tab_b" onclick="showSectionB()">Section B</div>
        </div>

        <div class="tab-content-wrapper" style="min-height: auto;">
            
            <!-- Section A -->
            <div id="section_a">
                <div style="background-color: #DA3832; color: #fff; padding: 10px 15px; text-align: center; border-bottom: none; font-weight: bold; font-size: 1.1rem;">
                    Section A : Taxpayer Details
                </div>
                
                <table class="inner-profile-table" style="margin-bottom: 0; border: none;">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25%; border-top: none; border-left: none;">Applicant Type<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25%; border-top: none;">
                                <select class="form-select-custom">
                                    <option>Taxpayer</option>
                                    <option>Agent</option>
                                </select>
                            </td>
                            <td class="label-cell" style="width: 25%; border-top: none; background: #fbfbfb;"></td>
                            <td class="input-cell" style="width: 25%; border-top: none; border-right: none; background: #fbfbfb;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell" style="border-left: none;">Taxpayer PIN<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" value="A000000000A" readonly style="background-color: #f3f4f6; color: #000;">
                            </td>
                            <td class="label-cell">Taxpayer Name</td>
                            <td class="input-cell" style="border-right: none;">
                                <input type="text" class="form-input-custom" value="JOHN DOE" readonly style="background-color: #f3f4f6; color: #000;">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div style="padding: 10px; background-color: #f0f0f0; border-top: 1px solid #ccc;">
                    <fieldset class="tso-fieldset">
                        <legend class="tso-legend">Current Station Details</legend>
                        <table class="inner-profile-table" style="margin-bottom: 0; border: none; background: transparent;">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 15%; border: none; background: transparent;">L.R. Number</td>
                                    <td class="input-cell" style="width: 35%; border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                    <td class="label-cell" style="width: 15%; border: none; background: transparent;">Building</td>
                                    <td class="input-cell" style="width: 35%; border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="APARTMENT A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell" style="border: none; background: transparent;">Street/Road</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="MAIN STREET" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                    <td class="label-cell" style="border: none; background: transparent;">City/Town</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="CITY A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell" style="border: none; background: transparent;">County</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="County A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                    <td class="label-cell" style="border: none; background: transparent;">District/Sub-county</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="District A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell" style="border: none; background: transparent;">Area/Locality</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="Area A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                    <td class="label-cell" style="border: none; background: transparent;">Tax Service Office</td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" value="TSO A" readonly style="background-color: #f3f4f6; color: #000;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>

                <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1; border-top: 1px solid #ccc;">
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
                    <button type="button" class="btn-custom btn-next-blue" onclick="showSectionB()">Next</button>
                </div>
            </div>

            <!-- Section B -->
            <div id="section_b" style="display: none;">
                <div style="background-color: #DA3832; color: #fff; padding: 10px 15px; text-align: center; border-bottom: none; font-weight: bold; font-size: 1.1rem;">
                    Section B : New Station Details
                </div>
                
                <div style="padding: 10px; background-color: #f0f0f0;">
                    <fieldset class="tso-fieldset">
                        <table class="inner-profile-table" style="margin-bottom: 0; border: none; background: transparent;">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 25%; border: none; background: transparent;">County<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25%; border: none; background: transparent;">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                    <td class="label-cell" style="width: 25%; border: none; background: transparent;">District/Sub-county<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25%; border: none; background: transparent;">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell" style="border: none; background: transparent;">New Tax Service Office(TSO)<span class="required-star">*</span></td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <input type="text" class="form-input-custom" readonly style="background-color: #f4f6fa;">
                                    </td>
                                    <td class="label-cell" style="border: none; background: transparent;">Tax Area/Locality<span class="required-star">*</span></td>
                                    <td class="input-cell" style="border: none; background: transparent;">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell" style="border: none; background: transparent; vertical-align: top; padding-top: 15px;">Remarks<span class="required-star">*</span></td>
                                    <td class="input-cell" colspan="3" style="border: none; background: transparent;">
                                        <div>
                                            <textarea class="form-input-custom" rows="4" style="width: 50%; max-width: 500px; display: block;" onkeyup="document.getElementById('remarkCharCount').value = 500 - this.value.length;"></textarea>
                                            <div style="font-size: 0.75rem; color: #000; margin-top: 2px;">
                                                (Maximum characters: 500)<br>
                                                You have <input type="text" id="remarkCharCount" value="500" readonly style="width: 35px; border: 1px solid #7f9db9; text-align: right; height: 18px; font-size: 11px;"> characters left.
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div style="margin-top: 30px; padding-left: 15px;">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <span style="margin-right: 15px; font-weight: 500;">Upload Supporting Document <span class="required-star">*</span></span>
                                <div style="display: flex; align-items: center; border: 1px solid #7f9db9; background: white; height: 24px;">
                                    <button type="button" style="background: #eef; border: none; border-right: 1px solid #7f9db9; padding: 0 8px; font-size: 12px; height: 100%; cursor: pointer;" onclick="document.getElementById('tsoDoc').click();">Choose File</button>
                                    <span id="tsoDocName" style="padding: 0 8px; font-size: 12px; color: #000;">No file chosen</span>
                                    <input type="file" id="tsoDoc" style="display: none;" onchange="document.getElementById('tsoDocName').textContent = this.files.length > 0 ? this.files[0].name : 'No file chosen';">
                                </div>
                            </div>
                            <div style="color: #DA3832; font-size: 12px;">
                                Allowed file types are:- .doc, .docx, .pdf, .xls, .xlsx, .jpeg, .png, .gif, .ods, .jfif, .tiff, .tif, .zip, .bmp, .txt
                            </div>
                        </div>

                    </fieldset>
                </div>

                <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1; border-top: 1px solid #ccc;">
                    <button type="button" class="btn-custom btn-next-blue" onclick="showSectionA()">Previous</button>
                    <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    <button type="button" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;" onclick="alert('Form submitted successfully!');">Submit</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showSectionA() {
        document.getElementById('tab_a').className = 'tso-tab-btn tso-tab-active';
        document.getElementById('tab_b').className = 'tso-tab-btn tso-tab-inactive';
        document.getElementById('section_a').style.display = 'block';
        document.getElementById('section_b').style.display = 'none';
    }

    function showSectionB() {
        document.getElementById('tab_a').className = 'tso-tab-btn tso-tab-inactive';
        document.getElementById('tab_b').className = 'tso-tab-btn tso-tab-active';
        document.getElementById('section_a').style.display = 'none';
        document.getElementById('section_b').style.display = 'block';
    }
</script>
@endpush
@endsection