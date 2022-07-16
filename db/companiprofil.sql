-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: antoweb
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `slug_admin` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin','','d033e22ae348aeb5660fc2140aec35850c4da997','contact@optimuspro.co.id');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_blog` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `bs_class` varchar(225) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (2,1,2,'test111','22-test111','<p>testing</p>','property12.jpg','','2018-11-12 07:19:48','publish','testing'),(3,1,2,'cara membuat anak','cara-membuat-anak','<p>awdawd</p>','8645-c-programming-1366x768-computer-wallpaper.jpg','','2017-02-16 08:26:28','publish','Cara membuat anak'),(5,1,2,'sfsefsef1','5-sfsefsef1','<p>dsdfsdf</p>','1385096_445510758888115_1423375145_n.jpg','','2017-02-16 08:45:03','draft','ssdvsfs'),(6,1,2,'Apakah ahok akan menang?','apakah-ahok-akan-menang','<p>Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum IdoorLorem Ipsum IdoorLorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor&nbsp;Lorem Ipsum Idoor</p>','3D-Scenery-HD-Macbook-Wallpaper4.jpg','','2017-02-17 09:20:08','publish','ahok kalah'),(7,1,3,'testing','testing','<p>test</p>','114845.jpg','','2017-02-23 05:47:56','publish','test'),(8,1,3,'adawda','adawda','<p>awdawd</p>','114846.jpg','','2017-02-23 06:31:47','publish','awdawd'),(9,1,2,'dawdawd','dawdawd','<p>awdawd</p>','29006-art_alphacoders_com8.jpg','','2017-02-24 07:17:20','publish','awdaw'),(10,1,2,'awdawd','awdawd','<p>awdawd</p>','29006-art_alphacoders_com9.jpg','','2017-02-24 07:21:10','publish','awdawd'),(11,1,4,'bisnis1','11-bisnis1','<p>Testing bisnis PT. Nusa Kirana, RE ke satu</p>','','fa fa-university','2018-11-10 08:45:29','publish','Nusa Kirana Bisnis'),(12,1,4,'bisnis2','bisnis2','<p>Testing bisnis PT. Nusa Kirana, RE ke dua</p>','','fa fa-diamond','2018-11-10 08:46:10','publish','Nusa Kirana Bisnis'),(13,1,4,'bisnis3','bisnis3','<p>Bisnis PT. Nusa Kirana, RE ke tiga</p>','','fa fa-road','2018-11-10 08:47:02','publish','Nusa Kirana Bisnis'),(14,1,5,'Tes','22-tes','<p style=\"text-align: center;\"><strong>tesssssssssssssss</strong></p>\r\n<p style=\"text-align: left;\">Test</p>','property1.jpg','','2018-11-19 05:58:55','publish','Nusa Kirana Subsdiaries'),(15,1,5,'Rizal','rizal','<p>Rizal TOHA</p>','property2.jpg','','2018-11-12 06:21:27','publish','Nusa Kirana Subsdiaries'),(16,1,5,'Toha','toha','<p>NUSA KIRANA testing</p>','property3.jpg','','2018-11-12 06:25:06','publish','Nusa Kirana Subsdiaries'),(17,1,6,'Rizal','19-rizal','<p>Rizal Toha</p>','property11.jpg','','2018-11-12 06:40:58','publish','Nusa Kirana Project'),(18,1,6,'Lukman','19-lukman','<p>Bang LUKMAN BARON</p>','property21.jpg','','2018-11-12 06:41:35','publish','Nusa Kirana Project'),(19,1,6,'Dicky','19-dicky','<p>Bang Dicky Zaelani</p>','property31.jpg','','2018-11-12 06:42:00','publish','Nusa Kirana Project'),(20,1,6,'Zainal','20-zainal','<p>Pak Zainal Abidin</p>','property4.jpg','','2018-11-12 06:43:39','publish','Nusa Kirana Project'),(21,1,6,'Agus','agus','<p>Pak AGUS SUPRIONO</p>','property5.jpg','','2018-11-12 06:44:44','publish','Nusa Kirana Project'),(22,1,6,'Anonymous','anonymous','<p>HACKER atau ANONYMOUS<em><strong>!!!</strong></em></p>','property6.jpg','','2018-11-12 06:45:12','publish','Nusa Kirana Project'),(23,1,7,'Display section sevent','display-section-sevent','<div class=\"need\">\r\n    <h1 class=\"red\">24/7 Support Team</h1>\r\n    <div class=\"btn-red\" style=\"background-color: #dcda3b;\">\r\n        <a href=\"https://members.nusa.id/submitticket.php?step=2&amp;deptid=1\" target=\"_blank\">Hubungi Kami</a>\r\n    </div>\r\n    <div class=\"certificate\">\r\n        <a href=\"https://www.credential.net/32e887a3-f3f6-4db3-be56-16a072b0cbd2\" target=\"_blank\">\r\n            <img class=\"i-amphtml-fill-content i-amphtml-replaced-content\" src=\"webp/associatecloudengineer1.webp\" srcset=\"http://localhost/anto/assets/front/default/webp/associatecloudengineer1@2x.webp 2x, http://localhost/anto/assets/front/default/webp/associatecloudengineer1@3x.webp 3x\" alt=\"associatecloudengineer1\" />\r\n        </a> \r\n        <a href=\"https://mikrotik.com/training/certificates/b184455cc55e2d4e1dc2\" target=\"_blank\">\r\n            <img class=\"i-amphtml-fill-content i-amphtml-replaced-content\" src=\"webp/mtcna1.webp\" srcset=\"http://localhost/anto/assets/front/default/webp/mtcna1@2x.webp 2x, http://localhost/anto/assets/front/default/webp/mtcna1@3x.webp 3x\" alt=\"mtcna1\" />\r\n        </a> \r\n        <a href=\"https://www.coursera.org/account/accomplishments/specialization/certificate/VHLH6FYF653X\" target=\"_blank\">\r\n            <img class=\"i-amphtml-fill-content i-amphtml-replaced-content\" src=\"webp/logogooleworkspace1.webp\" srcset=\"http://localhost/anto/assets/front/default/webp/logogooleworkspace1@2x.webp 2x, http://localhost/anto/assets/front/default/webp/logogooleworkspace1@3x.webp 3x\" alt=\"logogooleworkspace1\" />\r\n        </a>\r\n    </div>\r\n</div>\r\n<div class=\"team\">\r\n    <img class=\"i-amphtml-fill-content i-amphtml-replaced-content\" src=\"webp/team.webp\" srcset=\"http://localhost/anto/assets/front/default/img/team@2x.png 2x, http://localhost/anto/assets/front/default/img/team@3x.png 3x\" alt=\"team\" />\r\n</div>\r\n<div class=\"clearfix\">&nbsp;</div>','','','2021-07-11 01:57:03','publish','team');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `slug_category` varchar(225) NOT NULL,
  `order_category` int(11) NOT NULL,
  `category_description` text NOT NULL,
  `date_category` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,1,'News','2-news',1,'News Update','2017-02-15 14:31:39'),(3,1,'Politik','politik',2,'Seputar Politik','2017-02-23 05:47:26'),(4,1,'Our Business','our-business',3,'Content for Our Business Menus','2018-11-10 07:24:44'),(5,1,'Subsidiaries','subsidiaries',4,'Content for Subsidiaries Menus','2018-11-12 04:04:38'),(6,1,'Project','project',5,'Content for Project Menus','2018-11-12 06:38:06'),(7,1,'Section-seven','section-seven',7,'','2021-07-11 00:20:20');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `client_name` varchar(225) NOT NULL,
  `slug_client` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (2,1,'Hutan','hutan','29006-art_alphacoders_com6.jpg','hutan.com','2017-02-16 09:59:09','publish'),(3,1,'C Programming','c-programming','8645-c-programming-1366x768-computer-wallpaper1.jpg','http://indrarukmana.com','2017-02-23 10:15:17','publish');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,0,'Indra','indrkmna@gmail.com','http://indrarukmana.com','testing','2017-02-20 03:54:40'),(2,0,'awda','wdqdq@gmail.com','http://indrarukmana.com','qwdq','2017-02-20 03:55:42'),(3,2,'rats','rats123@gmail.com','http://indrarukmana.com','rats','2017-02-20 03:56:37'),(4,2,'xaxsa','scascasc@gmail.com','http://indrarukmana.com','ascasc','2017-02-20 04:07:27'),(5,2,'adwd','awda@gmail.com','http://indrarukmana.com','dawd','2017-02-20 04:20:42'),(6,3,'awd','apoyaja@gmail.com','http://indrarukmana.com','qwdqwd','2017-02-24 07:22:53');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `nameweb` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `keywords` text NOT NULL,
  `google_maps` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `icon` varchar(225) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `metatext` text NOT NULL,
  `fax` text NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `google_plus` varchar(225) NOT NULL,
  `pinterest` varchar(225) NOT NULL,
  `theme` varchar(225) NOT NULL,
  `color` varchar(100) NOT NULL,
  `color_2` varchar(100) NOT NULL,
  `color_3` varchar(100) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,'OPTIMUS TEKNOLOGI PRO','optimustekpro@gmail.com','Data Center, Collocation','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.780606179473!2d106.81194969999999!3d-6.6226642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c118e7fe877e90a!2sLippo+Plaza+Ekalokasari+Bogor!5e0!3m2!1sid!2sid!4v1482767277891','Logo-Optimus-227x65.webp','apple-touch-icon.png','<div class=\"row text-center\">\r\n<div class=\"col-md-4\" data-sr=\"enter top over 1s, wait 0.3s, move 24px, reset\">\r\n<h3>Responsive Design</h3>\r\n<div class=\"colored-line-small-center\">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n<div class=\"col-md-4 middle\" data-sr=\"enter bottom over 1s, wait 0.3s, move 24px, reset\">\r\n<h3>Creative Design</h3>\r\n<div class=\"colored-line-small-center\">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n<div class=\"col-md-4\" data-sr=\"enter top over 1s, wait 0.3s, move 24px, reset\">\r\n<h3>Mailchimp Ready</h3>\r\n<div class=\"colored-line-small-center\">&nbsp;</div>\r\n<p>Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</p>\r\n</div>\r\n</div>','Jl. Casablanca Raya Kav. 88, Tower A, Lantai 10E Kota Kasablanka','Jakarta','12870',' 021-29631601, 0812-8938-4934','Partner terpercaya anda, mudah aman cepat, rasakan semuanya bersama Optimus ','021-29631601','https://www.facebook.com/indrkmna/','','https://www.instagram.com/indra.97/','','','default','rgba(22,23,93,1)','rgba(11,8,70,0.95)','rgba(220,218,59,1)');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'indra','indrkmna@gmail.com','testign','testing','2017-02-24 02:56:55'),(3,'testing','testing@gmail.com','testing','testing','2017-02-24 03:00:30');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `downloads`
--

DROP TABLE IF EXISTS `downloads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `downloads` (
  `download_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `slug_download` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_description` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `downloads`
--

LOCK TABLES `downloads` WRITE;
/*!40000 ALTER TABLE `downloads` DISABLE KEYS */;
INSERT INTO `downloads` VALUES (3,1,'Template','3-template','153-P101.pdf','2017-02-16 13:19:05','asas','publish'),(4,1,'PDF 1','4-pdf-1','153-P09.pdf','2017-02-17 08:03:08','test','draft'),(5,1,'Matematika (Matrix)','matematika-matrix','153-P091.pdf','2017-03-06 12:29:22','Silahkan download materi ini untuk di pelajari','publish');
/*!40000 ALTER TABLE `downloads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gallery_name` varchar(225) NOT NULL,
  `slug_gallery` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `gallery_description` text NOT NULL,
  `position` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (8,1,'Hi Welcome to Dealer Hino Jabodetabek','14-hi-welcome-to-dealer-hino-jabodetabek','banner1.jpeg','Welcome to Dealer Hino Jabodetabek','slider','','2019-05-17 17:44:23','publish'),(9,1,'Hi Welcome to Dealer Hino Jabodetabek','14-hi-welcome-to-dealer-hino-jabodetabek','banner2.jpeg','Dealer Hino Jabodetabek','slider','','2019-05-17 17:44:51','publish'),(10,1,'Hi Welcome to Dealer Hino Jabodetabek','14-hi-welcome-to-dealer-hino-jabodetabek','banner3.jpeg','Dealer Hino Jabodetabek','slider','','2019-05-17 17:45:15','publish'),(12,1,'We Are Anon!!!','we-are-anon','1385096_445510758888115_1423375145_n2.jpg','Testing','profil','','2017-02-17 13:58:14','publish'),(13,1,'Hutan','14-hutan','29006-art_alphacoders_com7.jpg','hutan','harga','','2017-03-07 08:51:02','publish'),(14,1,'Adaw','adaw','361783.jpg','awdawd','footer','','2017-02-24 06:36:05','publish');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `menu_image` varchar(200) DEFAULT NULL,
  `menu_image_hover` varchar(200) DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dates` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Hosting','hosting',NULL,NULL,0,'publish','2021-07-12 04:17:37'),(2,'Web Hosting','web-hosting','cloud-computing.png',NULL,1,'publish','2021-07-12 04:17:37'),(3,'Optimus Cloud Mail','cloud-mail','emailhosting.png',NULL,1,'publish','2021-07-12 04:17:37'),(4,'Layanan Lain','layanan-lain',NULL,NULL,1,'publish','2021-07-12 04:17:37'),(5,'Microsoft 365','microsoft-365',NULL,NULL,4,'publish','2021-07-12 04:17:37'),(6,'Sertifikat SSL','ssl',NULL,NULL,4,'publish','2021-07-12 04:17:37'),(7,'Pendaftaran Domain','domain',NULL,NULL,4,'publish','2021-07-12 04:17:37'),(8,'Server','server',NULL,NULL,0,'publish','2021-07-12 04:17:37'),(9,'Cloud Server Indonesia','server-id','servecloudr.png',NULL,8,'publish','2021-07-12 04:17:37'),(10,'Dedicated Server','server-dc','dedicatedserver.png',NULL,8,'publish','2021-07-12 04:17:37'),(11,'Collocation Server','server-co','coloserver.png',NULL,8,'publish','2021-07-12 04:17:37'),(12,'Domain','domain',NULL,NULL,0,'publish','2021-07-12 04:17:37');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `price_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `headline` text NOT NULL,
  `description` text NOT NULL,
  `with_service` varchar(100) NOT NULL,
  `no_with_service` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price`
--

LOCK TABLES `price` WRITE;
/*!40000 ALTER TABLE `price` DISABLE KEYS */;
INSERT INTO `price` VALUES (4,1,'Industri Setup Awal','90.000/3 Bulan/ Unit','','','Free','90.000/3 Bulan/ Unit','publish','2017-03-07 00:50:38'),(5,1,'Industri Kecil','500.000/ Unit','','','Free','270.000/3 Bulan/ Unit','publish','2017-03-07 00:33:55'),(6,1,'Industri Menengah','750.000/ Unit','','','270.000/3 Bulan/ Unit','Call','publish','2017-03-07 00:34:29'),(7,1,'Industri Besar','Call','','','Call','Call','publish','2017-03-07 00:34:49'),(8,1,'Pemerintah','Call','','','Call','Call','publish','2017-03-07 00:35:01'),(9,0,'','','awdawd','','','','','2017-03-07 08:41:35');
/*!40000 ALTER TABLE `price` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `slug_product` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `product_description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,1,'Anonymous1','5-anonymous1','29006-art_alphacoders_com4.jpg','test','2017-02-24 07:00:28','publish'),(4,1,'tefesefs','tefesefs','361782.jpg','sefsef','2017-02-16 09:34:49','publish'),(5,1,'Product 1','product-1','3D-Scenery-HD-Macbook-Wallpaper5.jpg','Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 Product 1 ','2017-02-17 09:27:40','publish');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `themes` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(100) DEFAULT NULL,
  `theme_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`theme_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,'Default','default');
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_name` varchar(225) NOT NULL,
  `slug_type` varchar(225) NOT NULL,
  `order_type` int(11) NOT NULL,
  `type_description` text NOT NULL,
  `date_type` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (4,1,'testing','',1,'testing type','2017-02-16 13:56:38'),(5,1,'Odol','odol',2,'odol','2017-02-16 13:57:21');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'antoweb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-13  8:40:13
