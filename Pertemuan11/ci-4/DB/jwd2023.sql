-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2023 pada 08.52
-- Versi server: 5.7.33
-- Versi PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd2023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `nim` char(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prodi`, `created_at`) VALUES
(13, '19272737', 'Zikri Aliyatul', 'Teknik Informatika', '2023-07-22 20:27:33'),
(15, '160111023', 'Susi Susanti Purba', 'Teknik Informatika', '2023-07-22 20:27:33'),
(16, '160111024', 'Sulisdawati Manurung', 'Manajemen Informatika', '2023-07-22 20:27:33'),
(17, '160111025', 'Sari Ayu Selvana Limbong', 'Manajemen Informatika', '2023-07-22 20:27:33'),
(18, '160111026', 'Dhea Audina ', 'Teknik Informatika', '2023-07-22 20:27:33'),
(19, '160111027', 'Ratna Noviani', 'Teknik Informatika', '2023-07-22 20:27:33'),
(38, '423423432', 'sadasd', 'Akuntansi', '2023-07-22 20:27:33'),
(48, '3243423', 'Nama baru', 'Teknik Informatika', '2023-07-22 20:27:33'),
(41, '234234', 'sdasdas', 'Teknik Rekayasa Multimedia', '2023-07-22 20:27:33'),
(42, '12912843128', 'Edit Lagi', 'Teknik Rekayasa Multimedia', '2023-07-22 20:27:33'),
(43, '192712721', 'Edit', 'Teknologi Rekayasa Keamanan Jaringan', '2023-07-22 20:27:33'),
(44, '13123123', 'sdadsad', 'Teknik Rekayasa Multimedia', '2023-07-22 20:27:33'),
(45, '2423423', 'dasdasd', 'Teknologi Rekayasa Keamanan Ja', '2023-07-22 20:27:33'),
(46, '4234234', 'asdasdasdas', 'Teknologi Rekayasa Keamanan Ja', '2023-07-22 20:27:33'),
(47, '3432423', 'asdasdasd', 'Teknologi Rekayasa Keamanan Jaringan', '2023-07-22 20:27:33'),
(51, '345345345', 'sdadasd', 'Teknik Rekayasa Multimedia', '2023-07-22 21:47:06'),
(53, '123456789', 'Nama Baru', 'Teknologi Rekayasa Keamanan Jaringan', '2023-07-22 21:47:20'),
(54, '12345678912', 'EDIT', 'Teknologi Rekayasa Keamanan Jaringan', '2023-07-22 21:47:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `created_at`) VALUES
(1, 'budi', '$2y$10$NIi.Mj2yvahsoIdtWgD9tO8QuHFYlf0Jj77Mra4AggwOXOWJ3/2S6', 'budi', '2023-07-22 20:27:47'),
(2, 'admin', '$2y$10$NIi.Mj2yvahsoIdtWgD9tO8QuHFYlf0Jj77Mra4AggwOXOWJ3/2S6', 'Administrator', '2023-07-22 20:27:47'),
(5, 'coba', '$2y$10$bDgGc0KFv.TkWkTOmmAo0.KZEeFXdajlx66Pv3aU./VcJrzKWgU5G', 'Coba Akun', '2023-07-23 13:26:57'),
(6, 'rizqillah', '$2y$10$d6PbazDXikc4uNcEyzpj0.WQ8C12cv19HfMCrWNpBcvdXt1BAZudq', 'RIZQILLAH', '2023-07-23 15:33:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
