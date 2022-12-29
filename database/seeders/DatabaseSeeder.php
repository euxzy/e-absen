<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KelasSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(WalKelSeeder::class);
    }
}
