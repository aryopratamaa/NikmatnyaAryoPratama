@extends('layouts.master')
@section('title', 'Detail Partner Usaha')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-secondary border-bottom pb-3 mb-4">Rincian Data Partner Usaha</h5>

        <table class="table table-borderless">
            <tr>
                <th width="25%" class="text-muted">Nama Usaha</th>
                <td class="fw-bold fs-5">{{ $partner->namausaha }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Tipe Partner</th>
                <td><span class="badge bg-primary px-3 py-2">{{ $partner->partnertype->tipe ?? 'Tipe Telah Dihapus' }}</span></td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Alamat Lengkap</th>
                <td>{{ $partner->alamat }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Deskripsi / Lingkup Usaha</th>
                <td>{{ $partner->deskripsi ?? 'Tidak ada deskripsi.' }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Tanggal Bergabung</th>
                <td>{{ $partner->created_at ? $partner->created_at->format('d F Y') : '-' }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-end mt-4 pt-3 border-top">
            <a href="{{ route('partner.index') }}" class="btn btn-outline-secondary px-4">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection