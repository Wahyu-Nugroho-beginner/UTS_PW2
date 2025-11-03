@extends('desa wisata.layout.master')

@section('title', 'ATV')

@section('content')

<div class="fasilitas-banner">
	<div class="banner-images">
		<div class="banner-img">
			<img src="{{ asset('images/atv1.jpg') }}" alt="ATV 1" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+1'">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/atv2.jpg') }}" alt="ATV 2" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+2'">
		</div>
		<div class="banner-img">
			<img src="{{ asset('images/atv3.jpg') }}" alt="ATV 3" onerror="this.src='https://via.placeholder.com/800x360?text=ATV+3'">
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

<section class="atv-section">
	<h3 class="section-title">SEWA & PANDUAN ATV</h3>
	<p class="text-justify mx-auto" style="max-width:900px; margin-top:12px">Nikmati pengalaman off-road dengan ATV di kawasan Kayu Aro. Kami menyediakan kendaraan yang terawat, instruktur berpengalaman, serta paket sewa fleksibel untuk semua tingkat kemampuan.</p>

	<div class="atv-cards mt-4">
		<div class="atv-card">
			<img src="{{ asset('images/atv_small1.jpg') }}" alt="ATV" onerror="this.src='https://via.placeholder.com/260x160?text=ATV'">
			<div class="card-body">
				<h5>Paket 1 - 30 Menit</h5>
				<p class="small">Cocok untuk pemula. Instruktur & helm disediakan.</p>
			</div>
		</div>
		<div class="atv-card">
			<img src="{{ asset('images/atv_small2.jpg') }}" alt="ATV" onerror="this.src='https://via.placeholder.com/260x160?text=ATV'">
			<div class="card-body">
				<h5>Paket 2 - 1 Jam</h5>
				<p class="small">Rute lebih panjang, cocok untuk petualang.</p>
			</div>
		</div>
	</div>

	<div class="footer-text mt-5">Trademark™ 2025 - ALBATIN NOVRIYADI (70124000--), RIDRA PRATAMA KURNIAWAN (70124000--), TRI WAHYU NUGROHO (70124078)</div>
</section>

@endsection