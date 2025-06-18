-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2025 at 11:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Deny Febriyanto', '18000036', 'denyfebri@gmail.com', 'Teknik Informatika', 'deny.jpg'),
(2, 'Ucup Surucup', '18000037', 'ucup@gmail.com', 'Teknik Elektro', 'ucup.jpg'),
(3, 'Otong Sukontong', '18000038', 'otong@gmail.com', 'Teknik Fisika', 'otong.jpg'),
(4, 'Bambang Sugembang', '18000039', 'bambang@gmail.com', 'Teknik Perkapalan', 'bambang.jpg'),
(5, 'Sueb Surueb', '18000040', 'suep@gmail.com', 'Matematika', 'sueb.jpg'),
(6, 'Rojak Surojak', '18000041', 'ojak@gmail.com', 'Teknik Sipil', 'rojak.jpg'),
(7, 'Bejo Subejo', '18000042', 'bejo@gmail.com', 'Teknik Elektro', 'bejo.jpg'),
(8, 'Karno Sukarno', '18000043', 'karno@gmail.com', 'Teknik Sipil', 'karno.jpg'),
(9, 'Paul Supaul', '18000044', 'paul@gmail.com', 'Teknik Informatika', 'paul.jpg'),
(10, 'Sarip Tambak Oyo', '18000045', 'sarip@gmail.com', 'Teknik Metalurgi', '6850fce1c8b36.jpg'),
(11, 'Valentino Febriansyah', '18000046', 'vfeb@gmail.com', 'Teknik Balap', 'parno.jpg'),
(12, 'Erik Cahyadi', '18000047', 'erik@yahoo.com', 'Geologas', '6850fd79520ff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'deny', '$2y$10$1Ol0FjR5NL8JKajpwUgsQ.lNtkHJWci5KzDcfLZ2J5ZYWKJ2jaSFW'),
(2, 'admin', '$2y$10$YXDBYch/OFPWRyk4KSjTIep.impIFggr6VEctcEYE82JPaP/fVsNm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
