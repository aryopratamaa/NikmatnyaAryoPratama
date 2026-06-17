@extends('layouts.master')
@section('title', 'Data Partner Usaha')

@section('content')
<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                <i class="bx bx-store-alt fs-4"></i>
            </div>
            <h5 class="fw-bold text-success mb-0">Kelola Data Partners</h5>
        </div>
        <a href="{{ route('partner.create') }}" class="btn btn-success rounded-pill shadow-sm px-4 fw-semibold">
            <i class="bx bx-plus me-1"></i> Tambah Partner
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
                        <th width="25%" class="fw-bold">Nama Usaha</th>
                        <th width="15%" class="fw-bold text-center">Tipe Partner</th>
                        <th width="30%" class="fw-bold">Alamat</th>
                        <th width="25%" class="text-center fw-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partners as $index => $p)
                    <tr>
                        <td class="text-center text-muted">{{ $partners->firstItem() + $index }}</td>
                        <td class="fw-bold text-dark">{{ $p->namausaha }}</td>
                        <td class="text-center">
                            <span class="badge bg-label-success px-3 py-2 fw-semibold">{{ $p->partnertype->tipe ?? '-' }}</span>
                        </td>
                        <td class="text-muted text-wrap" style="max-width: 250px;">
                            {{ \Illuminate\Support\Str::limit($p->alamat, 40) }}
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('partner.show', $p->id) }}" class="btn btn-sm btn-outline-secondary rounded-pill d-flex align-items-center">
                                    <i class="bx bx-show me-1"></i> Detail
                                </a>
                                <a href="{{ route('partner.edit', $p->id) }}" class="btn btn-sm btn-outline-info rounded-pill d-flex align-items-center">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>
                                
                                <form action="{{ route('partner.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Menghapus partner ini akan menghapus semua User & Promo yang terkait. Yakin?');">
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
                                <i class="bx bx-store text-muted mb-2" style="font-size: 3rem;"></i>
                                <h6 class="text-muted fw-semibold mb-0">Belum ada data Partner Usaha.</h6>
                                <small class="text-muted">Klik "Tambah Partner" untuk mendaftarkan usaha baru.</small>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 d-flex justify-content-end">
            {{ $partners->links('pagination::bootstrap-5') }}
        </div>

    </div>
</div>
@endsection