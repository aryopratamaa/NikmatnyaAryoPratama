@extends('layouts.master')
@section('title', 'Edit Partner Usaha')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-info border-bottom pb-3 mb-4">Edit Data Partner Usaha</h5>
        
        <form action="{{ route('partner.update', $partner->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('partner._form')

            <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                <a href="{{ route('partner.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-info text-white px-4">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection