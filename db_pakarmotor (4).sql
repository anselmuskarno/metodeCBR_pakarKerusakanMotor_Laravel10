-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 21.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pakarmotor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalamotors`
--

CREATE TABLE `gejalamotors` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `jenis_gejala` varchar(255) NOT NULL,
  `kode_kerusakan` varchar(255) NOT NULL,
  `bobot_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejalamotors`
--

INSERT INTO `gejalamotors` (`id`, `kode_gejala`, `jenis_gejala`, `kode_kerusakan`, `bobot_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G01', 'Saat motor distarter atau diengkol mesin tidak hidup', 'K01', '0.50', NULL, '2023-07-21 18:22:20'),
(2, 'G02', 'Mesin sepeda motor tidak mau hidup padahal bensin masih penuh', 'K01', '0.50', NULL, '2023-07-21 18:22:48'),
(5, 'G03', 'Ban kurang angin', 'K04', '0.50', '2023-07-21 06:03:36', '2023-07-21 18:28:34'),
(6, 'G04', 'Roda tidak stabil', 'K04', '0.25', '2023-07-21 06:18:28', '2023-07-21 18:28:55'),
(7, 'G05', 'Terdengar suara kasar pada saat motor jalan', 'K04', '0.75', '2023-07-21 06:19:00', '2023-07-21 18:29:11'),
(8, 'G06', 'Saat motor distarter, mesin tidak mau hidup, tetapi saat dihidupkan, mesin hidup', 'K01', '0.50', '2023-07-21 06:19:37', '2023-07-21 18:23:12'),
(9, 'G07', 'Terdengar suara berisik dari sudut kiri bawah mesin', 'K04', '0.50', '2023-07-21 06:20:16', '2023-07-21 18:29:34'),
(10, 'G08', 'Busi masih memercikan api', 'K03', '0.25', '2023-07-21 06:21:46', '2023-07-21 18:27:17'),
(11, 'G09', 'Kabel stater mati', 'K02', '0.25', '2023-07-21 06:22:08', '2023-07-21 18:26:05'),
(12, 'G10', 'Kabel lampu cepat putus', 'K02', '0.50', '2023-07-21 06:22:26', '2023-07-21 18:26:29'),
(13, 'G11', 'Aki cepat habis atau drop', 'K02', '0.50', '2023-07-21 06:22:48', '2023-07-21 18:26:50'),
(14, 'G12', 'Terdapat kebocoran oli pada bagian mesin', 'K01', '0.25', '2023-07-21 06:23:16', '2023-07-21 18:23:31'),
(15, 'G13', 'Pada saat digas suara mesin kasar dan menimbulkan getaran', 'K01', '0.25', '2023-07-21 06:23:38', '2023-07-21 18:23:52'),
(16, 'G14', 'CDI korslet', 'K03', '0.25', '2023-07-21 06:23:54', '2023-07-21 18:27:35'),
(17, 'G15', 'Sepul mengalami kerusakan', 'K03', '0.50', '2023-07-21 06:24:16', '2023-07-21 18:27:51'),
(18, 'G16', 'Koil terputus atau lepas dari sepul pengapian', 'K03', '0.75', '2023-07-21 06:24:47', '2023-07-21 18:28:14'),
(19, 'G17', 'Suara mesin motor kasar dan keras', 'K01', '0.80', '2023-07-21 06:25:07', '2023-07-21 18:24:11'),
(20, 'G18', 'Keluar asap putih dari knalpot pada start', 'K01', '0.80', '2023-07-21 06:26:10', '2023-07-21 18:24:26'),
(21, 'G19', 'Tenaga Mesin Berkurang', 'K01', '0.80', '2023-07-21 06:26:31', '2023-07-21 18:24:40'),
(22, 'G20', 'Mesin sering mati saat gas diturunkan', 'K01', '0.80', '2023-07-21 06:27:04', '2023-07-21 18:24:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakanmotors`
--

CREATE TABLE `kerusakanmotors` (
  `id` int(11) NOT NULL,
  `kode_kerusakan` varchar(255) NOT NULL,
  `nama_kerusakan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerusakanmotors`
--

INSERT INTO `kerusakanmotors` (`id`, `kode_kerusakan`, `nama_kerusakan`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'Kerusakan Mesin', NULL, NULL),
(3, 'K02', 'Kerusakan Kelistrikan', '2023-07-21 06:16:54', '2023-07-21 06:16:54'),
(4, 'K03', 'Kerusakan Pengapian', '2023-07-21 06:17:11', '2023-07-21 06:17:11'),
(5, 'K04', 'Kerusakan Penggerak Roda', '2023-07-21 06:17:30', '2023-07-21 06:17:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejalamotors`
--
ALTER TABLE `gejalamotors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerusakanmotors`
--
ALTER TABLE `kerusakanmotors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejalamotors`
--
ALTER TABLE `gejalamotors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `kerusakanmotors`
--
ALTER TABLE `kerusakanmotors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
