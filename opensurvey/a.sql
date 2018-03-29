-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: opensurvey
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(300) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uId` (`user_id`,`question_id`),
  KEY `qId` (`question_id`),
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'0',6,3,NULL,NULL),(6,'0',6,4,NULL,NULL),(20,'1',6,5,NULL,NULL),(21,'0',6,6,NULL,NULL),(22,'0',6,7,NULL,NULL),(23,'0',7,3,NULL,NULL),(26,'1',7,5,NULL,NULL),(27,'0',7,6,NULL,NULL),(28,'3',9,5,NULL,NULL),(29,'0',NULL,3,'2017-08-31 09:33:03','2017-08-31 09:33:03'),(30,'0',NULL,4,'2017-08-31 09:33:07','2017-08-31 09:33:07'),(31,'0',NULL,5,'2017-08-31 09:33:14','2017-08-31 09:33:14'),(32,'0',10,3,'2017-08-31 10:08:02','2017-08-31 10:08:02'),(33,'0',10,4,'2017-08-31 10:08:06','2017-08-31 10:08:06'),(34,'1',10,8,'2017-08-31 10:08:10','2017-08-31 10:08:10'),(35,'1',11,11,'2017-09-02 11:27:12','2017-09-02 11:27:12'),(36,'0',NULL,6,'2018-01-28 19:20:19','2018-01-28 19:20:19'),(37,'0',NULL,4,'2018-01-28 19:20:44','2018-01-28 19:20:44'),(38,'123123123',NULL,14,'2018-01-28 19:42:37','2018-01-28 19:42:37'),(39,'0',NULL,4,'2018-01-28 19:48:25','2018-01-28 19:48:25');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2018_02_01_230920_create_tags_table',1),(2,'2018_02_01_233534_create_tag_questions_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(2000) DEFAULT NULL,
  `possibleAnswer` varchar(6000) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uId` (`user_id`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (3,'21312321','[\"12312321\"]',10,0,NULL,NULL),(4,'312321','[\"12312321321321312\"]',10,0,NULL,NULL),(5,'12312312','[\"123123\",\"123213\",\"112\",\"2222\"]',10,0,NULL,NULL),(6,'ádasdasda','[\"u00e1dasdasd\"]',10,0,NULL,NULL),(7,'123456','[\"123\",\"123\"]',10,0,NULL,NULL),(8,'090900000','[\"12121212\",\"121212121212121\"]',10,0,NULL,NULL),(11,'13543574354','[\"46354687\",\"687435153\",\"7689768343513\"]',10,0,'2017-08-31 08:36:55','2017-08-31 08:36:55'),(12,'12312','[null]',NULL,0,'2018-01-28 17:40:51','2018-01-28 17:40:51'),(13,NULL,'null',NULL,0,'2018-01-28 17:41:49','2018-01-28 17:41:49'),(14,'1232131214123','null',NULL,0,'2018-01-28 17:42:21','2018-01-28 17:42:21'),(15,'qwertyuiop[','null',NULL,0,'2018-01-28 19:48:21','2018-01-28 19:48:21'),(16,'asdfghjkl;','null',NULL,0,'2018-01-28 19:49:57','2018-01-28 19:49:57'),(17,'123123','null',11,0,'2018-01-30 19:56:54','2018-01-30 19:56:54'),(18,'312321321','null',11,0,'2018-01-30 19:57:02','2018-01-30 19:57:02');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_question`
--

DROP TABLE IF EXISTS `tag_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag__questions_tag_id_foreign` (`tag_id`),
  KEY `tag__questions_question_id_foreign` (`question_id`),
  CONSTRAINT `tag__questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  CONSTRAINT `tag__questions_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_question`
--

LOCK TABLES `tag_question` WRITE;
/*!40000 ALTER TABLE `tag_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,'thephantasm61','Nguyễn Quang Huy','nguyenquanghuy1997@gmail.com','$2y$10$Sha9nQU8k19P13466iDjK.Gc3pLe7ASmtoWgEuI.eimBg5x/pYdnm','123456789',0,NULL,'v9UV4mQjEkDKGTo4nwg88KoLhJ0e8t0vzbaeqiAJ99k2b2n9VAGKiWYb6dGu','2017-08-30 13:23:42','2017-08-30 13:23:42'),(11,'admin','ABC','nguyenquanghu7@gmail.com','$2y$10$9pB.xyz1c8blrakBlFa2AOvN8pQJcBO0LCDkG7yw7y.iSnfEP9H3W','435435435',0,NULL,'o9nQGLya9rBGS4fq6cDOMvk7cbN07K149QUFKsqtjcjTATlVoYByIzZ0VfiA','2017-08-30 13:25:21','2018-01-30 19:57:02'),(12,'123123','1232131','nguyenhuy1997@gmail.com','$2y$10$5ba5rLc.HXZO0sizhiK5XungFMNwwJecHy4/0fGELAQ8ygvkA1F9q','1231231',0,NULL,'H16hkZkBA4r5CHt7nD6hniKUl5a5cYeIwltGRdrHL5NSRt62TITGU3ky7XxX','2017-08-30 13:26:30','2017-08-30 13:26:30'),(13,'user1','ASD','abc@asd.com','$2y$10$TyPEuHuVxHHAc027ZctxfeFLn4kVE8m.k1QyXDIMdRb4x6HI4ewqu','1234567',0,NULL,'SqwvxQdBGhvbgsij0GO1d5FthSFkKSYxUQqvRxVGEjWCtwXMQzXxQ54F7HVi','2018-01-30 15:09:41','2018-01-30 15:09:41'),(14,NULL,'zxc','zxc@zxc.zxc','$2y$10$2vG2.VEAREJplxRIj9Ua/unKqQPg266AuL8XeB2YqoZqY/vwwbE6O',NULL,0,NULL,'bMck7cWrQvDtFEnEbAe8tFc47qUZhuNYH1XaqyPCBLHOQlwOit3mcpmVYknC','2018-01-30 15:21:27','2018-01-30 15:21:27');
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

-- Dump completed on 2018-03-13 14:57:34
