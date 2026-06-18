@extends('layouts.master')
@section('title', 'Detail Promo')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
                <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
                    <i class="bx bx-detail fs-4 text-warning me-2"></i> Rincian Promo
                </h5>
                <div class="d-flex gap-2">
                    <a href="{{ route('promo.index') }}" class="btn btn-secondary btn-sm fw-medium px-3">
                        <i class="bx bx-left-arrow-alt me-1"></i> Kembali
                    </a>
                    <a href="{{ route('promo.edit', $promo->id) }}" class="btn btn-warning btn-sm text-dark fw-medium px-3">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>
                </div>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-5">
                    <div class="bg-label-warning rounded-3 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                        <i class="bx bxs-discount fs-2 text-warning"></i>
                    </div>
                    <div>
                        <h3 class="fw-bolder text-dark mb-1">{{ $promo->persen }}% OFF</h3>
                        <span class="text-muted" style="font-size: 0.8rem;">Sistem ID: #{{ str_pad($promo->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>

                <div class="row mb-4 pb-3 border-bottom">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Partner Usaha</label>
                        <div>
                            <span class="badge bg-label-primary px-3 py-2 fw-semibold fs-6">
                                <i class="bx bx-store-alt me-1"></i> {{ $promo->partner->namausaha ?? 'Usaha telah dihapus' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Besaran Diskon</label>
                        <p class="text-dark fw-bold mb-0 fs-5 d-flex align-items-center">
                            {{ $promo->persen }}% OFF
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tanggal Mulai</label>
                        <p class="text-dark fw-medium mb-0 fs-6 d-flex align-items-center">
                            <i class="bx bx-calendar-check me-2 text-success fs-5"></i> {{ \Carbon\Carbon::parse($promo->mulai_tgl)->format('d F Y') }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tanggal Berakhir</label>
                        <p class="text-dark fw-medium mb-0 fs-6 d-flex align-items-center">
                            <i class="bx bx-calendar-x me-2 text-danger fs-5"></i> {{ \Carbon\Carbon::parse($promo->hingga_tgl)->format('d F Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection