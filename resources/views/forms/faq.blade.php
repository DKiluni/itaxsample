@extends('layouts.app')

@section('title', 'FAQ')
@section('header', 'FAQ')



@section('content')
<div class="form-container">
    <div class="form-header">
        <span>FAQ</span>
        <i class="fas fa-edit"></i>
    </div>

    <div class="form-body">
        
        <div class="form-section">
            <div class="form-subheader">Frequently Asked Questions</div>
            <div class="accordion-item" >
                <div class="accordion-header">
                    <span>How do I file my return?</span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="accordion-body">To file your return, navigate to the 'Returns' menu and select your tax type. Follow the wizard steps to complete.</div>
            </div>
            <div class="accordion-item" >
                <div class="accordion-header">
                    <span>When is the deadline?</span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="accordion-body">Most returns are due by the 20th of the following month. Please check specific tax type rules.</div>
            </div>
        </div>
    </div>
    </div>

    <div class="form-footer">
        <button class="btn-kra btn-kra-secondary">Reset</button>
        <button class="btn-kra btn-kra-primary"><i class="fas fa-check-circle"></i> Submit</button>
    </div>
</div>
@endsection