-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: moodle_project
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.10.1

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
-- Table structure for table `activits`
--

DROP TABLE IF EXISTS `activits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activit_description` text NOT NULL,
  `activit_topic` int(11) NOT NULL,
  `activit_title` varchar(255) NOT NULL,
  `activit_tip` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_activits_topic_idx` (`activit_topic`),
  CONSTRAINT `fk_activits_topic` FOREIGN KEY (`activit_topic`) REFERENCES `topics` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activits`
--

LOCK TABLES `activits` WRITE;
/*!40000 ALTER TABLE `activits` DISABLE KEYS */;
/*!40000 ALTER TABLE `activits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activits_answer`
--

DROP TABLE IF EXISTS `activits_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activits_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_activit` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date_answer` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_activits_answer_user_idx` (`id_user`),
  KEY `fk_activits_answer_activit_idx` (`id_activit`),
  CONSTRAINT `fk_activits_answer_activit` FOREIGN KEY (`id_activit`) REFERENCES `activits` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_activits_answer_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activits_answer`
--

LOCK TABLES `activits_answer` WRITE;
/*!40000 ALTER TABLE `activits_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `activits_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_activit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_messages`
--

DROP TABLE IF EXISTS `chat_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  `id_chat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_chat_messages_user_idx` (`id_user`),
  KEY `fk_chat_messages_chat_idx` (`id_chat`),
  CONSTRAINT `fk_chat_messages_chat` FOREIGN KEY (`id_chat`) REFERENCES `chat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_chat_messages_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_messages`
--

LOCK TABLES `chat_messages` WRITE;
/*!40000 ALTER TABLE `chat_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_disciplines`
--

DROP TABLE IF EXISTS `course_disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `id_discipline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_course_disciplines_course_idx` (`id_course`),
  KEY `fk_course_disciplines_disciplines_idx` (`id_discipline`),
  CONSTRAINT `fk_course_disciplines_course` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_course_disciplines_disciplines` FOREIGN KEY (`id_discipline`) REFERENCES `disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_disciplines`
--

LOCK TABLES `course_disciplines` WRITE;
/*!40000 ALTER TABLE `course_disciplines` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(100) NOT NULL,
  `course_description` text NOT NULL,
  `course_status` int(11) NOT NULL,
  `course_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_course_status_idx` (`course_status`),
  CONSTRAINT `fk_course_status` FOREIGN KEY (`course_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Ciência da Computação','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, error non aspernatur quasi dolorum velit.',1,'2013-11-20 21:33:00');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cousers_team`
--

DROP TABLE IF EXISTS `cousers_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cousers_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cousers_course_idx` (`id_course`),
  KEY `fk_cousers_team_team_idx` (`id_team`),
  CONSTRAINT `fk_cousers_course` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cousers_team_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cousers_team`
--

LOCK TABLES `cousers_team` WRITE;
/*!40000 ALTER TABLE `cousers_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `cousers_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplines`
--

DROP TABLE IF EXISTS `disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discipline_title` varchar(100) NOT NULL,
  `discipline_description` text NOT NULL,
  `discipline_status` int(11) NOT NULL,
  `id_type_disciplines` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_disciplines_status_idx` (`discipline_status`),
  KEY `fk_disciplines_type_idx` (`id_type_disciplines`),
  CONSTRAINT `fk_disciplines_status` FOREIGN KEY (`discipline_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplines_type` FOREIGN KEY (`id_type_disciplines`) REFERENCES `type_disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplines`
--

LOCK TABLES `disciplines` WRITE;
/*!40000 ALTER TABLE `disciplines` DISABLE KEYS */;
INSERT INTO `disciplines` VALUES (1,'Redes para computação I','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptate.',1,1),(2,'Redes para computação II','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptate.',1,1),(3,'Redes para computação I','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptate.',1,2),(4,'Redes para computação II','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptate.',1,2);
/*!40000 ALTER TABLE `disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplines_team`
--

DROP TABLE IF EXISTS `disciplines_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disciplines_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_discipline` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_disciplines_team_team_idx` (`id_team`),
  KEY `fk_disciplines_team_discipline_idx` (`id_discipline`),
  CONSTRAINT `fk_disciplines_team_discipline` FOREIGN KEY (`id_discipline`) REFERENCES `disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplines_team_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplines_team`
--

LOCK TABLES `disciplines_team` WRITE;
/*!40000 ALTER TABLE `disciplines_team` DISABLE KEYS */;
/*!40000 ALTER TABLE `disciplines_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_images_idx` (`id_user`),
  CONSTRAINT `fk_users_images` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_users`
--

DROP TABLE IF EXISTS `log_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `log_username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_log_users_idx` (`id_user`),
  CONSTRAINT `fk_users_log_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_users`
--

LOCK TABLES `log_users` WRITE;
/*!40000 ALTER TABLE `log_users` DISABLE KEYS */;
INSERT INTO `log_users` VALUES (1,1,'root'),(2,1,'root'),(3,1,'root'),(4,1,'root'),(5,1,'root'),(6,1,'root'),(7,1,'root'),(8,1,'root'),(9,2,'admin'),(10,3,'professor'),(11,4,'aluno'),(12,3,'professor'),(13,1,'root'),(14,3,'professor'),(15,2,'admin'),(16,1,'root'),(17,3,'professor');
/*!40000 ALTER TABLE `log_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_activit` int(11) NOT NULL,
  `grade` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_results_user_idx` (`id_user`),
  KEY `fk_results_activit_idx` (`id_activit`),
  CONSTRAINT `fk_results_activit` FOREIGN KEY (`id_activit`) REFERENCES `activits` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_results_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results`
--

LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_description` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'ativo'),(2,'inativo');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_title` varchar(100) NOT NULL,
  `team_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_team_status_idx` (`team_status`),
  CONSTRAINT `fk_team_status` FOREIGN KEY (`team_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'M1-Turma-EAD-1',1),(2,'M1-Turma-EAD-2',1),(3,'N1-Turma-EAD-1',1),(4,'N2-Turma-EAD-2',1),(5,'M1-Turma-PERSENCIAL-1',1),(6,'M2-Turma-PERSENCIAL-2',1),(7,'N1-Turma-PERSENCIAL-1',1),(8,'N2-Turma-PERSENCIAL-2',1);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_discipline` int(11) NOT NULL,
  `topic_title` varchar(255) NOT NULL,
  `topic_description` text NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `topics_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_topics_disciplines_idx` (`id_discipline`),
  KEY `fk_topics_teacher_idx` (`id_teacher`),
  KEY `fk_topics_team_idx` (`id_team`),
  KEY `fk_topics_status_idx` (`topics_status`),
  CONSTRAINT `fk_topics_disciplines` FOREIGN KEY (`id_discipline`) REFERENCES `disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_topics_status` FOREIGN KEY (`topics_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_topics_teacher` FOREIGN KEY (`id_teacher`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_topics_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_disciplines`
--

DROP TABLE IF EXISTS `type_disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_discipline_description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_disciplines`
--

LOCK TABLES `type_disciplines` WRITE;
/*!40000 ALTER TABLE `type_disciplines` DISABLE KEYS */;
INSERT INTO `type_disciplines` VALUES (1,'Presencial'),(2,'Online');
/*!40000 ALTER TABLE `type_disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_users`
--

DROP TABLE IF EXISTS `type_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_user_description` varchar(30) NOT NULL,
  `type_user_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_type_users_status_idx` (`type_user_status`),
  CONSTRAINT `fk_type_users_status` FOREIGN KEY (`type_user_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_users`
--

LOCK TABLES `type_users` WRITE;
/*!40000 ALTER TABLE `type_users` DISABLE KEYS */;
INSERT INTO `type_users` VALUES (1,'root',1),(2,'admin',1),(3,'professor',1),(4,'estudante',1);
/*!40000 ALTER TABLE `type_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `date_register` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `type_users` int(11) NOT NULL,
  `image_user_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_type_users_idx` (`type_users`),
  KEY `fk_users_status_idx` (`status`),
  CONSTRAINT `fk_users_status` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_type_users` FOREIGN KEY (`type_users`) REFERENCES `type_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'root','63a9f0ea7bb98050796b649e85481845','root','root','rafaelantoniolucio@gmail.com','2013-11-21 09:40:35',1,1,'/users/id/documents/'),(2,'admin','21232f297a57a5a743894a0e4a801fc3','admin','admin','admin@admin.com','2013-11-21 09:40:23',1,2,'/users/id/documents/image.jpg'),(3,'professor','3f9cd3c7b11eb1bae99dddb3d05da3c5','professor','professor','professor@professor.com','2013-11-21 09:42:01',1,3,'/users/id/documents/image.jpg'),(4,'aluno','ca0cd09a12abade3bf0777574d9f987f','aluno','aluno','aluno@aluno.com','2013-11-20 21:25:15',1,4,'/users/id/documents/image.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_disciplines`
--

DROP TABLE IF EXISTS `users_disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_discipline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_disciplines_users_idx` (`id_user`),
  KEY `fk_users_disciplines_idx` (`id_discipline`),
  CONSTRAINT `fk_users_disciplines` FOREIGN KEY (`id_discipline`) REFERENCES `disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_disciplines_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_disciplines`
--

LOCK TABLES `users_disciplines` WRITE;
/*!40000 ALTER TABLE `users_disciplines` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_team`
--

DROP TABLE IF EXISTS `users_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_team_users_idx` (`id_users`),
  KEY `fk_users_team_team_idx` (`id_team`),
  CONSTRAINT `fk_users_team_team` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_team_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_team`
--

LOCK TABLES `users_team` WRITE;
/*!40000 ALTER TABLE `users_team` DISABLE KEYS */;
INSERT INTO `users_team` VALUES (1,3,1);
/*!40000 ALTER TABLE `users_team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-21 17:57:57
