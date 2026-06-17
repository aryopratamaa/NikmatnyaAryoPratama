<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Nama Usaha <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-store text-muted"></i></span>
            <input type="text" name="namausaha" class="form-control border-start-0 py-2 @error('namausaha') is-invalid @enderror" value="{{ old('namausaha', $partner->namausaha ?? '') }}" placeholder="Contoh: Restaurant Sederhana" required>
        </div>
        @error('namausaha') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Tipe Partner <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-category text-muted"></i></span>
            <select name="typeID" class="form-select border-start-0 py-2 @error('typeID') is-invalid @enderror" required>
                <option value="">-- Pilih Tipe Usaha --</option>
                @foreach($partnertypes as $pt)
                    <option value="{{ $pt->id }}" {{ old('typeID', $partner->typeID ?? '') == $pt->id ? 'selected' : '' }}>
                        {{ $pt->tipe }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('typeID') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
        Alamat Lengkap <span class="text-danger">*</span>
    </label>
    <div class="input-group input-group-merge shadow-sm rounded-3">
        <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-map text-muted"></i></span>
        <input type="text" name="alamat" class="form-control border-start-0 py-2 @error('alamat') is-invalid @enderror" value="{{ old('alamat', $partner->alamat ?? '') }}" placeholder="Contoh: Jl. Sudirman No. 123, Jakarta" required>
    </div>
    @error('alamat') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
        Deskripsi / Ruang Lingkup
    </label>
    <div class="input-group input-group-merge shadow-sm rounded-3">
        <span class="input-group-text border-end-0 bg-transparent align-items-start pt-2"><i class="bx bx-info-circle text-muted"></i></span>
        <textarea name="deskripsi" class="form-control border-start-0 py-2 @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Contoh: Kuliner lokal, masakan padang asli">{{ old('deskripsi', $partner->deskripsi ?? '') }}</textarea>
    </div>
    @error('deskripsi') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
</div>