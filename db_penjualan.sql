-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2021 pada 10.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'daruryugu', 'daru', 'daru', 'admin'),
(2, 'petugas', 'petugas', 'petugas', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `id_pemesanan` int(12) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `handphone` varchar(12) NOT NULL,
  `pesanan` varchar(20) NOT NULL,
  `jml_pemesanan` int(12) NOT NULL,
  `ukuran` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_penjualan`
--

INSERT INTO `t_penjualan` (`id_pemesanan`, `nama`, `alamat`, `handphone`, `pesanan`, `jml_pemesanan`, `ukuran`) VALUES
(1, 'Perdi', 'Green Apple Residence', '877233191', 'TSSD', 12, 'M'),
(5, 'Leni', 'yasmin residence IV', '2147483647', 'Percik Pesona', 13, 'XL'),
(7, 'Raihan Cendekia', 'Babelan', '087883055815', 'GhedeCokra ', 13, 'M'),
(8, 'Nova Triansyah Aziz', 'Bintara 9', '08979825135', 'TSSD', 13, 'M'),
(9, 'Rusmina', 'Galaxy', '085892121212', 'percik', 3, 'M'),
(10, 'Parjo ', 'Bulakapal', '087784460036', 'Sharkmove', 2, 'XXL'),
(11, 'Aidit', 'Rengas Dengklok', '08774460036', 'TSSD', 40, 'L'),
(12, 'Nico', 'Bekasi Timur', '087341192201', 'Chrisye', 10, 'XL'),
(13, 'Neneng', 'Babelan', '087743000992', 'Fariz RM', 3, 'L'),
(14, 'Charlesss', 'Jati Bening', '08772812131', 'Sharkmove', 2, 'L'),
(15, 'Raihan Cendekia', 'Villa Jatirasa ', '087743000992', 'Sharkmove', 19, 'L'),
(16, 'Raden Daruryugu', 'yasmin residence IV', '087743000992', 'Fariz RM', 12, 'M'),
(17, 'Raycendekia', 'Babelan', '087743000882', 'Chrisye', 3, 'L'),
(18, 'Raycendekia', 'Babelan', '087743000882', 'Chrisye', 3, 'L'),
(19, 'Neneng', 'Babelan', '08774321223', 'Chrisye', 3, 'L'),
(20, 'Nadia', 'Jakarta Selatan', '087743001229', 'Fariz RM', 3, 'L'),
(21, 'Raihan Cendekia', 'yasmin residence IV', '08773222119', 'TSSD', 19, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `t_penjualan`
--
ALTER TABLE `t_penjualan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_penjualan`
--
ALTER TABLE `t_penjualan`
  MODIFY `id_pemesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
