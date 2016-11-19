-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: newproject
-- ------------------------------------------------------
-- Server version	5.6.34

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(35) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `btn` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'btn',
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'2014-12-12 10:39:06','2015-03-20 14:38:09',6,'velit','Nemo magni ullam exercitationem eveniet rerum earum nam magnam quae praesentium.','40ConstructionLogos_10.jpg','btn','client'),(2,'2015-01-04 10:14:59','2015-08-02 23:49:14',8,'repudiandae','Accusamus doloribus tenetur eligendi omnis tenetur id aut.','Blue-Oak-Construction.png','btn','client'),(3,'2015-05-22 23:04:12','2015-05-01 10:29:54',9,'accusamus','Sit est qui autem non ut quis corporis esse totam dolorem ipsum.','crew.jpg','btn','client'),(4,'2015-02-03 01:57:41','2015-04-12 18:21:08',3,'aliquid','Aut porro consequatur minima autem perferendis quo id aperiam aut aliquid et aliquam ratione.','hammer.jpg','btn','client'),(5,'2015-06-04 19:42:43','2014-12-25 06:16:14',7,'officiis','Saepe ut ipsa fugiat voluptatem autem pariatur ducimus est.','jackhammer.jpg','btn','client'),(6,'2015-02-10 07:19:38','2015-01-10 12:26:01',0,'quasi','Enim eos repudiandae ullam ipsam amet at nihil autem eum delectus.','progressive.jpg','btn','client'),(7,'2015-07-25 16:40:08','2015-06-30 11:42:02',1,'enim','Nisi ut perferendis maiores consequatur perspiciatis adipisci in dolor cumque deserunt non voluptatibus.',' ','btn',' '),(8,'2015-07-24 11:38:19','2014-12-18 13:11:54',2,'veritatis','Voluptatem explicabo quo eveniet dolores exercitationem placeat mollitia quia voluptas sequi neque deleniti sed.',' ','btn',' '),(9,'2015-03-15 06:19:19','2015-07-04 03:56:06',4,'rem','Reiciendis eveniet tempore molestiae tenetur eos quis aut et architecto quidem.',' ','btn',' '),(10,'2015-02-17 01:42:51','2015-03-17 18:08:59',5,'aspernatur','Impedit totam explicabo nostrum dolore rerum nulla quis placeat nobis at tempore nobis in.',' ','btn',' ');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,6,'debitis','/','2015-02-12 16:57:53','2015-08-31 04:37:42'),(2,1,'mollitia','/project','2015-10-21 04:01:36','2015-08-31 13:29:50'),(3,4,'eos','/service','2015-08-29 01:33:22','2015-01-13 15:42:21'),(4,8,'quia',' ','2015-09-22 08:05:45','2015-11-04 22:36:17'),(5,0,'officia',' ','2015-10-16 23:36:23','2015-05-22 14:40:57'),(6,5,'maxime',' ','2015-11-08 17:25:40','2015-02-20 09:14:25'),(7,7,'dolorem','/contact','2015-10-31 20:35:39','2015-10-31 20:35:39'),(8,8,'career','career','2015-10-31 20:35:39','2015-10-31 20:35:39');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (55,'2014_10_12_000000_create_users_table',1),(56,'2014_10_12_100000_create_password_resets_table',1),(57,'2016_11_15_212933_create_menu_table',1),(58,'2016_11_15_213018_create_notice_table',1),(59,'2016_11_15_213039_create_thumbnail_table',1),(60,'2016_11_15_213102_create_image_table',1),(61,'2016_11_16_073954_add_new_column_on_thumbnail',2),(62,'2016_11_16_112908_add_new_column_on_image',3),(63,'2016_11_16_222638_create_office_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notice_id` int(10) unsigned NOT NULL,
  `beauty` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `btn1` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'btn',
  `btn2` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'btn',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (1,3,'active','magni','Quos mollitia provident et aut nemo et autem.','slider3.jpg','btn','btn','2015-09-12 02:33:26','2015-01-09 04:54:24'),(2,2,'','quaerat','Aut quisquam cupiditate quo repellat vero sunt et est qui.','slider3.jpg','btn','btn','2015-02-22 20:59:33','2014-12-06 07:28:46'),(3,9,'','culpa','Autem deserunt quo reprehenderit provident eum corrupti a ratione non tempore commodi.','slider3.jpg','btn','btn','2015-01-07 20:35:37','2015-05-27 16:55:57');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `office_id` int(10) unsigned NOT NULL,
  `branch` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES (1,7,'DuBuque, Gorczany and Kreiger','94739 Wintheiser Springs Suite 216\nKubburgh, OR 08622-6209','+12402788339','(888) 486-5662','liza44@mante.com','inactive','2015-07-06 07:51:13','2015-04-28 03:40:46'),(2,9,'King PLC','90097 Ed Junction Suite 048\nEast Verdieton, MA 68641-9275','891-461-9040','1-888-524-0848','nadia.mraz@rosenbaum.org','active','2014-11-27 15:14:23','2015-06-21 06:58:49'),(3,1,'Klein, Wyman and Powlowski','382 Williamson Drives Apt. 447\nGislasonfort, MS 52357','991.981.7302 x9240','(866) 785-1344','howe.arlo@yahoo.com','inactive','2015-11-12 06:31:12','2015-06-05 15:00:48');
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thumbnails`
--

DROP TABLE IF EXISTS `thumbnails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thumbnails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail_id` int(10) unsigned NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(35) CHARACTER SET utf8 NOT NULL DEFAULT ' ',
  `goto` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `btn` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'btn',
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thumbnails`
--

LOCK TABLES `thumbnails` WRITE;
/*!40000 ALTER TABLE `thumbnails` DISABLE KEYS */;
INSERT INTO `thumbnails` VALUES (1,'2014-11-17 11:33:47','2015-08-26 07:46:15',0,'aut','Magnam rerum excepturi error accusamus a dolorum consequuntur ea optio vel ut optio.','featured-1-1.jpg',' ','btn','main_top'),(2,'2015-11-10 07:33:30','2015-06-30 16:09:03',2,'vel','Officiis iure natus accusamus enim suscipit non in sit rem nihil dolor debitis.','serv9-360x180.jpg',' ','btn','main_top'),(3,'2015-09-15 03:39:49','2015-07-11 08:28:38',7,'aut','Excepturi enim sapiente at soluta sunt rerum qui.','renovation-tips-tricks.jpg',' ','btn','main_top'),(4,'2015-09-05 09:08:41','2015-03-10 12:12:09',6,'repellat','Illo animi quasi sit magnam est voluptas excepturi.','skyline.png',' ','btn','main_middle'),(5,'2015-01-02 18:46:25','2014-12-13 02:22:58',4,'voluptas','Ducimus molestiae id repudiandae voluptates nihil corporis nam dolor.','history.png',' ','btn','main_middle'),(6,'2015-08-14 13:58:03','2014-12-16 15:13:27',8,'qui','Eligendi perferendis incidunt consequatur quis similique sunt illum deserunt dolor ipsa.','cup.png',' ','btn','main_middle'),(7,'2015-02-14 06:01:51','2015-01-26 22:34:57',1,'quos','Blanditiis sunt aut culpa laboriosam eos sit ut assumenda.','KD7_4189_d-360x180.jpg',' ','btn','main_bottom'),(8,'2015-02-06 04:10:42','2015-08-21 19:43:01',5,'odit','Culpa libero enim sed ad ut deserunt perspiciatis molestiae inventore accusantium aut officia rerum.','KD7_2219_d-360x180.jpg',' ','btn','main_bottom'),(9,'2015-04-23 16:02:01','2014-12-10 03:50:42',3,'provident','Voluptatem iusto sit modi repellat saepe quidem eos voluptatem sapiente.','KDM_2491_d-360x180.jpg',' ','btn','main_bottom'),(10,'2015-07-29 04:20:16','2014-11-19 04:48:10',9,'perferendis','Id et autem pariatur ullam enim quaerat saepe officiis magnam enim ex.','renovation-tips-tricks.jpg',' ','btn','main_top'),(11,'2015-03-12 13:25:57','2015-06-06 17:42:56',4,'eveniet','Sit ut consequatur ut praesentium libero numquam laboriosam dolor soluta.','Building-demolition-2-360x180.jpg',' ','btn','news'),(12,'2015-08-23 09:55:46','2015-06-17 19:12:44',5,'magni','Aut labore laboriosam eaque sint culpa corrupti eum magnam id.','Building-demolition-2-360x180.jpg',' ','btn','news'),(13,'2015-07-07 23:31:58','2015-10-09 16:00:43',9,'aspernatur','Quasi nemo illo praesentium dolorum quia et maxime voluptatem qui.','featured-1-1.jpg',' ','btn','news'),(14,'2015-07-28 22:12:35','2015-01-14 07:29:09',3,'impedit','Explicabo facilis modi aut esse velit nobis voluptatum qui velit nihil omnis.','KD7_4189_d-360x180.jpg',' ','btn','news'),(15,'2015-04-28 21:02:58','2015-04-21 11:44:35',1,'qui','Qui error maxime sunt molestias et aliquam totam amet molestiae eum.','KD7_4189_d-360x180.jpg',' ','btn','news'),(16,'2015-11-02 15:50:53','2015-05-04 03:38:36',7,'nesciunt','Voluptatibus quia nemo repudiandae quibusdam modi illum unde.','featured-1-1.jpg',' ','btn','news'),(17,'2015-06-03 20:45:17','2015-11-12 05:36:49',8,'possimus','Odio qui dolorum ut est aliquid omnis corporis molestiae neque nihil molestias voluptatem quaerat voluptatem.','project-2-359x283.jpg',' ','btn','project'),(18,'2015-02-11 18:42:06','2015-07-30 20:11:35',6,'architecto','Fugiat aut rerum illum assumenda nisi rem corporis optio ut facilis.','project-3-359x283.jpg',' ','btn','project'),(19,'2015-04-30 03:02:05','2015-09-29 23:13:34',0,'quod','Sit tempore est quos numquam ut officia culpa assumenda provident.','project-4-359x283.jpg',' ','btn','project'),(20,'2015-02-21 23:51:34','2015-09-16 03:37:51',2,'facere','Debitis debitis vitae et omnis deleniti repellendus.','project-5-359x283.jpg',' ','btn','project'),(21,'2014-12-22 08:50:30','2015-03-13 19:08:50',0,'ea','Ut illum est enim repudiandae atque est.','project-6-359x283.jpg',' ','btn','project'),(22,'2015-11-01 06:34:24','2015-06-27 08:14:02',1,'aut','Assumenda deserunt ut magni explicabo velit quos et vitae qui.','project-7-359x283.jpg',' ','btn','project'),(23,'2015-09-29 03:16:09','2015-09-16 20:04:24',7,'aliquid','Tempora quis aut animi aspernatur perferendis neque dolor officia qui quae blanditiis.','project-8-359x283.jpg',' ','btn','project'),(24,'2015-05-15 15:18:03','2014-12-14 17:19:47',5,'ex','Omnis sed autem voluptatum aliquid doloribus molestiae officia est quo recusandae voluptas libero.','project-9-359x283.jpg',' ','btn','project'),(25,'2014-12-12 08:52:21','2015-07-31 15:40:14',2,'natus','Exercitationem eligendi repudiandae sit quia et eum ut iure omnis sed dolorum.','project-1-359x283.jpg',' ','btn','project'),(26,'2015-04-08 16:04:04','2015-07-05 18:33:21',4,'qui','Minus modi ducimus doloremque expedita impedit nam accusamus illum voluptatem dolor neque.','project-2-359x283.jpg',' ','btn','project'),(27,'2015-10-08 13:24:52','2015-01-25 15:23:26',8,'sed','Ex sint dolores debitis est est voluptate eos totam ut explicabo.','project-3-359x283.jpg',' ','btn','project'),(28,'2015-10-23 03:06:44','2015-08-11 12:13:59',6,'officiis','Quia est consequatur quod omnis repellat magnam vero fugiat rem.','project-4-359x283.jpg',' ','btn','project'),(29,'2015-05-18 23:09:36','2015-02-16 05:31:07',9,'non','Eius corporis non alias omnis qui soluta quae aut alias minus commodi eos quisquam.','project-5-359x283.jpg',' ','btn','project'),(30,'2015-04-26 07:43:10','2015-01-20 06:43:56',3,'consequatur','Rem mollitia dolor reprehenderit enim quia error quod ipsum vel voluptas.','project-6-359x283.jpg',' ','btn','project'),(31,'2015-04-10 22:17:12','2015-03-07 08:50:08',6,'aut','Sit at consequatur accusantium ipsam iusto tempore.','featured-1-1.jpg',' ','btn','service'),(32,'2014-12-05 14:48:14','2015-05-15 06:28:51',0,'totam','Ad aut vitae iusto explicabo aliquam maxime voluptate non sint aliquam similique nesciunt molestiae.','serv9-360x180.jpg',' ','btn','service'),(33,'2015-03-06 19:31:49','2014-11-21 16:35:34',1,'maiores','Alias provident libero earum explicabo non architecto cum id occaecati perferendis sit id laudantium.','renovation-tips-tricks.jpg',' ','btn','service'),(34,'2015-09-15 04:31:57','2015-11-10 17:34:52',4,'nihil','Quia reiciendis mollitia officiis error dolor eum et quo sit corrupti aut dolor qui.','featured-1-1.jpg',' ','btn','service'),(35,'2015-04-21 15:28:25','2015-02-02 06:33:20',2,'laborum','Asperiores non nulla aut animi impedit voluptatibus tempore incidunt a.','renovation-tips-tricks.jpg',' ','btn','service'),(36,'2015-05-22 18:50:08','2015-05-13 14:44:03',8,'eveniet','Rerum et ratione animi nesciunt atque ab dolorem exercitationem occaecati enim aperiam ex minus.','serv9-360x180.jpg',' ','btn','service'),(37,'2015-05-25 10:40:08','2015-11-15 06:21:18',7,'itaque','Rerum sit dolorem dignissimos ipsam quia debitis rerum fuga est pariatur autem omnis.','featured-1-1.jpg',' ','btn','service'),(38,'2014-11-17 09:13:23','2015-04-06 04:35:38',5,'quaerat','Ut nesciunt veritatis maiores architecto cumque ut ducimus.','renovation-tips-tricks.jpg',' ','btn','service'),(39,'2015-08-23 02:01:55','2015-06-19 16:06:58',9,'quia','Nesciunt voluptatem animi commodi maxime laudantium omnis consequatur.','serv9-360x180.jpg',' ','btn','service'),(40,'2015-04-15 16:31:37','2014-12-07 15:18:50',3,'veritatis','Repudiandae id sed quas laborum aut autem ea.','serv9-360x180.jpg',' ','btn','service');
/*!40000 ALTER TABLE `thumbnails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-19 21:16:00
