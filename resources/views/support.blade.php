@extends('layouts.master')
@section('title', 'Pusat Bantuan')

@section('content')
<div class="row mb-4">
    <div class="col-12 text-center my-4">
        <div class="d-inline-block bg-primary-subtle text-primary rounded-circle p-3 mb-3">
            <i class="bx bx-support" style="font-size: 2.5rem;"></i>
        </div>
        <h3 class="fw-bold text-dark mb-2">Halo, ada yang bisa kami bantu?</h3>
        <p class="text-muted mx-auto" style="max-width: 500px;">Pilih dari pertanyaan yang sering diajukan di bawah ini atau kirimkan pesan langsung kepada tim teknis kami.</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <h5 class="card-header bg-white border-bottom pt-4 pb-3 px-4 fw-bold text-primary d-flex align-items-center">
                <i class="bx bx-envelope fs-4 me-2"></i> Hubungi Tim Support
            </h5>
            <div class="card-body p-4 p-md-5">
                <form onsubmit="return false">
                    <div class="mb-4">
                        <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Subjek Kendala</label>
                        <input type="text" class="form-control py-2 shadow-sm rounded-3" placeholder="Contoh: Lupa Password Admin">
                    </div>
                    <div class="mb-5">
                        <label class="form-label text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 0.75rem;">Pesan Detail</label>
                        <textarea class="form-control py-2 shadow-sm rounded-3" rows="5" placeholder="Ceritakan secara spesifik kendala yang Anda alami..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold shadow-sm py-2 d-flex align-items-center justify-content-center">
                        <i class="bx bx-send me-2"></i> Kirim Pesan Bantuan
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <h5 class="card-header bg-white border-bottom pt-4 pb-3 px-4 fw-bold text-dark d-flex align-items-center">
                <i class="bx bx-help-circle fs-4 me-2 text-muted"></i> Pertanyaan Umum (FAQ)
            </h5>
            <div class="card-body p-4 p-md-5">
                <div class="accordion" id="faqAccordion">
                    
                    <div class="card accordion-item border mb-3 rounded-3 shadow-none">
                        <h2 class="accordion-header" id="headingOne">
                            <button type="button" class="accordion-button fw-semibold text-dark collapsed bg-light rounded-3" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Bagaimana alur pendaftaran Partner baru?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted pt-3">
                                Pastikan Anda telah membuat kategori <strong>Tipe Partner</strong> di menu Master. Setelah itu, buka menu <strong>Partners</strong> dan klik tombol "Tambah Partner" untuk mendaftarkan usaha baru.
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item border mb-3 rounded-3 shadow-none">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button fw-semibold text-dark collapsed bg-light rounded-3" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa dampaknya jika sebuah Partner dihapus?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted pt-3">
                                Sistem ini menggunakan relasi <em>Cascade</em>. Jika sebuah data Partner dihapus, maka seluruh data <strong>User</strong> (Staf/Pemilik) dan <strong>Promo</strong> yang terhubung dengan Partner tersebut akan ikut terhapus secara otomatis demi menjaga integritas data.
                            </div>
                        </div>
                    </div>

                    <div class="card accordion-item border rounded-3 shadow-none">
                        <h2 class="accordion-header" id="headingThree">
                            <button type="button" class="accordion-button fw-semibold text-dark collapsed bg-light rounded-3" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Mengapa pratinjau cetak Laporan tidak muncul?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted pt-3">
                                Fitur cetak memanggil modul cetak bawaan dari <em>browser</em>. Pastikan Anda tidak menggunakan ekstensi pemblokir <em>pop-up</em>, atau coba gunakan <em>browser</em> lain seperti Google Chrome atau Microsoft Edge versi terbaru.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection