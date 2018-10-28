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
-- Table structure for table `mnv_fisik`
--

CREATE TABLE IF NOT EXISTS `mnv_fisik` (
`id_mnv_fisik` int(11) NOT NULL,
  `id_rmp` int(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `persentase_real` float NOT NULL,
  `minggu` int(11) NOT NULL,
  `id_refer` int(11) NOT NULL,
  `output` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kendala` text NOT NULL,
  `tingkat_kendala` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mnv_fisik`
--

INSERT INTO `mnv_fisik` (`id_mnv_fisik`, `id_rmp`, `persentase`, `persentase_real`, `minggu`, `id_refer`, `output`, `deskripsi`, `kendala`, `tingkat_kendala`, `type`) VALUES
(14, 3, 20, 0.018, 1, 3, 'dokumen', 'sss', 'asdasdd', 2, 'act'),
(15, 3, 50, 0.025, 7, 3, '', '', '', 0, 'act'),
(16, 3, 20, 3.79, 1, 1, 'dokumen', 'tes', 'ada penyelundupan uang', 4, 'stage'),
(17, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(18, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(19, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(20, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(21, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(22, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(23, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(24, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(25, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act'),
(26, 3, 0, 0, 6, 10, 'dokumen', 'harusnya 20%', 'akomodasi mogok', 5, 'act');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mnv_fisik`
--
ALTER TABLE `mnv_fisik`
 ADD PRIMARY KEY (`id_mnv_fisik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mnv_fisik`
--
ALTER TABLE `mnv_fisik`
MODIFY `id_mnv_fisik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
