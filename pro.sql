-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: pro
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB
-- create database pro;
USE pro;

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
-- Table structure for table `ans`
--

DROP TABLE IF EXISTS `ans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ans` (
  `id` int(11) DEFAULT NULL,
  `anse` varchar(100) DEFAULT NULL,
  `n1` varchar(100) DEFAULT NULL,
  `n2` varchar(100) DEFAULT NULL,
  `n3` varchar(100) DEFAULT NULL,
  `n4` varchar(100) DEFAULT NULL,
  `n5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ans`
--

LOCK TABLES `ans` WRITE;
/*!40000 ALTER TABLE `ans` DISABLE KEYS */;
INSERT INTO `ans` VALUES (1,'what does PHP stand for','Private Home Page','PHP:Hypertext Preprosecessor','Personal Hypertext Processor','Anther Answer','2'),(2,'In CSS file The  Id attirbute Write by ','.id','@id','*id','#id','4'),(3,'All varibles in javascrip start with which symbbol?','!','&','var','*','3'),(4,'All varibles in PHP start with which symbbol?','!','&','$','*','3'),(5,'What is the corect way to end a PHP statement?',':',';','?','end line','2'),(12,'which CSS property controls the text size?','font-style','font-size','text-size','size','2'),(7,'What does CSS stand for?','Creative style sheets','cascading style sheets','computer style sheets','colorful style sheets','2'),(8,'which HTML attirbute is used to define inline styles?','Styles','style','class','font','2'),(9,'How do you insert a comment in a CSS file?','...........','//........','//......//','/*.....*/','4'),(10,'Whate property is used to change the background color?','color','background-color','bgcolor','font-color','2'),(11,'which CSS property is used to change the text color of an element?','background-color','bgcolor','color','font-color','3'),(12,'which CSS property controls the text size?','font-style','font-size','text-size','size','2');
/*!40000 ALTER TABLE `ans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-30 13:40:02
