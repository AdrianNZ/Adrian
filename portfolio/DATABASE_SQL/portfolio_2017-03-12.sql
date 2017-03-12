# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.34)
# Database: portfolio
# Generation Time: 2017-03-12 04:51:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'web-design','2017-02-05 18:06:17','2017-02-05 18:06:17'),
	(2,'icons','2017-02-05 18:06:18','2017-02-05 18:06:18'),
	(3,'ui-kits','2017-02-05 18:06:20','2017-02-05 18:06:20'),
	(5,'school_project','2017-02-22 03:39:25','2017-02-22 03:39:25');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category_project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category_project`;

CREATE TABLE `category_project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_projects_category_id_foreign` (`category_id`),
  KEY `category_projects_project_id_foreign` (`project_id`),
  CONSTRAINT `category_project_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `category_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `category_project` WRITE;
/*!40000 ALTER TABLE `category_project` DISABLE KEYS */;

INSERT INTO `category_project` (`id`, `category_id`, `project_id`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(2,2,1,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(3,1,3,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(4,3,4,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(5,1,5,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(6,2,6,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(7,1,7,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(8,1,8,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(9,2,2,'2017-02-05 18:29:35','2017-02-05 18:29:35'),
	(39,5,31,NULL,NULL),
	(42,5,34,NULL,NULL),
	(71,5,74,NULL,NULL);

/*!40000 ALTER TABLE `category_project` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_project_id_foreign` (`project_id`),
  CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(24,'2014_10_12_000000_create_users_table',1),
	(25,'2014_10_12_100000_create_password_resets_table',1),
	(26,'2017_02_04_232653_create_navbars_table',1),
	(27,'2017_02_04_232700_create_projects_table',1),
	(28,'2017_02_04_232709_create_skills_table',1),
	(29,'2017_02_05_030020_create_user_infos_table',1),
	(30,'2017_02_05_040008_create_categories_table',1),
	(31,'2017_02_05_040522_create_category_projects_table',1),
	(32,'2017_02_05_230437_create_titles_table',2),
	(35,'2017_02_06_011919_create_profiles_table',3),
	(36,'2017_02_09_092810_create_images_table',3),
	(37,'2017_02_12_012727_add_user_id_to_skills_table',4),
	(38,'2017_03_02_021934_create_slideimages_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table navbars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `navbars`;

CREATE TABLE `navbars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `navbars` WRITE;
/*!40000 ALTER TABLE `navbars` DISABLE KEYS */;

INSERT INTO `navbars` (`id`, `name`, `href`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'home','home','unpublished','2017-02-05 18:03:05','2017-02-05 18:03:07'),
	(2,'What I do','services','published','2017-02-05 18:04:16','2017-02-05 18:04:16'),
	(3,'About Me','about','published','2017-02-05 18:04:30','2017-02-05 18:04:30'),
	(4,'My Works','portfolio','published','2017-02-05 18:04:45','2017-02-05 18:04:45'),
	(5,'Contact Me','contact','published','2017-02-05 18:04:59','2017-02-05 18:04:59'),
	(7,'Test','asdf','unpublished','2017-03-11 22:59:08','2017-03-12 02:32:12');

/*!40000 ALTER TABLE `navbars` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkto_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkto_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkto_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`id`, `user_id`, `description`, `img`, `phone`, `address`, `linkto_facebook`, `linkto_twitter`, `linkto_linkedin`, `created_at`, `updated_at`)
VALUES
	(1,3,'Hi','1489266806.jpg','021-040-9958','7 Roband Ave, Glenfield, Auckland 0629',NULL,NULL,NULL,'2017-03-02 15:59:38','2017-03-11 21:13:26');

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `name`, `description`, `title`, `title_img`, `img`, `href`, `created_at`, `updated_at`)
VALUES
	(1,'Clean & Minimal','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Clean &amp; Minimal','1489269395.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 21:56:35'),
	(2,'Flat UI Kit','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Flat UI Kit','1489269437.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 21:57:18'),
	(3,'Singolo','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Singolo','1489269490.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 21:58:11'),
	(4,'Login Web Buttons','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Login Web Buttons','1489270055.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 22:07:35'),
	(5,'LimeLight','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','LimeLight','1489269821.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 22:03:41'),
	(6,'Organic','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Organic','1489269839.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 22:03:59'),
	(7,'Social Media Icons','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Social Media Icons','1489269853.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 22:04:13'),
	(8,'Explore','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut porttitor nisl dapibus eu.</p>','Explore','1489269867.jpg','projects/project-slide.jpg','http://www.google.com','2017-02-05 18:11:09','2017-03-11 22:04:27'),
	(31,'Final portfoilo','<h1>last session</h1>\n<p> </p>\n<p>what happen</p>\n<p> </p>\n<p>finally can see last step</p>','','1489269946.jpg','fake_img','gogo','2017-03-01 21:05:45','2017-03-11 22:43:50'),
	(34,'image upload','<p>test</p>','','1489269965.jpg','fake_img','go','2017-03-05 07:15:58','2017-03-11 22:06:05'),
	(74,'multiple image rename','<p>test</p>','','1489269985.jpg','fake_img','hoho','2017-03-09 12:04:54','2017-03-11 22:06:26');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`),
  CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `user_id`, `name`, `percentage`, `created_at`, `updated_at`)
VALUES
	(5,3,'web design','80','2017-02-12 14:32:50','2017-02-12 14:32:50'),
	(6,3,'html/css','70','2017-02-12 14:32:50','2017-02-12 14:32:50'),
	(7,3,'graphic design','60','2017-02-12 14:32:50','2017-02-12 14:32:50'),
	(8,3,'ui/ux','40','2017-02-12 14:32:50','2017-02-12 14:32:50'),
	(10,3,'tutor','78','2017-02-12 02:59:11','2017-02-12 03:17:52');

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table slideimages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slideimages`;

CREATE TABLE `slideimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slideimages_project_id_foreign` (`project_id`),
  CONSTRAINT `slideimages_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `slideimages` WRITE;
/*!40000 ALTER TABLE `slideimages` DISABLE KEYS */;

INSERT INTO `slideimages` (`id`, `project_id`, `slug`, `description`, `status`, `created_at`, `updated_at`)
VALUES
	(69,1,'1489271332_1.jpg','Project 1 for slide image','show','2017-03-11 22:28:52','2017-03-11 22:28:52'),
	(70,1,'1489271332_2.jpg','Project 1 for slide image','show','2017-03-11 22:28:52','2017-03-11 22:28:52'),
	(71,1,'1489271332_3.jpg','Project 1 for slide image','show','2017-03-11 22:28:53','2017-03-11 22:28:53'),
	(72,2,'1489271345_1.jpg','Project 2 for slide image','show','2017-03-11 22:29:06','2017-03-11 22:29:06'),
	(73,2,'1489271346_2.jpg','Project 2 for slide image','show','2017-03-11 22:29:06','2017-03-11 22:29:06'),
	(74,2,'1489271346_3.jpg','Project 2 for slide image','show','2017-03-11 22:29:06','2017-03-11 22:29:06'),
	(75,3,'1489271357_1.jpg','Project 3 for slide image','show','2017-03-11 22:29:17','2017-03-11 22:29:17'),
	(76,3,'1489271357_2.jpg','Project 3 for slide image','show','2017-03-11 22:29:18','2017-03-11 22:29:18'),
	(77,3,'1489271358_3.jpg','Project 3 for slide image','show','2017-03-11 22:29:18','2017-03-11 22:29:18'),
	(78,3,'1489271358_4.jpg','Project 3 for slide image','show','2017-03-11 22:29:18','2017-03-11 22:29:18'),
	(79,4,'1489271375_1.jpg','Project 4 for slide image','show','2017-03-11 22:29:36','2017-03-11 22:29:36'),
	(80,4,'1489271376_2.jpg','Project 4 for slide image','show','2017-03-11 22:29:36','2017-03-11 22:29:36'),
	(81,4,'1489271376_3.jpg','Project 4 for slide image','show','2017-03-11 22:29:36','2017-03-11 22:29:36'),
	(82,4,'1489271376_4.jpg','Project 4 for slide image','show','2017-03-11 22:29:37','2017-03-11 22:29:37'),
	(84,5,'1489271444_1.jpg','Project 5 for slide image','show','2017-03-11 22:30:44','2017-03-11 22:30:44'),
	(85,5,'1489271444_2.jpg','Project 5 for slide image','show','2017-03-11 22:30:44','2017-03-11 22:30:44'),
	(86,5,'1489271444_3.jpg','Project 5 for slide image','show','2017-03-11 22:30:45','2017-03-11 22:30:45'),
	(87,6,'1489271467_1.jpg','Project 6 for slide image','show','2017-03-11 22:31:08','2017-03-11 22:31:08'),
	(88,6,'1489271468_2.jpg','Project 6 for slide image','show','2017-03-11 22:31:08','2017-03-11 22:31:08'),
	(89,6,'1489271468_3.jpg','Project 6 for slide image','show','2017-03-11 22:31:08','2017-03-11 22:31:08'),
	(90,7,'1489271482_1.jpg','Project 7 for slide image','show','2017-03-11 22:31:23','2017-03-11 22:31:23'),
	(91,7,'1489271483_2.jpg','Project 7 for slide image','show','2017-03-11 22:31:23','2017-03-11 22:31:23'),
	(92,7,'1489271483_3.jpg','Project 7 for slide image','show','2017-03-11 22:31:24','2017-03-11 22:31:24'),
	(93,8,'1489271502_1.jpg','Project 8 for slide image','show','2017-03-11 22:31:42','2017-03-11 22:31:42'),
	(94,8,'1489271502_2.jpg','Project 8 for slide image','show','2017-03-11 22:31:42','2017-03-11 22:31:42'),
	(95,8,'1489271502_3.jpg','Project 8 for slide image','show','2017-03-11 22:31:43','2017-03-11 22:31:43'),
	(96,8,'1489271503_4.jpg','Project 8 for slide image','show','2017-03-11 22:31:43','2017-03-11 22:31:43'),
	(97,8,'1489271503_5.jpg','Project 8 for slide image','show','2017-03-11 22:31:43','2017-03-11 22:31:43'),
	(98,31,'1489271557_1.jpg','Project 31 for slide image','show','2017-03-11 22:32:37','2017-03-11 22:32:37'),
	(99,31,'1489271557_2.jpg','Project 31 for slide image','show','2017-03-11 22:32:38','2017-03-11 22:32:38'),
	(100,31,'1489271558_3.jpg','Project 31 for slide image','show','2017-03-11 22:32:38','2017-03-11 22:32:38'),
	(101,31,'1489271558_4.jpg','Project 31 for slide image','show','2017-03-11 22:32:38','2017-03-11 22:32:38'),
	(102,34,'1489271604_1.jpg','Project 34 for slide image','show','2017-03-11 22:33:25','2017-03-11 22:33:25'),
	(103,34,'1489271605_2.jpg','Project 34 for slide image','show','2017-03-11 22:33:25','2017-03-11 22:33:25'),
	(104,34,'1489271605_3.jpg','Project 34 for slide image','show','2017-03-11 22:33:25','2017-03-11 22:33:25'),
	(105,74,'1489271620_1.jpg','Project 74 for slide image','show','2017-03-11 22:33:41','2017-03-11 22:33:41'),
	(106,74,'1489271621_2.jpg','Project 74 for slide image','show','2017-03-11 22:33:41','2017-03-11 22:33:41'),
	(107,74,'1489271621_3.jpg','Project 74 for slide image','show','2017-03-11 22:33:42','2017-03-11 22:33:42'),
	(108,74,'1489271622_4.jpg','Project 74 for slide image','show','2017-03-11 22:33:42','2017-03-11 22:33:42');

/*!40000 ALTER TABLE `slideimages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table titles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `titles`;

CREATE TABLE `titles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('high','medium','low') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medium',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `titles_user_id_foreign` (`user_id`),
  CONSTRAINT `titles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `titles` WRITE;
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;

INSERT INTO `titles` (`id`, `user_id`, `name`, `status`, `created_at`, `updated_at`)
VALUES
	(1,3,'developer','high','2017-02-06 13:18:16','2017-02-06 13:18:16'),
	(2,3,'designer','medium','2017-02-06 13:18:39','2017-02-06 13:18:39'),
	(3,3,'Expert','high','2017-02-06 13:18:55','2017-02-11 04:24:45'),
	(4,3,'producer','high','2017-02-06 13:19:09','2017-02-06 13:19:09'),
	(5,3,'student','medium','2017-02-06 13:19:22','2017-02-11 03:05:31'),
	(6,3,'loser','low','2017-03-05 03:23:20','2017-03-05 03:23:20');

/*!40000 ALTER TABLE `titles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `position`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'adrian','akabongnz@gmail.com','1234','default',NULL,'2017-02-05 17:58:22','2017-02-05 17:58:22'),
	(2,'test','test@gmail.com','1234','default',NULL,'2017-02-05 17:58:40','2017-02-05 17:58:40'),
	(3,'Adrian','akabongee@gmail.com','$2y$10$9bCZOMnLM.kgSIf4TltHNO14EkzUzaYP4pzEsiGnNDId1KLg3fXF6','admin','mZ4XPGV77wtwHVBEIFE7itLm4dQeDjURXwfufOAEfAJMpn9ZQG5I3RHqtvmh','2017-02-07 09:00:25','2017-02-07 09:00:25');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
