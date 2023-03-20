-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2023 pada 00.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nabil_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(2, 'Kepolisian'),
(3, 'kehutanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `is_active` enum('active','not_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama_lengkap`, `username`, `password`, `telepon`, `is_active`) VALUES
(1, '12345', 'Andika Zull', 'dika', '$2y$10$FUoYcQWSd3dR4ubq5E5AdOPvToi7Yn7P.fPT6o1sd2tSLHuIvvbKq', '08967753452', 'active'),
(2, '334242943912', 'nabil', 'nabilbil', '$2y$10$ogdE1f3uKTpLJp75w2f9CuaXP.20WzPZIfV9lmq.ekog3AWTLxLZm', '081331212421', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `id_subkategori`, `id_kategori`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(8, '2023-02-28', 1, 0, '12345', 'adawdaw', 'donlod8.jpg', 'selesai'),
(9, '2023-02-28', 2, 0, '12345', 'adawdaassss', 'donlod9.jpg', 'proses'),
(10, '2023-02-28', 1, 0, '12345', 'asdawdad', 'download14.jpg', 'proses'),
(11, '2023-03-12', 4, 2, '12345', 'adas', 'DFD_lvl_1_pengaduan(1).jpg', 'selesai'),
(12, '2023-03-14', 1, 1, '12345', 'kebakaran kucing', 'DSC_0656.JPG', '0'),
(13, '2023-03-14', 4, 2, '12345', 'macet pa', 'https___asset_kgnewsroom_com_photo_pre_2023_02_09_fc123fcb-a671-4cff-9b87-0c85297e8a16_jpeg.jpeg', 'selesai'),
(14, '2023-03-14', 4, 2, '334242943912', 'awdawd', 'Diagram_Tanpa_Judul.jpg', '0'),
(15, '2023-03-14', 4, 2, '12345', 'adxsadssdfdbfdzvdnb', 'https___asset_kgnewsroom_com_photo_pre_2023_02_09_fc123fcb-a671-4cff-9b87-0c85297e8a16_jpeg1.jpeg', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telpon`, `level`) VALUES
(1, 'admin', 'admin', '$2y$10$axNTqDg5mhoHByj5ealBounyMx6JeaovbLfT3pHsqogij6t4P5o6e', '0811118886667', 'admin'),
(6, 'hana', 'hanaisan', '$2y$10$WYPXHNkr/qDCd2UmcloBfuY998b.73nPhvijA8t.RGDQ3FQwfXSny', '081324242422', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`id_subkategori`, `id_kategori`, `subkategori`) VALUES
(1, 1, 'Kebakaran '),
(4, 2, 'Kemacetan'),
(5, 1, 'Longsor'),
(6, 1, 'halo dek'),
(7, 3, 'hutan roboh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(7, 8, '2023-02-28', 'masuk', 1),
(8, 9, '2023-02-28', 'cobaa', 1),
(9, 10, '2023-02-28', 'okee dehh', 1),
(10, 8, '2023-03-14', 'udah su', 1),
(11, 11, '2023-03-14', 'Sedang dikerjakan', 1),
(12, 13, '2023-03-14', 'yowes', 6),
(13, 13, '2023-03-14', 'wes nyoh', 6),
(14, 11, '2023-03-14', 'wes nyoh', 6),
(15, 15, '2023-03-14', 'adsfcd', 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id_subkategori`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id_subkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
