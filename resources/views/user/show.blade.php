@extends('layouts.master')
@section('title', 'Detail Akun User')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
                <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
                    <i class="bx bx-detail fs-4 text-dark me-2"></i> Rincian Akun Pengguna
                </h5>
                <div class="d-flex gap-2">
                    <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm fw-medium px-3">
                        <i class="bx bx-left-arrow-alt me-1"></i> Kembali
                    </a>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm text-white fw-medium px-3">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>
                </div>
            </div>

            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-center mb-5">
                    <div class="bg-label-dark rounded-3 d-flex align-items-center justify-content-center me-4" style="width: 70px; height: 70px;">
                        <i class="bx bx-user fs-2 text-dark"></i>
                    </div>
                    <div>
                        <h3 class="fw-bolder text-dark mb-1">{{ $user->email }}</h3>
                        <span class="text-muted" style="font-size: 0.8rem;">Sistem ID: #{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>

                <div class="row mb-4 pb-2">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Role / Hak Akses</label>
                        <div>
                            @if($user->role == 'admin') 
                                <span class="badge bg-label-danger px-3 py-2 fw-semibold fs-6"><i class="bx bx-shield-quarter me-1"></i> Admin</span>
                            @elseif($user->role == 'partner') 
                                <span class="badge bg-label-primary px-3 py-2 fw-semibold fs-6"><i class="bx bx-store me-1"></i> Partner</span>
                            @else 
                                <span class="badge bg-label-secondary px-3 py-2 fw-semibold fs-6"><i class="bx bx-user me-1"></i> Staff</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tanggal Dibuat</label>
                        <p class="text-dark fw-medium mb-0 fs-6 d-flex align-items-center">
                            <i class="bx bx-calendar me-2 text-muted fs-5"></i> {{ $user->created_at ? $user->created_at->format('d F Y - H:i') : '-' }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="text-muted fw-bold text-uppercase mb-2" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tempat Bekerja (Partner)</label>
                        <div class="d-flex align-items-start">
                            <i class="bx bx-store-alt text-dark fs-5 me-2 mt-1"></i>
                            <p class="text-dark fw-medium mb-0 fs-6" style="line-height: 1.6;">{{ $user->partner->namausaha ?? 'Data Usaha telah dihapus atau tidak tersedia' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection