<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $produks = DB::table('produks')->get();
        return view('desa wisata.main.daftar produk_store.checkout', compact('produks'));
    }

    public function process(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        // TODO: Implementasi proses checkout
        // Untuk saat ini kita akan redirect kembali dengan pesan sukses
        return redirect()->route('produk.showProduk', 'store')->with('success', 'Pesanan berhasil diproses!');
    }
}
