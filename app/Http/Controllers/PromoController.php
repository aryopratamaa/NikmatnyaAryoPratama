<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Partner;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promos = Promo::with('partner')->latest()->paginate(5);
        return view('promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partner::all();
        return view('promo.create', compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'PartnersID' => 'required|exists:partners,id',
            'persen' => 'required|integer|min:1|max:100',
            'mulai_tgl' => 'required|date',
            'hingga_tgl' => 'required|date|after_or_equal:mulai_tgl',
        ]);

        Promo::create($validatedData);
        return redirect()->route('promo.index')->with('success', 'Data Promo berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $promo = Promo::with('partner')->findOrFail($id);
        return view('promo.show', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $promo = Promo::findOrFail($id);
        $partners = Partner::all();
        return view('promo.edit', compact('promo', 'partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'PartnersID' => 'required|exists:partners,id',
            'persen' => 'required|integer|min:1|max:100',
            'mulai_tgl' => 'required|date',
            'hingga_tgl' => 'required|date|after_or_equal:mulai_tgl',
        ]);

        $promo = Promo::findOrFail($id);
        $promo->update($validatedData);

        return redirect()->route('promo.index')->with('success', 'Data Promo berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Data Promo berhasil dihapus!');
    }
}
