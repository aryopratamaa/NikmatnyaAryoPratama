@extends('layouts.master')
@section('title', 'Detail Tipe Partner')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
                <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
                    <i class="bx bx-detail fs-4 text-primary me-2"></i> Rincian Tipe Partner
                </h5>
                <div class="d-flex gap-2">
                    <a href="{{ route('partnertype.index') }}" class="btn btn-secondary btn-sm fw-medium px-3">
                        <i class="bx bx-left-arrow-alt me-1"></i> Kembali
                    </a>
                    <a href="{{ route('partnertype.edit', $partnertype->id) }}" class="btn btn-warning btn-sm text-white fw-medium px-3">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>
                </div>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-5">
                    <div class="bg-label-primary rounded-3 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                        <i class="bx bx-purchase-tag-alt fs-2 text-primary"></i>
                    </div>
                    <div>
                        <h3 class="fw-bolder text-dark mb-1">{{ $partnertype->tipe }}</h3>
                        <span class="text-muted" style="font-size: 0.8rem;">Sistem ID: #{{ str_pad($partnertype->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Deskripsi Operasional</label>
                        <p class="text-dark mb-0 fs-6" style="line-height: 1.6;">
                            {{ $partnertype->deskripsi ?? 'Tidak ada deskripsi yang ditambahkan untuk tipe partner ini.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection