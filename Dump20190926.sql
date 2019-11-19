-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: kick
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `External`
--

DROP TABLE IF EXISTS `External`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `External` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataOwner` varchar(45) NOT NULL,
  `process` varchar(45) NOT NULL,
  `mult` varchar(200) NOT NULL,
  `mult1` varchar(200) NOT NULL,
  `mult2` varchar(200) NOT NULL,
  `mult3` varchar(200) NOT NULL,
  `mult4` varchar(200) NOT NULL,
  `mult5` varchar(200) NOT NULL,
  `mult6` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `External`
--

LOCK TABLES `External` WRITE;
/*!40000 ALTER TABLE `External` DISABLE KEYS */;
INSERT INTO `External` VALUES (1,'HR','recruit','User-Name','Race','','','','',''),(2,'HR','Process','Name','Race','Gender Identity','browsing behavior','Age Ranges','Disabilities','age'),(3,'','','','','','','','',''),(4,'HR','Process','Name','Race','','','','',''),(5,'Marketing','sales','User-Name','Race','','','','',''),(6,'Marketing','sales','User-Name','Race','','','','',''),(7,'HR','Policy Formulation','Unique Identifier','Languages spoken','','','','',''),(8,'HR','Employee Relations','Picture','Languages spoken','Prefrences','','','Drug test results',''),(9,'','','Name,User-Name,Unique Identifier','','Gender Identity,Prefrences','browsing behavior,Call logs','Age Ranges','',''),(10,'Marketing','sales','User-Name','','Gender Identity','browsing behavior','','Disabilities','age'),(11,'','','','','','','','','');
/*!40000 ALTER TABLE `External` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Financial`
--

DROP TABLE IF EXISTS `Financial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Financial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Account` varchar(200) NOT NULL,
  `Ownership` varchar(200) NOT NULL,
  `Transactional` varchar(200) NOT NULL,
  `Credit` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Financial`
--

LOCK TABLES `Financial` WRITE;
/*!40000 ALTER TABLE `Financial` DISABLE KEYS */;
INSERT INTO `Financial` VALUES (1,'','','',''),(2,'','','',''),(3,'','','',''),(4,'','','',''),(5,'','','',''),(6,'','','',''),(7,'','','',''),(8,'','','',''),(9,'','','',''),(10,'','','',''),(11,'','','',''),(12,'','','',''),(13,'','','',''),(14,'Bank Account','','',''),(15,'Bank Account','','',''),(16,'Credit card number','Houses','Sales','Credit records'),(17,'Credit card number','Houses','Sales','Credit records');
/*!40000 ALTER TABLE `Financial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `History`
--

DROP TABLE IF EXISTS `History`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `History` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `history` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `History`
--

LOCK TABLES `History` WRITE;
/*!40000 ALTER TABLE `History` DISABLE KEYS */;
INSERT INTO `History` VALUES (1,''),(2,''),(3,''),(4,''),(5,''),(6,''),(7,''),(8,''),(9,''),(10,''),(11,''),(12,''),(13,''),(14,''),(15,''),(16,''),(17,''),(18,'');
/*!40000 ALTER TABLE `History` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Internal`
--

DROP TABLE IF EXISTS `Internal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Internal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Belief` varchar(200) NOT NULL,
  `Authenticating` varchar(200) NOT NULL,
  `Prefrence` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Internal`
--

LOCK TABLES `Internal` WRITE;
/*!40000 ALTER TABLE `Internal` DISABLE KEYS */;
INSERT INTO `Internal` VALUES (1,'Religious beliefs','',''),(2,'Religious beliefs','Password','Opinions'),(3,'','',''),(4,'','',''),(5,'Religious beliefs','',''),(6,'Religious beliefs','Password','Opinions');
/*!40000 ALTER TABLE `Internal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Social`
--

DROP TABLE IF EXISTS `Social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professional` varchar(200) NOT NULL,
  `Criminal` varchar(200) NOT NULL,
  `Public` varchar(200) NOT NULL,
  `Family` varchar(200) NOT NULL,
  `Social` varchar(200) NOT NULL,
  `Communication` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Social`
--

LOCK TABLES `Social` WRITE;
/*!40000 ALTER TABLE `Social` DISABLE KEYS */;
INSERT INTO `Social` VALUES (1,'','','','','Array','Array'),(2,'',',','','','','Array'),(3,'','','','','',''),(4,'','','','','','Array'),(5,'','','','','',''),(6,'','','','','',''),(7,'','','','','',''),(8,'Salary','Convictions','Character','Family structure','Friends','Voice mail');
/*!40000 ALTER TABLE `Social` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-26 19:18:40
