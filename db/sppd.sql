-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 03:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppd`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tier` varchar(20) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_user`, `username`, `password`, `tier`, `nip`, `nama`, `pangkat`, `golongan`) VALUES
(3, 'bidum', 'bidum', 'Bidum', '1992588512019513', 'Andi Lukito', 'penata muda', 'IIb'),
(5, 'kabid', 'kabid', 'Kabid', '19925552120', 'Kleopatra', 'pembina', 'IIId'),
(6, 'bidum', 'cut123', 'Pranata Teknologi ', '11129345699', 'cut mardiah', 'penata tingkat 1', 'IIId'),
(7, 'feby', 'feby123', 'Pranata Teknologi ', '2331115676543', 'feby anggreani', 'penata muda', 'IIIc'),
(8, 'jimy', 'jimy123', 'bidum', '3587891763211', 'jimmy triandana', 'penata tingkat 1', 'IIb'),
(9, 'nova', 'nova12', 'Pimpinan', '88974347771442', 'nova fadillah', 'pembina', 'IVa');

-- --------------------------------------------------------

--
-- Table structure for table `lpd`
--

CREATE TABLE `lpd` (
  `no_spd` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `hasil` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lpd`
--

INSERT INTO `lpd` (`no_spd`, `petugas`, `filename`, `hasil`, `tgl_upload`) VALUES
('spd/001/L', 'feby anggreani', 'download.jpg', 'berjalan dengan lancar', '2023-12-20'),
('spd/002', 'jimmy triandana', 'download.jpg', 'ada kendala', '2023-12-20'),
('SPD/200/L', 'Andi Lukito', 'crz.jpg', 'wew', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `no_spd` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `perihal` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `verify` int(1) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `dateIn` date NOT NULL,
  `dateOut` date NOT NULL,
  `dateSend` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`no_spd`, `petugas`, `perihal`, `lokasi`, `verify`, `filename`, `tujuan`, `asal`, `dateIn`, `dateOut`, `dateSend`) VALUES
('SPD/001/A', 'Andi Lukito', 'Makan Ayam Bakar', 'Rumah', 1, '2ee2.png', 'Kuliner', 'Ayam Penyet Pak Ulis', '2024-01-04', '2024-01-05', '2023-12-23'),
('SPD/002/A', 'Hafiz', 'Bertani sawah', 'Rumah Pak RT', 0, '52xhqg.jpg', 'Kultivasi', 'PT. Jaya Sejahtera', '2024-01-01', '2024-01-06', '2023-12-23'),
('SPD/003/A', 'Bobi Siregar', 'Menjaga kandang', 'Belakang Rumah', 2, '52xhqg.jpg', 'Peternakan', 'Sapi Pak Ben', '2024-01-04', '2024-01-06', '2023-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `lpd`
--
ALTER TABLE `lpd`
  ADD PRIMARY KEY (`no_spd`);

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`no_spd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
