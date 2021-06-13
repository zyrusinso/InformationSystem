/*
SQLyog Ultimate
MySQL - 10.4.13-MariaDB : Database - informationsystem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`informationsystem` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `informationsystem`;

/*Table structure for table `admins` */

CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

/*Table structure for table `failed_jobs` */

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_05_10_135101_create_admins_table',1),
(5,'2021_05_11_033558_create_students_table',1),
(6,'2021_05_13_072809_create_profiles_table',1),
(7,'2021_05_14_042209_create_student_grades_table',1);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `profiles` */

CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profiles` */

/*Table structure for table `student_grades` */

CREATE TABLE `student_grades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `peh` int(11) DEFAULT NULL,
  `web_dev` int(11) DEFAULT NULL,
  `entrep` int(11) DEFAULT NULL,
  `phy_sci` int(11) DEFAULT NULL,
  `multimedia` int(11) DEFAULT NULL,
  `work_immerson` int(11) DEFAULT NULL,
  `rp` int(11) DEFAULT NULL,
  `mil` int(11) DEFAULT NULL,
  `grading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_grades_user_id_index` (`user_id`),
  CONSTRAINT `student_grades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `student_grades` */

insert  into `student_grades`(`id`,`user_id`,`peh`,`web_dev`,`entrep`,`phy_sci`,`multimedia`,`work_immerson`,`rp`,`mil`,`grading`,`created_at`,`updated_at`) values 
(1,1,81,77,81,76,87,84,89,81,'1st Grading',NULL,NULL),
(2,2,82,83,81,88,83,79,88,83,'1st Grading',NULL,NULL),
(3,3,83,90,78,78,79,81,82,79,'1st Grading',NULL,NULL),
(4,4,82,87,83,80,88,85,82,81,'1st Grading',NULL,NULL),
(5,5,78,81,88,89,80,86,88,84,'1st Grading',NULL,NULL),
(6,6,84,80,79,85,76,83,81,86,'1st Grading',NULL,NULL),
(7,7,77,82,76,87,89,83,78,87,'1st Grading',NULL,NULL),
(8,8,78,78,78,81,78,81,77,89,'1st Grading',NULL,NULL),
(9,9,88,90,89,77,82,90,81,79,'1st Grading',NULL,NULL),
(10,10,83,85,82,87,76,79,78,76,'1st Grading',NULL,NULL),
(11,11,85,84,84,89,78,90,78,81,'1st Grading',NULL,NULL),
(12,12,77,84,80,82,86,84,85,87,'1st Grading',NULL,NULL),
(13,13,82,81,77,83,86,80,82,87,'1st Grading',NULL,NULL),
(14,14,87,76,85,86,90,79,76,87,'1st Grading',NULL,NULL),
(15,15,80,78,87,79,81,89,86,89,'1st Grading',NULL,NULL),
(16,16,77,82,81,80,83,76,79,81,'1st Grading',NULL,NULL),
(17,17,77,77,81,89,90,89,79,79,'1st Grading',NULL,NULL),
(18,18,86,85,86,78,86,84,78,84,'1st Grading',NULL,NULL),
(19,19,81,77,88,80,84,82,80,81,'2nd Grading',NULL,NULL),
(20,1,82,81,76,80,87,88,77,89,'2nd Grading',NULL,NULL),
(21,2,78,86,80,78,87,84,80,89,'2nd Grading',NULL,NULL),
(22,3,85,76,87,88,84,86,76,83,'2nd Grading',NULL,NULL),
(23,4,85,83,85,77,84,83,79,77,'2nd Grading',NULL,NULL),
(24,5,77,79,79,83,88,90,89,85,'2nd Grading',NULL,NULL),
(25,6,86,80,84,76,76,86,78,90,'2nd Grading',NULL,NULL),
(26,7,85,85,89,76,76,88,77,89,'2nd Grading',NULL,NULL),
(27,8,76,84,76,78,79,82,89,88,'2nd Grading',NULL,NULL),
(28,9,77,90,89,85,78,89,81,79,'2nd Grading',NULL,NULL),
(29,10,81,79,76,85,87,83,79,89,'2nd Grading',NULL,NULL),
(30,11,84,86,80,87,82,81,89,78,'2nd Grading',NULL,NULL),
(31,12,79,79,78,87,89,85,85,83,'2nd Grading',NULL,NULL),
(32,13,90,76,89,88,86,77,78,89,'2nd Grading',NULL,NULL),
(33,14,78,85,85,86,78,89,84,82,'2nd Grading',NULL,NULL),
(34,15,89,77,80,82,80,76,90,83,'2nd Grading',NULL,NULL),
(35,16,90,79,87,80,90,82,84,87,'2nd Grading',NULL,NULL),
(36,17,76,86,77,79,84,86,87,80,'2nd Grading',NULL,NULL),
(37,18,85,77,78,87,81,83,88,76,'2nd Grading',NULL,NULL),
(38,19,85,87,88,83,83,79,89,78,'2nd Grading',NULL,NULL),
(39,1,88,80,89,82,79,89,85,87,'3rd Grading',NULL,NULL),
(40,2,83,83,82,78,84,87,84,82,'3rd Grading',NULL,NULL),
(41,3,86,87,81,76,83,85,88,78,'3rd Grading',NULL,NULL),
(42,4,80,83,82,86,81,81,89,82,'3rd Grading',NULL,NULL),
(43,5,78,88,87,76,86,76,85,79,'3rd Grading',NULL,NULL),
(44,6,82,78,84,90,89,80,79,84,'3rd Grading',NULL,NULL),
(45,7,82,79,88,84,77,87,80,90,'3rd Grading',NULL,NULL),
(46,8,84,76,88,85,79,81,87,86,'3rd Grading',NULL,NULL),
(47,9,83,89,78,88,80,87,78,89,'3rd Grading',NULL,NULL),
(48,10,80,81,78,78,84,83,76,82,'3rd Grading',NULL,NULL),
(49,11,82,80,83,79,76,85,89,83,'3rd Grading',NULL,NULL),
(50,12,90,79,83,84,79,84,84,83,'3rd Grading',NULL,NULL),
(51,13,79,78,77,79,79,80,76,81,'3rd Grading',NULL,NULL),
(52,14,84,76,84,78,82,80,89,86,'3rd Grading',NULL,NULL),
(53,15,79,85,81,85,85,89,81,85,'3rd Grading',NULL,NULL),
(54,16,83,77,77,82,87,80,89,80,'3rd Grading',NULL,NULL),
(55,17,84,84,79,77,78,83,80,84,'3rd Grading',NULL,NULL),
(56,18,84,79,89,78,82,80,89,76,'3rd Grading',NULL,NULL),
(57,19,87,85,89,89,79,79,78,82,'4th Grading',NULL,NULL),
(58,1,84,84,89,77,88,76,84,84,'4th Grading',NULL,NULL),
(59,2,76,86,90,89,78,79,81,84,'4th Grading',NULL,NULL),
(60,3,84,86,77,82,84,89,86,89,'4th Grading',NULL,NULL),
(61,4,89,79,81,88,89,79,87,77,'4th Grading',NULL,NULL),
(62,5,79,85,82,78,83,79,85,90,'4th Grading',NULL,NULL),
(63,6,89,79,82,76,82,84,84,83,'4th Grading',NULL,NULL),
(64,7,77,86,87,82,86,87,81,90,'4th Grading',NULL,NULL),
(65,8,82,80,76,87,88,89,84,83,'4th Grading',NULL,NULL),
(66,9,80,89,79,90,86,78,79,78,'4th Grading',NULL,NULL),
(67,10,76,79,86,85,80,86,88,88,'4th Grading',NULL,NULL),
(68,11,85,90,83,84,88,90,85,78,'4th Grading',NULL,NULL),
(69,12,76,82,80,82,79,90,84,76,'4th Grading',NULL,NULL),
(70,13,76,88,77,82,80,81,89,86,'4th Grading',NULL,NULL),
(71,14,84,90,83,85,83,81,82,86,'4th Grading',NULL,NULL),
(72,15,77,89,77,86,81,83,80,89,'4th Grading',NULL,NULL),
(73,16,90,88,85,81,84,80,82,85,'4th Grading',NULL,NULL),
(74,17,81,81,87,89,87,83,78,89,'4th Grading',NULL,NULL),
(75,18,79,89,82,87,86,87,89,86,'4th Grading',NULL,NULL),
(76,19,81,77,85,76,81,81,88,76,'4th Grading',NULL,NULL);

/*Table structure for table `students` */

CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lrn` bigint(20) NOT NULL,
  `stud_num` bigint(20) NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_num` bigint(20) NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `students` */

insert  into `students`(`id`,`first_name`,`last_name`,`middle_name`,`lrn`,`stud_num`,`date_of_birth`,`age`,`section`,`gender`,`email`,`address`,`city`,`contact_num`,`pass`,`role`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Zyrus Lee','Inso','Tapulao',109730060264,19113061,'2002-11-08',18,'1212','male','zyrusinso@Gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(2,'Ian','Gatchalian','Suralta',305387150032,19113151,'2003-02-19',18,'1212','male','adriangatchalian10@yahoo.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(3,'Ahyenrei','Kalaw','Belmonte',136525070253,19113458,'2002-02-20',19,'1211','male','kahyenrei@yahoo.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(4,'Kenneth','Alberto','Gutierrez',108503090008,71120201695,'2004-03-06',17,'1108','male','kennethalberto16@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(5,'Marvin','Vega','Panim',136547091046,20110761,'2003-12-26',17,'1108','male','marvinvega128@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(6,'Jake','Eclarinal','Rodriguez',106850080033,19113243,'2002-09-30',17,'1211','male','eclarinaljake3@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(7,'Omar','Pando','Arda',136643080529,19111183,'2002-08-12',18,'1222','male','jomskie657@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(8,'Ulie Ritz','Rodriguez','Duka',223505090261,20110756,'2004-05-07',17,'1108','female','julieritzrodriguez10o@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(9,'Edward','Cid','Gomez',136527080061,19110979,'2003-02-01',18,'1210','male','edwardjosephcid@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(10,'Harly','Nacion','Carbos',223501080631,19110303,'2002-07-13',18,'1211','male','nacionharlycarbos@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(11,'Danielle Kathyrine','Camero','Celeste',101356080022,9111050,'2003-05-30',18,'1211','female','dkcamero30@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(12,'Jhustine','Bonso','Apac',465132326545,19111219,'2002-01-23',19,'1210','male','bonsojhustine@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(13,'Myla','Fernandez','',136528080539,19111038,'2002-07-25',18,'1211','female','mylajoyf@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(14,'Daniella kaycee','Rojero','',136522080072,19111081,'2001-11-05',19,'1212','female','dkrojero@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(15,'John Ruvenzon','Manigque','Retis',136527080164,19110980,'2003-01-30',18,'1211','male','johnmanigque41@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(16,'Rica May','Mahait','Cenita',10705008018,19110308,'2002-06-02',18,'1205','female','mahaitericamay@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(17,'Huan salvador','Lachica','Sapi',136640080422,19111814,'2003-05-21',17,'1214','male','Huansalvadorlachica@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(18,'Jamico','Valderama','Mesajon',136536080455,19111133,'2003-02-08',18,'1212','male','valderama.jamico@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(19,'Beverly','Obado','Lucaban',136551130082,19111192,'2002-11-22',18,'1212','female','bevsobado@gmail.com','none','quezon city',12345678910,'$2y$10$maRqEqjeX5LmXqvuyzySTuyGhsMJuatVYJpUtGrI7Hpe3TAVwGPTm','null',NULL,NULL,NULL),
(23,'Love Meg','Relorcasa','Bersabe',1912463486455,19113062,'2003-03-22',18,'1209','male','megrelorcasa22@Gmail.com','','',0,'$2y$10$rziyvuXjJJdhSbng4m.90.9l8o8K46ecxwEJCrWltCaw90djVAfl.','null',NULL,'2021-05-22 05:00:49','2021-05-22 05:00:49');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`role`,`remember_token`,`created_at`,`updated_at`) values 
(1,'zyruslee','zyrusinso@Gmail.com',NULL,'$2y$10$tLE7zdInwRL8NFkbOoUmK.T715DGB/K83Ntn3BZwMPoxj1jHC4VWq','0',NULL,'2021-05-25 22:02:14','2021-05-26 21:46:41'),
(4,'admin','admin@Gmail.com',NULL,'$2y$10$8s06VPEVan4nUijeiEvoB.z/Z8xxB8G0lNt9/6i55x0Fy0EBzjgwS','admin',NULL,'2021-05-26 05:03:05','2021-05-26 21:46:27');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
