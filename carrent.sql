-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 12:31 AM
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
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(50) NOT NULL,
  `deskripsi_service` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id_service`, `nama_service`, `deskripsi_service`, `harga`, `foto`) VALUES
(1, 'Avanza', 'Basic \r\n', 'IDR 150.000,00/Hari', 'demos/pet/images/services/8.png'),
(2, 'Innova', 'Premium Packkage', 'IDR 175.000,00/hari', 'demos/pet/images/services/8.png'),
(3, 'Mercedez  Benz', 'Vip', 'IDR 500.000,00/hari', 'demos/pet/images/services/8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` enum('Pending','Confirmed') NOT NULL,
  `alamat` text NOT NULL,
  `delivery` enum('courier','self') NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_service`, `id_user`, `tgl_transaksi`, `status`, `alamat`, `delivery`, `catatan`) VALUES
(3, 1, 5, '2023-07-09', 'Pending', 'Jl. Anggrek No. 14 Tlogomas', 'courier', 'Rumah warna kuning, dekat masjid'),
(4, 1, 5, '2023-07-09', 'Pending', 'STIKI Malang', 'self', 'Tolong yang bersih ya!'),
(7, 1, 2, '2023-07-13', 'Pending', 'Perumahan Graha Valencia Blok E-14 Sawojajar', 'courier', 'Sepatu saya titipkan satpam kampus ya');

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
(5, 'ken', '$2y$10$0ZxU9PjezhgIb2CxywyrTekV20ulmNjW78jEMH/97xl3UyZWNtpAu', 'Ken Bagus Panuluh', 'ken@email.com', '08567384929', 'user'),
(7, 'Rayest_', '$2y$10$Yrb2p33eGK346vm6Uji8beGV2mq9Y1f0j51yOpTaGCpPI8rrXxwlC', 'Ray', 'Rayest@gmail.com', '0845611992', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `tbl_service` (`id_service`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
