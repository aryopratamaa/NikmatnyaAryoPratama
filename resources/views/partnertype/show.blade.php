@extends('layouts.master')
@section('title', 'Detail Tipe Partner')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-9">
        
        <div class="card shadow-sm border-0 rounded-4 mt-2">
            <div class="card-body p-4 p-md-5">
                
                <div class="row align-items-center mb-5 pb-4 border-bottom">
                    <div class="col-auto">
                        <div class="bg-label-primary text-primary rounded-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 85px; height: 85px;">
                            <i class="bx bx-purchase-tag-alt" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center gap-3 mb-1">
                            <h2 class="fw-bolder text-dark mb-0">{{ $partnertype->tipe }}</h2>
                            <span class="badge bg-label-secondary rounded-pill px-3 py-2 fw-semibold shadow-sm">
                                ID: #{{ str_pad($partnertype->id, 4, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>
                        <span class="text-muted fs-6 d-flex align-items-center mt-2">
                            <i class="bx bx-check-shield text-success me-2 fs-5"></i> Data Master Tipe Partner Terverifikasi
                        </span>
                    </div>
                    <div class="col-12 col-md-auto mt-4 mt-md-0 text-md-end">
                        <a href="{{ route('partnertype.edit', $partnertype->id) }}" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center">
                            <i class="bx bx-edit-alt me-2 fs-5"></i> Edit Data
                        </a>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12">
                        <h6 class="text-muted fw-bold text-uppercase mb-3 d-flex align-items-center" style="letter-spacing: 1px;">
                            <i class="bx bx-align-left me-2 fs-5 text-primary"></i> Deskripsi Operasional
                        </h6>
                        <div class="p-4 bg-label-secondary rounded-4 border-0">
                            <p class="text-dark mb-0 fs-5" style="line-height: 1.8;">
                                {{ $partnertype->deskripsi ?? 'Tidak ada deskripsi operasional yang ditambahkan untuk tipe partner ini.' }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="card-footer bg-white border-top-0 pt-0 pb-4 px-4 px-md-5 text-start">
                <a href="{{ route('partnertype.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center transition-all">
                    <i class="bx bx-left-arrow-alt me-2 fs-5"></i> Kembali ke Daftar
                </a>
            </div>
        </div>

    </div>
</div>
@endsection