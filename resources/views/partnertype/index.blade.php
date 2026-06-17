@extends('layouts.master')
@section('title', 'Data Tipe Partner')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                <i class="bx bx-layer fs-4"></i>
            </div>
            <h5 class="fw-bold text-primary mb-0">Kelola Tipe Partner</h5>
        </div>
        <a href="{{ route('partnertype.create') }}" class="btn btn-primary rounded-pill shadow-sm px-4 fw-semibold">
            <i class="bx bx-plus me-1"></i> Tambah Baru
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
                        <th width="25%" class="fw-bold">Tipe Partner</th>
                        <th width="45%" class="fw-bold">Deskripsi</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partnertypes as $index => $pt)
                    <tr>
                        <td class="text-center text-muted">{{ $partnertypes->firstItem() + $index }}</td>
                        <td>
                            <span class="badge bg-label-primary px-3 py-2 fw-bold fs-6">{{ $pt->tipe }}</span>
                        </td>
                        <td class="text-muted text-wrap" style="max-width: 300px;">
                            {{ \Illuminate\Support\Str::limit($pt->deskripsi ?? 'Tidak ada deskripsi yang ditambahkan.', 60) }}
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('partnertype.show', $pt->id) }}" class="btn btn-sm btn-outline-secondary rounded-pill d-flex align-items-center">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('partnertype.edit', $pt->id) }}" class="btn btn-sm btn-outline-info rounded-pill d-flex align-items-center">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                
                                <form action="{{ route('partnertype.destroy', $pt->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tipe partner ini?');">
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
                        <td colspan="4" class="text-center py-5">
                            <div class="d-flex flex-column align-items-center">
                                <i class="bx bx-folder-open text-muted mb-2" style="font-size: 3rem;"></i>
                                <h6 class="text-muted fw-semibold mb-0">Belum ada data Tipe Partner.</h6>
                                <small class="text-muted">Klik "Tambah Baru" untuk mulai menambahkan data.</small>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 d-flex justify-content-end">
            {{ $partnertypes->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection