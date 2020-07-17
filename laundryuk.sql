-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 01:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundryuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `lapor_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `laundry_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`lapor_id`, `pelanggan_id`, `laundry_id`, `id`, `laporan`) VALUES
(1, 4, 23, 1, 'celana hitamnya sobek');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `laundry_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_laundry` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `desc_laundry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`laundry_id`, `username`, `password`, `nama_laundry`, `kecamatan`, `foto`, `desc_laundry`) VALUES
(21, 'Melialaundry', '12345', 'MELIA', 'kedungkandang', 'download_(4).png', 'Jl.Danau Toba A2B/02'),
(23, 'Eralaundry', '12345', 'ERA LAUNDRY', 'kedungkandang', 'jkjjk_(2).png', 'Jl.Laut Tawar B2E/26, Sawojajar'),
(27, 'atlantic', 'atlantic', 'atlantic laundry', 'blimbing', 'Atlantic-Laundry-Malang.jpg', 'jalan soekarno no 21'),
(28, 'flower', 'flower', 'Flower laundry', 'klojen', '88ae793e4d1e2ccbbd6a80222a05bc74.jpg', 'jalan blimbing no 33'),
(29, 'leyla', 'leyla', 'Leyla Laundry', 'lowokwaru', '5c5e879b93514151355457.jpg', 'jalan semeru no 1'),
(30, 'suka', 'suka', 'Suka Laundry', 'sukun', '60832_medium_(Lowongan_Kerja)_Dibutuhkan_Karyawan_Laundry_Wanita_di_Suka_Laundry_Malang_(Walk_in_Interview__Wawancara_Langsung).jpg', 'jalan bolawi no 91'),
(31, 'ave', 'ave', 'Laundry ave', 'klojen', 'images.jpg', 'jalan ijen no 10');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alt_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_pelanggan`, `no_telp`, `password`, `alt_pelanggan`) VALUES
(4, 'ukik', '123', 'ukik', 'nganjuk'),
(5, 'cicis', '08121705066', 'sherlyyuke', 'bojonegoro'),
(6, 'Naufal', '11111', 'qqqqq', 'bjn'),
(7, 'nabila', '123456789', '1', 'bojonegoro');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `alt_pelanggan` varchar(255) NOT NULL,
  `laundry_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `alt_pelanggan`, `laundry_id`, `note`, `pelanggan_id`, `status`, `tgl_order`, `tgl_selesai`) VALUES
(1, 'jalan danau ranau no 1', 23, 'diambil habis liburan', 4, 'belum jadi', '2019-12-18', '2019-12-30'),
(2, 'jl sawojajar no 1', 23, 'diambil setelah liburan', 4, 'packing', '2019-12-18', '2019-12-31'),
(3, 'jalan danau poso senin kamis no 5', 27, 'diambil sebelum rapotan', 4, 'packing', '2019-12-18', '2019-12-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`lapor_id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `laundry_id` (`laundry_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`laundry_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `laundry_id` (`laundry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `lapor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `laundry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lapor`
--
ALTER TABLE `lapor`
  ADD CONSTRAINT `lapor_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_ibfk_2` FOREIGN KEY (`laundry_id`) REFERENCES `laundry` (`laundry_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lapor_ibfk_3` FOREIGN KEY (`id`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`pelanggan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`laundry_id`) REFERENCES `laundry` (`laundry_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
