@extends('layouts.master')
@section('title', 'Detail Promo')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="bg-warning p-5 d-flex align-items-center justify-content-center flex-column position-relative">
        <div class="bg-white text-warning rounded-circle d-flex align-items-center justify-content-center shadow-sm mb-3 z-1" style="width: 80px; height: 80px;">
            <i class="bx bxs-discount" style="font-size: 3rem;"></i>
        </div>
        <h4 class="fw-bold text-dark mb-0 z-1">{{ $promo->persen }}% OFF</h4>
        <span class="badge bg-dark mt-2 z-1">Diskon Partner Usaha</span>
        <i class="bx bxs-offer position-absolute text-white" style="font-size: 15rem; right: 0; bottom: -50px; opacity: 0.2;"></i>
    </div>

    <div class="card-body p-4 p-md-5">
        <h6 class="text-muted fw-bold text-uppercase mb-4 pb-2 border-bottom" style="letter-spacing: 1px;">Rincian Data Promo</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-store-alt me-2"></i> Partner Usaha</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0 fs-5">{{ $promo->partner->namausaha ?? 'Usaha telah dihapus' }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bxs-discount me-2"></i> Besaran Diskon</p>
            </div>
            <div class="col-md-8">
                <span class="badge bg-label-warning px-3 py-2 fw-bold fs-5">{{ $promo->persen }}% OFF</span>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-calendar-check me-2"></i> Tanggal Mulai</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ \Carbon\Carbon::parse($promo->mulai_tgl)->format('d F Y') }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-calendar-x me-2"></i> Tanggal Berakhir</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ \Carbon\Carbon::parse($promo->hingga_tgl)->format('d F Y') }}</p>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-5 pt-4 border-top">
            <a href="{{ route('promo.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                <i class="bx bx-arrow-back me-2"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection