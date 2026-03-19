@extends('layouts.app')

@section('title', 'Value Added Tax Application')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/forms-custom.css') }}">
@endpush

@section('content')
<div style="max-width: 1000px; margin: 0 auto;">
    <div class="form-container" style="border: 1px solid #DA3832; border-radius: 4px; padding-bottom: 20px; box-shadow: 0 0 5px rgba(0,0,0,0.1);">
        <div class="form-header-banner" style="background-color: #DA3832; color: #fff; padding: 12px; font-weight: bold; text-align: center; text-transform: uppercase; font-size: 16px;">
            Value Added Tax Application
        </div>

        <div class="form-body" style="padding: 20px;">
            
            <!-- Error Table Section -->
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <thead>
                    <tr>
                        <th style="background-color: #262626; color: #fff; padding: 10px; border: 1px solid #ddd; text-align: center; width: 15%;">Sr.No.</th>
                        <th style="background-color: #262626; color: #fff; padding: 10px; border: 1px solid #ddd; text-align: left; width: 35%;">File Section</th>
                        <th style="background-color: #262626; color: #fff; padding: 10px; border: 1px solid #ddd; text-align: left; width: 50%;">Error Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center; padding: 10px; border: 1px solid #ddd;">1</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">eTIMS Registration</td>
                        <td style="padding: 10px; border: 1px solid #ddd; color: #DA3832;">The Pin A00000000000s has not Onboarded to eTIMS</td>
                    </tr>
                    <tr style="background-color: #fafafa;">
                        <td style="text-align: center; padding: 10px; border: 1px solid #ddd;">2</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">TCC Compliance</td>
                        <td style="padding: 10px; border: 1px solid #ddd; color: #DA3832;">The Pin A00000000000s has No valid Tax Compliance</td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="form-footer" style="background: transparent; border-top: none; padding-bottom: 20px; display: flex; justify-content: center; gap: 15px;">
            <button type="button" class="btn-custom btn-cancel-red" onclick="window.location.href='{{ route('dashboard') }}'">Back</button>
        </div>
    </div>
</div>
@endsection


