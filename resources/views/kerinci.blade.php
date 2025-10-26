<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Kayu Aro - Danau Kerinci</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .brand-row { display:flex; align-items:center; gap:12px; }
        .site-title { font-family: 'Dela Gothic One', sans-serif; font-size:1.3rem; }
        .img-frame img { width:100%; height:auto; border-radius:6px; }
        .trademark { font-size:.85rem; color:#666; }
    </style>
</head>
<body>

    <!-- Top banner -->
    <header class="top-banner py-3 bg-light">
        <div class="container">
            <div class="brand-row">
                <div class="brand-logo">
                    <!-- small SVG logo -->
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="6" y="20" width="52" height="30" rx="3" fill="#fff"/>
                        <path d="M8 24 L32 8 L56 24" stroke="#000" stroke-width="2" fill="none"/>
                        <path d="M20 38 L20 28 L28 28 L28 38" stroke="#000" stroke-width="1.5" fill="none"/>
                    </svg>
                </div>
                <h1 class="site-title m-0">DESA WISATA KAYU ARO</h1>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-white py-3" aria-label="Main navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}"><i class="bi bi-house-door-fill"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Wisata
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Danau Kerinci</a></li>
                            <li><a class="dropdown-item" href="#">Kebun Teh</a></li>
                            <li><a class="dropdown-item" href="#">Desa Aro</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-building"></i> Fasilitas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Danau Kerinci</a></li>
                            <li><a class="dropdown-item" href="#">Kebun Teh</a></li>
                            <li><a class="dropdown-item" href="#">Desa Aro</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart-fill"></i> Keranjang</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
                    <a class="btn btn-dark ms-2" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container my-5">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 class="section-title">DANAU KERINCI</h2>
                <p class="text-justify mt-3">
                    Terletak di wilayah Kabupaten Kerinci, Provinsi Jambi, tidak jauh dari kawasan Kayu Aro, terdapat sebuah destinasi alam yang menakjubkan Danau Kerinci. Danau ini merupakan danau alami terbesar di Provinsi Jambi, dengan luas mencapai sekitar 4.200 hektar, berada di ketinggian ±783 meter di atas permukaan laut.
                </p>
                <p class="text-justify">
                    Dikelilingi oleh perbukitan hijau dan udara yang sejuk, Danau Kerinci menawarkan pemandangan alam yang menenangkan dan memesona. Permukaan airnya yang biru jernih memantulkan bayangan langit dan pegunungan di sekitarnya, menciptakan suasana damai yang sangat cocok untuk bersantai, berfoto, atau menikmati matahari terbenam di tepian danau.
                </p>
                <p class="text-justify">
                    Selain keindahan alamnya, kawasan Danau Kerinci juga menjadi pusat berbagai aktivitas wisata dan budaya. Setiap tahun diadakan Festival Danau Kerinci, yang menampilkan beragam kesenian tradisional, lomba perahu, hingga pameran hasil bumi dan kerajinan masyarakat lokal.
                </p>
            </div>
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <div class="img-frame mx-auto" style="max-width:420px">
                    <img src="{{ asset('images/danau-kerinci.jpg') }}" alt="Danau Kerinci" onerror="this.src='https://via.placeholder.com/600x400?text=Danau+Kerinci'">
                </div>
            </div>
        </div>

        <div class="trademark text-center mt-5">Trademark™ 2025 - ALBATIN NOVRIYADI (7012400--), RIDRA PRATAMA KURNIAWAN (7012400--), TRI WAHYU NUGROHO (701240078)</div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
