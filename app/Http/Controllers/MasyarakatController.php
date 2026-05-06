<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;


class MasyarakatController extends Controller
{
   public function index()
    {
    $Masyarakat = Masyarakat::all();    
    // dd($Masyarakat?->toArray());
    return view('Masyarakat.index', compact('Masyarakat'));
    // $masyarakat= Masyarakat::where ('jenis_kelamin', 'Laki-laki')->get();
    }

     public function create()
    {   
    return view('Masyarakat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_kk' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan,laki-laki,perempuan',
        ]);

        $validated['jenis_kelamin'] = strtolower($validated['jenis_kelamin']) === 'laki-laki'
            ? 'Laki-Laki'
            : 'Perempuan';

        Masyarakat::create($validated);

        return redirect()->route('Masyarakat.index')->with('success', 'Data masyarakat berhasil disimpan.');
    }

    public function edit(Masyarakat $Masyarakat)
    {
        return view('Masyarakat.edit', compact('Masyarakat'));
    }

    public function update(Request $request, Masyarakat $Masyarakat)
    {
        $validated = $request->validate([
            'nomor_kk' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan,laki-laki,perempuan',
        ]);

        $validated['jenis_kelamin'] = strtolower($validated['jenis_kelamin']) === 'laki-laki'
            ? 'Laki-Laki'
            : 'Perempuan';

        $Masyarakat->update($validated);

        return redirect()->route('Masyarakat.index')->with('success', 'Data masyarakat berhasil diperbarui.');
    }

    public function show(Masyarakat $Masyarakat)
    {
        return redirect()->route('Masyarakat.index');
    }

    public function destroy(Masyarakat $Masyarakat)
    {
        $Masyarakat->delete();

        return redirect()->route('Masyarakat.index')->with('success', 'Data masyarakat berhasil dihapus.');
    }
}
