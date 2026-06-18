<div class="mb-3">
    <label class="form-label fw-bold text-dark">Nama Tipe Partner <span class="text-danger">*</span></label>
    <div class="input-group input-group-merge">
        <span class="input-group-text"><i class="bx bx-purchase-tag-alt"></i></span>
        <input type="text" name="tipe" class="form-control @error('tipe') is-invalid @enderror" value="{{ old('tipe', $partnertype->tipe ?? '') }}" placeholder="Contoh: Resto, Warung, Kafe" required>
    </div>
    @error('tipe') 
        <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
    @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-bold text-dark">Deskripsi Operasional</label>
    <div class="input-group input-group-merge">
        <span class="input-group-text align-items-start pt-2"><i class="bx bx-detail"></i></span>
        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Masukkan detail atau keterangan tipe partner...">{{ old('deskripsi', $partnertype->deskripsi ?? '') }}</textarea>
    </div>
    @error('deskripsi') 
        <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
    @enderror
</div>