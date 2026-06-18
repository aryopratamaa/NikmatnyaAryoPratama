<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnertype;
use App\Models\Partner;
use App\Models\Promo;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    // Menampilkan halaman form pilihan laporan
    public function form()
    {
        return view('report.form');
    }

    // Memproses pilihan dari Form Dropdown dan memanggil fungsi index PDF
    public function preview(Request $request)
    {
        $request->validate([
            'jenis_laporan' => 'required|in:partnertype,partner,promo'
        ]);

        return $this->index($request->jenis_laporan);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        if ($type == 'partnertype') {
            $data = Partnertype::all();
            $pdf = Pdf::loadView('report.partnertype', compact('data'));
            return $pdf->stream('Laporan_Tipe_Partner.pdf');

        } elseif ($type == 'partner') {
            $data = User::with('partner')->get();
            $pdf = Pdf::loadView('report.partner', compact('data'));
            return $pdf->stream('Laporan_Partners.pdf');

        } elseif ($type == 'promo') {
            $data = Promo::with('partner')->orderBy('mulai_tgl', 'desc')->get();
            $pdf = Pdf::loadView('report.promo', compact('data'));
            return $pdf->stream('Laporan_Promos.pdf');

        } else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
