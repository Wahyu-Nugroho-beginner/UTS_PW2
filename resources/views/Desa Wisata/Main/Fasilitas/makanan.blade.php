@extends('desa wisata.layout.master')

@section('title', 'Makan Gratis')

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
            <img src="{{ asset('images/banner-makan2.png') }}" alt="banner2">
        </div>
        <div class="banner-img">
            <img src="{{ asset('images/banner-makan3.png') }}" alt="banner3">
        </div>
        <div class="banner-img">
            <img src="{{ asset('images/banner-makan1.png') }}" alt="banner1">
        </div>
	</div>
	<div class="banner-overlay">
		<h1>MAKAN GRATIS</h1>
	</div>
</div>

<div class="feature-row z-1">
	<div class="feature-box z-1">
		<img src="{{ asset('images/garpu.png') }}" alt="garpu" width="75 px">
		<div class="feature-title">SARAPAN</div>
	</div>
	<div class="feature-box alt z-1">
        <img src="{{ asset('images/garpu.png') }}" alt="garpu" width="100 px">
		<div class="feature-title">MAKAN SIANG</div>
	</div>
    <div class="feature-box z-1">
        <img src="{{ asset('images/garpu.png') }}" alt="garpu" width="75 px">
        <div class="feature-title">MAKAN MALAM</div>
    </div>

</div>


<div class="row" style="margin-top:60px; align-items:center;">
    <div class="col-md-5 d-flex justify-content-center">
        <img src="{{ asset('images/juna.png') }}" alt="Chef" style="max-width:320px; max-height:320px; object-fit:cover;">
    </div>
    <div class="col-md-2 d-flex justify-content-center align-items-center">
        <h2 style="color:#000000; font-weight:bold; text-align:center;">Dimasak Oleh Chef Berpengalaman</h2>
    </div>
    <div class="col-md-5 d-flex justify-content-center">
        <img src="{{ asset('images/mbg.png') }}" alt="Nasi Kotak" style="max-width:320px; max-height:320px; object-fit:cover;">
    </div>
</div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection