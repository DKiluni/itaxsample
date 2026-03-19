@extends('layouts.app')

@section('title', 'Application for Excise Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div class="mandatory-notice">
    All fields marked with * are mandatory
</div>

<div class="form-container-red">
    <div class="amendment-tabs-container">
        <div class="amendment-tab active" id="tab-ab" onclick="showTab('ab')">Section A & B</div>
        <div class="amendment-tab" id="tab-c" onclick="showTab('c')">Section C</div>
    </div>

    <div class="amendment-banner-wizard">
        Application for Excise Services
    </div>

    <div id="section-ab" class="tab-pane active" style="padding: 0;">
        <div class="section-group">
            <div class="section-group-title">Section A : Taxpayer Details</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg">Applicant Type<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom" style="width: 100%;">
                                <option value="Taxpayer">Taxpayer</option>
                            </select>
                        </td>
                        <td class="label-bg" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="label-bg">Taxpayer PIN<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <input type="text" value="A000000000X" class="form-input-custom" style="width: 100%;" readonly>
                        </td>
                        <td class="label-bg" style="width: 20%;">Taxpayer Name</td>
                        <td class="input-bg" style="width: 30%;">
                            <input type="text" value="TAXPAYER NAME" class="form-input-custom" style="width: 100%;" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-group">
            <div class="section-group-title">Section B : Premises Details</div>
            
            <div class="sub-header-center" style="margin-top: 5px; border-top: none;">Principal Physical Address</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg">L.R. Number</td>
                        <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        <td class="label-bg">Building<span style="color: red;">*</span></td>
                        <td class="input-bg"><input type="text" class="form-input-custom"></td>
                    </tr>
                    <tr>
                        <td class="label-bg">Street/Road<span style="color: red;">*</span></td>
                        <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        <td class="label-bg">City/Town<span style="color: red;">*</span></td>
                        <td class="input-bg"><input type="text" class="form-input-custom"></td>
                    </tr>
                    <tr>
                        <td class="label-bg">County<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom"><option>--Select--</option></select>
                        </td>
                        <td class="label-bg">District<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom"><option>--Select--</option></select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-bg">Tax Service Office(TSO)</td>
                        <td class="input-bg"><input type="text" class="form-input-custom" readonly></td>
                        <td class="label-bg">Tax Area/Locality<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom"><option>--Select--</option></select>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="sub-header-center">Principal Postal Address</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg">Postal Code<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom"><option>--Select--</option></select>
                        </td>
                        <td class="label-bg">Town<span style="color: red;">*</span></td>
                        <td class="input-bg">
                            <select class="form-select-custom" readonly><option>--Select--</option></select>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-bg">P.O.Box<span style="color: red;">*</span></td>
                        <td class="input-bg" colspan="3"><input type="text" class="form-input-custom" style="width: 300px;"></td>
                    </tr>
                </tbody>
            </table>

            <div class="sub-header-center">Contact Details</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg">Telephone Number</td>
                        <td class="input-bg"><input type="text" class="form-input-custom"></td>
                        <td class="label-bg">Mobile Number<span style="color: red;">*</span></td>
                        <td class="input-bg"><input type="text" value="0712345678" class="form-input-custom"></td>
                    </tr>
                    <tr>
                        <td class="label-bg">Email Address<span style="color: red;">*</span></td>
                        <td class="input-bg" colspan="3"><input type="text" value="taxpayer@example.com" class="form-input-custom" style="width: 300px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="text-align: center; margin-top: 20px; padding-bottom: 20px;">
            <button type="button" class="btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'" style="border-radius: 4px; padding: 8px 30px;">Back</button>
            <button type="button" class="btn-submit-orange" onclick="showTab('c')" style="border-radius: 4px; padding: 8px 30px; margin-left: 10px;">Next</button>
        </div>
    </div>

    <div id="section-c" class="tab-pane" style="padding: 0;">
        <div class="section-group">
            <div class="section-group-title">Section C : Service Details</div>
            <table class="inner-table-custom">
                <tbody>
                    <tr>
                        <td class="label-bg" style="width: 20%;">Type of Service<span style="color: red;">*</span></td>
                        <td class="input-bg" style="width: 80%;">
                            <div class="services-list" style="border: none;">
                                <div class="service-item"><input type="checkbox"><div class="service-label">Telephone Services</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Internet Data Services</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Mobile money transfer by cellular phone service providers or licensed payment service providers</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Financial Services</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Betting (Excluding horse racing)</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Gaming</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Lottery</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Prize Competition</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Digital Lending Services</div></div>
                                <div class="service-item"><input type="checkbox"><div class="service-label">Advertisement fees on TV, print media, billboards, radio stations, internet and social media (For alcoholic beverages, betting, gaming, lotteries and prize competition)</div></div>
                                <div class="service-item" style="border-bottom: none;"><input type="checkbox"><div class="service-label">Fees charged on Virtual Assets Transactions</div></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="text-align: center; margin-top: 20px; padding-bottom: 20px;">
            <button type="button" class="btn-cancel-red" onclick="showTab('ab')" style="border-radius: 4px; padding: 8px 30px;">Previous</button>
            <button type="button" class="btn-submit-orange" style="border-radius: 4px; padding: 8px 30px; margin-left: 10px;">Submit</button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showTab(tab) {
        document.querySelectorAll('.tab-pane').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.amendment-tab').forEach(el => el.classList.remove('active'));
        
        if (tab === 'ab') {
            document.getElementById('section-ab').classList.add('active');
            document.getElementById('tab-ab').classList.add('active');
        } else {
            document.getElementById('section-c').classList.add('active');
            document.getElementById('tab-c').classList.add('active');
        }
    }
</script>
@endpush
@endsection
