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

    public function showPesanan()
    {
        $pesanans = DB::table('pesanans')
            ->join('produks', 'pesanans.produk_id', '=', 'produks.id')
            ->where('pesanans.user_id', session('user_id'))
            ->select('pesanans.*', 'produks.nama_produk')
            ->orderBy('pesanans.created_at', 'desc')
            ->get();

        return view('desa wisata.main.daftar produk_store.pesanan', compact('pesanans'));
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
