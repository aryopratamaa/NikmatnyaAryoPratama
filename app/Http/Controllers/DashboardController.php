<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnertype;
use App\Models\Partner;
use App\Models\User;
use App\Models\Promo;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalTipePartner = Partnertype::count();
        $totalPartner = Partner::count();
        $totalUser = User::count();
        $totalPromo = Promo::count();

        $partnerPerTipe = Partnertype::query()
            ->withCount('partners')
            ->orderByDesc('partners_count')
            ->get(['id', 'tipe']);

        $roleCounts = User::select('role')
            ->selectRaw('count(*) as total')
            ->groupBy('role')
            ->pluck('total', 'role');

        $userPerRole = collect(['admin', 'partner', 'staff'])
            ->mapWithKeys(fn ($role) => [$role => $roleCounts[$role] ?? 0]);

        $partnerTerbaru = Partner::with('partnerType')
            ->latest()
            ->limit(5)
            ->get();

        $promoTerbaru = Promo::with('partner')
            ->latest()
            ->limit(5)
            ->get();

        return view('dashboard', compact(
            'totalTipePartner',
            'totalPartner',
            'totalUser',
            'totalPromo',
            'partnerPerTipe',
            'userPerRole',
            'partnerTerbaru',
            'promoTerbaru'
        ));
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
