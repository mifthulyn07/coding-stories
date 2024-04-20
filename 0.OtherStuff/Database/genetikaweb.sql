-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genetikaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `conf_id` int(11) NOT NULL,
  `conf_name` varchar(200) DEFAULT NULL,
  `conf_value` varchar(100) DEFAULT NULL,
  `conf_tipe` varchar(3) DEFAULT '0' COMMENT '0:text, 1:cbox'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`conf_id`, `conf_name`, `conf_value`, `conf_tipe`) VALUES
(1, 'item_per_page', '500', '0'),
(2, 'semester_aktif', 'ganjil', '1'),
(3, 'min_persen_kelas', '50', '0'),
(4, 'th_akademik', '2017/2018', '0'),
(5, 'kepsek', 'Drs. Suharto, M.Pd.', '0'),
(6, 'waka_kurikulum', 'Cicilia Isni Hariyati, S.Pd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(10) NOT NULL,
  `guru_nip` varchar(20) DEFAULT NULL,
  `guru_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `guru_nip`, `guru_nama`) VALUES
(1, '1', 'Mira Khoirunisa, S.pdi.'),
(2, '2', 'Barozi Eko Triyono, S.E'),
(3, '3', 'Dra. Ngadiyana'),
(4, '4', 'Hetty Widiyana, S.Th'),
(5, '5', 'Drs. Tugimin'),
(6, '6', 'Ambar Pratitis, S.Pd.'),
(7, '7', 'Dra. Dwi Ganiwati'),
(8, '8', 'Drs. Hananto'),
(9, '9', 'Sri Suharti, S.Pd.'),
(10, '10', 'Drs. Sukur'),
(11, '11', 'Dra. S. Try Budiyati, M.Hum.'),
(12, '12', 'Cicilia Isni Hariyanti, S.Pd.'),
(13, '13', 'Sudaryati, S.Pd.'),
(14, '14', 'Yulianti Prihdiyastuti, S.Pd.'),
(15, '15', 'Dra. Sri Maesarini Kn.'),
(16, '16', 'Sunarmi, S.Pd.'),
(17, '17', 'Eni Purwantini'),
(18, '18', 'Efi Triana Ningrum, S.Pd.'),
(19, '19', 'T. Prangripta Wibawa, S.Pd.'),
(20, '20', 'Drs. Susiyanta'),
(21, '21', 'Dwi Risyanto, S.Pd.'),
(22, '22', 'Dra. Wisnandari'),
(23, '23', 'Ninik Kurniawati, S.Pd.'),
(24, '24', 'Sri Saptina Haryanti, S.Pd.'),
(25, '25', 'Kurmianto, S.Pd.'),
(26, '26', 'Sri Mulyani, S.Pd.'),
(27, '27', 'Drs. Arum Triharjana'),
(28, '28', 'Tio Setyo Kuncoro, S.Pd.'),
(29, '29', 'Febryardini Dian P.R, S.S.'),
(30, '30', 'Dra. Veni Pro Deo'),
(31, '31', 'Dra. Sri Netty Purwaningsih');

-- --------------------------------------------------------

--
-- Table structure for table `guru_kelas`
--

CREATE TABLE `guru_kelas` (
  `grkls_id` int(10) NOT NULL,
  `grkls_gr_id` int(10) DEFAULT NULL,
  `grkls_kls_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_kelas`
--

INSERT INTO `guru_kelas` (`grkls_id`, `grkls_gr_id`, `grkls_kls_id`) VALUES
(24, 1, 1),
(42, 1, 2),
(28, 1, 9),
(46, 1, 10),
(29, 1, 11),
(47, 1, 12),
(25, 2, 3),
(43, 2, 4),
(26, 2, 5),
(44, 2, 6),
(27, 2, 7),
(45, 2, 8),
(1, 3, 13),
(57, 3, 15),
(58, 3, 16),
(3, 3, 17),
(4, 3, 18),
(59, 3, 19),
(60, 3, 20),
(5, 3, 21),
(6, 3, 22),
(61, 3, 23),
(62, 3, 24),
(63, 4, 25),
(7, 4, 26),
(64, 4, 27),
(65, 4, 28),
(8, 4, 29),
(9, 4, 30),
(66, 4, 31),
(67, 4, 32),
(10, 4, 33),
(12, 4, 34),
(68, 4, 35),
(69, 4, 36),
(70, 5, 37),
(71, 5, 38),
(2, 6, 14),
(30, 6, 39),
(48, 6, 40),
(31, 6, 41),
(49, 6, 42),
(32, 6, 43),
(50, 6, 44),
(52, 7, 48),
(35, 7, 49),
(53, 7, 50),
(37, 7, 53),
(38, 7, 55),
(34, 8, 47),
(33, 9, 45),
(51, 9, 46),
(36, 10, 51),
(54, 10, 52),
(55, 11, 54),
(56, 11, 56),
(11, 11, 57),
(13, 11, 58),
(72, 11, 59),
(73, 11, 60),
(14, 11, 61),
(17, 12, 66),
(41, 12, 67),
(21, 12, 71),
(16, 13, 64),
(40, 13, 65),
(20, 13, 70),
(15, 14, 62),
(39, 14, 63),
(18, 14, 68),
(19, 14, 69),
(22, 15, 72),
(23, 15, 73),
(74, 15, 74),
(75, 15, 75),
(76, 16, 76),
(77, 16, 77),
(78, 16, 78),
(79, 16, 79),
(80, 16, 80),
(81, 16, 81),
(84, 17, 84),
(85, 17, 85),
(89, 17, 89),
(82, 18, 82),
(83, 18, 83),
(86, 18, 86),
(87, 18, 87),
(88, 18, 88),
(91, 19, 92),
(92, 19, 94),
(95, 19, 95),
(96, 19, 96),
(97, 19, 97),
(90, 20, 90),
(93, 20, 91),
(98, 20, 98),
(99, 20, 99),
(94, 21, 93),
(100, 22, 100),
(101, 22, 101),
(102, 22, 102),
(103, 22, 103),
(104, 22, 104),
(107, 23, 105),
(108, 23, 106),
(109, 23, 107),
(110, 23, 108),
(105, 23, 109),
(106, 23, 110),
(111, 24, 111),
(112, 24, 112),
(113, 24, 113),
(114, 25, 114),
(118, 27, 116),
(119, 27, 117),
(120, 27, 118),
(121, 27, 119),
(122, 27, 120),
(117, 28, 115),
(123, 29, 121);

-- --------------------------------------------------------

--
-- Table structure for table `guru_waktu`
--

CREATE TABLE `guru_waktu` (
  `grwkt_id` int(10) NOT NULL,
  `grwkt_gr_id` int(10) DEFAULT NULL,
  `grwkt_wkt_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_waktu`
--

INSERT INTO `guru_waktu` (`grwkt_id`, `grwkt_gr_id`, `grwkt_wkt_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `jp_id` int(10) NOT NULL,
  `jp_kls_id` int(10) DEFAULT NULL,
  `jp_wkt_id` int(10) DEFAULT NULL,
  `jp_ru_id` int(10) DEFAULT NULL,
  `jp_period` int(6) DEFAULT NULL,
  `jp_label` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`jp_id`, `jp_kls_id`, `jp_wkt_id`, `jp_ru_id`, `jp_period`, `jp_label`) VALUES
(1, 1, 10, 2, 2, 'IPA, selasa 09:45:00-11:15:00'),
(2, 2, 20, 9, 2, 'IPS, rabu 12:30:00-14:00:00'),
(3, 3, 3, 2, 1, 'IPA, senin 11:15:00-12:00:00'),
(4, 4, 17, 9, 1, 'IPS, rabu 08:45:00-09:30:00'),
(5, 5, 12, 1, 2, 'IPA, selasa 12:30:00-14:00:00'),
(6, 6, 32, 1, 2, 'IPA, jumat 07:00:00-08:30:00'),
(7, 7, 13, 1, 1, 'IPA, selasa 12:30:00-13:15:00'),
(8, 8, 31, 1, 1, 'IPA, kamis 14:45:00-15:30:00'),
(9, 9, 24, 11, 2, 'IPS, kamis 07:15:00-08:45:00'),
(10, 10, 8, 8, 2, 'IPS, selasa 07:15:00-08:45:00'),
(11, 11, 33, 11, 1, 'IPS, jumat 08:30:00-09:15:00'),
(12, 12, 5, 8, 1, 'IPS, senin 12:30:00-13:15:00'),
(13, 39, 1, 9, 2, 'IPS, senin 08:00:00-09:30:00'),
(14, 40, 28, 1, 2, 'IPA, kamis 12:30:00-14:00:00'),
(15, 41, 8, 1, 2, 'IPA, selasa 07:15:00-08:45:00'),
(16, 42, 30, 1, 2, 'IPA, kamis 14:00:00-15:30:00'),
(17, 43, 16, 4, 2, 'IPA, rabu 07:15:00-08:45:00'),
(18, 44, 20, 3, 2, 'IPA, rabu 12:30:00-14:00:00'),
(19, 45, 6, 2, 2, 'IPA, senin 14:00:00-15:30:00'),
(20, 45, 16, 2, 2, 'IPA, rabu 07:15:00-08:45:00'),
(21, 46, 28, 9, 2, 'IPS, kamis 12:30:00-14:00:00'),
(22, 46, 34, 9, 2, 'IPS, jumat 09:30:00-11:00:00'),
(23, 47, 4, 7, 2, 'IPS, senin 12:30:00-14:00:00'),
(24, 47, 10, 7, 2, 'IPS, selasa 09:45:00-11:15:00'),
(25, 48, 6, 1, 2, 'IPA, senin 14:00:00-15:30:00'),
(26, 48, 24, 1, 2, 'IPA, kamis 07:15:00-08:45:00'),
(27, 49, 28, 4, 2, 'IPA, kamis 12:30:00-14:00:00'),
(28, 49, 34, 4, 2, 'IPA, jumat 09:30:00-11:00:00'),
(29, 50, 2, 3, 2, 'IPA, senin 09:45:00-11:15:00'),
(30, 50, 18, 3, 2, 'IPA, rabu 09:45:00-11:15:00'),
(31, 51, 10, 2, 2, 'IPA, selasa 09:45:00-11:15:00'),
(32, 52, 30, 9, 2, 'IPS, kamis 14:00:00-15:30:00'),
(33, 53, 20, 7, 2, 'IPS, rabu 12:30:00-14:00:00'),
(34, 54, 34, 1, 2, 'IPA, jumat 09:30:00-11:00:00'),
(35, 55, 14, 4, 2, 'IPA, selasa 14:00:00-15:30:00'),
(36, 56, 14, 3, 2, 'IPA, selasa 14:00:00-15:30:00'),
(37, 62, 20, 2, 2, 'IPA, rabu 12:30:00-14:00:00'),
(38, 62, 20, 2, 2, 'IPA, rabu 12:30:00-14:00:00'),
(39, 63, 28, 9, 2, 'IPS, kamis 12:30:00-14:00:00'),
(40, 63, 22, 9, 2, 'IPS, rabu 14:00:00-15:30:00'),
(41, 64, 32, 5, 2, 'IPA, jumat 07:00:00-08:30:00'),
(42, 64, 30, 5, 2, 'IPA, kamis 14:00:00-15:30:00'),
(43, 65, 4, 10, 2, 'IPS, senin 12:30:00-14:00:00'),
(44, 65, 10, 10, 2, 'IPS, selasa 09:45:00-11:15:00'),
(45, 66, 22, 6, 2, 'IPA, rabu 14:00:00-15:30:00'),
(46, 66, 8, 6, 2, 'IPA, selasa 07:15:00-08:45:00'),
(47, 67, 14, 4, 2, 'IPA, selasa 14:00:00-15:30:00'),
(48, 67, 18, 4, 2, 'IPA, rabu 09:45:00-11:15:00'),
(49, 90, 28, 2, 2, 'IPA, kamis 12:30:00-14:00:00'),
(50, 91, 10, 9, 2, 'IPS, selasa 09:45:00-11:15:00'),
(51, 92, 20, 5, 2, 'IPA, rabu 12:30:00-14:00:00'),
(52, 93, 30, 10, 2, 'IPS, kamis 14:00:00-15:30:00'),
(53, 94, 24, 9, 2, 'IPS, kamis 07:15:00-08:45:00'),
(54, 95, 18, 11, 2, 'IPS, rabu 09:45:00-11:15:00'),
(55, 115, 27, 4, 1, 'IPA, kamis 11:15:00-12:00:00'),
(56, 116, 19, 1, 1, 'IPA, rabu 11:15:00-12:00:00'),
(57, 117, 31, 6, 1, 'IPA, kamis 14:45:00-15:30:00'),
(58, 118, 5, 3, 1, 'IPA, senin 12:30:00-13:15:00'),
(59, 119, 17, 9, 1, 'IPS, rabu 08:45:00-09:30:00'),
(60, 120, 25, 11, 1, 'IPS, kamis 08:45:00-09:30:00'),
(61, 13, 2, 4, 2, 'IPA, senin 09:45:00-11:15:00'),
(62, 14, 25, 4, 1, 'IPA, kamis 08:45:00-09:30:00'),
(63, 15, 1, 1, 2, 'IPA, senin 08:00:00-09:30:00'),
(64, 16, 3, 1, 1, 'IPA, senin 11:15:00-12:00:00'),
(65, 17, 8, 6, 2, 'IPA, selasa 07:15:00-08:45:00'),
(66, 18, 21, 6, 1, 'IPA, rabu 13:15:00-14:00:00'),
(67, 19, 14, 3, 2, 'IPA, selasa 14:00:00-15:30:00'),
(68, 20, 31, 3, 1, 'IPA, kamis 14:45:00-15:30:00'),
(69, 21, 20, 9, 2, 'IPS, rabu 12:30:00-14:00:00'),
(70, 22, 36, 9, 1, 'IPS, jumat 13:00:00-13:45:00'),
(71, 23, 12, 11, 2, 'IPS, selasa 12:30:00-14:00:00'),
(72, 24, 11, 11, 1, 'IPS, selasa 11:15:00-12:00:00'),
(73, 26, 19, 4, 1, 'IPA, rabu 11:15:00-12:00:00'),
(74, 27, 32, 1, 2, 'IPA, jumat 07:00:00-08:30:00'),
(75, 28, 11, 1, 1, 'IPA, selasa 11:15:00-12:00:00'),
(76, 29, 20, 6, 2, 'IPA, rabu 12:30:00-14:00:00'),
(77, 30, 36, 6, 1, 'IPA, jumat 13:00:00-13:45:00'),
(78, 31, 1, 3, 2, 'IPA, senin 08:00:00-09:30:00'),
(79, 32, 21, 3, 1, 'IPA, rabu 13:15:00-14:00:00'),
(80, 33, 4, 9, 2, 'IPS, senin 12:30:00-14:00:00'),
(81, 34, 35, 9, 1, 'IPS, jumat 11:00:00-11:45:00'),
(82, 35, 2, 11, 2, 'IPS, senin 09:45:00-11:15:00'),
(83, 36, 33, 11, 1, 'IPS, jumat 08:30:00-09:15:00'),
(84, 37, 30, 11, 2, 'IPS, kamis 14:00:00-15:30:00'),
(85, 38, 21, 11, 1, 'IPS, rabu 13:15:00-14:00:00'),
(86, 57, 14, 4, 2, 'IPA, selasa 14:00:00-15:30:00'),
(87, 58, 17, 4, 1, 'IPA, rabu 08:45:00-09:30:00'),
(88, 59, 2, 1, 2, 'IPA, senin 09:45:00-11:15:00'),
(89, 60, 9, 1, 1, 'IPA, selasa 08:45:00-09:30:00'),
(90, 61, 4, 6, 2, 'IPA, senin 12:30:00-14:00:00'),
(91, 61, 18, 6, 2, 'IPA, rabu 09:45:00-11:15:00'),
(92, 68, 10, 4, 2, 'IPA, selasa 09:45:00-11:15:00'),
(93, 69, 21, 4, 1, 'IPA, rabu 13:15:00-14:00:00'),
(94, 70, 30, 6, 2, 'IPA, kamis 14:00:00-15:30:00'),
(95, 70, 6, 6, 2, 'IPA, senin 14:00:00-15:30:00'),
(96, 71, 4, 6, 2, 'IPA, senin 12:30:00-14:00:00'),
(97, 71, 26, 6, 2, 'IPA, kamis 09:45:00-11:15:00'),
(98, 72, 6, 2, 2, 'IPA, senin 14:00:00-15:30:00'),
(99, 73, 19, 2, 1, 'IPA, rabu 11:15:00-12:00:00'),
(100, 74, 16, 9, 2, 'IPS, rabu 07:15:00-08:45:00'),
(101, 75, 11, 9, 1, 'IPS, selasa 11:15:00-12:00:00'),
(102, 76, 18, 2, 2, 'IPA, rabu 09:45:00-11:15:00'),
(103, 77, 5, 2, 1, 'IPA, senin 12:30:00-13:15:00'),
(104, 78, 34, 5, 2, 'IPA, jumat 09:30:00-11:00:00'),
(105, 78, 4, 5, 2, 'IPA, senin 12:30:00-14:00:00'),
(106, 79, 24, 6, 2, 'IPA, kamis 07:15:00-08:45:00'),
(107, 79, 14, 6, 2, 'IPA, selasa 14:00:00-15:30:00'),
(108, 80, 30, 9, 2, 'IPS, kamis 14:00:00-15:30:00'),
(109, 81, 9, 9, 1, 'IPS, selasa 08:45:00-09:30:00'),
(110, 82, 12, 2, 2, 'IPA, selasa 12:30:00-14:00:00'),
(111, 83, 17, 2, 1, 'IPA, rabu 08:45:00-09:30:00'),
(112, 84, 18, 5, 2, 'IPA, rabu 09:45:00-11:15:00'),
(113, 84, 14, 5, 2, 'IPA, selasa 14:00:00-15:30:00'),
(114, 85, 2, 6, 2, 'IPA, senin 09:45:00-11:15:00'),
(115, 85, 34, 6, 2, 'IPA, jumat 09:30:00-11:00:00'),
(116, 86, 24, 9, 2, 'IPS, kamis 07:15:00-08:45:00'),
(117, 87, 3, 9, 1, 'IPS, senin 11:15:00-12:00:00'),
(118, 88, 32, 10, 2, 'IPS, jumat 07:00:00-08:30:00'),
(119, 88, 6, 10, 2, 'IPS, senin 14:00:00-15:30:00'),
(120, 89, 22, 4, 2, 'IPA, rabu 14:00:00-15:30:00'),
(121, 89, 10, 4, 2, 'IPA, selasa 09:45:00-11:15:00'),
(122, 96, 26, 9, 2, 'IPS, kamis 09:45:00-11:15:00'),
(123, 97, 35, 9, 1, 'IPS, jumat 11:00:00-11:45:00'),
(124, 98, 18, 10, 2, 'IPS, rabu 09:45:00-11:15:00'),
(125, 98, 12, 10, 2, 'IPS, selasa 12:30:00-14:00:00'),
(126, 99, 4, 4, 2, 'IPA, senin 12:30:00-14:00:00'),
(127, 99, 34, 4, 2, 'IPA, jumat 09:30:00-11:00:00'),
(128, 100, 12, 9, 2, 'IPS, selasa 12:30:00-14:00:00'),
(129, 101, 7, 9, 1, 'IPS, senin 13:15:00-14:00:00'),
(130, 102, 24, 10, 2, 'IPS, kamis 07:15:00-08:45:00'),
(131, 103, 2, 4, 2, 'IPA, senin 09:45:00-11:15:00'),
(132, 104, 20, 6, 2, 'IPA, rabu 12:30:00-14:00:00'),
(133, 105, 1, 10, 2, 'IPS, senin 08:00:00-09:30:00'),
(134, 105, 28, 10, 2, 'IPS, kamis 12:30:00-14:00:00'),
(135, 106, 24, 4, 2, 'IPA, kamis 07:15:00-08:45:00'),
(136, 106, 16, 4, 2, 'IPA, rabu 07:15:00-08:45:00'),
(137, 107, 32, 9, 2, 'IPS, jumat 07:00:00-08:30:00'),
(138, 108, 31, 9, 1, 'IPS, kamis 14:45:00-15:30:00'),
(139, 109, 22, 2, 2, 'IPA, rabu 14:00:00-15:30:00'),
(140, 109, 34, 2, 2, 'IPA, jumat 09:30:00-11:00:00'),
(141, 110, 35, 2, 1, 'IPA, jumat 11:00:00-11:45:00'),
(142, 111, 1, 9, 2, 'IPS, senin 08:00:00-09:30:00'),
(143, 112, 33, 9, 1, 'IPS, jumat 08:30:00-09:15:00'),
(144, 113, 18, 6, 2, 'IPA, rabu 09:45:00-11:15:00'),
(145, 114, 8, 2, 2, 'IPA, selasa 07:15:00-08:45:00'),
(146, 121, 16, 2, 2, 'IPA, rabu 07:15:00-08:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kls_id` int(10) NOT NULL,
  `kls_kode_prodi` varchar(15) DEFAULT NULL,
  `kls_mpkur_id` int(10) DEFAULT NULL,
  `kls_nama` varchar(20) DEFAULT NULL,
  `kls_kode_paralel` varchar(6) DEFAULT NULL,
  `kls_jml_peserta_prediksi` int(6) DEFAULT NULL,
  `kls_jadwal_merata` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kls_id`, `kls_kode_prodi`, `kls_mpkur_id`, `kls_nama`, `kls_kode_paralel`, `kls_jml_peserta_prediksi`, `kls_jadwal_merata`) VALUES
(1, 'IPA', 1, 'IPA-MAS001', NULL, 30, 1),
(2, 'IPS', 1, 'IPS-MAS001', NULL, 30, 1),
(3, 'IPA', 2, 'IPA-MAS002', NULL, 30, 1),
(4, 'IPS', 2, 'IPS-MAS002', NULL, 30, 1),
(5, 'IPA', 3, 'IPA-MAS003', NULL, 30, 1),
(6, 'IPS', 3, 'IPS-MAS003', NULL, 30, 1),
(7, 'IPA', 4, 'IPA-MAS004', NULL, 30, 1),
(8, 'IPS', 4, 'IPS-MAS004', NULL, 30, 1),
(9, 'IPA', 5, 'IPA-MAS005', NULL, 30, 1),
(10, 'IPS', 5, 'IPS-MAS005', NULL, 30, 1),
(11, 'IPA', 6, 'IPA-MAS006', NULL, 30, 1),
(12, 'IPS', 6, 'IPS-MAS006', NULL, 30, 1),
(13, 'IPA', 7, 'IPA-MA001', NULL, 30, 0),
(14, 'IPA', 8, 'IPA-MA002', NULL, 30, 0),
(15, 'IPS', 9, 'IPS-MS001', NULL, 30, 0),
(16, 'IPS', 10, 'IPS-MS002', NULL, 30, 0),
(17, 'IPA', 11, 'IPA-MA003', NULL, 30, 0),
(18, 'IPA', 12, 'IPA-MA004', NULL, 30, 0),
(19, 'IPS', 13, 'IPS-MS003', NULL, 30, 0),
(20, 'IPS', 14, 'IPS-MS004', NULL, 30, 0),
(21, 'IPA', 15, 'IPA-MA005', NULL, 30, 0),
(22, 'IPA', 16, 'IPA-MA006', NULL, 30, 0),
(23, 'IPS', 17, 'IPS-MS005', NULL, 30, 0),
(24, 'IPS', 18, 'IPS-MS006', NULL, 30, 0),
(25, 'IPS', 19, 'IPS-MS007', NULL, 30, 0),
(26, 'IPA', 20, 'IPA-MA007', NULL, 30, 0),
(27, 'IPS', 21, 'IPS-MS008', NULL, 30, 0),
(28, 'IPS', 22, 'IPS-MS009', NULL, 30, 0),
(29, 'IPA', 23, 'IPA-MA008', NULL, 30, 0),
(30, 'IPA', 24, 'IPA-MA009', NULL, 30, 0),
(31, 'IPS', 25, 'IPS-MS010', NULL, 30, 0),
(32, 'IPS', 26, 'IPS-MS011', NULL, 30, 0),
(33, 'IPA', 27, 'IPA-MA010', NULL, 30, 0),
(34, 'IPA', 28, 'IPA-MA011', NULL, 30, 0),
(35, 'IPS', 29, 'IPS-MS012', NULL, 30, 0),
(36, 'IPS', 30, 'IPS-MS013', NULL, 30, 0),
(37, 'IPS', 31, 'IPS-MS014', NULL, 30, 0),
(38, 'IPS', 32, 'IPS-MS015', NULL, 30, 0),
(39, 'IPA', 33, 'IPA-MAS007', NULL, 30, 1),
(40, 'IPS', 33, 'IPS-MAS007', NULL, 30, 1),
(41, 'IPA', 34, 'IPA-MAS008', NULL, 30, 1),
(42, 'IPS', 34, 'IPS-MAS008', NULL, 30, 1),
(43, 'IPA', 35, 'IPA-MAS009', NULL, 30, 1),
(44, 'IPS', 35, 'IPS-MAS009', NULL, 30, 1),
(45, 'IPA', 36, 'IPA-MAS010', NULL, 30, 1),
(46, 'IPS', 36, 'IPS-MAS010', NULL, 30, 1),
(47, 'IPA', 37, 'IPA-MAS011', NULL, 30, 1),
(48, 'IPS', 37, 'IPS-MAS011', NULL, 30, 1),
(49, 'IPA', 38, 'IPA-MAS012', NULL, 30, 1),
(50, 'IPS', 38, 'IPS-MAS012', NULL, 30, 1),
(51, 'IPA', 39, 'IPA-MAS013', NULL, 30, 1),
(52, 'IPS', 39, 'IPS-MAS013', NULL, 30, 1),
(53, 'IPA', 40, 'IPA-MAS014', NULL, 30, 1),
(54, 'IPS', 40, 'IPS-MAS014', NULL, 30, 1),
(55, 'IPA', 41, 'IPA-MAS015', NULL, 30, 1),
(56, 'IPS', 41, 'IPS-MAS015', NULL, 30, 1),
(57, 'IPA', 42, 'IPA-MA011', NULL, 30, 0),
(58, 'IPA', 43, 'IPA-MA012', NULL, 30, 0),
(59, 'IPS', 44, 'IPS-MS016', NULL, 30, 0),
(60, 'IPS', 45, 'IPS-MS017', NULL, 30, 0),
(61, 'IPA', 46, 'IPA-MA013', NULL, 30, 0),
(62, 'IPA', 47, 'IPA-MA014', NULL, 30, 1),
(63, 'IPS', 47, 'IPS-MA014', NULL, 30, 1),
(64, 'IPA', 48, 'IPA-MA015', NULL, 30, 1),
(65, 'IPS', 48, 'IPS-MA015', NULL, 30, 1),
(66, 'IPA', 49, 'IPA-MA016', NULL, 30, 1),
(67, 'IPS', 49, 'IPS-MA016', NULL, 30, 1),
(68, 'IPA', 50, 'IPA-MA017', NULL, 30, 0),
(69, 'IPA', 51, 'IPA-MA018', NULL, 30, 0),
(70, 'IPA', 52, 'IPA-MA019', NULL, 30, 0),
(71, 'IPA', 53, 'IPA-MA020', NULL, 30, 0),
(72, 'IPA', 54, 'IPA-MA021', NULL, 30, 0),
(73, 'IPA', 55, 'IPA-MA022', NULL, 30, 0),
(74, 'IPS', 56, 'IPS-MS018', NULL, 30, 0),
(75, 'IPS', 57, 'IPS-MS019', NULL, 30, 0),
(76, 'IPA', 58, 'IPA-MA023', NULL, 30, 0),
(77, 'IPA', 59, 'IPA-MA024', NULL, 30, 0),
(78, 'IPA', 60, 'IPA-MA025', NULL, 30, 0),
(79, 'IPA', 61, 'IPA-MA026', NULL, 30, 0),
(80, 'IPS', 62, 'IPS-MS020', NULL, 30, 0),
(81, 'IPS', 63, 'IPS-MS021', NULL, 30, 0),
(82, 'IPA', 64, 'IPA-MA027', NULL, 30, 0),
(83, 'IPA', 65, 'IPA-MA028', NULL, 30, 0),
(84, 'IPA', 66, 'IPA-MA029', NULL, 30, 0),
(85, 'IPA', 67, 'IPA-MA030', NULL, 30, 0),
(86, 'IPS', 68, 'IPS-MS022', NULL, 30, 0),
(87, 'IPS', 69, 'IPS-MS023', NULL, 30, 0),
(88, 'IPS', 70, 'IPS-MS024', NULL, 30, 0),
(89, 'IPS', 71, 'IPS-MS025', NULL, 30, 0),
(90, 'IPA', 72, 'IPA-MAS016', NULL, 30, 1),
(91, 'IPS', 72, 'IPS-MAS016', NULL, 30, 1),
(92, 'IPA', 73, 'IPA-MAS017', NULL, 30, 1),
(93, 'IPS', 73, 'IPS-MAS017', NULL, 30, 1),
(94, 'IPA', 74, 'IPA-MAS018', NULL, 30, 1),
(95, 'IPS', 74, 'IPS-MAS018', NULL, 30, 1),
(96, 'IPS', 75, 'IPS-MS026', NULL, 30, 0),
(97, 'IPS', 76, 'IPS-MS027', NULL, 30, 0),
(98, 'IPS', 77, 'IPS-MS028', NULL, 30, 0),
(99, 'IPS', 78, 'IPS-MS029', NULL, 30, 0),
(100, 'IPS', 79, 'IPS-MS030', NULL, 30, 0),
(101, 'IPS', 80, 'IPS-MS031', NULL, 30, 0),
(102, 'IPS', 81, 'IPS-MS032', NULL, 30, 0),
(103, 'IPS', 82, 'IPS-MS033', NULL, 30, 0),
(104, 'IPA', 83, 'IPA-MA031', NULL, 30, 0),
(105, 'IPS', 84, 'IPS-MS034', NULL, 30, 0),
(106, 'IPS', 85, 'IPS-MS035', NULL, 30, 0),
(107, 'IPS', 86, 'IPS-MS036', NULL, 30, 0),
(108, 'IPS', 87, 'IPS-MS037', NULL, 30, 0),
(109, 'IPA', 88, 'IPA-MA032', NULL, 30, 0),
(110, 'IPA', 89, 'IPA-MA033', NULL, 30, 0),
(111, 'IPS', 91, 'IPS-MS038', NULL, 30, 0),
(112, 'IPS', 92, 'IPS-MS039', NULL, 30, 0),
(113, 'IPA', 95, 'IPA-MA035', NULL, 30, 0),
(114, 'IPA', 96, 'IPA-MAS019', NULL, 30, 1),
(115, 'IPA', 103, 'IPA-MAS026', NULL, 30, 1),
(116, 'IPS', 103, 'IPS-MAS026', NULL, 30, 1),
(117, 'IPA', 105, 'IPA-MAS028', NULL, 30, 1),
(118, 'IPS', 105, 'IPS-MAS028', NULL, 30, 1),
(119, 'IPA', 107, 'IPA-MAS030', NULL, 30, 1),
(120, 'IPS', 107, 'IPS-MAS030', NULL, 30, 1),
(121, 'IPA', 108, 'IPA-MAS031', NULL, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kurikulum`
--

CREATE TABLE `mapel_kurikulum` (
  `mpkur_id` int(10) NOT NULL,
  `mpkur_kode` varchar(10) DEFAULT NULL,
  `mpkur_nama` varchar(50) DEFAULT NULL,
  `mpkur_sks` int(5) DEFAULT NULL,
  `mpkur_semester` varchar(10) DEFAULT NULL COMMENT 'Genjil, Genap',
  `mpkur_sifat` varchar(3) DEFAULT NULL COMMENT 'W:Wajib,P:Pilihan',
  `mpkur_paket_semester` varchar(5) DEFAULT NULL,
  `mpkur_prod_jml_peminat` int(10) DEFAULT 30,
  `mpkur_jumlah_pert` int(1) DEFAULT 1,
  `mpkur_is_universal` tinyint(1) DEFAULT 0 COMMENT '1 : Universal',
  `mpkur_maks_kelas` int(10) DEFAULT 30 COMMENT 'maks peserta kelas',
  `mpkur_jns` int(11) NOT NULL DEFAULT 0 COMMENT '1 : Praktikum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel_kurikulum`
--

INSERT INTO `mapel_kurikulum` (`mpkur_id`, `mpkur_kode`, `mpkur_nama`, `mpkur_sks`, `mpkur_semester`, `mpkur_sifat`, `mpkur_paket_semester`, `mpkur_prod_jml_peminat`, `mpkur_jumlah_pert`, `mpkur_is_universal`, `mpkur_maks_kelas`, `mpkur_jns`) VALUES
(1, 'MAS001', 'Pendidikan Agama Islam', 2, 'ganjil', 'w', '1', 30, 1, 1, 30, 0),
(2, 'MAS002', 'Pendidikan Agama Islam', 1, 'ganjil', 'w', '1', 30, 1, 1, 30, 0),
(3, 'MAS003', 'Pendidikan Agama Islam', 2, 'ganjil', 'w', '3', 30, 1, 1, 30, 0),
(4, 'MAS004', 'Pendidikan Agama Islam', 1, 'ganjil', 'w', '3', 30, 1, 1, 30, 0),
(5, 'MAS005', 'Pendidikan Agama Islam', 2, 'ganjil', 'w', '5', 30, 1, 1, 30, 0),
(6, 'MAS006', 'Pendidikan Agama Islam', 1, 'ganjil', 'w', '5', 30, 1, 1, 30, 0),
(7, 'MA001', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(8, 'MA002', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(9, 'MS001', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(10, 'MS002', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(11, 'MA003', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(12, 'MA004', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(13, 'MS003', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(14, 'MS004', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(15, 'MA005', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(16, 'MA006', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(17, 'MS005', 'Pendidikan Agama Khatolik', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(18, 'MS006', 'Pendidikan Agama Khatolik', 1, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(19, 'MS007', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '1', 30, 0, 0, 30, 0),
(20, 'MA007', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(21, 'MS008', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(22, 'MS009', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(23, 'MA008', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(24, 'MA009', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(25, 'MS010', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(26, 'MS011', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '3', 30, 1, 0, 30, 0),
(27, 'MA010', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(28, 'MA011', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(29, 'MS012', 'Pendidikan Agama Kristen', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(30, 'MS013', 'Pendidikan Agama Kristen', 1, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(31, 'MS014', 'Pendidikan Agama Hindu', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(32, 'MS015', 'Pendidikan Agama Hindu', 1, 'ganjil', 'w', '5', 30, 1, 0, 30, 0),
(33, 'MAS007', 'PKn', 2, 'ganjil', 'w', '1', 30, 1, 1, 30, 0),
(34, 'MAS008', 'PKn', 2, 'ganjil', 'w', '3', 30, 1, 1, 30, 0),
(35, 'MAS009', 'PKn', 2, 'ganjil', 'w', '5', 30, 1, 1, 30, 0),
(36, 'MAS010', 'Bahasa Indonesia', 2, 'ganjil', 'w', '1', 30, 2, 1, 30, 0),
(37, 'MAS011', 'Bahasa Indonesia', 2, 'ganjil', 'w', '3', 30, 2, 1, 30, 0),
(38, 'MAS012', 'Bahasa Indonesia', 2, 'ganjil', 'w', '5', 30, 2, 1, 30, 0),
(39, 'MAS013', 'Bahasa Inggris', 2, 'ganjil', 'w', '1', 30, 1, 1, 30, 0),
(40, 'MAS014', 'Bahasa Inggris', 2, 'ganjil', 'w', '3', 30, 1, 1, 30, 0),
(41, 'MAS015', 'Bahasa Inggris', 2, 'ganjil', 'w', '5', 30, 1, 1, 30, 0),
(42, 'MA011', 'Bhs & Sastra Inggris', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(43, 'MA012', 'Bhs & Sastra Inggris', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(44, 'MS016', 'Bhs & Sastra Inggris', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(45, 'MS017', 'Bhs & Sastra Inggris', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(46, 'MA013', 'Bhs & Sastra Inggris', 2, 'ganjil', 'w', '3', 30, 2, 0, 30, 0),
(47, 'MA014', 'Matematika', 2, 'ganjil', 'w', '1', 30, 2, 1, 30, 0),
(48, 'MA015', 'Matematika', 2, 'ganjil', 'w', '3', 30, 2, 1, 30, 0),
(49, 'MA016', 'Matematika', 2, 'ganjil', 'w', '5', 30, 2, 1, 30, 0),
(50, 'MA017', 'Matematika (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(51, 'MA018', 'Matematika (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(52, 'MA019', 'Matematika (Peminatan)', 2, 'ganjil', 'w', '3', 30, 2, 0, 30, 0),
(53, 'MA020', 'Matematika (Peminatan)', 2, 'ganjil', 'w', '5', 30, 2, 0, 30, 0),
(54, 'MA021', 'Fisika (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(55, 'MA022', 'Fisika (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(56, 'MS018', 'Fisika (Lintas Minat)', 2, 'ganjil', 'p', '1', 30, 1, 0, 30, 0),
(57, 'MS019', 'Fisika (Lintas Minat)', 1, 'ganjil', 'p', '1', 30, 1, 0, 30, 0),
(58, 'MA023', 'Biologi (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(59, 'MA024', 'Biologi (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(60, 'MA025', 'Biologi (Peminatan)', 2, 'ganjil', 'w', '3', 30, 2, 0, 50, 0),
(61, 'MA026', 'Biologi (Peminatan)', 2, 'ganjil', 'w', '5', 30, 2, 0, 50, 0),
(62, 'MS020', 'Biologi (Lintas Minat)', 2, 'ganjil', 'p', '1', 30, 1, 0, 50, 0),
(63, 'MS021', 'Biologi (Lintas Minat)', 1, 'ganjil', 'p', '1', 30, 1, 0, 50, 0),
(64, 'MA027', 'Kimia (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(65, 'MA028', 'Kimia (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(66, 'MA029', 'Kimia (Peminatan)', 2, 'ganjil', 'w', '3', 30, 2, 0, 50, 0),
(67, 'MA030', 'Kimia (Peminatan)', 2, 'ganjil', 'w', '5', 30, 2, 0, 50, 0),
(68, 'MS022', 'Kimia (Lintas Minat)', 2, 'ganjil', 'p', '1', 30, 1, 0, 50, 0),
(69, 'MS023', 'Kimia (Lintas Minat)', 1, 'ganjil', 'p', '1', 30, 1, 0, 50, 0),
(70, 'MS024', 'Kimia (Lintas Minat)', 2, 'ganjil', 'p', '3', 30, 2, 0, 50, 0),
(71, 'MS025', 'Kimia (Lintas Minat)', 2, 'ganjil', 'p', '5', 30, 2, 0, 50, 0),
(72, 'MAS016', 'Sejarah', 2, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(73, 'MAS017', 'Sejarah', 2, 'ganjil', 'w', '3', 30, 1, 1, 50, 0),
(74, 'MAS018', 'Sejarah', 2, 'ganjil', 'w', '5', 30, 1, 1, 50, 0),
(75, 'MS026', 'Sejarah (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(76, 'MS027', 'Sejarah (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(77, 'MS028', 'Sejarah (Peminatan)', 2, 'ganjil', 'w', '3', 30, 2, 0, 50, 0),
(78, 'MS029', 'Sejarah (Peminatan)', 2, 'ganjil', 'w', '5', 30, 2, 0, 50, 0),
(79, 'MS030', 'Geografi (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(80, 'MS031', 'Geografi (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 50, 0),
(81, 'MS032', 'Geografi (Peminatan)', 2, 'ganjil', 'w', '3', 30, 1, 0, 50, 0),
(82, 'MS033', 'Geografi (Peminatan)', 2, 'ganjil', 'w', '5', 30, 1, 0, 50, 0),
(83, 'MA031', 'Geografi (Lintas Minat)', 2, 'ganjil', 'p', '5', 30, 1, 0, 50, 0),
(84, 'MS034', 'Ekonomi (Peminatan)', 2, 'ganjil', 'w', '3', 30, 2, 0, 50, 0),
(85, 'MS035', 'Ekonomi (Peminatan)', 2, 'ganjil', 'w', '5', 30, 2, 0, 50, 0),
(86, 'MS036', 'Ekonomi (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(87, 'MS037', 'Ekonomi (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(88, 'MA032', 'Ekonomi (Lintas Minat)', 2, 'ganjil', 'p', '1', 30, 2, 0, 30, 0),
(89, 'MA033', 'Ekonomi (Lintas Minat)', 1, 'ganjil', 'p', '1', 30, 1, 0, 30, 0),
(90, 'MA034', 'Ekonomi (Lintas Minat)', 2, 'ganjil', 'p', '3', 30, 1, 0, 50, 0),
(91, 'MS038', 'Sosiologi (Peminatan)', 2, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(92, 'MS039', 'Sosiologi (Peminatan)', 1, 'ganjil', 'w', '1', 30, 1, 0, 30, 0),
(93, 'MS040', 'Sosiologi (Peminatan)', 2, 'ganjil', 'w', '3', 30, 1, 0, 50, 0),
(94, 'MS041', 'Sosiologi (Peminatan)', 2, 'ganjil', 'w', '5', 30, 1, 0, 50, 0),
(95, 'MA035', 'Sosiologi (Lintas Minat)', 2, 'ganjil', 'p', '5', 30, 1, 0, 50, 0),
(96, 'MAS019', 'Kesenian', 2, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(97, 'MAS020', 'Kesenian', 2, 'ganjil', 'w', '3', 30, 1, 1, 50, 0),
(98, 'MAS021', 'Kesenian', 2, 'ganjil', 'w', '5', 30, 1, 1, 50, 0),
(99, 'MAS022', 'PKWU', 2, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(100, 'MAS023', 'PKWU', 2, 'ganjil', 'w', '3', 30, 1, 1, 50, 0),
(101, 'MAS024', 'PKWU', 2, 'ganjil', 'w', '5', 30, 1, 1, 50, 0),
(102, 'MAS025', 'Penjaskes', 2, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(103, 'MAS026', 'Penjaskes', 1, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(104, 'MAS027', 'Penjaskes', 2, 'ganjil', 'w', '3', 30, 1, 1, 50, 0),
(105, 'MAS028', 'Penjaskes', 1, 'ganjil', 'w', '3', 30, 1, 1, 50, 0),
(106, 'MAS029', 'Penjaskes', 2, 'ganjil', 'w', '5', 30, 1, 1, 50, 0),
(107, 'MAS030', 'Penjaskes', 1, 'ganjil', 'w', '5', 30, 1, 1, 50, 0),
(108, 'MAS031', 'Bahasa Jawa', 2, 'ganjil', 'w', '1', 30, 1, 1, 50, 0),
(109, 'MAS032', 'Bahasa Jawa', 2, 'ganjil', 'w', '3', 30, 1, 1, 30, 0),
(110, 'MAS033', 'Bahasa Jawa', 2, 'ganjil', 'w', '5', 30, 1, 0, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kur_prodi`
--

CREATE TABLE `mapel_kur_prodi` (
  `mpkprod_id` int(10) NOT NULL,
  `mpkprod_mpkur_id` int(10) DEFAULT NULL,
  `mpkprod_prodi_id` int(10) DEFAULT NULL,
  `mpkprod_related_id` int(10) DEFAULT 0 COMMENT 'if kelas gabung, isi dgn mkkprod_id yg udah ada before',
  `mpkprod_porsi_kelas` int(10) DEFAULT 1 COMMENT 'porsi kelas dari jumlah total peserta makul'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel_kur_prodi`
--

INSERT INTO `mapel_kur_prodi` (`mpkprod_id`, `mpkprod_mpkur_id`, `mpkprod_prodi_id`, `mpkprod_related_id`, `mpkprod_porsi_kelas`) VALUES
(42, 57, 2, 0, 1),
(43, 42, 1, 0, 1),
(44, 32, 2, 0, 1),
(45, 31, 2, 0, 1),
(46, 30, 2, 0, 1),
(47, 29, 2, 0, 1),
(48, 28, 1, 0, 1),
(49, 27, 1, 0, 1),
(50, 26, 2, 0, 1),
(51, 25, 2, 0, 1),
(52, 43, 1, 0, 1),
(53, 44, 2, 0, 1),
(54, 56, 2, 0, 1),
(55, 55, 1, 0, 1),
(56, 54, 1, 0, 1),
(57, 53, 1, 0, 1),
(58, 52, 1, 0, 1),
(59, 51, 1, 0, 1),
(60, 50, 1, 0, 1),
(61, 46, 1, 0, 1),
(62, 45, 2, 0, 1),
(63, 19, 2, 0, 1),
(64, 24, 1, 0, 1),
(65, 23, 1, 0, 1),
(66, 22, 2, 0, 1),
(67, 7, 1, 0, 1),
(68, 8, 1, 0, 1),
(69, 9, 2, 0, 1),
(70, 10, 2, 0, 1),
(71, 11, 1, 0, 1),
(72, 12, 1, 0, 1),
(73, 13, 2, 0, 1),
(74, 15, 1, 0, 1),
(75, 18, 2, 0, 1),
(76, 17, 2, 0, 1),
(77, 16, 1, 0, 1),
(78, 14, 2, 0, 1),
(79, 20, 1, 0, 1),
(80, 21, 2, 0, 1),
(81, 62, 2, 0, 1),
(82, 63, 2, 0, 1),
(83, 61, 1, 0, 2),
(84, 60, 1, 0, 2),
(85, 59, 1, 0, 2),
(86, 58, 1, 0, 2),
(87, 71, 2, 0, 2),
(88, 70, 2, 0, 2),
(89, 69, 2, 0, 1),
(90, 68, 2, 0, 1),
(91, 67, 1, 0, 2),
(92, 66, 1, 0, 2),
(93, 65, 1, 0, 2),
(94, 64, 1, 0, 2),
(95, 78, 2, 0, 2),
(96, 77, 2, 0, 2),
(97, 76, 2, 0, 2),
(98, 75, 2, 0, 2),
(99, 82, 2, 0, 2),
(100, 81, 2, 0, 2),
(101, 80, 2, 0, 2),
(102, 79, 2, 0, 2),
(103, 83, 1, 0, 1),
(105, 84, 2, 0, 2),
(106, 85, 2, 0, 2),
(111, 91, 2, 0, 2),
(112, 92, 2, 0, 2),
(113, 93, 1, 0, 1),
(114, 95, 1, 0, 1),
(115, 94, 2, 0, 2),
(116, 86, 2, 0, 2),
(117, 87, 2, 0, 2),
(118, 88, 1, 0, 2),
(119, 89, 1, 0, 2),
(120, 90, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `prodi_id` int(10) NOT NULL,
  `prodi_kode` varchar(10) DEFAULT NULL,
  `prodi_nama` varchar(50) DEFAULT NULL,
  `prodi_prefix_mp` varchar(4) DEFAULT NULL COMMENT 'prefix mapel',
  `prodi_smt` varchar(11) DEFAULT NULL,
  `prodi_jml_siswa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`prodi_id`, `prodi_kode`, `prodi_nama`, `prodi_prefix_mp`, `prodi_smt`, `prodi_jml_siswa`) VALUES
(1, 'IPA', 'ILMU PENGETAHUAN ALAM', 'A', '1;2;3;4;5;6', '30;30;30;30;30;30'),
(2, 'IPS', 'ILMU PENGETAHUAN SOSIAL', 'S', '1;2;3;4;5;6', '30;30;30;30;30;30');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `ru_id` int(10) NOT NULL,
  `ru_kode` varchar(6) DEFAULT NULL,
  `ru_prodi_id` int(10) DEFAULT NULL,
  `ru_nama` varchar(20) DEFAULT NULL,
  `ru_kapasitas` int(6) DEFAULT NULL,
  `ru_jenis` tinyint(1) DEFAULT 0 COMMENT '1=Praktikum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`ru_id`, `ru_kode`, `ru_prodi_id`, `ru_nama`, `ru_kapasitas`, `ru_jenis`) VALUES
(1, 'RB001', 1, 'IPA', 30, 0),
(2, 'RB002', 1, 'IPA', 30, 0),
(3, 'RB003', 1, 'IPA', 30, 0),
(4, 'RB004', 1, 'IPA', 30, 0),
(5, 'RB005', 1, 'IPA', 30, 0),
(6, 'RB006', 1, 'IPA', 30, 0),
(7, 'RB007', 2, 'IPS', 30, 0),
(8, 'RB008', 2, 'IPS', 30, 0),
(9, 'RB009', 2, 'IPS', 30, 0),
(10, 'RB010', 2, 'IPS', 30, 0),
(11, 'RB011', 2, 'IPS', 30, 0),
(12, 'RB012', 2, 'IPS', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(20) DEFAULT NULL,
  `user_email` varchar(20) DEFAULT NULL,
  `user_pwd` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `user_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_email`, `user_pwd`, `user_level`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'Siswa', 'siswa@gmail.com', 'siswa', 'siswa'),
(3, 'Guru', 'guru@gmail.com', 'guru', 'guru'),
(4, 'Kepsek', 'kepsek@gmail.com', 'kepsek', 'kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `waktu_id` int(10) NOT NULL,
  `waktu_hari` varchar(10) DEFAULT NULL,
  `waktu_jam_mulai` time DEFAULT NULL,
  `waktu_jam_selesai` time DEFAULT NULL,
  `waktu_is_belajar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`waktu_id`, `waktu_hari`, `waktu_jam_mulai`, `waktu_jam_selesai`, `waktu_is_belajar`) VALUES
(1, 'senin', '08:00:00', '09:30:00', 2),
(2, 'senin', '09:45:00', '11:15:00', 2),
(3, 'senin', '11:15:00', '12:00:00', 1),
(4, 'senin', '12:30:00', '14:00:00', 2),
(5, 'senin', '12:30:00', '13:15:00', 1),
(6, 'senin', '14:00:00', '15:30:00', 2),
(7, 'senin', '13:15:00', '14:00:00', 1),
(8, 'selasa', '07:15:00', '08:45:00', 2),
(9, 'selasa', '08:45:00', '09:30:00', 1),
(10, 'selasa', '09:45:00', '11:15:00', 2),
(11, 'selasa', '11:15:00', '12:00:00', 1),
(12, 'selasa', '12:30:00', '14:00:00', 2),
(13, 'selasa', '12:30:00', '13:15:00', 1),
(14, 'selasa', '14:00:00', '15:30:00', 2),
(15, 'selasa', '14:00:00', '14:45:00', 1),
(16, 'rabu', '07:15:00', '08:45:00', 2),
(17, 'rabu', '08:45:00', '09:30:00', 1),
(18, 'rabu', '09:45:00', '11:15:00', 2),
(19, 'rabu', '11:15:00', '12:00:00', 1),
(20, 'rabu', '12:30:00', '14:00:00', 2),
(21, 'rabu', '13:15:00', '14:00:00', 1),
(22, 'rabu', '14:00:00', '15:30:00', 2),
(23, 'rabu', '14:45:00', '15:30:00', 1),
(24, 'kamis', '07:15:00', '08:45:00', 2),
(25, 'kamis', '08:45:00', '09:30:00', 1),
(26, 'kamis', '09:45:00', '11:15:00', 2),
(27, 'kamis', '11:15:00', '12:00:00', 1),
(28, 'kamis', '12:30:00', '14:00:00', 2),
(29, 'kamis', '12:30:00', '13:15:00', 1),
(30, 'kamis', '14:00:00', '15:30:00', 2),
(31, 'kamis', '14:45:00', '15:30:00', 1),
(32, 'jumat', '07:00:00', '08:30:00', 2),
(33, 'jumat', '08:30:00', '09:15:00', 1),
(34, 'jumat', '09:30:00', '11:00:00', 2),
(35, 'jumat', '11:00:00', '11:45:00', 1),
(36, 'jumat', '13:00:00', '13:45:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`conf_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  ADD PRIMARY KEY (`grkls_id`),
  ADD KEY `FK_guru_kelas_2` (`grkls_kls_id`) USING BTREE,
  ADD KEY `grkls_key` (`grkls_gr_id`,`grkls_kls_id`) USING BTREE;

--
-- Indexes for table `guru_waktu`
--
ALTER TABLE `guru_waktu`
  ADD PRIMARY KEY (`grwkt_id`),
  ADD KEY `dsnwkt_key` (`grwkt_gr_id`,`grwkt_wkt_id`),
  ADD KEY `FK_dosen_waktu_2` (`grwkt_wkt_id`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`jp_id`),
  ADD KEY `FK_jadwal_kuliah_` (`jp_wkt_id`),
  ADD KEY `FK_jadwal_kuliah_2` (`jp_ru_id`),
  ADD KEY `FK_jadwal_kuliah` (`jp_kls_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kls_id`),
  ADD KEY `kls_mkkur_id_key` (`kls_mpkur_id`);

--
-- Indexes for table `mapel_kurikulum`
--
ALTER TABLE `mapel_kurikulum`
  ADD PRIMARY KEY (`mpkur_id`);

--
-- Indexes for table `mapel_kur_prodi`
--
ALTER TABLE `mapel_kur_prodi`
  ADD PRIMARY KEY (`mpkprod_id`),
  ADD UNIQUE KEY `mkprodi_key` (`mpkprod_mpkur_id`,`mpkprod_prodi_id`),
  ADD KEY `FK_mkkur_prodi_FK2` (`mpkprod_prodi_id`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`ru_id`),
  ADD KEY `ruang_ibfk_1` (`ru_prodi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`waktu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  MODIFY `grkls_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `guru_waktu`
--
ALTER TABLE `guru_waktu`
  MODIFY `grwkt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `jp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kls_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `mapel_kurikulum`
--
ALTER TABLE `mapel_kurikulum`
  MODIFY `mpkur_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `mapel_kur_prodi`
--
ALTER TABLE `mapel_kur_prodi`
  MODIFY `mpkprod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `prodi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `ru_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `waktu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru_kelas`
--
ALTER TABLE `guru_kelas`
  ADD CONSTRAINT `FK_dosen_kelas` FOREIGN KEY (`grkls_gr_id`) REFERENCES `guru` (`guru_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_dosen_kelas_kls` FOREIGN KEY (`grkls_kls_id`) REFERENCES `kelas` (`kls_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru_waktu`
--
ALTER TABLE `guru_waktu`
  ADD CONSTRAINT `FK_dosen_waktu` FOREIGN KEY (`grwkt_gr_id`) REFERENCES `guru` (`guru_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_dosen_waktu_2` FOREIGN KEY (`grwkt_wkt_id`) REFERENCES `waktu` (`waktu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `FK_jadwal_kuliah_` FOREIGN KEY (`jp_wkt_id`) REFERENCES `waktu` (`waktu_id`),
  ADD CONSTRAINT `FK_jadwal_kuliah_2` FOREIGN KEY (`jp_ru_id`) REFERENCES `ruang` (`ru_id`),
  ADD CONSTRAINT `FK_jadwal_kuliah_kls` FOREIGN KEY (`jp_kls_id`) REFERENCES `kelas` (`kls_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kls_mpkur_id`) REFERENCES `mapel_kurikulum` (`mpkur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapel_kur_prodi`
--
ALTER TABLE `mapel_kur_prodi`
  ADD CONSTRAINT `FK_mkkur_prodi_FK2` FOREIGN KEY (`mpkprod_prodi_id`) REFERENCES `program_studi` (`prodi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_mkkur_prodi_mk` FOREIGN KEY (`mpkprod_mpkur_id`) REFERENCES `mapel_kurikulum` (`mpkur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_ibfk_1` FOREIGN KEY (`ru_prodi_id`) REFERENCES `program_studi` (`prodi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
