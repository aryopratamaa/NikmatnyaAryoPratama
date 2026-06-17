<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Tempat Usaha (Partner) <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-store-alt text-muted"></i></span>
            <select name="partnerID" class="form-select border-start-0 py-2 @error('partnerID') is-invalid @enderror" required>
                <option value="">-- Pilih Partner --</option>
                @foreach($partners as $p)
                    <option value="{{ $p->id }}" {{ old('partnerID', $promo->partnerID ?? '') == $p->id ? 'selected' : '' }}>
                        {{ $p->namausaha }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('partnerID') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Besaran Diskon (%) <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bxs-discount text-muted"></i></span>
            <input type="number" name="persen" class="form-control border-start-0 py-2 @error('persen') is-invalid @enderror" value="{{ old('persen', $promo->persen ?? '') }}" placeholder="Contoh: 20" min="1" max="100" required>
            <span class="input-group-text border-start-0 fw-bold">%</span>
        </div>
        @error('persen') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Tanggal Mulai <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-calendar-check text-muted"></i></span>
            <input type="date" name="mulai_tgl" class="form-control border-start-0 py-2 @error('mulai_tgl') is-invalid @enderror" value="{{ old('mulai_tgl', $promo->mulai_tgl ?? '') }}" required>
        </div>
        @error('mulai_tgl') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Tanggal Berakhir <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-calendar-x text-muted"></i></span>
            <input type="date" name="hingga_tgl" class="form-control border-start-0 py-2 @error('hingga_tgl') is-invalid @enderror" value="{{ old('hingga_tgl', $promo->hingga_tgl ?? '') }}" required>
        </div>
        @error('hingga_tgl') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>
</div>