<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $userId = session('user_id');
        $pesanans = DB::table('pesanans')
            ->where('id_user', $userId)
            ->join('produks', 'pesanans.id_produk', '=', 'produks.id')
            ->select('pesanans.*', 'produks.nama_produk', 'produks.harga')
            ->orderBy('pesanans.created_at', 'desc')
            ->get();

        return view('Desa Wisata.Main.Daftar produk_store.pesanan', compact('pesanans'));
    }
    public function show($id)
    {
        $pesanan = \DB::table('pesanans')->where('id_pesanan', $id)->first();
        if (!$pesanan) {
            return redirect()->route('pesanan.list')->with('error', 'Pesanan tidak ditemukan.');
        }
        return view('Desa Wisata.Main.Daftar produk_store.pesanan_detail', compact('pesanan'));
    }
}
