
@extends('desa wisata.layout.master')

@section('title', 'Halaman Home')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Kayu Aro</title>

<body>
 
     <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <a class="home-icon" href="{{ route('home.index2') }}">
                    <i class="bi bi-house-door-fill" style="font-size:1.25rem"></i>
                </a>

                <div class="btn-group">
                    <button type="button" class="btn nav-pill dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                        WISATA
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('wisata.show','kebun-teh') }}">Kebun Teh</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show','kebun-kayu-manis') }}">Kebun Kayu Manis</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show','kebun-strawberry') }}">Kebun Strawberry</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show','gunung-kerinci') }}">Gunung Kerinci</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show','air-terjun') }}">Air Terjun</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show','danau-kerinci') }}">Danau Kerinci</a></li>
                    </ul>
                </div>
                   <div class="btn-group">
                            <button type="button" class="btn nav-pill dropdown-toggle px-4" data-bs-toggle="dropdown" aria-expanded="false">
                                FASILITAS
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('fasilitas.show', 'homestay') }}">Home Stay</a></li>
                                <li><a class="dropdown-item" href="{{ route('fasilitas.show', 'atv') }}">ATV</a></li>
                                <li><a class="dropdown-item" href="{{ route('fasilitas.show', 'makanan') }}">Makan Gratis</a></li>
                            </ul>
                        </div>
                         <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
               <div class="container">
                   <div class="d-flex ms-auto align-items-center gap-3">
                        <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a>
                        <a href="{{ route('produk.checkout') }}" class="btn btn-primary">Checkout</a>
                  </div>
              </div>
                </div>
                
            </div>

            <!-- <div class="d-flex ms-auto align-items-center gap-2">
                <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a>
                <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
            </div> -->
        </div>
    </nav>




   



<main class="container store-grid my-5">
    <div class="row g-4">
        @forelse($produks as $produk)
            <div class="col-md-4">
                <div class="product-card">
                    <img src="{{ asset($produk->gambar ? 'images/'.$produk->gambar : 'images/product_placeholder.png') }}" 
                         alt="{{ $produk->nama_produk }}" 
                         class="product-thumb">
                    <div class="mt-3">
                        <div class="product-name">{{ $produk->nama_produk }}</div>
                        <div class="product-price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                        <div class="product-meta mt-2">
                            <div class="star">★</div>
                            <div class="text-muted">| {{ $produk->jumlah_produk }} (Stock)</div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">Belum ada produk tersedia.</div>
            </div>
        @endforelse
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('produk.checkout') }}" class="btn btn-primary btn-lg">Checkout</a>
    </div>

</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>
</html>
