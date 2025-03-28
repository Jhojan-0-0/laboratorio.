/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laboratorioUNA
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `fecha` date DEFAULT curdate(),
  `horainicio` time DEFAULT curtime(),
  `horafinal` time DEFAULT NULL,
  `tiempo` time DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`idbitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES
(1,1,'192','2025-03-27','22:54:27','22:54:44','00:32:22',1),
(2,1,'::1','2025-03-27','23:00:09',NULL,'00:00:00',0);
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidad`
--

DROP TABLE IF EXISTS `entidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidad` (
  `identidad` int(11) NOT NULL AUTO_INCREMENT,
  `entidad` varchar(200) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `localidad` varchar(150) DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`identidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidad`
--

LOCK TABLES `entidad` WRITE;
/*!40000 ALTER TABLE `entidad` DISABLE KEYS */;
INSERT INTO `entidad` VALUES
(1,'Faculta de Ing. Quimica','FIQ','Universidad Nacional del Altiplano','2024-06-22 10:44:31');
/*!40000 ALTER TABLE `entidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `nivusu` int(11) DEFAULT 2,
  `estado` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`idlogin`),
  KEY `idpersonal` (`idpersonal`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES
(1,1,'jhon','123',2,1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `idfacultad` int(11) NOT NULL,
  PRIMARY KEY (`idpersonal`),
  KEY `idfacultad` (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES
(1,'jhojan','ichuta pacco','masculino','74851254','987563424',1);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quimicos_entrega`
--

DROP TABLE IF EXISTS `quimicos_entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quimicos_entrega` (
  `identrega` int(11) NOT NULL AUTO_INCREMENT,
  `idquimico` int(11) NOT NULL,
  `fecEntrega` datetime DEFAULT current_timestamp(),
  `codquimico` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 0,
  `descripcion` text DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `identidad` int(10) DEFAULT NULL,
  `docente` varchar(100) DEFAULT NULL,
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
-- Table structure for table `quimicos_gasto`
--

DROP TABLE IF EXISTS `quimicos_gasto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quimicos_gasto` (
  `idgasto` int(11) NOT NULL AUTO_INCREMENT,
  `idquimico` int(11) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `cantidad` int(11) DEFAULT 0,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`idgasto`),
  KEY `idquimico` (`idquimico`),
  CONSTRAINT `quimicos_gasto_ibfk_1` FOREIGN KEY (`idquimico`) REFERENCES `quimicos_registro` (`idquimico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quimicos_gasto`
--

LOCK TABLES `quimicos_gasto` WRITE;
/*!40000 ALTER TABLE `quimicos_gasto` DISABLE KEYS */;
/*!40000 ALTER TABLE `quimicos_gasto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quimicos_registro`
--

DROP TABLE IF EXISTS `quimicos_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quimicos_registro` (
  `idquimico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `concentracion` varchar(50) DEFAULT NULL,
  `tipoEnvase` varchar(20) DEFAULT NULL,
  `tamano` varchar(20) DEFAULT NULL,
  `marca` varchar(70) DEFAULT NULL,
  `peso` decimal(10,2) DEFAULT 0.00,
  `cantidad` int(11) DEFAULT 0,
  `feFabricacion` date DEFAULT NULL,
  `feVencimiento` date DEFAULT NULL,
  `codProducto` varchar(50) NOT NULL,
  `advertencia` text DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT 0.00,
  `clasificacion` varchar(50) DEFAULT NULL,
  `mililitros` decimal(10,2) NOT NULL,
  `formula` varchar(100) NOT NULL,
  PRIMARY KEY (`idquimico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quimicos_registro`
--

LOCK TABLES `quimicos_registro` WRITE;
/*!40000 ALTER TABLE `quimicos_registro` DISABLE KEYS */;
INSERT INTO `quimicos_registro` VALUES
(1,'acido sulfurico','55%','plastico','mediano','merk',5.70,1,'2001-07-06','2008-09-03','j7fyr5','no es peligroso',NULL,'normalizado',120.00,'basicos',0.00,''),
(2,'asd','sdfd','Plastico','Grande','fad',444.00,22,'2000-03-05','2025-03-04','ddd','3333','','Comunes',21.00,'Acidos',33.00,'asdfasd');
/*!40000 ALTER TABLE `quimicos_registro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-27 23:02:54
