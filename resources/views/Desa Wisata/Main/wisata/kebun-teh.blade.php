@extends('desa wisata.layout.master')

@section('title', 'Kebun Teh')

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
                <h2 class="section-title">KEBUN TEH</h2>
                <p class="text-justify mt-3">
                    Kebun Teh Kayu Aro adalah salah satu kebun teh tertua dan tertinggi di dunia, terletak di Kecamatan Kayu Aro, Kabupaten Kerinci, Provinsi Jambi. Berada di ketinggian sekitar 1.400–1.600 meter di atas permukaan laut, hamparan kebun teh ini menawarkan pemandangan hijau yang memanjakan mata dengan latar megah Gunung Kerinci, gunung berapi tertinggi di Indonesia.
                </p>
                <p class="text-justify">
                    Dibuka sejak masa kolonial Belanda pada awal abad ke-20, kebun ini dikelola oleh perusahaan Belanda NV. HVA (Handelsvereeniging Amsterdam) dan kini menjadi bagian dari PT Perkebunan Nusantara VI (PTPN VI). Hingga saat ini, teh Kayu Aro tetap dikenal sebagai teh hitam premium dengan cita rasa khas dan aroma segar yang diekspor ke berbagai negara, termasuk Inggris dan Belanda.
                </p>
                <p class="text-justify">
                    Selain menyuguhkan panorama alam yang indah, Kebun Teh Kayu Aro juga menjadi destinasi wisata edukatif dan fotografi. Pengunjung dapat berjalan di antara barisan tanaman teh yang rapi, menikmati udara segar pegunungan, hingga mengunjungi pabrik pengolahan teh tua peninggalan Belanda yang masih beroperasi hingga kini.
                </p>
                <p class="text-justify">
                    Kebun teh ini juga menjadi titik favorit untuk melihat sunrise di kaki Gunung Kerinci, menjadikannya tempat ideal bagi wisatawan yang mencari ketenangan dan keindahan alam yang autentik.
                </p>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <div class="img-frame mx-auto" style="max-width:420px">
                    <img src="{{ asset('images/kebun_teh.png') }}" alt="Kebun Teh" onerror="this.src='https://via.placeholder.com/600x400?text=Kebun+Teh'">
                </div>
                <a href="https://maps.app.goo.gl/NqXikirCv2Qbe8HY8"class="mt-3">Lokasi: Kecamatan Kayu Aro Barat, Kabupaten Kerinci, Jambi</a>
            </div>
        </div>

    </main>

    {{-- Jika layout belum menyertakan JS, tambahkan; biasanya script berada di master --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection