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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla kalpatarubd.grupo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` (`id`, `nombre`) VALUES
	(1, '1 Bachillerato Cientifico-Tecnologico'),
	(2, '2 Bachillerato Cientifico-Tecnologico'),
	(3, '1 Bachillerato de Ciencias Sociales'),
	(4, '2 Bachillerato de Ciencias Sociales'),
	(5, '1 Formacion de  Servicios Administrativos'),
	(6, '2 Formacion de Servicios Administrativos'),
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
	(30, '2 Grado Superior de Integración Social');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
