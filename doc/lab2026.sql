-- MySQL dump 10.13  Distrib 8.4.8, for Linux (x86_64)
--
-- Host: localhost    Database: laboratorio
-- ------------------------------------------------------
-- Server version	8.4.8

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auditoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numauditoria` int NOT NULL,
  `idpersonal` int NOT NULL,
  `idproducto` int NOT NULL,
  `estadoproducto` tinyint(1) NOT NULL,
  `observacion` text,
  `estadoauditoria` tinyint(1) NOT NULL,
  `fecCreate` datetime NOT NULL,
  `fecCierre` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idpersonal` (`idpersonal`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auditoria_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

LOCK TABLES `auditoria` WRITE;
/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bitacora` (
  `idbitacora` int NOT NULL AUTO_INCREMENT,
  `idpersonal` int NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `horainicio` datetime DEFAULT NULL,
  `horafinal` datetime DEFAULT NULL,
  `estado` tinyint DEFAULT NULL,
  PRIMARY KEY (`idbitacora`),
  KEY `idpersonal` (`idpersonal`),
  CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (1,1,'localhost','2026-02-01 10:05:33','2026-02-01 10:40:16',1),(2,1,'127.0.0.1','2026-02-07 21:32:20','2026-02-07 21:52:32',1),(3,1,'127.0.0.1','2026-02-07 21:54:23','2026-02-07 21:55:06',1),(4,1,'127.0.0.1','2026-02-10 18:54:25','2026-02-10 18:54:25',0),(5,1,'127.0.0.1','2026-02-12 07:53:41','2026-02-12 07:53:41',0),(6,1,'127.0.0.1','2026-02-13 17:42:23','2026-02-13 17:42:23',0),(7,1,'127.0.0.1','2026-02-13 21:17:24','2026-02-13 21:17:24',0);
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docentes` (
  `iddocente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `codEscuela` int NOT NULL,
  PRIMARY KEY (`iddocente`),
  KEY `codEscuela` (`codEscuela`),
  CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`codEscuela`) REFERENCES `escuelas` (`codescuela`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidad`
--

DROP TABLE IF EXISTS `entidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entidad` (
  `identidad` int NOT NULL AUTO_INCREMENT,
  `entidad` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `sigla` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `localidad` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecCreate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`identidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidad`
--

LOCK TABLES `entidad` WRITE;
/*!40000 ALTER TABLE `entidad` DISABLE KEYS */;
INSERT INTO `entidad` VALUES (1,'Faculta de Ing. Quimica','FIQ','Universidad Nacional del Altiplano','2024-06-22 10:44:31');
/*!40000 ALTER TABLE `entidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escuelas`
--

DROP TABLE IF EXISTS `escuelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `escuelas` (
  `codescuela` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`codescuela`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escuelas`
--

LOCK TABLES `escuelas` WRITE;
/*!40000 ALTER TABLE `escuelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `escuelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `idlogin` int NOT NULL AUTO_INCREMENT,
  `idpersonal` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `passwd` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nivusu` int DEFAULT '2',
  `estado` tinyint(1) DEFAULT '1',
  `fecCreate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idlogin`),
  KEY `idpersonal` (`idpersonal`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,1,'jhon','123',2,1,'2026-02-07 17:20:18');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal` (
  `idpersonal` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `dni` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `idfacultad` int NOT NULL,
  PRIMARY KEY (`idpersonal`),
  KEY `idfacultad` (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'jhojan','ichuta pacco','masculino','74851254','987563424',1);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `idproducto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `clasificacion` varchar(100) NOT NULL,
  `fecFabricacion` date DEFAULT NULL,
  `fecVencimiento` date NOT NULL,
  `numlote` varchar(30) NOT NULL,
  `fecAdquisicion` date DEFAULT NULL,
  `cantidadsin` double NOT NULL,
  `um1` varchar(30) NOT NULL,
  `cantidadcon` double DEFAULT NULL,
  `um2` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `estante` int DEFAULT NULL,
  `nivel` int DEFAULT NULL,
  `codOC` varchar(30) DEFAULT NULL,
  `horainicio` datetime DEFAULT NULL,
  `horafinal` datetime DEFAULT NULL,
  `fecCreate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg-g',1,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:07:31','2026-02-12 10:23:02'),(2,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg',1,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:08:29','2026-02-12 10:23:02'),(3,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg',1,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:11:09','2026-02-12 10:23:02'),(4,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg',1000,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:12:31','2026-02-12 10:23:02'),(5,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg',1000,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:12:52','2026-02-12 10:23:02'),(6,'dfas','asdf','Acidos','2026-02-10','2026-02-09','2','2026-02-03',1,'Kg',1000,' g','Plastico','Comunes',666.00,1,1,'1','2026-02-12 09:06:54','2026-02-12 09:15:31','2026-02-12 10:23:02'),(7,'trrrasdfsd','asdfasdf','Acidos','2026-02-03','2026-02-23','1','2026-02-04',2,'Kg',1000,' g','Plastico','Comunes',3.00,1,1,'1','2026-02-12 09:15:35','2026-02-12 09:16:43','2026-02-12 10:23:02'),(8,'trrrasdfsd','asdfasdf','Acidos','2026-02-03','2026-02-23','1','2026-02-04',2,'Kg',1000,' g','Plastico','Comunes',3.00,1,1,'1','2026-02-12 09:15:35','2026-02-12 09:17:27','2026-02-12 10:23:02'),(9,'trrrasdfsd','asdfasdf','Acidos','2026-02-03','2026-02-23','1','2026-02-04',2,'Kg',1000,' g','Plastico','Comunes',3.00,1,1,'1','2026-02-12 09:15:35','2026-02-12 09:17:49','2026-02-12 10:23:02'),(10,'trrrasdfsd','asdfasdf','Acidos','2026-02-03','2026-02-23','1','2026-02-04',2,'Kg',1500,' g','Plastico','Comunes',3.00,1,1,'1','2026-02-12 09:15:35','2026-02-12 09:18:16','2026-02-12 10:23:02'),(11,'trrrasdfsd','asdfasdf','Acidos','2026-02-03','2026-02-23','1','2026-02-04',2,'Kg',1500,' g','Plastico','Comunes',3.00,1,1,'1','2026-02-12 09:15:35','2026-02-12 09:19:02','2026-02-12 10:23:02'),(12,'asdf','asdfasd','Basicos','2026-02-03','2026-02-24','1','2026-02-03',2,'Kg',1500,' g','Plastico','Fiscalizados',55.20,1,1,'1','2026-02-12 09:20:14','2026-02-12 09:20:51','2026-02-12 10:23:02'),(13,'asdf','asdfasd','Basicos','2026-02-03','2026-02-24','1','2026-02-03',2,'Kg',1500,' g','Plastico','Fiscalizados',55.20,1,1,'1','2026-02-12 09:20:14','2026-02-12 09:22:10','2026-02-12 10:23:02'),(14,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:24:15','2026-02-12 10:23:02'),(15,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:25:05','2026-02-12 10:23:02'),(16,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:29:21','2026-02-12 10:23:02'),(17,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:30:11','2026-02-12 10:23:02'),(18,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:30:27','2026-02-12 10:23:02'),(19,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:30:35','2026-02-12 10:23:02'),(20,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:31:02','2026-02-12 10:23:02'),(21,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:31:53','2026-02-12 10:23:02'),(22,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:32:46','2026-02-12 10:23:02'),(23,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:32:53','2026-02-12 10:23:02'),(24,'eqwrqwe','asdfs','Acidos','2026-02-03','2026-02-24','55','2026-02-02',1.8,'L',1800,' mL','Plastico','Comunes',6.32,1,1,'1','2026-02-12 09:23:43','2026-02-12 09:33:02','2026-02-12 10:23:02');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quimicos_entrega`
--

DROP TABLE IF EXISTS `quimicos_entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quimicos_entrega` (
  `identrega` int NOT NULL AUTO_INCREMENT,
  `idquimico` int NOT NULL,
  `fecEntrega` datetime DEFAULT CURRENT_TIMESTAMP,
  `codquimico` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cantidad` int DEFAULT '0',
  `descripcion` text COLLATE utf8mb4_general_ci,
  `marca` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `identidad` int DEFAULT NULL,
  `docente` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`identrega`),
  KEY `FK_entrega_quimico` (`idquimico`),
  KEY `FK_entrega_entidad` (`identidad`),
  CONSTRAINT `FK_entrega_entidad` FOREIGN KEY (`identidad`) REFERENCES `entidad` (`identidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_entrega_quimico` FOREIGN KEY (`idquimico`) REFERENCES `quimicos_registro` (`idquimico`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quimicos_entrega`
--

LOCK TABLES `quimicos_entrega` WRITE;
/*!40000 ALTER TABLE `quimicos_entrega` DISABLE KEYS */;
/*!40000 ALTER TABLE `quimicos_entrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quimicos_registro`
--

DROP TABLE IF EXISTS `quimicos_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quimicos_registro` (
  `idquimico` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `concentracion` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipoEnvase` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tamano` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marca` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT '0.00',
  `cantidad` int DEFAULT '0',
  `feFabricacion` date DEFAULT NULL,
  `feVencimiento` date DEFAULT NULL,
  `codProducto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `advertencia` text COLLATE utf8mb4_general_ci,
  `foto` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT '0.00',
  `clasificacion` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mililitros` decimal(10,2) NOT NULL,
  `formula` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idquimico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quimicos_registro`
--

LOCK TABLES `quimicos_registro` WRITE;
/*!40000 ALTER TABLE `quimicos_registro` DISABLE KEYS */;
INSERT INTO `quimicos_registro` VALUES (1,'acido sulfurico','55%','plastico','mediano','merk',5.70,1,'2001-07-06','2008-09-03','j7fyr5','no es peligroso',NULL,'normalizado',120.00,'basicos',0.00,''),(2,'asd','sdfd','Plastico','Grande','fad',444.00,22,'2000-03-05','2025-03-04','ddd','3333','','Comunes',21.00,'Acidos',33.00,'asdfasd');
/*!40000 ALTER TABLE `quimicos_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitud` (
  `idsolicitud` int NOT NULL AUTO_INCREMENT,
  `numdocumento` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `folios` int NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `solicitante` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `fecCreate` datetime NOT NULL,
  PRIMARY KEY (`idsolicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (1,'dd','esd',2,'asss','ddd','2026-01-02 00:00:00','2026-02-03 00:00:00');
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validacion`
--

DROP TABLE IF EXISTS `validacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `validacion` (
  `idvalidacion` int NOT NULL AUTO_INCREMENT,
  `idproducto` int NOT NULL,
  `encontrado` tinyint(1) NOT NULL,
  `completo` tinyint(1) NOT NULL,
  `obs` text,
  `fecCreate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idvalidacion`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `validacion_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validacion`
--

LOCK TABLES `validacion` WRITE;
/*!40000 ALTER TABLE `validacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `validacion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-13 22:11:19
