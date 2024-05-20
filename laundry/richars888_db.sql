-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 12:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_native`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bulan`
--

CREATE TABLE `data_bulan` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_minggu`
--

CREATE TABLE `data_minggu` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_tahun`
--

CREATE TABLE `data_tahun` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(40) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `harga`) VALUES
(1, '6000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'geral', '$2y$10$agFX3cfU5Dlt3Hay57lVoO3mA/S/rTE9J./8/8OzUyT3MlU7k3J4S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bulan`
--
ALTER TABLE `data_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_minggu`
--
ALTER TABLE `data_minggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tahun`
--
ALTER TABLE `data_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bulan`
--
ALTER TABLE `data_bulan`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_minggu`
--
ALTER TABLE `data_minggu`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_tahun`
--
ALTER TABLE `data_tahun`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
