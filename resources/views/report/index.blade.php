@extends('layouts.master')
@section('title', $title)

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
        
        <!-- TOOLBAR AKSI (Hanya tampil di Web) -->
        <div class="d-flex justify-content-between align-items-center mb-4 d-print-none">
            <div class="d-flex align-items-center">
                <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                    <i class="bx bx-file-find fs-4"></i>
                </div>
                <h5 class="fw-bold text-primary mb-0">Pratinjau Laporan</h5>
            </div>
            
            <button onclick="window.print()" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm d-flex align-items-center">
                <i class="bx bx-printer me-2"></i> Cetak Laporan
            </button>
        </div>

        <!-- AREA KERTAS DOKUMEN -->
        <div class="card border-0 rounded-0" id="area-print">
            <div class="card-body paper-preview">
                
                <!-- KOP SURAT LAPORAN -->
                <div class="text-center border-bottom border-dark mb-4 pb-4" style="border-bottom-width: 3px !important;">
                    <div class="d-flex justify-content-center align-items-center mb-2">
                        <i class="bx bx-restaurant fs-1 me-2 text-dark"></i>
                        <h2 class="fw-bold mb-0 text-uppercase text-dark" style="letter-spacing: 2px;">Nikmat Rasanyo!</h2>
                    </div>
                    <h5 class="fw-bold mb-1 text-dark">Komunitas Food and Beverage (FnB)</h5>
                    <p class="mb-0 text-dark" style="font-size: 15px;">Platform Promosi dan Kolaborasi Usaha Kuliner</p>
                </div>

                <!-- JUDUL LAPORAN -->
                <div class="text-center mb-5">
                    <h4 class="fw-bold text-dark text-decoration-underline text-uppercase" style="letter-spacing: 1px;">{{ $title }}</h4>
                </div>

                <!-- TABEL 1: TYPE OF PARTNER -->
                @if($type == 'partnertype')
                    <table class="table table-bordered border-dark align-middle report-table">
                        <thead class="text-dark text-center" style="background-color: #f8f9fa !important;">
                            <tr>
                                <th width="10%" class="fw-bold py-3">No</th>
                                <th width="30%" class="fw-bold py-3">Tipe Partner</th>
                                <th width="60%" class="fw-bold py-3">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center py-2">{{ $index + 1 }}</td>
                                <td class="fw-bold py-2">{{ $item->tipe }}</td>
                                <td class="py-2">{{ $item->deskripsi ?? '-' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <!-- TABEL 2: PARTNERS (Gabungan Partner & User) -->
                @if($type == 'partner')
                    <table class="table table-bordered border-dark align-middle report-table">
                        <thead class="text-dark text-center" style="background-color: #f8f9fa !important;">
                            <tr>
                                <th width="5%" class="fw-bold py-3">No</th>
                                <th width="25%" class="fw-bold py-3">Nama Usaha</th>
                                <th width="30%" class="fw-bold py-3">Alamat</th>
                                <th width="25%" class="fw-bold py-3">Email Akun</th>
                                <th width="15%" class="fw-bold py-3">Role</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center py-2">{{ $index + 1 }}</td>
                                <td class="fw-bold py-2">{{ $item->partner->namausaha ?? 'Tidak Diketahui' }}</td>
                                <td class="py-2">{{ $item->partner->alamat ?? '-' }}</td>
                                <td class="py-2">{{ $item->email }}</td>
                                <td class="text-center text-uppercase py-2">{{ $item->role }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <!-- TABEL 3: PROMOS -->
                @if($type == 'promo')
                    <table class="table table-bordered border-dark align-middle report-table">
                        <thead class="text-dark text-center" style="background-color: #f8f9fa !important;">
                            <tr>
                                <th width="5%" class="fw-bold py-3">No</th>
                                <th width="35%" class="fw-bold py-3">Nama Usaha (Partner)</th>
                                <th width="15%" class="fw-bold py-3">Diskon</th>
                                <th width="20%" class="fw-bold py-3">Tanggal Mulai</th>
                                <th width="25%" class="fw-bold py-3">Tanggal Berakhir</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach($data as $index => $item)
                            <tr>
                                <td class="text-center py-2">{{ $index + 1 }}</td>
                                <td class="fw-bold py-2">{{ $item->partner->namausaha ?? 'Dihapus' }}</td>
                                <td class="text-center fw-bold py-2">{{ $item->persen }}%</td>
                                <td class="text-center py-2">{{ \Carbon\Carbon::parse($item->mulai_tgl)->format('d M Y') }}</td>
                                <td class="text-center py-2">{{ \Carbon\Carbon::parse($item->hingga_tgl)->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <!-- AREA TANDA TANGAN -->
                <div class="row mt-5 pt-5 text-dark">
                    <div class="col-7 col-md-8"></div>
                    <div class="col-5 col-md-4 text-left">
                        <p class="mb-5">Medan, {{ \Carbon\Carbon::now()->format('d F Y') }}<br>Admin Sistem,</p>
                        <br><br>
                        <p class="fw-bold mb-0 text-decoration-underline" style="letter-spacing: 1px;">_______________________</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- CSS KHUSUS PRINT & PREVIEW -->
<style>
    
    .paper-preview {
        background: #ffffff;
        padding: 40px 50px; 
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15); 
        min-height: 297mm; 
    }
    
    .report-table th, .report-table td {
        border-color: #000000 !important; 
    }

    
    @media print {
        body * { 
            visibility: hidden; 
        }
        #area-print, #area-print * { 
            visibility: visible; 
            color: #000 !important; 
        }
        #area-print { 
            position: absolute; 
            left: 0; 
            top: 0; 
            width: 100%; 
            margin: 0; 
            padding: 0; 
            box-shadow: none !important; 
        }
        .paper-preview {
            padding: 0 !important;
            min-height: auto !important;
        }
        .d-print-none { 
            display: none !important; 
        }
        .table-bordered th {
            background-color: #e9ecef !important; 
            -webkit-print-color-adjust: exact; 
        }
    }
</style>
@endsection