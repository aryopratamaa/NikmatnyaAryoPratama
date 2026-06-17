@extends('layouts.master')
@section('title', 'Detail Promo')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-secondary border-bottom pb-3 mb-4">Rincian Data Promo</h5>

        <table class="table table-borderless">
            <tr>
                <th width="25%" class="text-muted">Partner Usaha</th>
                <td class="fw-bold fs-5">{{ $promo->partner->namausaha ?? 'Usaha telah dihapus' }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Besaran Diskon</th>
                <td><span class="badge bg-success px-3 py-2 fs-6">{{ $promo->persen }}% OFF</span></td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Tanggal Mulai</th>
                <td>{{ \Carbon\Carbon::parse($promo->mulai_tgl)->format('d F Y') }}</td>
            </tr>
            <tr class="border-top">
                <th class="text-muted">Tanggal Berakhir</th>
                <td>{{ \Carbon\Carbon::parse($promo->hingga_tgl)->format('d F Y') }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-end mt-4 pt-3 border-top">
            <a href="{{ route('promo.index') }}" class="btn btn-outline-secondary px-4">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection