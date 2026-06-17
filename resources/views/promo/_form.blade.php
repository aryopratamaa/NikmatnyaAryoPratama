<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Tempat Usaha (Partner) <span class="text-danger">*</span></label>
        <select name="PartnersID" class="form-select @error('PartnersID') is-invalid @enderror" required>
            <option value="">-- Pilih Partner --</option>
            @foreach($partners as $p)
                <option value="{{ $p->id }}" {{ old('PartnersID', $promo->PartnersID ?? '') == $p->id ? 'selected' : '' }}>
                    {{ $p->namausaha }}
                </option>
            @endforeach
        </select>
        @error('PartnersID') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Besaran Diskon (%) <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" name="persen" class="form-control @error('persen') is-invalid @enderror" value="{{ old('persen', $promo->persen ?? '') }}" placeholder="Contoh: 20" min="1" max="100" required>
            <span class="input-group-text">%</span>
        </div>
        @error('persen') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-semibold">Tanggal Mulai <span class="text-danger">*</span></label>
        <input type="date" name="mulai_tgl" class="form-control @error('mulai_tgl') is-invalid @enderror" value="{{ old('mulai_tgl', $promo->mulai_tgl ?? '') }}" required>
        @error('mulai_tgl') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-semibold">Tanggal Berakhir <span class="text-danger">*</span></label>
        <input type="date" name="hingga_tgl" class="form-control @error('hingga_tgl') is-invalid @enderror" value="{{ old('hingga_tgl', $promo->hingga_tgl ?? '') }}" required>
        @error('hingga_tgl') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>