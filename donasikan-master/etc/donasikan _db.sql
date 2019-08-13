-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 01:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `target` double NOT NULL,
  `tgl_expired` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi_donasi` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_rekening` varchar(32) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `donasi_terkumpul` double NOT NULL,
  `lengkap` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `judul`, `target`, `tgl_expired`, `foto`, `deskripsi_donasi`, `email`, `no_rekening`, `no_hp`, `status`, `nama`, `tgl_donasi`, `donasi_terkumpul`, `lengkap`) VALUES
(1, 'Donasi Projek Pemweb', 1000000, '2018-05-31', 'bukti1.png', 'Tugas Akhir', 'mfahmialif@gmail.com', '123321', '082229872328', 1, 'fahmi', '2018-05-12', 2130000, 1),
(2, 'Donasi Projek APS', 2000000, '2018-05-31', 'bukti1.png', 'Tugas Akhir', 'mfahmialif@gmail.com', '123321', '081334816432', 1, 'fahmi ali', '2018-05-12', 100000, 0),
(5, 'Donasi Rumah Sakit', 0, '0000-00-00', '', '', 'mfahmialif@gmail.com', '123321', '082229872328', 0, 'fahmi', '2018-05-12', 0, 0),
(8, 'Bantuan untuk gempa bumi', 1000000, '2018-05-31', 'siam.PNG', 'Donasi Untuk Gempa', 'mfahmialif@gmail.com', '123321', '082229872328', 0, 'fahmi', '2018-05-12', 0, 0),
(11, 'Bantuan Projek Akhir', 1000000, '2018-05-31', 'siam.PNG', 'Bantuan projek akhir', 'mfahmialif@gmail.com', '123321', '082229872328', 1, 'fahmi', '2018-05-12', 0, 0),
(12, 'Bantuan liburan', 2000000, '2018-05-27', '29036.jpg', 'Bantuan untuk membantu kami dalam menangani liburan akhir yang krisis ekonomi', 'mfahmialif@gmail.com', '123321', '082229872328', 1, 'fahmi', '2018-05-12', 100000, 0),
(13, 'Donasi Seikhlasnya', 4000000, '2018-05-26', 'date.png', 'Donasi seikhlasnya, semoga berkah', 'mei@gmail.com', '123456', '08221212332123', 1, 'mei', '2018-05-13', 4000000, 1),
(14, 'Donasi Seikhlasnya Part2', 2000000, '2018-05-17', 'WIN_20180430_18_11_52_Pro.jpg', 'Donasi part 2', 'mei@gmail.com', '123456', '08221212332123', 0, 'mei', '2018-05-13', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pendonasi` varchar(100) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `judul`, `pendonasi`, `jumlah`) VALUES
(1, 'Donasi Projek APS', 'Budi', 100000),
(2, 'Bantuan liburan', 'Andi', 100000),
(3, 'Donasi Projek Pemweb', 'Anton', 10000),
(4, 'Donasi Seikhlasnya', 'Budi', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `no_rekening` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `email`, `password`, `status`, `no_rekening`, `alamat`, `no_hp`, `foto`) VALUES
('admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', ''),
('anas', 'anas@gmail.com', '76eb649c047cbecad7c36e71374bc9a5', 'pengguna', '123321', 'Sumbersari', '0822212123', 'blank'),
('mei', 'mei@gmail.com', '57e80e4a04d61577efc6bcdee853c2c1', 'pengguna', '123456', 'Sembarang', '08221212332123', 'blank'),
('fahmi', 'mfahmialif@gmail.com', '5ef035d11d74713fcb36f2df26aa7c3d', 'pengguna', '123321', 'Sumbersari', '082229872328', 'poros putih.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
