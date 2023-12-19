-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 09:12 AM
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
(1, 'boss', 'boss', 'Pimpinan', '1992588512019212', 'Bobi Sinagartulo', 'Pembina', 'Golongan IV'),
(3, 'bidum', 'bidum', 'Bidum', '1992588512019513', 'Andi Lukito', 'Bengkok satu', 'Menengah kebawah'),
(5, 'kabid', 'kabid', 'Kabid', '1992555212019213', 'Kleopatra', 'Diamond satu', 'Menengah keatas');

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
('SPD/200/B', 'Hafiz', 'Hafiz_200504016.pdf', 'ada KRS didalamnya!!!', '2023-12-15'),
('SPD/200/D', 'Bobi', 'Bedess.jpeg', 'akuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2023-12-15'),
('SPD/200/L', 'Andi Lukito', 'crz.jpg', 'wew', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `no_spd` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `tugas` text NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `verify` int(1) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`no_spd`, `petugas`, `tugas`, `tujuan`, `verify`, `filename`) VALUES
('SPD/200/B', 'Hafiz', 'Mencari Ikan kakap', 'Ngawi', 1, 'sign.png'),
('SPD/200/D', 'Bobi', 'Nyangkol tanah', 'Lahan tetangga', 0, '52xhqg.jpg'),
('SPD/200/F', 'Kevin Anggara', 'Menjaga Ayam', 'Ga kecolongan', 0, 'data-diri.jpg'),
('SPD/200/L', 'Andi Lukito', 'Jadi Alien ', 'Menginvasi bumi', 2, 'data-diri.jpg');

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
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
