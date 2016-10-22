-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: 127.0.0.1    Database: plataforma
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
-- Dumping data for table `plataforma_access_collection_membership`
--

LOCK TABLES `plataforma_access_collection_membership` WRITE;
/*!40000 ALTER TABLE `plataforma_access_collection_membership` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_access_collection_membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_access_collections`
--

LOCK TABLES `plataforma_access_collections` WRITE;
/*!40000 ALTER TABLE `plataforma_access_collections` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_access_collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_annotations`
--

LOCK TABLES `plataforma_annotations` WRITE;
/*!40000 ALTER TABLE `plataforma_annotations` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_annotations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_api_users`
--

LOCK TABLES `plataforma_api_users` WRITE;
/*!40000 ALTER TABLE `plataforma_api_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_api_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_config`
--

LOCK TABLES `plataforma_config` WRITE;
/*!40000 ALTER TABLE `plataforma_config` DISABLE KEYS */;
INSERT INTO `plataforma_config` VALUES ('view','s:7:\"default\";',1),('language','s:2:\"en\";',1),('default_access','s:1:\"2\";',1),('allow_registration','b:1;',1),('walled_garden','b:0;',1),('allow_user_default_access','s:0:\"\";',1),('debug','s:7:\"WARNING\";',1);
/*!40000 ALTER TABLE `plataforma_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_datalists`
--

LOCK TABLES `plataforma_datalists` WRITE;
/*!40000 ALTER TABLE `plataforma_datalists` DISABLE KEYS */;
INSERT INTO `plataforma_datalists` VALUES ('filestore_run_once','1469990927'),('plugin_run_once','1469990927'),('elgg_widget_run_once','1469990927'),('installed','1469990946'),('path','/app/'),('dataroot','/var/www/static/'),('default_site','1'),('version','2014012000'),('simplecache_enabled','0'),('system_cache_enabled','0'),('processed_upgrades','a:45:{i:0;s:14:\"2008100701.php\";i:1;s:14:\"2008101303.php\";i:2;s:14:\"2009022701.php\";i:3;s:14:\"2009041701.php\";i:4;s:14:\"2009070101.php\";i:5;s:14:\"2009102801.php\";i:6;s:14:\"2010010501.php\";i:7;s:14:\"2010033101.php\";i:8;s:14:\"2010040201.php\";i:9;s:14:\"2010052601.php\";i:10;s:14:\"2010060101.php\";i:11;s:14:\"2010060401.php\";i:12;s:14:\"2010061501.php\";i:13;s:14:\"2010062301.php\";i:14;s:14:\"2010062302.php\";i:15;s:14:\"2010070301.php\";i:16;s:14:\"2010071001.php\";i:17;s:14:\"2010071002.php\";i:18;s:14:\"2010111501.php\";i:19;s:14:\"2010121601.php\";i:20;s:14:\"2010121602.php\";i:21;s:14:\"2010121701.php\";i:22;s:14:\"2010123101.php\";i:23;s:14:\"2011010101.php\";i:24;s:61:\"2011021800-1.8_svn-goodbye_walled_garden-083121a656d06894.php\";i:25;s:61:\"2011022000-1.8_svn-custom_profile_fields-390ac967b0bb5665.php\";i:26;s:60:\"2011030700-1.8_svn-blog_status_metadata-4645225d7b440876.php\";i:27;s:51:\"2011031300-1.8_svn-twitter_api-12b832a5a7a3e1bd.php\";i:28;s:57:\"2011031600-1.8_svn-datalist_grows_up-0b8aec5a55cc1e1c.php\";i:29;s:61:\"2011032000-1.8_svn-widgets_arent_plugins-61836261fa280a5c.php\";i:30;s:59:\"2011032200-1.8_svn-admins_like_widgets-7f19d2783c1680d3.php\";i:31;s:14:\"2011052801.php\";i:32;s:60:\"2011061200-1.8b1-sites_need_a_site_guid-6d9dcbf46c0826cc.php\";i:33;s:62:\"2011092500-1.8.0.1-forum_reply_river_view-5758ce8d86ac56ce.php\";i:34;s:54:\"2011123100-1.8.2-fix_friend_river-b17e7ff8345c2269.php\";i:35;s:53:\"2011123101-1.8.2-fix_blog_status-b14c2a0e7b9e7d55.php\";i:36;s:50:\"2012012000-1.8.3-ip_in_syslog-87fe0f068cf62428.php\";i:37;s:50:\"2012012100-1.8.3-system_cache-93100e7d55a24a11.php\";i:38;s:59:\"2012041800-1.8.3-dont_filter_passwords-c0ca4a18b38ae2bc.php\";i:39;s:58:\"2012041801-1.8.3-multiple_user_tokens-852225f7fd89f6c5.php\";i:40;s:59:\"2013030600-1.8.13-update_user_location-8999eb8bf1bdd9a3.php\";i:41;s:62:\"2013051700-1.8.15-add_missing_group_index-52a63a3a3ffaced2.php\";i:42;s:53:\"2013052900-1.8.15-ipv6_in_syslog-f5c2cc0196e9e731.php\";i:43;s:50:\"2013060900-1.8.15-site_secret-404fc165cf9e0ac9.php\";i:44;s:50:\"2014012000-1.8.18-remember_me-9a8a433685cf7be9.php\";}'),('admin_registered','1'),('simplecache_lastupdate_default','1469992477'),('simplecache_lastcached_default','1469992477'),('__site_secret__','zyUqxajxNnrTIYKCFg-v8dSaVFaUu2F0'),('simplecache_lastupdate_failsafe','0'),('simplecache_lastcached_failsafe','0'),('simplecache_lastupdate_foaf','0'),('simplecache_lastcached_foaf','0'),('simplecache_lastupdate_ical','0'),('simplecache_lastcached_ical','0'),('simplecache_lastupdate_installation','0'),('simplecache_lastcached_installation','0'),('simplecache_lastupdate_json','0'),('simplecache_lastcached_json','0'),('simplecache_lastupdate_opendd','0'),('simplecache_lastcached_opendd','0'),('simplecache_lastupdate_php','0'),('simplecache_lastcached_php','0'),('simplecache_lastupdate_rss','0'),('simplecache_lastcached_rss','0'),('simplecache_lastupdate_xml','0'),('simplecache_lastcached_xml','0'),('au_subgroups_bugfix_20121024a','1469991701'),('comment_tracker_update_20121025a','1469991715'),('group_tools_version_1_3','1469991882'),('spam_login_filter_upgrade_1','1469991915'),('simplecache_lastupdate_xls','0'),('simplecache_lastcached_xls','0');
/*!40000 ALTER TABLE `plataforma_datalists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_entities`
--

LOCK TABLES `plataforma_entities` WRITE;
/*!40000 ALTER TABLE `plataforma_entities` DISABLE KEYS */;
INSERT INTO `plataforma_entities` VALUES (1,'site',0,0,1,0,2,1469990946,1469990946,1469990946,'yes'),(2,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(3,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(4,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(5,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(6,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(7,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(8,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(9,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(10,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(11,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(80,'object',2,1,1,1,2,1469991794,1469991794,1469991794,'yes'),(13,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(14,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(15,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(16,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(17,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(18,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(19,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(20,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(21,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(22,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(23,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(24,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(25,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(26,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(27,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(28,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(29,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(30,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(31,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(32,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(33,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(34,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(35,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(36,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(37,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(38,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(39,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(40,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(41,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(42,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(43,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(44,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(45,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(46,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(47,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(48,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(49,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(50,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(51,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(52,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(53,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(54,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(55,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(56,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(57,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(58,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(59,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(60,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(61,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(62,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(63,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(64,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(65,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(66,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(67,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(68,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(69,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(70,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(71,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(72,'object',2,1,1,1,2,1469990946,1469990946,1469990946,'yes'),(73,'user',0,0,1,0,2,1469990982,1469990982,1469990982,'yes'),(74,'object',3,73,1,73,0,1469990982,1469990982,1469990982,'yes'),(75,'object',3,73,1,73,0,1469990982,1469990982,1469990982,'yes'),(76,'object',3,73,1,73,0,1469990982,1469990982,1469990982,'yes'),(77,'object',3,73,1,73,0,1469990982,1469990982,1469990982,'yes'),(78,'object',3,73,1,73,0,1469990982,1469990982,1469990982,'yes');
/*!40000 ALTER TABLE `plataforma_entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_entity_relationships`
--

LOCK TABLES `plataforma_entity_relationships` WRITE;
/*!40000 ALTER TABLE `plataforma_entity_relationships` DISABLE KEYS */;
INSERT INTO `plataforma_entity_relationships` VALUES (1,6,'active_plugin',1,1469990946),(2,7,'active_plugin',1,1469990946),(3,19,'active_plugin',1,1469990946),(4,27,'active_plugin',1,1469990946),(5,30,'active_plugin',1,1469990946),(6,33,'active_plugin',1,1469990946),(7,36,'active_plugin',1,1469990946),(8,37,'active_plugin',1,1469990946),(9,38,'active_plugin',1,1469990946),(10,39,'active_plugin',1,1469990946),(11,40,'active_plugin',1,1469990946),(12,41,'active_plugin',1,1469990946),(13,42,'active_plugin',1,1469990946),(14,43,'active_plugin',1,1469990946),(15,44,'active_plugin',1,1469990946),(17,47,'active_plugin',1,1469990946),(18,48,'active_plugin',1,1469990946),(19,52,'active_plugin',1,1469990946),(20,56,'active_plugin',1,1469990946),(21,64,'active_plugin',1,1469990946),(22,67,'active_plugin',1,1469990946),(23,71,'active_plugin',1,1469990946),(24,72,'active_plugin',1,1469990946),(25,73,'member_of_site',1,1469990982),(26,11,'active_plugin',1,1469991364),(27,16,'active_plugin',1,1469991377),(28,18,'active_plugin',1,1469991387),(29,20,'active_plugin',1,1469991394),(30,25,'active_plugin',1,1469991438),(31,63,'active_plugin',1,1469991575),(32,70,'active_plugin',1,1469991615),(33,3,'active_plugin',1,1469991645),(34,35,'active_plugin',1,1469991659),(35,51,'active_plugin',1,1469991673),(36,5,'active_plugin',1,1469991701),(38,32,'active_plugin',1,1469991882),(39,61,'active_plugin',1,1469991915),(40,15,'active_plugin',1,1469991940),(41,28,'active_plugin',1,1469991979),(42,24,'active_plugin',1,1469992060),(43,17,'active_plugin',1,1469992071),(44,59,'active_plugin',1,1469992169),(45,60,'active_plugin',1,1469992175),(46,58,'active_plugin',1,1469992187),(47,68,'active_plugin',1,1469992212),(48,66,'active_plugin',1,1469992267),(49,80,'active_plugin',1,1469992331),(50,57,'active_plugin',1,1469992419),(51,53,'active_plugin',1,1469992452),(52,54,'active_plugin',1,1469992455),(53,55,'active_plugin',1,1469992461);
/*!40000 ALTER TABLE `plataforma_entity_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_entity_subtypes`
--

LOCK TABLES `plataforma_entity_subtypes` WRITE;
/*!40000 ALTER TABLE `plataforma_entity_subtypes` DISABLE KEYS */;
INSERT INTO `plataforma_entity_subtypes` VALUES (1,'object','file','ElggFile'),(2,'object','plugin','ElggPlugin'),(3,'object','widget','ElggWidget'),(4,'object','blog','ElggBlog'),(5,'object','thewire','ElggWire'),(6,'object','admin_notice',''),(7,'object','album','TidypicsAlbum'),(8,'object','image','TidypicsImage'),(9,'object','tidypics_batch','TidypicsBatch');
/*!40000 ALTER TABLE `plataforma_entity_subtypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_geocode_cache`
--

LOCK TABLES `plataforma_geocode_cache` WRITE;
/*!40000 ALTER TABLE `plataforma_geocode_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_geocode_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_groups_entity`
--

LOCK TABLES `plataforma_groups_entity` WRITE;
/*!40000 ALTER TABLE `plataforma_groups_entity` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_groups_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_hmac_cache`
--

LOCK TABLES `plataforma_hmac_cache` WRITE;
/*!40000 ALTER TABLE `plataforma_hmac_cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_hmac_cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_metadata`
--

LOCK TABLES `plataforma_metadata` WRITE;
/*!40000 ALTER TABLE `plataforma_metadata` DISABLE KEYS */;
INSERT INTO `plataforma_metadata` VALUES (1,1,1,2,'text',0,2,1469990946,'yes'),(2,73,3,4,'text',73,2,1469990982,'yes'),(3,73,5,4,'text',0,2,1469990982,'yes'),(4,73,6,7,'text',0,2,1469990982,'yes');
/*!40000 ALTER TABLE `plataforma_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_metastrings`
--

LOCK TABLES `plataforma_metastrings` WRITE;
/*!40000 ALTER TABLE `plataforma_metastrings` DISABLE KEYS */;
INSERT INTO `plataforma_metastrings` VALUES (1,'email'),(2,''),(3,'notification:method:email'),(4,'1'),(5,'validated'),(6,'validated_method'),(7,'admin_user'),(8,'admin_notice_id'),(9,'categories_admin_notice_no_categories');
/*!40000 ALTER TABLE `plataforma_metastrings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_objects_entity`
--

LOCK TABLES `plataforma_objects_entity` WRITE;
/*!40000 ALTER TABLE `plataforma_objects_entity` DISABLE KEYS */;
INSERT INTO `plataforma_objects_entity` VALUES (2,'akismet',''),(3,'analytics',''),(4,'assemblies',''),(5,'au_subgroups',''),(6,'blog',''),(7,'bookmarks',''),(8,'bright-theme',''),(9,'bright-theme-1.0',''),(10,'captcha',''),(11,'categories',''),(80,'comment_tracker',''),(13,'crud',''),(14,'custom_index',''),(15,'custom_index_widgets',''),(16,'dashboard',''),(17,'developers',''),(18,'diagnostics',''),(19,'dokuwiki',''),(20,'embed',''),(21,'embed_extender',''),(22,'embedvideo',''),(23,'event_calendar',''),(24,'export_users_csv',''),(25,'externalpages',''),(26,'fb_commentapps',''),(27,'file',''),(28,'file_tools',''),(29,'following',''),(30,'garbagecollector',''),(31,'group_operators',''),(32,'group_tools',''),(33,'groups',''),(34,'gutwacaptcha',''),(35,'honeypot',''),(36,'htmlawed',''),(37,'invitefriends',''),(38,'likes',''),(39,'logbrowser',''),(40,'logrotate',''),(41,'members',''),(42,'messageboard',''),(43,'messages',''),(44,'notifications',''),(45,'notifications_tools',''),(46,'oauth_api',''),(47,'pages',''),(48,'profile',''),(49,'proposals',''),(50,'questions',''),(51,'recaptcha',''),(52,'reportedcontent',''),(53,'rm_group_autosubscription',''),(54,'rm_group_default_fields',''),(55,'rm_group_reports',''),(56,'search',''),(57,'simplepie',''),(58,'somenergia-theme',''),(59,'somenergia_calendar',''),(60,'somenergia_drive',''),(61,'spam_login_filter',''),(62,'spam_throttle',''),(63,'tagcloud',''),(64,'thewire',''),(65,'threads',''),(66,'tidypics',''),(67,'tinymce',''),(68,'tracker',''),(69,'twitter',''),(70,'twitter_api',''),(71,'uservalidationbyemail',''),(72,'zaudio',''),(74,'',''),(75,'',''),(76,'',''),(77,'',''),(78,'','');
/*!40000 ALTER TABLE `plataforma_objects_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_private_settings`
--

LOCK TABLES `plataforma_private_settings` WRITE;
/*!40000 ALTER TABLE `plataforma_private_settings` DISABLE KEYS */;
INSERT INTO `plataforma_private_settings` VALUES (1,2,'elgg:internal:priority','4'),(2,3,'elgg:internal:priority','5'),(3,4,'elgg:internal:priority','6'),(4,5,'elgg:internal:priority','69'),(5,6,'elgg:internal:priority','1'),(6,7,'elgg:internal:priority','2'),(7,8,'elgg:internal:priority','7'),(8,9,'elgg:internal:priority','8'),(9,10,'elgg:internal:priority','9'),(10,11,'elgg:internal:priority','3'),(96,80,'elgg:internal:priority','67'),(12,13,'elgg:internal:priority','10'),(13,14,'elgg:internal:priority','11'),(14,15,'elgg:internal:priority','12'),(15,16,'elgg:internal:priority','13'),(16,17,'elgg:internal:priority','14'),(17,18,'elgg:internal:priority','15'),(18,19,'elgg:internal:priority','70'),(19,20,'elgg:internal:priority','16'),(20,21,'elgg:internal:priority','17'),(21,22,'elgg:internal:priority','18'),(22,23,'elgg:internal:priority','19'),(23,24,'elgg:internal:priority','20'),(24,25,'elgg:internal:priority','21'),(25,26,'elgg:internal:priority','22'),(26,27,'elgg:internal:priority','23'),(27,28,'elgg:internal:priority','24'),(28,29,'elgg:internal:priority','25'),(29,30,'elgg:internal:priority','26'),(30,31,'elgg:internal:priority','27'),(31,32,'elgg:internal:priority','68'),(32,33,'elgg:internal:priority','28'),(33,34,'elgg:internal:priority','29'),(34,35,'elgg:internal:priority','30'),(35,36,'elgg:internal:priority','31'),(36,37,'elgg:internal:priority','32'),(37,38,'elgg:internal:priority','33'),(38,39,'elgg:internal:priority','34'),(39,40,'elgg:internal:priority','35'),(40,41,'elgg:internal:priority','36'),(41,42,'elgg:internal:priority','37'),(42,43,'elgg:internal:priority','38'),(43,44,'elgg:internal:priority','39'),(44,45,'elgg:internal:priority','40'),(45,46,'elgg:internal:priority','41'),(46,47,'elgg:internal:priority','42'),(47,48,'elgg:internal:priority','43'),(48,49,'elgg:internal:priority','44'),(49,50,'elgg:internal:priority','45'),(50,51,'elgg:internal:priority','46'),(51,52,'elgg:internal:priority','47'),(52,53,'elgg:internal:priority','48'),(53,54,'elgg:internal:priority','49'),(54,55,'elgg:internal:priority','50'),(55,56,'elgg:internal:priority','51'),(56,57,'elgg:internal:priority','52'),(57,58,'elgg:internal:priority','71'),(58,59,'elgg:internal:priority','53'),(59,60,'elgg:internal:priority','54'),(60,61,'elgg:internal:priority','55'),(61,62,'elgg:internal:priority','56'),(62,63,'elgg:internal:priority','57'),(63,64,'elgg:internal:priority','58'),(64,65,'elgg:internal:priority','59'),(65,66,'elgg:internal:priority','60'),(66,67,'elgg:internal:priority','61'),(67,68,'elgg:internal:priority','62'),(68,69,'elgg:internal:priority','63'),(69,70,'elgg:internal:priority','64'),(70,71,'elgg:internal:priority','65'),(71,72,'elgg:internal:priority','66'),(72,74,'handler','control_panel'),(73,74,'context','admin'),(74,74,'column','1'),(75,74,'order','0'),(76,75,'handler','admin_welcome'),(77,75,'context','admin'),(78,75,'order','10'),(79,75,'column','1'),(80,76,'handler','online_users'),(81,76,'context','admin'),(82,76,'column','2'),(83,76,'order','0'),(84,77,'handler','new_users'),(85,77,'context','admin'),(86,77,'order','10'),(87,77,'column','2'),(88,78,'handler','content_stats'),(89,78,'context','admin'),(90,78,'order','20'),(91,78,'column','2'),(92,76,'num_display','8'),(93,77,'num_display','5'),(94,78,'num_display','8'),(97,15,'ciw_layout','index_2rmsb'),(98,15,'ciw_showdashboard','yes'),(99,17,'display_errors','1'),(100,17,'screen_log','1'),(101,17,'show_strings','0'),(102,17,'wrap_views','0'),(103,17,'log_events','0'),(104,66,'tagging',''),(105,66,'view_count','1'),(106,66,'uploader',''),(107,66,'exif',''),(108,66,'download_link','1'),(109,66,'album_comments',''),(110,66,'slideshow',''),(111,66,'maxfilesize','5'),(112,66,'image_lib','GD'),(113,66,'img_river_view','batch'),(114,66,'album_river_view','cover'),(115,66,'river_comments_thumbnails','none'),(116,66,'image_sizes','a:6:{s:18:\"large_image_height\";i:600;s:17:\"large_image_width\";i:600;s:18:\"small_image_height\";i:153;s:17:\"small_image_width\";i:153;s:17:\"tiny_image_height\";i:60;s:16:\"tiny_image_width\";i:60;}'),(117,66,'notify_interval','86400');
/*!40000 ALTER TABLE `plataforma_private_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_river`
--

LOCK TABLES `plataforma_river` WRITE;
/*!40000 ALTER TABLE `plataforma_river` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_river` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_sites_entity`
--

LOCK TABLES `plataforma_sites_entity` WRITE;
/*!40000 ALTER TABLE `plataforma_sites_entity` DISABLE KEYS */;
INSERT INTO `plataforma_sites_entity` VALUES (1,'Plataforma','','http://localhost:8000/');
/*!40000 ALTER TABLE `plataforma_sites_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_system_log`
--

LOCK TABLES `plataforma_system_log` WRITE;
/*!40000 ALTER TABLE `plataforma_system_log` DISABLE KEYS */;
INSERT INTO `plataforma_system_log` VALUES (1,2,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(2,3,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(3,4,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(4,5,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(5,6,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(6,7,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(7,8,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(8,9,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(9,10,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(10,11,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(11,12,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(12,13,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(13,14,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(14,15,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(15,16,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(16,17,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(17,18,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(18,19,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(19,20,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(20,21,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(21,22,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(22,23,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(23,24,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(24,25,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(25,26,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(26,27,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(27,28,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(28,29,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(29,30,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(30,31,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(31,32,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(32,33,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(33,34,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(34,35,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(35,36,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(36,37,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(37,38,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(38,39,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(39,40,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(40,41,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(41,42,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(42,43,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(43,44,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(44,45,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(45,46,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(46,47,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(47,48,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(48,49,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(49,50,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(50,51,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(51,52,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(52,53,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(53,54,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(54,55,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(55,56,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(56,57,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(57,58,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(58,59,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(59,60,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(60,61,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(61,62,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(62,63,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(63,64,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(64,65,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(65,66,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(66,67,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(67,68,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(68,69,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(69,70,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(70,71,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(71,72,'ElggPlugin','object','plugin','create',0,1,2,'yes',1469990946,'172.17.0.1'),(72,1,'ElggRelationship','relationship','active_plugin','create',0,0,2,'yes',1469990946,'172.17.0.1'),(73,25,'ElggRelationship','relationship','member_of_site','create',0,0,2,'yes',1469990982,'172.17.0.1'),(74,73,'ElggUser','user','','create',0,0,2,'yes',1469990982,'172.17.0.1'),(75,2,'ElggMetadata','metadata','notification:method:email','create',0,73,2,'yes',1469990982,'172.17.0.1'),(76,74,'ElggWidget','object','widget','create',0,73,0,'yes',1469990982,'172.17.0.1'),(77,75,'ElggWidget','object','widget','create',0,73,0,'yes',1469990982,'172.17.0.1'),(78,76,'ElggWidget','object','widget','create',0,73,0,'yes',1469990982,'172.17.0.1'),(79,77,'ElggWidget','object','widget','create',0,73,0,'yes',1469990982,'172.17.0.1'),(80,78,'ElggWidget','object','widget','create',0,73,0,'yes',1469990982,'172.17.0.1'),(81,73,'ElggUser','user','','make_admin',0,0,2,'yes',1469990982,'172.17.0.1'),(82,3,'ElggMetadata','metadata','validated','create',0,0,2,'yes',1469990982,'172.17.0.1'),(83,4,'ElggMetadata','metadata','validated_method','create',0,0,2,'yes',1469990982,'172.17.0.1'),(84,73,'ElggUser','user','','update',73,0,2,'yes',1469990982,'172.17.0.1'),(85,73,'ElggUser','user','','login',73,0,2,'yes',1469990982,'172.17.0.1'),(86,26,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991364,'172.17.0.1'),(87,5,'ElggMetadata','metadata','admin_notice_id','create',73,73,0,'yes',1469991364,'172.17.0.1'),(88,79,'ElggObject','object','admin_notice','create',73,73,0,'yes',1469991364,'172.17.0.1'),(89,27,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991377,'172.17.0.1'),(90,28,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991387,'172.17.0.1'),(91,29,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991394,'172.17.0.1'),(92,79,'ElggObject','object','admin_notice','delete',73,73,0,'yes',1469991421,'172.17.0.1'),(93,5,'ElggMetadata','metadata','admin_notice_id','delete',73,73,0,'yes',1469991421,'172.17.0.1'),(94,30,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991438,'172.17.0.1'),(95,31,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991575,'172.17.0.1'),(96,32,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991615,'172.17.0.1'),(97,33,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991645,'172.17.0.1'),(98,34,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991659,'172.17.0.1'),(99,35,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991673,'172.17.0.1'),(100,36,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991701,'172.17.0.1'),(101,37,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991715,'172.17.0.1'),(102,12,'ElggPlugin','object','plugin','update',73,1,2,'yes',1469991715,'172.17.0.1'),(103,12,'ElggPlugin','object','plugin','delete',73,1,2,'yes',1469991715,'172.17.0.1'),(104,80,'ElggPlugin','object','plugin','create',73,1,2,'yes',1469991794,'172.17.0.1'),(105,38,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991882,'172.17.0.1'),(106,39,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991915,'172.17.0.1'),(107,40,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991940,'172.17.0.1'),(108,41,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469991979,'172.17.0.1'),(109,42,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992060,'172.17.0.1'),(110,43,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992071,'172.17.0.1'),(111,44,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992169,'172.17.0.1'),(112,45,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992175,'172.17.0.1'),(113,46,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992187,'172.17.0.1'),(114,47,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992212,'172.17.0.1'),(115,48,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992267,'172.17.0.1'),(116,49,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992331,'172.17.0.1'),(117,50,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992419,'172.17.0.1'),(118,51,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992452,'172.17.0.1'),(119,52,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992455,'172.17.0.1'),(120,53,'ElggRelationship','relationship','active_plugin','create',73,0,2,'yes',1469992461,'172.17.0.1'),(121,16,'ElggRelationship','relationship','active_plugin','delete',73,0,2,'yes',1469992477,'172.17.0.1');
/*!40000 ALTER TABLE `plataforma_system_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_users_apisessions`
--

LOCK TABLES `plataforma_users_apisessions` WRITE;
/*!40000 ALTER TABLE `plataforma_users_apisessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `plataforma_users_apisessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_users_entity`
--

LOCK TABLES `plataforma_users_entity` WRITE;
/*!40000 ALTER TABLE `plataforma_users_entity` DISABLE KEYS */;
INSERT INTO `plataforma_users_entity` VALUES (73,'Admin','admin','86691949dca4254cf24a4062f1eeee22','5x0Dnqbi','admin@admin.es','en','','no','yes',1469992507,1469992507,1469990982,0);
/*!40000 ALTER TABLE `plataforma_users_entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `plataforma_users_sessions`
--

LOCK TABLES `plataforma_users_sessions` WRITE;
/*!40000 ALTER TABLE `plataforma_users_sessions` DISABLE KEYS */;
INSERT INTO `plataforma_users_sessions` VALUES ('j539uamrcap9e3dqfb7mrt0vj5',1469990963,'__elgg_session|s:32:\"697a77b19a9c1487da7566f642daa689\";msg|a:0:{}'),('3o8crd1de7nb6ifrue110bmtr6',1469992507,'__elgg_session|s:32:\"697a77b19a9c1487da7566f642daa689\";msg|a:0:{}user|O:8:\"ElggUser\":8:{s:15:\"\0*\0url_override\";N;s:16:\"\0*\0icon_override\";N;s:16:\"\0*\0temp_metadata\";a:0:{}s:19:\"\0*\0temp_annotations\";a:0:{}s:24:\"\0*\0temp_private_settings\";a:0:{}s:11:\"\0*\0volatile\";a:0:{}s:13:\"\0*\0attributes\";a:25:{s:4:\"guid\";i:73;s:4:\"type\";s:4:\"user\";s:7:\"subtype\";s:1:\"0\";s:10:\"owner_guid\";s:1:\"0\";s:9:\"site_guid\";s:1:\"1\";s:14:\"container_guid\";s:1:\"0\";s:9:\"access_id\";s:1:\"2\";s:12:\"time_created\";s:10:\"1469990982\";s:12:\"time_updated\";s:10:\"1469990982\";s:11:\"last_action\";s:10:\"1469992507\";s:7:\"enabled\";s:3:\"yes\";s:12:\"tables_split\";i:2;s:13:\"tables_loaded\";i:2;s:4:\"name\";s:5:\"Admin\";s:8:\"username\";s:5:\"admin\";s:8:\"password\";s:32:\"86691949dca4254cf24a4062f1eeee22\";s:4:\"salt\";s:8:\"5x0Dnqbi\";s:5:\"email\";s:14:\"admin@admin.es\";s:8:\"language\";s:2:\"en\";s:4:\"code\";s:0:\"\";s:6:\"banned\";s:2:\"no\";s:5:\"admin\";s:3:\"yes\";s:16:\"prev_last_action\";s:10:\"1469992507\";s:10:\"last_login\";s:10:\"1469990982\";s:15:\"prev_last_login\";s:1:\"0\";}s:8:\"\0*\0valid\";b:0;}guid|i:73;id|i:73;username|s:5:\"admin\";name|s:5:\"Admin\";');
/*!40000 ALTER TABLE `plataforma_users_sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-31 21:16:59
