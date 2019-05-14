-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2019 pada 05.50
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(40) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ketbayar` text NOT NULL,
  `catatan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `nama`, `ketbayar`, `catatan`, `waktu`) VALUES
(26, 'Malika', 'Jakarta', ' Diterima', '2019-05-13 02:16:55'),
(27, 'mia', 'jambi', 'di proses', '2019-05-14 03:00:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usia` int(100) NOT NULL,
  `nim` int(50) NOT NULL,
  `jurusan` text NOT NULL,
  `biografi` text NOT NULL,
  `gender` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `website`, `email`, `level`) VALUES
(1, 'kk', 'kk', 18, 2147483647, 'Teknik Informatika', 'nnnn', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah76@gmail.com', 'admin'),
(2, 'jojo', 'jojo', 18, 2147483647, 'Sistem Komputer', 'njki', 'Laki - Laki', 'www.fasilkom.com', 'sitinurhanifah34@gmail.com', 'admin'),
(3, 'mkl', 'mm', 12, 2147483647, 'Teknik Informatika', 'mkloi', 'Laki - Laki', 'www.fasilkom.com', 'sitinurhanifah76@gmail.com', 'manager'),
(4, 'bb', 'bb', 18, 1234567890, 'Sistem Komputer', 'mm', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah7600@gmail.com', 'manager'),
(5, '', '', 0, 0, '', '', '', '', '', ''),
(6, 'ww', 'ss', 12, 2147483647, 'Teknik Informatika', 'aaaaaaa', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah34@gmail.com', 'manager'),
(7, 'njk', 'njk', 22, 2147483647, 'Sistem Informasi', 'njkiu', 'Laki - Laki', 'www.fasilkom.com', 'sitinurhanifah76@gmail.com', 'manager'),
(8, 'PP', 'PP', 22, 2147483647, 'Teknik Informatika', 'JKJ', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah34@gmail.com', 'manager'),
(9, 'hanifah', '6789', 22, 2147483647, 'Sistem Informasi', 'jjjjj', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah76@gmail.com', 'admin'),
(10, 'mm', 'mm', 22, 2147483647, 'Teknik Informatika', 'mklhol', 'Perempuan', 'www.fasilkom.com', 'sitinurhanifah76@gmail.com', 'admin'),
(11, 'cf', 'cf', 22, 0, '', '', 'Perempuan', '', 'sitinurhanifah76@gmail.com', 'admin'),
(12, 'hn', 'hn', 22, 0, '', '', 'Perempuan', '', 'sitinurhanifah76@gmail.com', 'admin'),
(13, 'lop', 'lop', 22, 0, '', '', 'Perempuan', '', 'sitinurhanifah76@gmail.com', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
