-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: elgg
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
  `user_guid` int(11) NOT NULL,
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
  `site_guid` int(11) NOT NULL,
  PRIMARY KEY (`name`,`site_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_config`
--

LOCK TABLES `elgg_config` WRITE;
/*!40000 ALTER TABLE `elgg_config` DISABLE KEYS */;
INSERT INTO `elgg_config` VALUES ('view','s:7:\"default\";',1),('language','s:2:\"en\";',1),('default_access','s:1:\"2\";',1),('allow_registration','b:1;',1),('walled_garden','b:0;',1),('allow_user_default_access','s:0:\"\";',1);
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
INSERT INTO `elgg_datalists` VALUES ('filestore_run_once','1477741083'),('plugin_run_once','1477741083'),('elgg_widget_run_once','1477741083'),('installed','1477741106'),('path','/app/'),('dataroot','/data/'),('default_site','1'),('version','2014012000'),('simplecache_enabled','1'),('system_cache_enabled','1'),('processed_upgrades','a:45:{i:0;s:14:\"2008100701.php\";i:1;s:14:\"2008101303.php\";i:2;s:14:\"2009022701.php\";i:3;s:14:\"2009041701.php\";i:4;s:14:\"2009070101.php\";i:5;s:14:\"2009102801.php\";i:6;s:14:\"2010010501.php\";i:7;s:14:\"2010033101.php\";i:8;s:14:\"2010040201.php\";i:9;s:14:\"2010052601.php\";i:10;s:14:\"2010060101.php\";i:11;s:14:\"2010060401.php\";i:12;s:14:\"2010061501.php\";i:13;s:14:\"2010062301.php\";i:14;s:14:\"2010062302.php\";i:15;s:14:\"2010070301.php\";i:16;s:14:\"2010071001.php\";i:17;s:14:\"2010071002.php\";i:18;s:14:\"2010111501.php\";i:19;s:14:\"2010121601.php\";i:20;s:14:\"2010121602.php\";i:21;s:14:\"2010121701.php\";i:22;s:14:\"2010123101.php\";i:23;s:14:\"2011010101.php\";i:24;s:61:\"2011021800-1.8_svn-goodbye_walled_garden-083121a656d06894.php\";i:25;s:61:\"2011022000-1.8_svn-custom_profile_fields-390ac967b0bb5665.php\";i:26;s:60:\"2011030700-1.8_svn-blog_status_metadata-4645225d7b440876.php\";i:27;s:51:\"2011031300-1.8_svn-twitter_api-12b832a5a7a3e1bd.php\";i:28;s:57:\"2011031600-1.8_svn-datalist_grows_up-0b8aec5a55cc1e1c.php\";i:29;s:61:\"2011032000-1.8_svn-widgets_arent_plugins-61836261fa280a5c.php\";i:30;s:59:\"2011032200-1.8_svn-admins_like_widgets-7f19d2783c1680d3.php\";i:31;s:14:\"2011052801.php\";i:32;s:60:\"2011061200-1.8b1-sites_need_a_site_guid-6d9dcbf46c0826cc.php\";i:33;s:62:\"2011092500-1.8.0.1-forum_reply_river_view-5758ce8d86ac56ce.php\";i:34;s:54:\"2011123100-1.8.2-fix_friend_river-b17e7ff8345c2269.php\";i:35;s:53:\"2011123101-1.8.2-fix_blog_status-b14c2a0e7b9e7d55.php\";i:36;s:50:\"2012012000-1.8.3-ip_in_syslog-87fe0f068cf62428.php\";i:37;s:50:\"2012012100-1.8.3-system_cache-93100e7d55a24a11.php\";i:38;s:59:\"2012041800-1.8.3-dont_filter_passwords-c0ca4a18b38ae2bc.php\";i:39;s:58:\"2012041801-1.8.3-multiple_user_tokens-852225f7fd89f6c5.php\";i:40;s:59:\"2013030600-1.8.13-update_user_location-8999eb8bf1bdd9a3.php\";i:41;s:62:\"2013051700-1.8.15-add_missing_group_index-52a63a3a3ffaced2.php\";i:42;s:53:\"2013052900-1.8.15-ipv6_in_syslog-f5c2cc0196e9e731.php\";i:43;s:50:\"2013060900-1.8.15-site_secret-404fc165cf9e0ac9.php\";i:44;s:50:\"2014012000-1.8.18-remember_me-9a8a433685cf7be9.php\";}'),('admin_registered','1'),('simplecache_lastupdate_default','1477741134'),('simplecache_lastcached_default','1477741134'),('__site_secret__','zSSnUN97SbtzmITffsLt4p5zWE9DacQg');
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
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entities`
--

LOCK TABLES `elgg_entities` WRITE;
/*!40000 ALTER TABLE `elgg_entities` DISABLE KEYS */;
INSERT INTO `elgg_entities` VALUES (1,'site',0,0,1,0,2,1477741106,1477741106,1477741106,'yes'),(2,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(3,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(4,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(5,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(6,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(7,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(8,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(9,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(10,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(11,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(12,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(13,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(14,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(15,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(16,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(17,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(18,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(19,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(20,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(21,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(22,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(23,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(24,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(25,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(26,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(27,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(28,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(29,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(30,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(31,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(32,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(33,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(34,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(35,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(36,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(37,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(38,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(39,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(40,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(41,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(42,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(43,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(44,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(45,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(46,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(47,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(48,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(49,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(50,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(51,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(52,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(53,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(54,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(55,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(56,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(57,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(58,'object',2,1,1,1,2,1477741106,1477741106,1477741106,'yes'),(59,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(60,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(61,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(62,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(63,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(64,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(65,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(66,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(67,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(68,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(69,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(70,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(71,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(72,'object',2,1,1,1,2,1477741107,1477741107,1477741107,'yes'),(73,'user',0,0,1,0,2,1477741132,1477741132,1477741132,'yes'),(74,'object',3,73,1,73,0,1477741132,1477741132,1477741132,'yes'),(75,'object',3,73,1,73,0,1477741132,1477741132,1477741132,'yes'),(76,'object',3,73,1,73,0,1477741132,1477741132,1477741132,'yes'),(77,'object',3,73,1,73,0,1477741132,1477741132,1477741132,'yes'),(78,'object',3,73,1,73,0,1477741132,1477741132,1477741132,'yes');
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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entity_relationships`
--

LOCK TABLES `elgg_entity_relationships` WRITE;
/*!40000 ALTER TABLE `elgg_entity_relationships` DISABLE KEYS */;
INSERT INTO `elgg_entity_relationships` VALUES (1,6,'active_plugin',1,1477741107),(2,7,'active_plugin',1,1477741107),(3,19,'active_plugin',1,1477741107),(4,27,'active_plugin',1,1477741107),(5,30,'active_plugin',1,1477741107),(6,33,'active_plugin',1,1477741107),(7,36,'active_plugin',1,1477741107),(8,37,'active_plugin',1,1477741107),(9,38,'active_plugin',1,1477741107),(10,39,'active_plugin',1,1477741107),(11,40,'active_plugin',1,1477741107),(12,41,'active_plugin',1,1477741107),(13,42,'active_plugin',1,1477741107),(14,43,'active_plugin',1,1477741107),(15,44,'active_plugin',1,1477741107),(16,45,'active_plugin',1,1477741107),(17,47,'active_plugin',1,1477741107),(18,48,'active_plugin',1,1477741107),(19,52,'active_plugin',1,1477741107),(20,56,'active_plugin',1,1477741107),(21,64,'active_plugin',1,1477741107),(22,65,'active_plugin',1,1477741107),(23,67,'active_plugin',1,1477741107),(24,71,'active_plugin',1,1477741107),(25,72,'active_plugin',1,1477741107),(26,73,'member_of_site',1,1477741132);
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
  `class` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`,`subtype`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_entity_subtypes`
--

LOCK TABLES `elgg_entity_subtypes` WRITE;
/*!40000 ALTER TABLE `elgg_entity_subtypes` DISABLE KEYS */;
INSERT INTO `elgg_entity_subtypes` VALUES (1,'object','file','ElggFile'),(2,'object','plugin','ElggPlugin'),(3,'object','widget','ElggWidget'),(4,'object','blog','ElggBlog'),(5,'object','thewire','ElggWire');
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
) ENGINE=MEMORY DEFAULT CHARSET=latin1;
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
) ENGINE=MEMORY DEFAULT CHARSET=latin1;
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
INSERT INTO `elgg_metadata` VALUES (1,1,1,2,'text',0,2,1477741106,'yes'),(2,73,3,4,'text',73,2,1477741132,'yes'),(3,73,5,4,'text',0,2,1477741132,'yes'),(4,73,6,7,'text',0,2,1477741132,'yes');
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_metastrings`
--

LOCK TABLES `elgg_metastrings` WRITE;
/*!40000 ALTER TABLE `elgg_metastrings` DISABLE KEYS */;
INSERT INTO `elgg_metastrings` VALUES (1,'email'),(2,'no_reply@travis.elgg.org'),(3,'notification:method:email'),(4,'1'),(5,'validated'),(6,'validated_method'),(7,'admin_user');
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
INSERT INTO `elgg_objects_entity` VALUES (2,'akismet',''),(3,'analytics',''),(4,'assemblies',''),(5,'au_subgroups',''),(6,'blog',''),(7,'bookmarks',''),(8,'bright-theme',''),(9,'bright-theme-1.0',''),(10,'captcha',''),(11,'categories',''),(12,'comment_tracker',''),(13,'crud',''),(14,'custom_index',''),(15,'custom_index_widgets',''),(16,'dashboard',''),(17,'developers',''),(18,'diagnostics',''),(19,'dokuwiki',''),(20,'embed',''),(21,'embed_extender',''),(22,'embedvideo',''),(23,'event_calendar',''),(24,'export_users_csv',''),(25,'externalpages',''),(26,'fb_commentapps',''),(27,'file',''),(28,'file_tools',''),(29,'following',''),(30,'garbagecollector',''),(31,'group_operators',''),(32,'group_tools',''),(33,'groups',''),(34,'gutwacaptcha',''),(35,'honeypot',''),(36,'htmlawed',''),(37,'invitefriends',''),(38,'likes',''),(39,'logbrowser',''),(40,'logrotate',''),(41,'members',''),(42,'messageboard',''),(43,'messages',''),(44,'notifications',''),(45,'notifications_tools',''),(46,'oauth_api',''),(47,'pages',''),(48,'profile',''),(49,'proposals',''),(50,'questions',''),(51,'recaptcha',''),(52,'reportedcontent',''),(53,'rm_group_autosubscription',''),(54,'rm_group_default_fields',''),(55,'rm_group_reports',''),(56,'search',''),(57,'simplepie',''),(58,'somenergia-theme',''),(59,'somenergia_calendar',''),(60,'somenergia_drive',''),(61,'spam_login_filter',''),(62,'spam_throttle',''),(63,'tagcloud',''),(64,'thewire',''),(65,'threads',''),(66,'tidypics',''),(67,'tinymce',''),(68,'tracker',''),(69,'twitter',''),(70,'twitter_api',''),(71,'uservalidationbyemail',''),(72,'zaudio',''),(74,'',''),(75,'',''),(76,'',''),(77,'',''),(78,'','');
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
  `entity_guid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_guid` (`entity_guid`,`name`),
  KEY `name` (`name`),
  KEY `value` (`value`(50))
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_private_settings`
--

LOCK TABLES `elgg_private_settings` WRITE;
/*!40000 ALTER TABLE `elgg_private_settings` DISABLE KEYS */;
INSERT INTO `elgg_private_settings` VALUES (1,2,'elgg:internal:priority','1'),(2,3,'elgg:internal:priority','2'),(3,4,'elgg:internal:priority','3'),(4,5,'elgg:internal:priority','4'),(5,6,'elgg:internal:priority','5'),(6,7,'elgg:internal:priority','6'),(7,8,'elgg:internal:priority','7'),(8,9,'elgg:internal:priority','8'),(9,10,'elgg:internal:priority','9'),(10,11,'elgg:internal:priority','10'),(11,12,'elgg:internal:priority','11'),(12,13,'elgg:internal:priority','12'),(13,14,'elgg:internal:priority','13'),(14,15,'elgg:internal:priority','14'),(15,16,'elgg:internal:priority','15'),(16,17,'elgg:internal:priority','16'),(17,18,'elgg:internal:priority','17'),(18,19,'elgg:internal:priority','18'),(19,20,'elgg:internal:priority','19'),(20,21,'elgg:internal:priority','20'),(21,22,'elgg:internal:priority','21'),(22,23,'elgg:internal:priority','22'),(23,24,'elgg:internal:priority','23'),(24,25,'elgg:internal:priority','24'),(25,26,'elgg:internal:priority','25'),(26,27,'elgg:internal:priority','26'),(27,28,'elgg:internal:priority','27'),(28,29,'elgg:internal:priority','28'),(29,30,'elgg:internal:priority','29'),(30,31,'elgg:internal:priority','30'),(31,32,'elgg:internal:priority','31'),(32,33,'elgg:internal:priority','32'),(33,34,'elgg:internal:priority','33'),(34,35,'elgg:internal:priority','34'),(35,36,'elgg:internal:priority','35'),(36,37,'elgg:internal:priority','36'),(37,38,'elgg:internal:priority','37'),(38,39,'elgg:internal:priority','38'),(39,40,'elgg:internal:priority','39'),(40,41,'elgg:internal:priority','40'),(41,42,'elgg:internal:priority','41'),(42,43,'elgg:internal:priority','42'),(43,44,'elgg:internal:priority','43'),(44,45,'elgg:internal:priority','44'),(45,46,'elgg:internal:priority','45'),(46,47,'elgg:internal:priority','46'),(47,48,'elgg:internal:priority','47'),(48,49,'elgg:internal:priority','48'),(49,50,'elgg:internal:priority','49'),(50,51,'elgg:internal:priority','50'),(51,52,'elgg:internal:priority','51'),(52,53,'elgg:internal:priority','52'),(53,54,'elgg:internal:priority','53'),(54,55,'elgg:internal:priority','54'),(55,56,'elgg:internal:priority','55'),(56,57,'elgg:internal:priority','56'),(57,58,'elgg:internal:priority','57'),(58,59,'elgg:internal:priority','58'),(59,60,'elgg:internal:priority','59'),(60,61,'elgg:internal:priority','60'),(61,62,'elgg:internal:priority','61'),(62,63,'elgg:internal:priority','62'),(63,64,'elgg:internal:priority','63'),(64,65,'elgg:internal:priority','64'),(65,66,'elgg:internal:priority','65'),(66,67,'elgg:internal:priority','66'),(67,68,'elgg:internal:priority','67'),(68,69,'elgg:internal:priority','68'),(69,70,'elgg:internal:priority','69'),(70,71,'elgg:internal:priority','70'),(71,72,'elgg:internal:priority','71'),(72,74,'handler','control_panel'),(73,74,'context','admin'),(74,74,'column','1'),(75,74,'order','0'),(76,75,'handler','admin_welcome'),(77,75,'context','admin'),(78,75,'order','10'),(79,75,'column','1'),(80,76,'handler','online_users'),(81,76,'context','admin'),(82,76,'column','2'),(83,76,'order','0'),(84,77,'handler','new_users'),(85,77,'context','admin'),(86,77,'order','10'),(87,77,'column','2'),(88,78,'handler','content_stats'),(89,78,'context','admin'),(90,78,'order','20'),(91,78,'column','2'),(92,76,'num_display','8'),(93,77,'num_display','5'),(94,78,'num_display','8');
/*!40000 ALTER TABLE `elgg_private_settings` ENABLE KEYS */;
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
  `subject_guid` int(11) NOT NULL,
  `object_guid` int(11) NOT NULL,
  `annotation_id` int(11) NOT NULL,
  `posted` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `action_type` (`action_type`),
  KEY `access_id` (`access_id`),
  KEY `subject_guid` (`subject_guid`),
  KEY `object_guid` (`object_guid`),
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
INSERT INTO `elgg_sites_entity` VALUES (1,'Plataforma','','http://localhost:8000/');
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
  `performed_by_guid` int(11) NOT NULL,
  `owner_guid` int(11) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elgg_system_log`
--

LOCK TABLES `elgg_system_log` WRITE;
/*!40000 ALTER TABLE `elgg_system_log` DISABLE KEYS */;
INSERT INTO `elgg_system_log` VALUES (1,2,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(2,3,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(3,4,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(4,5,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(5,6,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(6,7,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(7,8,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(8,9,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(9,10,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(10,11,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(11,12,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(12,13,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(13,14,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(14,15,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(15,16,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(16,17,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(17,18,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(18,19,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(19,20,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(20,21,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(21,22,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(22,23,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(23,24,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(24,25,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(25,26,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(26,27,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(27,28,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(28,29,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(29,30,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(30,31,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(31,32,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(32,33,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(33,34,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(34,35,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(35,36,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(36,37,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(37,38,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(38,39,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(39,40,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(40,41,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(41,42,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(42,43,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(43,44,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(44,45,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(45,46,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(46,47,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(47,48,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(48,49,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(49,50,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(50,51,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(51,52,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(52,53,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(53,54,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(54,55,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(55,56,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(56,57,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(57,58,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741106,'172.17.0.1'),(58,59,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(59,60,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(60,61,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(61,62,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(62,63,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(63,64,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(64,65,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(65,66,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(66,67,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(67,68,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(68,69,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(69,70,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(70,71,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(71,72,'ElggPlugin','object','plugin','create',0,1,2,'yes',1477741107,'172.17.0.1'),(72,1,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(73,2,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(74,3,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(75,4,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(76,5,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(77,6,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(78,7,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(79,8,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(80,9,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(81,10,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(82,11,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(83,12,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(84,13,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(85,14,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(86,15,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(87,16,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(88,17,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(89,18,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(90,19,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(91,20,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(92,21,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(93,22,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(94,23,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(95,24,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(96,25,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1477741107,'172.17.0.1'),(97,26,'ElggRelationship','relationship','member_of_site','create',0,0,2,'yes',1477741132,'172.17.0.1'),(98,73,'ElggUser','user','','create',0,0,2,'yes',1477741132,'172.17.0.1'),(99,2,'ElggMetadata','metadata','notification:method:email','create',0,73,2,'yes',1477741132,'172.17.0.1'),(100,74,'ElggWidget','object','widget','create',0,73,0,'yes',1477741132,'172.17.0.1'),(101,75,'ElggWidget','object','widget','create',0,73,0,'yes',1477741132,'172.17.0.1'),(102,76,'ElggWidget','object','widget','create',0,73,0,'yes',1477741132,'172.17.0.1'),(103,77,'ElggWidget','object','widget','create',0,73,0,'yes',1477741132,'172.17.0.1'),(104,78,'ElggWidget','object','widget','create',0,73,0,'yes',1477741132,'172.17.0.1'),(105,73,'ElggUser','user','','make_admin',0,0,2,'yes',1477741132,'172.17.0.1'),(106,3,'ElggMetadata','metadata','validated','create',0,0,2,'yes',1477741132,'172.17.0.1'),(107,4,'ElggMetadata','metadata','validated_method','create',0,0,2,'yes',1477741132,'172.17.0.1'),(108,73,'ElggUser','user','','update',73,0,2,'yes',1477741132,'172.17.0.1'),(109,73,'ElggUser','user','','login',73,0,2,'yes',1477741132,'172.17.0.1');
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
) ENGINE=MEMORY DEFAULT CHARSET=latin1;
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
  `password` varchar(32) NOT NULL DEFAULT '',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `email` text NOT NULL,
  `language` varchar(6) NOT NULL DEFAULT '',
  `code` varchar(32) NOT NULL DEFAULT '',
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
  KEY `code` (`code`),
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
INSERT INTO `elgg_users_entity` VALUES (73,'Admin','admin','4a42d21721bd0c958ac7ecac976be410','ZIhAwbPY','admin@admin.es','en','','no','yes',1477741138,1477741138,1477741132,0);
/*!40000 ALTER TABLE `elgg_users_entity` ENABLE KEYS */;
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
INSERT INTO `elgg_users_sessions` VALUES ('0lipfm0v7qcefp1tfvqoailgg0',1477741138,'__elgg_session|s:32:\"296655edc3b137a0b44a020471a54a96\";user|O:8:\"ElggUser\":8:{s:15:\"\0*\0url_override\";N;s:16:\"\0*\0icon_override\";N;s:16:\"\0*\0temp_metadata\";a:0:{}s:19:\"\0*\0temp_annotations\";a:0:{}s:24:\"\0*\0temp_private_settings\";a:0:{}s:11:\"\0*\0volatile\";a:0:{}s:13:\"\0*\0attributes\";a:25:{s:4:\"guid\";i:73;s:4:\"type\";s:4:\"user\";s:7:\"subtype\";s:1:\"0\";s:10:\"owner_guid\";s:1:\"0\";s:9:\"site_guid\";s:1:\"1\";s:14:\"container_guid\";s:1:\"0\";s:9:\"access_id\";s:1:\"2\";s:12:\"time_created\";s:10:\"1477741132\";s:12:\"time_updated\";s:10:\"1477741132\";s:11:\"last_action\";s:10:\"1477741138\";s:7:\"enabled\";s:3:\"yes\";s:12:\"tables_split\";i:2;s:13:\"tables_loaded\";i:2;s:4:\"name\";s:5:\"Admin\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"4a42d21721bd0c958ac7ecac976be410\";s:4:\"salt\";s:8:\"ZIhAwbPY\";s:5:\"email\";s:14:\"admin@admin.es\";s:8:\"language\";s:2:\"en\";s:4:\"code\";s:0:\"\";s:6:\"banned\";s:2:\"no\";s:5:\"admin\";s:3:\"yes\";s:16:\"prev_last_action\";s:10:\"1477741136\";s:10:\"last_login\";s:10:\"1477741132\";s:15:\"prev_last_login\";s:1:\"0\";}s:8:\"\0*\0valid\";b:0;}guid|i:73;id|i:73;username|s:5:\"admin\";name|s:5:\"Admin\";msg|a:0:{}');
/*!40000 ALTER TABLE `elgg_users_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'elgg'
--

--
-- Dumping routines for database 'elgg'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-29 13:43:22
