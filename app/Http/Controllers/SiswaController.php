<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function create()
    {
        return view('pages.siswa.add');
    }

    public function store(Request $request)
    {
        /**
         * Melakukan validasi pada request yang di input
         */
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6|max:50',
            'nis' => 'required|min:10|max:10',
            'nisn' => 'required|min:10|max:10',
            'id_kelas' => 'required|numeric',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|numeric',
            'photo' => 'image|max:2048',
            'password' => 'required|min:6'
        ]);

        /**
         * Jika validasi gagal, maka akan redirect ke
         * route tambah siswa dengan pesan error
         */
        if ($validator->fails()) {
            return redirect(route('dashboard.siswa.add'))->withErrors([
                'message' => 'Mohon Isi Semua Data Dengan Benar!'
            ]);
        }

        /**
         * Mengambil hasil validasi
         */
        $validated = $validator->validated();

        /**
         * Cek apakah NIS dan NISN sudah ada di database
         */
        $nisSiswa = Siswa::query()->where('nis', $validated['nis'])->first();
        if ($nisSiswa) {
            return redirect()->route('dashboard.siswa.add')->withErrors([
                'message' => 'NIS Sudah Digunakan!'
            ]);
        }
        $nisnSiswa = Siswa::query()->where('nisn', $validated['nisn'])->first();
        if ($nisnSiswa) {
            return redirect()->route('dashboard.siswa.add')->withErrors([
                'message' => 'NISN Sudah Digunakan!'
            ]);
        }

        /**
         * Atur default photo ketika tidak
         * ada photo yang di inputkan
         */
        $validated['photo'] = $request->getSchemeAndHttpHost() . '/storage/images/siswa/no_image.png';

        /**
         * Jika terdapat photo pada data yang diinput,
         * maka default photo tadi akan di diganti
         * dengan photo yang diinput
         */
        if ($request->hasFile('photo')) {
            $photo = $request->getSchemeAndHttpHost() . '/storage/' . $request->file('photo')->store('images/siswa', 'public');
            $validated['photo'] = $photo;
        }

        // dd($validated);

        Siswa::query()->create($validated);
        return redirect()->route('home')->with(['addSiswaSuccess', 'Berhasil Menambah Data Siswa!']);
    }

    public function absen(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_siswa' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
            'photo' => 'required|image|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('home')->withErrors([
                'message' => 'Ukuran Gambar Terlalu Besar!'
            ]);
        }

        $validated = $validator->validated();
        $validated['tgl_absen'] = date('Y-m-d');
        $validated['waktu_absen'] = date('H:i:s');

        $absen = Absen::query()->where('id_siswa', $validated['id_siswa'])
            ->where('tgl_absen', $validated['tgl_absen'])->first();
        // dd($absen);

        if ($absen) {
            return redirect()->route('home')->withErrors([
                'message' => 'Kamu Sudah Absen Hari Ini!'
            ]);
        }

        $photo = $request->getSchemeAndHttpHost() . '/storage/' . $request->file('photo')->store('images/absen', 'public');
        $validated['photo'] = $photo;

        // dd($validated);

        Absen::query()->create($validated);
        return redirect()->route('home')->with('absenSuccess', 'Berhasil Absen!');
    }
}
