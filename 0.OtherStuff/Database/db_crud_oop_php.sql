-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:42 AM
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
-- Database: `db_crud_oop_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_album`
--

CREATE TABLE `tb_album` (
  `album_id` int(11) NOT NULL,
  `album_id_photo` int(11) DEFAULT NULL,
  `album_title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_album`
--

INSERT INTO `tb_album` (`album_id`, `album_id_photo`, `album_title`) VALUES
(1, 2, 'album'),
(2, 3, 'album1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_text` varbinary(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`, `cat_text`) VALUES
(1, 'Food', 0x466f6f6420697320776861742070656f706c6520616e6420616e696d616c732065617420746f206c697665),
(2, 'Nature', 0x4e61747572652063616e20726566657220746f207468652067656e6572616c207265616c6d206f66206c6976696e6720706c616e747320616e6420616e696d616c73),
(3, 'Sports ', 0x53706f72747320697320612068756d616e20616374697669747920696e766f6c76696e6720706879736963616c20736b696c),
(4, 'Drink', 0x4472696e6b20697320776861742070656f706c6520616e6420616e696d616c73206472696e6b20746f206c697665);

-- --------------------------------------------------------

--
-- Table structure for table `tb_photos`
--

CREATE TABLE `tb_photos` (
  `photo_id` int(11) NOT NULL,
  `photo_id_post` int(11) DEFAULT NULL,
  `photo_title` varchar(100) DEFAULT NULL,
  `photo_file` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_photos`
--

INSERT INTO `tb_photos` (`photo_id`, `photo_id_post`, `photo_title`, `photo_file`) VALUES
(1, 1, 'photos', 'photos'),
(2, 2, 'photos1', 'photos1'),
(3, 1, 'photos2', 'photos2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `post_id_cat` int(11) DEFAULT NULL,
  `post_slug` varchar(25) DEFAULT NULL,
  `post_title` varchar(100) DEFAULT NULL,
  `post_text` text DEFAULT NULL,
  `post_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_id_cat`, `post_slug`, `post_title`, `post_text`, `post_date`) VALUES
(1, 3, 'post', 'post', 'post', '2022-05-17'),
(2, 4, 'post1', 'post1', 'post1', '2022-05-17'),
(3, 2, 'post2', 'post2', 'post2', '2022-05-10');

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
-- Indexes for table `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_id_photo` (`album_id_photo`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `photo_id_post` (`photo_id_post`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id_cat` (`post_id_cat`);

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
  ADD CONSTRAINT `album_id_photo` FOREIGN KEY (`album_id_photo`) REFERENCES `tb_photos` (`photo_id`);

--
-- Constraints for table `tb_photos`
--
ALTER TABLE `tb_photos`
  ADD CONSTRAINT `photo_id_post` FOREIGN KEY (`photo_id_post`) REFERENCES `tb_post` (`post_id`);

--
-- Constraints for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `post_id_cat` FOREIGN KEY (`post_id_cat`) REFERENCES `tb_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
