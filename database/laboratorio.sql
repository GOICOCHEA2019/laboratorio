-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para laboratorio
CREATE DATABASE IF NOT EXISTS `laboratorio` /*!40100 DEFAULT CHARACTER SET utf32 */;
USE `laboratorio`;

-- Volcando estructura para tabla laboratorio.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla laboratorio.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `proveedor_id` int(11) unsigned NOT NULL DEFAULT '0',
  `nombre` varchar(150) NOT NULL,
  `unidad_id` int(11) unsigned NOT NULL DEFAULT '0',
  `categoria_id` int(11) unsigned NOT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__categorias` (`categoria_id`),
  KEY `FK_productos_proveedores` (`proveedor_id`),
  KEY `FK_productos_unidades` (`unidad_id`),
  CONSTRAINT `FK__categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `FK_productos_proveedores` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id`),
  CONSTRAINT `FK_productos_unidades` FOREIGN KEY (`unidad_id`) REFERENCES `unidades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla laboratorio.proveedores
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL DEFAULT '0',
  `direccion` varchar(150) NOT NULL DEFAULT '0',
  `telefono` varchar(150) NOT NULL DEFAULT '0',
  `correo` varchar(150) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla laboratorio.unidades
CREATE TABLE IF NOT EXISTS `unidades` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
