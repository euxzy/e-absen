<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::query()->create([
            'id_wali_kelas' => 1,
            'tingkat' => 1,
            'nama' => 'A'
        ]);
        Kelas::query()->create([
            'id_wali_kelas' => 2,
            'tingkat' => 1,
            'nama' => 'B'
        ]);
        Kelas::query()->create([
            'id_wali_kelas' => 2,
            'tingkat' => 2,
            'nama' => 'B'
        ]);
    }
}
