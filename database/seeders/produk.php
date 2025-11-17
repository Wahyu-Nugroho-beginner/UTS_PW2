<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'id' => 13,
                'nama_produk' => 'Anyaman bambu / rotan Kerinci (keranjang kecil)', 
                'jumlah_produk' => 120,
                'harga' => 45000,
                'gambar' => 'anyaman_bambu_kerinci_keranjang.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 14,
                'nama_produk' => 'Tikar pandan Kerinci', 
                'jumlah_produk' => 100,
                'harga' => 30000,
                'gambar' => 'tikar_pandan_kerinci.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 15,
                'nama_produk' => 'Hiasan dinding kayu ukir motif alam Kerinci', 
                'jumlah_produk' => 60,
                'harga' => 90000,
                'gambar' => 'hiasan_kayu_ukir_kerinci.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 16,
                'nama_produk' => 'Tas kecil souvenir rotan/anyaman Kerinci', 
                'jumlah_produk' => 90,
                'harga' => 55000,
                'gambar' => 'tas_rotan_kerinci_souvenir.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 17,
                'nama_produk' => 'Lampu hias bambu Kerinci', 
                'jumlah_produk' => 70,
                'harga' => 65000,
                'gambar' => 'lampu_bambu_kerinci.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 6,
                'nama_produk' => 'Buah strawberry segar', 
                'jumlah_produk' => 200,
                'harga' => 15000,
                'gambar' => 'buah_strawberry.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 7,
                'nama_produk' => 'Teh kayu aro', 
                'jumlah_produk' => 150,
                'harga' => 25000,
                'gambar' => 'daun_teh.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 8,
                'nama_produk' => 'Dodol kentang', 
                'jumlah_produk' => 80,
                'harga' => 20000,
                'gambar' => 'dodol_kentang_kerinci.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 9,
                'nama_produk' => 'Kladito', 
                'jumlah_produk' => 120,
                'harga' => 30000,
                'gambar' => 'kladito.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 10,
                'nama_produk' => 'Kopi kayu aro', 
                'jumlah_produk' => 180,
                'harga' => 40000,
                'gambar' => 'kopi_arabika.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 11,
                'nama_produk' => 'Kue kembang', 
                'jumlah_produk' => 90,
                'harga' => 15000,
                'gambar' => 'kue_kembang.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
            [
                'id' => 12,
                'nama_produk' => 'Madu hutan', 
                'jumlah_produk' => 60,
                'harga' => 50000,
                'gambar' => 'toples_madu.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ],
        ]);
    }
}
