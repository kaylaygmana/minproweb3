-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 03:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftaanggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `Domisili` varchar(35) NOT NULL,
  `siap` varchar(6) NOT NULL,
  `notlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `pass`, `nama`, `Domisili`, `siap`, `notlp`) VALUES
('kaylaygmana', '123', 'Kayla Virrly', 'hhhhhhhhhhhhhh', 'h', 0),
('efdvre', 'rfe', 'erfrf', 'Samarinda Timur', 'Ya', 0),
('admin', 'aja', 'admin admin', 'Samarinda Tengah', 'Ya', 0),
('Coney', 'aja', 'Coney Siapa yahh', 'Samarinda Tengah', 'Ya', 0),
('kayla', 'aja', 'anjirs', 'Samarinda Barat', 'Ya', 0),
('robinkucing', '321', 'robianto', 'k', 'l', 0),
('agus', 'aja', 'aaaa', 'Samarinda Tengah', 'Ya', 0),
('', '', '', '', 'Ya', 0),
('asa', 'asa', 'asa', 'Samarinda Barat', 'Ya', 0),
('s', 's', 's', 'Samarinda Tengah', 'Ya', 0),
('z', 'z', 'z', 'z', 'Ya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `unggahan`
--

CREATE TABLE `unggahan` (
  `nama` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nowa` varchar(15) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unggahan`
--

INSERT INTO `unggahan` (`nama`, `foto`, `deskripsi`, `nowa`) VALUES
('Farhat', 'adopsi-kucing-liar-tirto-mico-4_ratio-3x4.jpg', 'Manis, mata agak cacat. Sudah steril, manja', '083452955022'),
('Robby', 'kucing-sedihjpg-20210908013550.jpg', 'Robby berusia 2 tahun, sudah vaksin lengkap dan sudah disteril. Jantan jinak', '081347822866'),
('Rudolfo Kumalakadong', 'IMG_6855.PNG', 'Pejantan, domestik, sudah di vaksin dan sudah steril. Bisa buang air di pasir, gampang stress. Sangat manja', '082345833966'),
('Zidan', '61863f1fb73277c72729f7e89a6e711f.jpg', '', '+6281258360208');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unggahan`
--
ALTER TABLE `unggahan`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
