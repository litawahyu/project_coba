-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 01:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalu_lintas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kecelakaan`
--

CREATE TABLE `data_kecelakaan` (
  `id_data` int(11) NOT NULL,
  `no_lap` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_jeniskec` int(11) NOT NULL,
  `lr` int(11) NOT NULL,
  `lb` int(11) NOT NULL,
  `md` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kecelakaan`
--

INSERT INTO `data_kecelakaan` (`id_data`, `no_lap`, `tanggal`, `id_kecamatan`, `id_lokasi`, `id_jeniskec`, `lr`, `lb`, `md`) VALUES
(2, '567/jk', '2017-03-14', 2, 2, 2, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(2, 'Talun'),
(3, 'Wlingi'),
(4, 'Garum'),
(5, 'Kesamben');

-- --------------------------------------------------------

--
-- Table structure for table `kecelakaan`
--

CREATE TABLE `kecelakaan` (
  `id_jeniskec` int(11) NOT NULL,
  `jenis_kecelakaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecelakaan`
--

INSERT INTO `kecelakaan` (`id_jeniskec`, `jenis_kecelakaan`) VALUES
(1, 'Sepeda motor dengan Sepeda motor'),
(2, 'Sepeda motor dengan Mobil'),
(3, 'Mobil pick up dengan Sepeda pancal');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `latidude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `id_kecamatan`, `latidude`, `longitude`) VALUES
(2, 'Jl Raya Wlingi', 3, -8.12938, 112.3188103),
(3, 'Jl raya wlingi', 3, 89765, 789020),
(4, 'jl raya talun', 2, 6589, 373383),
(5, ' jl umum', 3, 3445, 3151);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`) VALUES
(1, 'lita', '12650125'),
(3, ' aku', ' 123');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id_kecamatan`, `nama_kecamatan`, `latitude`, `longitude`) VALUES
(1, 'Garum', -8.0131556, 112.1835182),
(2, 'Talun', -8.1003996, 112.2409222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_jeniskec` (`id_jeniskec`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kecelakaan`
--
ALTER TABLE `kecelakaan`
  ADD PRIMARY KEY (`id_jeniskec`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kecelakaan`
--
ALTER TABLE `kecelakaan`
  MODIFY `id_jeniskec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  ADD CONSTRAINT `data_kecelakaan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`),
  ADD CONSTRAINT `data_kecelakaan_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`),
  ADD CONSTRAINT `data_kecelakaan_ibfk_3` FOREIGN KEY (`id_jeniskec`) REFERENCES `kecelakaan` (`id_jeniskec`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
