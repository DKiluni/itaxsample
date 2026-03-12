@extends('layouts.app')

@section('title', 'Turnover Tax Cancellation')
@section('header', 'Turnover Tax Cancellation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
<div id="totFormSection">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <!-- Step 1: Applicant Selection -->
    <div id="step1" class="form-container">
        <div class="form-header-banner">
            Turnover Tax Cancellation
        </div>

        <div class="form-body">
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select id="applicantType" class="form-select-custom">
                                <option value="">--Select--</option>
                                <option value="Taxpayer">Taxpayer</option>
                                <option value="Agent">Agent</option>
                                <option value="Sub Agent">Sub Agent</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr class="row-agent row-subagent hidden">
                        <td class="label-cell">Applicant PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="A000000000p" readonly>
                        </td>
                    </tr>
                    <tr class="row-agent row-subagent hidden">
                        <td class="label-cell">Applicant Name</td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" value="User" readonly>
                        </td>
                    </tr>
                    
                    <tr class="row-subagent hidden">
                        <td class="label-cell">Agent Pin<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" required>
                        </td>
                    </tr>
                    <tr class="row-subagent hidden">
                        <td class="label-cell">Agent Name<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" class="form-input-custom" readonly>
                        </td>
                    </tr>
                    
                    <tr class="row-taxpayer row-agent row-subagent hidden">
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" id="taxpayerPinInput" class="form-input-custom" required>
                        </td>
                    </tr>
                    <tr class="row-taxpayer row-agent row-subagent hidden">
                        <td class="label-cell">Taxpayer Name</td>
                        <td class="input-cell">
                            <input type="text" id="taxpayerNameInput" class="form-input-custom" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                <button type="button" class="btn-custom btn-next-blue" id="btnNext">Next</button>
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Step 2: Turnover Details -->
    <div id="step2" class="form-container hidden">
        <div class="form-header-banner">
            Opted Out TOT Registration
        </div>

        <div class="form-body" style="padding: 15px;">
            <!-- Section A -->
            <div class="section-group">
                <div class="section-group-title">Taxpayer Details</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell">PIN<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="A000000000X" readonly></td>
                            <td class="label-cell">Taxpayer Name<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="TAXPAYER NAME" readonly></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Email Address<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="TAXPAYER@EXAMPLE.COM" readonly></td>
                            <td class="label-cell">Descriptive Address<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <textarea class="form-textarea-custom" rows="4" readonly>SAMPLE RESIDENTIAL ADDRESS, NAIROBI, KENYA</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Section B -->
            <div class="section-group">
                <div class="section-group-title">Turnover Income Details</div>
                <table class="inner-profile-table table-4-col">
                    <tbody>
                        <tr>
                            <td class="label-cell">Monthly Turnover Declared in Last Return (Ksh)<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="0.0"></td>
                            <td class="label-cell">Expected Yearly Turnover (Ksh)<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="0.0"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Opted Out Effective Date<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <input type="text" class="form-input-custom datepicker" placeholder="DD/MM/YYYY" style="width: 350px;">
                                </div>
                            </td>
                            <td class="label-cell">Application Remarks<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <div style="display: flex; flex-direction: column; gap: 5px;">
                                    <textarea class="form-textarea-custom" rows="3"></textarea>
                                    <div style="font-size: 10px; color: #666;">(Maximum characters: 500)</div>
                                    <div style="font-size: 10px; color: #333;">You have <input type="text" value="500" style="width: 30px; border: 1px solid #ccc; text-align: center;" readonly> characters left.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Upload Document<span class="required-star">*</span></td>
                            <td class="input-cell" colspan="3">
                                <div style="display: flex; flex-direction: column; gap: 5px;">
                                    <input type="file" class="form-input-custom">
                                    <div style="font-size: 10px; color: #333; font-style: italic;">Only .pdf, .doc, .docx, .jpg, .gif, .png formats of maximum size of 400 KB.</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div style="display: flex; justify-content: center; gap: 15px; margin-top: 30px; margin-bottom: 15px;">
                <button type="button" class="btn-custom btn-submit-green" id="btnSubmit">Submit</button>
                <button type="button" class="btn-custom btn-cancel-red" id="btnBack">Back</button>
                <button type="button" class="btn-custom btn-cancel-red" id="btnClear" style="background-color: #333;">Clear</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const applicantTypeSelect = document.getElementById('applicantType');
        const btnNext = document.getElementById('btnNext');
        const btnBack = document.getElementById('btnBack');
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        
        const taxpayerPinInput = document.getElementById('taxpayerPinInput');
        const taxpayerNameInput = document.getElementById('taxpayerNameInput');

        applicantTypeSelect.addEventListener('change', function() {
            const val = this.value;
            
            // Hide all dynamic rows first
            document.querySelectorAll('.row-agent, .row-subagent, .row-taxpayer').forEach(row => {
                row.classList.add('hidden');
            });
            

            if (val === 'Taxpayer') {
                document.querySelectorAll('.row-taxpayer').forEach(row => row.classList.remove('hidden'));
                taxpayerPinInput.value = 'A00000000000p';
                taxpayerNameInput.value = 'User';
            } else if (val === 'Agent') {
                document.querySelectorAll('.row-agent').forEach(row => row.classList.remove('hidden'));
                taxpayerPinInput.value = '';
                taxpayerNameInput.value = '';
            } else if (val === 'Sub Agent') {
                document.querySelectorAll('.row-subagent').forEach(row => row.classList.remove('hidden'));
                taxpayerPinInput.value = '';
                taxpayerNameInput.value = '';
            }
        });

        btnNext.addEventListener('click', function() {
            if (applicantTypeSelect.value) {
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
                window.scrollTo(0, 0);
            } else {
                alert('Please select Applicant Type');
            }
        });

        btnBack.addEventListener('click', function() {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
            window.scrollTo(0, 0);
        });
        
        document.getElementById('btnClear').addEventListener('click', function() {
            if(confirm('Are you sure you want to clear the form?')) {
                alert('Form cleared');
            }
        });
        
        document.getElementById('btnSubmit').addEventListener('click', function() {
            if(confirm('Do you want to submit your request?')) {
                alert('Application submitted successfully!');
                window.location.href = '{{ route("dashboard") }}';
            }
        });
    });
</script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr(".datepicker", {
                dateFormat: "d/m/Y",
                allowInput: true,
                disableMobile: true
            });
        });
    </script>
@endpush
@endsection
