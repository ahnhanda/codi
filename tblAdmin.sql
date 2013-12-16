-- MySQL dump 10.9
--
-- Host: localhost    Database: coditop
-- ------------------------------------------------------
-- Server version	4.1.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblAdmin`
--

DROP TABLE IF EXISTS `tblAdmin`;
CREATE TABLE `tblAdmin` (
  `admin_id` varchar(20) NOT NULL default '',
  `admin_pwd` varchar(50) NOT NULL default '',
  `admin_name` varchar(20) NOT NULL default '',
  `admin_level` enum('A','B','C') NOT NULL default 'A',
  `admin_reg_dt` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- Dumping data for table `tblAdmin`
--


/*!40000 ALTER TABLE `tblAdmin` DISABLE KEYS */;
LOCK TABLES `tblAdmin` WRITE;
INSERT INTO `tblAdmin` VALUES ('admin','admin1234','관리자','A','2008-08-07 14:49:53'),('testadmin','1212','짝퉁관리자','A','2008-10-15 20:58:03');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tblAdmin` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

