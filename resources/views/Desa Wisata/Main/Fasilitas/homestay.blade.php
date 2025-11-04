@extends('desa wisata.layout.master')

@section('title', 'Homestay')

@section('content')

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
			<img src="{{ asset('images/banner-homestay1.png') }}" alt="banner 1">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/banner-homestay2.png') }}" alt="banner 2">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/banner-homestay3.png') }}" alt="banner 3">
		</div>
	</div>
	<div class="banner-overlay">
		<h1>HOMESTAY</h1>
	</div>
</div>

<div class="feature-row z-1">
    <div class="feature-box alt z-1">
        <img src="{{ asset('images/bell.png') }}" alt="Layanan" width="150 px">
        <div class="feature-title">Layanan</div>
    </div>
	<div class="feature-box z-1">
        <img src="{{ asset('images/wifi.png') }}" alt="Wifi" width="100 px">
		<div class="feature-title">Wi-Fi</div>
	</div>
	<div class="feature-box alt z-1">
        <img src="{{ asset('images/mobil.png') }}" alt="Jemputan" width="75 px">
		<div class="feature-title">Jemputan <br>Bandara</div>
	</div>
	<div class="feature-box z-1">
        <img src="{{ asset('images/vector.png') }}" alt="Restoran" width="50 px">
		<div class="feature-title">Restoran</div>
	</div>
</div>

    <div class="banner-overlay">
	    <h2>LAYANAN KAMI</h2>
    </div>

<div class="fasilitas-banner" style="background-color:#ffffff; padding:20px ;">
    <div class="banner-images">
        <div class="banner-img">
            <img src="{{ asset('images/layanan1.jpeg') }}" alt="Layanan 1" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+2'">
        </div>
		<div class="banner-img">
			<img src="{{ asset('images/layanan2.jpeg') }}" alt="Layanan 2" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+1'">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/layanan3.jpg') }}" alt="Layanan 3" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+3'">
		</div>
	</div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection