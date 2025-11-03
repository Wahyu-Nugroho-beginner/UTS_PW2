<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama_produk' => 'Batik Tulis Jogja',
                'jumlah_produk' => 50,
                'harga' => 250000,
                'gambar' => 'produk/batik-tulis.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Tas Anyaman Bambu',
                'jumlah_produk' => 30,
                'harga' => 150000,
                'gambar' => 'produk/tas-anyaman.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kerajinan Gerabah',
                'jumlah_produk' => 40,
                'harga' => 75000,
                'gambar' => 'produk/gerabah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Songket Handmade',
                'jumlah_produk' => 25,
                'harga' => 350000,
                'gambar' => 'produk/songket.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Miniatur Candi',
                'jumlah_produk' => 35,
                'harga' => 120000,
                'gambar' => 'produk/miniatur-candi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('produks')->insert($products);
    }
}
