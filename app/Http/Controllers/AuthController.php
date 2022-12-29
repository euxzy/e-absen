<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
            // $user = ['nis' => $request->nis];
        } else if ($request->role == 2) {
            // $user = ['username' => $request->username];
            $username = $request->username;
            $user = Admin::query()->where('username', $username)->first();

            /**
             * Cek apakah user ada di database
             */
            if ($user == null) {
                return redirect(route('auth.login'))
                    ->withErrors([
                        'message' => "Username {$username} Tidak Ditemukan!"
                    ]);
            }
        } else if ($request->role == 3) {
            // $user = ['nuptk' => $request->nuptk];
        }
        // $user['password'] = $request->password;

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

        return redirect()->route('home');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('auth.login');
    }
}
