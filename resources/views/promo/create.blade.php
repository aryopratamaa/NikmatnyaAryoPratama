@extends('layouts.master')
@section('title', 'Tambah Promo')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h5 class="card-title fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-purchase-tag-alt fs-4 me-2 text-warning"></i> Tambah Data Promo Baru
                </h5>
            </div>
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('promo.store') }}" method="POST">
                    @csrf
                    
                    @include('promo._form')

                    <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('promo.index') }}" class="btn btn-secondary fw-medium px-4">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary fw-medium px-4 d-flex align-items-center">
                            <i class="bx bx-save me-2"></i> Simpan Promo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection