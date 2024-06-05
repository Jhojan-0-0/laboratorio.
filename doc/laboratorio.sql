CREATE DATABASE laboratorio DEFAULT CHARSET utf8 COLLATE utf8_spanish_ci;

USE laboratorio;

--
-- Table structure for table `entregaquimicos`
--

DROP TABLE IF EXISTS `entregaquimicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entregaquimicos` (
  `identrega` int(11) NOT NULL AUTO_INCREMENT,
  `idquimico` int(11) NOT NULL,
  `feEntrega` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `codSalida` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 0,
  `descripcion` text DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `facultad` varchar(200) DEFAULT NULL,
  `docente` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`identrega`),
  KEY `idquimico` (`idquimico`),
  KEY `codSalida` (`codSalida`),
  CONSTRAINT `entregaquimicos_ibfk_1` FOREIGN KEY (`idquimico`) REFERENCES `quimicos` (`idquimico`),
  CONSTRAINT `entregaquimicos_ibfk_2` FOREIGN KEY (`codSalida`) REFERENCES `salida` (`codSalida`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entregaquimicos`
--

LOCK TABLES `entregaquimicos` WRITE;
/*!40000 ALTER TABLE `entregaquimicos` DISABLE KEYS */;
INSERT INTO `entregaquimicos` VALUES (1,1,'current_timestamp()',NULL,2,'para agricultura','kingtong','agranomia','juan');
/*!40000 ALTER TABLE `entregaquimicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultades`
--

DROP TABLE IF EXISTS `facultades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultades` (
  `idfacultad` int(11) NOT NULL AUTO_INCREMENT,
  `facultad` varchar(80) NOT NULL,
  PRIMARY KEY (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultades`
--

LOCK TABLES `facultades` WRITE;
/*!40000 ALTER TABLE `facultades` DISABLE KEYS */;
INSERT INTO `facultades` VALUES (1,'quimica'),(2,'enfermeria');
/*!40000 ALTER TABLE `facultades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastoQuimicos`
--

DROP TABLE IF EXISTS `gastoQuimicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gastoQuimicos` (
  `idgasto` int(11) NOT NULL AUTO_INCREMENT,
  `idquimico` int(11) NOT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `cantidad` int(11) DEFAULT 0,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`idgasto`),
  KEY `idquimico` (`idquimico`),
  CONSTRAINT `gastoQuimicos_ibfk_1` FOREIGN KEY (`idquimico`) REFERENCES `quimicos` (`idquimico`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastoQuimicos`
--

LOCK TABLES `gastoQuimicos` WRITE;
/*!40000 ALTER TABLE `gastoQuimicos` DISABLE KEYS */;
INSERT INTO `gastoQuimicos` VALUES (1,1,'2022-09-08',19,'');
/*!40000 ALTER TABLE `gastoQuimicos` ENABLE KEYS */;
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
INSERT INTO `login` VALUES (1,1,'jhon','123',2,1);
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
  KEY `idfacultad` (`idfacultad`),
  CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`idfacultad`) REFERENCES `facultades` (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'jhojan','ichuta pacco','masculino','76456798','985475164',1);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quimicos`
--

DROP TABLE IF EXISTS `quimicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quimicos` (
  `idquimico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `concentracion` varchar(50) DEFAULT NULL,
  `tipoEnvace` varchar(20) DEFAULT NULL,
  `tamanio` varchar(20) DEFAULT NULL,
  `marca` varchar(70) DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT 0,
  `cantidad` int(11) DEFAULT 0,
  `feFabricacion` date DEFAULT NULL,
  `feVencimiento` date DEFAULT NULL,
  `codProducto` varchar(50) NOT NULL,
  `advertencia` text DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT 0,
  `clasificacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idquimico`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quimicos`
--

LOCK TABLES `quimicos` WRITE;
/*!40000 ALTER TABLE `quimicos` DISABLE KEYS */;
INSERT INTO `quimicos` VALUES (1,'acido sulfurico','50%','plastico','grande','corning',10,2,'2023-05-12','2222-11-11','87347','pleligroso',NULL,'normalizado',100,'acidos');
/*!40000 ALTER TABLE `quimicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salida`
--

DROP TABLE IF EXISTS `salida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salida` (
  `codSalida` int(11) NOT NULL AUTO_INCREMENT,
  `fechaSalida` date DEFAULT current_timestamp(),
  `idpersonal` int(11) NOT NULL,
  `idfacultad` int(11) NOT NULL,
  PRIMARY KEY (`codSalida`),
  KEY `idpersonal` (`idpersonal`),
  KEY `idfacultad` (`idfacultad`),
  CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`),
  CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`idfacultad`) REFERENCES `facultades` (`idfacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salida`
--

LOCK TABLES `salida` WRITE;
/*!40000 ALTER TABLE `salida` DISABLE KEYS */;
INSERT INTO `salida` VALUES (1,'2202-02-02',1,2);
/*!40000 ALTER TABLE `salida` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-05 15:05:51
