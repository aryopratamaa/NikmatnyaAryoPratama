<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('partner')->latest()->paginate(5);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partners = Partner::all();
        return view('user.create', compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6',
            'partnerID' => 'required|exists:partners,id',
            'role' => 'required|in:admin,partner,staff',
        ]);

        // Enkripsi password sebelum disimpan
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('user.index')->with('success', 'Data Akun User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('partner')->findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $partners = Partner::all();
        return view('user.edit', compact('user', 'partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'partnerID' => 'required|exists:partners,id',
            'role' => 'required|in:admin,partner,staff',
            // Password boleh kosong saat edit, jika diisi baru akan diubah
            'password' => 'nullable|min:6',
        ]);

        $user = User::findOrFail($id);

        // Cek apakah password diisi baru
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            // Hapus array password agar tidak mengubah password lama menjadi kosong
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('user.index')->with('success', 'Data Akun User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Akun User berhasil dihapus!');
    }
}
