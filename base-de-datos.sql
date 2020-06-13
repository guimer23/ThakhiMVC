-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.14 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.1.0.4903
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para curso_php7
CREATE DATABASE IF NOT EXISTS `curso_php7` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `curso_php7`;


-- Volcando estructura para tabla curso_php7.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `profesion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empleado_profesion` (`profesion_id`),
  CONSTRAINT `empleado_profesion` FOREIGN KEY (`profesion_id`) REFERENCES `profesion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla curso_php7.empleado: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `profesion_id`) VALUES
	(1, 'Eduardo', 'Rodríguez Patilo', '1989-02-11', 2),
	(2, 'Juan', 'Perez Lopez', '1988-10-29', 6),
	(3, 'Luis', 'Villanueva Gomez', '1980-10-29', 4);
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;


-- Volcando estructura para tabla curso_php7.empleado_sueldo
CREATE TABLE IF NOT EXISTS `empleado_sueldo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(11) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empleado_sueldo` (`empleado_id`),
  CONSTRAINT `empleado_sueldo` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla curso_php7.empleado_sueldo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado_sueldo` DISABLE KEYS */;
INSERT INTO `empleado_sueldo` (`id`, `empleado_id`, `sueldo`, `fecha`) VALUES
	(1, 1, 500.00, '2016-10-29'),
	(2, 3, 300.00, '2016-10-29'),
	(3, 1, 500.00, '2015-10-29');
/*!40000 ALTER TABLE `empleado_sueldo` ENABLE KEYS */;


-- Volcando estructura para tabla curso_php7.profesion
CREATE TABLE IF NOT EXISTS `profesion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla curso_php7.profesion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `profesion` DISABLE KEYS */;
INSERT INTO `profesion` (`id`, `nombre`, `sueldo`) VALUES
	(1, 'Publicista', 5000.00),
	(2, 'Ingeniero', 5000.00),
	(4, 'Médico', 7000.00),
	(5, 'Abogado', 3500.00),
	(6, 'Químico', 8000.00);
/*!40000 ALTER TABLE `profesion` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
