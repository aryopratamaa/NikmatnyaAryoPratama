@extends('layouts.master')
@section('title', 'Detail Tipe Partner')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        <h5 class="card-title fw-bold text-secondary border-bottom pb-3 mb-4">Detail Tipe Partner</h5>

        <table class="table table-borderless">
            <tr>
                <th width="25%" class="text-muted">Tipe Usaha</th>
                <td class="fw-bold fs-5">{{ $partnertype->tipe }}</td>
            </tr>
            <tr>
                <th class="text-muted">Deskripsi Detail</th>
                <td>{{ $partnertype->deskripsi ?? 'Tidak ada deskripsi.' }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-end mt-4 pt-3 border-top">
            <a href="{{ route('partnertype.index') }}" class="btn btn-outline-secondary px-4">Kembali</a>
        </div>
    </div>
</div>
@endsection