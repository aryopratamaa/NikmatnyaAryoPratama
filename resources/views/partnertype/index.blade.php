@extends('layouts.master')
@section('title', 'Data Tipe Partner')

@section('content')
<div class="card shadow-sm rounded-3">
    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-bold text-primary d-flex align-items-center">
            <i class="bx bx-list-ul fs-4 me-2"></i> Kelola Tipe Partner
        </h5>
        <a href="{{ route('partnertype.create') }}" class="btn btn-primary btn-sm fw-medium px-3">
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
                        <th width="25%" class="fw-bold">Tipe Partner</th>
                        <th width="45%" class="fw-bold">Deskripsi</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($partnertypes as $index => $pt)
                    <tr>
                        <td class="text-center fw-medium text-muted">{{ $partnertypes->firstItem() + $index }}</td>
                        <td>
                            <span class="badge bg-label-primary px-3 py-2 fw-semibold">{{ $pt->tipe }}</span>
                        </td>
                        <td class="text-wrap" style="max-width: 300px; line-height: 1.5;">
                            {{ \Illuminate\Support\Str::limit($pt->deskripsi ?? '-', 60) }}
                        </td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('partnertype.show', $pt->id) }}" class="btn btn-sm btn-info d-flex align-items-center">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('partnertype.edit', $pt->id) }}" class="btn btn-sm btn-warning d-flex align-items-center text-white">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                <form action="{{ route('partnertype.destroy', $pt->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center">
                                        <i class="bx bx-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <i class="bx bx-folder-open text-muted mb-2" style="font-size: 3rem;"></i>
                            <h6 class="text-muted fw-semibold mb-0">Belum ada data Tipe Partner.</h6>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($partnertypes->hasPages())
        <div class="mt-4 d-flex justify-content-end">
            {{ $partnertypes->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</div>
@endsection