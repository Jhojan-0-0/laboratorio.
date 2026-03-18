# ************************************************************
# Antares - SQL Client
# Version 0.7.24
# 
# https://antares-sql.app/
# https://github.com/antares-sql/antares
# 
# Host: 127.0.0.1 (Ubuntu 22.04 10.6.22)
# Database: laboratorio
# Generation time: 2026-03-18T18:07:18-05:00
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table auditoria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `auditoria`;

CREATE TABLE `auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numauditoria` int(11) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `estadoproducto` tinyint(1) NOT NULL,
  `observacion` text DEFAULT NULL,
  `estadoauditoria` tinyint(1) NOT NULL,
  `fecCreate` datetime NOT NULL,
  `fecCierre` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idpersonal` (`idpersonal`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auditoria_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table bitacora
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bitacora`;

CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `horainicio` datetime DEFAULT NULL,
  `horafinal` datetime DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idbitacora`),
  KEY `idpersonal` (`idpersonal`),
  CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;

INSERT INTO `bitacora` (`idbitacora`, `idpersonal`, `ip`, `horainicio`, `horafinal`, `estado`) VALUES
	(1, 1, "localhost", "2026-02-01 10:05:33", "2026-02-01 10:40:16", 1),
	(2, 1, "127.0.0.1", "2026-02-07 21:32:20", "2026-02-07 21:52:32", 1),
	(3, 1, "127.0.0.1", "2026-02-07 21:54:23", "2026-02-07 21:55:06", 1),
	(4, 1, "127.0.0.1", "2026-02-10 18:54:25", "2026-02-10 18:54:25", 0),
	(5, 1, "127.0.0.1", "2026-02-12 07:53:41", "2026-02-12 07:53:41", 0),
	(6, 1, "127.0.0.1", "2026-02-13 17:42:23", "2026-02-13 17:42:23", 0),
	(7, 1, "127.0.0.1", "2026-02-13 21:17:24", "2026-02-13 21:17:24", 0),
	(8, 1, "127.0.0.1", "2026-02-14 06:55:09", "2026-02-14 06:55:09", 0),
	(9, 1, "127.0.0.1", "2026-02-14 17:43:13", "2026-02-14 17:43:13", 0),
	(10, 1, "127.0.0.1", "2026-02-14 18:13:45", "2026-02-14 18:13:45", 0),
	(11, 1, "127.0.0.1", "2026-02-15 07:04:56", "2026-02-15 07:04:56", 0),
	(12, 1, "127.0.0.1", "2026-02-17 03:38:21", "2026-02-17 03:38:21", 0),
	(13, 1, "127.0.0.1", "2026-02-17 15:55:52", "2026-02-17 15:55:52", 0),
	(14, 1, "127.0.0.1", "2026-02-17 17:37:55", "2026-02-17 17:37:55", 0),
	(15, 1, "127.0.0.1", "2026-02-18 09:48:56", "2026-02-18 09:48:56", 0),
	(16, 1, "127.0.0.1", "2026-02-19 17:09:24", "2026-02-19 17:09:24", 0),
	(17, 1, "127.0.0.1", "2026-02-19 21:24:42", "2026-02-19 21:24:42", 0),
	(18, 1, "127.0.0.1", "2026-02-24 14:15:00", "2026-02-24 14:15:00", 0),
	(19, 1, "127.0.0.1", "2026-02-24 19:52:51", "2026-02-24 19:52:51", 0),
	(20, 1, "127.0.0.1", "2026-02-27 15:12:31", "2026-02-27 15:38:01", 1),
	(21, 1, "127.0.0.1", "2026-02-27 15:38:10", "2026-02-27 15:45:21", 1),
	(22, 1, "127.0.0.1", "2026-02-27 15:46:27", "2026-02-27 15:46:33", 1),
	(23, 1, "127.0.0.1", "2026-02-27 15:46:42", "2026-02-27 15:46:42", 0),
	(24, 1, "127.0.0.1", "2026-03-05 09:01:26", "2026-03-05 09:01:26", 0),
	(25, 1, "127.0.0.1", "2026-03-05 14:03:49", "2026-03-05 14:10:41", 1),
	(26, 1, "127.0.0.1", "2026-03-05 14:10:42", "2026-03-05 14:10:42", 0),
	(27, 1, "127.0.0.1", "2026-03-05 14:55:14", "2026-03-05 15:01:45", 1),
	(28, 1, "127.0.0.1", "2026-03-05 15:01:50", "2026-03-05 15:01:54", 1),
	(29, 1, "127.0.0.1", "2026-03-05 15:01:55", "2026-03-05 15:01:55", 0),
	(30, 1, "127.0.0.1", "2026-03-05 15:02:58", "2026-03-05 15:16:07", 1),
	(31, 1, "127.0.0.1", "2026-03-05 15:16:10", "2026-03-05 15:16:12", 1),
	(32, 1, "127.0.0.1", "2026-03-05 15:16:18", "2026-03-05 15:16:18", 0),
	(33, 1, "127.0.0.1", "2026-03-05 15:30:16", "2026-03-05 15:34:00", 1),
	(34, 1, "127.0.0.1", "2026-03-05 15:34:06", "2026-03-05 15:36:01", 1),
	(35, 1, "127.0.0.1", "2026-03-05 15:36:02", "2026-03-05 15:36:02", 0),
	(36, 1, "127.0.0.1", "2026-03-05 15:36:02", "2026-03-05 15:36:02", 0),
	(37, 1, "127.0.0.1", "2026-03-05 19:25:38", "2026-03-05 19:33:08", 1),
	(38, 1, "127.0.0.1", "2026-03-05 19:33:12", "2026-03-05 19:33:21", 1),
	(39, 1, "127.0.0.1", "2026-03-05 19:33:24", "2026-03-05 19:33:24", 0),
	(40, 1, "127.0.0.1", "2026-03-05 20:04:20", "2026-03-05 20:05:07", 1),
	(41, 1, "127.0.0.1", "2026-03-05 20:05:24", "2026-03-05 20:05:27", 1),
	(42, 1, "127.0.0.1", "2026-03-05 20:05:29", "2026-03-05 20:05:29", 0),
	(43, 1, "127.0.0.1", "2026-03-05 20:06:10", "2026-03-05 20:06:13", 1),
	(44, 1, "127.0.0.1", "2026-03-05 20:06:19", "2026-03-05 20:10:57", 1),
	(45, 1, "127.0.0.1", "2026-03-05 20:11:02", "2026-03-05 20:11:28", 1),
	(46, 1, "127.0.0.1", "2026-03-05 20:14:02", "2026-03-05 20:14:02", 0),
	(47, 1, "127.0.0.1", "2026-03-05 20:50:39", "2026-03-05 20:53:47", 1),
	(48, 1, "127.0.0.1", "2026-03-05 21:20:43", "2026-03-05 21:22:51", 1),
	(49, 1, "127.0.0.1", "2026-03-05 21:22:54", "2026-03-05 21:22:54", 0),
	(50, 1, "127.0.0.1", "2026-03-13 17:34:32", "2026-03-13 17:34:32", 0),
	(51, 1, "127.0.0.1", "2026-03-17 17:53:34", "2026-03-17 17:53:34", 0),
	(52, 1, "127.0.0.1", "2026-03-17 20:06:57", "2026-03-17 20:06:57", 0),
	(53, 1, "::1", "2026-03-17 21:07:05", "2026-03-17 21:07:05", 0),
	(54, 1, "127.0.0.1", "2026-03-18 16:33:43", "2026-03-18 16:33:43", 0);

/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table docentes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `docentes`;

CREATE TABLE `docentes` (
  `iddocente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `codEscuela` int(11) NOT NULL,
  PRIMARY KEY (`iddocente`),
  KEY `codEscuela` (`codEscuela`),
  CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`codEscuela`) REFERENCES `escuelas` (`codescuela`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table entidad
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entidad`;

CREATE TABLE `entidad` (
  `identidad` int(11) NOT NULL AUTO_INCREMENT,
  `entidad` varchar(200) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `localidad` varchar(150) DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`identidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `entidad` WRITE;
/*!40000 ALTER TABLE `entidad` DISABLE KEYS */;

INSERT INTO `entidad` (`identidad`, `entidad`, `sigla`, `localidad`, `fecCreate`) VALUES
	(1, "Faculta de Ing. Quimica", "FIQ", "Universidad Nacional del Altiplano", "2024-06-22 10:44:31");

/*!40000 ALTER TABLE `entidad` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table escuelas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `escuelas`;

CREATE TABLE `escuelas` (
  `codescuela` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`codescuela`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table login
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `nivusu` int(11) DEFAULT 2,
  `estado` tinyint(1) DEFAULT 1,
  `fecCreate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`idlogin`),
  KEY `idpersonal` (`idpersonal`),
  CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;

INSERT INTO `login` (`idlogin`, `idpersonal`, `username`, `passwd`, `nivusu`, `estado`, `fecCreate`) VALUES
	(1, 1, "admin", "123", 2, 1, "2026-02-07 17:20:18");

/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table personal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal`;

CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `identidad` int(11) NOT NULL,
  `codPersonal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idpersonal`),
  KEY `idfacultad` (`identidad`),
  CONSTRAINT `FK_XXDX` FOREIGN KEY (`identidad`) REFERENCES `entidad` (`identidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;

INSERT INTO `personal` (`idpersonal`, `nombre`, `apellidos`, `sexo`, `dni`, `telefono`, `identidad`, `codPersonal`) VALUES
	(1, "Ludwin", "Aliaga", "masculino", "74851254", "987563424", 1, "PER-123");

/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
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
  `estante` int(11) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `codOC` varchar(30) DEFAULT NULL,
  `horainicio` datetime DEFAULT NULL,
  `horafinal` datetime DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp(),
  `foto` varchar(200) DEFAULT NULL,
  `validado` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;



# Dump of table salida
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salida`;

CREATE TABLE `salida` (
  `idsalida` int(11) NOT NULL AUTO_INCREMENT,
  `idsolicitud` int(11) NOT NULL,
  `nomproducto` varchar(100) NOT NULL,
  `cantidad` double DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idsalida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table solicitud
# ------------------------------------------------------------

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `idsolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `idpersonal` int(11) NOT NULL,
  `nomproducto` varchar(150) NOT NULL,
  `cantidad` double NOT NULL,
  `unimedida` varchar(10) NOT NULL,
  `usoproducto` varchar(30) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`idsolicitud`),
  KEY `FK_7XN4` (`idpersonal`),
  CONSTRAINT `FK_7XN4` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table validacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `validacion`;

CREATE TABLE `validacion` (
  `idvalidacion` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `encontrado` tinyint(1) NOT NULL,
  `completo` tinyint(1) NOT NULL,
  `obs` text DEFAULT NULL,
  `fecCreate` datetime DEFAULT current_timestamp(),
  `validado` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`idvalidacion`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `validacion_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of views
# ------------------------------------------------------------

# Creating temporary tables to overcome VIEW dependency errors


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Dump completed on 2026-03-18T18:07:18-05:00
