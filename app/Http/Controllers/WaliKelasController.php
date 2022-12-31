<?php

namespace App\Http\Controllers;

use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
            return redirect()->route('dashboard.walkel.add')
                ->withErrors([
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

    public function detail($nuptk)
    {
        if (!WaliKelas::query()->where('nuptk', $nuptk)->first()) {
            return redirect()->route('dashboard.walkel.list')
                ->withErrors(['message' => 'Data Wali Kelas Tidak Ditemukan!']);
        }

        return view('pages.walkel.detail', ['nuptk' => $nuptk]);
    }

    public function update(Request $request, $nuptk)
    {
        $walkel = WaliKelas::query()->where('nuptk', $nuptk)->first();
        if (!$walkel) {
            return redirect()->route('dashboard.walkel.list')
                ->withErrors(['message' => 'Data Wali Kelas Tidak Ditemukan!']);
        }

        $validator = Validator::make($request->all(), [
            'nama' => 'max:50',
            'nuptk' => 'min:16|max:16',
            'tgl_lahir' => 'date',
            'gender' => 'numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.walkel.detail', $walkel->nuptk)
                ->withErrors([
                    'message' => 'Mohon Isi Semua Data Dengan Benar!'
                ]);
        }

        $validated = $validator->validated();

        $walkel->update($validated);
        return redirect()->route('dashboard.walkel.detail', $validated['nuptk'])
            ->with('updateSuccess', 'Update Data Wali Kelas Berhasil!');
    }

    public function destroy(Request $request, $nuptk)
    {
        $walkel = WaliKelas::query()->where('nuptk', $nuptk)->first();
        if (!$walkel) {
            return redirect()->route('dashboard.walkel.list')
                ->withErrors(['message' => 'Data Wali Kelas Tidak Ditemukan!']);
        }

        $oldPhoto = Str::of($walkel->photo)->remove($request->getSchemeAndHttpHost() . '/storage');
        if (Storage::disk('public')->exists($oldPhoto)) {
            Storage::disk('public')->delete($oldPhoto);
        }

        $walkel->delete();
        return redirect()->route('dashboard.walkel.list')
            ->with('message', 'Data Wali Kelas Telah Dihapus!');
    }
}
