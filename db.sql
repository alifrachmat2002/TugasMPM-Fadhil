-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 10:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alif`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_alif`
--

CREATE TABLE `user_alif` (
  `id_alif` int(3) NOT NULL,
  `nama_alif` varchar(50) NOT NULL,
  `username_alif` varchar(50) NOT NULL,
  `password_alif` varchar(255) NOT NULL,
  `level_alif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_alif`
--

INSERT INTO `user_alif` (`id_alif`, `nama_alif`, `username_alif`, `password_alif`, `level_alif`) VALUES
(4, 'Alif', 'alifganteng', 'alifganteng123', 1),
(5, 'Nadhif', 'nadhifganteng', 'abc', 2),
(6, 'Tatang', 'tatangsutarma', 'tatanggaganteng', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_alif`
--
ALTER TABLE `user_alif`
  ADD PRIMARY KEY (`id_alif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_alif`
--
ALTER TABLE `user_alif`
  MODIFY `id_alif` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
