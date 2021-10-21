-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.18 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para kalpatarubd
CREATE DATABASE IF NOT EXISTS `kalpatarubd` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kalpatarubd`;

-- Volcando estructura para tabla kalpatarubd.grupo
CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.grupo: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
REPLACE INTO `grupo` (`id`, `nombre`) VALUES
	(1, '1 Bachillerato Cientifico-Tecnologico'),
	(2, '2 Bachillerato Cientifico-Tecnologico'),
	(3, '1 Bachillerato de Ciencias Sociales'),
	(4, '2 Bachillerato de Ciencias Sociales'),
	(5, '1 Formacion basica de  Servicios Administrativos'),
	(6, '2 Formacion basica de Servicios Administrativos'),
	(7, '1 Grado medio de Sistemas Microinformaticos y Redes'),
	(8, '2 Grado medio de Sistemas Microinformaticos y Redes'),
	(9, '1 Grado medio de Gestion Administrativa'),
	(10, '2 Grado medio de Gestion Administrativa'),
	(11, '1 Grado medio de Actividades Comerciales'),
	(12, '2 Grado medio de Actividades Comerciales'),
	(13, '1 Grado superior de Administracion de Sistemas Informaticos en Red'),
	(14, '2 Grado superior de Administracion de Sistemas Informaticos en Red'),
	(15, '1 Grado superior de Desarollo de Aplicaciones Web'),
	(16, '2 Grado superior de Desarollo de Aplicaciones Web'),
	(26, '1 Grado Superior de  Administración y Finanzas'),
	(27, '2 Grado Superior de Administracion y Finanzas'),
	(28, '1 Grado Superior de Marketing y Publicidad'),
	(29, '1 Grado Superior de Integración Social'),
	(30, '2 Grado Superior de Integración Social'),
	(31, 'Profesorado del centro');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;

-- Volcando estructura para tabla kalpatarubd.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `activateToken` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tipografia` varchar(100) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `colorTipografia` varchar(15) DEFAULT NULL,
  `forma` varchar(15) DEFAULT NULL,
  `texto` varchar(280) DEFAULT NULL,
  `anonimo` tinyint(4) NOT NULL DEFAULT '0',
  `numLikes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userId`),
  CONSTRAINT `userid` FOREIGN KEY (`userId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.mensajes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla kalpatarubd.prefiltro
CREATE TABLE IF NOT EXISTS `prefiltro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palabra` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.prefiltro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `prefiltro` DISABLE KEYS */;
/*!40000 ALTER TABLE `prefiltro` ENABLE KEYS */;

-- Volcando estructura para tabla kalpatarubd.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'User',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.roles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `rol`) VALUES
	(1, ' User'),
	(2, 'Admin'),
	(3, 'SuperAdmin');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla kalpatarubd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) DEFAULT NULL,
  `pass` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(320) DEFAULT NULL,
  `rol` int(5) DEFAULT NULL,
  `curso` int(5) DEFAULT NULL,
  `imgUser` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Preguntar a helen como guardar la imagen del uzuario',
  `Banned` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `dni` (`dni`),
  KEY `roles` (`rol`),
  KEY `Grupo (Curso)` (`curso`),
  CONSTRAINT `Grupo (Curso)` FOREIGN KEY (`curso`) REFERENCES `grupo` (`id`),
  CONSTRAINT `roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `dni`, `pass`, `username`, `email`, `rol`, `curso`, `imgUser`, `Banned`) VALUES
	(1, '00000000Z', 'raimon3+1', 'Raimon', 'retoraimon@gmail.com', 3, 16, NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
