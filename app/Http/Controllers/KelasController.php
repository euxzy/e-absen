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
            'nama_kelas' => 'required',
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
        return view('pages.kelas.detail', ['id' => $id]);
    }
}
