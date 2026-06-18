@extends('layouts.master')
@section('title', 'Data Promo')

@section('content')
<div class="card shadow-sm rounded-3 border-0">
    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center py-3 px-4">
        <h5 class="mb-0 fw-bold text-dark d-flex align-items-center">
            <i class="bx bx-purchase-tag-alt fs-4 me-2 text-warning"></i> Kelola Data Promo
        </h5>
        <a href="{{ route('promo.create') }}" class="btn btn-primary btn-sm fw-medium px-3">
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
                        <th width="30%" class="fw-bold">Nama Usaha (Partner)</th>
                        <th width="15%" class="text-center fw-bold">Diskon</th>
                        <th width="25%" class="text-center fw-bold">Masa Berlaku</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($promos as $index => $p)
                    <tr>
                        <td class="text-center fw-medium text-muted">{{ $promos->firstItem() + $index }}</td>
                        <td class="fw-bold text-dark">
                            <i class="bx bx-store text-muted me-1"></i> {{ $p->partner->namausaha ?? 'Usaha Dihapus' }}
                        </td>
                        <td class="text-center">
                            <span class="badge bg-label-warning px-3 py-2 fw-semibold text-dark"><i class="bx bxs-discount me-1"></i> {{ $p->persen }}%</span>
                        </td>
                        <td class="text-center text-muted">
                            <div class="d-flex flex-column align-items-center">
                                <small class="fw-medium">{{ \Carbon\Carbon::parse($p->mulai_tgl)->format('d M Y') }}</small>
                                <i class="bx bx-down-arrow-alt text-muted" style="font-size: 0.8rem;"></i>
                                <small class="fw-medium">{{ \Carbon\Carbon::parse($p->hingga_tgl)->format('d M Y') }}</small>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('promo.show', $p->id) }}" class="btn btn-sm btn-info text-white rounded-2 shadow-sm d-flex align-items-center px-3">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('promo.edit', $p->id) }}" class="btn btn-sm btn-warning text-white rounded-2 shadow-sm d-flex align-items-center px-3">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                <form action="{{ route('promo.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus promo ini?');">
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
                            <i class="bx bx-purchase-tag text-muted mb-2" style="font-size: 3rem;"></i>
                            <h6 class="text-muted fw-semibold mb-0">Belum ada data Promo.</h6>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($promos->hasPages())
        <div class="mt-4 d-flex justify-content-end">
            {{ $promos->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</div>
@endsection