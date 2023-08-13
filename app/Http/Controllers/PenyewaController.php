<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all();
        return view('penyewas.index', compact('penyewas'));
    }

    public function create()
    {
        $kamars = Kamar::where('tersedia', true)->get();
        return view('penyewas.create', compact('kamars'));
    }

    public function store(Request $request)
    {
        Penyewa::create($request->all());
        return redirect()->route('penyewas.index')->with('success', 'Penyewa created successfully.');
    }

    public function show(Penyewa $penyewa)
    {
        return view('penyewas.show', compact('penyewa'));
    }

    public function edit(Penyewa $penyewa)
    {
        $kamars = Kamar::where('tersedia', true)->get();
        return view('penyewas.edit', compact('penyewa', 'kamars'));
    }

    public function update(Request $request, Penyewa $penyewa)
    {
        $penyewa->update($request->all());
        return redirect()->route('penyewas.index')->with('success', 'Penyewa updated successfully.');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();
        return redirect()->route('penyewas.index')->with('success', 'Penyewa deleted successfully.');
    }
}
