<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Kayu Aro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('style/css.css') }}" rel="stylesheet">
</head>
<body>
    <header class="top-banner header-banner">
        <div class="container">
            <div class="brand-row">
                <div class="brand-logo">
                    <svg width="72" height="72" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="6" y="20" width="52" height="30" rx="6" fill="#fff"/>
                        <path d="M8 24 L32 8 L56 24" stroke="#000" stroke-width="2" fill="none"/>
                        <path d="M20 38 L20 28 L28 28 L28 38" stroke="#000" stroke-width="1.5" fill="none"/>
                    </svg>
                </div>
                <h1 class="site-title m-0">DESA WISATA KAYU ARO</h1>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <div class="home-icon">
                    <i class="bi bi-house-door-fill" style="font-size:1.25rem"></i>
                </div>
                <div class="btn-group">
                    <button class="btn nav-pill px-4">WISATA <i class="bi bi-caret-down-fill ms-2"></i></button>
                    <button class="btn nav-pill px-4 ms-2">FASILITAS <i class="bi bi-caret-down-fill ms-2"></i></button>
                </div>
            </div>

            <div class="d-flex ms-auto align-items-center gap-2">
                <i class="bi bi-cart" style="font-size:1.5rem"></i>
                <button class="btn btn-outline-secondary">Sign in</button>
                <button class="btn btn-dark">Register</button>
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
                    <img src="{{ asset('images/danau-kerinci.jpg') }}" alt="Danau Kerinci" onerror="this.src='https://via.placeholder.com/600x400?text=Danau+Kerinci'">
                </div>
                <p class="mt-3">Lokasi: Kebun Baru, Kecamatan Kayu Aro Barat, Kabupaten Kerinci, Jambi</p>
            </div>
        </div>

        <div class="trademark text-center mt-5">Trademark™ 2025 - ALBATIN NOVRIYADI (7012400--), RIDRA PRATAMA KURNIAWAN (7012400--), TRI WAHYU NUGROHO (701240078)</div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
