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
INSERT INTO `admins` VALUES (1,'admin','','d033e22ae348aeb5660fc2140aec35850c4da997','contact@compose.com');
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
  `flag_home` int(1) NOT NULL DEFAULT 0 COMMENT '1=Display Homepage',
  `content_short` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (23,1,8,'Display section sevent','display-section-sevent','<p><img src=\"/assets/upload/image/1385096_445510758888115_1423375145_n2.jpg\" alt=\"\" width=\"50%\" /></p>','','','2021-07-22 23:33:59','publish','team',0,''),(24,1,3,'Display section two','section-two','<form class=\"search-domain-form-content\" action=\"https://members.nusa.id/cart.php?a=add&amp;domain=register\" method=\"GET\" target=\"_blank\"><input name=\"query\" type=\"text\" placeholder=\"Temukan Domain Impian Anda Sekarang ...\" /> <input name=\"domain\" type=\"hidden\" value=\"register\" /> <input name=\"a\" type=\"hidden\" value=\"add\" /> <button class=\"bold btn-red\" type=\"submit\">Cari</button></form>\r\n<div class=\"packages\">\r\n<div class=\"packages-item\">\r\n<p><strong>.com</strong> IDR 130K</p>\r\n</div>\r\n<div class=\"packages-item sm-hide\">\r\n<p><strong>.net</strong> IDR 200K</p>\r\n</div>\r\n<div class=\"packages-item\">\r\n<p><strong>.id</strong> IDR 199K</p>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','section two',0,''),(25,1,5,'Display section four','display-section-four','<div class=\"trust col-9 center py4 px2\">\r\n<h1><strong>Dipercaya Lebih Dari 6000+</strong></h1>\r\n<h2 class=\"pb2\">Bisnis &amp; Personal</h2>\r\n<p>Kami percaya bahwa kesuksesan kami adalah dapat memberikan value kepada pelanggan, sehingga kami dan pelanggan dapat tumbuh bersama - sama.</p>\r\n</div>\r\n<div class=\"info col-4\">\r\n<div class=\"py4 pl4\">\r\n<div class=\"info-item mb2\" style=\"width: 110%;\"><img class=\"i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout\" src=\"/assets/upload/image/favoritewhite.png\" alt=\"\" width=\"35\" height=\"35\" />\r\n<p><strong>Reviews</strong><a href=\"https://g.page/nusaidcloud\" target=\"_blank\">Rating : 4.8, from 32 reviews</a></p>\r\n</div>\r\n<div class=\"info-item mb2\" style=\"width: 110%;\"><img class=\"i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout\" src=\"/assets/upload/image/customer-service-1.png\" alt=\"\" width=\"35\" height=\"35\" />\r\n<p><strong>Sales / Support</strong><a href=\"https://wa.me/628163154321?text=Hi%20nusa.id%20cloud\" target=\"_blank\" rel=\"noopener\">Chat</a> - <a href=\"tel:+622150200360\">Phone</a> - <a href=\"mailto:cs@nusa.id\">Email</a></p>\r\n</div>\r\n<div class=\"info-item\" style=\"width: 110%;\"><img class=\"i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout\" src=\"/assets/upload/image/onlinepaymentwhite.png\" alt=\"\" width=\"35\" height=\"35\" />\r\n<p><strong>Online Payment</strong><a href=\"https://payment.nusa.id\" target=\"_blank\">Bayar, Langsung Aktif*</a></p>\r\n</div>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','section four',0,''),(26,1,7,'Display section six','display-section-six','<h1 class=\"center\">Beberapa Pelanggan Kami testing</h1>\r\n<p>&nbsp;</p>\r\n<p class=\"center\">Lebih Dari 6.000 Pelanggan Aktif Menggunakan Layanan Kami</p>','','','2021-07-22 23:33:59','publish','section six',0,''),(27,1,10,'Testimoni Departemen Agama DKI','testimoni-departemen-agama-dki','<p>Ini testing dari testimoni customer loren ipsum loren ipsumloren ipsumloren ipsumloren ipsum loren ipsumloren ipsum loren ipsum loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;</p>','Screenshot_2021-07-17_09-38-03.png','','2021-07-22 23:33:59','publish','testimoni',1,''),(28,1,10,'Agus, IT Manager, PT Nusa Kirana','agus-it-manager-pt-nusa-kirana','<p>loren ipsum loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;loren ipsum&nbsp;</p>','Screenshot_2021-07-14_22-43-42.png','','2021-07-22 23:33:59','publish','testimoni agus',1,''),(29,1,11,'widget company profile','widget-company-profile','<div class=\"widget\">\r\n<div class=\"widget-title bold\">Company Profile</div>\r\n<div class=\"widget-content\">\r\n<ul class=\"list-reset\">\r\n<li><a href=\"https://optimuspro.co.id/about\">About Optimus Teknologi Pro</a></li>\r\n<li><a href=\"https://optimuspro.co.id/careers\">Careers</a></li>\r\n</ul>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','company profile',0,''),(30,1,12,'widget pse kominfo','widget-pse-kominfo','<div class=\"widget\">\r\n<div class=\"widget-title bold\">PSE KOMINFO</div>\r\n<div class=\"widget-content\"><a href=\"https://pse.kominfo.go.id/tdpse-detail/1446\" target=\"_blank\"><img src=\"/assets/front/default/webp/kominfo.webp\" alt=\"\" width=\"170\" height=\"170\" /></a></div>\r\n</div>','','','2021-07-22 23:33:59','publish','pse kominfo',0,''),(31,1,13,'widget company location','widget-company-location','<div class=\"widget\">\r\n<div class=\"widget-title bold\">All Locations</div>\r\n<div class=\"widget-content\">\r\n<ul class=\"list-reset\">\r\n<li>\r\n<p><strong>Medan</strong><br /> Jalan H. Misbah <br /> Komplek Multatuli Indah Blok D1 Medan 20151 Indonesia<br />Phone: <a href=\"tel:+62614558100\">+62 61 4558 100</a></p>\r\n</li>\r\n<li>\r\n<p><strong>Jakarta</strong><br /> Wework Revenue Tower 23rd Floor. Jl. Jend. Sudirman Kav. 52-53 Jakarta Selatan 12190 Indonesia<br />Phone : <a href=\"tel:+622150200360\">+62 21 502 00360</a></p>\r\n</li>\r\n<li>\r\n<p><strong>Surabaya</strong><br /> Rukan Graha Asri No. 12AB Jl. Raya Ngagel 179 - 183 Surabaya 60246 Indonesia<br />Phone: <a href=\"tel:+62315473838\">+62 31 5473838</a></p>\r\n</li>\r\n<li>\r\n<p><strong>Bali</strong><br /> Instyle Kuta Hotel Lt. 3 Jl. Raya Dewi Sri I No. 16, Legian Kuta, Badung Regency, Bali 80361 - Indonesia<br />Phone: <a href=\"tel:+623619342354\">+62 361 9342354</a></p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','company location',0,''),(32,1,14,'widget company services','widget-company-services','<div class=\"widget\">\r\n<div class=\"widget-title bold\">Services</div>\r\n<div class=\"widget-content\">\r\n<ul class=\"list-reset\">\r\n<li><a href=\"https://optimuspro.co.id/google-cloud\">Google Cloud Platform (GCP)</a></li>\r\n<li><a href=\"https://optimuspro.co.id/google-workspace\">Google Workspace</a></li>\r\n<li><a href=\"https://optimuspro.co.id/email\">Nusa Cloud Mail Business</a></li>\r\n<li><a href=\"https://optimuspro.co.id/domain\">Pendaftaran Domain Murah</a></li>\r\n<li><a href=\"https://optimuspro.co.id/dedicated-server\">Dedicated Server Indonesia</a></li>\r\n<li><a href=\"https://optimuspro.co.id/cloud\">Cloud Server Indonesia</a></li>\r\n<li><a href=\"https://optimuspro.co.id/cloud-singapore\">Cloud Server Singapore</a></li>\r\n</ul>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','company services',0,''),(33,1,15,'widget our partner','widget-our-partner','<div class=\"widget\">\r\n<div class=\"widget-title bold\">Our Partners</div>\r\n<div class=\"widget-content\">\r\n<ul class=\"list-reset\">\r\n<li><a href=\"https://cloud.withgoogle.com/partners/detail/?id=pt-media-antar-nusa&amp;hl=en\" target=\"_blank\" rel=\"noopener\"> <img class=\"i-amphtml-fill-content i-amphtml-replaced-content\" style=\"width: 170px; height: 83px; --loader-delay-offset: 370ms !important;\" src=\"/assets/front/default/img/GCPA_Badge_Master.png\" alt=\"\" /> </a></li>\r\n<li><a href=\"https://www.digitalocean.com\" target=\"_blank\"> <img class=\"i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout\" style=\"width: 170px; height: 83px; --loader-delay-offset: 370ms !important;\" src=\"/assets/front/default/img/digitalocean.png\" alt=\"\" /> </a></li>\r\n</ul>\r\n</div>\r\n</div>','','','2021-07-22 23:33:59','publish','our partner',0,''),(34,1,1,'Cloud Singapore','cloud-singapore','<section class=\"section-two\">\r\n<div class=\"container\">\r\n<div class=\"flex flex-wrap\">\r\n<div class=\"col-12 sm-col-6 md-col-6 lg-col-6  pl2\">\r\n<h3 class=\"bold mb3\">Keunggulan VPS Server Singapore</h3>\r\n<p class=\"pr3\">NUSA.ID CLOUD Merupakan DigitalOcean Partner Indonesia. Dengan Infrastruktur Cloud Dari DigitalOcean Anda Hanya Perlu Fokus Untuk Maintenance Aplikasi Dan Cloud Server Dapat Di Upgrade Sesuai Dengan Kebutuhan Anda.</p>\r\n</div>\r\n<div class=\"col-12 sm-col-3 md-col-3 lg-col-3 mt4\">\r\n<div class=\"cs-item\">\r\n<p class=\"bold\">Aktivasi Cepat</p>\r\n<p>Bayar dengan Rupiah tanpa Kartu Kredit</p>\r\n</div>\r\n<div class=\"cs-item\">\r\n<p class=\"bold\">SSD Storage</p>\r\n<p>Cloud server lebih cepat dengan SSD storage</p>\r\n</div>\r\n</div>\r\n<div class=\"col-12 sm-col-3 md-col-3 lg-col-3 mt4\">\r\n<div class=\"cs-item\">\r\n<p class=\"bold\">Secure</p>\r\n<p>Infrastruktur secured by DigitalOcean</p>\r\n</div>\r\n<div class=\"cs-item\">\r\n<p class=\"bold\">Root Akses</p>\r\n<p>Kontrol penuh dengan hak akses root</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<p>{{section-testimoni}}</p>','vpssingapore.jpg','','2021-07-22 23:45:34','publish','cloud server singapore',0,'<div class=\"col-12 md-col-6 sm-col-12\">\r\n<h1>Cloud Server Singapore</h1>\r\n<p class=\"pt1 pb2\">Cloud VPS Server Singapore, Cloud VPS MikroTik CHR, DigitalOcean Droplets, DigitalOcean Partner Indonesia, Bayar Dengan Rupiah, Tanpa Kartu Kredit, Aktivasi Cepat Hitungan Menit, SSD Storage Dapat Di Upgrade Sesuai Dengan Kebutuhan. Tersedia Beragam Pilihan Sistem Operasi Linux Dan Beragam Pilihan Lokasi Data Center Selain Singapura.</p>\r\n<div class=\"btn-red\">Ujicoba Gratis!</div>\r\n</div>');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,'News','1-news',1,'News Update','2021-07-17 10:03:47'),(2,1,'Content','2-content',2,'Content Global','2021-07-17 10:06:23'),(3,1,'Section-Two','3-section-two',3,'Content Two','2021-07-17 10:07:10'),(4,1,'Section-Three','4-section-three',4,'Content Three','2021-07-17 10:07:17'),(5,1,'Section-Four','5-section-four',5,'Content Four','2021-07-17 10:07:24'),(6,1,'Section-Five','6-section-five',6,'Content Five','2021-07-17 10:08:17'),(7,1,'Section-Six','7-section-six',7,'Content Six','2021-07-17 10:07:33'),(8,1,'Section-Seven','8-section-seven',8,'Content Seven','2021-07-17 10:08:18'),(9,1,'Section-Eight','9-section-eight',9,'Content eight','2021-07-17 10:08:20'),(10,1,'Testimoni','testimoni',10,'Client testimoni','2021-07-22 07:41:40'),(11,1,'widget-company-profile','14-widget-company-profile',11,'Footer widget display company profile','2021-07-22 22:34:09'),(12,1,'widget-pse-kominfo','widget-pse-kominfo',12,'Footer widget display komifo','2021-07-22 22:02:39'),(13,1,'widget-company-location','widget-company-location',13,'Footer widget display company location','2021-07-22 22:04:15'),(14,1,'widget-company-services','widget-company-services',14,'Footer widget company services','2021-07-22 22:28:30'),(15,1,'widget-our-partner','widget-our-partner',15,'footer widget display our partner','2021-07-22 22:30:29');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (4,1,'Hotel Adi Mulia','4-hotel-adi-mulia','adimulia.jpg','#','2021-07-19 16:44:54','publish'),(5,1,'Aloka','aloka','aloka.png','#','2021-07-19 16:45:51','publish'),(6,1,'Edisi Medan','edisi-medan','edisimedan.png','#','2021-07-19 16:46:08','publish');
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
INSERT INTO `config` VALUES (1,'OPTIMUS TEKNOLOGI PRO','optimustekpro@gmail.com','Data Center, Collocation','https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.780606179473!2d106.81194969999999!3d-6.6226642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c118e7fe877e90a!2sLippo+Plaza+Ekalokasari+Bogor!5e0!3m2!1sid!2sid!4v1482767277891','Logo-Optimus-227x65.webp','apple-touch-icon.png','<div class=\"col-12 md-col-12 sm-col-12\">\r\n<h1><strong>Droplets By Optimus Teknologi Pro<br /></strong></h1>\r\n<ul>\r\n<li>DigitalOcean Partner Di Indonesia</li>\r\n<li>Garansi Uptime 99.99%</li>\r\n<li>Beragam Pilihan Data Center</li>\r\n<li>Virtualisasi KVM</li>\r\n<li>Gratis Uji Coba</li>\r\n<li>Bayar Dengan Rupiah, Tanpa Kartu Kredit</li>\r\n</ul>\r\n<div class=\"price pb2\">\r\n<h3><strong>Mulai Dari Rp. 99K/Bulan</strong>*</h3>\r\n</div>\r\n<div class=\"btn-red\">Selengkapnya</div>\r\n<div class=\"note pt2\">*Syarat dan ketentuan berlaku</div>\r\n</div>','Jl. Casablanca Raya Kav. 88, Tower A, Lantai 10E Kota Kasablanka','Jakarta','12870',' 021-29631601, 0812-8938-4934','Partner terpercaya anda, mudah aman cepat, rasakan semuanya bersama Optimus ','021-29631601','https://www.facebook.com/indrkmna/','','https://www.instagram.com/indra.97/','','','default','rgba(0,0,0,1)','rgba(23,23,23,0.95)','rgba(1,152,208,1)');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (15,1,'Homepage background','homepage-background','redserver-1.jpg','','background','','2021-07-19 16:17:55','publish');
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
  `seq` int(11) DEFAULT NULL,
  `css` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Hosting','hosting',NULL,NULL,0,'publish','2021-07-12 04:17:37',1,NULL),(2,'Web Hosting','web-hosting','cloud-computing.png',NULL,1,'publish','2021-07-12 04:17:37',1,NULL),(3,'Optimus Cloud Mail','cloud-mail','emailhosting.png',NULL,1,'publish','2021-07-12 04:17:37',2,NULL),(4,'Layanan Lain','layanan-lain',NULL,NULL,1,'publish','2021-07-12 04:17:37',3,'related'),(5,'Microsoft 365','microsoft-365',NULL,NULL,4,'publish','2021-07-12 04:17:37',1,'related-menu'),(6,'Sertifikat SSL','ssl',NULL,NULL,4,'publish','2021-07-12 04:17:37',2,'related-menu'),(7,'Pendaftaran Domain','domain',NULL,NULL,4,'publish','2021-07-12 04:17:37',3,'related-menu'),(8,'Server','server',NULL,NULL,0,'publish','2021-07-12 04:17:37',2,NULL),(9,'Cloud Server Indonesia','server-id','servecloudr.png',NULL,8,'publish','2021-07-12 04:17:37',1,NULL),(10,'Dedicated Server','server-dc','dedicatedserver.png',NULL,8,'publish','2021-07-12 04:17:37',2,NULL),(11,'Collocation Server','server-co','coloserver.png',NULL,8,'publish','2021-07-12 04:17:37',3,NULL),(12,'Domain','domain',NULL,NULL,0,'publish','2021-07-12 04:17:37',3,NULL),(13,'Pendaftaran Domain','daftar-dom',NULL,NULL,12,'publish','2021-07-12 04:17:37',1,NULL),(14,'Transfer Domain','tranf-dom',NULL,NULL,12,'publish','2021-07-12 04:17:37',2,NULL),(15,'Layanan Lain','layanan-lain',NULL,NULL,12,'publish','2021-07-12 04:17:37',3,'related'),(16,'Domain','layanan-lain',NULL,NULL,15,'publish','2021-07-12 04:17:37',4,'related-menu'),(17,'Menu','menu',NULL,NULL,0,'publish','2021-07-12 04:17:37',4,'last-menu');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `partner_name` varchar(225) NOT NULL,
  `slug_partner` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `website` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`partner_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,1,'Cloud Linux','cloud-linux','cloudlinuxwhite1.png','#','2021-07-22 00:16:06','publish','section-eight'),(2,1,'CPanel','cpanel','cpanelwhite.png','#','2021-07-22 00:16:09','publish','section-eight'),(3,1,'Open Stack','3-open-stack','OpenStack-Logo-Horizontalwhite1.png','#','2021-07-22 00:16:09','publish','section-eight'),(4,1,'Digital Ocean','5-digital-ocean','digitalocean.png','#','2021-07-22 00:55:26','publish','footer'),(5,1,'Google Cloud','5-google-cloud','GCPA_Badge_Master.png','#','2021-07-22 00:55:18','publish','footer');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
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
  `product_price_detail` varchar(100) DEFAULT NULL,
  `product_price_detail2` varchar(100) DEFAULT NULL,
  `url_link` varchar(255) DEFAULT NULL,
  `flag_home` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,1,'Google Workspace','5-google-workspace','googleworkspace.png','<p>Sebelumnya G Suite, Tools Kolaborasi, Gmail Bisnis, Garansi Uptime 99.99%, Digunakan Lebih Dari 6 Juta Bisnis</p>','2021-07-17 13:06:32','publish','Mulai Dari','59K/Bulan','',1),(4,1,'Cloud <strong>Server</strong>','5-cloud-server','servecloudr.png','<p>Cloud Berbasis OpenStack, IP Publik, Root Akses, Penyimpanan SSD. Datacenter Jakarta, Medan, Bali*</p>','2021-07-17 13:05:43','publish','Coba Dulu','Gratis <span>*<span>','',1),(5,1,'Dedicated <strong>Server</strong>','5-dedicated-server','dedicatedserver.png','<p>Datacenter Indonesia (Medan, Jakarta, Bali), Intel Xeon Processor, 3 Upstream Network, Dukungan Teknis 24/7,</p>','2021-07-17 13:08:52','publish','Mulai Dari','IDR 1.5jt/Bln','',1),(6,1,'test','6-test','absensi.png','<p>test</p>','2021-07-18 09:52:50','draft','harga 1','Gratis','',1);
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

-- Dump completed on 2021-07-23  7:43:04
