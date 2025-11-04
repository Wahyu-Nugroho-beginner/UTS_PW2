-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2025 pada 09.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `jumlah_produk`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Anyaman bambu / rotan Kerinci (keranjang kecil)', 120, 45000, 'anyaman_bambu_kerinci_keranjang.jpg', NULL, NULL),
(2, 'Tikar pandan Kerinci', 100, 30000, 'tikar_pandan_kerinci.jpg', NULL, NULL),
(3, 'Hiasan dinding kayu ukir motif alam Kerinci', 60, 90000, 'hiasan_kayu_ukir_kerinci.jpg', NULL, NULL),
(4, 'Tas kecil souvenir rotan/anyaman Kerinci', 90, 55000, 'tas_rotan_kerinci_souvenir.jpg', NULL, NULL),
(5, 'lampu hias bambu Kerinci', 70, 65000, 'lampu_bambu_kerinci.jpg', NULL, NULL);
(6, 'buah strawberry segar', 200, 15000, 'buah_strawberry.jpg', NULL, NULL),
(7, 'teh kayu aro', 150, 25000, 'daun_teh.jpg', NULL, NULL),
(8, 'dodol kentang', 80, 20000, 'dodol_kentang_kerinci.jpg', NULL, NULL),
(9, 'kladito', 120, 30000, 'kladito.jpg', NULL, NULL),
(10, 'kopi kayu aro', 180, 40000, 'kopi_arabika.jpg', NULL, NULL),
(11, 'kue kembang', 90, 15000, 'kue_kembang.jpg', NULL, NULL),~
(12, 'madu hutan', 60, 50000, 'toples_madu.jpg', NULL, NULL);


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
