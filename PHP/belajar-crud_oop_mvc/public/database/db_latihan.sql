/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_latihan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_latihan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_latihan`;

/*Table structure for table `tbl_mahasiswa` */

DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `nilaiteori` int(11) DEFAULT NULL,
  `nilaipraktek` int(11) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_mahasiswa` */

insert  into `tbl_mahasiswa`(`id`,`nim`,`nama`,`jurusan`,`email`,`nilaiteori`,`nilaipraktek`,`profil`) values 
(5,'0702192031','Miftahul Ulyana Hutabarat','Sistem Informasi','mifthulyn07@gmail.com',0,0,''),
(6,'0702192033','Nurli Masito Lubis','Teknik Mesin','nurliluis@gmail.com',0,0,'');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`username`,`password`) values 
(2,'miftah','$2y$10$6wqHlnF1BT5NBHiqyd7K5OqCTzeAEO1n.YwB8sZ1uIPMAL.ugk0DO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
