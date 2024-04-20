/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.13-MariaDB : Database - dbcommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbcommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbcommerce`;

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `kat_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `kat_nama` varchar(50) DEFAULT NULL,
  `kat_keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`kat_id`,`kat_nama`,`kat_keterangan`,`created_at`,`updated_at`) values 
(1,'Kecantikan',NULL,'2021-11-24 16:20:05',NULL),
(2,'Elektronik',NULL,'2021-11-24 16:20:06',NULL),
(3,'Olahraga',NULL,'2021-11-24 16:20:07',NULL),
(4,'Pakaian Wanita',NULL,'2021-11-24 16:20:08',NULL),
(5,'Pakaian Pria',NULL,'2021-11-24 16:20:09',NULL),
(6,'Aksesoris',NULL,'2021-11-24 16:20:10',NULL),
(7,'Sepatu',NULL,'2021-11-24 16:20:12',NULL),
(8,'Makanan',NULL,'2021-11-24 16:20:13',NULL),
(9,'Buku',NULL,'2021-11-24 16:20:39',NULL),
(10,'Alat Masak',NULL,'2021-11-24 16:21:08',NULL);

/*Table structure for table `tb_keranjang` */

DROP TABLE IF EXISTS `tb_keranjang`;

CREATE TABLE `tb_keranjang` (
  `ker_id` int(11) NOT NULL AUTO_INCREMENT,
  `ker_id_user` int(11) DEFAULT NULL,
  `ker_id_produk` int(11) DEFAULT NULL,
  `ker_harga` int(11) DEFAULT NULL,
  `ker_jml` int(11) DEFAULT NULL,
  PRIMARY KEY (`ker_id`),
  KEY `ker_id_user` (`ker_id_user`),
  KEY `ker_id_produk` (`ker_id_produk`),
  CONSTRAINT `ker_id_produk` FOREIGN KEY (`ker_id_produk`) REFERENCES `tb_produk` (`produk_id`),
  CONSTRAINT `ker_id_user` FOREIGN KEY (`ker_id_user`) REFERENCES `tb_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_keranjang` */

insert  into `tb_keranjang`(`ker_id`,`ker_id_user`,`ker_id_produk`,`ker_harga`,`ker_jml`) values 
(1,1,1,12000,NULL),
(2,2,2,123000,NULL),
(3,3,3,238000,NULL),
(4,4,4,124000,NULL),
(5,5,5,345000,NULL),
(6,6,6,23000,NULL),
(7,7,7,56000,NULL),
(8,8,8,345000,NULL),
(9,9,9,400000,NULL),
(10,10,10,200000,NULL);

/*Table structure for table `tb_order` */

DROP TABLE IF EXISTS `tb_order`;

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id_user` int(11) DEFAULT NULL,
  `order_tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_kode` varchar(50) NOT NULL,
  `order_ttl` double DEFAULT NULL,
  `order_kurir` varchar(100) DEFAULT NULL,
  `order_ongkir` int(11) DEFAULT NULL,
  `order_byr_deadline` datetime DEFAULT NULL,
  `order_batal` tinyint(4) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`,`order_kode`),
  KEY `order_id_user` (`order_id_user`),
  CONSTRAINT `order_id_user` FOREIGN KEY (`order_id_user`) REFERENCES `tb_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_order` */

insert  into `tb_order`(`order_id`,`order_id_user`,`order_tgl`,`order_kode`,`order_ttl`,`order_kurir`,`order_ongkir`,`order_byr_deadline`,`order_batal`,`update_at`) values 
(1,1,'2021-11-24 16:26:22','123',NULL,NULL,NULL,NULL,NULL,NULL),
(2,2,'2021-11-24 16:34:01','234',NULL,NULL,NULL,NULL,NULL,NULL),
(3,3,'2021-11-24 16:34:42','345',NULL,NULL,NULL,NULL,NULL,NULL),
(4,4,'2021-11-24 16:34:47','456',NULL,NULL,NULL,NULL,NULL,NULL),
(5,5,'2021-11-24 16:34:51','567',NULL,NULL,NULL,NULL,NULL,NULL),
(6,6,'2021-11-24 16:34:52','678',NULL,NULL,NULL,NULL,NULL,NULL),
(7,7,'2021-11-24 16:34:54','789',NULL,NULL,NULL,NULL,NULL,NULL),
(8,8,'2021-11-24 16:34:57','890',NULL,NULL,NULL,NULL,NULL,NULL),
(9,9,'2021-11-24 16:34:59','901',NULL,NULL,NULL,NULL,NULL,NULL),
(10,10,'2021-11-24 16:35:02','012',NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tb_order_detail` */

DROP TABLE IF EXISTS `tb_order_detail`;

CREATE TABLE `tb_order_detail` (
  `detail_id_order` int(11) DEFAULT NULL,
  `detail_id_produk` int(11) DEFAULT NULL,
  `detail_harga` double DEFAULT NULL,
  `detail_jml` int(11) DEFAULT NULL,
  KEY `detail_id_order` (`detail_id_order`),
  KEY `detail_id_produk` (`detail_id_produk`),
  CONSTRAINT `detail_id_order` FOREIGN KEY (`detail_id_order`) REFERENCES `tb_order` (`order_id`),
  CONSTRAINT `detail_id_produk` FOREIGN KEY (`detail_id_produk`) REFERENCES `tb_produk` (`produk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_order_detail` */

insert  into `tb_order_detail`(`detail_id_order`,`detail_id_produk`,`detail_harga`,`detail_jml`) values 
(1,1,NULL,NULL),
(2,2,NULL,NULL),
(3,3,NULL,NULL),
(4,4,NULL,NULL),
(5,5,NULL,NULL),
(6,6,NULL,NULL),
(7,7,NULL,NULL),
(8,8,NULL,NULL),
(9,9,NULL,NULL),
(10,10,NULL,NULL);

/*Table structure for table `tb_produk` */

DROP TABLE IF EXISTS `tb_produk`;

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id_kat` tinyint(3) DEFAULT NULL,
  `produk_id_user` int(11) DEFAULT NULL,
  `produk_kode` varchar(50) NOT NULL,
  `produk_nama` varchar(256) DEFAULT NULL,
  `produk_hrg` double DEFAULT NULL,
  `produk_keterangan` text DEFAULT NULL,
  `produk_stock` int(11) DEFAULT NULL,
  `produk_photo` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`produk_id`,`produk_kode`),
  KEY `produk_id_kat` (`produk_id_kat`),
  KEY `produk_id_user` (`produk_id_user`),
  CONSTRAINT `produk_id_kat` FOREIGN KEY (`produk_id_kat`) REFERENCES `tb_kategori` (`kat_id`),
  CONSTRAINT `produk_id_user` FOREIGN KEY (`produk_id_user`) REFERENCES `tb_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_produk` */

insert  into `tb_produk`(`produk_id`,`produk_id_kat`,`produk_id_user`,`produk_kode`,`produk_nama`,`produk_hrg`,`produk_keterangan`,`produk_stock`,`produk_photo`,`create_at`,`update_at`) values 
(1,1,1,'123','Headset',NULL,NULL,NULL,NULL,'2021-11-24 16:36:13',NULL),
(2,2,2,'234','Mouse',NULL,NULL,NULL,NULL,'2021-11-24 16:36:27',NULL),
(3,3,3,'345','Polytron',NULL,NULL,NULL,NULL,'2021-11-24 16:36:32',NULL),
(4,4,4,'456','Chitos',NULL,NULL,NULL,NULL,'2021-11-24 16:36:35',NULL),
(5,5,5,'567','Lemari',NULL,NULL,NULL,NULL,'2021-11-24 16:36:39',NULL),
(6,6,6,'678','Kipas Angin',NULL,NULL,NULL,NULL,'2021-11-24 16:36:45',NULL),
(7,7,7,'789','Garam',NULL,NULL,NULL,NULL,'2021-11-24 16:36:50',NULL),
(8,8,8,'890','Sendok',NULL,NULL,NULL,NULL,'2021-11-24 16:36:54',NULL),
(9,9,9,'901','Kalung',NULL,NULL,NULL,NULL,'2021-11-24 16:36:58',NULL),
(10,10,10,'012','Adidas',NULL,NULL,NULL,NULL,'2021-11-24 16:37:25',NULL);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_pos` varchar(5) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`user_email`,`user_password`,`user_nama`,`user_alamat`,`user_hp`,`user_pos`,`user_role`,`user_aktif`,`created_at`,`updated_at`) values 
(1,'mifthulyn07@gmail.com','123','Miftahul Ulyana Hutabarat',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:01',NULL),
(2,'husnida@gmail.com','123','Husnida',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:02',NULL),
(3,'putriyana@gmail.com','123','Putri',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:03',NULL),
(4,'amanda@gmail.com','123','Amanda',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:05',NULL),
(5,'cindy@gmail.com','123','Cindy',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:06',NULL),
(6,'clara@gmail.com','123','Clara',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:07',NULL),
(7,'Agung@gmail.com','123','Agung',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:08',NULL),
(8,'Helmi@gmail.com','123','Helmi',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:10',NULL),
(9,'dimas@gmail.com','123','Dimas',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:41',NULL),
(10,'Bambang@gmail.com','123','Bambang',NULL,NULL,NULL,NULL,NULL,'2021-11-24 16:25:45',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
