<div class="mb-4">
    <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
        Tipe Partner <span class="text-danger">*</span>
    </label>
    <div class="input-group input-group-merge shadow-sm rounded-3">
        <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-tag text-muted"></i></span>
        <input type="text" name="tipe" class="form-control border-start-0 py-2 @error('tipe') is-invalid @enderror" value="{{ old('tipe', $partnertype->tipe ?? '') }}" placeholder="Contoh: Resto, Warung, Kafe" required>
    </div>
    @error('tipe') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
        Deskripsi
    </label>
    <div class="input-group input-group-merge shadow-sm rounded-3">
        <span class="input-group-text border-end-0 bg-transparent align-items-start pt-2"><i class="bx bx-align-left text-muted"></i></span>
        <textarea name="deskripsi" class="form-control border-start-0 py-2 @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Contoh: Usaha makanan berat di dalam Mall...">{{ old('deskripsi', $partnertype->deskripsi ?? '') }}</textarea>
    </div>
    @error('deskripsi') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
</div>