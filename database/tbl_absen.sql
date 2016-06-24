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
/*Table structure for table `hrd_absent` */

DROP TABLE IF EXISTS `hrd_absent`;

CREATE TABLE `hrd_absent` (
  `absent_id` int(2) NOT NULL AUTO_INCREMENT,
  `absent_name` varchar(50) NOT NULL,
  `absent_color` enum('label-danger','label-warning','label-success','label-default','label-primary','-') NOT NULL DEFAULT '-',
  PRIMARY KEY (`absent_id`),
  KEY `absent_name` (`absent_name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `hrd_absent` */

insert  into `hrd_absent`(`absent_id`,`absent_name`,`absent_color`) values (1,'ALPHA','label-danger'),(2,'IJIN TIDAK MASUK','label-danger'),(3,'SAKIT TANPA SURAT DOKTER','label-default'),(4,'CUTI TAHUNAN','label-success'),(5,'IJIN PULANG CEPAT','label-warning'),(6,'CUTI NIKAH','label-success'),(7,'SAKIT DENGAN SURAT DOKTER','label-primary'),(8,'CUTI HAMIL','label-success'),(9,'CUTI DISPENSASI','label-success'),(10,'TELAT','label-danger');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
