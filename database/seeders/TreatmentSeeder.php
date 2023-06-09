<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk Kategori Sepatu
        Treatment::create([
            'category_id' => 1,
            'nama' => 'Eazy',
            'durasi' => 1,
            'harga' => 50000
        ]);
        
        Treatment::create([
            'category_id' => 1,
            'nama' => 'Medium',
            'durasi' => 3,
            'harga' => 40000
        ]);

        Treatment::create([
            'category_id' => 1,
            'nama' => 'Medium (Sepatu Anak)',
            'durasi' => 3,
            'harga' => 30000
        ]);

        Treatment::create([
            'category_id' => 1,
            'nama' => 'Hard',
            'durasi' => 5,
            'harga' => 70000
        ]);

        // Untuk Kategori Tas
        Treatment::create([
            'category_id' => 2,
            'nama' => 'Small',
            'durasi' => 5,
            'harga' => 65000
        ]);

        Treatment::create([
            'category_id' => 2,
            'nama' => 'Medium',
            'durasi' => 5,
            'harga' => 85000
        ]);

        Treatment::create([
            'category_id' => 2,
            'nama' => 'Big',
            'durasi' => 7,
            'harga' => 135000
        ]);

        // Untuk Kategori Topi
        Treatment::create([
            'category_id' => 3,
            'nama' => 'Any',
            'durasi' => 2,
            'harga' => 35000
        ]);

        // Untuk Kategori Helm
        Treatment::create([
            'category_id' => 4,
            'nama' => 'Express',
            'durasi' => 0,
            'harga' => 45000
        ]);

        Treatment::create([
            'category_id' => 4,
            'nama' => 'Standard',
            'durasi' => 1,
            'harga' => 35000
        ]);
    }
}
