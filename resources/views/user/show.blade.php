@extends('layouts.master')
@section('title', 'Detail Akun User')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="bg-dark p-5 d-flex align-items-center justify-content-center flex-column">
        <div class="bg-white text-dark rounded-circle d-flex align-items-center justify-content-center shadow-sm mb-3" style="width: 80px; height: 80px;">
            <i class="bx bx-user" style="font-size: 3rem;"></i>
        </div>
        <h4 class="fw-bold text-white mb-0">{{ $user->email }}</h4>
        <span class="badge bg-secondary mt-2 text-uppercase px-3"><i class="bx bx-shield me-1"></i> {{ $user->role }}</span>
    </div>

    <div class="card-body p-4 p-md-5">
        <h6 class="text-muted fw-bold text-uppercase mb-4 pb-2 border-bottom" style="letter-spacing: 1px;">Rincian Data Pengguna</h6>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-envelope me-2"></i> Alamat Email</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0 fs-5">{{ $user->email }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-shield me-2"></i> Role (Hak Akses)</p>
            </div>
            <div class="col-md-8">
                <span class="badge bg-label-dark px-3 py-2 fw-semibold fs-6 text-uppercase">{{ $user->role }}</span>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-store-alt me-2"></i> Tempat Bekerja</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ $user->partner->namausaha ?? 'Data Usaha telah dihapus' }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <p class="text-muted fw-semibold mb-1 d-flex align-items-center"><i class="bx bx-calendar me-2"></i> Akun Dibuat Pada</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold text-dark mb-0">{{ $user->created_at ? $user->created_at->format('d F Y - H:i') : '-' }}</p>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-5 pt-4 border-top">
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                <i class="bx bx-arrow-back me-2"></i> Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
@endsection