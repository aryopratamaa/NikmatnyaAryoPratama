@extends('layouts.master')
@section('title', 'Detail Partner Usaha')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="bg-success-subtle p-5 d-flex align-items-center justify-content-center flex-column">
        <div class="bg-white text-success rounded-circle d-flex align-items-center justify-content-center shadow-sm mb-3" style="width: 80px; height: 80px;">
            <i class="bx bx-store-alt" style="font-size: 3rem;"></i>
        </div>
        <h4 class="fw-bold text-success mb-0">{{ $partner->namausaha }}</h4>
        <span class="badge bg-success mt-2">ID Partner: #{{ str_pad($partner->id, 4, '0', STR_PAD_LEFT) }}</span>
    </div>

    <div class="card-body p-4 p-md-5">
        <h6 class="text-muted fw-bold text-uppercase mb-4 pb-2 border-bottom" style="letter-spacing: 1px;">Rincian Profil Usaha</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-category me-2"></i> Kategori Tipe Partner</p>
            </div>
            <div class="col-md-8">
                <span class="badge bg-label-success px-3 py-2 fw-semibold fs-6">{{ $partner->partnertype->tipe ?? 'Tipe Telah Dihapus' }}</span>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-map me-2"></i> Alamat Lengkap</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ $partner->alamat }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-start"><i class="bx bx-info-circle me-2 mt-1"></i> Deskripsi / Lingkup Usaha</p>
            </div>
            <div class="col-md-8">
                <p class="text-dark mb-0" style="line-height: 1.6;">
                    {{ $partner->deskripsi ?? 'Tidak ada deskripsi yang ditambahkan.' }}
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-calendar me-2"></i> Tanggal Bergabung</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ $partner->created_at ? $partner->created_at->format('d F Y') : '-' }}</p>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-5 pt-4 border-top">
            <a href="{{ route('partner.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                <i class="bx bx-arrow-back me-2"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection