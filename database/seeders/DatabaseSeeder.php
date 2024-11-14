<?php

namespace Database\Seeders;

use App\Models\User;
use COM;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Curso::factory(50)->create();
        User::factory(10)->create();
    }
}

