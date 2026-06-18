@extends('layouts.master')
@section('title', 'Pilih Laporan')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 mt-4">
        <div class="card shadow-sm rounded-3 border-0">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h5 class="card-title fw-bold text-primary mb-0 d-flex align-items-center">
                    <i class="bx bx-printer fs-4 me-2"></i> Cetak Laporan Sistem
                </h5>
            </div>
            
            <div class="card-body p-4">
                <form action="{{ route('report.preview') }}" method="GET" target="_blank">
                    <div class="mb-4">
                        <label class="form-label fw-bold text-dark">Silakan Pilih Jenis Laporan <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bx bx-list-ul"></i></span>
                            <select name="jenis_laporan" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Data yang Ingin Dicetak --</option>
                                <option value="partnertype">1. Laporan Data Tipe Partner</option>
                                <option value="partner">2. Laporan Data Partners & Akun User</option>
                                <option value="promo">3. Laporan Data Promo Usaha</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end pt-3 border-top mt-4">
                        <button type="submit" class="btn btn-primary fw-medium px-4 d-flex align-items-center w-100 justify-content-center rounded-2 shadow-sm py-2">
                            <i class="bx bx-printer me-2 fs-5"></i> Cetak PDF Laporan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection