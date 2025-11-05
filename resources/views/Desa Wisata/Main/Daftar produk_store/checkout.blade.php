@extends('desa wisata.layout.master')

@section('title', 'Checkout')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Checkout</h4>
                </div>
                <div class="card-body">
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

                    <!-- Product Details -->
                    @if(isset($produk))
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="{{ asset($produk->gambar ? 'images/'.$produk->gambar : 'images/product_placeholder.png') }}" 
                                 class="img-fluid rounded" 
                                 alt="{{ $produk->nama_produk }}">
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $produk->nama_produk }}</h5>
                            <p class="text-muted mb-2">Stok: {{ $produk->jumlah_produk }}</p>
                            <h4 class="text-primary mb-3">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                        </div>
                    </div>
                    @endif

                    <!-- Checkout Form -->
                    <form action="{{ route('produk.checkout.process') }}" method="POST">
                        @csrf
                        <input type="hidden" name="produk_id" value="{{ $produk->id ?? '' }}">
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Pengiriman</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                      id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" 
                                   id="telepon" name="telepon" value="{{ old('telepon') }}" required>
                            @error('telepon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> 

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('produk.showProduk', 'store') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                             <button type="submit" class="btn btn-primary">
                                <i class="bi bi-bag-check"></i> Proses Pesanan
                            </button>
                        </div>
                    </form>

                    <!-- <div class="mt-4">
                        <a href="{{ route('produk.checkout', $produk->id) }}" class="btn btn-primary">Checkout</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
