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
                <div class="home-icon">
                    <i class="bi bi-house-door-fill" style="font-size:1.25rem"></i>
                </div>
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
                                <li><a class="dropdown-item" href="/wisata/kebun-teh">Home Stay</a></li>
                                <li><a class="dropdown-item" href="/wisata/kebun-kayu-manis">ATV</a></li>
                                <li><a class="dropdown-item" href="/wisata/kebun-strawberry">Makan Gratis</a></li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="d-flex ms-auto align-items-center gap-2">
                <i class="bi bi-cart" style="font-size:1.5rem"></i>
                <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
            </div>
        </div>
    </nav>

    <main class="container hero my-5">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-title">DESA KAYU ARO</h2>
                <p class="text-justify mt-3">Kayu Aro merupakan sebuah kecamatan di Kabupaten Kerinci, Jambi, Indonesia. Merupakan hasil pemekaran dari kecamatan Gunung Kerinci pada tanggal 12 Juni 1996 berdasarkan PP NO. 47/1996. Pusat pemerintahan di Desa Tanjung Bungo. Sebelumnya pusat pemerintahan terletak di Desa Batang Sangir.</p>
                <p class="text-justify">Desa Kayu Aro terletak di Kecamatan Kayu Aro, Kabupaten Kerinci, Provinsi Jambi, di lereng indah Gunung Kerinci, gunung tertinggi di Sumatera. Dikenal dengan udara yang sejuk dan pemandangan alam yang menakjubkan, Kayu Aro menjadi salah satu destinasi wisata alam dan agrowisata unggulan di Kerinci.</p>
                <p class="text-justify">Desa ini dikelilingi hamparan perkebunan kopi arabika dan teh Kayu Aro yang terkenal hingga mancanegara. Keindahan alam pegunungan, sawah bertingkat, serta keramahan masyarakatnya menjadikan Kayu Aro tempat ideal untuk menikmati wisata alam, budaya, dan edukasi pertanian.</p>
            </div>
            <div class="col-lg-5 text-center">
                <div class="img-frame mx-auto" style="max-width:420px">
                    <img src="{{ asset('images/gunung.png') }}" alt="Danau Kerinci" onerror="this.src='https://via.placeholder.com/600x400?text=Danau+Kerinci'">
                </div>
                <p class="mt-3">Lokasi: Kebun Baru, Kecamatan Kayu Aro Barat, Kabupaten Kerinci, Jambi</p>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>
</html>


