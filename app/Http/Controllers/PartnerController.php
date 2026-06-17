<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Partnertype;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::with('partnertype')->latest()->paginate(5);
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partnertypes = Partnertype::all();
        return view('partner.create', compact('partnertypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namausaha' => 'required|string|max:255|unique:partners,namausaha',
            'alamat' => 'required|string|max:255',
            'typeID' => 'required|exists:partnertypes,id',
            'deskripsi' => 'nullable|string',
        ]);

        Partner::create($validatedData);
        return redirect()->route('partner.index')->with('success', 'Data Usaha/Partner berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partner = Partner::with('partnertype')->findOrFail($id);
        return view('partner.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
        $partnertypes = Partnertype::all();
        return view('partner.edit', compact('partner', 'partnertypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            // Pengecualian unique untuk ID yang sedang di-edit agar tidak error
            'namausaha' => 'required|string|max:255|unique:partners,namausaha,' . $id,
            'alamat' => 'required|string|max:255',
            'typeID' => 'required|exists:partnertypes,id',
            'deskripsi' => 'nullable|string',
        ]);

        $partner = Partner::findOrFail($id);
        $partner->update($validatedData);

        return redirect()->route('partner.index')->with('success', 'Data Usaha/Partner berhasil diperbarui!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->route('partner.index')->with('success', 'Data Usaha/Partner berhasil dihapus!');
    }
}
