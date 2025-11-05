@extends('desa wisata.layout.master')

@section('title', 'Gunung Kerinci')

@section('content')
   
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
                <a class="bi bi-cart" style="font-size:1.5rem" href="{{ route('produk.showProduk', 'store')}}"></a>
                <a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a>
                <a href="{{ route('register.create') }}" class="btn btn-dark">Register</a>
            </div> -->
        </div>
    </nav>


    <main class="container hero my-5">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 class="section-title">GUNUNG KERINCI</h2>
                <p class="text-justify mt-3">
                    Berlokasi di kawasan Kayu Aro, Kabupaten Kerinci, Provinsi Jambi, Gunung Kerinci berdiri megah sebagai gunung berapi tertinggi di Indonesia dan gunung tertinggi di Pulau Sumatera, dengan ketinggian mencapai 3.805 meter di atas permukaan laut. Gunung ini merupakan ikon kebanggaan masyarakat Kerinci sekaligus daya tarik utama wisata alam di kawasan Taman Nasional Kerinci Seblat (TNKS), yang telah diakui sebagai Warisan Dunia UNESCO.
                </p>
                <p class="text-justify">
                    Gunung Kerinci menawarkan pengalaman wisata yang luar biasa bagi para pencinta alam dan pendaki. Jalur pendakiannya dimulai dari Desa Kersik Tuo, Kecamatan Kayu Aro, yang menjadi gerbang utama pendakian. Dari sini, pendaki akan melewati hutan tropis yang lebat, sumber air alami, serta berbagai flora dan fauna endemik seperti burung rangkong, siamang, dan harimau sumatera.
                </p>
                <p class="text-justify">
                    Selain pendakian, kawasan Gunung Kerinci juga menyuguhkan pemandangan spektakuler. Dari puncaknya, pendaki dapat menyaksikan pemandangan Danau Kerinci, hamparan kebun teh Kayu Aro, dan garis pantai barat Sumatera di kejauhan. Udara sejuk, aroma hutan yang segar, dan suasana damai menjadikan kawasan ini destinasi sempurna untuk wisata petualangan dan ekowisata.
                </p>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <div class="img-frame mx-auto" style="max-width:420px">
                    <img src="{{ asset('images/gunung_kerinci.png') }}" alt="Danau Kerinci" onerror="this.src='https://via.placeholder.com/600x400?text=Danau+Kerinci'">
                </div>
                <a href="https://maps.app.goo.gl/TeNJLpPpKHi286GCA"class="mt-3">Lokasi: Lubuk Gadang Sel., Kec. Sangir, Kabupaten Solok Selatan, Sumatera Barat</a>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection