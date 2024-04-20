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
-- Database: `db_praktikum-10-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kat_id` tinyint(3) NOT NULL,
  `kat_nama` varchar(50) NOT NULL,
  `kat_keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kat_id`, `kat_nama`, `kat_keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pakaian Wanita', NULL, '2022-05-30 05:24:31', '2022-05-30 12:24:34'),
(2, 'Pakaian Pria', NULL, '2022-05-30 05:24:50', '2022-05-30 12:24:52'),
(3, 'Tas Wanita', NULL, '2022-05-30 05:25:09', '2022-05-30 12:25:11'),
(4, 'Tas Pria', NULL, '2022-05-30 05:25:19', '2022-05-30 12:25:21'),
(5, 'Sepatu Wanita', NULL, '2022-05-30 05:25:35', '2022-05-30 12:25:37'),
(6, 'Sepatu Pria', NULL, '2022-05-30 05:25:46', '2022-05-30 12:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `ker_id` int(11) NOT NULL,
  `ker_id_user` int(11) NOT NULL,
  `ker_id_produk` int(11) NOT NULL,
  `ker_harga` double DEFAULT NULL,
  `ker_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `order_id_user` int(11) NOT NULL,
  `order_tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_kode` varchar(50) NOT NULL,
  `order_ttl` double DEFAULT NULL,
  `order_kurir` varchar(100) DEFAULT NULL,
  `order_ongkir` int(11) DEFAULT 0,
  `order_byr_deadline` datetime DEFAULT NULL,
  `order_batal` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `detail_id_order` int(11) NOT NULL,
  `detail_id_produk` int(11) NOT NULL,
  `detail_harga` double DEFAULT NULL,
  `detail_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_id_kat` tinyint(3) NOT NULL,
  `produk_id_user` int(11) NOT NULL,
  `produk_kode` varchar(50) NOT NULL,
  `produk_nama` varchar(256) NOT NULL,
  `produk_hrg` double DEFAULT 0,
  `produk_keterangan` text DEFAULT NULL,
  `produk_stock` int(11) DEFAULT 0,
  `produk_photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_pos` varchar(5) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`ker_id`),
  ADD KEY `ker_id_user` (`ker_id_user`),
  ADD KEY `ker_id_produk` (`ker_id_produk`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_kode` (`order_kode`),
  ADD KEY `order_id_user` (`order_id_user`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD KEY `detail_id_order` (`detail_id_order`),
  ADD KEY `detail_id_produk` (`detail_id_produk`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD UNIQUE KEY `produk_kode` (`produk_kode`),
  ADD KEY `produk_id_kat` (`produk_id_kat`),
  ADD KEY `produk_id_user` (`produk_id_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kat_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `ker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`ker_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`ker_id_produk`) REFERENCES `tb_produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`order_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD CONSTRAINT `tb_order_detail_ibfk_1` FOREIGN KEY (`detail_id_order`) REFERENCES `tb_order` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_detail_ibfk_2` FOREIGN KEY (`detail_id_produk`) REFERENCES `tb_produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`produk_id_kat`) REFERENCES `tb_kategori` (`kat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`produk_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
