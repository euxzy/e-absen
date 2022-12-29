<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('pages.siswa');
    }

    public function store(Request $request)
    {
        $payload = [
            'nama' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'id_kelas' => $request->id_kelas,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'password' => $request->password
        ];
        dd($payload);
    }
}
