@extends('layouts.app')

@section('title', 'Website Survey')
@section('header', 'Site Survey')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div id="formSectionContainer">
   <div class="form-container">
        <div class="form-header-banner">
            Survey Questions
        </div>

        <div class="form-body form-body-padded">
            <div class="survey-inner-box">
                <div class="survey-question">
                    <p>1. How much time does it take for you to prepare and file VAT Return?</p>
                    <div class="checkbox-item"><input type="radio" name="q1" id="q1_1"> <label for="q1_1">Less than 30 minutes</label></div>
                    <div class="checkbox-item"><input type="radio" name="q1" id="q1_2"> <label for="q1_2">Between 30 minutes to 2 hours</label></div>
                    <div class="checkbox-item"><input type="radio" name="q1" id="q1_3"> <label for="q1_3">Between 2 hours to 4 hours</label></div>
                    <div class="checkbox-item"><input type="radio" name="q1" id="q1_4"> <label for="q1_4">Between 4 hours to 8 hours</label></div>
                    <div class="checkbox-item"><input type="radio" name="q1" id="q1_5"> <label for="q1_5">More than 8 hours</label></div>
                </div>

                {{-- ... and so on for questions 2-9 --}}
                @foreach([
                    'How much time does it take you to prepare and file PAYE Return?',
                    'How would you rate your overall experience with the iTax Portal?',
                    'How much time does it take for you to prepare and submit Income Tax - Withholding declaration?',
                    'How much time does it take for you to prepare and submit VAT - Withholding declaration?',
                    'How much time does it take for you to prepare and submit Income Tax – Resident Individual return?',
                    'How much time does it take for you to prepare and submit Income Tax – Non-Resident Individual return?',
                    'How much time does it take for you to prepare and submit Income Tax – Company return?',
                    'How much time does it take for you to prepare and submit Income Tax – Partnership return?'
                ] as $index => $question)
                <div class="survey-question">
                    <p style="font-weight: bold; margin-bottom: 10px;">{{ $index + 2 }}. {{ $question }}</p>
                    @if($index == 1) {{-- Rating question --}}
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_1"> <label for="q{{ $index + 2 }}_1">Excellent</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_2"> <label for="q{{ $index + 2 }}_2">Very Good</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_3"> <label for="q{{ $index + 2 }}_3">Good</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_4"> <label for="q{{ $index + 2 }}_4">Fair</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_5"> <label for="q{{ $index + 2 }}_5">Poor</label></div>
                    @else
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_1"> <label for="q{{ $index + 2 }}_1">Less than 30 minutes</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_2"> <label for="q{{ $index + 2 }}_2">Between 30 minutes to 2 hours</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_3"> <label for="q{{ $index + 2 }}_3">Between 2 hours to 4 hours</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_4"> <label for="q{{ $index + 2 }}_4">Between 4 hours to 8 hours</label></div>
                        <div class="checkbox-item"><input type="radio" name="q{{ $index + 2 }}" id="q{{ $index + 2 }}_5"> <label for="q{{ $index + 2 }}_5">More than 8 hours</label></div>
                    @endif
                </div>
                @endforeach

                <div class="survey-question">
                    <p style="font-weight: bold; margin-bottom: 10px;">10. Please provide your Feedback</p>
                    <textarea class="form-input-custom" rows="6"></textarea>
                </div>
            </div>

            <div class="btn-row" style="margin-top: 30px;">
                <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Home</button>
                <button type="button" class="btn-custom btn-primary-blue" onclick="window.location.reload()">Clear</button>
                <button type="submit" class="btn-custom btn-submit-orange">Submit Survey</button>
            </div>
        </div>
    </div>
</div>
@endsection



