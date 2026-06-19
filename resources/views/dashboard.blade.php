@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<style>
    .hover-card {
        transition: all 0.3s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.1) !important;
    }
    .icon-box {
        width: 65px;
        height: 65px;
        border-radius: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .hero-banner {
        background: linear-gradient(135deg, rgba(105, 108, 255, 0.05) 0%, rgba(105, 108, 255, 0.15) 100%);
        border-left: 5px solid #696cff;
    }
</style>

<div class="row mb-4">
    <div class="col-12">
        <div class="card shadow-sm border-0 rounded-4 hero-banner">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bolder text-primary mb-3" style="letter-spacing: -0.5px;">
                            Dari Hobi Jadi Bisnis, Dari Rasa Jadi Keluarga.
                        </h2>
                        <p class="text-dark fs-6 mb-4" style="line-height: 1.8;">
                            <strong>Nikmat Rasanyo..!</strong> adalah rumah bagi para pencinta, pelaku, dan inovator kuliner. Tempat kolaborasi melahirkan kreasi, dan komunitas mendorong pertumbuhan bisnis FnB-mu.
                        </p>
                        
                        <h6 class="fw-bold text-muted text-uppercase mb-3" style="letter-spacing: 1px;">Kenapa harus Sodapnya..!?</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-primary border border-primary px-3 py-2 rounded-pill shadow-sm"><i class="bx bx-network-chart me-1"></i> Networking Kuliner</span>
                            <span class="badge bg-white text-success border border-success px-3 py-2 rounded-pill shadow-sm"><i class="bx bx-share-alt me-1"></i> Knowledge Sharing</span>
                            <span class="badge bg-white text-warning border border-warning px-3 py-2 rounded-pill shadow-sm"><i class="bx bx-briefcase-alt-2 me-1"></i> Kolaborasi Bisnis</span>
                            <span class="badge bg-white text-danger border border-danger px-3 py-2 rounded-pill shadow-sm"><i class="bx bx-trending-up me-1"></i> Eksposur Brand</span>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-flex justify-content-center">
                        <i class="bx bx-restaurant text-primary" style="font-size: 10rem; opacity: 0.2;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 rounded-4 hover-card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="icon-box bg-primary text-white shadow-sm">
                    <i class="bx bx-layer" style="font-size: 2.2rem;"></i>
                </div>
                <div>
                    <p class="mb-1 text-secondary fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tipe Partner</p>
                    <h3 class="fw-bolder mb-0 text-dark">{{ $totalTipePartner }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 rounded-4 hover-card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="icon-box bg-success text-white shadow-sm">
                    <i class="bx bx-store-alt" style="font-size: 2.2rem;"></i>
                </div>
                <div>
                    <p class="mb-1 text-secondary fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">Total Partner</p>
                    <h3 class="fw-bolder mb-0 text-dark">{{ $totalPartner }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 rounded-4 hover-card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="icon-box bg-info text-white shadow-sm">
                    <i class="bx bx-user-circle" style="font-size: 2.2rem;"></i>
                </div>
                <div>
                    <p class="mb-1 text-secondary fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">Total Pengguna</p>
                    <h3 class="fw-bolder mb-0 text-dark">{{ $totalUser }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card h-100 shadow-sm border-0 rounded-4 hover-card">
            <div class="card-body p-4 d-flex align-items-center gap-3">
                <div class="icon-box bg-warning text-white shadow-sm">
                    <i class="bx bxs-discount" style="font-size: 2.2rem;"></i>
                </div>
                <div>
                    <p class="mb-1 text-secondary fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.5px;">Total Promo</p>
                    <h3 class="fw-bolder mb-0 text-dark">{{ $totalPromo }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h6 class="fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-bar-chart-alt-2 fs-4 me-2 text-primary"></i> Distribusi Partner per Tipe
                </h6>
            </div>
            <div class="card-body p-4">
                <div class="mb-5">
                    <canvas id="chartTipePartner" height="220"></canvas>
                </div>
                <div class="table-responsive rounded-3 border">
                    <table class="table table-hover table-sm align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 px-4">Tipe Usaha</th>
                                <th class="py-3 px-4 text-end">Jumlah Cabang</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($partnerPerTipe as $tipe)
                            <tr>
                                <td class="py-2 px-4 fw-medium text-dark">{{ $tipe->tipe }}</td>
                                <td class="py-2 px-4 text-end fw-bold text-primary">{{ $tipe->partners_count }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-muted py-4">Belum ada data tipe partner.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h6 class="fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-pie-chart-alt-2 fs-4 me-2 text-success"></i> Distribusi Hak Akses Pengguna
                </h6>
            </div>
            <div class="card-body p-4">
                <div class="mb-5 d-flex justify-content-center">
                    <div style="width: 100%; max-width: 300px;">
                        <canvas id="chartRole" height="220"></canvas>
                    </div>
                </div>
                <div class="table-responsive rounded-3 border">
                    <table class="table table-hover table-sm align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 px-4">Role (Hak Akses)</th>
                                <th class="py-3 px-4 text-end">Jumlah Pengguna</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($userPerRole as $role => $jumlah)
                            <tr>
                                <td class="py-2 px-4 fw-bold text-uppercase text-dark" style="font-size: 0.8rem;">
                                    @if($role === 'admin')
                                        <i class="bx bxs-circle text-danger me-1 fs-6 align-middle"></i>
                                    @elseif($role === 'partner')
                                        <i class="bx bxs-circle text-primary me-1 fs-6 align-middle"></i>
                                    @else
                                        <i class="bx bxs-circle text-secondary me-1 fs-6 align-middle"></i>
                                    @endif
                                    {{ $role }}
                                </td>
                                <td class="py-2 px-4 text-end fw-bold text-dark">{{ $jumlah }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h6 class="fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-store fs-4 me-2 text-info"></i> Partner Terbaru Bergabung
                </h6>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive rounded-3 border">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 px-4">Nama Usaha</th>
                                <th class="py-3 px-3">Tipe</th>
                                <th class="py-3 px-4">Bergabung</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($partnerTerbaru as $partner)
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark">{{ $partner->namausaha }}</td>
                                <td class="py-3 px-3 fw-semibold text-primary">{{ $partner->partnerType->tipe ?? '-' }}</td>
                                <td class="py-3 px-4 text-muted">
                                    {{ $partner->created_at ? $partner->created_at->format('d/m/Y') : '-' }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-5">
                                    <i class="bx bx-store-alt text-muted fs-1 mb-2 d-block"></i>
                                    <h6 class="text-muted fw-bold mb-0">Belum ada partner terdaftar.</h6>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-header bg-white border-bottom py-3 px-4">
                <h6 class="fw-bold text-dark mb-0 d-flex align-items-center">
                    <i class="bx bx-purchase-tag-alt fs-4 me-2 text-warning"></i> Promo Diskon Terbaru
                </h6>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive rounded-3 border">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 px-4">Diskon</th>
                                <th class="py-3 px-3">Partner Usaha</th>
                                <th class="py-3 px-4">Berakhir</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($promoTerbaru as $promo)
                            <tr>
                                <td class="py-3 px-4 fw-bolder text-warning">{{ $promo->persen }}% OFF</td>
                                <td class="py-3 px-3 fw-bold text-dark">
                                    {{ $promo->partner->namausaha ?? '-' }}
                                </td>
                                <td class="py-3 px-4 text-danger fw-medium">
                                    {{ \Carbon\Carbon::parse($promo->hingga_tgl)->format('d/m/Y') }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-5">
                                    <i class="bx bx-purchase-tag text-muted fs-1 mb-2 d-block"></i>
                                    <h6 class="text-muted fw-bold mb-0">Belum ada data promo.</h6>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tipeLabels = @json($partnerPerTipe->pluck('tipe'));
    const tipeData = @json($partnerPerTipe->pluck('partners_count'));

    new Chart(document.getElementById('chartTipePartner'), {
        type: 'bar',
        data: {
            labels: tipeLabels,
            datasets: [{
                label: 'Jumlah Partner',
                data: tipeData,
                backgroundColor: '#696cff',
                borderRadius: 6,
                barPercentage: 0.6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: { 
                y: { 
                    beginAtZero: true, 
                    ticks: { precision: 0 },
                    grid: { borderDash: [5, 5] }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    const roleLabels = @json($userPerRole->keys());
    const roleData = @json($userPerRole->values());

    new Chart(document.getElementById('chartRole'), {
        type: 'doughnut',
        data: {
            labels: roleLabels,
            datasets: [{
                data: roleData,
                backgroundColor: ['#ff3e1d', '#696cff', '#8592a3'],
                borderWidth: 0,
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '75%',
            plugins: {
                legend: { 
                    position: 'bottom',
                    labels: { 
                        padding: 20, 
                        usePointStyle: true,
                        font: { weight: 'bold' } 
                    }
                }
            }
        }
    });
});
</script>
@endsection