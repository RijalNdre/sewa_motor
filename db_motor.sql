-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2022 pada 14.06
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
-- Database: `motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `alamat`, `username`, `password`) VALUES
(1, 'Rizal Andrias', 'Kebumen', 'rizal', '123'),
(3, 'Sahrul Ibad', 'Jenggawah', 'ibad', '12124');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `harga_sewa` double NOT NULL,
  `status_motor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id_motor`, `no_polisi`, `merk`, `tahun`, `harga_sewa`, `status_motor`) VALUES
(1, 'AA 123 BM', 'Honda Supra', '2012', 30000, 'Aktif'),
(2, 'AA 234 BM', 'Suzuki', '2020', 40000, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_order` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `no_polisi` varchar(25) NOT NULL,
  `tujuan` varchar(90) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `harga_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_order`, `id_motor`, `id_akun`, `nama`, `no_ktp`, `alamat`, `no_telp`, `no_polisi`, `tujuan`, `tgl_order`, `tgl_kembali`, `lama_sewa`, `harga_total`) VALUES
(1, 0, 0, 'fsfeefe', '1234345', 'sdfsrefrg', '123424656823', '1', 'sfeseff', '2022-11-26', '0000-00-00', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
