@extends('layouts.app')

@section('title', 'Dashboard')
@section('header', 'Hello User, Welcome to ITax !')
@section('content')
<div class="dashboard-grid">
    <!-- Sales Card -->
    <div class="stat-card">
        <div class="card-header">Sales</div>
        <div class="card-body">
            <div class="card-icon-container">
                <div class="card-icon">
                    <i class="fas fa-hand-holding-dollar"></i>
                </div>
            </div>
            <div class="card-content">
                <div class="card-row">
                    <div class="row-main">
                        <span class="row-label">Sales</span>
                        <span class="row-count">0</span>
                    </div>
                    <div class="row-sub"><span>Kes.</span> 0</div>
                </div>
                <div class="card-row">
                    <div class="row-main">
                        <span class="row-label">Credit Notes</span>
                        <span class="row-count">0</span>
                    </div>
                    <div class="row-sub"><span>Kes.</span> 0</div>
                </div>
            </div>
        </div>
        <div class="card-footer"><div class="footer-caret"><i class="fas fa-chevron-up caret-icon"></i></div></div>
    </div>

    <!-- Purchases Card -->
    <div class="stat-card">
        <div class="card-header">Purchases</div>
        <div class="card-body">
            <div class="card-icon-container">
                <div class="card-icon">
                    <i class="fas fa-cart-shopping"></i>
                </div>
            </div>
            <div class="card-content">
                <div class="card-row">
                    <div class="row-main">
                        <span class="row-label">Purchases</span>
                        <span class="row-count">0</span>
                    </div>
                    <div class="row-sub"><span>Kes.</span> 0</div>
                </div>
                <div class="card-row">
                    <div class="row-main">
                        <span class="row-label">Credit Notes</span>
                        <span class="row-count">0</span>
                    </div>
                    <div class="row-sub"><span>Kes.</span> 0</div>
                </div>
            </div>
        </div>
        <div class="card-footer"><div class="footer-caret"><i class="fas fa-chevron-up caret-icon"></i></div></div>
    </div>

    <!-- Imports Card -->
    <div class="stat-card">
        <div class="card-header">Imports</div>
        <div class="card-body">
            <div class="card-icon-container">
                <div class="card-icon">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
            <div class="card-content">
                <div class="card-row">
                    <div class="row-main">
                        <span class="row-label">Imports</span>
                        <span class="row-count">0</span>
                    </div>
                    <div class="row-sub"><span>Kes.</span> 0</div>
                </div>
            </div>
        </div>
        <div class="card-footer"><div class="footer-caret"><i class="fas fa-chevron-up caret-icon"></i></div></div>
    </div>

    <!-- Download Card -->
    <div class="stat-card">
        <div class="card-header">Download</div>
        <div class="card-body card-download">
            <div class="card-icon">
                <i class="fas fa-download download-icon"></i>
            </div>
            <span class="download-label">Download</span>
        </div>
        <div class="card-footer"><div class="footer-caret"><i class="fas fa-chevron-up caret-icon"></i></div></div>
    </div>
</div>


@endsection
