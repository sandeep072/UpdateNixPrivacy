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
-- Table structure for table `Extern`
--

DROP TABLE IF EXISTS `Extern`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Extern` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataOwner` varchar(100) NOT NULL,
  `process` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `un` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `ui` varchar(100) NOT NULL,
  `bd` varchar(100) NOT NULL,
  `R` varchar(100) NOT NULL,
  `Ne` varchar(100) NOT NULL,
  `Ls` varchar(100) NOT NULL,
  `Di` varchar(100) NOT NULL,
  `Ac` varchar(100) NOT NULL,
  `GI` varchar(100) NOT NULL,
  `Pre` varchar(100) NOT NULL,
  `Pro` varchar(100) NOT NULL,
  `fe` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `BB` varchar(100) NOT NULL,
  `cl` varchar(100) NOT NULL,
  `Lc` varchar(100) NOT NULL,
  `Da` varchar(100) NOT NULL,
  `Attitude` varchar(100) NOT NULL,
  `AR` varchar(100) NOT NULL,
  `Pt` varchar(100) NOT NULL,
  `IB` varchar(100) NOT NULL,
  `Ge` varchar(100) NOT NULL,
  `Pmh` varchar(100) NOT NULL,
  `Dtr` varchar(100) NOT NULL,
  `Dis` varchar(100) NOT NULL,
  `HR` varchar(100) NOT NULL,
  `BT` varchar(100) NOT NULL,
  `HC` varchar(100) NOT NULL,
  `Dei` varchar(100) NOT NULL,
  `WE` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `Sk` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `tabl` varchar(100) NOT NULL,
  `Piercings` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Extern`
--

LOCK TABLES `Extern` WRITE;
/*!40000 ALTER TABLE `Extern` DISABLE KEYS */;
INSERT INTO `Extern` VALUES (1,'','','Name','User-Name','Picture','Unique-identifier','Biometric-data','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(2,'HR','Recruitment','Name','User-Name','Picture','Unique-identifier','Biometric-data','Race','National or ethnic origin','Languages spoken','Dialects','Accents','Gender Identity','Prefrences','proclivites','fetishes','','browsing behavior','','Links clicked','','Attitude','Age Ranges','','Income bracketes','Geographic','Physical and mental health','Drug test results','Disabilities','Health records','blood types','DNA code','Height','Weight','age','Skin tone','Gender','tabl','Piercings'),(3,'HR','Recruitment','Name','User-Name','Picture','Unique-identifier','Biometric-data','','','','Dialects','Accents','Gender Identity','','proclivites','','','browsing behavior','','','','Attitude','Age Ranges','','','Geographic','Physical and mental health','','','','blood types','DNA code','Height','','age','','Gender','',''),(4,'HR','Recruitment','Name','','Picture','','Biometric-data','Race','National or ethnic origin','','Dialects','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `Extern` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `External`
--

LOCK TABLES `External` WRITE;
/*!40000 ALTER TABLE `External` DISABLE KEYS */;
INSERT INTO `External` VALUES (10,'Marketing','sales','User-Name','','Gender Identity','browsing behavior','','Disabilities','age'),(12,'HR','Recruitment','User-Name','','','','','','age'),(13,'','','Name,Picture','Race,Languages spoken','Gender Identity,proclivites','browsing behavior','','Disabilities','age'),(14,'HR','Policy Formulation','Name','Race','Gender Identity','Call logs','Age Ranges','Disabilities','age'),(15,'','','Name','Race','Gender Identity','browsing behavior','Age Ranges','','age');
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Financial`
--

LOCK TABLES `Financial` WRITE;
/*!40000 ALTER TABLE `Financial` DISABLE KEYS */;
INSERT INTO `Financial` VALUES (1,'','','',''),(2,'','','',''),(17,'Credit card number','Houses','Sales','Credit records'),(30,'','','',''),(31,'Bank Account','Cars','Purchases','Credit standing'),(32,'Bank Account','Cars','Purchases','Credit standing'),(33,'Bank Account','Houses','Sales','Credit worthiness'),(34,'','','',''),(35,'','','',''),(36,'Credit card number','Cars','Purchases','Credit records'),(37,'Credit card number','Cars','Purchases','Credit records'),(38,'','','',''),(39,'','','','');
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
  `history` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `History`
--

LOCK TABLES `History` WRITE;
/*!40000 ALTER TABLE `History` DISABLE KEYS */;
INSERT INTO `History` VALUES (1,'events that '),(2,'events that '),(3,''),(4,''),(5,''),(6,''),(7,'Array'),(8,'');
/*!40000 ALTER TABLE `History` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Intern`
--

DROP TABLE IF EXISTS `Intern`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Intern` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RB` varchar(100) NOT NULL,
  `PB` varchar(100) NOT NULL,
  `Thought` varchar(200) NOT NULL,
  `wtk` varchar(500) NOT NULL,
  `wst` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `PIN` varchar(100) NOT NULL,
  `Mmn` varchar(500) NOT NULL,
  `Opinions` varchar(100) NOT NULL,
  `Intentions` varchar(100) NOT NULL,
  `Interests` varchar(100) NOT NULL,
  `Favorite` varchar(100) NOT NULL,
  `Colors` varchar(100) NOT NULL,
  `Likes` varchar(100) NOT NULL,
  `Dislikes` varchar(100) NOT NULL,
  `Music` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Intern`
--

LOCK TABLES `Intern` WRITE;
/*!40000 ALTER TABLE `Intern` DISABLE KEYS */;
INSERT INTO `Intern` VALUES (1,'Religious beliefs','Philosophical beliefs','Thought','What they know and do not know','What someone thinks','','','','','','','','','','',''),(2,'Religious beliefs','Philosophical beliefs','Thought','What they know and do not know','What someone thinks','Password','PIN','Mother`s maiden name','Opinions','Intentions','Interests','Favorite','Colors','Likes','Dislikes','Music'),(3,'Religious beliefs','','Thought','','','Password','','Mother`s maiden name','Opinions','','Interests','Favorite','','','',''),(4,'Religious beliefs','Philosophical beliefs','Thought','','What someone thinks','','','','','','','','','','','');
/*!40000 ALTER TABLE `Intern` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Internal`
--

LOCK TABLES `Internal` WRITE;
/*!40000 ALTER TABLE `Internal` DISABLE KEYS */;
INSERT INTO `Internal` VALUES (5,'Religious beliefs','','');
/*!40000 ALTER TABLE `Internal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lawfulness`
--

DROP TABLE IF EXISTS `Lawfulness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lawfulness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LegalBase` varchar(45) NOT NULL,
  `Assigned` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lawfulness`
--

LOCK TABLES `Lawfulness` WRITE;
/*!40000 ALTER TABLE `Lawfulness` DISABLE KEYS */;
INSERT INTO `Lawfulness` VALUES (1,'legitimate','--Select--'),(2,'Consent','Left Dept'),(3,'Consent','Left Dept');
/*!40000 ALTER TABLE `Lawfulness` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Social`
--

LOCK TABLES `Social` WRITE;
/*!40000 ALTER TABLE `Social` DISABLE KEYS */;
INSERT INTO `Social` VALUES (8,'Salary','Convictions','Character','Family structure','Friends','Voice mail'),(31,'','','','','',''),(32,'Salary','','','','',''),(33,'Job titles','Convictions','','Family structure','','Email'),(34,'','','','','',''),(35,'Job titles','Pardons','Religion','Sibilings','Connections','Telephone Recording'),(36,'Job titles','Convictions','Character','Family structure','Friends','Telephone Recording'),(37,'Job titles','Convictions','','','','Telephone Recording'),(38,'','','','','',''),(39,'','','','','','');
/*!40000 ALTER TABLE `Social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `Lname` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dpo`
--

DROP TABLE IF EXISTS `dpo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dpo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nod` varchar(200) NOT NULL,
  `ds` varchar(200) NOT NULL,
  `lis` varchar(200) NOT NULL,
  `sod` varchar(200) NOT NULL,
  `dpu` varchar(100) NOT NULL,
  `dsl` varchar(200) NOT NULL,
  `dal` varchar(200) NOT NULL,
  `ac` varchar(200) NOT NULL,
  `pp` varchar(200) NOT NULL,
  `pdp` varchar(200) NOT NULL,
  `dtl` varchar(200) NOT NULL,
  `dr` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dpo`
--

LOCK TABLES `dpo` WRITE;
/*!40000 ALTER TABLE `dpo` DISABLE KEYS */;
INSERT INTO `dpo` VALUES (1,'Applications data','Sales','CRM','Facebook','Fill Purpose','Google Drive','England','Anne','Policy Exists','Nix','IND to US','7'),(2,'Applications Data','Sales','CRM','Facebook','Fill Purpose','Google Drive','Canada','Anne','Policy Exists','Nix','IND to US','7'),(3,'Applications data','Sales','CRM','Facebook','Not Sure','Drive','England','Anne','Policy Exists','Nix','IND to US','6 mos');
/*!40000 ALTER TABLE `dpo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `final`
--

DROP TABLE IF EXISTS `final`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `final` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CCN` varchar(100) NOT NULL,
  `BA` varchar(100) NOT NULL,
  `Cars` varchar(100) NOT NULL,
  `Houses` varchar(100) NOT NULL,
  `Appartments` varchar(100) NOT NULL,
  `Purchases` varchar(100) NOT NULL,
  `Sales` varchar(100) NOT NULL,
  `Credit` varchar(100) NOT NULL,
  `Income` varchar(100) NOT NULL,
  `LR` varchar(100) NOT NULL,
  `Transactions` varchar(100) NOT NULL,
  `Textes` varchar(100) NOT NULL,
  `SH` varchar(100) NOT NULL,
  `CR` varchar(100) NOT NULL,
  `CW` varchar(100) NOT NULL,
  `CS` varchar(100) NOT NULL,
  `CC` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `final`
--

LOCK TABLES `final` WRITE;
/*!40000 ALTER TABLE `final` DISABLE KEYS */;
INSERT INTO `final` VALUES (1,'Credit card number','Bank Account','','','','','','','','','','','','','','',''),(2,'Credit card number','Bank Account','Cars','Houses','Appartments','Purchases','','Credit','','Loan Record','Transactions','Textes','Spending habits','Credit records','','Credit standing','Credit capacity'),(3,'Credit card number','Bank Account','Cars','','Appartments','Purchases','','','Income','','','Textes','','Credit records','','Credit standing',''),(4,'Credit card number','','','','','Purchases','','Credit','','','','Textes','','','','','');
/*!40000 ALTER TABLE `final` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lawOwner`
--

DROP TABLE IF EXISTS `lawOwner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lawOwner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Activity` varchar(45) NOT NULL,
  `Purpose` varchar(45) NOT NULL,
  `ConObt` varchar(45) NOT NULL,
  `Attachement` varchar(45) NOT NULL,
  `Contxt` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lawOwner`
--

LOCK TABLES `lawOwner` WRITE;
/*!40000 ALTER TABLE `lawOwner` DISABLE KEYS */;
INSERT INTO `lawOwner` VALUES (1,'xyz','data information','No consent','',''),(2,'xyz','data information','Consent Obtained','','security'),(3,'xyz','data information','Consent Obtained','','security');
/*!40000 ALTER TABLE `lawOwner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sociall`
--

DROP TABLE IF EXISTS `sociall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sociall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JT` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `WH` varchar(100) NOT NULL,
  `SA` varchar(100) NOT NULL,
  `EF` varchar(100) NOT NULL,
  `EH` varchar(100) NOT NULL,
  `Evaluations` varchar(100) NOT NULL,
  `Re` varchar(100) NOT NULL,
  `Interviews` varchar(100) NOT NULL,
  `Certifications` varchar(100) NOT NULL,
  `DAS` varchar(100) NOT NULL,
  `Convictions` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `Pardons` varchar(100) NOT NULL,
  `Sibilings` varchar(100) NOT NULL,
  `Chr` varchar(100) NOT NULL,
  `GR` varchar(100) NOT NULL,
  `SS` varchar(100) NOT NULL,
  `MS` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `PA` varchar(100) NOT NULL,
  `Interactions` varchar(100) NOT NULL,
  `CMD` varchar(100) NOT NULL,
  `FS` varchar(100) NOT NULL,
  `Offspring` varchar(100) NOT NULL,
  `Marriaes` varchar(100) NOT NULL,
  `Divorces` varchar(100) NOT NULL,
  `Rp` varchar(100) NOT NULL,
  `Friends` varchar(100) NOT NULL,
  `Connections` varchar(100) NOT NULL,
  `Acquaintances` varchar(100) NOT NULL,
  `GM` varchar(100) NOT NULL,
  `Associatioins` varchar(100) NOT NULL,
  `VM` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TR` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sociall`
--

LOCK TABLES `sociall` WRITE;
/*!40000 ALTER TABLE `sociall` DISABLE KEYS */;
INSERT INTO `sociall` VALUES (1,'Job titles','Salary','Work history','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),(2,'Job titles','Salary','Work history','','','Employmnt history','','References','','','Disciplinary actions','Convictions','Charges','Pardons','Sibilings','Character','General Reputation','','Marital status','','Political affiliations','','Communications meta-data','Family structure','','Marriaes','','Relationship','Friends','Connections','','Groups membership','','','Email','Telephone Recording'),(3,'Job titles','Salary','Work history','','Employee files','','','','','Certifications','','','Charges','','','','','Social status','','Religion','','','Communications meta-data','','','','','Relationship','Friends','','','','Associatioins','','','');
/*!40000 ALTER TABLE `sociall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb`
--

DROP TABLE IF EXISTS `tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `age` int(12) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb`
--

LOCK TABLES `tb` WRITE;
/*!40000 ALTER TABLE `tb` DISABLE KEYS */;
INSERT INTO `tb` VALUES (7,'sandeep',24,'faizabad','sandeep@gmail.com',900505),(8,'sandeep',23,'faizabad','s@gmail.com',23454352),(9,'Recruitment',23,'faizabad','sa@freshgrc.co',456347657);
/*!40000 ALTER TABLE `tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-16 15:51:55
