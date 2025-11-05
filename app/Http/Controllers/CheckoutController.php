<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    // Tampilkan form checkout dengan detail produk
    public function index($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();
        if (!$produk) {
            return redirect()->route('produk.showProduk')->with('error', 'Produk tidak ditemukan.');
        }
        return view('Desa Wisata.Main.Daftar produk_store.checkout', compact('produk'));
    }

    // Proses pesanan
    public function process(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'nama'      => 'required|string|max:100',
            'email'     => 'required|email|max:100',
            'alamat'    => 'required|string|max:255',
            'telepon'   => 'required|string|max:20',
        ]);

        $produk = DB::table('produks')->where('id', $request->produk_id)->first();
        if (!$produk) {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        // Simpan ke tabel pesanan
        DB::table('pesanans')->insert([
            'id_user'        => session('user_id') ?? null, // jika user login
            'id_produk'      => $produk->id,
            'jumlah_pesanan' => 1, // bisa diubah jika ada input jumlah
            'total_harga'    => $produk->harga,
            'nama_produk'    => $produk->nama_produk,
            'tanggal_pesanan'=> now(),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        return redirect()->route('produk.showProduk', 'store')->with('success', 'Pesanan berhasil diproses!');
    }
}
