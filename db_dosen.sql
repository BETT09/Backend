-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 05:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nomor_induk_dosen` varchar(10) DEFAULT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nomor_induk_dosen`, `nama_dosen`, `umur`) VALUES
(1, 'NID001', 'Prof.Resti', 70),
(2, 'NID002', 'Prof. Bandem', 50),
(3, 'NID003', 'Dr. Rudi Hartono', 40),
(4, 'NID004', 'Dr. Siti Aisyah', 38),
(5, 'NID005', 'Prof. John Doe', 55),
(6, 'NID006', 'Prof.Andi', 55);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('risni', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
