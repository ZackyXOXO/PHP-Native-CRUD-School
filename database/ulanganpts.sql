-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2022 pada 16.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulanganpts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_boba`
--

CREATE TABLE `tb_boba` (
  `id_barang` int(5) NOT NULL,
  `item` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `pack` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `isi` int(8) NOT NULL,
  `status` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_boba`
--

INSERT INTO `tb_boba` (`id_barang`, `item`, `merk`, `pack`, `qty`, `isi`, `status`) VALUES
(6, 'Oreo Susu', 'Fremit', 2, 6, 12, 'OK'),
(11, 'Jahe Wangi', 'Fremit', 5, 2, 10, 'Cukup'),
(12, 'Jamu Kencur', 'Fremit', 9, 12, 108, 'OK'),
(13, 'Apel Batu', 'Janji Jiwa', 5, 10, 50, 'OK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cust`
--

CREATE TABLE `tb_cust` (
  `id_cust` int(8) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `member` char(8) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cust`
--

INSERT INTO `tb_cust` (`id_cust`, `nama`, `member`, `alamat`) VALUES
(5, 'Haidar Kumara Ramadhan', 'Ya', 'Magelang'),
(10, 'Nur Wahid', 'Tidak', 'Pakis Kidul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_boba`
--
ALTER TABLE `tb_boba`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_cust`
--
ALTER TABLE `tb_cust`
  ADD PRIMARY KEY (`id_cust`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_boba`
--
ALTER TABLE `tb_boba`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_cust`
--
ALTER TABLE `tb_cust`
  MODIFY `id_cust` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
