<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Katalog;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Katalog::create([
            'judul' => 'Motor Beat',
            'manufacturer' => 'Honda',
            'harga' => 10000000.0,
            'imageUrl' => 'upload/motor-beat.jpg'
        ]);

        Katalog::create([
            'judul' => 'Motor Xmax',
            'manufacturer' => 'Yamaha',
            'harga' => 10000000.0,
            'imageUrl' => 'upload/motor-xmax.jpg'
        ]);
    }
}
