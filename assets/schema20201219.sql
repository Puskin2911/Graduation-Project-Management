-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: gpms_schema
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (6,'Computer and Science Information'),(7,'Mathematics');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `phase`
--

LOCK TABLES `phase` WRITE;
/*!40000 ALTER TABLE `phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (7,'Website manage granduation project of student',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(8,'Chinese Chess Website',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(9,'Website for learn data structure',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(10,'Website for airbooking',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(11,'Website manage student',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(12,'Website manage employee',1,6,10,'Standard','MIM','2020-07-18 17:00:00',NULL),(23,'Website for manage staff',0,6,0,'Standard','',NULL,NULL);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `project_assignment`
--

LOCK TABLES `project_assignment` WRITE;
/*!40000 ALTER TABLE `project_assignment` DISABLE KEYS */;
INSERT INTO `project_assignment` VALUES (14,8,2,2),(15,9,3,3),(16,10,4,4),(17,11,5,5),(18,12,6,6),(22,23,3,7);
/*!40000 ALTER TABLE `project_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(2,'teacher'),(3,'student');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (2,6,'K63A3',18001001,'Bachelor','QH2018',6),(3,7,'K63A3',18001002,'Bachelor','QH2018',6),(4,8,'K63A3',18001003,'Bachelor','QH2018',6),(5,9,'K63A3',18001004,'Bachelor','QH2018',6),(6,10,'K63A3',18001005,'Bachelor','QH2018',6),(8,28,'K63A3',18001087,'','QH2018',6);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (2,18,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(3,19,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(4,20,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(5,21,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(6,22,'Doctor of Philosophy','Ha Noi University of Science','Professor',NULL),(7,31,'Master','Ha Noi University of Science','Professor',7);
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'annguyenvan.2k@gmail.com','$2y$10$tJ7sy2gZcpYEkvi2yZcwJeRSPVwPGaaU27aXemHUeaRgOsoPMPKP.','Itachi',98765432,1,NULL,1),(6,'studentA@gmail.com','$2y$10$Jji9IOIJtdywyxa9KUgsdeu27A5niNlGICL/r6NRTCaB/kZwIHTri','Student A',98765432,3,NULL,1),(7,'studentB@gmail.com','$2y$10$e7Fd3Pnj3mI7giKTdnVwDecHg4y5731XJuxmsCNUcpQQXBX0yT62C','Student B',98765432,3,NULL,1),(8,'studentC@gmail.com','$2y$10$e7Fd3Pnj3mI7giKTdnVwDecHg4y5731XJuxmsCNUcpQQXBX0yT62C','Student C',98765432,3,NULL,1),(9,'studentD@gmail.com','$2y$10$qsYLgzoyzqpcVCoD.zCSdO8/LFUbcAzyNDwdXrqnUPFcPoLGtq3vC','Student D',98765432,3,NULL,1),(10,'studentE@hus.edu.vn','$2y$10$ESWO4D6ws0xoJeVhOpFfjeFTV8erCPFVjtxiH2VP1Acwi.1uvqucW','Student E',98765432,3,NULL,1),(11,'nguyenvanF@gmail.com','$2y$10$jL4MjQBotxI0lMFq2juemeoM1USVw712L9iK5..xIM/ndSgicpwpu','Nguyen Van F',98765432,3,NULL,1),(12,'nguyenvanG@gmail.com','$2y$10$sAAjwrlw/V/otbs8/gdP1uisJYTfXVNNzN8Zi0ssUfBTiXDtXMniK','Nguyen Van G',98765432,3,NULL,1),(13,'nguyenvanH@gmail.com','$2y$10$zpDmLsiNe.6Qmhi5fvHSQOyeJf7N2qAWFcIeYv6cPTZ6tbw2aOiDS','Nguyen Van H',98765432,3,NULL,1),(14,'nguyenvanI@gmail.com','$2y$10$Y7mzxhd9AgQ1Rrt0cOOpjOmJTLcEM6JfBgl5p6a1qON8025KzBFM2','Nguyen Van I',98765432,3,NULL,1),(15,'nguyenvanJ@gmail.com','$2y$10$dw1DJfRFI/O9s5/MbDRUpeJSbAmsCqgaO1vLCW11h6T9QBxvCOIIK','Nguyen Van J',98765432,3,NULL,1),(16,'nguyenvanK@gmail.com','$2y$10$TkvIjeaunqjfi2GFZjUDvuvt5VYvXUovlJ/Y.w6Ho1O.CVkz4xkL6','Nguyen Van K',98765432,3,NULL,1),(17,'nguyenvanL@gmail.com','$2y$10$IJvNobztkOTn3wIdERk7E.2aKG8JHBdkAbpAYKqFneWDYP3Deh79y','Nguyen Van L',98765432,3,NULL,1),(18,'teacherA@gmail.com','$2y$10$wAG.NrJuBHcIqEyGx9z5YOngzuN.hb05RIqtvhePyfXgsYlQDLMcm','Teacher A',98765432,2,NULL,1),(19,'teacherB@gmail.com','$2y$10$rVi5IppzuLthZ351epXuD.cHjGlTtZ7v5nk/hfe.x69sizH45Uvdq','Teacher B',98765432,2,NULL,1),(20,'teacherC@gmail.com','$2y$10$8grfbYHL.MZP1O7Ag/qFruE5SZY4CVkI5e5K6VPhpbPUrlNicUTGy','Teacher C',98765432,2,NULL,1),(21,'teacherD@gmail.com','$2y$10$fJqkri0cP3Ug7XkT5mD7HuEajLga1yS6uteay7y7jW5Kbf/IpN/Fi','Nguyen Van D',98765432,2,NULL,0),(22,'teacherE@gmail.com','$2y$10$A5hJ16sZdcTr3cAYjn/Sl.xYF1rjJpidGzganVJrgBpGaxMdrwHCi','Nguyen Van E',98765432,2,NULL,1),(28,'nguyenvanan_t63@hus.edu.vn','$2y$10$vxU4K3Rq3W3Ly..HJRiZhOy/te.qe..z73sSJpMoo6ZR8UexQnwGK','Nguyen Van An',0,3,NULL,1),(31,'johndoe@hus.edu.vn','$2y$10$iGb0dap6k.k24.I17iivbO8TI3PirTA6fOz0XamiFAX.p9Att8y82','John Doe',0,2,NULL,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'gpms_schema'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-19  1:13:08