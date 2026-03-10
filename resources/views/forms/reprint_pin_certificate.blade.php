@extends('layouts.app')

@section('title', 'Reprint PIN Certificate')
@section('header', 'Reprint PIN Certificate')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <style>
        /* Specific override for printing and PDF generation */
        .certificate-preview {
            background: white !important;
            color: black !important;
        }
        @media print {
            body * {
                visibility: hidden;
            }
            #certificatePreviewSection, #certificatePreviewSection * {
                visibility: visible;
            }
            #certificatePreviewSection {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            #closeCertPreview, #downloadCertBtn {
                display: none !important;
            }
        }
    </style>
@endpush

@section('content')
<div id="reprintSearchSection">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container">
        <div class="form-header">
            <span>Reprint PIN Certificate</span>
            <i class="fas fa-print"></i>
        </div>

        <div class="form-body">
            <!-- 1. Selection Container -->
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select id="applicantTypeSelection" class="form-select-custom" required>
                                <option value="">--Select--</option>
                                <option value="Agent">Agent</option>
                                <option value="Taxpayer">Taxpayer</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- 2. Agent Form Block -->
            <div id="agentFormBlock" class="hidden">
                <form id="agentReprintForm">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Applicant PIN</td>
                                <td class="input-cell">
                                    <input type="text" id="agentApplicantPin" class="form-input-custom" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Applicant Name</td>
                                <td class="input-cell">
                                    <input type="text" id="agentApplicantName" class="form-input-custom" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" id="agentTaxpayerPin" class="form-input-custom" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                        <button type="submit" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Submit</button>
                        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    </div>
                </form>
            </div>

            <!-- 3. Taxpayer Form Block -->
            <div id="taxpayerFormBlock" class="hidden">
                <form id="taxpayerReprintFormOnly">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" id="directTaxpayerPin" class="form-input-custom" value="A000000000P" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                        <button type="submit" class="btn-custom btn-submit-green" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;">Submit</button>
                        <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 4. Download Page (Hidden by default) -->
<div id="downloadPageSection" class="hidden">
    <div class="form-container">
        <div class="form-header">
            <span>Reprint PIN Certificate</span>
            <i class="fas fa-download"></i>
        </div>
        <div class="form-body">
            <div class="download-container">
                <p>Your request has been processed successfully.</p>
                <p><span class="download-link" id="viewCertLink">click here to download you pin certificate</span></p>
                
                <div style="margin-top: 30px;">
                    <button class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 5. Certificate High-Fidelity Preview (Off-screen for background capture) -->
<div id="certificatePreviewSection" style="position: absolute; left: -9999px; top: 0; width: 800px;">
    <div style="display: none;">
        <button class="btn-custom btn-submit-green" id="downloadCertBtn" style="font-weight: bold; border-radius: 4px; padding: 6px 20px;"><i class="fas fa-file-pdf"></i> Download PDF</button>
        <button class="btn-custom btn-cancel-red" id="closeCertPreview">Close</button>
    </div>
    
    <div id="certCaptureArea">
        <div class="certificate-preview">
            <!-- Header -->
            <div class="cert-header">
                <div>
                    <img src="{{ asset('images/kra.png') }}" alt="KRA Logo" class="cert-logo">
                    <div style="font-size: 10px; margin-top: 5px;">www.kra.go.ke</div>
                </div>
                <div class="cert-title-box">PIN Certificate</div>
                <div class="cert-contact">
                    For General Tax Questions<br>
                    Contact KRA Call Centre<br>
                    Tel: +254 (020) 4999 999<br>
                    Cell: +254 (0711) 099 999<br>
                    Email: callcentre@kra.go.ke
                </div>
            </div>

            <!-- Meta -->
            <div class="cert-meta">
                <div><strong>Certificate Date:</strong> <span id="cert_date"></span></div>
                <div><strong>Personal Identification Number:</strong></div>
                <div style="font-size: 14px; margin-top: 3px;" id="cert_pin">A000000000P</div>
            </div>

            <div style="text-align: center; font-size: 12px; margin-bottom: 20px;">
                This is to certify that taxpayer shown herein has been registered with Kenya Revenue Authority
            </div>

            <!-- Taxpayer Information -->
            <div class="cert-section-title">Taxpayer Information</div>
            <table class="cert-table">
                <tr>
                    <th style="width: 40%;">Taxpayer Name</th>
                    <td id="cert_name"></td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td id="cert_email"></td>
                </tr>
            </table>

            <!-- Registered Address -->
            <div class="cert-section-title">Registered Address</div>
            <div class="cert-address-grid">
                <div class="cert-address-item"><span class="cert-address-label">L.R. Number :</span> <span id="cert_lr"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">Building :</span> <span id="cert_building"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">Street/Road :</span> <span id="cert_street"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">City/Town :</span> <span id="cert_city"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">County :</span> <span id="cert_county"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">District :</span> <span id="cert_district"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">Tax Area :</span> <span id="cert_area"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">Station :</span> <span id="cert_station"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">P. O. Box :</span> <span id="cert_pobox"></span></div>
                <div class="cert-address-item"><span class="cert-address-label">Postal Code :</span> <span id="cert_postcode"></span></div>
            </div>

            <!-- Tax Obligations -->
            <div class="cert-section-title">Tax Obligation(s) Registration Details</div>
            <table class="cert-table" style="text-align: center;">
                <thead>
                    <tr>
                        <th style="text-align: center;">Sr. No.</th>
                        <th style="text-align: center;">Tax Obligation(s)</th>
                        <th style="text-align: center;">Effective From Date</th>
                        <th style="text-align: center;">Effective Till Date</th>
                        <th style="text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody id="cert_obligations">
                    <!-- Blank for now -->
                </tbody>
            </table>

            <!-- Electronic Invoicing -->
            <div class="cert-section-title">Electronic Tax Invoicing Status</div>
            <table class="cert-table">
                <tr>
                    <th style="width: 25%;">eTime Registration:</th>
                    <td style="color: grey; width: 25%;" id="cert_etime"></td>
                    <th style="width: 25%;">Time Registration:</th>
                    <td style="color: grey; width: 25%;" id="cert_time"></td>
                </tr>
            </table>

            <div class="cert-footer-text">
                The above PIN must appear on all your tax invoices and correspondences with Kenya Revenue Authority. Your accounting end date is 31st December as per the provisions stated in the Income Tax Act unless a change has been approved by the Commissioner-Domestic Taxes Department. The status of Tax Obligation(s) with 'Dormant' status will automatically change to 'Active' on date mentioned in "Effective Till Date" or any transaction done during the period. This certificate shall remain in force till further updated.
            </div>

            <div class="cert-disclaimer">
                Disclaimer : This is a system generated certificate and does not require signature.
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- html2pdf.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('applicantTypeSelection');
        const agentBlock = document.getElementById('agentFormBlock');
        const taxpayerBlock = document.getElementById('taxpayerFormBlock');
        
        const searchSection = document.getElementById('reprintSearchSection');
        const downloadSection = document.getElementById('downloadPageSection');
        const previewSection = document.getElementById('certificatePreviewSection');

        const agAppPin = document.getElementById('agentApplicantPin');
        const agAppName = document.getElementById('agentApplicantName');
        const agTaxPin = document.getElementById('agentTaxpayerPin');

        typeSelect.addEventListener('change', function() {
            const type = this.value;
            agentBlock.classList.add('hidden');
            taxpayerBlock.classList.add('hidden');
            
            if (type === 'Agent') {
                agentBlock.classList.remove('hidden');
                agAppPin.value = 'A000000000P';
                agAppName.value = 'AGENT_NAME_HERE';
            } else if (type === 'Taxpayer') {
                taxpayerBlock.classList.remove('hidden');
            }
        });

        const handleSubmit = (e) => {
            e.preventDefault();
            if (confirm("Do you want to submit your request")) {
                searchSection.classList.add('hidden');
                downloadSection.classList.remove('hidden');
            }
        };

        document.getElementById('agentReprintForm').addEventListener('submit', handleSubmit);
        document.getElementById('taxpayerReprintFormOnly').addEventListener('submit', handleSubmit);

        document.getElementById('viewCertLink').addEventListener('click', function() {
            // Populate fields
            document.getElementById('cert_date').innerText = '01/01/2026';
            document.getElementById('cert_pin').innerText = 'A000000000P';
            document.getElementById('cert_name').innerText = '[BLANK]';
            document.getElementById('cert_email').innerText = '[BLANK]';
            document.getElementById('cert_lr').innerText = '';
            document.getElementById('cert_building').innerText = '';
            document.getElementById('cert_street').innerText = '';
            document.getElementById('cert_city').innerText = '';
            document.getElementById('cert_county').innerText = '';
            document.getElementById('cert_district').innerText = '';
            document.getElementById('cert_area').innerText = '';
            document.getElementById('cert_station').innerText = '';
            document.getElementById('cert_pobox').innerText = '';
            document.getElementById('cert_postcode').innerText = '';
            document.getElementById('cert_etime').innerText = 'Inactive';
            document.getElementById('cert_time').innerText = 'Inactive';
            document.getElementById('cert_obligations').innerHTML = '<tr><td colspan="5">N/A</td></tr>';

            // Trigger the download immediately
            document.getElementById('downloadCertBtn').click();
        });

        document.getElementById('downloadCertBtn').addEventListener('click', function() {
            const element = document.getElementById('certCaptureArea');
            const opt = {
                margin:       [10, 10, 10, 10],
                filename:     'KRA_PIN_Certificate.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2, useCORS: true },
                jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            // Actually download the PDF
            html2pdf().set(opt).from(element).save().then(() => {
                alert('PDF downloaded successfully!');
            });
        });

        document.getElementById('closeCertPreview').addEventListener('click', function() {
            window.location.reload();
        });
    });
</script>
@endpush
@endsection