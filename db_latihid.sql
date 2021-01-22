-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 02:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihid`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'LatihID Modul'),
(2, 'LatihID Talks'),
(3, 'Pemasaran'),
(4, 'Manajemen'),
(5, 'Operasional'),
(6, 'Bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `nama_modul` varchar(128) NOT NULL,
  `harga_modul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `harga_modul`) VALUES
(1, 'Strategi Pemasaran untuk UMKM', 21000),
(2, 'Menemukan Ide dan Perencanaan Usaha di Desa', 30000),
(3, 'Memahami Business Model Canvas untuk UMKM', 22000),
(4, 'Memahami Analisa Rantai Nilai UMKM', 25000),
(5, 'Pentingnya Content Planning bagi Bisnis', 0),
(6, 'Memilih Pelanggan Baru atau Pelanggan Lama ala Customer', 0),
(7, 'Pentingnya Izin Usaha Bagi UMKM', 0),
(8, 'Copywriting untuk Meningkatkan Penjualan Bisnis Kita', 0),
(9, 'Membangun Loyalitas Pegawai UMKM', 0),
(10, 'Branding Sebagai Kunci Keberhasilan UMKM', 0),
(11, 'LIT 17 - Serba-serbi Perizinan Hukum dalam Bisnis Kuliner', 0),
(12, 'LIT 16 - Jurus Ampuh Memaksimalkan Marketplace', 0),
(13, 'LIT 15 - Membangun Mental Usaha', 0),
(14, 'LIT 14 - Bisnis Sejak Kuliah, Mengapa Tidak?', 0),
(15, 'LIT 13 - Psikologi Marketing', 0),
(16, 'LatihID (LIT) | Workshop Series Bicara Dunia Usaha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modul_kategori`
--

CREATE TABLE `modul_kategori` (
  `id_modul` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul_kategori`
--

INSERT INTO `modul_kategori` (`id_modul`, `id_kategori`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(1, 3),
(2, 6),
(3, 6),
(4, 4),
(5, 6),
(6, 6),
(7, 5),
(8, 6),
(9, 6),
(9, 5),
(10, 5),
(11, 5),
(12, 4),
(13, 5),
(14, 6),
(15, 4),
(16, 4),
(4, 3),
(6, 3),
(8, 3),
(10, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
