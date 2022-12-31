<?php

namespace App\Http\Controllers;

use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WaliKelasController extends Controller
{
    public function create()
    {
        return view('pages.walkel.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:50',
            'nuptk' => 'required|min:16|max:16',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|numeric',
            'photo' => 'image|max:2048',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect(route('dashboard.walkel.add'))->withErrors([
                'message' => 'Mohon Isi Semua Data Dengan Benar!'
            ]);
        }

        $validated = $validator->validated();
        // dd($validated);

        $nuptkWalkel = WaliKelas::query()->where('nuptk', $validated['nuptk'])->first();
        if ($nuptkWalkel) {
            return redirect()->route('dashboard.walkel.add')->withErrors([
                'message' => 'NUPTK Sudah Terdaftar!'
            ]);
        }

        $validated['photo'] = $request->getSchemeAndHttpHost() . '/storage/images/walkel/no_image.png';
        if ($request->hasFile('photo')) {
            $photo = $request->getSchemeAndHttpHost() . '/storage/' . $request->file('photo')->store('images/walkel', 'public');
            $validated['photo'] = $photo;
        }

        WaliKelas::query()->create($validated);
        return redirect()->route('home')->with('addWalkelSuccess', 'Berhasil Menambah Data Wali Kelas!');
    }

    public function index()
    {
        return view('pages.walkel.list');
    }
}
