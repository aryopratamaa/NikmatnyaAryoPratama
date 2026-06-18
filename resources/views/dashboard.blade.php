@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<style>
    .hero-banner {
        background: linear-gradient(135deg, #696cff 0%, #4346eb 100%);
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
    }
    .hero-banner-icon {
        position: absolute;
        right: -5%;
        bottom: -20%;
        font-size: 18rem;
        color: rgba(255, 255, 255, 0.1);
        transform: rotate(-10deg);
    }
    .feature-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 1rem;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.15)!important;
    }
    .icon-box {
        width: 60px;
        height: 60px;
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 1.25rem auto;
    }
</style>

<div class="card hero-banner border-0 shadow-sm mb-5 mt-2">
    <div class="card-body p-5 d-flex align-items-center position-relative">
        <div class="position-relative z-1 w-100" style="max-width: 800px;">
            <h2 class="fw-bolder text-white mb-3" style="font-size: 2.5rem; letter-spacing: -0.5px;">
                Dari Hobi Jadi Bisnis,<br>Dari Rasa Jadi Keluarga.
            </h2>
            <p class="fs-5 text-white mb-4" style="opacity: 0.85; line-height: 1.6;">
                <strong>Nikmat Rasanyo!</strong> adalah rumah bagi para pencinta, pelaku, dan inovator kuliner. Tempat kolaborasi melahirkan kreasi, dan komunitas mendorong pertumbuhan bisnis FnB-mu.
            </p>
            <span class="badge bg-white text-primary px-4 py-2 fs-6 rounded-pill shadow-sm">
                Komunitas FnB
            </span>
        </div>
        <i class="bx bx-restaurant hero-banner-icon"></i>
    </div>
</div>

<div class="d-flex align-items-center mb-4">
    <div class="bg-label-primary rounded p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
        <i class="bx bx-help-circle fs-4"></i>
    </div>
    <h4 class="fw-bold mb-0 text-dark">Kenapa harus Sodapnya..!?</h4>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="card feature-card shadow-sm h-100">
            <div class="card-body p-4 text-center">
                <div class="icon-box bg-label-primary text-primary">
                    <i class="bx bx-globe"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Networking Kuliner</h5>
                <p class="text-muted mb-0 fs-6">Perluas jaringan dan koneksi bisnis Anda dengan mudah.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card feature-card shadow-sm h-100">
            <div class="card-body p-4 text-center">
                <div class="icon-box bg-label-warning text-warning">
                    <i class="bx bx-bulb"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Knowledge Sharing</h5>
                <p class="text-muted mb-0 fs-6">Berbagi ilmu dan strategi langsung dari para ahli.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card feature-card shadow-sm h-100">
            <div class="card-body p-4 text-center">
                <div class="icon-box bg-label-success text-success">
                    <i class="bx bx-group"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Kolaborasi Bisnis</h5>
                <p class="text-muted mb-0 fs-6">Ciptakan menu dan inovasi bisnis FnB bersama.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card feature-card shadow-sm h-100">
            <div class="card-body p-4 text-center">
                <div class="icon-box bg-label-info text-info">
                    <i class="bx bx-rocket"></i>
                </div>
                <h5 class="fw-bold text-dark mb-2">Eksposur Brand</h5>
                <p class="text-muted mb-0 fs-6">Tingkatkan visibilitas dan jangkauan usaha Anda.</p>
            </div>
        </div>
    </div>
</div>
@endsection