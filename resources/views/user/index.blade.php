@extends('layouts.master')
@section('title', 'Data User')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                <i class="bx bx-group fs-4"></i>
            </div>
            <h5 class="fw-bold text-dark mb-0">Kelola Akun Pengguna</h5>
        </div>
        <a href="{{ route('user.create') }}" class="btn btn-dark rounded-pill shadow-sm px-4 fw-semibold">
            <i class="bx bx-user-plus me-1"></i> Tambah User
        </a>
    </div>

    <div class="card-body p-4">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <i class="bx bx-check-circle fs-4 me-2"></i>
                <div>{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive text-nowrap rounded-3 border">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light border-bottom">
                    <tr>
                        <th width="5%" class="text-center fw-bold">No</th>
                        <th width="25%" class="fw-bold">Email</th>
                        <th width="25%" class="fw-bold">Bekerja di (Partner)</th>
                        <th width="20%" class="fw-bold text-center">Role</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $u)
                    <tr>
                        <td class="text-center text-muted">{{ $users->firstItem() + $index }}</td>
                        <td class="fw-semibold text-dark">
                            <div class="d-flex align-items-center">
                                <i class="bx bx-envelope text-muted me-2"></i> {{ $u->email }}
                            </div>
                        </td>
                        <td class="text-muted">{{ $u->partner->namausaha ?? 'Tidak Diketahui' }}</td>
                        <td class="text-center">
                            @if($u->role == 'admin') 
                                <span class="badge bg-label-danger px-3 py-2"><i class="bx bx-shield-quarter me-1"></i> Admin</span>
                            @elseif($u->role == 'partner') 
                                <span class="badge bg-label-primary px-3 py-2"><i class="bx bx-store me-1"></i> Partner</span>
                            @else 
                                <span class="badge bg-label-secondary px-3 py-2"><i class="bx bx-user me-1"></i> Staff</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('user.show', $u->id) }}" class="btn btn-sm btn-outline-secondary rounded-pill d-flex align-items-center">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-outline-info rounded-pill d-flex align-items-center">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                
                                <form action="{{ route('user.destroy', $u->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus akun ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill d-flex align-items-center">
                                        <i class="bx bx-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="d-flex flex-column align-items-center">
                                <i class="bx bx-user-x text-muted mb-2" style="font-size: 3rem;"></i>
                                <h6 class="text-muted fw-semibold mb-0">Belum ada data User.</h6>
                                <small class="text-muted">Klik "Tambah User" untuk membuat akun baru.</small>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 d-flex justify-content-end">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection