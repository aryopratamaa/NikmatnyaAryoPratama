@extends('layouts.master')
@section('title', 'Data User')

@section('content')
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body p-4">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
            <h5 class="fw-bold text-primary mb-0">Kelola Akun Pengguna</h5>
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm px-3">+ Tambah User</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Email</th>
                        <th width="25%">Bekerja di (Partner)</th>
                        <th width="20%">Role</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $u)
                    <tr>
                        <td>{{ $users->firstItem() + $index }}</td>
                        <td class="fw-semibold text-dark">{{ $u->email }}</td>
                        <td>{{ $u->partner->namausaha ?? 'Tidak Diketahui' }}</td>
                        <td>
                            @if($u->role == 'admin') <span class="badge bg-danger">Admin</span>
                            @elseif($u->role == 'partner') <span class="badge bg-primary">Partner</span>
                            @else <span class="badge bg-secondary">Staff</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('user.show', $u->id) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                            <a href="{{ route('user.edit', $u->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                            
                            <form action="{{ route('user.destroy', $u->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus akun ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada data User.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection