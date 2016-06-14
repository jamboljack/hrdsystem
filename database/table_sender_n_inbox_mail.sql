/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.25 : Database - db_hrdhotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `hrd_mail_inbox` */

DROP TABLE IF EXISTS `hrd_mail_inbox`;

CREATE TABLE `hrd_mail_inbox` (
  `inbox_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_id` int(10) NOT NULL,
  `inbox_title` varchar(100) NOT NULL,
  `inbox_date` date DEFAULT NULL,
  `inbox_desc` text,
  `inbox_date_update` date NOT NULL,
  `inbox_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hrd_mail_inbox` */

/*Table structure for table `hrd_mail_sender` */

DROP TABLE IF EXISTS `hrd_mail_sender`;

CREATE TABLE `hrd_mail_sender` (
  `sender_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(50) NOT NULL,
  `sender_address` varchar(100) NOT NULL,
  `sender_phone` varchar(30) DEFAULT NULL,
  `sender_email` varchar(50) DEFAULT NULL,
  `sender_date_update` date NOT NULL,
  `sender_time_update` time NOT NULL,
  `user_username` varchar(30) NOT NULL,
  PRIMARY KEY (`sender_id`),
  KEY `sender_name` (`sender_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_mail_sender` */

insert  into `hrd_mail_sender`(`sender_id`,`sender_name`,`sender_address`,`sender_phone`,`sender_email`,`sender_date_update`,`sender_time_update`,`user_username`) values (1,'DINAS KESEHATAN KUDUS (DKK)','Jl. Diponegoro Kudus','0291-425632656','dkk@kuduskab.go.id','2016-06-14','16:40:42','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
