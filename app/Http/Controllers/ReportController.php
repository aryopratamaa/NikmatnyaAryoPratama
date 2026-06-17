<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnertype;
use App\Models\Partner;
use App\Models\Promo;
use App\Models\User;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $data = [];
        $title = '';

        if ($type == 'partnertype') {
            $data = Partnertype::all();
            $title = 'Laporan Tipe Partner Usaha';
        } elseif ($type == 'partner') {

            $data = User::with('partner')->get();
            $title = 'Laporan Daftar Partner dan Hak Akses';
        } elseif ($type == 'promo') {
            $data = Promo::with('partner')->orderBy('mulai_tgl', 'desc')->get();
            $title = 'Laporan Daftar Promo Usaha';
        } else {
            abort(404);
        }

        return view('report.index', compact('data', 'type', 'title'));
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
