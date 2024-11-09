-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2024 pada 05.32
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
-- Database: `quiz1_ihwan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `NIDN` varchar(30) NOT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL,
  `Rumpun` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`NIDN`, `Nama_Lengkap`, `Rumpun`, `Tempat_Lahir`, `Tanggal_Lahir`, `Email`, `Jenis_kelamin`) VALUES
('234567', 'ihwan', 'Komputer', 'bm', '2024-11-09', 'ihwanariga.ia@gmail.com', 'Laki-Laki'),
('287383267832', 'andre', 'Bisnis', 'hongkong', '2024-11-28', 'andrean_mauliana@gmail.com', 'Laki-Laki'),
('475896425', 'masedan', 'Akuntansi', 'bireueueuen', '2024-10-28', 'mas01@gmail.com', 'Laki-Laki'),
('82362764', 'jokowinaldo', 'Bisnis', 'bandung', '2024-10-27', 'jokowinaldo72@gmail.com', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`NIDN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
