<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function create()
    {
        return view('pages.admin.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:50',
            'username' => 'required|max:50',
            'email' => 'required|max:100',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->route('dashboard.admin.add')->withErrors([
                'message' => 'Mohon Isi Semua Data Dengan Benar!'
            ]);
        }

        $validated = $validator->validated();

        /**
         * Cek apakah username dan email sudah digunakan
         */
        $usernameAdmin = Admin::query()->where('username', $validated['username'])->first();
        if ($usernameAdmin) {
            return redirect()->route('dashboard.admin.add')->withErrors([
                'message' => 'Username Sudah Digunakan!'
            ]);
        }
        // dd($usernameAdmin);
        $emailAdmin = Admin::query()->where('email', $validated['email'])->first();
        if ($emailAdmin) {
            return redirect()->route('dashboard.admin.add')->withErrors([
                'message' => 'Email Sudah Digunakan!'
            ]);
        }
        // dd($emailAdmin);

        // dd($validated);

        Admin::query()->create($validated);
        return redirect()->route('home')
            ->with('message', 'Berhasil Menambah Data Admin!');
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::query()->where('id', $id)->first();
        $validator = Validator::make($request->all(), [
            'nama' => 'max:50',
            'username' => 'max:50',
            'email' => 'max:100',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->route('home')
                ->withErrors([
                    'message' => 'Mohon Isi Semua Data Dengan Benar!'
                ]);
        }

        $validated = $validator->validated();
        $admin->update($validated);
        return redirect()->route('home')
            ->with('success', 'Data Admin berhasil Diupdate!');
    }
}
