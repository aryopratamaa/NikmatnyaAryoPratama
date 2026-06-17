@extends('layouts.master')
@section('title', $title)

@section('content')
<div class="row">
    <div class="col-12">
        
        <div class="card border-0 shadow-sm rounded-4 w-100" id="area-print">
            <div class="card-body p-5">
                
                <div class="text-end mb-4 d-print-none">
                    <button onclick="window.print()" class="btn btn-primary rounded-pill px-4 fw-semibold shadow-sm">
                        <i class="ti ti-printer me-2"></i> Cetak Laporan
                    </button>
                </div>

                <div class="text-center border-bottom border-dark mb-4 pb-3" style="border-bottom-width: 3px !important;">
                    <h3 class="fw-bold mb-1 text-uppercase text-dark" style="letter-spacing: 1px;">Nikmat Rasanyo!</h3>
                    <h5 class="fw-bold mb-2 text-dark">Komunitas Food and Beverage (FnB)</h5>
                    <p class="mb-0 text-dark" style="font-size: 14px;">Platform Promosi dan Kolaborasi Usaha Kuliner</p>
                </div>

                <div class="text-center mb-4">
                    <h4 class="fw-bold text-dark text-decoration-underline text-uppercase">{{ $title }}</h4>
                </div>

                @if($type == 'partnertype')
                    <table class="table table-bordered border-dark align-middle">
                        <thead class="bg-light text-dark text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th width="30%">Tipe Partner</th>
                                <th width="60%">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="fw-bold">{{ $item->tipe }}</td>
                                <td>{{ $item->deskripsi ?? '-' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if($type == 'partner')
                    <table class="table table-bordered border-dark align-middle">
                        <thead class="bg-light text-dark text-center">
                            <tr>
                                <th width="5%">No</th>
                                <th width="25%">Nama Usaha</th>
                                <th width="30%">Alamat</th>
                                <th width="25%">Email Akun</th>
                                <th width="15%">Role</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="fw-bold">{{ $item->partner->namausaha ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $item->partner->alamat ?? '-' }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-center text-uppercase">{{ $item->role }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if($type == 'promo')
                    <table class="table table-bordered border-dark align-middle">
                        <thead class="bg-light text-dark text-center">
                            <tr>
                                <th width="5%">No</th>
                                <th width="35%">Nama Usaha (Partner)</th>
                                <th width="15%">Diskon</th>
                                <th width="20%">Tanggal Mulai</th>
                                <th width="25%">Tanggal Berakhir</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td class="fw-bold">{{ $item->partner->namausaha ?? 'Dihapus' }}</td>
                                <td class="text-center">{{ $item->persen }}%</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($item->mulai_tgl)->format('d/m/Y') }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($item->hingga_tgl)->format('d/m/Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <div class="row mt-5 pt-4 text-dark">
                    <div class="col-8"></div>
                    <div class="col-4 text-center">
                        <p class="mb-5">Dicetak pada: {{ \Carbon\Carbon::now()->format('d F Y') }}<br>Admin Sistem,</p>
                        <br><br>
                        <p class="fw-bold mb-0 text-decoration-underline">_______________________</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<style>
    @media print {
        body * { visibility: hidden; }
        #area-print, #area-print * { visibility: visible; }
        #area-print { position: absolute; left: 0; top: 0; width: 100%; margin: 0; padding: 0; box-shadow: none !important; }
        .d-print-none { display: none !important; }
        .table-bordered { border-color: #000 !important; }
        .table-bordered th, .table-bordered td { border-color: #000 !important; }
    }
</style>
@endsection