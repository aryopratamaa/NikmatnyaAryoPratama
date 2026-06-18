@extends('layouts.master')
@section('title', 'Edit Partner Usaha')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title fw-bold text-warning mb-0 d-flex align-items-center">
                    <i class="bx bx-edit-alt fs-4 me-2"></i> Edit Partner Usaha
                </h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('partner.update', $partner->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    @include('partner._form')

                    <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('partner.index') }}" class="btn btn-secondary fw-medium px-4">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-warning text-white fw-medium px-4 d-flex align-items-center">
                            <i class="bx bx-save me-2"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection