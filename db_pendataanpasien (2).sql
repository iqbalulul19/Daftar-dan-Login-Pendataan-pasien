-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 11:25 AM
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
-- Database: `db_pendataanpasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(4) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `no_telp` decimal(12,0) NOT NULL,
  `agama` enum('Islam','kristen','hindu','buddha','konghucu','katolik') NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `gejala` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_kamar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama_lengkap`, `alamat`, `jk`, `no_telp`, `agama`, `tanggal_masuk`, `gejala`, `tempat_lahir`, `tanggal_lahir`, `no_kamar`) VALUES
(6, 'Dian As Haryani', 'karangroto', 'perempuan', '89787564566', 'Islam', '2022-10-02', 'Panas', 'Semarang', '2004-09-25', 1),
(7, 'Muhammad Zaky Akhtar', 'Sembungharjo', 'laki-laki', '8974635262', 'Islam', '2022-10-18', 'pusing', 'Semarang', '2003-11-01', 1),
(8, 'Muhamad Pandu Wibishono', 'Semarang Timur', 'laki-laki', '963356323', 'Islam', '2022-10-20', 'mencret', 'Semarang', '2004-11-01', 23),
(10, 'Tri Indriyani', 'Bedono', 'perempuan', '8567253726', 'Islam', '2022-10-30', 'pusing', 'Demak', '1997-11-30', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tempat_lahir`, `tanggal_lahir`) VALUES
(1, 'iqbal', '12345678', '', 0),
(2, 'iqbal', '12345678', 'Demak', 2005),
(3, 'iqbal', '12345678', 'Demak', 2005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
