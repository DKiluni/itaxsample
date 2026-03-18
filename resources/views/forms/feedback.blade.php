@extends('layouts.app')

@section('title', 'Feedback')
@section('header', 'Feedback')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush



@section('content')
<div id="formSectionContainer">
    <div class="mandatory-notice">
        All fields marked with <span class="required-star">*</span> are mandatory
    </div>

    <div class="form-container">
        <div class="form-header-banner">
            Feedback
        </div>

        <div class="form-body form-body-padded">
            <div class="section-group">
                <div class="section-group-title">Feedback Details</div>
                <table class="inner-profile-table">
                    <tbody>
                        <tr>
                            <td class="label-cell">Name<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" value="Dummy User" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Subject<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <input type="text" class="form-input-custom" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label-cell">Message<span class="required-star">*</span></td>
                            <td class="input-cell">
                                <textarea id="feedbackMessage" class="form-input-custom" rows="8" maxlength="200" style="resize: vertical;" required></textarea>
                                <div class="char-count">
                                    (Maximum characters: <b>200</b>)<br>
                                    You have <b id="charCounter">200</b> characters left.
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="btn-row">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textarea = document.getElementById('feedbackMessage');
        const counter = document.getElementById('charCounter');
        const maxChars = 200;

        textarea.addEventListener('input', function() {
            const remaining = maxChars - textarea.value.length;
            counter.innerText = remaining;
            
            if (remaining <= 0) {
                counter.style.color = 'red';
            } else {
                counter.style.color = 'inherit';
            }
        });
    });
</script>
@endpush
@endsection



