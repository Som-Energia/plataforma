-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: plataforma
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `elgg_access_collection_membership`
--

DROP TABLE IF EXISTS `elgg_access_collection_membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_access_collection_membership` (
  `user_guid` bigint(20) unsigned NOT NULL,
  `access_collection_id` int(11) NOT NULL,
  PRIMARY KEY (`user_guid`,`access_collection_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_access_collection_membership`
--

LOCK TABLES `elgg_access_collection_membership` WRITE;
/*!40000 ALTER TABLE `elgg_access_collection_membership` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_access_collection_membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_access_collections`
--

DROP TABLE IF EXISTS `elgg_access_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_access_collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `site_guid` (`site_guid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_access_collections`
--

LOCK TABLES `elgg_access_collections` WRITE;
/*!40000 ALTER TABLE `elgg_access_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_access_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_annotations`
--

DROP TABLE IF EXISTS `elgg_annotations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_annotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` bigint(20) unsigned NOT NULL,
  `name_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `value_type` enum('integer','text') NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  KEY `entity_guid` (`entity_guid`),
  KEY `name_id` (`name_id`),
  KEY `value_id` (`value_id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `access_id` (`access_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_annotations`
--

LOCK TABLES `elgg_annotations` WRITE;
/*!40000 ALTER TABLE `elgg_annotations` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_annotations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_api_users`
--

DROP TABLE IF EXISTS `elgg_api_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_api_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_guid` bigint(20) unsigned DEFAULT NULL,
  `api_key` varchar(40) DEFAULT NULL,
  `secret` varchar(40) NOT NULL,
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `api_key` (`api_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_api_users`
--

LOCK TABLES `elgg_api_users` WRITE;
/*!40000 ALTER TABLE `elgg_api_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_api_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_config`
--

DROP TABLE IF EXISTS `elgg_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_config` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`name`,`site_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_config`
--

LOCK TABLES `elgg_config` WRITE;
/*!40000 ALTER TABLE `elgg_config` DISABLE KEYS */;
INSERT INTO `elgg_config` VALUES ('view','s:7:\"default\";',1),('language','s:2:\"en\";',1),('default_access','s:1:\"2\";',1),('allow_registration','b:1;',1),('walled_garden','b:0;',1),('allow_user_default_access','s:0:\"\";',1),('default_limit','i:10;',1),('search_ft_min_word_len','s:1:\"4\";',1),('search_ft_max_word_len','s:2:\"84\";',1);
/*!40000 ALTER TABLE `elgg_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_datalists`
--

DROP TABLE IF EXISTS `elgg_datalists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_datalists` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_datalists`
--

LOCK TABLES `elgg_datalists` WRITE;
/*!40000 ALTER TABLE `elgg_datalists` DISABLE KEYS */;
INSERT INTO `elgg_datalists` VALUES ('installed','1501535796'),('dataroot','/var/www/data/'),('default_site','1'),('version','2016092300'),('simplecache_enabled','1'),('system_cache_enabled','1'),('simplecache_lastupdate','1501602071'),('processed_upgrades','a:3:{i:0;s:56:\"2015062900-1.11.2-discussion_plugin-e28c7afa4f5f24ec.php\";i:1;s:57:\"2016090100-2.2.0-wider_subtype_class-40b951c36343280b.php\";i:2;s:59:\"2016092300-2.2.0-database-guid-columns-5a57ba1bfdd8d925.php\";}'),('admin_registered','1'),('__site_secret__','zgiDBgradX_T7IKTMlXmkOAy-S-Gw_QI');
/*!40000 ALTER TABLE `elgg_datalists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_entities`
--

DROP TABLE IF EXISTS `elgg_entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_entities` (
  `guid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('object','user','group','site') NOT NULL,
  `subtype` int(11) DEFAULT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL,
  `container_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `time_updated` int(11) NOT NULL,
  `last_action` int(11) NOT NULL DEFAULT '0',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`guid`),
  KEY `type` (`type`),
  KEY `subtype` (`subtype`),
  KEY `owner_guid` (`owner_guid`),
  KEY `site_guid` (`site_guid`),
  KEY `container_guid` (`container_guid`),
  KEY `access_id` (`access_id`),
  KEY `time_created` (`time_created`),
  KEY `time_updated` (`time_updated`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entities`
--

LOCK TABLES `elgg_entities` WRITE;
/*!40000 ALTER TABLE `elgg_entities` DISABLE KEYS */;
INSERT INTO `elgg_entities` VALUES (1,'site',0,0,1,0,2,1501535796,1501535796,1501535796,'yes'),(2,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(3,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(4,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(5,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(6,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(7,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(8,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(9,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(10,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(11,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(12,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(13,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(14,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(15,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(16,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(17,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(18,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(19,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(20,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(21,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(22,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(23,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(24,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(25,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(26,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(27,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(28,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(29,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(30,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(31,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(32,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(33,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(34,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(35,'object',1,1,1,1,2,1501535796,1501535796,1501535796,'yes'),(36,'user',0,0,1,0,2,1501535819,1501535819,1501602097,'yes'),(37,'object',3,36,1,36,0,1501535819,1501535819,1501535819,'yes'),(38,'object',3,36,1,36,0,1501535819,1501535819,1501535819,'yes'),(39,'object',3,36,1,36,0,1501535819,1501535819,1501535819,'yes'),(40,'object',3,36,1,36,0,1501535819,1501535819,1501535819,'yes'),(41,'object',3,36,1,36,0,1501535819,1501535819,1501535819,'yes'),(42,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(43,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(44,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(45,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(46,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(47,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(48,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(49,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(50,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(51,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(52,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(53,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(54,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(55,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(56,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(57,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(58,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(59,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(60,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(61,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(62,'object',1,1,1,1,2,1501580934,1501580934,1501580934,'yes'),(63,'object',1,1,1,1,2,1501602060,1501602060,1501602060,'yes');
/*!40000 ALTER TABLE `elgg_entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_entity_relationships`
--

DROP TABLE IF EXISTS `elgg_entity_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_entity_relationships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guid_one` bigint(20) unsigned NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `guid_two` bigint(20) unsigned NOT NULL,
  `time_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guid_one` (`guid_one`,`relationship`,`guid_two`),
  KEY `relationship` (`relationship`),
  KEY `guid_two` (`guid_two`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entity_relationships`
--

LOCK TABLES `elgg_entity_relationships` WRITE;
/*!40000 ALTER TABLE `elgg_entity_relationships` DISABLE KEYS */;
INSERT INTO `elgg_entity_relationships` VALUES (1,2,'active_plugin',1,1501535796),(2,3,'active_plugin',1,1501535796),(3,4,'active_plugin',1,1501535796),(4,5,'active_plugin',1,1501535796),(5,10,'active_plugin',1,1501535796),(6,13,'active_plugin',1,1501535796),(7,14,'active_plugin',1,1501535796),(8,15,'active_plugin',1,1501535796),(9,16,'active_plugin',1,1501535796),(10,17,'active_plugin',1,1501535796),(11,19,'active_plugin',1,1501535796),(12,20,'active_plugin',1,1501535796),(13,21,'active_plugin',1,1501535796),(14,22,'active_plugin',1,1501535796),(15,23,'active_plugin',1,1501535796),(16,24,'active_plugin',1,1501535796),(17,25,'active_plugin',1,1501535796),(18,26,'active_plugin',1,1501535796),(19,27,'active_plugin',1,1501535796),(20,28,'active_plugin',1,1501535796),(21,29,'active_plugin',1,1501535796),(22,32,'active_plugin',1,1501535796),(23,34,'active_plugin',1,1501535796),(24,36,'member_of_site',1,1501535819),(25,7,'active_plugin',1,1501535839),(26,11,'active_plugin',1,1501535845),(27,12,'active_plugin',1,1501535847),(28,30,'active_plugin',1,1501535850),(29,62,'active_plugin',1,1501580951),(30,61,'active_plugin',1,1501580952),(31,60,'active_plugin',1,1501580954),(32,59,'active_plugin',1,1501580955),(33,57,'active_plugin',1,1501580957),(34,49,'active_plugin',1,1501580967),(35,58,'active_plugin',1,1501580970),(36,51,'active_plugin',1,1501581014),(37,48,'active_plugin',1,1501581016),(38,44,'active_plugin',1,1501581019),(39,42,'active_plugin',1,1501581022),(40,53,'active_plugin',1,1501581060),(41,55,'active_plugin',1,1501581061),(42,56,'active_plugin',1,1501581155),(43,54,'active_plugin',1,1501587475),(44,43,'active_plugin',1,1501602068),(45,63,'active_plugin',1,1501602071);
/*!40000 ALTER TABLE `elgg_entity_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_entity_subtypes`
--

DROP TABLE IF EXISTS `elgg_entity_subtypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_entity_subtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('object','user','group','site') NOT NULL,
  `subtype` varchar(50) NOT NULL,
  `class` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`,`subtype`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entity_subtypes`
--

LOCK TABLES `elgg_entity_subtypes` WRITE;
/*!40000 ALTER TABLE `elgg_entity_subtypes` DISABLE KEYS */;
INSERT INTO `elgg_entity_subtypes` VALUES (1,'object','plugin','ElggPlugin'),(2,'object','file','ElggFile'),(3,'object','widget','ElggWidget'),(4,'object','comment','ElggComment'),(5,'object','elgg_upgrade','ElggUpgrade'),(6,'object','blog','ElggBlog'),(7,'object','discussion_reply','ElggDiscussionReply'),(8,'object','thewire','ElggWire'),(9,'object','site_notification','SiteNotification'),(10,'object','album','TidypicsAlbum'),(11,'object','image','TidypicsImage'),(12,'object','tidypics_batch','TidypicsBatch'),(13,'object','group_tools_group_mail','GroupMail');
/*!40000 ALTER TABLE `elgg_entity_subtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_geocode_cache`
--

DROP TABLE IF EXISTS `elgg_geocode_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_geocode_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(128) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `long` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `location` (`location`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_geocode_cache`
--

LOCK TABLES `elgg_geocode_cache` WRITE;
/*!40000 ALTER TABLE `elgg_geocode_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_geocode_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_groups_entity`
--

DROP TABLE IF EXISTS `elgg_groups_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_groups_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`guid`),
  KEY `name` (`name`(50)),
  KEY `description` (`description`(50)),
  FULLTEXT KEY `name_2` (`name`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_groups_entity`
--

LOCK TABLES `elgg_groups_entity` WRITE;
/*!40000 ALTER TABLE `elgg_groups_entity` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_groups_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_hmac_cache`
--

DROP TABLE IF EXISTS `elgg_hmac_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_hmac_cache` (
  `hmac` varchar(255) NOT NULL,
  `ts` int(11) NOT NULL,
  PRIMARY KEY (`hmac`),
  KEY `ts` (`ts`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_hmac_cache`
--

LOCK TABLES `elgg_hmac_cache` WRITE;
/*!40000 ALTER TABLE `elgg_hmac_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_hmac_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_metadata`
--

DROP TABLE IF EXISTS `elgg_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` bigint(20) unsigned NOT NULL,
  `name_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `value_type` enum('integer','text') NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  KEY `entity_guid` (`entity_guid`),
  KEY `name_id` (`name_id`),
  KEY `value_id` (`value_id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `access_id` (`access_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_metadata`
--

LOCK TABLES `elgg_metadata` WRITE;
/*!40000 ALTER TABLE `elgg_metadata` DISABLE KEYS */;
INSERT INTO `elgg_metadata` VALUES (1,1,1,2,'text',0,2,1501535796,'yes'),(2,36,3,4,'integer',0,2,1501535819,'yes'),(3,36,5,4,'text',0,2,1501535819,'yes'),(4,36,6,7,'text',0,2,1501535819,'yes');
/*!40000 ALTER TABLE `elgg_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_metastrings`
--

DROP TABLE IF EXISTS `elgg_metastrings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_metastrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `string` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `string` (`string`(50))
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_metastrings`
--

LOCK TABLES `elgg_metastrings` WRITE;
/*!40000 ALTER TABLE `elgg_metastrings` DISABLE KEYS */;
INSERT INTO `elgg_metastrings` VALUES (1,'email'),(2,'noreply@somenergia.coop'),(3,'notification:method:email'),(4,'1'),(5,'validated'),(6,'validated_method'),(7,'admin_user'),(8,'toId'),(9,'36'),(10,'readYet'),(11,'0');
/*!40000 ALTER TABLE `elgg_metastrings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_objects_entity`
--

DROP TABLE IF EXISTS `elgg_objects_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_objects_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`guid`),
  FULLTEXT KEY `title` (`title`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_objects_entity`
--

LOCK TABLES `elgg_objects_entity` WRITE;
/*!40000 ALTER TABLE `elgg_objects_entity` DISABLE KEYS */;
INSERT INTO `elgg_objects_entity` VALUES (2,'aalborg_theme',''),(3,'blog',''),(4,'bookmarks',''),(5,'ckeditor',''),(6,'custom_index',''),(7,'dashboard',''),(8,'developers',''),(9,'diagnostics',''),(10,'discussions',''),(11,'embed',''),(12,'externalpages',''),(13,'file',''),(14,'garbagecollector',''),(15,'groups',''),(16,'htmlawed',''),(17,'invitefriends',''),(18,'legacy_urls',''),(19,'likes',''),(20,'logbrowser',''),(21,'logrotate',''),(22,'members',''),(23,'messageboard',''),(24,'messages',''),(25,'notifications',''),(26,'pages',''),(27,'profile',''),(28,'reportedcontent',''),(29,'search',''),(30,'site_notifications',''),(31,'tagcloud',''),(32,'thewire',''),(33,'twitter_api',''),(34,'uservalidationbyemail',''),(35,'web_services',''),(37,'',''),(38,'',''),(39,'',''),(40,'',''),(41,'',''),(42,'analytics',''),(43,'au_subgroups',''),(44,'comment_tracker',''),(45,'data_views',''),(46,'elgg_recaptcha',''),(47,'export_users_csv',''),(48,'file_tools',''),(49,'group_tools',''),(50,'login_as',''),(51,'mentions',''),(52,'metatags',''),(53,'rm_group_autosubscription',''),(54,'rm_group_default_fields',''),(55,'rm_group_reports',''),(56,'somenergia-customization',''),(57,'somenergia-theme',''),(58,'somenergia-upgrade',''),(59,'somenergia_drive',''),(60,'somenergia_index',''),(61,'somenergia_translations',''),(62,'tidypics',''),(63,'phpmailer','');
/*!40000 ALTER TABLE `elgg_objects_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_private_settings`
--

DROP TABLE IF EXISTS `elgg_private_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_private_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` bigint(20) unsigned NOT NULL,
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_guid` (`entity_guid`,`name`),
  KEY `name` (`name`),
  KEY `value` (`value`(50))
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_private_settings`
--

LOCK TABLES `elgg_private_settings` WRITE;
/*!40000 ALTER TABLE `elgg_private_settings` DISABLE KEYS */;
INSERT INTO `elgg_private_settings` VALUES (1,2,'elgg:internal:priority','34'),(2,3,'elgg:internal:priority','1'),(3,4,'elgg:internal:priority','2'),(4,5,'elgg:internal:priority','3'),(5,6,'elgg:internal:priority','4'),(6,7,'elgg:internal:priority','5'),(7,8,'elgg:internal:priority','6'),(8,9,'elgg:internal:priority','7'),(9,10,'elgg:internal:priority','8'),(10,11,'elgg:internal:priority','9'),(11,12,'elgg:internal:priority','10'),(12,13,'elgg:internal:priority','11'),(13,14,'elgg:internal:priority','12'),(14,15,'elgg:internal:priority','13'),(15,16,'elgg:internal:priority','14'),(16,17,'elgg:internal:priority','15'),(17,18,'elgg:internal:priority','16'),(18,19,'elgg:internal:priority','17'),(19,20,'elgg:internal:priority','18'),(20,21,'elgg:internal:priority','19'),(21,22,'elgg:internal:priority','20'),(22,23,'elgg:internal:priority','21'),(23,24,'elgg:internal:priority','22'),(24,25,'elgg:internal:priority','23'),(25,26,'elgg:internal:priority','24'),(26,27,'elgg:internal:priority','25'),(27,28,'elgg:internal:priority','26'),(28,29,'elgg:internal:priority','27'),(29,30,'elgg:internal:priority','28'),(30,31,'elgg:internal:priority','29'),(31,32,'elgg:internal:priority','30'),(32,33,'elgg:internal:priority','31'),(33,34,'elgg:internal:priority','32'),(34,35,'elgg:internal:priority','33'),(35,32,'limit','140'),(36,37,'handler','control_panel'),(37,37,'context','admin'),(38,37,'column','1'),(39,37,'order','0'),(40,38,'handler','admin_welcome'),(41,38,'context','admin'),(42,38,'order','10'),(43,38,'column','1'),(44,39,'handler','online_users'),(45,39,'context','admin'),(46,39,'column','2'),(47,39,'order','0'),(48,40,'handler','new_users'),(49,40,'context','admin'),(50,40,'order','10'),(51,40,'column','2'),(52,41,'handler','content_stats'),(53,41,'context','admin'),(54,41,'order','20'),(55,41,'column','2'),(56,42,'elgg:internal:priority','35'),(57,43,'elgg:internal:priority','42'),(58,44,'elgg:internal:priority','36'),(59,45,'elgg:internal:priority','37'),(60,46,'elgg:internal:priority','38'),(61,47,'elgg:internal:priority','39'),(62,48,'elgg:internal:priority','40'),(63,49,'elgg:internal:priority','41'),(64,50,'elgg:internal:priority','43'),(65,51,'elgg:internal:priority','44'),(66,52,'elgg:internal:priority','45'),(67,53,'elgg:internal:priority','46'),(68,54,'elgg:internal:priority','48'),(69,55,'elgg:internal:priority','49'),(70,56,'elgg:internal:priority','51'),(71,57,'elgg:internal:priority','50'),(72,58,'elgg:internal:priority','52'),(73,59,'elgg:internal:priority','53'),(74,60,'elgg:internal:priority','54'),(75,61,'elgg:internal:priority','55'),(76,62,'elgg:internal:priority','47'),(77,62,'tagging',''),(78,62,'restrict_tagging',''),(79,62,'view_count','1'),(80,62,'uploader','1'),(81,62,'exif',''),(82,62,'download_link','1'),(83,62,'slideshow',''),(84,62,'maxfilesize','5'),(85,62,'image_lib','GD'),(86,62,'img_river_view','batch'),(87,62,'album_river_view','cover'),(88,62,'river_comments_thumbnails','none'),(89,62,'river_thumbnails_size','tiny'),(90,62,'notify_interval','86400'),(91,62,'client_resizing',''),(92,62,'remove_exif',''),(93,62,'client_image_width','2000'),(94,62,'client_image_height','2000'),(95,62,'image_sizes','a:9:{s:16:\"tiny_image_width\";i:60;s:17:\"tiny_image_height\";i:60;s:17:\"tiny_image_square\";b:1;s:17:\"small_image_width\";i:153;s:18:\"small_image_height\";i:153;s:18:\"small_image_square\";b:1;s:17:\"large_image_width\";i:600;s:18:\"large_image_height\";i:600;s:18:\"large_image_square\";b:0;}'),(96,1,'cron_latest:fiveminute:msg','Cron jobs for \"fiveminute\" completed at Tue, 01 Aug 2017 17:40:02 +0200'),(97,1,'cron_latest:minute:msg','Cron jobs for \"minute\" completed at Tue, 01 Aug 2017 17:42:01 +0200'),(98,1,'cron_latest:minute:ts','1501602121'),(99,1,'cron_latest:fiveminute:ts','1501602002'),(100,63,'elgg:internal:priority','56'),(101,43,'version','20150912'),(102,63,'phpmailer_override','enabled'),(103,63,'phpmailer_smtp','1'),(104,63,'phpmailer_host','email'),(105,63,'phpmailer_smtp_auth','0'),(106,63,'phpmailer_username',''),(107,63,'phpmailer_password',''),(108,63,'ep_phpmailer_ssl','0'),(109,63,'ep_phpmailer_port','465'),(110,63,'nonstd_mta','0'),(111,36,'passwd_conf_code','4npxtq8nqqzt'),(112,36,'passwd_conf_time','1501602105');
/*!40000 ALTER TABLE `elgg_private_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_queue`
--

DROP TABLE IF EXISTS `elgg_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `data` mediumblob NOT NULL,
  `timestamp` int(11) NOT NULL,
  `worker` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `retrieve` (`timestamp`,`worker`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_queue`
--

LOCK TABLES `elgg_queue` WRITE;
/*!40000 ALTER TABLE `elgg_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_river`
--

DROP TABLE IF EXISTS `elgg_river`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_river` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(8) NOT NULL,
  `subtype` varchar(32) NOT NULL,
  `action_type` varchar(32) NOT NULL,
  `access_id` int(11) NOT NULL,
  `view` text NOT NULL,
  `subject_guid` bigint(20) unsigned NOT NULL,
  `object_guid` bigint(20) unsigned NOT NULL,
  `target_guid` bigint(20) unsigned NOT NULL,
  `annotation_id` int(11) NOT NULL,
  `posted` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `action_type` (`action_type`),
  KEY `access_id` (`access_id`),
  KEY `subject_guid` (`subject_guid`),
  KEY `object_guid` (`object_guid`),
  KEY `target_guid` (`target_guid`),
  KEY `annotation_id` (`annotation_id`),
  KEY `posted` (`posted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_river`
--

LOCK TABLES `elgg_river` WRITE;
/*!40000 ALTER TABLE `elgg_river` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_river` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_sites_entity`
--

DROP TABLE IF EXISTS `elgg_sites_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_sites_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`guid`),
  UNIQUE KEY `url` (`url`),
  FULLTEXT KEY `name` (`name`,`description`,`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_sites_entity`
--

LOCK TABLES `elgg_sites_entity` WRITE;
/*!40000 ALTER TABLE `elgg_sites_entity` DISABLE KEYS */;
INSERT INTO `elgg_sites_entity` VALUES (1,'Docker Plataforma','','http://localhost:8000/');
/*!40000 ALTER TABLE `elgg_sites_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_system_log`
--

DROP TABLE IF EXISTS `elgg_system_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `object_class` varchar(50) NOT NULL,
  `object_type` varchar(50) NOT NULL,
  `object_subtype` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `performed_by_guid` bigint(20) unsigned NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  `time_created` int(11) NOT NULL,
  `ip_address` varchar(46) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object_id` (`object_id`),
  KEY `object_class` (`object_class`),
  KEY `object_type` (`object_type`),
  KEY `object_subtype` (`object_subtype`),
  KEY `event` (`event`),
  KEY `performed_by_guid` (`performed_by_guid`),
  KEY `access_id` (`access_id`),
  KEY `time_created` (`time_created`),
  KEY `river_key` (`object_type`,`object_subtype`,`event`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_system_log`
--

LOCK TABLES `elgg_system_log` WRITE;
/*!40000 ALTER TABLE `elgg_system_log` DISABLE KEYS */;
INSERT INTO `elgg_system_log` VALUES (1,2,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(2,3,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(3,4,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(4,5,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(5,6,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(6,7,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(7,8,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(8,9,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(9,10,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(10,11,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(11,12,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(12,13,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(13,14,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(14,15,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(15,16,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(16,17,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(17,18,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(18,19,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(19,20,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(20,21,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(21,22,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(22,23,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(23,24,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(24,25,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(25,26,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(26,27,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(27,28,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(28,29,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(29,30,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(30,31,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(31,32,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(32,33,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(33,34,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(34,35,'ElggPlugin','object','plugin','create',0,1,2,'yes',1501535796,'172.19.0.1'),(35,1,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1501535796,'172.19.0.1'),(36,36,'ElggUser','user','','create',0,0,2,'yes',1501535819,'172.19.0.1'),(37,24,'ElggRelationship','relationship','member_of_site','create',0,0,2,'yes',1501535819,'172.19.0.1'),(38,2,'ElggMetadata','metadata','notification:method:email','create',0,0,2,'yes',1501535819,'172.19.0.1'),(39,36,'ElggUser','user','','make_admin',0,0,2,'yes',1501535819,'172.19.0.1'),(40,37,'ElggWidget','object','widget','create',0,36,2,'yes',1501535819,'172.19.0.1'),(41,38,'ElggWidget','object','widget','create',0,36,2,'yes',1501535819,'172.19.0.1'),(42,39,'ElggWidget','object','widget','create',0,36,2,'yes',1501535819,'172.19.0.1'),(43,40,'ElggWidget','object','widget','create',0,36,2,'yes',1501535819,'172.19.0.1'),(44,41,'ElggWidget','object','widget','create',0,36,2,'yes',1501535819,'172.19.0.1'),(45,3,'ElggMetadata','metadata','validated','create',0,0,2,'yes',1501535819,'172.19.0.1'),(46,4,'ElggMetadata','metadata','validated_method','create',0,0,2,'yes',1501535819,'172.19.0.1'),(47,36,'ElggUser','user','','login:before',0,0,2,'yes',1501535819,'172.19.0.1'),(48,36,'ElggUser','user','','login',36,0,2,'yes',1501535819,'172.19.0.1'),(49,36,'ElggUser','user','','login:after',36,0,2,'yes',1501535819,'172.19.0.1'),(50,25,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501535839,'172.19.0.1'),(51,26,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501535845,'172.19.0.1'),(52,27,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501535847,'172.19.0.1'),(53,28,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501535850,'172.19.0.1'),(54,36,'ElggUser','user','','logout:before',36,0,2,'yes',1501535868,'172.19.0.1'),(55,36,'ElggUser','user','','logout',36,0,2,'yes',1501535868,'172.19.0.1'),(56,36,'ElggUser','user','','logout:after',0,0,2,'yes',1501535868,'172.19.0.1'),(57,36,'ElggUser','user','','login:before',0,0,2,'yes',1501535900,'172.19.0.1'),(58,36,'ElggUser','user','','login',36,0,2,'yes',1501535900,'172.19.0.1'),(59,36,'ElggUser','user','','login:after',36,0,2,'yes',1501535900,'172.19.0.1'),(60,36,'ElggUser','user','','login:before',0,0,2,'yes',1501580888,'172.19.0.1'),(61,36,'ElggUser','user','','login',36,0,2,'yes',1501580888,'172.19.0.1'),(62,36,'ElggUser','user','','login:after',36,0,2,'yes',1501580888,'172.19.0.1'),(63,42,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(64,43,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(65,44,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(66,45,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(67,46,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(68,47,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(69,48,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(70,49,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(71,50,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(72,51,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(73,52,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(74,53,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(75,54,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(76,55,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(77,56,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(78,57,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(79,58,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(80,59,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(81,60,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(82,61,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(83,62,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501580934,'172.19.0.1'),(84,29,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580951,'172.19.0.1'),(85,30,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580952,'172.19.0.1'),(86,31,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580954,'172.19.0.1'),(87,32,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580955,'172.19.0.1'),(88,33,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580957,'172.19.0.1'),(89,34,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580967,'172.19.0.1'),(90,35,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501580970,'172.19.0.1'),(91,36,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581014,'172.19.0.1'),(92,37,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581016,'172.19.0.1'),(93,38,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581019,'172.19.0.1'),(94,39,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581022,'172.19.0.1'),(95,40,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581060,'172.19.0.1'),(96,41,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581061,'172.19.0.1'),(97,42,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501581155,'172.19.0.1'),(98,36,'ElggUser','user','','login:before',0,0,2,'yes',1501587348,'172.19.0.1'),(99,36,'ElggUser','user','','login',36,0,2,'yes',1501587348,'172.19.0.1'),(100,36,'ElggUser','user','','login:after',36,0,2,'yes',1501587348,'172.19.0.1'),(101,43,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501587475,'172.19.0.1'),(102,36,'ElggUser','user','','login:before',0,0,2,'yes',1501602041,'172.19.0.1'),(103,36,'ElggUser','user','','login',36,0,2,'yes',1501602041,'172.19.0.1'),(104,36,'ElggUser','user','','login:after',36,0,2,'yes',1501602041,'172.19.0.1'),(105,63,'ElggPlugin','object','plugin','create',36,1,2,'yes',1501602060,'172.19.0.1'),(106,44,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501602068,'172.19.0.1'),(107,45,'ElggRelationship','relationship','active_plugin','create',36,0,2,'yes',1501602071,'172.19.0.1'),(108,36,'ElggUser','user','','logout:before',36,0,2,'yes',1501602097,'172.19.0.1'),(109,36,'ElggUser','user','','logout',36,0,2,'yes',1501602097,'172.19.0.1'),(110,36,'ElggUser','user','','logout:after',0,0,2,'yes',1501602097,'172.19.0.1');
/*!40000 ALTER TABLE `elgg_system_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_users_apisessions`
--

DROP TABLE IF EXISTS `elgg_users_apisessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_users_apisessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL,
  `token` varchar(40) DEFAULT NULL,
  `expires` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_guid` (`user_guid`,`site_guid`),
  KEY `token` (`token`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_users_apisessions`
--

LOCK TABLES `elgg_users_apisessions` WRITE;
/*!40000 ALTER TABLE `elgg_users_apisessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_users_apisessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_users_entity`
--

DROP TABLE IF EXISTS `elgg_users_entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_users_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `username` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT 'Legacy password hashes',
  `salt` varchar(8) NOT NULL DEFAULT '' COMMENT 'Legacy password salts',
  `password_hash` varchar(255) NOT NULL DEFAULT '',
  `email` text NOT NULL,
  `language` varchar(6) NOT NULL DEFAULT '',
  `banned` enum('yes','no') NOT NULL DEFAULT 'no',
  `admin` enum('yes','no') NOT NULL DEFAULT 'no',
  `last_action` int(11) NOT NULL DEFAULT '0',
  `prev_last_action` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `prev_last_login` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`guid`),
  UNIQUE KEY `username` (`username`),
  KEY `password` (`password`),
  KEY `email` (`email`(50)),
  KEY `last_action` (`last_action`),
  KEY `last_login` (`last_login`),
  KEY `admin` (`admin`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `name_2` (`name`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_users_entity`
--

LOCK TABLES `elgg_users_entity` WRITE;
/*!40000 ALTER TABLE `elgg_users_entity` DISABLE KEYS */;
INSERT INTO `elgg_users_entity` VALUES (36,'Admin','admin','','','$2y$10$f8t.4fFkA/jpQGO1AvtZteDVgqWyN3T91bcdGCfaH8Z3./4.H7LBG','noreply@somenergia.coop','en','no','yes',1501602097,1501602094,1501602041,1501587348);
/*!40000 ALTER TABLE `elgg_users_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_users_remember_me_cookies`
--

DROP TABLE IF EXISTS `elgg_users_remember_me_cookies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_users_remember_me_cookies` (
  `code` varchar(32) NOT NULL,
  `guid` bigint(20) unsigned NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`code`),
  KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_users_remember_me_cookies`
--

LOCK TABLES `elgg_users_remember_me_cookies` WRITE;
/*!40000 ALTER TABLE `elgg_users_remember_me_cookies` DISABLE KEYS */;
/*!40000 ALTER TABLE `elgg_users_remember_me_cookies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elgg_users_sessions`
--

DROP TABLE IF EXISTS `elgg_users_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elgg_users_sessions` (
  `session` varchar(255) NOT NULL,
  `ts` int(11) unsigned NOT NULL DEFAULT '0',
  `data` mediumblob,
  PRIMARY KEY (`session`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_users_sessions`
--

LOCK TABLES `elgg_users_sessions` WRITE;
/*!40000 ALTER TABLE `elgg_users_sessions` DISABLE KEYS */;
INSERT INTO `elgg_users_sessions` VALUES ('bd839eb8af51e47ee5a949bf7e286ed5',1501535819,'_sf2_attributes|a:1:{s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501535819;s:1:\"c\";i:1501535819;s:1:\"l\";s:1:\"0\";}'),('322c1c503cd16972d7dbbd4fd10af068',1501535900,'_sf2_attributes|a:3:{s:14:\"__elgg_session\";s:22:\"PH7_HCxd8SIEZVa7XQsiR0\";s:3:\"msg\";a:0:{}s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501535900;s:1:\"c\";i:1501535868;s:1:\"l\";s:1:\"0\";}'),('352b3025902f33e2115470caec623666',1501535901,'_sf2_attributes|a:3:{s:14:\"__elgg_session\";s:22:\"PH7_HCxd8SIEZVa7XQsiR0\";s:3:\"msg\";a:0:{}s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501535901;s:1:\"c\";i:1501535868;s:1:\"l\";s:1:\"0\";}'),('ed6b3e7f09a255be22ff7d33686d4ba2',1501580888,'_sf2_attributes|a:2:{s:14:\"__elgg_session\";s:22:\"FvoPsVyT9E2SvDBxWjejga\";s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501580888;s:1:\"c\";i:1501580881;s:1:\"l\";s:1:\"0\";}'),('2bceb891274ef22f744f3104d53c604b',1501581166,'_sf2_attributes|a:3:{s:14:\"__elgg_session\";s:22:\"FvoPsVyT9E2SvDBxWjejga\";s:4:\"guid\";i:36;s:3:\"msg\";a:0:{}}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501581166;s:1:\"c\";i:1501580881;s:1:\"l\";s:1:\"0\";}'),('907b66c4b37f1c85328e2469129f5b92',1501587348,'_sf2_attributes|a:2:{s:14:\"__elgg_session\";s:22:\"d7ZMC-GVp4cPvf29m1KLzC\";s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501587348;s:1:\"c\";i:1501587320;s:1:\"l\";s:1:\"0\";}'),('4ab4b67d1d09b41987405323eeb93df5',1501587481,'_sf2_attributes|a:3:{s:14:\"__elgg_session\";s:22:\"d7ZMC-GVp4cPvf29m1KLzC\";s:4:\"guid\";i:36;s:3:\"msg\";a:0:{}}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501587481;s:1:\"c\";i:1501587320;s:1:\"l\";s:1:\"0\";}'),('b82e7e9d6d9b752925a2f37b086c4901',1501602002,'_sf2_attributes|a:1:{s:14:\"__elgg_session\";s:22:\"-oLrtQx86iYEaE7EqSYrqF\";}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602002;s:1:\"c\";i:1501602002;s:1:\"l\";s:1:\"0\";}'),('495b31c9f72a2594a0c2d86c65df654d',1501602002,'_sf2_attributes|a:1:{s:14:\"__elgg_session\";s:22:\"eEExZ1c6aAvNroQ4c3iD9n\";}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602002;s:1:\"c\";i:1501602002;s:1:\"l\";s:1:\"0\";}'),('1f3f5b63cfe3529dd0806ed30017884f',1501602041,'_sf2_attributes|a:2:{s:14:\"__elgg_session\";s:22:\"BkSRC2D_8WJPwREZy41f4q\";s:4:\"guid\";i:36;}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602041;s:1:\"c\";i:1501602006;s:1:\"l\";s:1:\"0\";}'),('577d7321bf3d709dd6b73a7625cef490',1501602105,'_sf2_attributes|a:2:{s:14:\"__elgg_session\";s:22:\"saJMHtMIticYcQRXCeXuEA\";s:3:\"msg\";a:0:{}}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602105;s:1:\"c\";i:1501602097;s:1:\"l\";s:1:\"0\";}'),('309f56fc3ef53b44525c004009e9484f',1501602061,'_sf2_attributes|a:1:{s:14:\"__elgg_session\";s:22:\"Os9Gnl6vnxrLDW18NCZuda\";}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602061;s:1:\"c\";i:1501602061;s:1:\"l\";s:1:\"0\";}'),('bf68aeeb7ed1dcf7d5b97da521472fd1',1501602121,'_sf2_attributes|a:1:{s:14:\"__elgg_session\";s:22:\"b2ekE8NnOhu_AwT15CA-AN\";}_sf2_flashes|a:0:{}_sf2_meta|a:3:{s:1:\"u\";i:1501602121;s:1:\"c\";i:1501602121;s:1:\"l\";s:1:\"0\";}');
/*!40000 ALTER TABLE `elgg_users_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'plataforma'
--

--
-- Dumping routines for database 'plataforma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-01 17:42:14
