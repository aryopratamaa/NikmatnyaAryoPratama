<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Nama Usaha <span class="text-danger">*</span></label>
        <input type="text" name="namausaha" class="form-control @error('namausaha') is-invalid @enderror" value="{{ old('namausaha', $partner->namausaha ?? '') }}" placeholder="Contoh: Restaurant Sederhana" required>
        @error('namausaha') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Tipe Partner <span class="text-danger">*</span></label>
        <select name="typeID" class="form-select @error('typeID') is-invalid @enderror" required>
            <option value="">-- Pilih Tipe Usaha --</option>
            @foreach($partnertypes as $pt)
                <option value="{{ $pt->id }}" {{ old('typeID', $partner->typeID ?? '') == $pt->id ? 'selected' : '' }}>
                    {{ $pt->tipe }}
                </option>
            @endforeach
        </select>
        @error('typeID') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-semibold">Alamat Lengkap <span class="text-danger">*</span></label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $partner->alamat ?? '') }}" placeholder="Contoh: Jl. Sudirman No. 123, Jakarta" required>
    @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="form-label fw-semibold">Deskripsi / Ruang Lingkup</label>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Contoh: Kuliner lokal, masakan padang asli">{{ old('deskripsi', $partner->deskripsi ?? '') }}</textarea>
    @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
</div>