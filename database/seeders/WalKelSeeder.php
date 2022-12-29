<?php

namespace Database\Seeders;

use App\Models\WaliKelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalKelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WaliKelas::query()->create([
            'nama' => 'Fulanah',
            'nuptk' => '1234567890123456',
            'gender' => '0',
            'tgl_lahir' => '1995-12-12',
            'photo' => 'http://127.0.0.1:8000/images/ini-foto.png',
            'password' => '12345678'
        ]);
        WaliKelas::query()->create([
            'nama' => 'Doelanah',
            'nuptk' => '0987654321098765',
            'gender' => '1',
            'tgl_lahir' => '1996-10-11',
            'photo' => 'http://127.0.0.1:8000/images/ini-foto.png',
            'password' => '12345678'
        ]);
    }
}
