-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2024 pada 16.36
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
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(50) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `handphone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nik`, `email`, `password`, `handphone`) VALUES
(1, '131124', 'erwin14551@gmail.com', '$2y$10$u', '1231124'),
(2, '123125', 'erwin14552@gmail.com', '$2y$10$XlINJZyxfNvTIbH7JHNevuKt4cNbq1/xWfjHodmkEEQG1XY0wqPxK', '123124'),
(3, '13124124', 'Alkabane123@gmail.com', '$2y$10$gylRQIy7wZpf9lE4Ntc7EOw4xz6WM56GiJVHEcSdC2yPOKI63jPKG', '12315123'),
(4, '14444', 'erwin14552@gmail.com', '$2y$10$mWnWsvEDtwh.S/psyMcvE.tO0iZ/uJigOpXtwA3/PVSoFfmsG8dNO', '123125'),
(5, '123415', 'berkoh@gmail.com', '$2y$10$UUzhrKNqjj.DyN8L8vxtZuVvAP8xFAsQkXlyHZ2I96DIwoCABWsza', '1241234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
