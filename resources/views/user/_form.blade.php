<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Alamat Email <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-envelope text-muted"></i></span>
            <input type="email" name="email" class="form-control border-start-0 py-2 @error('email') is-invalid @enderror" value="{{ old('email', $user->email ?? '') }}" placeholder="Contoh: staf@resto.com" required>
        </div>
        @error('email') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Password @empty($user) <span class="text-danger">*</span> @endempty
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-lock-alt text-muted"></i></span>
            <input type="password" name="password" class="form-control border-start-0 py-2 @error('password') is-invalid @enderror" placeholder="{{ isset($user) ? 'Kosongkan jika tidak ingin mengubah password' : 'Minimal 6 karakter' }}" {{ isset($user) ? '' : 'required' }}>
        </div>
        @error('password') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Tempat Usaha (Partner) <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-store-alt text-muted"></i></span>
            <select name="partnerID" class="form-select border-start-0 py-2 @error('partnerID') is-invalid @enderror" required>
                <option value="">-- Pilih Partner Usaha --</option>
                @foreach($partners as $p)
                    <option value="{{ $p->id }}" {{ old('partnerID', $user->partnerID ?? '') == $p->id ? 'selected' : '' }}>
                        {{ $p->namausaha }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('partnerID') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-bold text-dark text-uppercase" style="font-size: 0.8rem; letter-spacing: 1px;">
            Hak Akses (Role) <span class="text-danger">*</span>
        </label>
        <div class="input-group input-group-merge shadow-sm rounded-3">
            <span class="input-group-text border-end-0 bg-transparent"><i class="bx bx-shield text-muted"></i></span>
            <select name="role" class="form-select border-start-0 py-2 @error('role') is-invalid @enderror" required>
                <option value="staff" {{ old('role', $user->role ?? '') == 'staff' ? 'selected' : '' }}>Staff</option>
                <option value="partner" {{ old('role', $user->role ?? '') == 'partner' ? 'selected' : '' }}>Partner</option>
                <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        @error('role') <small class="text-danger mt-1 d-block"><i class="bx bx-error-circle"></i> {{ $message }}</small> @enderror
    </div>
</div>