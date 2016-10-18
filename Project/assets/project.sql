-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: tasman_project
-- ------------------------------------------------------
-- Server version	5.6.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adbook`
--

DROP TABLE IF EXISTS `adbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(45) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adbook`
--

LOCK TABLES `adbook` WRITE;
/*!40000 ALTER TABLE `adbook` DISABLE KEYS */;
INSERT INTO `adbook` VALUES (1,'test@gmail.com','test','218','290 queen st','2/27','active','2016-10-05 12:17:27','2016-10-05 12:17:27'),(2,'akabongee@gmail.com','adrian','021-040-9958','7 roband ave','9/9','active','2016-10-05 12:17:27','2016-10-05 12:17:27'),(3,'yul@gmail.com','yul','021-000-3325','korea','3/1','active','2016-10-05 12:17:27','2016-10-05 12:17:27'),(5,'','','','','','inactive','2016-10-06 00:32:12','2016-10-06 00:32:12'),(6,'','','','','','inactive','2016-10-06 00:33:32','2016-10-06 00:33:32'),(7,'new_email','new_name','new_phone','new_address','new_dob wh','active','2016-10-06 00:45:33','2016-10-06 00:45:33'),(8,'hmm','hmm','hmm','hmm','hmm','active','2016-10-06 08:30:17','2016-10-06 08:30:17'),(9,'modal','modal','modal','modal','modal','active','2016-10-06 08:33:38','2016-10-06 08:33:38'),(10,'modal2312152512451','modal22312','modal2','modal2125123123','modal2','active','2016-10-06 08:34:10','2016-10-06 08:34:10'),(11,'asdfa','modal suba','sadfs','asdfas','asvasd','active','2016-10-06 09:23:55','2016-10-06 09:23:55');
/*!40000 ALTER TABLE `adbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logintb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logintb`
--

LOCK TABLES `logintb` WRITE;
/*!40000 ALTER TABLE `logintb` DISABLE KEYS */;
INSERT INTO `logintb` VALUES (1,'akabongee@gmail.com','9958'),(2,'test@gmail.com','1234'),(3,'yul@gmail.com','3325');
/*!40000 ALTER TABLE `logintb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-18 14:38:22
