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
-- Database: `db_sabona`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_agt` int(11) NOT NULL,
  `nama_agt` varchar(100) DEFAULT NULL,
  `tlp_agt` varchar(100) DEFAULT NULL,
  `almt_agt` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_agt`, `nama_agt`, `tlp_agt`, `almt_agt`) VALUES
(1, 'Junaidi', '0813', 'Jl.Bintang Timur'),
(2, 'Nadia', '0813', 'Jl.Maharani'),
(3, 'Mumun', '0821', 'Blok B Barat'),
(9, 'Astuti', '0812', 'Perumahan Indah'),
(10, 'Putri', '0833', 'Gg.Kemangi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arisan`
--

CREATE TABLE `tb_arisan` (
  `id_ars` int(11) NOT NULL,
  `idprd_ars` int(11) DEFAULT NULL,
  `jns_ars` varchar(100) DEFAULT NULL,
  `nama_ars` varchar(100) DEFAULT NULL,
  `tgl_ars` date DEFAULT NULL,
  `masuk_ars` bigint(20) DEFAULT NULL,
  `keluar_ars` bigint(20) DEFAULT NULL,
  `ket_ars` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_arisan`
--

INSERT INTO `tb_arisan` (`id_ars`, `idprd_ars`, `jns_ars`, `nama_ars`, `tgl_ars`, `masuk_ars`, `keluar_ars`, `ket_ars`) VALUES
(4, 1, 'Arisan', 'Keluarga Nurli', '2022-05-17', 430000, 30000, ''),
(5, 1, 'Donasi', 'Keluarga Mimin', '2022-05-10', 0, 80000, 'Nenek Meninggal'),
(7, 3, 'Biaya Lainnya', 'Spanduk', '2022-05-18', 0, 30000, ''),
(11, 3, 'Arisan', 'ggg', '0000-00-00', 0, 0, ''),
(22, 16, 'Arisan', 'fcngfn', '2022-05-13', 0, 0, ''),
(25, 16, 'Donasi', 'hiaku', '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_byr` int(11) NOT NULL,
  `idars_byr` int(11) DEFAULT NULL,
  `idagt_byr` int(11) DEFAULT NULL,
  `tgl_byr` date DEFAULT NULL,
  `byr` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id_byr`, `idars_byr`, `idagt_byr`, `tgl_byr`, `byr`) VALUES
(1, NULL, 1, '2022-05-11', 20000),
(2, NULL, 3, '2022-05-13', 50000),
(6, NULL, 9, '2022-05-02', 50000),
(7, NULL, 2, '2022-05-24', 40000),
(13, 22, 2, '2022-05-09', 50000),
(18, 4, 2, '2022-05-15', 30000),
(19, 4, 3, '0000-00-00', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biayalainnya`
--

CREATE TABLE `tb_biayalainnya` (
  `id_bl` int(11) NOT NULL,
  `idars_bl` int(11) DEFAULT NULL,
  `nama_bl` varchar(100) DEFAULT NULL,
  `tgl_bl` date DEFAULT NULL,
  `bl` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biayalainnya`
--

INSERT INTO `tb_biayalainnya` (`id_bl`, `idars_bl`, `nama_bl`, `tgl_bl`, `bl`) VALUES
(1, NULL, 'Darurat', '2022-05-30', 500000),
(2, NULL, 'Jalan-Jalan', '2022-05-10', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_dns` int(11) NOT NULL,
  `idars_dns` int(11) DEFAULT NULL,
  `idagt_dns` int(11) DEFAULT NULL,
  `tgl_dns` date DEFAULT NULL,
  `dns` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_dns`, `idars_dns`, `idagt_dns`, `tgl_dns`, `dns`) VALUES
(1, 25, 9, '2022-05-15', 30000),
(3, 25, 1, '2022-05-17', 40000),
(5, 5, 2, '2022-05-18', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_prd` int(11) NOT NULL,
  `nama_prd` varchar(100) DEFAULT NULL,
  `mulaitgl_prd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_prd`, `nama_prd`, `mulaitgl_prd`) VALUES
(1, 'Periode I', '2019-08-29'),
(3, 'Periode II', '2022-05-28'),
(16, 'Periode III', '2022-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
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
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_agt`);

--
-- Indexes for table `tb_arisan`
--
ALTER TABLE `tb_arisan`
  ADD PRIMARY KEY (`id_ars`),
  ADD KEY `idprd_ars` (`idprd_ars`);

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_byr`),
  ADD KEY `idars_byr` (`idars_byr`),
  ADD KEY `idagt_byr` (`idagt_byr`);

--
-- Indexes for table `tb_biayalainnya`
--
ALTER TABLE `tb_biayalainnya`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `idars_bl` (`idars_bl`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id_dns`),
  ADD KEY `idars_dns` (`idars_dns`),
  ADD KEY `idagt_dns` (`idagt_dns`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_prd`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_agt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_arisan`
--
ALTER TABLE `tb_arisan`
  MODIFY `id_ars` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id_byr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_biayalainnya`
--
ALTER TABLE `tb_biayalainnya`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id_dns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_prd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_arisan`
--
ALTER TABLE `tb_arisan`
  ADD CONSTRAINT `idprd_ars` FOREIGN KEY (`idprd_ars`) REFERENCES `tb_periode` (`id_prd`);

--
-- Constraints for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD CONSTRAINT `idagt_byr` FOREIGN KEY (`idagt_byr`) REFERENCES `tb_anggota` (`id_agt`),
  ADD CONSTRAINT `idars_byr` FOREIGN KEY (`idars_byr`) REFERENCES `tb_arisan` (`id_ars`);

--
-- Constraints for table `tb_biayalainnya`
--
ALTER TABLE `tb_biayalainnya`
  ADD CONSTRAINT `idars_bl` FOREIGN KEY (`idars_bl`) REFERENCES `tb_arisan` (`id_ars`);

--
-- Constraints for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD CONSTRAINT `idagt_dns` FOREIGN KEY (`idagt_dns`) REFERENCES `tb_anggota` (`id_agt`),
  ADD CONSTRAINT `idars_dns` FOREIGN KEY (`idars_dns`) REFERENCES `tb_arisan` (`id_ars`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
