-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: nj
-- ------------------------------------------------------
-- Server version	5.6.50-log

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
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `time` varchar(64) NOT NULL,
  `uuid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'默认表','1',''),(2,'测试01','1648890864',''),(3,'','1648892650',''),(4,'测试02','1648898353',''),(5,'4月2日测试','1648905302',''),(6,'物理','1648908818',''),(7,'','1648908873',''),(8,'','1648908959',''),(9,'lsr','1648945067',''),(10,'ceshi','1648960446',''),(11,'测试03','1648962141',''),(12,'物理','1648962579',''),(13,'物理','1648963111',''),(14,'物理','1648964465',''),(15,'cjkc','1648965562',''),(16,'物理','1648965763',''),(17,'测试01','1648981509',''),(18,'每日打卡','1648981910','');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,'毕煜萱'),(2,'段昱杰'),(3,'冯昶瑞'),(4,'郭风尧'),(5,'黄家俊'),(6,'黄弈博'),(7,'姜博涵'),(8,'姜博洋'),(9,'康闰滋'),(10,'李安正阳'),(11,'李嘉辉'),(12,'李劲辉'),(13,'李京润'),(14,'李尚儒'),(15,'李思睿'),(16,'林楠'),(17,'刘城铭'),(18,'刘瑞琮'),(19,'刘睿奇'),(20,'吕忻洋'),(21,'马淑慧'),(22,'孟浩东'),(23,'缪旷烁'),(24,'渠海宸'),(25,'沈昕伊'),(26,'时毅洋'),(27,'苏子宣'),(28,'王大为'),(29,'王鸿昊'),(30,'王家成'),(31,'王铭仪'),(32,'王艺颖'),(33,'王梓煜'),(34,'魏婧怡'),(35,'武文涵'),(36,'邢洲开洋'),(37,'薛冰原'),(38,'杨鹏辉'),(39,'于奕轩'),(40,'臧文源'),(41,'张焯玥'),(42,'张顺顺'),(43,'张文豪'),(44,'张晓涵'),(45,'张一诺'),(46,'张致尧'),(47,'张孜玥'),(48,'赵昊宇'),(49,'郑文佳'),(50,'周玉芙');
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time`
--

DROP TABLE IF EXISTS `time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemid` int(11) NOT NULL,
  `endTime` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time`
--

LOCK TABLES `time` WRITE;
/*!40000 ALTER TABLE `time` DISABLE KEYS */;
INSERT INTO `time` VALUES (134,1648890864,1648896115,14),(135,1648898353,1648898375,14),(136,1648905302,1648905697,14),(137,1648908818,1648908851,35),(138,1648945067,1648964032,14),(139,0,1648964032,14),(140,0,1648964032,14),(141,0,1648964032,14),(142,0,1648964032,14),(143,0,1648964032,14),(144,1648963111,1648964393,14),(145,1648964465,1648964503,14),(146,1648965562,1648965570,14),(147,1648965763,1648965849,14),(148,1648981509,1648981516,14);
/*!40000 ALTER TABLE `time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'nj'
--

--
-- Dumping routines for database 'nj'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-12 16:30:12
