<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamars.index', compact('kamars'));
    }

    public function create()
    {
        return view('kamars.create');
    }

    public function store(Request $request)
    {
        Kamar::create($request->all());
        return redirect()->route('kamars.index')->with('success', 'Kamar created successfully.');
    }

    public function show(Kamar $kamar)
    {
        return view('kamars.show', compact('kamar'));
    }

    public function edit(Kamar $kamar)
    {
        return view('kamars.edit', compact('kamar'));
    }

    public function update(Request $request, Kamar $kamar)
    {
        $kamar->update($request->all());
        return redirect()->route('kamars.index')->with('success', 'Kamar updated successfully.');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamars.index')->with('success', 'Kamar deleted successfully.');
    }
}
