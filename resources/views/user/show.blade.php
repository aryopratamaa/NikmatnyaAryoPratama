@extends('layouts.master')
@section('title', 'Detail Akun User')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-secondary border-bottom pb-3 mb-4">Rincian Data User</h5>

        <table class="table table-borderless">
            <tr>
                <th width="25%" class="text-muted">Alamat Email</th>
                <td class="fw-bold fs-5">{{ $user->email }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Role (Hak Akses)</th>
                <td><span class="badge bg-dark px-3 py-2 text-uppercase">{{ $user->role }}</span></td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Tempat Bekerja</th>
                <td>{{ $user->partner->namausaha ?? 'Data Usaha telah dihapus' }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Akun Dibuat Pada</th>
                <td>{{ $user->created_at ? $user->created_at->format('d F Y - H:i') : '-' }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-end mt-4 pt-3 border-top">
            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary px-4">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection