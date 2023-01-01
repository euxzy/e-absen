<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    public function store(Request $request)
    {
        $valodator = Validator::make($request->all(), [
            'tingkat' => 'required|numeric',
            'nama_kelas' => 'required|max:1',
            'id_wali_kelas' => 'required|numeric'
        ]);

        if ($valodator->fails()) {
            return redirect()->route('home')
                ->withErrors([
                    'message' => 'Mohon Isi Semua Data Dengan Benar!'
                ]);
        }

        $validated = $valodator->validated();
        $validated['nama'] = $validated['nama_kelas'];
        if (Kelas::query()->where('tingkat', $validated['tingkat'])
            ->where('nama', $validated['nama_kelas'])->first()
        ) {
            return redirect()->route('home')
                ->withErrors([
                    'message' => 'Data Kelas Sudah Ada!'
                ]);
        }

        Kelas::query()->create($validated);
        return redirect()->route('home')
            ->with('success', 'Data Kelas Telah Ditambah');
    }

    public function detail($id)
    {
        if (!Kelas::query()->where('id', $id)->first()) {
            return redirect()->route('home')
                ->withErrors(['message' => 'Data Kelas Tidak Ditemukan!']);
        }

        return view('pages.kelas.detail', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::query()->where('id', $id)->first();
        if (!$kelas) {
            return redirect()->route('home')
                ->withErrors(['message' => 'Data Kelas Tidak Ditemukan!']);
        }

        $valodator = Validator::make($request->all(), [
            'tingkat' => 'numeric',
            'nama_kelas' => 'max:1',
            'id_wali_kelas' => 'numeric'
        ]);

        if ($valodator->fails()) {
            return redirect()->route('dashboard.kelas.detail', $kelas->id)
                ->withErrors([
                    'message' => 'Mohon Isi Semua Data Dengan Benar!'
                ]);
        }

        $validated = $valodator->validated();
        $validated['nama'] = $validated['nama_kelas'];

        if ($kelas->nama == $request->nama_kelas && $kelas->tingkat == $request->tingkat) {
            $kelas->update($validated);
            return redirect()->route('dashboard.kelas.detail', $kelas->id)
                ->with('success', 'Data Kelas Berhasil Di Update!');
        }

        $checkKelas = Kelas::query()->where('tingkat', $validated['tingkat'])
            ->where('nama', $validated['nama_kelas'])->first();
        if ($checkKelas) {
            // dd($validated);
            return redirect()->route('dashboard.kelas.detail', $kelas->id)
                ->withErrors([
                    'message' => 'Data Kelas Sudah Ada!'
                ]);
        }

        $kelas->update($validated);
        return redirect()->route('dashboard.kelas.detail', $kelas->id)
            ->with('success', 'Data Kelas Berhasil Di Update!');
    }
}
