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
                
                </div>

             <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
               <div class="container">
                   <div class="d-flex ms-auto align-items-center gap-2">
                        <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a> 
                  </div>


              </div>




                
            </div>
                        @if(session('user_id'))
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i> {{ session('username') }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                            <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
                        @endif
            <!-- <div class="d-flex ms-auto align-items-center gap-2">
                <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a> -->
                <!-- <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
            </div> -->
        </div>
    </nav>

    <main class="container hero my-5">
       <div class="fasilitas-banner">
	<div class="banner-images">
		<div class="banner-img">
			<img src="{{ asset('images/atv1.png') }}" alt="ATV 1" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+1'">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/atv2.png') }}" alt="ATV 2" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+2'">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/atv3.png') }}" alt="ATV 3" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+3'">
		</div>
	</div>
	<div class="banner-overlay">
		<h2>ATV</h2>
	</div>
</div>

<div class="feature-row">
	<div class="feature-box">
		<div class="feature-icon">⛽</div>
		<div class="feature-title">BENSIN GRATIS</div>
	</div>
	<div class="feature-box alt">
		<div class="feature-icon">🔧</div>
		<div class="feature-title">24 JAM REPARASI</div>
	</div>
	<div class="feature-box">
		<div class="feature-icon">⏱️</div>
		<div class="feature-title">TANPA BATAS WAKTU</div>
	</div>
</div>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>
</html>