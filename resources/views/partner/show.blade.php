@extends('layouts.master')
@section('title', 'Detail Partner Usaha')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
                <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
                    <i class="bx bx-detail fs-4 text-primary me-2"></i> Rincian Partner Usaha
                </h5>
                <div class="d-flex gap-2">
                    <a href="{{ route('partner.index') }}" class="btn btn-secondary btn-sm fw-medium px-3">
                        <i class="bx bx-left-arrow-alt me-1"></i> Kembali
                    </a>
                    <a href="{{ route('partner.edit', $partner->id) }}" class="btn btn-warning btn-sm text-white fw-medium px-3">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>
                </div>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-5">
                    <div class="bg-label-primary rounded-3 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                        <i class="bx bx-store fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h3 class="fw-bolder text-dark mb-1">{{ $partner->namausaha }}</h3>
                        <span class="text-muted" style="font-size: 0.8rem;">Sistem ID: #{{ str_pad($partner->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>

                <div class="row mb-4 pb-2">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Kategori Tipe Partner</label>
                        <div>
                            <span class="badge bg-label-primary px-3 py-2 fw-semibold fs-6">
                                {{ $partner->partnertype->tipe ?? 'Tipe Telah Dihapus' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tanggal Bergabung</label>
                        <p class="text-dark fw-medium mb-0 fs-6 d-flex align-items-center">
                            <i class="bx bx-calendar me-2 text-muted fs-5"></i> {{ $partner->created_at ? $partner->created_at->format('d F Y') : '-' }}
                        </p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Alamat Lengkap</label>
                        <p class="text-dark fw-medium mb-0 fs-6 d-flex align-items-start" style="line-height: 1.6;">
                            <i class="bx bx-map text-danger fs-5 me-2 mt-1"></i> {{ $partner->alamat }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Deskripsi / Lingkup Usaha</label>
                        <p class="text-dark mb-0 fs-6 d-flex align-items-start" style="line-height: 1.6;">
                            <i class="bx bx-info-circle text-info fs-5 me-2 mt-1"></i> {{ $partner->deskripsi ?? 'Tidak ada deskripsi yang ditambahkan.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection