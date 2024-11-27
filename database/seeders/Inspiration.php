<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class Inspiration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gunakan factory untuk membuat 20 kategori
        \App\Models\Category::factory(20)->create();
    }
}
