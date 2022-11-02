-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 12:08 PM
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
-- Database: `silviafashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `ID` int(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `nama_pembeli` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `Telepon` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pembelian`
--

INSERT INTO `data_pembelian` (`ID`, `nama_barang`, `jumlah`, `nama_pembeli`, `alamat`, `Telepon`, `gambar`) VALUES
(10, 'Dress Pinky', 1, 'Silvia Ananda', 'jl.pramuka,gang xxx', '082254587347', ''),
(11, 'Set Cewek Bumi', 3, 'Santi', 'jl.Perjuangan,RT 01', '082254587789', ''),
(12, 'Sepatu pinky', 1, 'Riana', 'jl.damanhuri', '0987654567890', ''),
(13, 'Baju Pink', 2, 'silviaaaa', 'jklkjhbvcdfghjk', '098765456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'arya114', '$2y$10$5oVJpXqgOUnfaV1YXoXdZOC3bHvm6aoIVibpOeI0ZOd4Toxri6Uiy'),
(2, 'slvannd', '$2y$10$1hHpQKrBstfqh8oTQZu4bOwPAaKKxl7zQrmy8cDmKIFC08UgZ08kq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
