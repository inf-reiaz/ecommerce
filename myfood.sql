-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Pre Order','Pre-Order','2018-05-01 00:00:00','2018-05-01 00:00:00'),(2,'Ramadan Item','ramadan-item','2018-05-01 00:00:00','2018-05-01 00:00:00'),(3,'Grocery','grocery','2018-05-01 00:00:00','2018-05-01 00:00:00'),(4,'Ingredients','Ingredients','2018-05-01 00:00:00','2018-05-01 00:00:00'),(5,'Honey','Honey','2018-05-01 00:00:00','2018-05-01 00:00:00'),(6,'Fish & Dairy','Fish-&-Dairy','2018-05-01 00:00:00','2018-05-01 00:00:00'),(7,'Bakery','Bakery','2018-05-01 00:00:00','2018-05-01 00:00:00'),(8,'Beverage','Beverage','2018-05-01 00:00:00','2018-05-01 00:00:00'),(9,'Seasonal Fruits','Seasonal-Fruits','2018-05-01 00:00:00','2018-05-01 00:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Cox\'s Bazar','কক্সবাজার ','Coxs-Bazar',NULL,NULL),(2,'Barguna','বরগুনা','Barguna',NULL,NULL),(3,'Barisal','বরিশাল','Barisal',NULL,NULL),(4,'Bhola','ভোলা','Bhola',NULL,NULL),(5,'Jhalokati','ঝালকাঠি','Jhalokati',NULL,NULL),(6,'Patuakhali','পটুয়াখালী','Patuakhali',NULL,NULL),(7,'Pirojpur','পিরোজপুর','Pirojpur',NULL,NULL),(8,'Bandarban','বান্দরবান','Bandarban',NULL,NULL),(9,'Brahmanbaria','ব্রাহ্মণবাড়ীয়া','Brahmanbaria',NULL,NULL),(10,'Chandpur','চাঁদপুর','Chandpur',NULL,NULL),(11,'Chittagong','চট্টগ্রাম','Chittagong',NULL,NULL),(12,'Comilla','কুমিল্লা','Comilla',NULL,NULL),(13,'Feni','ফেনী','Feni',NULL,NULL),(14,'Khagrachhari','খাগড়াছড়ি','Khagrachhari',NULL,NULL),(15,'Lakshmipur','লক্ষ্মীপুর','Lakshmipur',NULL,NULL),(16,'Noakhali','নোয়াখালী','Noakhali',NULL,NULL),(17,'Rangamati','রাঙ্গামাটি','Rangamati',NULL,NULL),(18,'Dhaka','ঢাকা','Dhaka',NULL,NULL),(19,'Faridpur','ফরিদপুর','Faridpur',NULL,NULL),(20,'Gazipur','গাজীপুর','Gazipur',NULL,NULL),(21,'Gopalganj','গোপালগঞ্জ','Gopalganj',NULL,NULL),(22,'Kishoreganj','কিশোরগঞ্জ','Kishoreganj',NULL,NULL),(23,'Madaripur','মাদারীপুর','Madaripur',NULL,NULL),(24,'Manikganj','মানিকগঞ্জ','Manikganj',NULL,NULL),(25,'Munshiganj','মুন্সীগঞ্জ','Munshiganj',NULL,NULL),(26,'Narayanganj','নারায়ণগঞ্জ','Narayanganj',NULL,NULL),(27,'Narsingdi','নরসিংদী','Narsingdi',NULL,NULL),(28,'Rajbari','রাজবাড়ী','Rajbari',NULL,NULL),(29,'Shariatpur','শরীয়তপুর','Shariatpur',NULL,NULL),(30,'Tangail','টাঙ্গাইল','Tangail',NULL,NULL),(31,'Bagerhat','বাগেরহাট','Bagerhat',NULL,NULL),(32,'Chuadanga','চুয়াডাঙ্গা','Chuadanga',NULL,NULL),(33,'Jessore','যশোর','Jessore',NULL,NULL),(34,'Jhenaidah','ঝিনাইদহ','Jhenaidah',NULL,NULL),(35,'Khulna','খুলনা','Khulna',NULL,NULL),(36,'Kushtia','কুষ্টিয়া','Kushtia',NULL,NULL),(37,'Magura','মাগুরা','Magura',NULL,NULL),(38,'Meherpur','মেহেরপুর','Meherpur',NULL,NULL),(39,'Narail','নড়াইল','Narail',NULL,NULL),(40,'Satkhira','সাতক্ষিরা','Satkhira',NULL,NULL),(41,'Jamalpur','জামালপুর','Jamalpur',NULL,NULL),(42,'Mymensingh','ময়মনসিংহ','Mymensingh',NULL,NULL),(43,'Netrakona','নেত্রকোনা','Netrakona',NULL,NULL),(44,'Sherpur','শেরপুর','Sherpur',NULL,NULL),(45,'Bogra','বগুড়া','Bogra',NULL,NULL),(46,'Joypurhat','জয়পুরহাট','Joypurhat',NULL,NULL),(47,'Naogaon','নওগাঁ','Naogaon',NULL,NULL),(48,'Natore','নাটোর','Natore',NULL,NULL),(49,'Chapainawabganj','নওয়াবগঞ্জ','Chapainawabganj',NULL,NULL),(50,'Pabna','পাবনা','Pabna',NULL,NULL),(51,'Rajshahi','রাজশাহী','Rajshahi',NULL,NULL),(52,'Sirajgonj','সিরাজগঞ্জ','Sirajgonj',NULL,NULL),(53,'Dinajpur','দিনাজপুর','Dinajpur',NULL,NULL),(54,'Gaibandha','গাইবান্ধা','Gaibandha',NULL,NULL),(55,'Kurigram','কুড়িগ্রাম','Kurigram',NULL,NULL),(56,'Lalmonirhat','লালমনিরহাট','Lalmonirhat',NULL,NULL),(57,'Nilphamari','নীলফামারী','Nilphamari',NULL,NULL),(58,'Panchagarh','পঞ্চগড়','Panchagarh',NULL,NULL),(59,'Rangpur','রংপুর','Rangpur',NULL,NULL),(60,'Thakurgaon','ঠাকুরগাঁও','Thakurgaon',NULL,NULL),(61,'Habiganj','হবিগঞ্জ','Habiganj',NULL,NULL),(62,'Moulvibazar','মৌলভীবাজার','Moulvibazar',NULL,NULL),(63,'Sunamganj','সুনামগঞ্জ','Sunamganj',NULL,NULL),(64,'Sylhet','সিলেট','Sylhet',NULL,NULL);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','Afghanistan',NULL,NULL),(2,'AL','Albania',NULL,NULL),(3,'DZ','Algeria',NULL,NULL),(4,'AS','American Samoa',NULL,NULL),(5,'AD','Andorra',NULL,NULL),(6,'AO','Angola',NULL,NULL),(7,'AI','Anguilla',NULL,NULL),(8,'AQ','Antarctica',NULL,NULL),(9,'AG','Antigua and Barbuda',NULL,NULL),(10,'AR','Argentina',NULL,NULL),(11,'AM','Armenia',NULL,NULL),(12,'AW','Aruba',NULL,NULL),(13,'AU','Australia',NULL,NULL),(14,'AT','Austria',NULL,NULL),(15,'AZ','Azerbaijan',NULL,NULL),(16,'BS','Bahamas',NULL,NULL),(17,'BH','Bahrain',NULL,NULL),(18,'BD','Bangladesh',NULL,NULL),(19,'BB','Barbados',NULL,NULL),(20,'BY','Belarus',NULL,NULL),(21,'BE','Belgium',NULL,NULL),(22,'BZ','Belize',NULL,NULL),(23,'BJ','Benin',NULL,NULL),(24,'BM','Bermuda',NULL,NULL),(25,'BT','Bhutan',NULL,NULL),(26,'BO','Bolivia',NULL,NULL),(27,'BA','Bosnia and Herzegovina',NULL,NULL),(28,'BW','Botswana',NULL,NULL),(29,'BV','Bouvet Island',NULL,NULL),(30,'BR','Brazil',NULL,NULL),(31,'BQ','British Antarctic Territory',NULL,NULL),(32,'IO','British Indian Ocean Territory',NULL,NULL),(33,'VG','British Virgin Islands',NULL,NULL),(34,'BN','Brunei',NULL,NULL),(35,'BG','Bulgaria',NULL,NULL),(36,'BF','Burkina Faso',NULL,NULL),(37,'BI','Burundi',NULL,NULL),(38,'KH','Cambodia',NULL,NULL),(39,'CM','Cameroon',NULL,NULL),(40,'CA','Canada',NULL,NULL),(41,'CT','Canton and Enderbury Islands',NULL,NULL),(42,'CV','Cape Verde',NULL,NULL),(43,'KY','Cayman Islands',NULL,NULL),(44,'CF','Central African Republic',NULL,NULL),(45,'TD','Chad',NULL,NULL),(46,'CL','Chile',NULL,NULL),(47,'CN','China',NULL,NULL),(48,'CX','Christmas Island',NULL,NULL),(49,'CC','Cocos [Keeling] Islands',NULL,NULL),(50,'CO','Colombia',NULL,NULL),(51,'KM','Comoros',NULL,NULL),(52,'CG','Congo - Brazzaville',NULL,NULL),(53,'CD','Congo - Kinshasa',NULL,NULL),(54,'CK','Cook Islands',NULL,NULL),(55,'CR','Costa Rica',NULL,NULL),(56,'HR','Croatia',NULL,NULL),(57,'CU','Cuba',NULL,NULL),(58,'CY','Cyprus',NULL,NULL),(59,'CZ','Czech Republic',NULL,NULL),(60,'CI','Côte d’Ivoire',NULL,NULL),(61,'DK','Denmark',NULL,NULL),(62,'DJ','Djibouti',NULL,NULL),(63,'DM','Dominica',NULL,NULL),(64,'DO','Dominican Republic',NULL,NULL),(65,'NQ','Dronning Maud Land',NULL,NULL),(66,'DD','East Germany',NULL,NULL),(67,'EC','Ecuador',NULL,NULL),(68,'EG','Egypt',NULL,NULL),(69,'SV','El Salvador',NULL,NULL),(70,'GQ','Equatorial Guinea',NULL,NULL),(71,'ER','Eritrea',NULL,NULL),(72,'EE','Estonia',NULL,NULL),(73,'ET','Ethiopia',NULL,NULL),(74,'FK','Falkland Islands',NULL,NULL),(75,'FO','Faroe Islands',NULL,NULL),(76,'FJ','Fiji',NULL,NULL),(77,'FI','Finland',NULL,NULL),(78,'FR','France',NULL,NULL),(79,'GF','French Guiana',NULL,NULL),(80,'PF','French Polynesia',NULL,NULL),(81,'TF','French Southern Territories',NULL,NULL),(82,'FQ','French Southern and Antarctic Territories',NULL,NULL),(83,'GA','Gabon',NULL,NULL),(84,'GM','Gambia',NULL,NULL),(85,'GE','Georgia',NULL,NULL),(86,'DE','Germany',NULL,NULL),(87,'GH','Ghana',NULL,NULL),(88,'GI','Gibraltar',NULL,NULL),(89,'GR','Greece',NULL,NULL),(90,'GL','Greenland',NULL,NULL),(91,'GD','Grenada',NULL,NULL),(92,'GP','Guadeloupe',NULL,NULL),(93,'GU','Guam',NULL,NULL),(94,'GT','Guatemala',NULL,NULL),(95,'GG','Guernsey',NULL,NULL),(96,'GN','Guinea',NULL,NULL),(97,'GW','Guinea-Bissau',NULL,NULL),(98,'GY','Guyana',NULL,NULL),(99,'HT','Haiti',NULL,NULL),(100,'HM','Heard Island and McDonald Islands',NULL,NULL),(101,'HN','Honduras',NULL,NULL),(102,'HK','Hong Kong SAR China',NULL,NULL),(103,'HU','Hungary',NULL,NULL),(104,'IS','Iceland',NULL,NULL),(105,'IN','India',NULL,NULL),(106,'ID','Indonesia',NULL,NULL),(107,'IR','Iran',NULL,NULL),(108,'IQ','Iraq',NULL,NULL),(109,'IE','Ireland',NULL,NULL),(110,'IM','Isle of Man',NULL,NULL),(111,'IL','Israel',NULL,NULL),(112,'IT','Italy',NULL,NULL),(113,'JM','Jamaica',NULL,NULL),(114,'JP','Japan',NULL,NULL),(115,'JE','Jersey',NULL,NULL),(116,'JT','Johnston Island',NULL,NULL),(117,'JO','Jordan',NULL,NULL),(118,'KZ','Kazakhstan',NULL,NULL),(119,'KE','Kenya',NULL,NULL),(120,'KI','Kiribati',NULL,NULL),(121,'KW','Kuwait',NULL,NULL),(122,'KG','Kyrgyzstan',NULL,NULL),(123,'LA','Laos',NULL,NULL),(124,'LV','Latvia',NULL,NULL),(125,'LB','Lebanon',NULL,NULL),(126,'LS','Lesotho',NULL,NULL),(127,'LR','Liberia',NULL,NULL),(128,'LY','Libya',NULL,NULL),(129,'LI','Liechtenstein',NULL,NULL),(130,'LT','Lithuania',NULL,NULL),(131,'LU','Luxembourg',NULL,NULL),(132,'MO','Macau SAR China',NULL,NULL),(133,'MK','Macedonia',NULL,NULL),(134,'MG','Madagascar',NULL,NULL),(135,'MW','Malawi',NULL,NULL),(136,'MY','Malaysia',NULL,NULL),(137,'MV','Maldives',NULL,NULL),(138,'ML','Mali',NULL,NULL),(139,'MT','Malta',NULL,NULL),(140,'MH','Marshall Islands',NULL,NULL),(141,'MQ','Martinique',NULL,NULL),(142,'MR','Mauritania',NULL,NULL),(143,'MU','Mauritius',NULL,NULL),(144,'YT','Mayotte',NULL,NULL),(145,'FX','Metropolitan France',NULL,NULL),(146,'MX','Mexico',NULL,NULL),(147,'FM','Micronesia',NULL,NULL),(148,'MI','Midway Islands',NULL,NULL),(149,'MD','Moldova',NULL,NULL),(150,'MC','Monaco',NULL,NULL),(151,'MN','Mongolia',NULL,NULL),(152,'ME','Montenegro',NULL,NULL),(153,'MS','Montserrat',NULL,NULL),(154,'MA','Morocco',NULL,NULL),(155,'MZ','Mozambique',NULL,NULL),(156,'MM','Myanmar [Burma]',NULL,NULL),(157,'NA','Namibia',NULL,NULL),(158,'NR','Nauru',NULL,NULL),(159,'NP','Nepal',NULL,NULL),(160,'NL','Netherlands',NULL,NULL),(161,'AN','Netherlands Antilles',NULL,NULL),(162,'NT','Neutral Zone',NULL,NULL),(163,'NC','New Caledonia',NULL,NULL),(164,'NZ','New Zealand',NULL,NULL),(165,'NI','Nicaragua',NULL,NULL),(166,'NE','Niger',NULL,NULL),(167,'NG','Nigeria',NULL,NULL),(168,'NU','Niue',NULL,NULL),(169,'NF','Norfolk Island',NULL,NULL),(170,'KP','North Korea',NULL,NULL),(171,'VD','North Vietnam',NULL,NULL),(172,'MP','Northern Mariana Islands',NULL,NULL),(173,'NO','Norway',NULL,NULL),(174,'OM','Oman',NULL,NULL),(175,'PC','Pacific Islands Trust Territory',NULL,NULL),(176,'PK','Pakistan',NULL,NULL),(177,'PW','Palau',NULL,NULL),(178,'PS','Palestinian Territories',NULL,NULL),(179,'PA','Panama',NULL,NULL),(180,'PZ','Panama Canal Zone',NULL,NULL),(181,'PG','Papua New Guinea',NULL,NULL),(182,'PY','Paraguay',NULL,NULL),(183,'YD','People\'s Democratic Republic of Yemen',NULL,NULL),(184,'PE','Peru',NULL,NULL),(185,'PH','Philippines',NULL,NULL),(186,'PN','Pitcairn Islands',NULL,NULL),(187,'PL','Poland',NULL,NULL),(188,'PT','Portugal',NULL,NULL),(189,'PR','Puerto Rico',NULL,NULL),(190,'QA','Qatar',NULL,NULL),(191,'RO','Romania',NULL,NULL),(192,'RU','Russia',NULL,NULL),(193,'RW','Rwanda',NULL,NULL),(194,'RE','Réunion',NULL,NULL),(195,'BL','Saint Barthélemy',NULL,NULL),(196,'SH','Saint Helena',NULL,NULL),(197,'KN','Saint Kitts and Nevis',NULL,NULL),(198,'LC','Saint Lucia',NULL,NULL),(199,'MF','Saint Martin',NULL,NULL),(200,'PM','Saint Pierre and Miquelon',NULL,NULL),(201,'VC','Saint Vincent and the Grenadines',NULL,NULL),(202,'WS','Samoa',NULL,NULL),(203,'SM','San Marino',NULL,NULL),(204,'SA','Saudi Arabia',NULL,NULL),(205,'SN','Senegal',NULL,NULL),(206,'RS','Serbia',NULL,NULL),(207,'CS','Serbia and Montenegro',NULL,NULL),(208,'SC','Seychelles',NULL,NULL),(209,'SL','Sierra Leone',NULL,NULL),(210,'SG','Singapore',NULL,NULL),(211,'SK','Slovakia',NULL,NULL),(212,'SI','Slovenia',NULL,NULL),(213,'SB','Solomon Islands',NULL,NULL),(214,'SO','Somalia',NULL,NULL),(215,'ZA','South Africa',NULL,NULL),(216,'GS','South Georgia and the South Sandwich Islands',NULL,NULL),(217,'KR','South Korea',NULL,NULL),(218,'ES','Spain',NULL,NULL),(219,'LK','Sri Lanka',NULL,NULL),(220,'SD','Sudan',NULL,NULL),(221,'SR','Suriname',NULL,NULL),(222,'SJ','Svalbard and Jan Mayen',NULL,NULL),(223,'SZ','Swaziland',NULL,NULL),(224,'SE','Sweden',NULL,NULL),(225,'CH','Switzerland',NULL,NULL),(226,'SY','Syria',NULL,NULL),(227,'ST','São Tomé and Príncipe',NULL,NULL),(228,'TW','Taiwan',NULL,NULL),(229,'TJ','Tajikistan',NULL,NULL),(230,'TZ','Tanzania',NULL,NULL),(231,'TH','Thailand',NULL,NULL),(232,'TL','Timor-Leste',NULL,NULL),(233,'TG','Togo',NULL,NULL),(234,'TK','Tokelau',NULL,NULL),(235,'TO','Tonga',NULL,NULL),(236,'TT','Trinidad and Tobago',NULL,NULL),(237,'TN','Tunisia',NULL,NULL),(238,'TR','Turkey',NULL,NULL),(239,'TM','Turkmenistan',NULL,NULL),(240,'TC','Turks and Caicos Islands',NULL,NULL),(241,'TV','Tuvalu',NULL,NULL),(242,'UM','U.S. Minor Outlying Islands',NULL,NULL),(243,'PU','U.S. Miscellaneous Pacific Islands',NULL,NULL),(244,'VI','U.S. Virgin Islands',NULL,NULL),(245,'UG','Uganda',NULL,NULL),(246,'UA','Ukraine',NULL,NULL),(247,'SU','Union of Soviet Socialist Republics',NULL,NULL),(248,'AE','United Arab Emirates',NULL,NULL),(249,'GB','United Kingdom',NULL,NULL),(250,'US','United States',NULL,NULL),(251,'ZZ','Unknown or Invalid Region',NULL,NULL),(252,'UY','Uruguay',NULL,NULL),(253,'UZ','Uzbekistan',NULL,NULL),(254,'VU','Vanuatu',NULL,NULL),(255,'VA','Vatican City',NULL,NULL),(256,'VE','Venezuela',NULL,NULL),(257,'VN','Vietnam',NULL,NULL),(258,'WK','Wake Island',NULL,NULL),(259,'WF','Wallis and Futuna',NULL,NULL),(260,'EH','Western Sahara',NULL,NULL),(261,'YE','Yemen',NULL,NULL),(262,'ZM','Zambia',NULL,NULL),(263,'ZW','Zimbabwe',NULL,NULL),(264,'AX','Åland Islands',NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metas`
--

DROP TABLE IF EXISTS `metas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metas`
--

LOCK TABLES `metas` WRITE;
/*!40000 ALTER TABLE `metas` DISABLE KEYS */;
INSERT INTO `metas` VALUES (1,'Abdul Halim Reiaz','laravel ,php ,html ,html 5 ,css ,css3 ,javaScript,Node Js ,Vue Js.','Abdul Halim Reiaz web Devoloper.Email:reiazbubt@gmail.com',NULL,NULL);
/*!40000 ALTER TABLE `metas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (40,'2014_10_12_000000_create_users_table',1),(41,'2014_10_12_100000_create_password_resets_table',1),(42,'2017_09_16_194930_create_countries_table',1),(43,'2017_09_18_150853_create_roles_table',1),(44,'2017_09_18_150935_create_permissions_table',1),(45,'2017_09_18_151107_create_role_user_table',1),(46,'2017_09_18_151214_create_permission_user_table',1),(47,'2017_09_18_151256_create_permission_role_table',1),(48,'2017_09_21_195615_create_cities_table',1),(49,'2018_04_04_140457_create_settings_table',1),(50,'2018_04_05_064950_create_metas_table',1),(51,'2018_05_13_231103_create_categories_table',1),(52,'2018_05_14_223104_create_products_table',1),(53,'2018_05_19_232914_create_carts_table',2),(54,'2018_05_20_031832_create_orders_table',3),(55,'2018_05_20_032317_order_product_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,20,3,3,0.00,NULL,NULL),(2,3,3,4,0.00,NULL,NULL),(3,21,5,1,0.00,NULL,NULL),(4,20,5,1,0.00,NULL,NULL),(5,19,5,1,0.00,NULL,NULL),(6,20,6,4,0.00,NULL,NULL),(7,3,6,1,0.00,NULL,NULL),(8,21,6,2,0.00,NULL,NULL),(9,44,6,1,0.00,NULL,NULL),(10,44,7,1,0.00,NULL,NULL),(11,21,8,1,0.00,NULL,NULL),(12,20,9,1,0.00,NULL,NULL);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `isDelivered` tinyint(4) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radios` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cash_on_delivery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,0,0,'Griffith','Park','0klkl','cuteheq@mailinator.com','Dolor rerum omnis lorem quia ipsum lorem ut qui ut aut','Naogaon','Maiores do eiusmod neque aut quos sint maiores maiores aliquam qui incidunt facilis quod autem commodo fugit','313','yes','yes',990.00,'2018-05-20 03:47:45','2018-05-20 03:47:45'),(2,0,0,'Jasper','Butler','0klkl','guda@mailinator.com','Autem consequatur Fugit eaque expedita qui vel molestias doloremque id debitis voluptatibus et qui aspernatur minim eveniet praesentium dolore','Mymensingh','Cupiditate error laudantium lorem ut nulla natus possimus temporibus eum iusto cillum voluptates accusamus doloremque eum','364','yes','yes',990.00,'2018-05-20 03:50:03','2018-05-20 03:50:03'),(3,0,0,'Jasper','Butler','0klkl','guda@mailinator.com','Autem consequatur Fugit eaque expedita qui vel molestias doloremque id debitis voluptatibus et qui aspernatur minim eveniet praesentium dolore','Mymensingh','Cupiditate error laudantium lorem ut nulla natus possimus temporibus eum iusto cillum voluptates accusamus doloremque eum','364','yes','yes',990.00,'2018-05-20 03:50:36','2018-05-20 03:50:36'),(4,0,0,'Jasper','Butler','0klkl','guda@mailinator.com','Autem consequatur Fugit eaque expedita qui vel molestias doloremque id debitis voluptatibus et qui aspernatur minim eveniet praesentium dolore','Mymensingh','Cupiditate error laudantium lorem ut nulla natus possimus temporibus eum iusto cillum voluptates accusamus doloremque eum','364','yes','yes',990.00,'2018-05-20 03:51:30','2018-05-20 03:51:30'),(5,0,0,'Piper','Stephens','0klkl','gosupu@mailinator.com','Earum quae libero natus sint','Jessore','Excepteur deleniti accusantium reiciendis rerum voluptatem sunt sit libero ad eaque','77','yes','yes',440.00,'2018-05-20 03:54:11','2018-05-20 03:54:11'),(6,0,0,'khalid','awlad','0klkl','khalid.ashik@gmail.com','House 1170, Road 50(old)\r\nAvenue 12','Dhaka','1216','01686886656','yes','yes',1.00,'2018-05-20 07:15:18','2018-05-20 07:15:18'),(7,0,0,'Jolie','Kirk','0klkl','heqo@mailinator.net','Quibusdam officiis voluptatem Ea quo ea magni ipsum commodo totam','Sirajgonj','Iure ut dolor eos sed aut sint doloremque aut cum dolor eaque aute error et non in ut','171','yes','yes',288.00,'2018-05-20 07:17:01','2018-05-20 07:17:01'),(8,0,0,'Mia','Sanchez','0klkl','liqisokiw@mailinator.com','Facere ut exercitationem architecto ex et sit magnam et quas deserunt perspiciatis','Barisal','Facilis numquam totam quos magni quae accusamus est commodi','965','yes','yes',35.00,'2018-05-20 07:22:58','2018-05-20 07:22:58'),(9,0,0,'Ivana','Logan','0klkl','puveqyqoco@mailinator.net','successsuccesssuccesssuccess','Rangpur','Modi irure molestias quasi magna consequat Vitae tempora sed deleniti laborum Fuga Fugiat quibusdam distinctio Ut dolorem sint neque sit','219','yes','yes',210.00,'2018-05-20 07:34:07','2018-05-20 07:34:07');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'App\\Http\\Controllers\\DashboardController@getDashboard',NULL,NULL),(2,'App\\Http\\Controllers\\UsersController@getAllUser',NULL,NULL),(3,'App\\Http\\Controllers\\UsersController@getBlockUser',NULL,NULL),(4,'App\\Http\\Controllers\\UsersController@getBlockUsers',NULL,NULL),(5,'App\\Http\\Controllers\\UsersController@getSubscriber',NULL,NULL),(6,'App\\Http\\Controllers\\UsersController@getUserCreate',NULL,NULL),(7,'App\\Http\\Controllers\\UsersController@roleToPremissions',NULL,NULL),(8,'App\\Http\\Controllers\\MyProfile@getEditProfile',NULL,NULL),(9,'App\\Http\\Controllers\\MyProfile@getProfile',NULL,NULL),(10,'App\\Http\\Controllers\\MyProfile@changePassword',NULL,NULL),(11,'App\\Http\\Controllers\\PermissionController@create',NULL,NULL),(12,'App\\Http\\Controllers\\PermissionController@show',NULL,NULL),(13,'App\\Http\\Controllers\\PermissionController@edit',NULL,NULL),(14,'App\\Http\\Controllers\\RolesController@create',NULL,NULL),(15,'App\\Http\\Controllers\\RolesController@show',NULL,NULL),(16,'App\\Http\\Controllers\\RolesController@edit',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discunt_price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Green Coconut (Daab)','/public/front/img/1.jpg','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',100,90,10,9,'2018-05-01 00:00:00','2018-05-19 06:11:40'),(2,'Ripen Papaya','/public/front/img/20180519053514_lg.jpg','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',100,90,10,9,'2018-05-01 00:00:00','2018-05-19 06:11:51'),(3,'Medjout Dates','/public/front/img/20180519061731_lg.jpg','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',100,90,10,2,'2018-05-01 00:00:00','2018-05-19 06:17:31'),(4,'Puffed Rice','/public/front/img/20180519061810_lg.jpg','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',100,95,10,2,'2018-05-01 00:00:00','2018-05-19 06:18:10'),(5,'Amar Modhu','/public/front/img/20180519053137_lg.jpg','<p><span style=\"color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. </span><br></p>',240,200,50,5,'2018-05-19 05:31:37','2018-05-19 06:11:27'),(15,'Cracker Cookie','/public/front/img/20180519060729_lg.jpg','<p>NA</p>',180,175,100,7,'2018-05-19 06:07:29','2018-05-19 06:07:29'),(16,'SaltLake Biscuit','/public/front/img/20180519060821_lg.jpg','<p>NA</p>',250,235,80,7,'2018-05-19 06:08:21','2018-05-19 06:08:21'),(17,'Namkin Biscuit','/public/front/img/20180519061012_lg.jpg','<p>NA</p>',140,138,200,7,'2018-05-19 06:10:12','2018-05-19 06:10:12'),(18,'Shon Papri','/public/front/img/20180519061108_lg.jpg','<p>NA</p>',200,190,100,7,'2018-05-19 06:11:09','2018-05-19 06:11:09'),(19,'Sukkary dates','/public/front/img/20180519061901_lg.jpg','<p>NA</p>',200,195,50,2,'2018-05-19 06:19:01','2018-05-19 06:19:01'),(20,'Natural Delights','/public/front/img/20180519055349_lg.jpg','<p>NA</p>',220,210,50,2,'2018-05-19 06:19:59','2018-05-19 17:53:49'),(21,'Turn Organic','/public/front/img/20180519062043_lg.jpg','<p>NA</p>',40,35,200,2,'2018-05-19 06:20:43','2018-05-19 06:20:43'),(22,'Forest Honey','/public/front/img/20180519062241_lg.jpg','<p>NA</p>',220,200,200,5,'2018-05-19 06:22:41','2018-05-19 06:22:41'),(23,'Melaki Honey','/public/front/img/20180519062334_lg.jpg','<p>NA</p>',200,195,200,5,'2018-05-19 06:23:34','2018-05-19 06:23:34'),(24,'Mango Tree Honey','/public/front/img/20180519062416_lg.png','<p>NA</p>',300,298,10,5,'2018-05-19 06:24:16','2018-05-19 06:24:16'),(25,'Pure Organics','/public/front/img/20180519062451_lg.jpg','<p>NA</p>',300,298,20,5,'2018-05-19 06:24:51','2018-05-19 06:24:51'),(31,'Buffalo Seasoning Mix','/public/front/img/20180519064219_lg.jpg','<p>NA</p>',200,100,100,4,'2018-05-19 06:42:19','2018-05-19 06:42:19'),(32,'Spice Collection','/public/front/img/20180519064302_lg.jpeg','<p>NA</p>',180,170,20,4,'2018-05-19 06:43:02','2018-05-19 06:43:02'),(33,'Mixed Spice','/public/front/img/20180519064339_lg.jpg','<p>NA</p>',100,89,200,4,'2018-05-19 06:43:40','2018-05-19 06:43:40'),(34,'Ginger','/public/front/img/20180519064453_lg.jpg','<p>NA</p>',200,197,100,4,'2018-05-19 06:44:53','2018-05-19 06:44:53'),(35,'Cow Meat','/public/front/img/20180519065543_lg.jpg','<p>NA</p>',480,447,200,6,'2018-05-19 06:55:43','2018-05-19 06:55:43'),(36,'Chicken','/public/front/img/20180519065645_lg.png','<p>NA</p>',200,176,200,6,'2018-05-19 06:56:46','2018-05-19 06:56:46'),(37,'Tuna Fish','/public/front/img/20180519065822_lg.jpg','<p>NA</p>',200,180,200,6,'2018-05-19 06:58:22','2018-05-19 06:58:22'),(38,'Fram Fresh Milk','/public/front/img/20180519070045_lg.jpg','<p>NA</p>',200,198,100,6,'2018-05-19 07:00:45','2018-05-19 07:00:45'),(40,'Bashmati Rice','/public/front/img/20180519113959_lg.jpg','<p>NA</p>',130,128,100,3,'2018-05-19 11:39:59','2018-05-19 11:39:59'),(41,'KAKA Bhai Bashmati','/public/front/img/20180519114111_lg.jpg','<p>NA</p>',180,177,100,3,'2018-05-19 11:41:11','2018-05-19 11:41:11'),(42,'Natural Orange Juice','/public/front/img/20180519055732_lg.jpg','<p>NA</p>',300,298,200,8,'2018-05-19 17:57:32','2018-05-19 17:57:32'),(43,'Golden Circle Green Juice','/public/front/img/20180519055940_lg.png','<p>NA</p>',300,295,20,8,'2018-05-19 17:59:40','2018-05-19 17:59:40'),(44,'Gopalvog Mango','/public/front/img/20180520070822_lg.jpg','<p>Gopalvog is one of the famous mango in Bangladesh. It is not yet known when&nbsp;<span style=\"letter-spacing: 0px;\">and where this mango was invented. But legend says it must have some&nbsp;</span><span style=\"letter-spacing: 0px;\">connection&nbsp;</span><span style=\"letter-spacing: 0px;\">with the famous Gopal Vaar. Characteristics of this mango is given below.</span></p><p>- Size: medium.</p><p>- Shape: Little longish and almost round shaped.</p><p>- No fruit fiber, the cores are deep, color is orangish, the shells are&nbsp;<span style=\"letter-spacing: 0px;\">slightly thick</span></p><p>- Seed density: thin</p><p>- Average weight: almost 210 gram,</p><p>- Very juicy</p>',300,288,200,1,'2018-05-20 07:08:22','2018-05-20 07:08:22'),(45,'Heemsagor','/public/front/img/20180520071423_lg.jpg','<p>Heemsagor also known as Khirshapaat is a famous mango among Bangladeshi people.<span style=\"letter-spacing: 0px;\">Found in all over the country but mostly in Chapainawabganj and its adjacent areas. It\'s&nbsp;</span><span style=\"letter-spacing: 0px;\">a very famous mango. People of Chapainawabganj and its adjacent area call it&nbsp;</span><span style=\"letter-spacing: 0px;\">Khirshapaat. But </span>residence<span style=\"letter-spacing: 0px;\"> of Dhaka knows it as Heemsagor. Characteristics of this&nbsp;</span><span style=\"letter-spacing: 0px;\">mango </span>is<span style=\"letter-spacing: 0px;\"> given below.</span></p><p><br></p><p>- This mango has Exquisite color,</p><p>- Unmatched sweet taste and smell. This mango&amp;#39;s sweet taste and smell is&nbsp;<span style=\"letter-spacing: 0px;\">different from other mangoes in the world. That&amp;#39;s why it is considered to be the&nbsp;</span><span style=\"letter-spacing: 0px;\">King of Mango.</span></p><p>- The core of this mango is yellow and orange (color)</p><p>- Has no fiber.</p><p>- A normal mango weighs from 250 to 350 grams.</p>',400,395,200,1,'2018-05-20 07:14:23','2018-05-20 07:14:23');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'dev',NULL,NULL),(2,'superadmin',NULL,NULL),(3,'admin',NULL,NULL),(4,'user',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_vishon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Admin Panel','Get Fresh Food','Admin Application','Full Admin Panel Devolopment.','Abdul Halim Reiaz Email: reiazbubt@gmail.com; Phone: +880-1768-09-10-74.','Abdul Halim Reiaz web Devoloper(reiazbubt@gmail.com).','laravel, php, html5, css3,java,wordpress.','Mirpur-14,Dhaka-1206','Dhaka','Bangladesh','1230','01768091074','reiazbubt@gmail.com','/public/img/settings/20180520071745_logo.png',NULL,'2018-05-20 07:17:45');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_contact_unique` (`contact`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Abdul Halim ','Reiaz','ahreiaz','reiazbubt@gmail.com','$2y$10$GTcIi6fcty419tQw5GHMPe7iNaBYMd43DYqqXwyI44zPPjSBXpT4W','1','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004996','1','RvDP8MvnF3YbT0in6MZ18XxBmShOZH0DM5yzMA1snGt4FOmlt2uPVk3AUVY5',NULL,NULL),(2,'Super','Admin','superadmin','superadmin@app.com','$2y$10$GTcIi6fcty419tQw5GHMPe7iNaBYMd43DYqqXwyI44zPPjSBXpT4W','2','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004997','1',NULL,NULL,NULL),(3,' ','Admin','admin','admin@app.com','$2y$10$ZKRnubiBha1Y0hP/92TnfeUr.7jp5vDGyTL0MDtBozlSgQJ5AYbg.','3','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004998','1','4kCMxS38WtRFo9vj83jI5CKFpRuyOS5hkr4nIKcde3EIaMUQWPM01CINMB7J',NULL,NULL),(4,' ','User','user','user@app.com','$2y$10$Luas1FZWGm8ZCnrpCfXR3Onhq1abekNNaBtzen02oq1J0DS3IPHSK','3','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004999','1',NULL,NULL,NULL);
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

-- Dump completed on 2018-05-20  7:50:11
