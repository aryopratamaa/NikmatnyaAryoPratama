@extends('layouts.master')
@section('title', 'Pengaturan Sistem')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden">
            <h5 class="card-header bg-white border-bottom pt-4 pb-3 px-4 fw-bold text-dark d-flex align-items-center">
                <i class="bx bx-cog fs-4 me-2"></i> Pengaturan Profil & Sistem
            </h5>
            
            <div class="card-body p-4 p-md-5">
                <div class="d-flex align-items-start align-items-sm-center gap-4 mb-4 pb-4 border-bottom">
                    <img src="https://www.smknegeri1airputih.sch.id/uploads/guru/a91ac047688f841e2887a75ae508007d.jpg" alt="user-avatar" class="d-block rounded-3 shadow-sm" height="100" width="100" style="object-fit: cover;">
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-2 rounded-pill fw-semibold shadow-sm" tabindex="0">
                            <span class="d-none d-sm-block"><i class="bx bx-upload me-2"></i>Unggah Foto Baru</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg">
                        </label>
                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-2 rounded-pill fw-semibold">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                        <p class="text-muted mb-0 mt-1" style="font-size: 0.85rem;">Format JPG atau PNG. Maksimal ukuran 800K.</p>
                    </div>
                </div>
                
                <form onsubmit="return false">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Nama Lengkap</label>
                            <div class="input-group input-group-merge shadow-sm rounded-3">
                                <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-user text-muted"></i></span>
                                <input class="form-control border-start-0 py-2" type="text" value="Aryo Pratama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Alamat Email</label>
                            <div class="input-group input-group-merge shadow-sm rounded-3">
                                <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-envelope text-muted"></i></span>
                                <input class="form-control border-start-0 py-2" type="email" value="admin@nikmatrasanyo.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Peran (Role)</label>
                            <div class="input-group input-group-merge shadow-sm rounded-3 bg-light">
                                <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-shield text-muted"></i></span>
                                <input type="text" class="form-control border-start-0 py-2 bg-light text-muted" value="Administrator" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Bahasa Sistem</label>
                            <select class="form-select shadow-sm py-2 rounded-3">
                                <option value="id" selected>Bahasa Indonesia</option>
                                <option value="en">English (US)</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5 pt-3 border-top d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary rounded-pill fw-bold shadow-sm px-5 d-flex align-items-center">
                            <i class="bx bx-save me-2"></i> Simpan Pengaturan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection