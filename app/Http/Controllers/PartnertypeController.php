<?php

namespace App\Http\Controllers;

use App\Models\Partnertype;
use Illuminate\Http\Request;

class PartnertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnertypes = Partnertype::latest()->paginate(5);
        return view('partnertype.index', compact('partnertypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partnertype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipe' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Partnertype::create($validatedData);
        return redirect()->route('partnertype.index')->with('success', 'Tipe Partner berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partnertype = Partnertype::findOrFail($id);
        return view('partnertype.show', compact('partnertype'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partnertype = Partnertype::findOrFail($id);
        return view('partnertype.edit', compact('partnertype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'tipe' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $partnertype = Partnertype::findOrFail($id);
        $partnertype->update($validatedData);

        return redirect()->route('partnertype.index')->with('success', 'Tipe Partner berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $partnertype = Partnertype::findOrFail($id);
            $partnertype->delete();
            
            return redirect()->route('partnertype.index')->with('success', 'Tipe Partner berhasil dihapus!');
            
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == "23000") {
                return redirect()->route('partnertype.index')->with('error', 'Data tidak dapat dihapus karena Tipe Partner ini sedang digunakan oleh data Partner!');
            }
            
            // Jika ada error database lainnya
            return redirect()->route('partnertype.index')->with('error', 'Terjadi kesalahan sistem saat menghapus data.');
        }
    }
}
