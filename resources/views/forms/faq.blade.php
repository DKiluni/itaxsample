@extends('layouts.app')

@section('title', 'FAQ')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
    <div class="faq-layout">
        <div class="faq-main form-container">
            <div class="form-header-banner">
                Welcome to iTax Online FAQ
            </div>

            <div class="form-body form-body-padded">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                    <div>
                        <ul class="faq-list">
                            <li><a href="#">Introduction to iTax</a></li>
                            <li><a href="#">Application of Tax clearance Certificate</a></li>
                            <li><a href="#">Change of PIN Details and Reset of Password</a></li>
                            <li><a href="#">Filing Returns in iTax</a></li>
                            <li><a href="#">Tax Obligation</a></li>
                            <li><a href="#">Advantages of iTax</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="faq-list">
                            <li><a href="#">Registration in iTax</a></li>
                            <li><a href="#">Systems Minimum Requirement</a></li>
                            <li><a href="#">Making Payment in iTax</a></li>
                            <li><a href="#">Refunds in Itax</a></li>
                            <li><a href="#">Other General Questions</a></li>
                        </ul>
                    </div>
                </div>
                <div style="height: 150px;"></div>
            </div>
        </div>

        <div class="faq-sidebar">
            <h4>Search FAQS:</h4>
            <input type="text" class="form-input-custom" style="margin-bottom: 10px;">
            <button class="btn-custom btn-primary-blue" style="padding: 2px 10px; font-size: 0.8rem; min-width: 50px;">Go</button>
        </div>
    </div>
</div>
@endsection
