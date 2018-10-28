-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 06:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipromon`
--

-- --------------------------------------------------------

--
-- Table structure for table `mnv_keuangan_total`
--

CREATE TABLE IF NOT EXISTS `mnv_keuangan_total` (
`id_mnv_k_t` int(11) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jml` int(11) NOT NULL,
  `jml_kumulatif` int(11) NOT NULL,
  `persentase` float NOT NULL,
  `persentase_kumulatif` float NOT NULL,
  `id_rmp` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnv_keuangan_total`
--

INSERT INTO `mnv_keuangan_total` (`id_mnv_k_t`, `minggu`, `jml`, `jml_kumulatif`, `persentase`, `persentase_kumulatif`, `id_rmp`) VALUES
(3, 1, 3000000, 3000000, 0.56852, 0.56852, 3),
(4, 4, 2200000, 5200000, 0.416914, 0.985434, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mnv_keuangan_total`
--
ALTER TABLE `mnv_keuangan_total`
 ADD PRIMARY KEY (`id_mnv_k_t`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mnv_keuangan_total`
--
ALTER TABLE `mnv_keuangan_total`
MODIFY `id_mnv_k_t` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
