@extends('layouts.master')
@section('title', 'Pilih Laporan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mt-4">
            <div class="card-header bg-white border-bottom pt-4 pb-3 px-4 d-flex align-items-center">
                <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                    <i class="bx bx-printer fs-4"></i>
                </div>
                <h5 class="fw-bold text-dark mb-0">Cetak Laporan Sistem</h5>
            </div>
            
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('report.preview') }}" method="GET" target="_blank">
                    <div class="mb-4">
                        <label class="form-label text-uppercase fw-bold text-dark mb-2" style="letter-spacing: 1px; font-size: 0.8rem;">
                            Silakan Pilih Jenis Laporan <span class="text-danger">*</span>
                        </label>
                        <div class="input-group input-group-merge shadow-sm rounded-3">
                            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-list-ul text-muted"></i></span>
                            <select name="jenis_laporan" class="form-select border-start-0 py-3" required>
                                <option value="" disabled selected>-- Pilih Data yang Ingin Dicetak --</option>
                                <option value="partnertype">1. Laporan Data Tipe Partner</option>
                                <option value="partner">2. Laporan Data Partners & Akun User</option>
                                <option value="promo">3. Laporan Data Promo Usaha</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-5 border-top pt-4">
                        <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold shadow-sm py-2 d-flex align-items-center justify-content-center">
                            <i class="bx bx-printer me-2"></i> Cetak PDF Laporan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection