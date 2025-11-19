@extends('desa wisata.layout.master')

@section('title', 'Kebun Strawberry')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <a class="home-icon" href="{{ route('home.index2') }}">
                    <i class="bi bi-house-door-fill" style="font-size:1.25rem"></i>
                </a>

                <div class="btn-group">
                    <button type="button" class="btn nav-pill dropdown-toggle px-4" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        WISATA
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'kebun-teh') }}">Kebun Teh</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'kebun-kayu-manis') }}">Kebun Kayu
                                Manis</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'kebun-strawberry') }}">Kebun
                                Strawberry</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'gunung-kerinci') }}">Gunung Kerinci</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'air-terjun') }}">Air Terjun</a></li>
                        <li><a class="dropdown-item" href="{{ route('wisata.show', 'danau-kerinci') }}">Danau Kerinci</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn nav-pill dropdown-toggle px-4" data-bs-toggle="dropdown"
                        aria-expanded="false">
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
                        <div class="d-flex ms-auto align-items-center gap-2">
                            <a class="bi bi-cart" style="font-size:1.5rem"
                                href="{{ route('produk.showProduk', 'store')}}"></a>
                        </div>

                    </div>
            </div>
            @if(session('user_id'))
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle"></i> {{ session('username') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
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
                    <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a>
                    <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                    <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
                </div> -->
        </div>
    </nav>


    <main class="container hero my-5">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 class="section-title">KEBUN STRAWBERRY</h2>
                <p class="text-justify mt-3">
                    Selain terkenal dengan hamparan kebun teh dan keindahan Gunung Kerinci, Kayu Aro juga memiliki daya
                    tarik wisata yang tak kalah menarik Kebun Stroberi Kayu Aro. Terletak di dataran tinggi yang sejuk
                    dengan udara bersih dan pemandangan pegunungan yang menawan, kebun stroberi ini menjadi destinasi
                    favorit wisata keluarga dan anak muda yang berkunjung ke Kabupaten Kerinci, Jambi.
                </p>
                <p class="text-justify">
                    Di sini, pengunjung dapat memetik stroberi langsung dari kebunnya, sambil menikmati suasana pedesaan
                    yang asri. Stroberi yang ditanam memiliki cita rasa manis segar, hasil dari tanah subur dan suhu sejuk
                    Kayu Aro yang ideal untuk pertanian hortikultura.
                </p>
                <p class="text-justify">
                    Selain aktivitas petik buah, wisatawan juga dapat menikmati minuman dan olahan stroberi lokal seperti
                    jus, selai, dan dodol stroberi buatan masyarakat sekitar. Area kebun yang tertata rapi dan berlatar
                    pemandangan Gunung Kerinci menjadikannya tempat yang sangat fotogenik cocok untuk bersantai maupun
                    berburu foto alam.
                </p>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <div class="img-frame mx-auto" style="max-width:420px">
                    <img src="{{ asset('images/kebun_strawberry.png') }}" alt="Danau Kerinci"
                        onerror="this.src='https://via.placeholder.com/600x400?text=Danau+Kerinci'">
                </div>
                <a href="https://maps.app.goo.gl/ToX6Ray52JMawAP78" class="mt-3">Lokasi: Kebun Baru, Kecamatan Kayu Aro
                    Barat, Kabupaten Kerinci, Jambi</a>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection