@extends('layouts.master')
@section('title', 'Edit Akun User')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-info border-bottom pb-3 mb-4">Edit Data Akun User</h5>
        
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('user._form')

            <div class="d-flex justify-content-end gap-2 mt-2 pt-3 border-top">
                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                <button type="submit" class="btn btn-info text-white px-4">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection