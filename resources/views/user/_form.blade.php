<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Alamat Email <span class="text-danger">*</span></label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email ?? '') }}" placeholder="Contoh: staf@resto.com" required>
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label fw-semibold">Password @empty($user) <span class="text-danger">*</span> @endempty</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ isset($user) ? 'Kosongkan jika tidak ingin mengubah password' : 'Minimal 6 karakter' }}" {{ isset($user) ? '' : 'required' }}>
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-semibold">Tempat Usaha (Partner) <span class="text-danger">*</span></label>
        <select name="partnerID" class="form-select @error('partnerID') is-invalid @enderror" required>
            <option value="">-- Pilih Partner Usaha --</option>
            @foreach($partners as $p)
                <option value="{{ $p->id }}" {{ old('partnerID', $user->partnerID ?? '') == $p->id ? 'selected' : '' }}>
                    {{ $p->namausaha }}
                </option>
            @endforeach
        </select>
        @error('partnerID') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fw-semibold">Hak Akses (Role) <span class="text-danger">*</span></label>
        <select name="role" class="form-select @error('role') is-invalid @enderror" required>
            <option value="staff" {{ old('role', $user->role ?? '') == 'staff' ? 'selected' : '' }}>Staff</option>
            <option value="partner" {{ old('role', $user->role ?? '') == 'partner' ? 'selected' : '' }}>Partner</option>
            <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
        @error('role') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>