/*
SQLyog Professional
MySQL - 10.4.28-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `laravel`;

/*Table structure for table `chiefs` */

DROP TABLE IF EXISTS `chiefs`;

CREATE TABLE `chiefs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `chiefs` */

insert  into `chiefs`(`id`,`avatar`,`name`,`roll`,`facebook`,`twitter`,`pinterest`,`instagram`) values 
(1,'3.jpg','Esther Howard','Chef cook - Founder','https://www.facebook.com/esther','twitter.com/esther','www.pinterest.com/esther','https://www.instagram.com/esther'),
(2,'6.jpg','Kristin Watson','Chef Cook','https://www.facebook.com/kristin','twitter.com/kristin','www.pinterest.com/kristin','https://www.instagram.com/krisin'),
(3,'5.jpg','Darrell Steward','Chef Cook','https://www.facebook.com/darrell','twitter.com/darrell','www.pinterest.com/darrell','https://www.instagram.com/darrell');

/*Table structure for table `customer_reviews` */

DROP TABLE IF EXISTS `customer_reviews`;

CREATE TABLE `customer_reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customer_reviews` */

insert  into `customer_reviews`(`id`,`description`,`avatar`,`name`,`position`) values 
(1,'It\'s amazing, the cakes here are so special that it\'s hard to describe, it\'s worth a try. I don\'t think I have ever eaten a better cake. I will be back again','7.jpg','Esther Howard','New York'),
(2,'It\'s amazing, the cakes here are so special that it\'s hard to describe, it\'s worth a try. I don\'t think I have ever eaten a better cake. I will be back again','4.jpg','Elanor Pera','Paris'),
(3,'It\'s amazing, the cakes here are so special that it\'s hard to describe, it\'s worth a try. I don\'t think I have ever eaten a better cake. I will be back again','6.jpg','Krishna Barbe','Amsterdam'),
(4,'It\'s amazing, the cakes here are so special that it\'s hard to describe, it\'s worth a try. I don\'t think I have ever eaten a better cake. I will be back again','1.jpg','Esther Pera','Tokyo');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2024_07_13_091124_create_products_table',1),
(6,'2024_07_13_154908_add_temp_to_products_table',2),
(7,'2024_07_13_155309_remove_timestamps_from_products_table',3),
(8,'2024_07_16_093722_create_chiefs_table',4),
(9,'2024_07_16_094539_create_reviews_table',5),
(10,'2024_07_16_095040_create_customer_reviews_table',6),
(12,'2024_07_16_125008_add_position_to_customer_reviews_table',7),
(13,'2024_08_07_011213_create_salespoints_table',8);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`price`,`type`,`category`,`temp`) values 
(1,'KANEELHOMPEN',4.99,'candy','CINNAMON CHUNKS',''),
(2,'PDROPHOMEEN',8.95,'candy','CINNAMON PILLOWS',''),
(3,'OOSTERBOTERWAFELT',7.55,'candy','CINNAMON CHUNKS',''),
(4,'SLOLLYHARTVORMIG',6.25,'candy','CINNAMON STICKS',''),
(5,'SROLLERZZZLOLLY',5.5,'candy','CINNAMON STICKS','HOT'),
(6,'PKERSENSTOKJES',6.9,'candy','CINNAMON PILLOWS',''),
(7,'PKANEELSTOKJES',7.55,'candy','CINNAMON PILLOWS',''),
(8,'KANEELSTOKIES',5.68,'candy','CINNAMON CHUNKS',''),
(9,'VERPAKTKANEEL',6.89,'candy','CINNAMON CHUNKS','HOT'),
(10,'OOSTERDROP',4.35,'candy','CINNAMON CHUNKS',''),
(11,'PKANEELDROP',7.65,'candy','CINNAMON PILLOWS',''),
(12,'SZUURSTOK',5.2,'candy','CINNAMON STICKS',''),
(13,'PKANEELSILOZO',9.5,'candy','CINNAMON PILLOWS',''),
(14,'PKANEELSNOEP',5.8,'candy','CINNAMON PILLOWS','HOT'),
(15,'OOSTERKANEEL',6.3,'candy','CINNAMON CHUNKS',''),
(16,'PDROPSTOKJES',7.2,'candy','CINNAMON PILLOWS',''),
(17,'SSPIRAALLOLLY',6.1,'candy','CINNAMON STICKS',''),
(18,'SKANEELSTOKKEN',3.9,'candy','CINNAMON STICKS',''),
(19,'PSUIKERSPIN',3.8,'candy','CINNAMON PILLOWS','HOT'),
(20,'OOSTERDROPKUSSEN',5.5,'candy','CINNAMON CHUNKS',''),
(21,'OOSTERHOUTSE',5.8,'candy','CINNAMON CHUNKS','HOT'),
(22,'PKANEELDROP',3.9,'candy','CINNAMON PILLOWS',''),
(23,'PSILOZOETVAN',5.4,'candy','CINNAMON PILLOWS',''),
(24,'PSNOEPIJSJES',6.5,'candy','CINNAMON PILLOWS',''),
(25,'PSTROOPWATELS',2.9,'candy','CINNAMON PILLOWS','HOT'),
(26,'BOTERHOMPEN',3.9,'candy','CINNAMON CHUNKS','HOT'),
(27,'PKANEELKUSSEN',5.6,'candy','CINNAMON PILLOWS',''),
(28,'PWIJNBAL',6.9,'candy','CINNAMON STICKS','HOT'),
(29,'BOTERWAFELTJES',5.5,'candy','CINNAMON CHUNKS',''),
(30,'KANEELKUSSENTJES',4.7,'candy','CINNAMON CHUNKS',''),
(31,'KANEELOOSTER',5.9,'candy','CINNAMON CHUNKS',''),
(32,'PKUSSENTJESMIX',5.6,'candy','CINNAMON PILLOWS','HOT'),
(33,'SKANEELSTOK',3.6,'candy','CINNAMON STICKS',''),
(34,'SKANEELSTREEP',5.3,'candy','CINNAMON STICKS',''),
(35,'OOSTERHOMEEN',2.9,'candy','CINNAMON CHUNKS',''),
(36,'PKANELLKUSSENTJES',5.3,'candy','CINNAMON PILLOWS','HOT'),
(37,'SOOSTERHOUTSE',5.5,'candy','CINNAMON STICKS',''),
(38,'SLOLLYDROPSTICK',8.4,'candy','CINNAMON STICKS',''),
(39,'SCINNAMONSTICK',6.9,'candy','CINNAMON STICKS','HOT'),
(40,'SSTRIPEDROP',6.3,'candy','CINNAMON STICKS',''),
(41,'HOLLANDMELK',10.3,'diary','',''),
(42,'DUTCHMELKBOX',15.23,'diary','',''),
(43,'HORIZON',5.3,'diary','',''),
(44,'DUTCHMELK',18.93,'diary','',''),
(45,'DUTCHMELKBOTTLE1',5.98,'diary','',''),
(46,'VREUGDENHIL',12.9,'diary','',''),
(47,'VOLLEMELK',4.2,'diary','',''),
(48,'HOLLANDMELK3',5.6,'diary','',''),
(49,'TWOCOW',8.6,'diary','',''),
(50,'HOLLANDMELK4',4.3,'diary','',''),
(51,'DUTCHMILK',5.6,'diary','',''),
(52,'HOLLANDMELK2',8.3,'diary','',''),
(53,'INPUBGMXYA',25.3,'diary','',''),
(54,'DUTCHMELKBOTTLE',12.3,'diary','',''),
(55,'OPSCHUIMMELK',5.6,'diary','','');

/*Table structure for table `salespoints_table` */

DROP TABLE IF EXISTS `salespoints_table`;

CREATE TABLE `salespoints_table` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `position` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `salespoints_table` */

insert  into `salespoints_table`(`id`,`title`,`description`,`position`,`owner`,`facebook`,`twitter`,`pinterest`,`instagram`) values 
(1,'Bio Journaal','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Amsterdam','Karel Jansen','https://www.facebook.com/kareljansen','https://www.twitter.com/kareljansen','https://www.pinterest.com/kareljansen','https://www.instagram.com/kareljansen'),
(2,'Levens Middelen','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Utrecht','Maria Haan','https://www.facebook.com/mariahaan','https://www.twitter.com/mariahaan','https://www.pinterest.com/mariahaan','https://www.instagram.com/mariahaan'),
(3,'Five Star','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Rotterdam','Finn Groot','https://www.facebook.com/finngroot','https://www.twitter.com/finngroot','https://www.pinterest.com/finngroot','https://www.instagram.com/finngroot'),
(4,'Einzel Handel','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Breda','Anne Klein','https://www.facebook.com/anneklein','https://www.twitter.com/anneklein','https://www.pinterest.com/anneklein','https://www.instagram.com/anneklein'),
(5,'Travel Addicts','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Eindhoven','Mandy Lange','https://www.facebook.com/mandylange','https://www.twitter.com/mandylange','https://www.pinterest.com/mandylange','https://www.instagram.com/mandylange'),
(6,'Alle Holland','Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.','Maastricht','James Muis','https://www.facebook.com/jamesmuis','https://www.twitter.com/jamesmuis','https://www.pinterest.com/jamesmuis','https://www.instagram.com/jamesmuis');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
