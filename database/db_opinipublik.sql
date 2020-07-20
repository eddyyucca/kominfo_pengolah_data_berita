-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2019 pada 14.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_opinipublik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `level`) VALUES
(2, 'kacung', '202cb962ac59075b964b', 'Ad'),
(3, 'sasas', 'caf1a3dfb505ffed0d02', 'Admin'),
(4, 'hilman', '202cb962ac59075b964b07152d234b70', 'Admin'),
(5, 'fathur', '202cb962ac59075b964b07152d234b70', 'Admin'),
(7, 'eddy', '202cb962ac59075b964b07152d234b70', ''),
(8, 'jarwo', '202cb962ac59075b964b07152d234b70', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `sumber` varchar(25) NOT NULL,
  `sektor` varchar(50) NOT NULL,
  `sentimen` varchar(25) NOT NULL,
  `tautan` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `sarana` text NOT NULL,
  `ringkasan` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `sumber`, `sektor`, `sentimen`, `tautan`, `rekomendasi`, `sarana`, `ringkasan`, `status`) VALUES
(2, 'fathur', '', 'dsadsa', 'Kepemudaan & olahraga', 'Positif', 'dasdasd', 'dsadsadsa', 'sdadsad', 'sadasd', ''),
(4, 'aa', '', 'saadasdsadsa', 'Budaya & pariwisata', 'Negatif', 'sadasdsadasd', 'dsadsasad', 'sadasdsadsadas', 'sadasdas', ''),
(6, 'sasas', '', 'sasa', 'Kepemudaan & olahraga', 'Netral', 'sasa', 'asass', 'sasa', 'asa', '2'),
(7, '', '', '', '', '-- PILIH --', '', '', '', '', '2'),
(8, 'sasa', '', '', '', '-- PILIH --', '', '', '', '', '2'),
(9, 'konsul', '', '', '', '-- PILIH --', '', '', '', '', '2'),
(10, 'tes', '', 'vsvs', 'Budaya & pariwisata', 'Negatif', 'vvvvdvddgd', 'czcc', 'cvsvdbd', 'bddgd', '2'),
(11, 'tes konsul', '', 'www.google.com', 'Linkongan & satwa', 'Negatif', 'wwwfdff', 'dvdv', 'cscs', 'cscs', '2'),
(12, 'berita bola', '2019-12-27', 'vsvs', 'Teknologi & informasi', 'Negatif', 'vvvvdvddgd', 'saas', 'sasa', 'sasa', '2'),
(13, 'pertama', '2019-12-28', 'sas', 'Teknologi & informasi', 'Negatif', 'sasa', 'sa', 'as', 'sa', '2'),
(14, 'awae', '', '', '', '-- PILIH --', '', '', '', '', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_berita`
--

CREATE TABLE `status_berita` (
  `id_status` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_berita`
--
ALTER TABLE `status_berita`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `status_berita`
--
ALTER TABLE `status_berita`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
