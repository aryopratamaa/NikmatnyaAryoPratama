@extends('layouts.master')
@section('title', 'Edit Partner Usaha')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4">
        <h5 class="card-title fw-bold text-info mb-0 d-flex align-items-center">
            <i class="bx bx-edit fs-4 me-2"></i> Edit Data Partner Usaha
        </h5>
    </div>
    
    <div class="card-body p-4 p-md-5">
        <form action="{{ route('partner.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            @include('partner._form')

            <div class="d-flex justify-content-end gap-3 mt-5 pt-3 border-top">
                <a href="{{ route('partner.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center">
                    <i class="bx bx-arrow-back me-2"></i> Batal
                </a>
                <button type="submit" class="btn btn-info text-white rounded-pill px-5 fw-bold shadow-sm d-flex align-items-center">
                    <i class="bx bx-save me-2"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection