<div class="mb-3">
    <label class="form-label fw-semibold">Tipe Partner <span class="text-danger">*</span></label>
    <input type="text" name="tipe" class="form-control @error('tipe') is-invalid @enderror" value="{{ old('tipe', $partnertype->tipe ?? '') }}" placeholder="Contoh: Resto, Warung, Kafe" required>
    @error('tipe') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="form-label fw-semibold">Deskripsi</label>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Contoh: Usaha makanan berat di dalam Mall">{{ old('deskripsi', $partnertype->deskripsi ?? '') }}</textarea>
    @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
</div>