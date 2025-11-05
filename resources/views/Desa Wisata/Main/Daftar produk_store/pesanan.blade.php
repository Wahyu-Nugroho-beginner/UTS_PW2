@extends('desa wisata.layout.master')

@section('title', 'Pesanan Saya')

@section('content')
<div class="container my-5">
    <h3 class="mb-4">Daftar Pesanan Saya</h3>
    @if($pesanans->isEmpty())
        <div class="alert alert-info">Belum ada pesanan.</div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Tanggal Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pesanans as $i => $pesanan)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $pesanan->nama_produk }}</td>
                            <td>{{ $pesanan->jumlah_pesanan }}</td>
                            <td>Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($pesanan->tanggal_pesanan)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <a href="{{ route('produk.showProduk', 'store') }}" class="btn btn-primary me-2">
                            <i class="bi bi-arrow-left"></i> Kembali ke Toko
                        </a>
            </div>
        </div>
    @endif
</div>
@endsection
