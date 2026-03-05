@extends('layouts.app')

@section('title', 'Amend PIN Details')
@section('header', 'Amend PIN Details')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
<!-- Version: 2.1 - PIN Logic Update -->
<div class="mandatory-notice">
    All fields marked with <span class="required-star">*</span> are mandatory
</div>

<!-- 1. Initial Entry Form (Shown first) -->
<div id="amendmentEntrySection">
    <div class="form-container">
        <div class="form-header">
            <span>e-Amendment of Registration</span>
            <i class="fas fa-file-edit"></i>
        </div>
        <div class="form-body">
            <table class="inner-profile-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Mode of Amendment<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select class="form-select-custom">
                                <option>Online Form</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Applicant Type<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <select id="entryApplicantType" class="form-select-custom">
                                <option value="Taxpayer">Taxpayer</option>
                                <option value="Agent">Agent</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer PIN<span class="required-star">*</span></td>
                        <td class="input-cell">
                            <input type="text" id="entryTaxpayerPin" class="form-input-custom" value="00000000000">
                        </td>
                    </tr>
                    <tr>
                        <td class="label-cell">Taxpayer Name</td>
                        <td class="input-cell">
                            <input type="text" id="entryTaxpayerName" class="form-input-custom" value="TAXPAYER_NAME_HERE" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                <button type="button" id="btnEntryNext" class="btn-custom btn-next-blue">Next</button>
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- 2. Detailed Amendment Tabs (Hidden initially) -->
<div id="amendmentTabsSection" class="hidden">
    <!-- Tab Navigation -->
    <div class="tabs-container">
        <div class="tab-item active" data-tab="tab_amend_form">Amendment Form</div>
        <div class="tab-item disabled" data-tab="tab_basic_info" id="tab_link_basic">(A) Basic_information</div>
        <div class="tab-item disabled" data-tab="tab_obligation" id="tab_link_obligation">(B) Obligation_Details</div>
        <div class="tab-item disabled" data-tab="tab_income" id="tab_link_income">(C) Source_Income_Details</div>
        <div class="tab-item disabled" data-tab="tab_agent" id="tab_link_agent">(F) Agent_Details</div>
    </div>

    <div class="tab-content-wrapper" id="tabContentContainer">
        <!-- Tab 1: Amendment Form -->
        <div class="tab-pane active" id="tab_amend_form">
            <div class="amendment-header">Individual Registration Amendment Form</div>
            
            <div class="section-group">
                <div class="section-group-title">PIN Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">PIN<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" id="dispPin" class="form-input-custom" readonly style="color: #000000;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Taxpayer Name<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" id="dispName" class="form-input-custom" readonly style="color: #000000;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Date of Amendment<span class="required-star">*</span></td>
                            <td class="input-cell"><input type="text" class="form-input-custom" value="05/03/2026" readonly style="color: #000000;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-group" id="pinAmendmentSection">
                <div class="section-group-title" style="color: #DA3832 !important; font-weight: bold !important;">PIN(Please select PIN to view the Sections to be amended)</div>
                <div style="padding: 10px 5px;">
                    <label class="checkbox-item">
                        <input type="checkbox" id="mainPinCheckbox"> <strong style="color: #000000;">PIN</strong>
                    </label>
                    <div id="amendmentOptionsGrid" class="checkbox-grid hidden" style="border-top: 1px solid #ddd; margin-top: 15px; padding-top: 15px; background-color: #ffffff;">
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_basic" data-pane="tab_basic_info" data-section="basic_info_section"> Basic Information</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_basic" data-pane="tab_basic_info" data-section="alt_address_section"> Alternative Address and Contact Details</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_basic" data-pane="tab_basic_info" data-section="bank_details_section"> Bank Account Details</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_basic" data-pane="tab_basic_info" data-section="entity_section"> Partnership, Corporate and Trust Information</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_basic" data-pane="tab_basic_info" data-section="tributary_section"> Tributary Bonds</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_income" data-pane="tab_income"> Source of Income</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_agent" data-pane="tab_agent" data-section="agent_authorized_section"> Tax Agent authorized to submit any application on behalf of the Taxpayer</label>
                        <label class="checkbox-item"><input type="checkbox" class="amend-trigger" data-target="tab_link_agent" data-pane="tab_agent" data-section="intermediary_agent_section"> Intermediary Agent to submit returns on behalf of the Taxpayer</label>
                    </div>
                </div>
            </div>

            <div class="section-group">
                <div class="section-group-title" style="color: #DA3832;">ID (Select ID Number to update your details to match National Registry Bureau records,then click Submit)</div>
                <div style="padding: 10px;">
                    <label class="checkbox-item">
                        <input type="checkbox"> <strong>ID Number</strong>
                    </label>
                </div>
            </div>

            <div style="margin: 15px;">
                <button type="button" id="btnKnowConditions" class="btn-custom btn-next-blue">Click Here to Know Conditions For Auto Approval Amendment</button>
            </div>

            <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1;">
                <button class="btn-custom btn-next-blue btn-next" data-next="tab_basic_info">Next</button>
                <button class="btn-custom btn-submit-green btn-submit-final">Submit</button>
            </div>
        </div>

        <!-- Tab 2: Basic Information -->
        <div class="tab-pane" id="tab_basic_info">
            <div class="amendment-header">Basic Information</div>
            
            <div class="section-group">
                <div class="section-group-title">Residential Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Citizenship<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <label><input type="radio" name="citizenship"> Kenyan</label>
                                <label style="margin-left: 20px;"><input type="radio" name="citizenship"> Non Kenyan Resident</label>
                                <label style="margin-left: 20px;"><input type="radio" name="citizenship"> Non Kenyan Non Resident</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Section A : Basic Information -->
            <div id="basic_info_section" class="disabled-section">
                
                
                <div class="section-group">
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Do you want to register for TOT ?<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <label><input type="radio" name="tot"> Yes</label>
                                    <label style="margin-left: 20px;"><input type="radio" name="tot"> No</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Employee's Profession</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell">Major Group<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom">
                                        <option>4545</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Minor Group<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom">
                                        <option>4545</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Sub Group<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom">
                                        <option>4545</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">National Id. Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">National Id. Number<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell" style="width: 25% !important;">Date of Birth</td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom datepicker" style="width: 100%;" placeholder="DD/MM/YYYY"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="section-group">
                    <div class="section-group-title">NSSF Number</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">NSSF Number<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="3"><input type="text" class="form-input-custom" style="width: 48%;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Individual Data</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">First Name</td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell" style="width: 25% !important;">Middle Name</td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Last Name</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell">Gender</td>
                                <td class="input-cell">
                                    <label><input type="radio" name="gender"> Male</label>
                                    <label style="margin-left: 20px;"><input type="radio" name="gender"> Female</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Principal Physical Address</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">L.R. Number</td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                                <td class="label-cell" style="width: 25% !important;">Building<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" required style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Street/Road<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" required style="width: 100%;"></td>
                                <td class="label-cell">City/Town<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" required style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">County<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom" style="width: 100%;">
                                        <option>Nairobi</option>
                                    </select>
                                </td>
                                <td class="label-cell">District<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom" style="width: 100%;">
                                        <option>Embakasi</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Tax Service Office(TSO)</td>
                                <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                                <td class="label-cell">Tax Area/Locality<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <select class="form-select-custom" required style="width: 100%;">
                                        <option>Embakasi</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Descriptive Address</td>
                                <td class="input-cell" colspan="3">
                                    <textarea class="form-input-custom" rows="4" style="width: 100%; height: auto;" onkeyup="document.getElementById('charCountPrincipal').textContent = 200 - this.value.length;"></textarea>
                                    <div style="font-size: 0.75rem; color: #666; margin-top: 2px;">
                                        (Maximum characters: 200)<br>
                                        You have <span id="charCountPrincipal">200</span> characters left.
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-group">
                    <div class="section-group-title">Principal Contact Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">Telephone Number</td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell" style="width: 25% !important;">Mobile Number (1)<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Mobile Number (2)<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell">Mobile Number (3)<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            </tr>
                            <tr>
                                <td class="label-cell">Main Email Address<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                                <td class="label-cell">Secondary Email Address<span class="required-star">*</span></td>
                                <td class="input-cell"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- SMS Notification -->
                <div class="section-group" id="sms_section">
                    <div class="section-group-title">SMS Notification</div>
                    <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                        <tbody>
                            <tr style="border: none;">
                                <td class="label-cell" style="border: none; width: 50%;">Would you like to Subscribe/Unsubscribe of receiving alerts through SMS? <span class="required-star">*</span></td>
                                <td class="input-cell" style="border: none;">
                                    <label><input type="radio" name="sms_sub"> Subscribe</label>
                                    <label style="margin-left: 20px;"><input type="radio" name="sms_sub" checked> Unsubscribe</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section A : Alternative Address and Contact Details -->
            <div class="amendment-header">Alternative Address and Contact Details</div>
            <div id="alt_address_section" class="disabled-section">
                <div class="section-group">
                    <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                        <tbody>
                            <tr style="border: none;">
                                <td class="label-cell" style="border: none; width: 50%;">Do you have an Alternative Address? <span class="required-star">*</span></td>
                                <td class="input-cell" style="border: none;">
                                    <select class="form-select-custom" id="alt_address_select">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Dynamic Alternative Address Fields -->
                    <div id="alt_address_fields_container" class="hidden" style="margin-top: 15px; border-top: 1px solid #ccc; padding-top: 15px;">
                        <!-- Physical Address -->
                        <div style="font-weight: bold; margin-bottom: 5px; color: #000; border-bottom: 1px solid #eee; padding-bottom: 5px;">Alternative Physical Address</div>
                        <table class="inner-profile-table">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 25% !important;">L.R. Number</td>
                                    <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom"></td>
                                    <td class="label-cell" style="width: 25% !important;">Building<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom"></td>
                                </tr>
                                <tr>
                                    <td class="label-cell">Street/Road<span class="required-star">*</span></td>
                                    <td class="input-cell"><input type="text" class="form-input-custom"></td>
                                    <td class="label-cell">City/Town<span class="required-star">*</span></td>
                                    <td class="input-cell"><input type="text" class="form-input-custom"></td>
                                </tr>
                                <tr>
                                    <td class="label-cell">County<span class="required-star">*</span></td>
                                    <td class="input-cell">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                    <td class="label-cell">District<span class="required-star">*</span></td>
                                    <td class="input-cell">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell">Tax Service Office(TSO)</td>
                                    <td class="input-cell"><input type="text" class="form-input-custom" readonly></td>
                                    <td class="label-cell">Tax Area/Locality<span class="required-star">*</span></td>
                                    <td class="input-cell">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell">Descriptive Address</td>
                                    <td class="input-cell" colspan="3">
                                        <textarea class="form-input-custom" rows="4" style="width: 100%; height: auto;" onkeyup="document.getElementById('charCount').textContent = 200 - this.value.length;"></textarea>
                                        <div style="font-size: 0.75rem; color: #666; margin-top: 2px;">
                                            (Maximum characters: 200)<br>
                                            You have <span id="charCount">200</span> characters left.
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Postal Address -->
                        <div style="font-weight: bold; margin-top: 15px; margin-bottom: 5px; color: #000; border-bottom: 1px solid #eee; padding-bottom: 5px;">Alternative Postal Address</div>
                        <table class="inner-profile-table">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 25% !important;">Postal Code<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25% !important;">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                    <td class="label-cell" style="width: 25% !important;">Town<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25% !important;">
                                        <select class="form-select-custom">
                                            <option>--Select--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell">P.O.Box<span class="required-star">*</span></td>
                                    <td class="input-cell" colspan="3"><input type="text" class="form-input-custom" style="width: 48%;"></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Contact Details -->
                        <div style="font-weight: bold; margin-top: 15px; margin-bottom: 5px; color: #000; border-bottom: 1px solid #eee; padding-bottom: 5px;">Alternative Contact Details</div>
                        <table class="inner-profile-table">
                            <tbody>
                                <tr>
                                    <td class="label-cell" style="width: 25% !important;">Telephone Number</td>
                                    <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom"></td>
                                    <td class="label-cell" style="width: 25% !important;">Mobile Number<span class="required-star">*</span></td>
                                    <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom"></td>
                                </tr>
                                <tr>
                                    <td class="label-cell">Email Address<span class="required-star">*</span></td>
                                    <td class="input-cell" colspan="3"><input type="text" class="form-input-custom" style="width: 48%;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bank Account Details -->
            <div class="amendment-header">Bank Account Details</div>
            <div class="section-group" id="bank_details_section">
                <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                    <tbody>
                        <tr style="border: none;">
                            <td class="label-cell" style="border: none; width: 50%;">Do you wish to declare your Bank Account for tax refunds?<span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none;">
                                <select class="form-select-custom" id="bank_declare_select">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Dynamic Bank Fields -->
                <div id="bank_fields_container" class="hidden" style="margin-top: 15px; border-top: 1px solid #ccc; padding-top: 15px;">
                    <div style="font-weight: bold; margin-bottom: 10px; color: #000;">Bank Account Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">Bank<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <select class="form-select-custom" style="border: 1px solid #DA3832; width: 100%;">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25% !important;">Branch<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <select class="form-select-custom" style="border: 1px solid #DA3832; width: 100%;">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">City<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" style="border: 1px solid #DA3832; width: 100%;">
                                </td>
                                <td class="label-cell">Account Holder's Name<span class="required-star">*</span></td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" style="border: 1px solid #DA3832; width: 100%;">
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Account Number<span class="required-star">*</span></td>
                                <td class="input-cell" colspan="3">
                                    <input type="text" class="form-input-custom" style="border: 1px solid #DA3832; width: 48%;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Partner/Director/Trustee -->
            <div class="amendment-header">Are you a partner, director or trustee in any other entity?</div>
            <div class="section-group" id="entity_section">
                <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                    <tbody>
                        <tr style="border: none;">
                            <td class="label-cell" style="border: none; width: 50%;">Are you a partner, director or trustee in any other entity? <span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none;">
                                <label><input type="radio" name="other_entity" class="dynamic-toggle" data-container="entity_fields_container" value="Yes"> Yes</label>
                                <label style="margin-left: 20px;"><input type="radio" name="other_entity" class="dynamic-toggle" data-container="entity_fields_container" value="No" checked> No</label>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="entity_fields_container" class="hidden" style="margin-top: 15px; border-top: 1px solid #ccc; padding-top: 15px;">
                    <div style="font-weight: bold; margin-bottom: 5px; color: #000; border-bottom: 1px solid #eee; padding-bottom: 5px;">Entity Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">Entity Type<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <select class="form-select-custom" style="border: 1px solid #DA3832; width: 100%;">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                                <td class="label-cell" style="width: 25% !important;">PIN<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <input type="text" class="form-input-custom" style="border: 1px solid #DA3832; width: 100%;">
                                </td>
                            </tr>
                            <tr>
                                <td class="label-cell">Business Name of Partnership, Corporation or Trust</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" readonly style="background-color: #f5f5f5;">
                                </td>
                                <td class="label-cell">Business Registration Certificate Number</td>
                                <td class="input-cell">
                                    <input type="text" class="form-input-custom" readonly style="background-color: #f5f5f5;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 5px; margin: 15px 0;">
                        <button type="button" class="btn-custom" style="background: #28a745; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Add</button>
                        <button type="button" class="btn-custom" style="background: #DA3832; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Clear</button>
                    </div>
                    <!-- Table Grid -->
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; font-size: 0.85rem;">
                            <thead style="background: #333; color: #fff; text-align: center;">
                                <tr>
                                    <th style="padding: 8px; border: 1px solid #fff;">Sr. No.</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Delete</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Modify</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Entity Type</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">PIN</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Business Name</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Business Registration Certificate Number</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td colspan="7" style="padding: 10px; color: #666;">No Records Found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tributary Bonds -->
            <div class="amendment-header">Tributary Bonds</div>
            <div class="section-group" id="tributary_section">
                <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                    <tbody>
                        <tr style="border: none;">
                            <td class="label-cell" style="border: none; width: 50%;">Would you like to declare your relationship with any other taxpayer? <span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none;">
                                <label><input type="radio" name="tributary_relationship" class="dynamic-toggle" data-container="tributary_fields_container" value="Yes"> Yes</label>
                                <label style="margin-left: 20px;"><input type="radio" name="tributary_relationship" class="dynamic-toggle" data-container="tributary_fields_container" value="No" checked> No</label>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="tributary_fields_container" class="hidden" style="margin-top: 15px; border-top: 1px solid #ccc; padding-top: 15px;">
                    <div style="font-weight: bold; margin-bottom: 5px; color: #000; border-bottom: 1px solid #eee; padding-bottom: 5px;">Tributary Bond Details</div>
                    <table class="inner-profile-table">
                        <tbody>
                            <tr>
                                <td class="label-cell" style="width: 25% !important;">Taxpayer PIN<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <input type="text" class="form-input-custom" style="border: 1px solid #DA3832; width: 100%;">
                                </td>
                                <td class="label-cell" style="width: 25% !important;">Relationship Type<span class="required-star">*</span></td>
                                <td class="input-cell" style="width: 25% !important;">
                                    <select class="form-select-custom" style="border: 1px solid #DA3832; width: 100%;">
                                        <option>--Select--</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="display: flex; justify-content: center; gap: 5px; margin: 15px 0;">
                        <button type="button" class="btn-custom" style="background: #28a745; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Add</button>
                        <button type="button" class="btn-custom" style="background: #DA3832; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Clear</button>
                    </div>
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; font-size: 0.85rem;">
                            <thead style="background: #333; color: #fff; text-align: center;">
                                <tr>
                                    <th style="padding: 8px; border: 1px solid #fff;">Sr. No.</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Delete</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Modify</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Taxpayer PIN</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Taxpayer Name</th>
                                    <th style="padding: 8px; border: 1px solid #fff;">Relationship Type</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td colspan="6" style="padding: 10px; color: #666;">No Records Found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Details Of Upload Document -->
            <div class="amendment-header" style="margin-bottom: 10px;">Details Of Upload Document</div>
            <div class="section-group" id="upload_section">
                <div class="section-group-title">Upload Document</div>
                <table class="inner-profile-table" style="border: none; margin-bottom: 0;">
                    <tbody>
                        <tr style="border: none;">
                            <td class="label-cell" style="border: none; width: 40%;">Upload Supporting Document for Registration<span class="required-star">*</span></td>
                            <td class="input-cell" style="border: none;">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <button type="button" class="btn-custom" style="background-color: #f0f0f0; color: #000; border: 1px solid #ccc; padding: 4px 10px; font-weight: normal; border-radius: 0;" onclick="this.nextElementSibling.click();">Choose File</button>
                                    <input type="file" style="display: none;" onchange="this.nextElementSibling.textContent = this.files.length > 0 ? this.files[0].name : 'No file chosen';">
                                    <span style="font-size: 0.85rem; color: #555;">No file chosen</span>
                                </div>
                                <div style="color: #ff0000; font-size: 0.8rem; margin-top: 5px;">All file types are allowed. Allowed File Size:-5 MB</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1;">
                <button class="btn-custom btn-next-blue btn-prev" data-prev="tab_amend_form">Previous</button>
                <button class="btn-custom btn-next-blue btn-next" data-next="tab_obligation">Next</button>
                <button class="btn-custom btn-submit-green btn-submit-final">Submit</button>
            </div>
            <div style="text-align: center; padding: 10px;">
                <button class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
            </div>
        </div>

        <!-- Tab 3: Obligation Details -->
        <div class="tab-pane" id="tab_obligation">
            <div class="amendment-header">Section B : Taxpayer Obligation</div>
            
            <div class="section-group">
                <div class="section-group-title">Income Tax</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Income Tax Resident</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Income Tax Non Resident</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Income Tax PAYE(for Employer only)</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Income Tax Rent Income (MRI)</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Turnover Tax</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell"><label class="checkbox-item"><input type="checkbox"> Significant Economic Presence Tax</label></td>
                            <td class="input-cell" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>Registration Date<span class="required-star">*</span></span>
                                <input type="text" class="form-input-custom datepicker" style="width: 150px;" placeholder="DD/MM/YYYY">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="amendment-header">Turnover Details (Applicable only for VAT/Turnover Tax)</div>
            <div class="section-group">
                <div class="section-group-title">Turnover of Goods/Services of Taxable and Exempt Supplies in Kenya and of Exports</div>
                <table class="form-table-compact" style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                    <thead>
                        <tr style="background: #DA3832; color: #fff; font-size: 0.8rem;">
                            <th style="padding: 8px; border: 1px solid #ddd;">Turnover Year</th>
                            <th style="padding: 8px; border: 1px solid #ddd;">Taxable supplies in Kenya (Ksh)</th>
                            <th style="padding: 8px; border: 1px solid #ddd;">Exempt supplies in Kenya (Ksh)</th>
                            <th style="padding: 8px; border: 1px solid #ddd;">Exports (Ksh)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #ddd;">Turnover Third Year</td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #ddd;">Turnover Second Year</td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #ddd;">Turnover Last Year</td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #ddd;">Estimated Turnover Next Year<span class="required-star">*</span></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                            <td style="padding: 5px; border: 1px solid #ddd;"><input type="text" class="form-input-custom"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: center; gap: 10px; padding: 20px; background: #f1f1f1;">
                <button class="btn-custom btn-next-blue btn-prev" data-prev="tab_basic_info">Previous</button>
                <button class="btn-custom btn-next-blue btn-next" data-next="tab_income">Next</button>
                <button class="btn-custom btn-submit-green btn-submit-final">Submit</button>
            </div>
            <div style="text-align: center; padding: 10px;">
                <button class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
            </div>
        </div>

        <!-- Tab 4: Source Income Details -->
        <div class="tab-pane" id="tab_income">
            <div class="amendment-header">Section C : What are your sources of income?</div>
            
            <div class="section-group">
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Employment Income<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>No</option>
                                    <option>Yes</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Rental Income<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>No</option>
                                    <option>Yes</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Business Income<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom">
                                    <option>No</option>
                                    <option>Yes</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1;">
                <button class="btn-custom btn-next-blue btn-prev" data-prev="tab_obligation">Previous</button>
                <button class="btn-custom btn-next-blue btn-next" data-next="tab_agent">Next</button>
                <button class="btn-custom btn-submit-green btn-submit-final">Submit</button>
            </div>
            <div style="text-align: center; padding: 10px;">
                <button class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
            </div>
        </div>

        <!-- Tab 5: Agent Details -->
        <!-- Tab 5: Agent Details -->
        <div class="tab-pane" id="tab_agent">
            <!-- Section E-I -->
            <div class="amendment-header">Section E-I : Tax Agent authorized to submit any application on behalf of Taxpayer</div>
            <div id="agent_authorized_section" class="disabled-section">
            <div class="section-group" style="border: 1px solid #ccc; padding: 10px;">
                <table class="inner-profile-table" style="margin-bottom: 5px;">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25% !important;">PIN<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            <td class="label-cell" style="width: 25% !important;">Agent Name</td>
                            <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Telephone Number</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                            <td class="label-cell">Mobile Number</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Email Address</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                            <td class="label-cell">Authorization Date Since<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                                    <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();">📅</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Authorization Date Upto</td>
                            <td class="input-cell">
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                                    <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();">📅</span>
                                </div>
                            </td>
                            <td colspan="2" style="background-color: transparent; border: none;"></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="display: flex; justify-content: center; gap: 5px; margin-bottom: 10px;">
                    <button type="button" class="btn-custom" style="background: #28a745; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Add</button>
                    <button type="button" class="btn-custom" style="background: #DA3832; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Clear</button>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; font-size: 0.85rem;">
                        <thead style="background: #DA3832; color: #fff; text-align: center;">
                            <tr>
                                <th style="padding: 6px; border: 1px solid #fff;">Sr. No.</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Delete</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Modify</th>
                                <th style="padding: 6px; border: 1px solid #fff;">PIN</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Telephone Number</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Mobile Number</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Email Address</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Authorization Date Since</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Authorization Date Upto</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;"><tr><td colspan="9" style="padding: 10px; color: #666; height: 30px;"></td></tr></tbody>
                    </table>
                </div>
            </div>
            </div>

            <!-- Section E-II -->
            <div class="amendment-header" style="margin-top: 15px;">Section E-II : Intermediary Agent to submit returns on behalf of the Taxpayer</div>
            <div id="intermediary_agent_section" class="disabled-section">
            <div class="section-group" style="border: 1px solid #ccc; padding: 10px;">
                <table class="inner-profile-table" style="margin-bottom: 5px;">
                    <tbody>
                        <tr>
                            <td class="label-cell" style="width: 25% !important;">PIN<span class="required-star">*</span></td>
                            <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" style="width: 100%;"></td>
                            <td class="label-cell" style="width: 25% !important;">First Name</td>
                            <td class="input-cell" style="width: 25% !important;"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Middle Name</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                            <td class="label-cell">Last Name</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Type of Authorization<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <select class="form-select-custom" style="width: 100%;">
                                    <option>--Select--</option>
                                </select>
                            </td>
                            <td class="label-cell">Tax Obligation</td>
                            <td class="input-cell">
                                <select class="form-select-custom" style="width: 100%;">
                                    <option>--Select--</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Telephone Number</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                            <td class="label-cell">Mobile Number</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                        </tr>
                        <tr>
                            <td class="label-cell">Email Address</td>
                            <td class="input-cell"><input type="text" class="form-input-custom" readonly style="width: 100%; background-color: #f5f5f5;"></td>
                            <td class="label-cell">Authorization Date Since<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                                    <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();">📅</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Authorization Date Upto</td>
                            <td class="input-cell">
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <input type="text" class="form-input-custom datepicker" style="width: calc(100% - 30px);" placeholder="DD/MM/YYYY">
                                    <span style="color: navy; cursor: pointer; font-size: 1.2rem;" onclick="this.previousElementSibling._flatpickr.open();">📅</span>
                                </div>
                            </td>
                            <td colspan="2" style="background-color: transparent; border: none;"></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="display: flex; justify-content: center; gap: 5px; margin-bottom: 10px;">
                    <button type="button" class="btn-custom" style="background: #28a745; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Add</button>
                    <button type="button" class="btn-custom" style="background: #DA3832; color: #fff; padding: 5px 25px; border-radius: 0; border: none; font-weight: bold;">Clear</button>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; font-size: 0.85rem;">
                        <thead style="background: #DA3832; color: #fff; text-align: center;">
                            <tr>
                                <th style="padding: 6px; border: 1px solid #fff;">Sr. No.</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Delete</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Modify</th>
                                <th style="padding: 6px; border: 1px solid #fff;">PIN</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Tax Obligation</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Telephone Number</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Mobile Number</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Email Address</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Authorization Date Since</th>
                                <th style="padding: 6px; border: 1px solid #fff;">Authorization Date Upto</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;"><tr><td colspan="10" style="padding: 10px; color: #666; height: 30px;"></td></tr></tbody>
                    </table>
                </div>
            </div>

            <!-- Footer Buttons Area matching image -->
            <div style="display: flex; justify-content: center; gap: 15px; padding: 20px; background: #f1f1f1; margin-top: 10px;">
                <button class="btn-custom btn-next-blue btn-prev" data-prev="tab_income">Previous</button>
                <button class="btn-custom btn-submit-green btn-submit-final">Submit</button>
            </div>
            <div style="text-align: center; padding: 10px;">
                <button class="btn-custom btn-cancel-red" onclick="window.location.reload();">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Conditions Modal -->
<div id="conditionsModal" class="modal-overlay">
    <div class="modal-content">
        <span class="modal-close" id="closeConditionsModal">Close</span>
        <div class="modal-title">VERIFICATION TASK WILL NOT BE GENERATED IF YOU MAKE CHANGES IN FOLLOWING FIELDS</div>
        <div class="modal-body">
            <ul>
                <li>Section A: Basic Information
                    <ul class="sub-list">
                        <li>1. Trading /Business Name-If different than registered name</li>
                        <li>2. Do you wish to declare Legal Representative?</li>
                        <li>3. Principle Postal Address</li>
                        <li>4. Principle Contact Details</li>
                    </ul>
                </li>
                <li>Section A: Alternative Address and Contact Details</li>
                <li>Section A: Bank Account Details</li>
                <li>Section A: Details of Economic Activities</li>
                <li>Section F: Agent Details
                    <ul class="sub-list">
                        <li>1. Details of Tax Agent</li>
                        <li>2. Detail of Intermediary Agent</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const entrySection = document.getElementById('amendmentEntrySection');
        const tabsSection = document.getElementById('amendmentTabsSection');
        const btnEntryNext = document.getElementById('btnEntryNext');
        
        const entryPin = document.getElementById('entryTaxpayerPin');
        const entryName = document.getElementById('entryTaxpayerName');
        const dispPin = document.getElementById('dispPin');
        const dispName = document.getElementById('dispName');

        const tabItems = document.querySelectorAll('.tab-item');
        const tabPanes = document.querySelectorAll('.tab-pane');
        const triggers = document.querySelectorAll('.amend-trigger');
        const nextBtns = document.querySelectorAll('.btn-next');
        const prevBtns = document.querySelectorAll('.btn-prev');
        const submitFinal = document.querySelectorAll('.btn-submit-final');
        
        const mainPinCheckbox = document.getElementById('mainPinCheckbox');
        const amendmentOptionsGrid = document.getElementById('amendmentOptionsGrid');

        // Transition from Entry to Tabs
        btnEntryNext.addEventListener('click', function() {
            dispPin.value = entryPin.value;
            dispName.value = entryName.value;
            
            entrySection.classList.add('hidden');
            tabsSection.classList.remove('hidden');
            window.scrollTo(0, 0);
        });

        // Main PIN toggle logic
        if (mainPinCheckbox && amendmentOptionsGrid) {
            mainPinCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    amendmentOptionsGrid.classList.remove('hidden');
                } else {
                    amendmentOptionsGrid.classList.add('hidden');
                    // Uncheck all triggers when hidden
                    triggers.forEach(t => {
                        t.checked = false;
                        const targetId = t.getAttribute('data-target');
                        if (targetId) {
                            const tabLink = document.getElementById(targetId);
                            if (tabLink) tabLink.classList.add('disabled');
                        }
                    });
                    switchTab('tab_amend_form', false); // Pass false to prevent scroll
                }
            });
        }

        // tab switching
        function switchTab(tabId, shouldScroll = true) {
            const link = document.querySelector(`.tab-item[data-tab="${tabId}"]`);
            if (!link || link.classList.contains('disabled')) return;

            tabItems.forEach(t => t.classList.remove('active'));
            tabPanes.forEach(p => p.classList.remove('active'));

            link.classList.add('active');
            const targetPane = document.getElementById(tabId);
            if (targetPane) targetPane.classList.add('active');
            
            if (shouldScroll) window.scrollTo(0, 0);
        }

        tabItems.forEach(tab => {
            tab.addEventListener('click', function() {
                switchTab(this.getAttribute('data-tab'));
            });
        });

        // Trigger logic - Updated to also handle granular sections (IDs)
        triggers.forEach(trigger => {
            trigger.addEventListener('change', function() {
                const targetId = this.getAttribute('data-target');
                const paneId = this.getAttribute('data-pane');
                const sectionId = this.getAttribute('data-section');
                
                if (!targetId) return;

                const targetTabLink = document.getElementById(targetId);
                if (targetTabLink) {
                    if (this.checked) {
                        targetTabLink.classList.remove('disabled');
                        
                        // Handle specific section or entire pane
                        if (sectionId) {
                            const section = document.getElementById(sectionId);
                            if (section) {
                                section.classList.remove('disabled-section');
                                section.querySelectorAll('input, select, textarea, button').forEach(el => {
                                    if (!el.hasAttribute('readonly')) el.disabled = false;
                                });
                            }
                        } else if (paneId) {
                            const pane = document.getElementById(paneId);
                            if (pane) {
                                pane.querySelectorAll('input, select, textarea, button').forEach(el => {
                                    if (!el.hasAttribute('readonly')) el.disabled = false;
                                });
                            }
                        }
                        
                        // Special case for Obligation Details if Basic Info is checked
                        if (targetId === 'tab_link_basic') {
                            const obligLink = document.getElementById('tab_link_obligation');
                            if (obligLink) {
                                obligLink.classList.remove('disabled');
                                const obligPane = document.getElementById('tab_obligation');
                                if (obligPane) {
                                    obligPane.querySelectorAll('input, select, textarea').forEach(el => {
                                        if (!el.hasAttribute('readonly')) el.disabled = false;
                                    });
                                }
                            }
                        }
                    } else {
                        // Check if any other trigger still enables this tab
                        const otherTriggers = Array.from(triggers).filter(t => t.getAttribute('data-target') === targetId && t.checked);
                        
                        // Disable specific section
                        if (sectionId) {
                            const section = document.getElementById(sectionId);
                            if (section) {
                                section.classList.add('disabled-section');
                                section.querySelectorAll('input, select, textarea, button').forEach(el => {
                                    el.disabled = true;
                                });
                            }
                        }

                        if (otherTriggers.length === 0) {
                            targetTabLink.classList.add('disabled');
// ... rest of the logic remains the same
                            if (paneId) {
                                const pane = document.getElementById(paneId);
                                if (pane) {
                                    pane.querySelectorAll('input, select, textarea').forEach(el => {
                                        el.disabled = true;
                                    });
                                }
                                if (targetId === 'tab_link_basic') {
                                    const obligLink = document.getElementById('tab_link_obligation');
                                    if (obligLink) {
                                        obligLink.classList.add('disabled');
                                        const obligPane = document.getElementById('tab_obligation');
                                        if (obligPane) {
                                            obligPane.querySelectorAll('input, select, textarea').forEach(el => {
                                                el.disabled = true;
                                            });
                                        }
                                    }
                                }
                            }
                            if (targetTabLink.classList.contains('active')) {
                                switchTab('tab_amend_form');
                            }
                        }
                    }
                }
            });
        });

        // Bank Declaration Toggle
        const bankDeclareSelect = document.getElementById('bank_declare_select');
        const bankFieldsContainer = document.getElementById('bank_fields_container');
        if (bankDeclareSelect && bankFieldsContainer) {
            bankDeclareSelect.addEventListener('change', function() {
                if (this.value === 'Yes') {
                    bankFieldsContainer.classList.remove('hidden');
                } else {
                    bankFieldsContainer.classList.add('hidden');
                }
            });
        }

        // Alternative Address Toggle
        const altAddressSelect = document.getElementById('alt_address_select');
        const altAddressFieldsContainer = document.getElementById('alt_address_fields_container');
        if (altAddressSelect && altAddressFieldsContainer) {
            altAddressSelect.addEventListener('change', function() {
                if (this.value === 'Yes') {
                    altAddressFieldsContainer.classList.remove('hidden');
                } else {
                    altAddressFieldsContainer.classList.add('hidden');
                }
            });
        }

        // Generic Radio Toggle for "Yes/No" dynamic sections
        document.querySelectorAll('.dynamic-toggle').forEach(radio => {
            radio.addEventListener('change', function() {
                const containerId = this.getAttribute('data-container');
                const container = document.getElementById(containerId);
                if (container) {
                    if (this.value === 'Yes') {
                        container.classList.remove('hidden');
                    } else {
                        container.classList.add('hidden');
                    }
                }
            });
        });

        // Initialize all amendment panes and specific sections to be disabled by default
        const tabPanesToDisable = ['tab_basic_info', 'tab_obligation', 'tab_income', 'tab_agent'];
        tabPanesToDisable.forEach(pId => {
            const pane = document.getElementById(pId);
            if (pane) {
                pane.querySelectorAll('input, select, textarea').forEach(el => {
                    if (!el.hasAttribute('readonly')) {
                         el.disabled = true;
                    }
                });
            }
        });
        
        // Ensure individual sections are also visually and functionally disabled
        const sectionsToDisable = ['basic_info_section', 'alt_address_section', 'bank_details_section', 'entity_section', 'tributary_section', 'agent_authorized_section', 'intermediary_agent_section', 'upload_section'];
        sectionsToDisable.forEach(sId => {
            const section = document.getElementById(sId);
            if (section) {
                section.classList.add('disabled-section');
                section.querySelectorAll('input, select, textarea, button').forEach(el => {
                    if (!el.hasAttribute('readonly')) el.disabled = true;
                });
            }
        });

        // Next/Prev logic
        nextBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const nextId = this.getAttribute('data-next');
                const link = document.querySelector(`.tab-item[data-tab="${nextId}"]`);
                if (!link.classList.contains('disabled')) {
                    switchTab(nextId);
                } else {
                    alert('Please select this section in the Amendment Form tab first.');
                }
            });
        });

        prevBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                switchTab(this.getAttribute('data-prev'));
            });
        });

        // Final Submit
        submitFinal.forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('do you want to submit your request')) {
                    alert('Your amendment request has been submitted successfully!');
                    window.location.reload();
                }
            });
        });

        // Custom linkage: Basic Info also enables Obligation Details for demo
        const basicTrigger = document.querySelector('.amend-trigger[data-target="tab_link_basic"]');
        if (basicTrigger) {
            basicTrigger.addEventListener('change', function() {
                document.getElementById('tab_link_obligation').classList.toggle('disabled', !this.checked);
            });
        }

        // Conditions Modal Logic
        const conditionsModal = document.getElementById('conditionsModal');
        const btnKnowConditions = document.getElementById('btnKnowConditions');
        const closeConditionsModal = document.getElementById('closeConditionsModal');

        if (btnKnowConditions && conditionsModal) {
            btnKnowConditions.addEventListener('click', function() {
                conditionsModal.classList.add('active');
            });
        }

        if (closeConditionsModal && conditionsModal) {
            closeConditionsModal.addEventListener('click', function() {
                conditionsModal.classList.remove('active');
            });
        }

        // Close modal on click outside
        window.addEventListener('click', function(event) {
            if (event.target === conditionsModal) {
                conditionsModal.classList.remove('active');
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
            altInput: true,
            altFormat: "d/m/Y",
            disableMobile: "true"
        });
    });
</script>
@endpush
@endsection