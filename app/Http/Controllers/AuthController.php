<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authLogin(Request $request)
    {
        $password = $request->password;

        /**
         * Cek apakah siswa, admin atau
         * wali kelas yang akan login
         */
        if ($request->role == 1) {
            $nis = $request->nis;
            $user = Siswa::query()->where('nis', $nis)->first();

            /**
             * Cek apakah user ada di database
             */
            if ($user == null) {
                return redirect(route('auth.login'))
                    ->withErrors([
                        'message' => "User Dengan NIS {$nis} Tidak Ditemukan!"
                    ]);
            }
        } else if ($request->role == 2) {
            $username = $request->username;
            $user = Admin::query()->where('username', $username)->first();

            if ($user == null) {
                return redirect(route('auth.login'))
                    ->withErrors([
                        'message' => "Username {$username} Tidak Ditemukan!"
                    ]);
            }
        } else if ($request->role == 3) {
            $nuptk = $request->nuptk;
            $user = WaliKelas::query()->where('nuptk', $nuptk)->first();

            if ($user == null) {
                return redirect(route('auth.login'))
                    ->withErrors([
                        'message' => "User Dengan NUPTK {$nuptk} Tidak Ditemukan!"
                    ]);
            }
        }

        /**
         * Cek apakah password benar
         */
        if (!Hash::check($password, $user->password)) {
            return redirect(route('auth.login'))
                ->withErrors([
                    'message' => 'Password Salah!'
                ]);
        }

        // dd($user);

        if (!session()->isStarted()) session()->start();
        session()->put('logged', true);
        session()->put('role', $user->id_role);
        session()->put('idUser', $user->id);
        session()->put('nameUser', $user->nama);

        return redirect()->route('home');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('auth.login');
    }
}
