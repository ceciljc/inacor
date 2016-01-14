-- MySQL dump 10.15  Distrib 10.0.15-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: inacorner
-- ------------------------------------------------------
-- Server version	10.0.15-MariaDB-log

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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'2014-10-29 00:00:00','123','2','<p>\n	1</p>','<p>\n	1</p>','about_2014-10-29 _coba2.png',2,8,0,222,222,'en',55);
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `nama_album` text COLLATE latin1_general_ci,
  `ket` blob,
  `status_display` tinyint(1) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,38,'cuncun','12321',1,'2014-10-28'),(2,38,'andre','123',1,'2014-10-30');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attraction`
--

DROP TABLE IF EXISTS `attraction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attraction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `waktu_2` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attraction`
--

LOCK TABLES `attraction` WRITE;
/*!40000 ALTER TABLE `attraction` DISABLE KEYS */;
INSERT INTO `attraction` VALUES (1,'2014-10-18 00:00:00','0000-00-00 00:00:00','1w1c','12','<p>\n	2</p>','<p>\n	1</p>','attraction_2014-10-18 _banner_paparnas.png',2,0,0,0,0,'en',55),(2,'2014-09-29 14:00:39','0000-00-00 00:00:00','Raja ampat','-','<p>\n	2</p>','<p>\n	1</p>','attraction_2014-09-29 _raja-ampat.jpg',1,0,0,0,0,'en',38),(3,'2014-10-14 00:00:00','0000-00-00 00:00:00','Rinjani','','<p>\n	12</p>','<p>\n	12</p>','attraction_2014-10-14 _rinjani-sunrise.jpg',1,0,1,0,0,'en',38),(4,'2014-09-29 10:00:25','2014-09-19 10:00:27','asdsad','','<p>\n	1231</p>','<p>\n	123123</p>','',2,0,0,0,0,'en',38);
/*!40000 ALTER TABLE `attraction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `culture`
--

DROP TABLE IF EXISTS `culture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `culture`
--

LOCK TABLES `culture` WRITE;
/*!40000 ALTER TABLE `culture` DISABLE KEYS */;
INSERT INTO `culture` VALUES (1,'2014-10-31 00:00:00','culture1222','132','<p>\n	1</p>','<p>\n	1</p>','culture_2014-10-31 _coba2.png',3,0,0,0,0,'en',55);
/*!40000 ALTER TABLE `culture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_kabupaten`
--

DROP TABLE IF EXISTS `data_kabupaten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_kabupaten` (
  `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(11) DEFAULT NULL,
  `nama_kabupaten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=MyISAM AUTO_INCREMENT=499 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_kabupaten`
--

LOCK TABLES `data_kabupaten` WRITE;
/*!40000 ALTER TABLE `data_kabupaten` DISABLE KEYS */;
INSERT INTO `data_kabupaten` VALUES (1,1,'Kabupaten Aceh Barat'),(2,1,'Kabupaten Aceh Barat Daya'),(3,1,'Kabupaten Aceh Besar'),(4,1,'Kabupaten Aceh Jaya'),(5,1,'Kabupaten Aceh Selatan'),(6,1,'Kabupaten Aceh Singkil'),(7,1,'Kabupaten Aceh Tamiang'),(8,1,'Kabupaten Aceh Tengah'),(9,1,'Kabupaten Aceh Tenggara'),(10,1,'Kabupaten Aceh Timur'),(11,1,'Kabupaten Aceh Utara'),(12,1,'Kabupaten Bener Meriah'),(13,1,'Kabupaten Bireuen'),(14,1,'Kabupaten Gayo Lues'),(15,1,'Kabupaten Nagan Raya'),(16,1,'Kabupaten Pidie'),(17,1,'Kabupaten Pidie Jaya'),(18,1,'Kabupaten Simeulue'),(19,1,'Kota Banda Aceh'),(20,1,'Kota Langsa'),(21,1,'Kota Lhokseumawe'),(22,1,'Kota Sabang'),(23,1,'Kota Subulussalam'),(24,2,'Kabupaten Asahan'),(25,2,'Kabupaten Batu Bara'),(26,2,'Kabupaten Dairi'),(27,2,'Kabupaten Deli Serdang'),(28,2,'Kabupaten Humbang Hasundutan'),(29,2,'Kabupaten Karo'),(30,2,'Kabupaten Labuhanbatu'),(31,2,'Kabupaten Labuhanbatu Selatan'),(32,2,'Kabupaten Labuhanbatu Utara'),(33,2,'Kabupaten Langkat'),(34,2,'Kabupaten Mandailing Natal'),(35,2,'Kabupaten Nias'),(36,2,'Kabupaten Nias Barat'),(37,2,'Kabupaten Nias Selatan'),(38,2,'Kabupaten Nias Utara'),(39,2,'Kabupaten Padang Lawas'),(40,2,'Kabupaten Padang Lawas Utara'),(41,2,'Kabupaten Pakpak Bharat'),(42,2,'Kabupaten Samosir'),(43,2,'Kabupaten Serdang Bedagai'),(44,2,'Kabupaten Simalungun'),(45,2,'Kabupaten Tapanuli Selatan'),(46,2,'Kabupaten Tapanuli Tengah'),(47,2,'Kabupaten Tapanuli Utara'),(48,2,'Kabupaten Toba Samosir'),(49,2,'Kota Binjai'),(50,2,'Kota Gunung Sitoli'),(51,2,'Kota Medan'),(52,2,'Kota Padang Sidempuan'),(53,2,'Kota Pematangsiantar'),(54,2,'Kota Sibolga'),(55,2,'Kota Tanjung Balai'),(56,2,'Kota Tebing Tinggi'),(57,3,'Kabupaten Bengkulu Selatan'),(58,3,'Kabupaten Bengkulu Tengah'),(59,3,'Kabupaten Bengkulu Utara'),(60,3,'Kabupaten Benteng'),(61,3,'Kabupaten Kaur'),(62,3,'Kabupaten Kepahiang'),(63,3,'Kabupaten Lebong'),(64,3,'Kabupaten Mukomuko'),(65,3,'Kabupaten Rejang Lebong'),(66,3,'Kabupaten Seluma'),(67,3,'Kota Bengkulu'),(68,4,'Kabupaten Batang Hari'),(69,4,'Kabupaten Bungo'),(70,4,'Kabupaten Kerinci'),(71,4,'Kabupaten Merangin'),(72,4,'Kabupaten Muaro Jambi'),(73,4,'Kabupaten Sarolangun'),(74,4,'Kabupaten Tanjung Jabung Barat'),(75,4,'Kabupaten Tanjung Jabung Timur'),(76,4,'Kabupaten Tebo'),(77,4,'Kota Jambi'),(78,4,'Kota Sungai Penuh'),(79,5,'Kabupaten Bengkalis'),(80,5,'Kabupaten Indragiri Hilir'),(81,5,'Kabupaten Indragiri Hulu'),(82,5,'Kabupaten Kampar'),(83,5,'Kabupaten Kuantan Singingi'),(84,5,'Kabupaten Pelalawan'),(85,5,'Kabupaten Rokan Hilir'),(86,5,'Kabupaten Rokan Hulu'),(87,5,'Kabupaten Siak'),(88,5,'Kota Pekanbaru'),(89,5,'Kota Dumai'),(90,5,'Kabupaten Kepulauan Meranti'),(91,6,'Kabupaten Agam'),(92,6,'Kabupaten Dharmasraya'),(93,6,'Kabupaten Kepulauan Mentawai'),(94,6,'Kabupaten Lima Puluh Kota'),(95,6,'Kabupaten Padang Pariaman'),(96,6,'Kabupaten Pasaman'),(97,6,'Kabupaten Pasaman Barat'),(98,6,'Kabupaten Pesisir Selatan'),(99,6,'Kabupaten Sijunjung'),(100,6,'Kabupaten Solok'),(101,6,'Kabupaten Solok Selatan'),(102,6,'Kabupaten Tanah Datar'),(103,6,'Kota Bukittinggi'),(104,6,'Kota Padang'),(105,6,'Kota Padangpanjang'),(106,6,'Kota Pariaman'),(107,6,'Kota Payakumbuh'),(108,6,'Kota Sawahlunto'),(109,6,'Kota Solok'),(110,7,'Kabupaten Banyuasin'),(111,7,'Kabupaten Empat Lawang'),(112,7,'Kabupaten Lahat'),(113,7,'Kabupaten Muara Enim'),(114,7,'Kabupaten Musi Banyuasin'),(115,7,'Kabupaten Musi Rawas'),(116,7,'Kabupaten Ogan Ilir'),(117,7,'Kabupaten Ogan Komering Ilir'),(118,7,'Kabupaten Ogan Komering Ulu'),(119,7,'Kabupaten Ogan Komering Ulu Selatan'),(120,7,'Kabupaten Ogan Komering Ulu Timur'),(121,7,'Kota Lubuklinggau'),(122,7,'Kota Pagar Alam'),(123,7,'Kota Palembang'),(124,7,'Kota Prabumulih'),(125,8,'Kabupaten Lampung Barat'),(126,8,'Kabupaten Lampung Selatan'),(127,8,'Kabupaten Lampung Tengah'),(128,8,'Kabupaten Lampung Timur'),(129,8,'Kabupaten Lampung Utara'),(130,8,'Kabupaten Mesuji'),(131,8,'Kabupaten Pesawaran'),(132,8,'Kabupaten Pringsewu'),(133,8,'Kabupaten Tanggamus'),(134,8,'Kabupaten Tulang Bawang'),(135,8,'Kabupaten Tulang Bawang Barat'),(136,8,'Kabupaten Way Kanan'),(137,8,'Kota Bandar Lampung'),(138,8,'Kota Metro'),(139,9,'Kabupaten Bangka'),(140,9,'Kabupaten Bangka Barat'),(141,9,'Kabupaten Bangka Selatan'),(142,9,'Kabupaten Bangka Tengah'),(143,9,'Kabupaten Belitung'),(144,9,'Kabupaten Belitung Timur'),(145,9,'Kota Pangkal Pinang'),(146,10,'Kabupaten Bintan'),(147,10,'Kabupaten Karimun'),(148,10,'Kabupaten Kepulauan Anambas'),(149,10,'Kabupaten Lingga'),(150,10,'Kabupaten Natuna'),(151,10,'Kota Batam'),(152,10,'Kota Tanjung Pinang'),(153,11,'Kabupaten Lebak'),(154,11,'Kabupaten Pandeglang'),(155,11,'Kabupaten Serang'),(156,11,'Kabupaten Tangerang'),(157,11,'Kota Cilegon'),(158,11,'Kota Serang'),(159,11,'Kota Tangerang'),(160,11,'Kota Tangerang Selatan'),(161,12,'Kabupaten Bandung'),(162,12,'Kabupaten Bandung Barat'),(163,12,'Kabupaten Bekasi'),(164,12,'Kabupaten Bogor'),(165,12,'Kabupaten Ciamis'),(166,12,'Kabupaten Cianjur'),(167,12,'Kabupaten Cirebon'),(168,12,'Kabupaten Garut'),(169,12,'Kabupaten Indramayu'),(170,12,'Kabupaten Karawang'),(171,12,'Kabupaten Kuningan'),(172,12,'Kabupaten Majalengka'),(173,12,'Kabupaten Purwakarta'),(174,12,'Kabupaten Subang'),(175,12,'Kabupaten Sukabumi'),(176,12,'Kabupaten Sumedang'),(177,12,'Kabupaten Tasikmalaya'),(178,12,'Kota Bandung'),(179,12,'Kota Banjar'),(180,12,'Kota Bekasi'),(181,12,'Kota Bogor'),(182,12,'Kota Cimahi'),(183,12,'Kota Cirebon'),(184,12,'Kota Depok'),(185,12,'Kota Sukabumi'),(186,12,'Kota Tasikmalaya'),(187,13,'Kabupaten Administrasi Kepulauan Seribu'),(188,13,'Kota Administrasi Jakarta Barat'),(189,13,'Kota Administrasi Jakarta Pusat'),(190,13,'Kota Administrasi Jakarta Selatan'),(191,13,'Kota Administrasi Jakarta Timur'),(192,13,'Kota Administrasi Jakarta Utara'),(193,14,'Kabupaten Banjarnegara'),(194,14,'Kabupaten Banyumas'),(195,14,'Kabupaten Batang'),(196,14,'Kabupaten Blora'),(197,14,'Kabupaten Boyolali'),(198,14,'Kabupaten Brebes'),(199,14,'Kabupaten Cilacap'),(200,14,'Kabupaten Demak'),(201,14,'Kabupaten Grobogan'),(202,14,'Kabupaten Jepara'),(203,14,'Kabupaten Karanganyar'),(204,14,'Kabupaten Kebumen'),(205,14,'Kabupaten Kendal'),(206,14,'Kabupaten Klaten'),(207,14,'Kabupaten Kudus'),(208,14,'Kabupaten Magelang'),(209,14,'Kabupaten Pati'),(210,14,'Kabupaten Pekalongan'),(211,14,'Kabupaten Pemalang'),(212,14,'Kabupaten Purbalingga'),(213,14,'Kabupaten Purworejo'),(214,14,'Kabupaten Rembang'),(215,14,'Kabupaten Semarang'),(216,14,'Kabupaten Sragen'),(217,14,'Kabupaten Sukoharjo'),(218,14,'Kabupaten Tegal'),(219,14,'Kabupaten Temanggung'),(220,14,'Kabupaten Wonogiri'),(221,14,'Kabupaten Wonosobo'),(222,14,'Kota Magelang'),(223,14,'Kota Pekalongan'),(224,14,'Kota Salatiga'),(225,14,'Kota Semarang'),(226,14,'Kota Surakarta'),(227,14,'Kota Tegal'),(228,15,'Kabupaten Bangkalan'),(229,15,'Kabupaten Banyuwangi'),(230,15,'Kabupaten Blitar'),(231,15,'Kabupaten Bojonegoro'),(232,15,'Kabupaten Bondowoso'),(233,15,'Kabupaten Gresik'),(234,15,'Kabupaten Jember'),(235,15,'Kabupaten Jombang'),(236,15,'Kabupaten Kediri'),(237,15,'Kabupaten Lamongan'),(238,15,'Kabupaten Lumajang'),(239,15,'Kabupaten Madiun'),(240,15,'Kabupaten Magetan'),(241,15,'Kabupaten Malang'),(242,15,'Kabupaten Mojokerto'),(243,15,'Kabupaten Nganjuk'),(244,15,'Kabupaten Ngawi'),(245,15,'Kabupaten Pacitan'),(246,15,'Kabupaten Pamekasan'),(247,15,'Kabupaten Pasuruan'),(248,15,'Kabupaten Ponorogo'),(249,15,'Kabupaten Probolinggo'),(250,15,'Kabupaten Sampang'),(251,15,'Kabupaten Sidoarjo'),(252,15,'Kabupaten Situbondo'),(253,15,'Kabupaten Sumenep'),(254,15,'Kabupaten Trenggalek'),(255,15,'Kabupaten Tuban'),(256,15,'Kabupaten Tulungagung'),(257,15,'Kota Batu'),(258,15,'Kota Blitar'),(259,15,'Kota Kediri'),(260,15,'Kota Madiun'),(261,15,'Kota Malang'),(262,15,'Kota Mojokerto'),(263,15,'Kota Pasuruan'),(264,15,'Kota Probolinggo'),(265,15,'Kota Surabaya'),(266,16,'Kabupaten Bantul'),(267,16,'Kabupaten Gunung Kidul'),(268,16,'Kabupaten Kulon Progo'),(269,16,'Kabupaten Sleman'),(270,16,'Kota Yogyakarta'),(271,17,'Kabupaten Badung'),(272,17,'Kabupaten Bangli'),(273,17,'Kabupaten Buleleng'),(274,17,'Kabupaten Gianyar'),(275,17,'Kabupaten Jembrana'),(276,17,'Kabupaten Karangasem'),(277,17,'Kabupaten Klungkung'),(278,17,'Kabupaten Tabanan'),(279,17,'Kota Denpasar'),(280,18,'Kabupaten Bima'),(281,18,'Kabupaten Dompu'),(282,18,'Kabupaten Lombok Barat'),(283,18,'Kabupaten Lombok Tengah'),(284,18,'Kabupaten Lombok Timur'),(285,18,'Kabupaten Lombok Utara'),(286,18,'Kabupaten Sumbawa'),(287,18,'Kabupaten Sumbawa Barat'),(288,18,'Kota Bima'),(289,18,'Kota Mataram'),(290,19,'Kabupaten Kupang'),(291,19,'Kabupaten Timor Tengah Selatan'),(292,19,'Kabupaten Timor Tengah Utara'),(293,19,'Kabupaten Belu'),(294,19,'Kabupaten Alor'),(295,19,'Kabupaten Flores Timur'),(296,19,'Kabupaten Sikka'),(297,19,'Kabupaten Ende'),(298,19,'Kabupaten Ngada'),(299,19,'Kabupaten Manggarai'),(300,19,'Kabupaten Sumba Timur'),(301,19,'Kabupaten Sumba Barat'),(302,19,'Kabupaten Lembata'),(303,19,'Kabupaten Rote Ndao'),(304,19,'Kabupaten Manggarai Barat'),(305,19,'Kabupaten Nagekeo'),(306,19,'Kabupaten Sumba Tengah'),(307,19,'Kabupaten Sumba Barat Daya'),(308,19,'Kabupaten Manggarai Timur'),(309,19,'Kabupaten Sabu Raijua'),(310,19,'Kota Kupang'),(311,20,'Kabupaten Bengkayang'),(312,20,'Kabupaten Kapuas Hulu'),(313,20,'Kabupaten Kayong Utara'),(314,20,'Kabupaten Ketapang'),(315,20,'Kabupaten Kubu Raya'),(316,20,'Kabupaten Landak'),(317,20,'Kabupaten Melawi'),(318,20,'Kabupaten Pontianak'),(319,20,'Kabupaten Sambas'),(320,20,'Kabupaten Sanggau'),(321,20,'Kabupaten Sekadau'),(322,20,'Kabupaten Sintang'),(323,20,'Kota Pontianak'),(324,20,'Kota Singkawang'),(325,21,'Kabupaten Balangan'),(326,21,'Kabupaten Banjar'),(327,21,'Kabupaten Barito Kuala'),(328,21,'Kabupaten Hulu Sungai Selatan'),(329,21,'Kabupaten Hulu Sungai Tengah'),(330,21,'Kabupaten Hulu Sungai Utara'),(331,21,'Kabupaten Kotabaru'),(332,21,'Kabupaten Tabalong'),(333,21,'Kabupaten Tanah Bumbu'),(334,21,'Kabupaten Tanah Laut'),(335,21,'Kabupaten Tapin'),(336,21,'Kota Banjarbaru'),(337,21,'Kota Banjarmasin'),(338,22,'Kabupaten Barito Selatan'),(339,22,'Kabupaten Barito Timur'),(340,22,'Kabupaten Barito Utara'),(341,22,'Kabupaten Gunung Mas'),(342,22,'Kabupaten Kapuas'),(343,22,'Kabupaten Katingan'),(344,22,'Kabupaten Kotawaringin Barat'),(345,22,'Kabupaten Kotawaringin Timur'),(346,22,'Kabupaten Lamandau'),(347,22,'Kabupaten Murung Raya'),(348,22,'Kabupaten Pulang Pisau'),(349,22,'Kabupaten Sukamara'),(350,22,'Kabupaten Seruyan'),(351,22,'Kota Palangka Raya'),(352,23,'Kabupaten Berau'),(353,23,'Kabupaten Bulungan'),(354,23,'Kabupaten Kutai Barat'),(355,23,'Kabupaten Kutai Kartanegara'),(356,23,'Kabupaten Kutai Timur'),(357,23,'Kabupaten Malinau'),(358,23,'Kabupaten Nunukan'),(359,23,'Kabupaten Paser'),(360,23,'Kabupaten Penajam Paser Utara'),(361,23,'Kabupaten Tana Tidung'),(362,23,'Kota Balikpapan'),(363,23,'Kota Bontang'),(364,23,'Kota Samarinda'),(365,23,'Kota Tarakan'),(366,24,'Kabupaten Boalemo'),(367,24,'Kabupaten Bone Bolango'),(368,24,'Kabupaten Gorontalo'),(369,24,'Kabupaten Gorontalo Utara'),(370,24,'Kabupaten Pohuwato'),(371,24,'Kota Gorontalo'),(372,25,'Kabupaten Bantaeng'),(373,25,'Kabupaten Barru'),(374,25,'Kabupaten Bone'),(375,25,'Kabupaten Bulukumba'),(376,25,'Kabupaten Enrekang'),(377,25,'Kabupaten Gowa'),(378,25,'Kabupaten Jeneponto'),(379,25,'Kabupaten Kepulauan Selayar'),(380,25,'Kabupaten Luwu'),(381,25,'Kabupaten Luwu Timur'),(382,25,'Kabupaten Luwu Utara'),(383,25,'Kabupaten Maros'),(384,25,'Kabupaten Pangkajene dan Kepulauan'),(385,25,'Kabupaten Pinrang'),(386,25,'Kabupaten Sidenreng Rappang'),(387,25,'Kabupaten Sinjai'),(388,25,'Kabupaten Soppeng'),(389,25,'Kabupaten Takalar'),(390,25,'Kabupaten Tana Toraja'),(391,25,'Kabupaten Toraja Utara'),(392,25,'Kabupaten Wajo'),(393,25,'Kota Makassar'),(394,25,'Kota Palopo'),(395,25,'Kota Parepare'),(396,26,'Kabupaten Bombana'),(397,26,'Kabupaten Buton'),(398,26,'Kabupaten Buton Utara'),(399,26,'Kabupaten Kolaka'),(400,26,'Kabupaten Kolaka Utara'),(401,26,'Kabupaten Konawe'),(402,26,'Kabupaten Konawe Selatan'),(403,26,'Kabupaten Konawe Utara'),(404,26,'Kabupaten Muna'),(405,26,'Kabupaten Wakatobi'),(406,26,'Kota Bau-Bau'),(407,26,'Kota Kendari'),(408,27,'Kabupaten Banggai'),(409,27,'Kabupaten Banggai Kepulauan'),(410,27,'Kabupaten Buol'),(411,27,'Kabupaten Donggala'),(412,27,'Kabupaten Morowali'),(413,27,'Kabupaten Parigi Moutong'),(414,27,'Kabupaten Poso'),(415,27,'Kabupaten Tojo Una-Una'),(416,27,'Kabupaten Toli-Toli'),(417,27,'Kabupaten Sigi'),(418,27,'Kota Palu'),(419,28,'Kabupaten Bolaang Mongondow'),(420,28,'Kabupaten Bolaang Mongondow Selatan'),(421,28,'Kabupaten Bolaang Mongondow Timur'),(422,28,'Kabupaten Bolaang Mongondow Utara'),(423,28,'Kabupaten Kepulauan Sangihe'),(424,28,'Kabupaten Kepulauan Siau Tagulandang Biaro'),(425,28,'Kabupaten Kepulauan Talaud'),(426,28,'Kabupaten Minahasa'),(427,28,'Kabupaten Minahasa Selatan'),(428,28,'Kabupaten Minahasa Tenggara'),(429,28,'Kabupaten Minahasa Utara'),(430,28,'Kota Bitung'),(431,28,'Kota Kotamobagu'),(432,28,'Kota Manado'),(433,28,'Kota Tomohon'),(434,29,'Kabupaten Majene'),(435,29,'Kabupaten Mamasa'),(436,29,'Kabupaten Mamuju'),(437,29,'Kabupaten Mamuju Utara'),(438,29,'Kabupaten Polewali Mandar'),(439,30,'Kabupaten Buru'),(440,30,'Kabupaten Buru Selatan'),(441,30,'Kabupaten Kepulauan Aru'),(442,30,'Kabupaten Maluku Barat Daya'),(443,30,'Kabupaten Maluku Tengah'),(444,30,'Kabupaten Maluku Tenggara'),(445,30,'Kabupaten Maluku Tenggara Barat'),(446,30,'Kabupaten Seram Bagian Barat'),(447,30,'Kabupaten Seram Bagian Timur'),(448,30,'Kota Ambon'),(449,30,'Kota Tual'),(450,31,'Kabupaten Halmahera Barat'),(451,31,'Kabupaten Halmahera Tengah'),(452,31,'Kabupaten Halmahera Utara'),(453,31,'Kabupaten Halmahera Selatan'),(454,31,'Kabupaten Kepulauan Sula'),(455,31,'Kabupaten Halmahera Timur'),(456,31,'Kabupaten Pulau Morotai'),(457,31,'Kota Ternate'),(458,31,'Kota Tidore Kepulauan'),(459,32,'Kabupaten Asmat'),(460,32,'Kabupaten Biak Numfor'),(461,32,'Kabupaten Boven Digoel'),(462,32,'Kabupaten Deiyai'),(463,32,'Kabupaten Dogiyai'),(464,32,'Kabupaten Intan Jaya'),(465,32,'Kabupaten Jayapura'),(466,32,'Kabupaten Jayawijaya'),(467,32,'Kabupaten Keerom'),(468,32,'Kabupaten Kepulauan Yapen'),(469,32,'Kabupaten Lanny Jaya'),(470,32,'Kabupaten Mamberamo Raya'),(471,32,'Kabupaten Mamberamo Tengah'),(472,32,'Kabupaten Mappi'),(473,32,'Kabupaten Merauke'),(474,32,'Kabupaten Mimika'),(475,32,'Kabupaten Nabire'),(476,32,'Kabupaten Nduga'),(477,32,'Kabupaten Paniai'),(478,32,'Kabupaten Pegunungan Bintang'),(479,32,'Kabupaten Puncak'),(480,32,'Kabupaten Puncak Jaya'),(481,32,'Kabupaten Sarmi'),(482,32,'Kabupaten Supiori'),(483,32,'Kabupaten Tolikara'),(484,32,'Kabupaten Waropen'),(485,32,'Kabupaten Yahukimo'),(486,32,'Kabupaten Yalimo'),(487,32,'Kota Jayapura'),(488,33,'Kabupaten Fakfak'),(489,33,'Kabupaten Kaimana'),(490,33,'Kabupaten Manokwari'),(491,33,'Kabupaten Maybrat'),(492,33,'Kabupaten Raja Ampat'),(493,33,'Kabupaten Sorong'),(494,33,'Kabupaten Sorong Selatan'),(495,33,'Kabupaten Tambrauw'),(496,33,'Kabupaten Teluk Bintuni'),(497,33,'Kabupaten Teluk Wondama'),(498,33,'Kota Sorong');
/*!40000 ALTER TABLE `data_kabupaten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_provinsi`
--

DROP TABLE IF EXISTS `data_provinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `region` int(11) DEFAULT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_provinsi`
--

LOCK TABLES `data_provinsi` WRITE;
/*!40000 ALTER TABLE `data_provinsi` DISABLE KEYS */;
INSERT INTO `data_provinsi` VALUES (1,1,'Aceh'),(2,1,'Sumatera Utara'),(3,1,'Bengkulu'),(4,1,'Jambi'),(5,1,'Riau'),(6,1,'Sumatera Barat'),(7,1,'Sumatera Selatan'),(8,1,'Lampung'),(9,1,'Kepulauan Bangka Belitung'),(10,1,'Kepulauan Riau'),(11,2,'Banten'),(12,2,'Jawa Barat'),(13,2,'DKI Jakarta'),(14,2,'Jawa Tengah'),(15,2,'Jawa Timur'),(16,2,'Daerah Istimewa Yogyakarta'),(17,7,'Bali'),(18,6,'Nusa Tenggara Barat'),(19,6,'Nusa Tenggara Timur'),(20,3,'Kalimantan Barat'),(21,3,'Kalimantan Selatan'),(22,3,'Kalimantan Tengah'),(23,3,'Kalimantan Timur'),(24,4,'Gorontalo'),(25,4,'Sulawesi Selatan'),(26,4,'Sulawesi Tenggara'),(27,4,'Sulawesi Tengah'),(28,4,'Sulawesi Utara'),(29,4,'Sulawesi Barat'),(30,5,'Maluku'),(31,5,'Maluku Utara'),(32,8,'Papua'),(33,8,'Papua Barat');
/*!40000 ALTER TABLE `data_provinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destination`
--

DROP TABLE IF EXISTS `destination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` varchar(255) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `kategori_3` varchar(255) DEFAULT NULL,
  `provinsi_2` int(11) DEFAULT NULL,
  `provinsi` int(11) DEFAULT NULL,
  `kabupaten` int(11) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destination`
--

LOCK TABLES `destination` WRITE;
/*!40000 ALTER TABLE `destination` DISABLE KEYS */;
INSERT INTO `destination` VALUES (9,'2014-10-09 00:00:00','222','123213','<p>\n	132</p>','<p>\n	13231</p>','destination_2014-10-09 _indonesia.jpg','1,3',8,'1,2,3,7',NULL,32,477,1,0,0,'en',38),(10,'2014-10-01 00:00:00','12313','123','<p>\n	123</p>','<p>\n	123</p>','destination_2014-10-01 _pasar_beringharjo.JPG','1',1,'1',NULL,1,18,1,0,0,'en',38);
/*!40000 ALTER TABLE `destination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food`
--

LOCK TABLES `food` WRITE;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` VALUES (2,'2014-10-10 00:00:00','11222','22','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-10 _Untitled 1_html_32357970.png',1,0,0,0,0,'en',55),(3,'2014-10-10 00:00:00','11222','22','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-10 _Untitled 1_html_32357970.png',1,0,0,0,0,'en',55);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `judul` text,
  `waktu` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_file` text,
  `status_display` tinyint(1) NOT NULL DEFAULT '0',
  `status_headline` tinyint(1) DEFAULT NULL,
  `album` int(11) NOT NULL DEFAULT '0',
  `filter` tinyint(1) NOT NULL DEFAULT '0',
  `ket` blob,
  `sub_judul` text,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` VALUES (2,38,NULL,'2014-10-09 00:00:00','album_2014-10-9 _shout-to-the-lord1.jpg',1,1,1,0,'1',NULL),(3,38,NULL,'2014-10-03 00:00:00','album_2014-10-3 _logo cmn.jpg',1,1,1,0,'123',NULL),(4,38,NULL,'2014-10-01 00:00:00','album_2014-10-1 _Untitled 1_html_32357970.png',1,1,2,0,'12313',NULL),(5,38,NULL,'2014-10-01 00:00:00','album_2014-10-1 _coba1.png',0,1,2,0,'12313',NULL);
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_about`
--

DROP TABLE IF EXISTS `kategori_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_about` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_about`
--

LOCK TABLES `kategori_about` WRITE;
/*!40000 ALTER TABLE `kategori_about` DISABLE KEYS */;
INSERT INTO `kategori_about` VALUES (1,'Location'),(2,'General Info'),(3,'Traveller Essential');
/*!40000 ALTER TABLE `kategori_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_activity`
--

DROP TABLE IF EXISTS `kategori_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_activity` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_activity`
--

LOCK TABLES `kategori_activity` WRITE;
/*!40000 ALTER TABLE `kategori_activity` DISABLE KEYS */;
INSERT INTO `kategori_activity` VALUES (1,'Ecotourism'),(2,'Sports'),(3,'Education'),(4,'Adventure'),(5,'Sightseeing'),(6,'Shopping'),(7,'Historical'),(9,'Culture');
/*!40000 ALTER TABLE `kategori_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_attraction`
--

DROP TABLE IF EXISTS `kategori_attraction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_attraction` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_attraction`
--

LOCK TABLES `kategori_attraction` WRITE;
/*!40000 ALTER TABLE `kategori_attraction` DISABLE KEYS */;
INSERT INTO `kategori_attraction` VALUES (1,'Travel Highlights'),(2,'Events');
/*!40000 ALTER TABLE `kategori_attraction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_culture`
--

DROP TABLE IF EXISTS `kategori_culture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_culture` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_culture`
--

LOCK TABLES `kategori_culture` WRITE;
/*!40000 ALTER TABLE `kategori_culture` DISABLE KEYS */;
INSERT INTO `kategori_culture` VALUES (1,'Culture'),(2,'Arts'),(3,'Craft'),(4,'Music/Instrument');
/*!40000 ALTER TABLE `kategori_culture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_destination`
--

DROP TABLE IF EXISTS `kategori_destination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_destination` (
  `id_kategori` int(11) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_destination`
--

LOCK TABLES `kategori_destination` WRITE;
/*!40000 ALTER TABLE `kategori_destination` DISABLE KEYS */;
INSERT INTO `kategori_destination` VALUES (1,'Recommended'),(2,'Spectacular Indonesia Spot'),(3,'Region');
/*!40000 ALTER TABLE `kategori_destination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_food`
--

DROP TABLE IF EXISTS `kategori_food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_food` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_food`
--

LOCK TABLES `kategori_food` WRITE;
/*!40000 ALTER TABLE `kategori_food` DISABLE KEYS */;
INSERT INTO `kategori_food` VALUES (1,'Regional Dishes'),(2,'Feast'),(3,'Beverages'),(4,'Eating Establishment'),(5,'Snack'),(6,'Fruit');
/*!40000 ALTER TABLE `kategori_food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_region`
--

DROP TABLE IF EXISTS `kategori_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_region` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_region`
--

LOCK TABLES `kategori_region` WRITE;
/*!40000 ALTER TABLE `kategori_region` DISABLE KEYS */;
INSERT INTO `kategori_region` VALUES (1,'Sumatera'),(2,'Jawa'),(3,'Kalimantan'),(4,'Sulawesi'),(5,'Maluku'),(6,'Nusa Tenggara'),(7,'Bali'),(8,'Papua');
/*!40000 ALTER TABLE `kategori_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'admin'),(2,'operator');
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopping`
--

DROP TABLE IF EXISTS `shopping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopping`
--

LOCK TABLES `shopping` WRITE;
/*!40000 ALTER TABLE `shopping` DISABLE KEYS */;
INSERT INTO `shopping` VALUES (1,'2014-10-03 00:00:00','123','2','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-03 _Untitled 1_html_32357970.png',0,0,0,0,0,'en',55),(3,'2014-10-03 00:00:00','123','2','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-03 _Untitled 1_html_32357970.png',0,0,0,0,0,'en',55),(4,'2014-10-03 00:00:00','123','2','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-03 _Untitled 1_html_32357970.png',0,0,0,0,0,'en',55);
/*!40000 ALTER TABLE `shopping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `today_festival`
--

DROP TABLE IF EXISTS `today_festival`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `today_festival` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` text,
  `sub_judul` text,
  `content` text,
  `short_content` text,
  `image` text,
  `kategori` tinyint(4) DEFAULT NULL,
  `kategori_2` tinyint(4) DEFAULT NULL,
  `status_display` tinyint(1) DEFAULT NULL,
  `longitude` decimal(30,0) DEFAULT NULL,
  `latitude` decimal(30,0) DEFAULT NULL,
  `language` tinytext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `today_festival`
--

LOCK TABLES `today_festival` WRITE;
/*!40000 ALTER TABLE `today_festival` DISABLE KEYS */;
INSERT INTO `today_festival` VALUES (11,'2014-10-28 00:00:00','Baliem','-','<p>\n	123</p>','<p>\n	123</p>','today_2014-10-28 _baliem.jpg',0,0,1,0,0,'en',38),(12,'2014-10-06 00:00:00','Pasar Sukawati','-','<p>\n	1</p>','<p>\n	1</p>','today_2014-10-6 _pasar_sukawati.jpg',0,0,1,0,0,'en',38),(13,'2014-10-05 10:00:17','222131','2221','<p>\n	2</p>','<p>\n	2</p>','today_2014-10-05 10:00:17 _Untitled 1_html_32357970.png',0,0,0,0,0,'en',38);
/*!40000 ALTER TABLE `today_festival` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` text NOT NULL,
  `level` varchar(34) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (38,'admin2','d7567a7494e429188b6fd54f5331ea5b42b414c4966697da3ac08f4d11af36440409663705ff8d2dfe2760e656edb4e43c1abea6a5cfe32d7e3a56bd2b988834','1',''),(55,'mamah','ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413','1',''),(62,'june','ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413','2',NULL),(57,'koko','ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413','2',''),(60,'cuncun','3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79','1',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-08 12:15:13
