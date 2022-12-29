<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::query()->create([
            'nama' => 'John Doe',
            'id_kelas' => 1,
            'nis' => '0039027812',
            'nisn' => '0038264781',
            'gender' => '1',
            'tgl_lahir' => '2000-10-09',
            'photo' => 'http://127.0.0.1:8000/images/ini-foto.png',
            'password' => '12345678'
        ]);
        Siswa::query()->create([
            'nama' => 'Hatsune',
            'id_kelas' => 2,
            'nis' => '0029384758',
            'nisn' => '0023284758',
            'gender' => '0',
            'tgl_lahir' => '2000-08-12',
            'photo' => 'http://127.0.0.1:8000/images/ini-foto.png',
            'password' => '12345678'
        ]);
    }
}
