<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('pages.admin');
    }

    public function store(Request $request)
    {
        $payload = [
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd($payload);

        Admin::query()->create($payload);
        return redirect(route('auth.login'));
    }
}
