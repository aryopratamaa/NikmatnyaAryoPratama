@extends('layouts.master')
@section('title', 'Data User')

@section('content')
<div class="card shadow-sm rounded-3 border-0">
    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
        <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
            <i class="bx bx-group fs-4 me-2 text-dark"></i> Kelola Akun Pengguna
        </h5>
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm fw-medium px-3">
            <i class="bx bx-plus me-1"></i> Tambah Baru
        </a>
    </div>

    <div class="card-body p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <i class="bx bx-check-circle fs-4 me-2"></i>
                <div class="fw-medium">{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                <i class="bx bx-error-circle fs-4 me-2"></i>
                <div class="fw-medium">{{ session('error') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive text-nowrap rounded-2 border">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="5%" class="text-center fw-bold">No</th>
                        <th width="25%" class="fw-bold">Email</th>
                        <th width="30%" class="fw-bold">Bekerja di (Partner)</th>
                        <th width="15%" class="text-center fw-bold">Role</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($users as $index => $u)
                    <tr>
                        <td class="text-center fw-medium text-muted">{{ $users->firstItem() + $index }}</td>
                        <td class="fw-semibold text-dark">
                            <div class="d-flex align-items-center">
                                <i class="bx bx-envelope text-muted me-2"></i> {{ $u->email }}
                            </div>
                        </td>
                        <td class="text-muted">{{ $u->partner->namausaha ?? 'Tidak Diketahui' }}</td>
                        <td class="text-center">
                            @if($u->role == 'admin') 
                                <span class="badge bg-label-danger px-3 py-2 fw-semibold"><i class="bx bx-shield-quarter me-1"></i> Admin</span>
                            @elseif($u->role == 'partner') 
                                <span class="badge bg-label-primary px-3 py-2 fw-semibold"><i class="bx bx-store me-1"></i> Partner</span>
                            @else 
                                <span class="badge bg-label-secondary px-3 py-2 fw-semibold"><i class="bx bx-user me-1"></i> Staff</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('user.show', $u->id) }}" class="btn btn-sm btn-info text-white rounded-2 shadow-sm d-flex align-items-center px-3">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-warning text-white rounded-2 shadow-sm d-flex align-items-center px-3">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                <form action="{{ route('user.destroy', $u->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus akun ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger rounded-2 shadow-sm d-flex align-items-center px-3">
                                        <i class="bx bx-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <i class="bx bx-user-x text-muted mb-2" style="font-size: 3rem;"></i>
                            <h6 class="text-muted fw-semibold mb-0">Belum ada data User.</h6>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($users->hasPages())
        <div class="mt-4 d-flex justify-content-end">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</div>
@endsection