<?php

namespace Database\Seeders;

use App\Models\Kayttaja;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Kayttaja::factory(4)->create();
    }
}