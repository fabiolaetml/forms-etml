-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: forms
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `companysectors`
--

DROP TABLE IF EXISTS `companysectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companysectors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companysectors`
--

LOCK TABLES `companysectors` WRITE;
/*!40000 ALTER TABLE `companysectors` DISABLE KEYS */;
INSERT INTO `companysectors` VALUES (1,'Logística','2024-03-05 11:54:05','2024-03-05 11:54:05'),(2,'Distribuição','2024-03-05 11:54:16','2024-03-05 11:54:16'),(3,'Comercial','2024-03-05 11:54:24','2024-03-05 11:54:24');
/*!40000 ALTER TABLE `companysectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companyunits`
--

DROP TABLE IF EXISTS `companyunits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companyunits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companyunits`
--

LOCK TABLES `companyunits` WRITE;
/*!40000 ALTER TABLE `companyunits` DISABLE KEYS */;
INSERT INTO `companyunits` VALUES (1,'BELO HORIZONTE - MG','2024-03-04 21:01:57','2024-03-04 21:01:57'),(2,'DUQUE DE CAXIAS - RJ','2024-03-04 21:02:24','2024-03-04 21:02:24'),(3,'SERRA - ES','2024-03-04 21:02:43','2024-03-04 21:02:43');
/*!40000 ALTER TABLE `companyunits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employeeroles`
--

DROP TABLE IF EXISTS `employeeroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employeeroles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employeeroles`
--

LOCK TABLES `employeeroles` WRITE;
/*!40000 ALTER TABLE `employeeroles` DISABLE KEYS */;
INSERT INTO `employeeroles` VALUES (1,'Ajudante ','2024-03-05 11:54:59','2024-03-05 11:54:59'),(2,'Auxiliar Administrativo','2024-03-05 11:55:10','2024-03-05 11:55:10');
/*!40000 ALTER TABLE `employeeroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `termination_date` date NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_termination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeerole_id` bigint unsigned NOT NULL,
  `companyunit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companysector_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companysector_id_idx` (`companyunit_id`),
  CONSTRAINT `` FOREIGN KEY (`companyunit_id`) REFERENCES `companysectors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'José Santos','2024-03-01','1234567895','Demissão',1,1,'2024-03-05 11:55:55','2024-03-05 12:11:44',3),(2,'Maria','2024-03-05','12345678932','Pediu conta',1,2,'2024-03-05 12:11:25','2024-03-05 12:11:25',1);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_02_29_110852_create_employees_table',1),(6,'2024_02_29_161828_create_companyunits_table',1),(7,'2024_02_29_162238_create_employeeroles_table',1),(8,'2024_03_04_174525_create_companysectors_table',1),(16,'2024_03_05_164849_create_permission_tables',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(2,'view_any_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(3,'create_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(4,'update_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(5,'restore_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(6,'restore_any_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(7,'replicate_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(8,'reorder_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(9,'delete_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(10,'delete_any_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(11,'force_delete_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(12,'force_delete_any_companysector','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(13,'view_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(14,'view_any_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(15,'create_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(16,'update_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(17,'restore_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(18,'restore_any_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(19,'replicate_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(20,'reorder_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(21,'delete_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(22,'delete_any_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(23,'force_delete_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(24,'force_delete_any_companyunit','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(25,'view_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(26,'view_any_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(27,'create_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(28,'update_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(29,'restore_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(30,'restore_any_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(31,'replicate_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(32,'reorder_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(33,'delete_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(34,'delete_any_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(35,'force_delete_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(36,'force_delete_any_employee','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(37,'view_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(38,'view_any_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(39,'create_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(40,'update_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(41,'restore_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(42,'restore_any_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(43,'replicate_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(44,'reorder_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(45,'delete_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(46,'delete_any_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(47,'force_delete_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(48,'force_delete_any_employeerole','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(49,'view_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(50,'view_any_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(51,'create_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(52,'update_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(53,'delete_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(54,'delete_any_role','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(55,'view_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(56,'view_any_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(57,'create_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(58,'update_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(59,'restore_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(60,'restore_any_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(61,'replicate_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(62,'reorder_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(63,'delete_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(64,'delete_any_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(65,'force_delete_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(66,'force_delete_any_user','web','2024-03-05 20:05:23','2024-03-05 20:05:23');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(1,2),(2,2),(3,2),(4,2),(13,2),(14,2),(15,2),(16,2),(26,2),(27,2),(28,2),(37,2),(38,2),(39,2),(40,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super_admin','web','2024-03-05 20:05:23','2024-03-05 20:05:23'),(2,'panel_user','web','2024-03-05 20:05:24','2024-03-05 20:05:24');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'FABIOLA','admin@teste.com',NULL,'$2y$12$UkYsyhpzIPAUcNV0jjroT.eICDOanvfPjNOzwW8OoGp0TGZ0uHNkq',NULL,'2024-03-04 21:00:25','2024-03-04 21:00:25'),(2,'TESTE RH','rh@teste.com',NULL,'$2y$12$8Ar8QULF/VpXZ/PS5k2.1uB/B1fvVebmV9gRT8iqda9B2cFnDxWSG',NULL,'2024-03-05 20:25:26','2024-03-05 20:25:26');
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

-- Dump completed on 2024-03-06  8:39:58
