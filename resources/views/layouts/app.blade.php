<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iTaxReplica Revenue Administration Dashboard">
    <meta name="author" content="Kenya Revenue Authority">
    <title>iTaxReplica</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icon.png') }}" style="border-radius: 50%;">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Top Header Navigation -->
    <header class="main-header">
        <div class="header-content">
            <div class="header-left">
                <div class="header-logo">
                    <img src="{{ asset('images/kra.png') }}" alt="Logo" class="logo-img" onerror="this.src='{{ asset('images/fallback-kra.png') }}'">
                </div>

                <!-- Mobile Menu Toggle Button -->
                <button id="mobile-menu-toggle" class="mobile-menu-btn" aria-label="Toggle mobile menu" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                
                <!-- Sidebar Backdrop -->
                <div id="sidebar-backdrop" class="sidebar-backdrop"></div>

                <nav class="top-nav sidebar-nav" id="main-sidebar" aria-label="Main navigation">
                    <div class="sidebar-header">
                        <img src="{{ asset('images/kra.png') }}" alt="Logo" class="sidebar-logo">
                        <button id="close-sidebar" class="close-sidebar-btn" aria-label="Close menu">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="nav-item" role="link" tabindex="0">
                        <span class="nav-label">Home</span>
                    </a>
                    
                    <!-- Registration -->
                    <div class="has-dropdown" role="navigation" aria-label="Registration menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Registration</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Taxpayer Profile submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Taxpayer Profile</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.view-taxpayer-profile') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">View Taxpayer Profile</span></a>
                                    <a href="{{ route('forms.reprint-pin-certificate') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Reprint Pin Certificate</span></a>
                                </div>
                            </div>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Amend PIN Details submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Amend PIN Details</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.amend-profile-details') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Amend Profile Details</span></a>
                                    <a href="{{ route('forms.change-tso') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Change Tax Service Office</span></a>
                                    <a href="{{ route('forms.change-accounting-period') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Change Accounting Period</span></a>
                                    <a href="{{ route('forms.update-contact-details') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Update Contact Details</span></a>
                                </div>
                            </div>
                             <a href="{{ route('forms.e-reactivation') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">e-Reactivation</span></a>
                            <a href="{{ route('forms.e-dormancy') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">e-Dormance</span></a>
                            <a href="{{ route('forms.e-cancellation') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">e-Cancellation</span></a>
                            <a href="{{ route('forms.vat-return') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Value Added Tax Application</span></a>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Excise, Remissions & Import Certificate submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Excise, Remissions & Import Certificate</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.excise-goods-license') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise Goods License</span></a>
                                    <a href="{{ route('forms.excise-service-license') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise Service License</span></a>
                                    <a href="{{ route('forms.import-certificate') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Import Certificate Application</span></a>
                                    <a href="{{ route('forms.remission-excise-duty') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Remission of Excise Duty on Denatured Spirit</span></a>
                                    <a href="{{ route('forms.spirits-license') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Spirits & Illuminating Kerosene License</span></a>
                                    <a href="{{ route('forms.excise-goods-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise Goods License Cancellation</span></a>
                                    <a href="{{ route('forms.excise-service-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise Services License Cancellation</span></a>
                                    <a href="{{ route('forms.spirits-license-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Spirits & Illuminating Kerosene License Cancellation</span></a>
                                    <a href="{{ route('forms.destruction-goods') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Application for Destruction of Excisable Goods</span></a>
                                </div>
                            </div>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Withholding Tax submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Withholding Tax</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.wht-it-agent-amend') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Withholding IT Agent Amendment</span></a>
                                    <a href="{{ route('forms.wht-vat-agent-amend') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Withholding VAT Agent Amendment</span></a>
                                    <a href="{{ route('forms.rent-income-agent-amend') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Rent Income Withholding Agent Amendment</span></a>
                                    <a href="{{ route('forms.wht-vat-agent-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Withholding VAT Agent Cancellation</span></a>
                                    <a href="{{ route('forms.rent-income-agent-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Rent Income Withholding Agent Cancellation</span></a>
                                </div>
                            </div>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Monthly Rental Income submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Monthly Rental Income</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.mri-cancellation') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">MRI Cancellation</span></a>
                                    <a href="{{ route('forms.register-property-erits') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Register/Update Property in eRits</span></a>
                                </div>
                            </div>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Exemptions, Reliefs & Preferential Rates submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Exemptions, Reliefs & Preferential Rates</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.it-exemption') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">IT Exemption</span></a>
                                    <a href="{{ route('forms.tax-relief-scheme') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Tax Relief Scheme</span></a>
                                    <a href="{{ route('forms.preferential-rates') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Registration for Preferential Tax Rates</span></a>
                                    <a href="{{ route('forms.vat-wht-exemption') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">VAT Withholding Exemption</span></a>
                                    <a href="{{ route('forms.preferential-rates-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Preferential Tax Rate Cancellation</span></a>
                                </div>
                            </div>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Tax Agents & Representatives submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Tax Agents & Representatives</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.tax-agent-reg') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Tax Agent Registration</span></a>
                                    <a href="{{ route('forms.tax-rep-reg') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Tax Representative Registration</span></a>
                                    <a href="{{ route('forms.management-sub-agents') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Management Sub Agents</span></a>
                                    <a href="{{ route('forms.tax-agent-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Tax Agent Cancellation</span></a>
                                    <a href="{{ route('forms.tax-rep-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Tax Representative Cancellation</span></a>
                                </div>
                            </div>
                            <a href="{{ route('forms.tot-cancellation') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Turnover Tax Cancellation</span></a>
                        </div>
                    </div>

                    <!-- Returns -->
                    <div class="has-dropdown" role="navigation" aria-label="Returns menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Returns</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ route('forms.vat-return') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">File Return</span></a>
                            <a href="{{ route('forms.file-amended-return') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">File Amended Return</span></a>
                            <a href="{{ route('forms.view-filed-return') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">View Filed Return</span></a>
                            <a href="{{ route('forms.file-nil-return') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">File Nil Return</span></a>
                            <a href="{{ route('forms.itr-employment') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">ITR for Employment Income Only</span></a>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Simplified Returns submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Simplified Returns</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.itr-employment-simplified') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">ITR for Employment Income Only</span></a>
                                    <a href="{{ route('forms.excise-services-simplified') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise (Services Only)</span></a>
                                    <a href="{{ route('forms.tot-return-simplified') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Turnover tax (TOT)</span></a>
                                </div>
                            </div>
                            <a href="{{ route('forms.download-paye-csv') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Download PAYE CSV</span></a>
                        </div>
                    </div>

                    <!-- Debt & Enforcement -->
                    <div class="has-dropdown" role="navigation" aria-label="Debt & Enforcement menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Debt & Enforcement</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                             <a href="{{ route('forms.debt-details') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Debt Details</span></a>
                             <a href="{{ route('forms.waiver-penalties') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Apply for Waiver of Penalties and Interests</span></a>
                             <a href="{{ route('forms.installment-plan') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Apply for Installment Plan</span></a>
                            <a href="{{ route('forms.reprint-legacy-report') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Reprint Legacy Migration Balance Report</span></a>
                        </div>
                    </div>

                    <!-- Payments -->
                    <div class="has-dropdown" role="navigation" aria-label="Payments menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Payments</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ route('forms.payment-registration') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Payment Registration</span></a>
                            <a href="{{ route('forms.make-payment') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Make Payment</span></a>
                            <a href="{{ route('forms.consult-payments') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Consult Payments</span></a>
                            <a href="{{ route('forms.consult-cgt') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Consult CGT Return</span></a>
                            <a href="{{ route('forms.apply-payment-plan') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Apply Payment Plan (New)</span></a>
                            <a href="{{ route('forms.setoff-advance-payment') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Setoff Advance Payment/offset Overpayment</span></a>
                            <a href="{{ route('forms.setoff-legacy-voucher') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Setoff Legacy Credit Voucher</span></a>
                        </div>
                    </div>

                    <!-- Assessment Disputes -->
                    <div class="has-dropdown" role="navigation" aria-label="Assessment Disputes menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Assessment Disputes</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ route('forms.objection-application') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Objection application</span></a>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Notice of Intention to appeal submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Notice of Intention to appeal</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.appeal-tribunal') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the Local Committee/Tribunal</span></a>
                                    <a href="{{ route('forms.appeal-high-court') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the High Court</span></a>
                                    <a href="{{ route('forms.appeal-court-appeal') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the Court of Appeal</span></a>
                                </div>
                            </div>
                            <a href="{{ route('forms.objection-wht-vat') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Objection Application WHT VAT</span></a>
                            <div class="has-dropdown sub-dropdown" role="navigation" aria-label="Notice of Intention to Appeal WHT VAT submenu">
                                <button class="dropdown-item" role="menuitem" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-label">Notice of Intention to Appeal WHT VAT</span>
                                    <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a href="{{ route('forms.appeal-tribunal-wht') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the Local Committee/Tribunal</span></a>
                                    <a href="{{ route('forms.appeal-high-court-wht') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the High Court</span></a>
                                    <a href="{{ route('forms.appeal-court-appeal-wht') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Appeal to the Court of Appeal</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Refund -->
                    <div class="has-dropdown" role="navigation" aria-label="Refund menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Refund</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ route('forms.vat-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">VAT Refund</span></a>
                            <a href="{{ route('forms.income-tax-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Income Tax</span></a>
                            <a href="{{ route('forms.excise-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Excise</span></a>
                            <a href="{{ route('forms.stamp-duty-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Stamp Duty</span></a>
                            <a href="{{ route('forms.land-rate-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Land Rate</span></a>
                            <a href="{{ route('forms.inventory-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Inventory</span></a>
                            <a href="{{ route('forms.tax-paid-error-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Refund on Tax Paid in Error</span></a>
                            <a href="{{ route('forms.offset-overpaid-tax') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Refund or Offset Overpaid Taxes</span></a>
                            <a href="{{ route('forms.tot-refund') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Turnover Tax</span></a>
                            <a href="{{ route('forms.installment-adjustment') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Installment Adjustment Voucher</span></a>
                        </div>
                    </div>

                    <!-- Certificates -->
                    <div class="has-dropdown" role="navigation" aria-label="Certificates menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Certificates</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="{{ route('forms.reprint-wht-cert') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Reprint Withholding Certificate</span></a>
                            <a href="{{ route('forms.wht-vat-cert-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Withholding VAT Certificate Cancellation</span></a>
                            <a href="{{ route('forms.rental-wht-cert-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Rental Income Withholding Certificate Cancellation</span></a>
                            <a href="{{ route('forms.wht-cert-cancel') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Withholding Certificate Cancellation</span></a>
                            <a href="{{ route('forms.apply-tcc') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Apply for Tax Compliance Certificate (TCC)</span></a>
                            <a href="{{ route('forms.consult-reprint-tcc') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Consult and Reprint TCC</span></a>
                            <a href="{{ route('forms.reprint-vat-wht-cert') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Reprint VAT Withholding Certificate</span></a>
                            <a href="{{ route('forms.reprint-rental-wht-cert') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Reprint Rental Income Withholding Certificate</span></a>
                        </div>
                    </div>

                    <!-- Useful Links -->
                    <div class="has-dropdown" role="navigation" aria-label="Useful Links menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">Useful Links</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu dropdown-right" role="menu">
                            <a href="{{ route('forms.faq') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">FAQ</span></a>
                            <a href="{{ route('forms.change-password') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Change Password</span></a>
                            <a href="{{ route('forms.track-status') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Track Status of Application</span></a>
                            <a href="{{ route('forms.generate-password') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Generate Tax Type Specific Password</span></a>
                            <a href="{{ route('forms.pin-checker') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">PIN Checker</span></a>
                            <a href="{{ route('forms.site-survey') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Site Survey</span></a>
                            <a href="{{ route('forms.tcc-exemption-checker') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">TCC/Exemption Checker</span></a>
                            <a href="{{ route('forms.wht-checker') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">WHT Checker</span></a>
                            <a href="{{ route('forms.feedback') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Feedback</span></a>
                            <a href="{{ route('forms.report-problem') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Report Problem</span></a>
                            <a href="{{ route('forms.consult-certificates') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Consult and Reprint Acknowledgement Receipt and Certificates</span></a>
                        </div>
                    </div>

                    <!-- E-Communication -->
                    <div class="has-dropdown" role="navigation" aria-label="E-Communication menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">e-Communication</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu dropdown-right" role="menu">
                            <a href="{{ route('forms.received-messages') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">Received Messages</span></a>
                            <a href="{{ route('forms.view-sent-messages') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">View Sent Messages</span></a>
                        </div>
                    </div>

                    <!-- Myledger -->
                    <div class="has-dropdown" role="navigation" aria-label="My Ledger menu">
                        <button class="nav-item" aria-haspopup="true" aria-expanded="false">
                            <span class="nav-label">My Ledger</span>
                            <span class="arrow" aria-hidden="true"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <div class="dropdown-menu dropdown-right" role="menu">
                            <a href="{{ route('forms.general-ledger') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">General Ledger</span></a>
                            <a href="{{ route('forms.general-ledger-report') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">General Ledger Report</span></a>
                            <a href="{{ route('forms.general-ledger-report-rep') }}" class="dropdown-item" role="menuitem" tabindex="0"><span class="nav-label">General Ledger Report for Tax Rep</span></a>
                        </div>
                    </div>

                    <!-- Logout -->
                    <a href="#" class="nav-item logout-nav" role="link" tabindex="0">
                        <span class="nav-label"> Logout</span>
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="main-wrapper">
        <div class="page-header">
            <h2 class="page-title">@yield('header', 'Welcome')</h2>
        </div>
        
        <!-- Dynamic Content -->
        <main class="content-area" id="main-content">
            @yield('content')
        </main>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-left">
                <img src="{{ asset('images/vision.jpg') }}" alt="Kenya Vision 2030" class="footer-logo-left" onerror="this.src='{{ asset('images/fallback-vision.jpg') }}'">
            </div>
            <div class="footer-center">
                <p>Times Tower, Haile Selassie Avenue,</p>
                <p>P.O.Box 48240 - 00100 GPO Nairobi Tel: 020-310300, 020-281000 Fax: 341342</p>
                <p>Call Center details Tel:020-4999999,020-4998000 Cell:0711-099999 Email: callcentre@kra.go.ke</p>
                <p class="copyright">Site best viewed in 1024 X 768 resolution with IE 7.0 and above. ©2011-2026</p>
            </div>
            <div class="footer-right">
                <img src="{{ asset('images/logo.png') }}" alt="Powered By" class="footer-logo-right" onerror="this.src='{{ asset('images/fallback-logo.png') }}'">
            </div>
        </div>
    </footer>

    <!-- CSRF Token for AJAX requests -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle Logic
        const mobileToggle = document.getElementById('mobile-menu-toggle');
        const closeSidebar = document.getElementById('close-sidebar');
        const sidebar = document.getElementById('main-sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        const body = document.body;

        function toggleSidebar(show) {
            const isVisible = show !== undefined ? show : !sidebar.classList.contains('active');
            sidebar.classList.toggle('active', isVisible);
            backdrop.classList.toggle('active', isVisible);
            mobileToggle.setAttribute('aria-expanded', isVisible);
            body.style.overflow = isVisible ? 'hidden' : '';
        }

        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => toggleSidebar(true));
        }

        if (closeSidebar) {
            closeSidebar.addEventListener('click', () => toggleSidebar(false));
        }

        if (backdrop) {
            backdrop.addEventListener('click', () => toggleSidebar(false));
        }

        // Close sidebar on window resize if switching to desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth > 992 && sidebar.classList.contains('active')) {
                toggleSidebar(false);
            }
        });

        // Safely check if card elements exist (from child views)
        const cardFooters = document.querySelectorAll('.card-footer');
        if (cardFooters.length > 0) {
            cardFooters.forEach(footer => {
                footer.addEventListener('click', function(e) {
                    e.preventDefault();
                    const card = this.closest('.stat-card');
                    if (card) {
                        card.classList.toggle('collapsed');
                        card.style.transition = 'all 0.3s ease';
                        
                        // Update ARIA expanded state if applicable
                        const expandButton = card.querySelector('[aria-expanded]');
                        if (expandButton) {
                            const isExpanded = expandButton.getAttribute('aria-expanded') === 'true';
                            expandButton.setAttribute('aria-expanded', !isExpanded);
                        }
                        
                        console.log('Card toggled:', card.classList.contains('collapsed') ? 'collapsed' : 'expanded');
                    }
                });
                
                // Add hover effect for better UX (if not handled by CSS)
                footer.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#DA3832';
                });
                
                footer.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = 'black';
                });
            });
        }
        
        // Mobile detection function
        function isMobile() {
            return window.innerWidth <= 992;
        }
        
        // Handle dropdown accessibility
        function setupDropdowns() {
            // Reset all expanded states
            document.querySelectorAll('.has-dropdown > .nav-item[aria-expanded]').forEach(button => {
                const isActive = button.closest('.has-dropdown')?.classList.contains('active');
                button.setAttribute('aria-expanded', isActive ? 'true' : 'false');
            });
            
            if (isMobile()) {
                // On mobile, use click instead of hover for dropdowns
                document.querySelectorAll('.has-dropdown > .nav-item').forEach(item => {
                    // Remove existing listeners to prevent duplicates
                    item.removeEventListener('click', handleMobileClick);
                    item.addEventListener('click', handleMobileClick);
                });
                
                // Handle sub-dropdowns on mobile
                document.querySelectorAll('.sub-dropdown > .dropdown-item[aria-haspopup="true"]').forEach(item => {
                    item.removeEventListener('click', handleSubDropdownClick);
                    item.addEventListener('click', handleSubDropdownClick);
                });
                
                // Close dropdowns when clicking outside on mobile
                document.removeEventListener('click', handleOutsideClick);
                document.addEventListener('click', handleOutsideClick);
            } else {
                // Reset mobile classes when switching to desktop
                document.querySelectorAll('.has-dropdown.active, .sub-dropdown.active').forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
                
                // Clean up mobile event listeners
                document.removeEventListener('click', handleOutsideClick);
            }
        }
        
        // Mobile click handlers
        function handleMobileClick(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const button = this;
            const parent = button.closest('.has-dropdown');
            const wasActive = parent.classList.contains('active');
            
            // Update ARIA expanded state
            button.setAttribute('aria-expanded', !wasActive);
            
            // Close all other dropdowns
            document.querySelectorAll('.has-dropdown.active').forEach(dropdown => {
                if (dropdown !== parent) {
                    dropdown.classList.remove('active');
                    const btn = dropdown.querySelector('.nav-item[aria-expanded]');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });
            
            // Toggle this one
            parent.classList.toggle('active', !wasActive);
        }
        
        function handleSubDropdownClick(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const item = this;
            const parent = item.closest('.sub-dropdown');
            const wasActive = parent.classList.contains('active');
            
            // Update ARIA expanded state
            item.setAttribute('aria-expanded', !wasActive);
            
            // Close other sub-dropdowns at same level
            const parentDropdown = parent.closest('.dropdown-menu');
            if (parentDropdown) {
                parentDropdown.querySelectorAll('.sub-dropdown.active').forEach(sub => {
                    if (sub !== parent) {
                        sub.classList.remove('active');
                        const btn = sub.querySelector('[aria-expanded]');
                        if (btn) btn.setAttribute('aria-expanded', 'false');
                    }
                });
            }
            
            // Toggle this one
            parent.classList.toggle('active', !wasActive);
        }
        
        function handleOutsideClick(e) {
            if (!e.target.closest('.has-dropdown')) {
                document.querySelectorAll('.has-dropdown.active').forEach(dropdown => {
                    dropdown.classList.remove('active');
                    const btn = dropdown.querySelector('.nav-item[aria-expanded]');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });
                
                document.querySelectorAll('.sub-dropdown.active').forEach(dropdown => {
                    dropdown.classList.remove('active');
                    const btn = dropdown.querySelector('[aria-expanded]');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });
            }
        }
        
        // Initialize dropdowns
        setupDropdowns();
        
        // Handle keyboard navigation for accessibility
        document.querySelectorAll('.nav-item[role="button"], .dropdown-item[role="menuitem"][aria-haspopup="true"]').forEach(button => {
            button.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                } else if (e.key === 'Escape') {
                    // Close dropdown on Escape
                    const parent = this.closest('.has-dropdown, .sub-dropdown');
                    if (parent) {
                        parent.classList.remove('active');
                        this.setAttribute('aria-expanded', 'false');
                    }
                }
            });
        });
        
        // Handle window resize with debounce
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                setupDropdowns();
            }, 250);
        });
        
        // Dropdown hover delay management (desktop only)
        let hoverTimer;
        if (!isMobile()) {
            document.querySelectorAll('.has-dropdown').forEach(dropdown => {
                dropdown.addEventListener('mouseleave', function(e) {
                    const self = this;
                    hoverTimer = setTimeout(function() {
                        const relatedTarget = e.relatedTarget;
                        if (!relatedTarget || !self.contains(relatedTarget)) {
                            // Optional: handle cleanup
                        }
                    }, 200);
                });
                
                dropdown.addEventListener('mouseenter', function() {
                    clearTimeout(hoverTimer);
                });
            });
        }
        
        // Add class for long text items in dropdowns
        document.querySelectorAll('.dropdown-item').forEach(item => {
            const text = item.textContent.trim();
            if (text.length > 30) {
                item.classList.add('long-text');
            }
        });
    });
    </script>
    
    @stack('scripts')
</body>
</html>