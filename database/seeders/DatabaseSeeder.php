<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ComCodeSeeder::class);
        $this->call(SekolahSeed::class);
    }
}
