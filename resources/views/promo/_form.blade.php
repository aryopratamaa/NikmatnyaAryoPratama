<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Tempat Usaha (Partner) <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bx-store-alt"></i></span>
            <select name="partnerID" class="form-select @error('partnerID') is-invalid @enderror" required>
                <option value="">-- Pilih Partner --</option>
                @foreach($partners as $p)
                    <option value="{{ $p->id }}" {{ old('partnerID', $promo->partnerID ?? '') == $p->id ? 'selected' : '' }}>
                        {{ $p->namausaha }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('partnerID') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Besaran Diskon (%) <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bxs-discount"></i></span>
            <input type="number" name="persen" class="form-control @error('persen') is-invalid @enderror" value="{{ old('persen', $promo->persen ?? '') }}" placeholder="Contoh: 20" min="1" max="100" required>
            <span class="input-group-text fw-bold">%</span>
        </div>
        @error('persen') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Tanggal Mulai <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bx-calendar-check"></i></span>
            <input type="date" name="mulai_tgl" class="form-control @error('mulai_tgl') is-invalid @enderror" value="{{ old('mulai_tgl', $promo->mulai_tgl ?? '') }}" required>
        </div>
        @error('mulai_tgl') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold text-dark">Tanggal Berakhir <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-text"><i class="bx bx-calendar-x"></i></span>
            <input type="date" name="hingga_tgl" class="form-control @error('hingga_tgl') is-invalid @enderror" value="{{ old('hingga_tgl', $promo->hingga_tgl ?? '') }}" required>
        </div>
        @error('hingga_tgl') 
            <small class="text-danger mt-1 fw-medium">{{ $message }}</small> 
        @enderror
    </div>
</div>