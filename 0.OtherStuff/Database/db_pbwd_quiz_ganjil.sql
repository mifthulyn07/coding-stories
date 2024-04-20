-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:43 AM
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
-- Database: `db_pbwd_quiz_ganjil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `alb_id` int(11) NOT NULL,
  `alb_id_artist` int(11) DEFAULT NULL,
  `alb_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`alb_id`, `alb_id_artist`, `alb_name`) VALUES
(1, 1, 'Album LP'),
(2, 2, 'Album BM'),
(3, 4, 'Album A'),
(4, 6, 'Album T'),
(5, 7, 'Album F'),
(6, 3, 'Album AG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artist`
--

CREATE TABLE `tb_artist` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artist`
--

INSERT INTO `tb_artist` (`art_id`, `art_name`) VALUES
(1, 'Linkin Park'),
(2, 'Bruno Mars'),
(3, 'Ariana Grande'),
(4, 'Adelle'),
(5, 'Kangen Band'),
(6, 'Tulus'),
(7, 'Fierra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_played`
--

CREATE TABLE `tb_played` (
  `ply_id` int(11) NOT NULL,
  `ply_id_track` int(11) DEFAULT NULL,
  `ply_played` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_played`
--

INSERT INTO `tb_played` (`ply_id`, `ply_id_track`, `ply_played`) VALUES
(1, 2, '2022-05-12 03:21:00'),
(2, 3, '2022-05-11 17:00:00'),
(3, 1, '2022-05-11 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_track`
--

CREATE TABLE `tb_track` (
  `trc_id` int(11) NOT NULL,
  `trc_name` varchar(100) DEFAULT NULL,
  `trc_id_album` int(11) DEFAULT NULL,
  `trc_time` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_track`
--

INSERT INTO `tb_track` (`trc_id`, `trc_name`, `trc_id_album`, `trc_time`) VALUES
(1, 'Dia', 4, '1'),
(2, 'Meteora', 1, '2'),
(3, 'Lazy Song', 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(225) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`alb_id`),
  ADD KEY `alb_id_artist` (`alb_id_artist`);

--
-- Indexes for table `tb_artist`
--
ALTER TABLE `tb_artist`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `tb_played`
--
ALTER TABLE `tb_played`
  ADD PRIMARY KEY (`ply_id`),
  ADD KEY `ply_id_track` (`ply_id_track`);

--
-- Indexes for table `tb_track`
--
ALTER TABLE `tb_track`
  ADD PRIMARY KEY (`trc_id`),
  ADD KEY `trc_id_album` (`trc_id_album`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `alb_id_artist` FOREIGN KEY (`alb_id_artist`) REFERENCES `tb_artist` (`art_id`);

--
-- Constraints for table `tb_played`
--
ALTER TABLE `tb_played`
  ADD CONSTRAINT `ply_id_track` FOREIGN KEY (`ply_id_track`) REFERENCES `tb_track` (`trc_id`);

--
-- Constraints for table `tb_track`
--
ALTER TABLE `tb_track`
  ADD CONSTRAINT `trc_id_album` FOREIGN KEY (`trc_id_album`) REFERENCES `tb_album` (`alb_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
