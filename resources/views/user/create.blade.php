@extends('layouts.master')
@section('title', 'Tambah Akun User')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h5 class="card-title fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-user-plus fs-4 me-2"></i> Buat Akun User Baru
                </h5>
            </div>
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    
                    @include('user._form')

                    <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                        <a href="{{ route('user.index') }}" class="btn btn-secondary fw-medium px-4">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary fw-medium px-4 d-flex align-items-center">
                            <i class="bx bx-save me-2"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection