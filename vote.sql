-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 11:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `nama_pemilih` varchar(225) NOT NULL,
  `pilihan` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `nama_pemilih`, `pilihan`, `tanggal`) VALUES
(1, 'Ghaida Fsy ', '4. Gilang Andhika Buwana (Ketua) & Aditya Firmansyah Diasmara (Wakil)', '2023-01-26'),
(3, 'Reza', '3. M Fachriza Farhan (Ketua) & Daffy Raisan Naufhal Kustiman (Wakil)', '2023-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(10) NOT NULL,
  `nama_kandidat` varchar(20) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `visi_misi` text NOT NULL,
  `img` int(11) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`, `npm`, `jabatan`, `visi_misi`, `img`, `prodi`) VALUES
(1234567, 'Ghaida Fasya', '714220031', 'Ketua', '...', 0, ''),
(3435436, 'Reza', '7145533888', 'Ketua', 'gatau', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `npm`, `username`, `prodi`) VALUES
(1, 'Ghaida Fasya', '714220031', 'ghaidafasya5@gmail.com', 'D4 Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(2, 'reza', '$2y$10$NAiePDQbyB1.66A.9CYbi.nti.Kbuo7.aVMcsbQwWLK9O6buSNk1C', ''),
(3, 'ghaidafsy', '$2y$10$msmkzF7EYIpXeT5nWTZzROSd2lhdb.lPvmWsRnZ1edvmQZyE/9DrS', ''),
(4, 'admin', 'admin123', 'admin'),
(5, 'gaga', '$2y$10$di7voAA4oCBtstPZp2I2F.ZbAeUmS4eKZ9/oJqsSy9aoXLfNZGBTu', ''),
(6, 'reja', '$2y$10$Dmu9jv/1EGDYUdJdCu.o5OE3uL5sihQLU0No.fY4n7j73spH7QaBK', ''),
(7, 'ghaidafsyy', '$2y$10$CTYRkNl7zirRmutrvxXcXuaDiJAjgfRjZjlrkceKde0/mtZQjhAvm', ''),
(8, 'ghaida', '$2y$10$rxdWILNrHIVw3jI1i/P5XuhJ/cdwwLSS22g0eY/tF7w/X6.khcxzm', ''),
(9, 'gatau', '$2y$10$ym.VAGgFG0Ja2isihGBFBO4FBEXTVhHy58ek./apKJ/g7cCk.DTMi', ''),
(10, 'rejaa', '$2y$10$qhZT94Md9WFHkEDZlX6YPucswaOcNOLMlz/YFZBg28VbtwfOOpqk.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=582582310;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;