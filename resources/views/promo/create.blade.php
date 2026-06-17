@extends('layouts.master')
@section('title', 'Tambah Promo')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4">
        <h5 class="card-title fw-bold text-warning mb-0 d-flex align-items-center">
            <i class="bx bx-purchase-tag-alt fs-4 me-2"></i> Tambah Data Promo Baru
        </h5>
    </div>
    
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('promo.store') }}" method="POST">
            @csrf
            
            @include('promo._form')

            <div class="d-flex justify-content-end gap-3 mt-5 pt-3 border-top">
                <a href="{{ route('promo.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                    <i class="bx bx-arrow-back me-2"></i> Batal
                </a>
                <button type="submit" class="btn btn-warning text-dark rounded-pill px-5 fw-bold shadow-sm d-flex align-items-center">
                    <i class="bx bx-save me-2"></i> Simpan Promo
                </button>
            </div>
        </form>
    </div>
</div>
@endsection