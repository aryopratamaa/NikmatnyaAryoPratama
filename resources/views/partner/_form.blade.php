<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Nama Usaha <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bx-store"></i></span>
            <input type="text" name="namausaha" class="form-control @error('namausaha') is-invalid @enderror" value="{{ old('namausaha', $partner->namausaha ?? '') }}" placeholder="Contoh: Restaurant Sederhana" required>
        </div>
        @error('namausaha') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Tipe Partner <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bx-category"></i></span>
            <select name="typeID" class="form-select @error('typeID') is-invalid @enderror" required>
                <option value="">-- Pilih Tipe Usaha --</option>
                @foreach($partnertypes as $pt)
                    <option value="{{ $pt->id }}" {{ old('typeID', $partner->typeID ?? '') == $pt->id ? 'selected' : '' }}>
                        {{ $pt->tipe }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('typeID') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-bold text-dark">Alamat Lengkap <span class="text-danger">*</span></label>
    <div class="input-group">
        <span class="input-group-text"><i class="bx bx-map"></i></span>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $partner->alamat ?? '') }}" placeholder="Contoh: Jl. Sudirman No. 123, Jakarta" required>
    </div>
    @error('alamat') 
        <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
    @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-bold text-dark">Deskripsi / Ruang Lingkup</label>
    <div class="input-group">
        <span class="input-group-text align-items-start pt-2"><i class="bx bx-info-circle"></i></span>
        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4" placeholder="Contoh: Kuliner lokal dengan spesialisasi masakan padang asli...">{{ old('deskripsi', $partner->deskripsi ?? '') }}</textarea>
    </div>
    @error('deskripsi') 
        <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
    @enderror
</div>