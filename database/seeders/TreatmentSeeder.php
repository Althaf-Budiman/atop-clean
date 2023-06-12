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
            'nama' => 'Eazy (1 Hari)',
            'durasi' => 1,
            'harga' => 50000
        ]);
        
        Treatment::create([
            'category_id' => 1,
            'nama' => 'Medium (3 Hari)',
            'durasi' => 3,
            'harga' => 40000
        ]);

        Treatment::create([
            'category_id' => 1,
            'nama' => 'Medium (Sepatu Anak) (3 Hari)',
            'durasi' => 3,
            'harga' => 30000
        ]);

        Treatment::create([
            'category_id' => 1,
            'nama' => 'Hard (5 Hari)',
            'durasi' => 5,
            'harga' => 70000
        ]);

        // Untuk Kategori Tas
        Treatment::create([
            'category_id' => 2,
            'nama' => 'Small (5 Hari)',
            'durasi' => 5,
            'harga' => 65000
        ]);

        Treatment::create([
            'category_id' => 2,
            'nama' => 'Medium (5 Hari)',
            'durasi' => 5,
            'harga' => 85000
        ]);

        Treatment::create([
            'category_id' => 2,
            'nama' => 'Big (7 Hari)',
            'durasi' => 7,
            'harga' => 135000
        ]);

        // Untuk Kategori Topi
        Treatment::create([
            'category_id' => 3,
            'nama' => 'Any (2 Hari)',
            'durasi' => 2,
            'harga' => 35000
        ]);

        // Untuk Kategori Helm
        Treatment::create([
            'category_id' => 4,
            'nama' => 'Express (3-4 Jam)',
            'durasi' => 0,
            'harga' => 45000
        ]);

        Treatment::create([
            'category_id' => 4,
            'nama' => 'Standard (1 Hari)',
            'durasi' => 1,
            'harga' => 35000
        ]);
    }
}
