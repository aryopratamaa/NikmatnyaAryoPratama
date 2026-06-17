@extends('layouts.master')
@section('title', 'Detail Tipe Partner')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="bg-primary-subtle p-5 d-flex align-items-center justify-content-center flex-column">
        <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow-sm mb-3" style="width: 80px; height: 80px;">
            <i class="bx bx-layer" style="font-size: 3rem;"></i>
        </div>
        <h4 class="fw-bold text-primary mb-0">{{ $partnertype->tipe }}</h4>
        <span class="badge bg-primary mt-2">Data Master Tipe Partner</span>
    </div>

    <div class="card-body p-4 p-md-5">
        <h6 class="text-muted fw-bold text-uppercase mb-4 pb-2 border-bottom" style="letter-spacing: 1px;">Rincian Informasi</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-tag me-2"></i> Nama Tipe Usaha</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0 fs-5">{{ $partnertype->tipe }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-start"><i class="bx bx-align-left me-2 mt-1"></i> Deskripsi Detail</p>
            </div>
            <div class="col-md-8">
                <p class="text-dark mb-0" style="line-height: 1.6;">
                    {{ $partnertype->deskripsi ?? 'Tidak ada deskripsi yang ditambahkan untuk tipe partner ini.' }}
                </p>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-5 pt-4 border-top">
            <a href="{{ route('partnertype.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                <i class="bx bx-arrow-back me-2"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection