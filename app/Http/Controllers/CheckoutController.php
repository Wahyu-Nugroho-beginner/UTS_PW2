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
            'jumlah' => 'required|integer|min:1',
            'nama'      => 'required|string|max:100',
            'email'     => 'required|email|max:100',
            'alamat'    => 'required|string|max:255',
            'telepon'   => 'required|string|max:20',
        ]);

        $produk = DB::table('produks')->where('id', $request->produk_id)->first();
        if (!$produk) {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        // Validasi stok
        if ($request->jumlah > $produk->jumlah_produk) {
            return back()->with('error', 'Jumlah pesanan melebihi stok yang tersedia.');
        }

        DB::beginTransaction();
        try {
            // Simpan ke tabel pesanan
            DB::table('pesanans')->insert([
                'id_user'        => session('user_id') ?? null,
                'id_produk'      => $produk->id,
                'jumlah_pesanan' => $request->jumlah,
                'total_harga'    => $produk->harga * $request->jumlah,
                'nama_produk'    => $produk->nama_produk,
                'tanggal_pesanan'=> now(),
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            // Update stok produk
            DB::table('produks')
                ->where('id', $produk->id)
                ->decrement('jumlah_produk', $request->jumlah);

            DB::commit();
            // Redirect to pesanan list. older code used 'pesanan.show' but that route may require an {id}
            return redirect()->route('pesanan.list')->with('success', 'Pesanan berhasil diproses!');
        } catch (\Exception $e) {
            DB::rollback();
            // Log the exception for debugging
            try {
                \Log::error('Checkout process error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            } catch (\Throwable $logEx) {
                // ignore logging errors
            }
            // If app debug is enabled, include the exception message to help diagnose; otherwise show generic message
            if (config('app.debug')) {
                return back()->with('error', 'Terjadi kesalahan saat memproses pesanan: ' . $e->getMessage());
            }
            return back()->with('error', 'Terjadi kesalahan saat memproses pesanan. Silakan coba lagi atau periksa log.');
        }
}
}