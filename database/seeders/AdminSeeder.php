<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->create([
            'nama' => 'Fulan',
            'username' => 'fulan',
            'email' => 'fulan@mail.com',
            'password' => '12345678'
        ]);
        Admin::query()->create([
            'nama' => 'Kirito',
            'username' => 'kirito',
            'email' => 'kirito@mail.com',
            'password' => '12345678'
        ]);
    }
}
