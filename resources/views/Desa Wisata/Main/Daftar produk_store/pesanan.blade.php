@extends('desa wisata.layout.master')

@section('title', 'Riwayat Pesanan')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-4">Riwayat Pesanan Saya</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if($pesanans->isEmpty())
                <div class="alert alert-info">
                    Belum ada pesanan.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No. Pesanan</th>
                                <th>Produk</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanans as $pesanan)
                                <tr>
                                    <td>#{{ $pesanan->id }}</td>
                                    <td>{{ $pesanan->nama_produk }}</td>
                                    <td>{{ date('d M Y H:i', strtotime($pesanan->created_at)) }}</td>
                                    <td>Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                                    <td>
                                        <span class="badge {{ $pesanan->status == 'completed' ? 'bg-success' : 'bg-warning' }}">
                                            {{ ucfirst($pesanan->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $pesanan->alamat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('produk.showProduk', 'store') }}" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Toko
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
