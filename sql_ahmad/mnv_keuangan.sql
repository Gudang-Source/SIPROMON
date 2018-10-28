-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 06:49 AM
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
-- Table structure for table `mnv_keuangan`
--

CREATE TABLE IF NOT EXISTS `mnv_keuangan` (
`id_mnv_keuangan` int(11) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jml_uang` int(11) NOT NULL,
  `waktu_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_rmp_sdk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnv_keuangan`
--

INSERT INTO `mnv_keuangan` (`id_mnv_keuangan`, `minggu`, `jml_uang`, `waktu_update`, `id_rmp_sdk`) VALUES
(23, 1, 3000000, '2018-10-03 04:14:30', 2),
(24, 1, 0, '2018-10-03 04:14:30', 3),
(25, 1, 0, '2018-10-03 04:14:30', 4),
(26, 1, 0, '2018-10-03 04:14:30', 5),
(27, 1, 0, '2018-10-03 04:14:30', 6),
(28, 1, 0, '2018-10-03 04:14:30', 7),
(29, 1, 0, '2018-10-03 04:14:30', 8),
(30, 1, 0, '2018-10-03 04:14:30', 9),
(31, 1, 0, '2018-10-03 04:14:30', 10),
(32, 1, 0, '2018-10-03 04:14:30', 11),
(33, 1, 0, '2018-10-03 04:14:30', 12),
(34, 4, 200000, '2018-10-03 04:14:49', 2),
(35, 4, 1000000, '2018-10-03 04:14:49', 3),
(36, 4, 1000000, '2018-10-03 04:14:49', 4),
(37, 4, 0, '2018-10-03 04:14:49', 5),
(38, 4, 0, '2018-10-03 04:14:49', 6),
(39, 4, 0, '2018-10-03 04:14:49', 7),
(40, 4, 0, '2018-10-03 04:14:49', 8),
(41, 4, 0, '2018-10-03 04:14:49', 9),
(42, 4, 0, '2018-10-03 04:14:49', 10),
(43, 4, 0, '2018-10-03 04:14:49', 11),
(44, 4, 0, '2018-10-03 04:14:49', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mnv_keuangan`
--
ALTER TABLE `mnv_keuangan`
 ADD PRIMARY KEY (`id_mnv_keuangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mnv_keuangan`
--
ALTER TABLE `mnv_keuangan`
MODIFY `id_mnv_keuangan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
