<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Sepatu'
        ]);

        Category::create([
            'nama' => 'Tas'
        ]);

        Category::create([
            'nama' => 'Topi'
        ]);

        Category::create([
            'nama' => 'Helm'
        ]);
    }
}
