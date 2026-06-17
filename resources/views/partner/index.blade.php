@extends('layouts.master')
@section('title', 'Data Partner Usaha')

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
            <h5 class="fw-bold text-primary mb-0">Kelola Data Partners</h5>
            <a href="{{ route('partner.create') }}" class="btn btn-primary btn-sm px-3">+ Tambah Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Nama Usaha</th>
                        <th width="15%">Tipe Partner</th>
                        <th width="30%">Alamat</th>
                        <th width="25%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partners as $index => $p)
                    <tr>
                        <td>{{ $partners->firstItem() + $index }}</td>
                        <td class="fw-bold text-dark">{{ $p->namausaha }}</td>
                        <td><span class="badge bg-primary-subtle text-primary">{{ $p->partnertype->tipe ?? '-' }}</span></td>
                        <td>{{ \Illuminate\Support\Str::limit($p->alamat, 40) }}</td>
                        <td class="text-center">
                            <a href="{{ route('partner.show', $p->id) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                            <a href="{{ route('partner.edit', $p->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                            
                            <form action="{{ route('partner.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus partner ini beserta seluruh data terkait?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">Belum ada data Partner.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $partners->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection