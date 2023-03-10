-- --------------------------------------------------------
-- Host:                         2daw.esvirgua.com
-- Versión del servidor:         5.7.41 - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para user2daw_BD1-10
CREATE DATABASE IF NOT EXISTS `user2daw_BD1-10` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `user2daw_BD1-10`;

-- Volcando estructura para tabla user2daw_BD1-10.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla user2daw_BD1-10.categorias: 4 rows
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(6, 'renombro categoría 2'),
	(5, 'categoria1'),
	(7, 'nueva categoría'),
	(8, 'nueva categoría');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla user2daw_BD1-10.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `idProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 NOT NULL,
  `correo` varchar(70) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idProfesor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- Volcando datos para la tabla user2daw_BD1-10.profesores: 1 rows
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT INTO `profesores` (`idProfesor`, `nombre`, `correo`, `password`) VALUES
	(3, 'jorge', 'jorge@gmail', '$2y$10$wubyDUFaR6v5GOJl7Br3FucllCrwNRxziLBDLEmw2jNsgC8uVAAAu');
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;

-- Volcando estructura para tabla user2daw_BD1-10.retos
CREATE TABLE IF NOT EXISTS `retos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dirigido` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `fechaInicioInscripcion` date NOT NULL,
  `fechaFinInscripcion` date NOT NULL,
  `fechaInicioReto` datetime NOT NULL,
  `fechaFinReto` datetime NOT NULL,
  `fechaPublicacion` datetime NOT NULL,
  `publicado` bit(1) NOT NULL,
  `idProfesor` smallint(5) unsigned NOT NULL,
  `idCategoria` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CatRetos` (`idCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla user2daw_BD1-10.retos: 3 rows
/*!40000 ALTER TABLE `retos` DISABLE KEYS */;
INSERT INTO `retos` (`id`, `nombre`, `dirigido`, `descripcion`, `fechaInicioInscripcion`, `fechaFinInscripcion`, `fechaInicioReto`, `fechaFinReto`, `fechaPublicacion`, `publicado`, `idProfesor`, `idCategoria`) VALUES
	(3, 'hola', 'ESO', NULL, '2023-02-01', '2023-02-02', '2023-02-03 00:00:00', '2023-02-05 00:00:00', '2023-02-05 00:00:00', b'1', 1, 1),
	(4, 'hola2', 'qwe', 'qwe', '2023-02-15', '2023-02-16', '2023-02-17 00:00:00', '2023-02-18 00:00:00', '2023-02-19 00:00:00', b'1', 1, 5),
	(5, 'hola3', 'qwer', 'qwer', '2023-02-01', '2023-02-02', '2023-02-10 00:00:00', '2023-02-12 00:00:00', '2023-02-17 00:00:00', b'1', 1, 6);
/*!40000 ALTER TABLE `retos` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
