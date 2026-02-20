<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Registration Routes
Route::get('/forms/view-taxpayer-profile', function () { return view('forms.view_taxpayer_profile'); })->name('forms.view-taxpayer-profile');
Route::get('/forms/reprint-pin-certificate', function () { return view('forms.reprint_pin_certificate'); })->name('forms.reprint-pin-certificate');
Route::get('/forms/amend-profile-details', function () { return view('forms.amend_profile_details'); })->name('forms.amend-profile-details');
Route::get('/forms/change-tso', function () { return view('forms.change_tso'); })->name('forms.change-tso');
Route::get('/forms/change-accounting-period', function () { return view('forms.change_accounting_period'); })->name('forms.change-accounting-period');
Route::get('/forms/update-contact-details', function () { return view('forms.update_contact_details'); })->name('forms.update-contact-details');
Route::get('/forms/e-reactivation', function () { return view('forms.e_reactivation'); })->name('forms.e-reactivation');
Route::get('/forms/e-dormancy', function () { return view('forms.e_dormancy'); })->name('forms.e-dormancy');
Route::get('/forms/e-cancellation', function () { return view('forms.e_cancellation'); })->name('forms.e-cancellation');

// Returns Routes
Route::get('/forms/file-amended-return', function () { return view('forms.file_amended_return'); })->name('forms.file-amended-return');
Route::get('/forms/view-filed-return', function () { return view('forms.view_filed_return'); })->name('forms.view-filed-return');
Route::get('/forms/file-nil-return', function () { return view('forms.file_nil_return'); })->name('forms.file-nil-return');
Route::get('/forms/itr-employment', function () { return view('forms.itr_employment'); })->name('forms.itr-employment');
Route::get('/forms/download-paye-csv', function () { return view('forms.download_paye_csv'); })->name('forms.download-paye-csv');

// Simplified Returns
Route::get('/forms/itr-employment-simplified', function () { return view('forms.itr_employment_simplified'); })->name('forms.itr-employment-simplified');
Route::get('/forms/excise-services-simplified', function () { return view('forms.excise_services_simplified'); })->name('forms.excise-services-simplified');
Route::get('/forms/tot-return-simplified', function () { return view('forms.tot_return_simplified'); })->name('forms.tot-return-simplified');

// Other routes can be added as pages are developed



// Automatically generated routes for navigation links
Route::get('/forms/appeal-court-appeal', function () { return view('forms.appeal_court_appeal'); })->name('forms.appeal-court-appeal');
Route::get('/forms/appeal-court-appeal-wht', function () { return view('forms.appeal_court_appeal_wht'); })->name('forms.appeal-court-appeal-wht');
Route::get('/forms/appeal-high-court', function () { return view('forms.appeal_high_court'); })->name('forms.appeal-high-court');
Route::get('/forms/appeal-high-court-wht', function () { return view('forms.appeal_high_court_wht'); })->name('forms.appeal-high-court-wht');
Route::get('/forms/appeal-tribunal', function () { return view('forms.appeal_tribunal'); })->name('forms.appeal-tribunal');
Route::get('/forms/appeal-tribunal-wht', function () { return view('forms.appeal_tribunal_wht'); })->name('forms.appeal-tribunal-wht');
Route::get('/forms/apply-payment-plan', function () { return view('forms.apply_payment_plan'); })->name('forms.apply-payment-plan');
Route::get('/forms/apply-tcc', function () { return view('forms.apply_tcc'); })->name('forms.apply-tcc');
Route::get('/forms/change-password', function () { return view('forms.change_password'); })->name('forms.change-password');
Route::get('/forms/consult-certificates', function () { return view('forms.consult_certificates'); })->name('forms.consult-certificates');
Route::get('/forms/consult-cgt', function () { return view('forms.consult_cgt'); })->name('forms.consult-cgt');
Route::get('/forms/consult-payments', function () { return view('forms.consult_payments'); })->name('forms.consult-payments');
Route::get('/forms/consult-reprint-tcc', function () { return view('forms.consult_reprint_tcc'); })->name('forms.consult-reprint-tcc');
Route::get('/forms/debt-details', function () { return view('forms.debt_details'); })->name('forms.debt-details');
Route::get('/forms/destruction-goods', function () { return view('forms.destruction_goods'); })->name('forms.destruction-goods');
Route::get('/forms/excise-goods-cancel', function () { return view('forms.excise_goods_cancel'); })->name('forms.excise-goods-cancel');
Route::get('/forms/excise-goods-license', function () { return view('forms.excise_goods_license'); })->name('forms.excise-goods-license');
Route::get('/forms/excise-refund', function () { return view('forms.excise_refund'); })->name('forms.excise-refund');
Route::get('/forms/excise-service-cancel', function () { return view('forms.excise_service_cancel'); })->name('forms.excise-service-cancel');
Route::get('/forms/excise-service-license', function () { return view('forms.excise_service_license'); })->name('forms.excise-service-license');
Route::get('/forms/faq', function () { return view('forms.faq'); })->name('forms.faq');
Route::get('/forms/feedback', function () { return view('forms.feedback'); })->name('forms.feedback');
Route::get('/forms/general-ledger', function () { return view('forms.general_ledger'); })->name('forms.general-ledger');
Route::get('/forms/general-ledger-report', function () { return view('forms.general_ledger_report'); })->name('forms.general-ledger-report');
Route::get('/forms/general-ledger-report-rep', function () { return view('forms.general_ledger_report_rep'); })->name('forms.general-ledger-report-rep');
Route::get('/forms/generate-password', function () { return view('forms.generate_password'); })->name('forms.generate-password');
Route::get('/forms/import-certificate', function () { return view('forms.import_certificate'); })->name('forms.import-certificate');
Route::get('/forms/income-tax-refund', function () { return view('forms.income_tax_refund'); })->name('forms.income-tax-refund');
Route::get('/forms/installment-adjustment', function () { return view('forms.installment_adjustment'); })->name('forms.installment-adjustment');
Route::get('/forms/installment-plan', function () { return view('forms.installment_plan'); })->name('forms.installment-plan');
Route::get('/forms/inventory-refund', function () { return view('forms.inventory_refund'); })->name('forms.inventory-refund');
Route::get('/forms/it-exemption', function () { return view('forms.it_exemption'); })->name('forms.it-exemption');
Route::get('/forms/land-rate-refund', function () { return view('forms.land_rate_refund'); })->name('forms.land-rate-refund');
Route::get('/forms/make-payment', function () { return view('forms.make_payment'); })->name('forms.make-payment');
Route::get('/forms/management-sub-agents', function () { return view('forms.management_sub_agents'); })->name('forms.management-sub-agents');
Route::get('/forms/mri-cancellation', function () { return view('forms.mri_cancellation'); })->name('forms.mri-cancellation');
Route::get('/forms/objection-application', function () { return view('forms.objection_application'); })->name('forms.objection-application');
Route::get('/forms/objection-wht-vat', function () { return view('forms.objection_wht_vat'); })->name('forms.objection-wht-vat');
Route::get('/forms/offset-overpaid-tax', function () { return view('forms.offset_overpaid_tax'); })->name('forms.offset-overpaid-tax');
Route::get('/forms/payment-registration', function () { return view('forms.payment_registration'); })->name('forms.payment-registration');
Route::get('/forms/pin-checker', function () { return view('forms.pin_checker'); })->name('forms.pin-checker');
Route::get('/forms/preferential-rates', function () { return view('forms.preferential_rates'); })->name('forms.preferential-rates');
Route::get('/forms/preferential-rates-cancel', function () { return view('forms.preferential_rates_cancel'); })->name('forms.preferential-rates-cancel');
Route::get('/forms/received-messages', function () { return view('forms.received_messages'); })->name('forms.received-messages');
Route::get('/forms/register-property-erits', function () { return view('forms.register_property_erits'); })->name('forms.register-property-erits');
Route::get('/forms/remission-excise-duty', function () { return view('forms.remission_excise_duty'); })->name('forms.remission-excise-duty');
Route::get('/forms/rent-income-agent-amend', function () { return view('forms.rent_income_agent_amend'); })->name('forms.rent-income-agent-amend');
Route::get('/forms/rent-income-agent-cancel', function () { return view('forms.rent_income_agent_cancel'); })->name('forms.rent-income-agent-cancel');
Route::get('/forms/rental-wht-cert-cancel', function () { return view('forms.rental_wht_cert_cancel'); })->name('forms.rental-wht-cert-cancel');
Route::get('/forms/report-problem', function () { return view('forms.report_problem'); })->name('forms.report-problem');
Route::get('/forms/reprint-legacy-report', function () { return view('forms.reprint_legacy_report'); })->name('forms.reprint-legacy-report');
Route::get('/forms/reprint-rental-wht-cert', function () { return view('forms.reprint_rental_wht_cert'); })->name('forms.reprint-rental-wht-cert');
Route::get('/forms/reprint-vat-wht-cert', function () { return view('forms.reprint_vat_wht_cert'); })->name('forms.reprint-vat-wht-cert');
Route::get('/forms/reprint-wht-cert', function () { return view('forms.reprint_wht_cert'); })->name('forms.reprint-wht-cert');
Route::get('/forms/setoff-advance-payment', function () { return view('forms.setoff_advance_payment'); })->name('forms.setoff-advance-payment');
Route::get('/forms/setoff-legacy-voucher', function () { return view('forms.setoff_legacy_voucher'); })->name('forms.setoff-legacy-voucher');
Route::get('/forms/site-survey', function () { return view('forms.site_survey'); })->name('forms.site-survey');
Route::get('/forms/spirits-license', function () { return view('forms.spirits_license'); })->name('forms.spirits-license');
Route::get('/forms/spirits-license-cancel', function () { return view('forms.spirits_license_cancel'); })->name('forms.spirits-license-cancel');
Route::get('/forms/stamp-duty-refund', function () { return view('forms.stamp_duty_refund'); })->name('forms.stamp-duty-refund');
Route::get('/forms/tax-agent-cancel', function () { return view('forms.tax_agent_cancel'); })->name('forms.tax-agent-cancel');
Route::get('/forms/tax-agent-reg', function () { return view('forms.tax_agent_reg'); })->name('forms.tax-agent-reg');
Route::get('/forms/tax-paid-error-refund', function () { return view('forms.tax_paid_error_refund'); })->name('forms.tax-paid-error-refund');
Route::get('/forms/tax-relief-scheme', function () { return view('forms.tax_relief_scheme'); })->name('forms.tax-relief-scheme');
Route::get('/forms/tax-rep-cancel', function () { return view('forms.tax_rep_cancel'); })->name('forms.tax-rep-cancel');
Route::get('/forms/tax-rep-reg', function () { return view('forms.tax_rep_reg'); })->name('forms.tax-rep-reg');
Route::get('/forms/tcc-exemption-checker', function () { return view('forms.tcc_exemption_checker'); })->name('forms.tcc-exemption-checker');
Route::get('/forms/tot-cancellation', function () { return view('forms.tot_cancellation'); })->name('forms.tot-cancellation');
Route::get('/forms/tot-refund', function () { return view('forms.tot_refund'); })->name('forms.tot-refund');
Route::get('/forms/track-status', function () { return view('forms.track_status'); })->name('forms.track-status');
Route::get('/forms/vat-refund', function () { return view('forms.vat_refund'); })->name('forms.vat-refund');
Route::get('/forms/vat-return', function () { return view('forms.vat_return'); })->name('forms.vat-return');
Route::get('/forms/vat-wht-exemption', function () { return view('forms.vat_wht_exemption'); })->name('forms.vat-wht-exemption');
Route::get('/forms/view-sent-messages', function () { return view('forms.view_sent_messages'); })->name('forms.view-sent-messages');
Route::get('/forms/waiver-penalties', function () { return view('forms.waiver_penalties'); })->name('forms.waiver-penalties');
Route::get('/forms/wht-cert-cancel', function () { return view('forms.wht_cert_cancel'); })->name('forms.wht-cert-cancel');
Route::get('/forms/wht-checker', function () { return view('forms.wht_checker'); })->name('forms.wht-checker');
Route::get('/forms/wht-it-agent-amend', function () { return view('forms.wht_it_agent_amend'); })->name('forms.wht-it-agent-amend');
Route::get('/forms/wht-vat-agent-amend', function () { return view('forms.wht_vat_agent_amend'); })->name('forms.wht-vat-agent-amend');
Route::get('/forms/wht-vat-agent-cancel', function () { return view('forms.wht_vat_agent_cancel'); })->name('forms.wht-vat-agent-cancel');
Route::get('/forms/wht-vat-cert-cancel', function () { return view('forms.wht_vat_cert_cancel'); })->name('forms.wht-vat-cert-cancel');
