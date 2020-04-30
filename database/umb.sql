/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.3.15-MariaDB : Database - umb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`umb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `umb`;

/*Table structure for table `absence` */

DROP TABLE IF EXISTS `absence`;

CREATE TABLE `absence` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `motive` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'en attente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

/*Data for the table `absence` */

insert  into `absence`(`id`,`user`,`begin_date`,`end_date`,`motive`,`status`) values (19,'tortu','2019-07-11','2019-08-21','for leave','en attente'),(20,'ccs','2019-07-11','2019-08-21','for leave','en attente'),(22,'tortu','2019-07-03','2019-07-17','healthy','en attente');

/*Table structure for table `attendance` */

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `begin_date` datetime(6) NOT NULL,
  `begin_ip` varchar(20) NOT NULL,
  `end_date` datetime(6) NOT NULL,
  `end_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

/*Data for the table `attendance` */

/*Table structure for table `expense` */

DROP TABLE IF EXISTS `expense`;

CREATE TABLE `expense` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `motive` varchar(200) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `expense` */

insert  into `expense`(`id`,`user`,`date`,`amount`,`motive`,`url`) values (1,'tortu','2019-07-17',678678,'for my company','Receipts/2019_07/tortu_doc_1.pdf');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `users` varchar(30) DEFAULT NULL,
  `pd` varchar(70) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`users`,`pd`,`email`) values (1,'ccs','d033e22ae348aeb5660fc2140aec35850c4da997',NULL),(2,'tortu','f621c659f5d107e5589edbaf9c93c33264d6164a',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
