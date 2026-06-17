@extends('layouts.master')
@section('title', 'Tambah Tipe Partner')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-primary border-bottom pb-3 mb-4">Tambah Tipe Partner Baru</h5>
        
        <form action="{{ route('partnertype.store') }}" method="POST">
            @csrf
            @include('partnertype._form')

            <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                <a href="{{ route('partnertype.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection