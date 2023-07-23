-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapatocare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(25) NOT NULL,
  `deskripsi_service` varchar(100) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id_service`, `nama_service`, `deskripsi_service`, `harga`) VALUES
(1, 'Cuci Keseluruhan', 'Cuci sepatu standart secara keseluruhan sampai bersih', '50000'),
(2, 'Reglue Sepatu', 'Rekatkan ulang bagian sepatu yang terbuka', '75000'),
(3, 'Repainting Sepatu', 'Cat ulang sepatu anda sesuai yang anda inginkan', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `email`, `no_telp`, `level`) VALUES
(1, 'admin', '$2y$10$bmB2NBnlRls5cZAV8gFLUelN1vVxNHenIPgmTwbwzPNQMKAglCmrK', 'Admin', '', '', 'admin'),
(2, 'user', '$2y$10$FthR89ufRflIddAtBg5neu9v2CxEcB0GJyHVU/fz7GO3UE9kG5UsW', 'User', 'user@email.com', '08123123123', 'user'),
(5, 'ken', '$2y$10$0ZxU9PjezhgIb2CxywyrTekV20ulmNjW78jEMH/97xl3UyZWNtpAu', 'ken', 'ken@email.com', '123123', 'user'),
(6, 'herlin', '$2y$10$eDkSpPZxHQmciQE.Ak45s.BK/KdRTjmqZHA4vKrU48n8nesLUF6JW', 'Herlin Pirena', 'herlin@email.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
