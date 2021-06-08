-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sigma_database
CREATE DATABASE IF NOT EXISTS `sigma_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sigma_database`;

-- Dumping structure for table sigma_database.mae_usuario
CREATE TABLE IF NOT EXISTS `mae_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `ape_paterno` varchar(200) DEFAULT NULL,
  `ape_materno` varchar(200) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `fec_creacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sigma_database.mae_usuario: ~3 rows (approximately)
/*!40000 ALTER TABLE `mae_usuario` DISABLE KEYS */;
INSERT INTO `mae_usuario` (`id`, `nombres`, `ape_paterno`, `ape_materno`, `usuario`, `clave`, `tipo`, `estado`, `fec_creacion`) VALUES
	(2, 'JOSE', 'JOSE', 'JOSE', 'joseft', '123456', 'Administrador', 'A', '2021-06-05 19:29:55'),
	(3, 'ORESTES', 'ORESTES', 'ORESTES', 'oramirez', '123456', 'Administrador', 'I', '2021-06-05 19:30:31'),
	(4, 'ADMINISTRADOR', '', '', 'admin', '123456', 'Administrador', 'A', '2021-06-05 19:30:31');
/*!40000 ALTER TABLE `mae_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
