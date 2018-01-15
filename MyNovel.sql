-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: MyNovelDB
-- ------------------------------------------------------
-- Server version	5.7.15

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
-- Table structure for table `Save`
--

DROP TABLE IF EXISTS `Save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Save` (
  `save_id` int(11) NOT NULL,
  `scenario_id` int(11) NOT NULL,
  `playername` varchar(64) NOT NULL,
  PRIMARY KEY (`save_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Save`
--

LOCK TABLES `Save` WRITE;
/*!40000 ALTER TABLE `Save` DISABLE KEYS */;
/*!40000 ALTER TABLE `Save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Scenario`
--

DROP TABLE IF EXISTS `Scenario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Scenario` (
  `scenario_id` int(11) NOT NULL,
  `command` varchar(10) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`scenario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Scenario`
--

LOCK TABLES `Scenario` WRITE;
/*!40000 ALTER TABLE `Scenario` DISABLE KEYS */;
INSERT INTO `Scenario` VALUES (1,'TXT','﻿むかしむかし、あるところに、'),(2,'TXT','おじいさんと　おばあさんがすんでいました。'),(3,'TXT','あるひのこと。'),(4,'TXT','おじいさんは　やまへ　しばかりに、'),(5,'TXT','おばあさんは　かわへ　せんたくに　いきました。'),(6,'TXT','おばあさんが　かわで　じゃぶじゃぶ　せんたくをしていると、'),(7,'IMAGE','url(image/page02.jpg)'),(8,'TXT','どんぶらこ'),(9,'IMAGE','url(image/page03.jpg)'),(10,'TXT','どんぶらこと、'),(11,'IMAGE','url(image/page04.jpg)'),(12,'TXT','おおきな　おおきな　ももが、ながれてきました。'),(13,'IMAGE','url(image/page05.jpg)'),(14,'TXT','「なんて　おいしそうな　ももでしょう！」'),(15,'TXT','おばあさんは　ももを　ひろってかえって、'),(16,'TXT','おじいさんと　いっしょに　たべることにしました。'),(17,'IMAGE','url(image/page06.jpg)'),(18,'TXT','おばあさんが　ももを　きろうとすると、'),(19,'IMAGE','url(image/page07.jpg)'),(20,'TXT','ひとりでに　ももが　ぱかんと　われて、'),(21,'TXT','げんきな　おとおのこが　とびだしてきました。'),(22,'TXT','「ももから　こどもが　うまれましたよ！」'),(23,'TXT','「こりゃあ、おぼどろいた！」'),(24,'TXT','おじいさんと　おばあさんは、おおよろこび。'),(25,'TXT','このこに　もも・##NAME##・たろうと　なまえを　つけて、'),(26,'TXT','たいへん　かわいがりました。'),(27,'TXT','もも・##NAME##・たろうは、'),(28,'IMAGE','url(image/page08.jpg)'),(29,'TXT','むしゃむしゃ　ぱくぱく、'),(30,'TXT','なんでも　たくさん　たべました。'),(31,'IMAGE','url(image/page09.jpg)'),(32,'TXT','たべた　ぶんだけ　ずんずん　おおきくなり、'),(33,'IMAGE','url(image/page10.jpg)'),(34,'TXT','すごい　ちからもちに　そだっていきました。'),(35,'TXT','そのころ　むらでは、'),(36,'IMAGE','url(image/page11.jpg)'),(37,'BGM','audio/bgm3.wav'),(38,'TXT','おそろしい　おにたちが　やってきて、'),(39,'TXT','わるいことばかり　していました。'),(40,'TXT','おにたちは　いえを　こわして、'),(41,'TXT','たべものや　だいじなたからを　ぬすんでいってしまいます。'),(42,'TXT','もも・##NAME##・たろうは、'),(43,'IMAGE','url(image/page12.jpg)'),(44,'TXT','むらの　ひとたちが　こまっているのを'),(45,'TXT','だまって　みていることが　できませんでした。'),(46,'TXT','「よし、おにたいじに　いくぞ！」'),(47,'IMAGE','url(image/page13.jpg)'),(48,'BGM','audio/bgm2.wav'),(49,'TXT','おばあさんは　にっぽんいちの　きびだんごを'),(50,'TXT','たくさん　つくってくれました。'),(51,'TXT','おじいさんは　にっぽんいちの　もも・##NAME##・たろうと　かいた　はたを'),(52,'TXT','つくってくれました。'),(53,'TXT','もも・##NAME##・たろうは、きびだんごを　こしに　つけて'),(54,'TXT','いさましく　いえを　でました。'),(55,'TXT','もも・##NAME##・たろうが、げんきいっぱい　あるいていると、'),(56,'IMAGE','url(image/page14.jpg)'),(57,'TXT','いぬが　やってきて、いいました。'),(58,'TXT','「もも・##NAME##・たろうさん、'),(59,'TXT','どこへ　いくのですか。わんわん。」'),(60,'TXT','「おにがしまに　おにたいじ。」'),(61,'TXT','「おこしに　つけているのは　なんですか。わんわん。」'),(62,'TXT','「にっぽんいちの　きびだんご。」'),(63,'TXT','「ひとつ　くださいな。そしたら　けらいに　なりましょう。わんわん。」'),(64,'TXT','「じゃあ、ひとつ　あげよう。」'),(65,'TXT','いぬは、きびだんごを　むしゃむしゃ　たべると、'),(66,'TXT','けらいに　なりました。'),(67,'TXT','しばらく　いくと、こんどは　'),(68,'IMAGE','url(image/page15.jpg)'),(69,'TXT','さるが　やってきて　いいました。'),(70,'TXT','「もも・##NAME##・たろうさん、'),(71,'TXT','どこへ　いくのですか。きゃっきゃっ。」'),(72,'TXT','「おにがしまに　おにたいじ。」'),(73,'TXT','「おこしに　つけているのは　なんですか。きゃっきゃっ。」'),(74,'TXT','「にっぽんいちの　きびだんご。」'),(75,'TXT','「ひとつ　くださいな。'),(76,'TXT','そしたら　けらいに　なりましょう。きゃっきゃっ。」'),(77,'TXT','「じゃあ、ひとつ　あげよう。」'),(78,'TXT','さるは、きびだんごを　むしゃむしゃ　たべると、'),(79,'TXT','けらいに　なりました。'),(80,'TXT','つづいて、'),(81,'IMAGE','url(image/page16.jpg)'),(82,'TXT','きじも　やってきました。'),(83,'TXT','「もも・##NAME##・たろうさん、'),(84,'TXT','どこへ　いくのですか。けんけーん。」'),(85,'TXT','「おにがしまに　おにたいじ。」'),(86,'TXT','「おこしに　つけているのは　なんですか。けんけーん。」'),(87,'TXT','「にっぽんいちの　きびだんご。」'),(88,'TXT','「ひとつ　くださいな。そしたら　けらいに　なりましょう。けんけーん。」'),(89,'TXT','「じゃあ、ひとつ　あげよう。」'),(90,'TXT','きじは、きびだんごを　むしゃむしゃ　たべると'),(91,'TXT','けらいに　なりました。'),(92,'TXT','こうして、もも・##NAME##・たろうには、'),(93,'TXT','いぬ　さる　きじの　おともが　できました。'),(94,'IMAGE','url(image/page17.jpg)'),(95,'TXT','うみべに　ついた、'),(96,'TXT','もも・##NAME##・たろうと　さんびきの　けらいたち。'),(97,'TXT','ふねに　のりこみ、おにがしまを　めざします。'),(98,'TXT','えんやーとっと、えんやーとっと。'),(99,'TXT','もも・##NAME##・たろうたちは'),(100,'TXT','ちからを　あわせて　ふねを　こぎました。'),(101,'TXT','「みえてきたぞ。おにがしまだ！」'),(102,'TXT','まずは、きじが　そらから　ようすを　みようと　とびたちました。'),(103,'TXT','「もも・##NAME##・たろうさん、'),(104,'TXT','おにどもは　さかもりの　まっさいちゅうです。'),(105,'TXT','みんな　よっぱらっています！けんけーん。」'),(106,'IMAGE','url(image/page18.jpg)'),(107,'BGM','audio/bgm3.wav'),(108,'TXT','おにがしまに　ついた　もも・##NAME##・たろうは'),(109,'TXT','「やいやい、わるい　おにどもめ。'),(110,'TXT','この　もも・##NAME##・たろうが　せいばつに　きたぞ！」'),(111,'TXT','と　おおきな　こえで　さけびました。'),(112,'TXT','さるが　するするっと　へいを　よじのぼって、'),(113,'TXT','なかから　もんを　あけました。'),(114,'IMAGE','url(image/page19.jpg)'),(115,'TXT','とつぜん　あらわれた　もも・##NAME##・たろうに、'),(116,'TXT','おにどもは　おおあわて。'),(117,'TXT','あっけにとられている　おにどもを'),(118,'TXT','もも・##NAME##・たろうは　つぎからつぎへと　なげとばします。'),(119,'TXT','さんびきの　けらいも、だいかつやく。'),(120,'IMAGE','url(image/page20.jpg)'),(121,'TXT','いぬは　おにの　あしに　かみつき、'),(122,'IMAGE','url(image/page21.jpg)'),(123,'TXT','さるは　おにの　かおを　ひっかき、'),(124,'IMAGE','url(image/page22.jpg)'),(125,'TXT','きじは　おにの　めだまを　つっつきます。'),(126,'TXT','もも・##NAME##・たろうたちは、'),(127,'TXT','おにどもを　かたっぱしから　やっつけてしまいました。'),(128,'IMAGE','url(image/page23.jpg)'),(129,'TXT','「ええい、なまいきな　やつらめ。おれさまが　あいてだ！」'),(130,'TXT','さいごに、おおきな　おにの　おやぶんが、'),(131,'TXT','かなぼうを　ぶんぶん　ふりまわしながら　あらわれました。'),(132,'TXT','おにの　おやぶんは、'),(133,'TXT','もも・##NAME##・たろうの　あたま　めがけて、'),(134,'TXT','かなぼうを　ふりおろします。'),(135,'TXT','「もも・##NAME##・たろうさん、あぶない！'),(136,'TXT','わん、きゃっ、けーん！」'),(137,'TXT','もも・##NAME##・たろうは　かなぼうを　さっと　かわして、'),(138,'IMAGE','url(image/page24.jpg)'),(139,'TXT','おにの　おやぶんを　なげとばして　しまいました。'),(140,'IMAGE','url(image/page25.jpg)'),(141,'TXT','さすがの　おにの　おやぶんも　こうさんです。'),(142,'TXT','「どうか　おゆるしください。'),(143,'TXT','ぬすんだ　たからは、ぜんぶ　おかえしします。」'),(144,'TXT','「よし。にどと　わるいことは　するなよ。」'),(145,'TXT','もも・##NAME##・たろうたちは、'),(146,'TXT','とりもどした　たからを　ふねに　つみこみ、'),(147,'TXT','うちへ　かえっていきました。'),(148,'IMAGE','url(image/page26.jpg)'),(149,'BGM','audio/bgm1.wav'),(150,'TXT','おじいさんと　おばあさんは、'),(151,'TXT','げんきに　かえってきた　もも・##NAME##・たろうを　みて'),(152,'TXT','おおよろこび。'),(153,'TXT','それからは　おにどもも　こなくなり、'),(154,'TXT','もも・##NAME##・たろうは、'),(155,'TXT','おじいさんと　おばあさんと　さんにんで、'),(156,'TXT','いつまでも　しあわせに　くらしました。'),(157,'TXT','めでたしめでたし。'),(158,'END','end.html');
/*!40000 ALTER TABLE `Scenario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-31  1:04:01
