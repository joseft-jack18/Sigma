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

-- Dumping structure for table sigma_database.mae_servicio
CREATE TABLE IF NOT EXISTS `mae_servicio` (
  `cod_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `des_servicio` varchar(100) NOT NULL,
  `fec_creacion` datetime NOT NULL,
  `estado` varchar(1) NOT NULL,
  PRIMARY KEY (`cod_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sigma_database.mae_servicio: ~22 rows (approximately)
/*!40000 ALTER TABLE `mae_servicio` DISABLE KEYS */;
INSERT INTO `mae_servicio` (`cod_servicio`, `des_servicio`, `fec_creacion`, `estado`) VALUES
	(1, 'ARMADO DE MUEBLES', '2021-06-12 23:37:37', 'A'),
	(2, 'ARMADO DE MUEBLES COCINA', '2021-06-12 23:38:01', 'A'),
	(3, 'INSTALACION CAMPANA/COCINA/HORNO', '2021-06-12 23:39:30', 'A'),
	(4, 'INSTALACION THERMA', '2021-06-12 23:41:43', 'A'),
	(5, 'INSTALACION RACKS', '2021-06-12 23:41:54', 'A'),
	(6, 'INSTALACION PUERTAS', '2021-06-12 23:42:07', 'A'),
	(7, 'INSTALACION CAMARA/PORTERO/ALARMA', '2021-06-12 23:42:24', 'A'),
	(8, 'INSTALACION PUERTA DE DUCHA', '2021-06-12 23:42:38', 'A'),
	(9, 'INSTALACION CORTINAS', '2021-06-13 01:00:38', 'A'),
	(10, 'INSTALACION LUMINARIAS', '2021-06-13 01:22:24', 'A'),
	(11, 'INSTALACION PARRILLAS', '2021-06-13 01:22:38', 'A'),
	(12, 'INSTALACION PISOS', '2021-06-13 01:22:50', 'A'),
	(13, 'INSTALACION INODORO/LAVADERO', '2021-06-13 01:23:09', 'A'),
	(14, 'VISITA TECNICA PISOS', '2021-06-13 01:23:40', 'A'),
	(15, 'VISITA TECNICA PUERTAS', '2021-06-13 01:24:02', 'A'),
	(16, 'VISITA TECNICA AIRE ACONDICIONADO', '2021-06-13 01:24:14', 'A'),
	(17, 'VISITA TECNICA CAMARA/PORTERO/ALARMA', '2021-06-13 01:24:42', 'A'),
	(18, 'VISITA TECNICA INODORO/LAVADERO', '2021-06-13 01:24:59', 'A'),
	(19, 'VISITA TECNICA TINA', '2021-06-13 01:25:11', 'A'),
	(20, 'VISITA TECNICA CABINA DE DUCHA/PUERTA DE DUCHA', '2021-06-13 01:25:37', 'A'),
	(21, 'VISITA TECNICA TANQUES/CISTERNAS/BIODIGESTOR', '2021-06-13 01:26:07', 'A'),
	(22, 'VISITA TECNICA THERMAS/DUCHAS', '2021-06-13 01:26:24', 'A'),
	(23, 'VISITA GRASS SINTETICO', '2021-06-13 01:26:40', 'A'),
	(24, 'VISITA INSPECCION', '2021-06-13 01:26:56', 'A'),
	(25, 'VISITA TECNICA LEVADIZO', '2021-06-13 01:27:14', 'A');
/*!40000 ALTER TABLE `mae_servicio` ENABLE KEYS */;

-- Dumping structure for table sigma_database.mae_tarifario
CREATE TABLE IF NOT EXISTS `mae_tarifario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `fec_creacion` datetime NOT NULL,
  `estado` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sigma_database.mae_tarifario: ~17 rows (approximately)
/*!40000 ALTER TABLE `mae_tarifario` DISABLE KEYS */;
INSERT INTO `mae_tarifario` (`id`, `zona`, `precio`, `fec_creacion`, `estado`) VALUES
	(1, 'ALGARROBAL - ILO', 15, '2021-06-13 04:08:37', 'A'),
	(2, 'CALANA - TACNA', 5, '2021-06-13 04:09:09', 'A'),
	(3, 'CHEN CHEN', 5, '2021-06-13 04:09:17', 'A'),
	(4, 'CIUDAD JARDIN ', 15, '2021-06-13 04:09:38', 'A'),
	(5, 'ILO', 0, '2021-06-13 04:09:49', 'A'),
	(6, 'ILO - ILO', 5, '2021-06-13 04:10:01', 'A'),
	(7, 'LA PAMPA', 15, '2021-06-13 04:10:14', 'A'),
	(8, 'LOS ANGELES', 5, '2021-06-13 04:10:31', 'A'),
	(9, 'MOQUEGUA', 0, '2021-06-13 04:10:45', 'A'),
	(10, 'PACHIA - TACNA', 5, '2021-06-13 04:10:57', 'A'),
	(11, 'PACOCHA - ILO', 35, '2021-06-13 04:11:08', 'A'),
	(12, 'PAMPA INALAMBRICA', 15, '2021-06-13 04:11:27', 'A'),
	(13, 'SAMEGUA', 5, '2021-06-13 04:11:36', 'A'),
	(14, 'SAN ANTONIO', 5, '2021-06-13 04:12:14', 'A'),
	(15, 'SAN FRANCISCO', 5, '2021-06-13 04:13:57', 'A'),
	(16, 'TACNA', 0, '2021-06-13 04:14:05', 'A'),
	(17, 'TORATA', 10, '2021-06-13 04:14:14', 'A'),
	(18, 'VILLA BOTIFLACA', 15, '2021-06-13 04:14:34', 'A'),
	(19, 'VILLA CUAJONES', 30, '2021-06-13 04:14:45', 'A');
/*!40000 ALTER TABLE `mae_tarifario` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sigma_database.mae_usuario: ~4 rows (approximately)
/*!40000 ALTER TABLE `mae_usuario` DISABLE KEYS */;
INSERT INTO `mae_usuario` (`id`, `nombres`, `ape_paterno`, `ape_materno`, `usuario`, `clave`, `tipo`, `estado`, `fec_creacion`) VALUES
	(2, 'JOSE', 'JOSE', 'LUIS', 'joseft', '123456', 'Administrador', 'A', '2021-06-05 19:29:55'),
	(3, 'ORESTES', 'ORESTES', 'ORESTES', 'oramirez', '123456', 'Administrador', 'A', '2021-06-05 19:30:31'),
	(4, 'ADMINISTRADOR', '', '', 'admin', '123456', 'Administrador', 'A', '2021-06-05 19:30:31'),
	(5, 'JHOSMELL', 'ALFARO', 'MUSAJA', 'jhoselyn', '123456', 'Tecnico', 'A', '2021-06-08 06:10:30');
/*!40000 ALTER TABLE `mae_usuario` ENABLE KEYS */;

-- Dumping structure for table sigma_database.muestra
CREATE TABLE IF NOT EXISTS `muestra` (
  `sucursal` varchar(200) DEFAULT NULL,
  `tip_proveedor` varchar(200) DEFAULT NULL,
  `contrastista` varchar(200) DEFAULT NULL,
  `tecnico` varchar(200) DEFAULT NULL,
  `num_operacion` varchar(200) DEFAULT NULL,
  `fec_operacion` varchar(200) DEFAULT NULL,
  `num_os` varchar(200) DEFAULT NULL,
  `num_documento` varchar(200) DEFAULT NULL,
  `nom_cliente` varchar(200) DEFAULT NULL,
  `ape_paterno` varchar(200) DEFAULT NULL,
  `ape_materno` varchar(200) DEFAULT NULL,
  `email_cliente` varchar(200) DEFAULT NULL,
  `tel_comercial` varchar(200) DEFAULT NULL,
  `tel_particular` varchar(200) DEFAULT NULL,
  `tel_movil` varchar(200) DEFAULT NULL,
  `dir_cliente` varchar(200) DEFAULT NULL,
  `ref_direccion` varchar(200) DEFAULT NULL,
  `distrito` varchar(200) DEFAULT NULL,
  `provincia` varchar(200) DEFAULT NULL,
  `servicio` varchar(200) DEFAULT NULL,
  `producto` varchar(200) DEFAULT NULL,
  `cantidad` varchar(200) DEFAULT NULL,
  `fec_estimada` varchar(200) DEFAULT NULL,
  `fec_programacion` varchar(200) DEFAULT NULL,
  `fec_reprogramacion` varchar(200) DEFAULT NULL,
  `turno` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `cantidad_reprogramacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sigma_database.muestra: ~25 rows (approximately)
/*!40000 ALTER TABLE `muestra` DISABLE KEYS */;
INSERT INTO `muestra` (`sucursal`, `tip_proveedor`, `contrastista`, `tecnico`, `num_operacion`, `fec_operacion`, `num_os`, `num_documento`, `nom_cliente`, `ape_paterno`, `ape_materno`, `email_cliente`, `tel_comercial`, `tel_particular`, `tel_movil`, `dir_cliente`, `ref_direccion`, `distrito`, `provincia`, `servicio`, `producto`, `cantidad`, `fec_estimada`, `fec_programacion`, `fec_reprogramacion`, `turno`, `estado`, `observaciones`, `cantidad_reprogramacion`) VALUES
	('521', 'PROPIO', 'SIGMA', '', '2110007897991', '', '568108', '20606026111', 'PRONEGOCIOS AVANZA MOQUEGUA S.A.C -', '', '', 'danielmaynas.95@gmail.com', '990060054', '990060054', '990060054', 'CALLE JUNIN 767-0- Interior:Moquegua', 'A espaldas de la Policía', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '128526-ROPERO CAPRI C/ESPEJO NATURE', '1', '1970-01-01', '44330', '44331', 'Mañana', 'OS REPROGRAMADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021797595', '', '564834', '04644718', 'Antonio gonzales', '', '', 'fgonsal69@hotmail.com', '931580373', '931580373', '931580373', 'Jiron ayacuho 526-0- Interior:Moquegua', 'Al frente de la Reniec- cercado ', 'Ilo', 'Ilo', '25874-ARMADO DE MUEBLE 2', '128528-ROPERO CAPRI C/ESPEJO JACARANDA', '1', '1970-01-01', '44324', '44331', 'Mañana', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112337-MODULO BAJO 2 CAJONES 60 CM', '1', '1970-01-01', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112400-PUERTAS 2 CAJONES 60 CMS BLANCO', '1', '1970-01-01', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100022052624', '', '568061', '25741539', 'PATRICIA ROXANA BRAVA CORNEJO', '', '', 'pbcku2712@hotmail.com', '943429900', '943429900', '943429900', 'CALLE AYACUCHO -350- Interior:Moquegua', 'CASA DE 2 PISOS COLOR AZUL CON REJAS BLANCAS', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '133002-ESTANTE 180 CM BAGAN 2 PUERTAS NATURE', '1', '1970-01-01', '44331', '', 'Mañana', 'OS COORDINADA', '', '0'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021933627', '', '566604', '04430228', 'Yovana Torres Chalco -', '', '', 'marianasologuren25@gmail.com', '953984153', '953984153', '953984153', 'villa paisajista alto la villa-0- Interior:Moquegua', 'de la bodega don camilo 200m mas adelante ', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '106599-ROPERO CARTAGENA 2P + 3C + ESPEJO', '1', '1970-01-01', '44328', '44331', 'Tarde', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '0', '', '566874', '46762588', 'Katty Sanz linares', '', '', 'kattysanz_17@hotmail.com', '931099565', '931099565', '931099565', 'Bloque H-4 - ciudad nueva  Dpto 5  Pacocha 2 piso-Dpto 5 - Interior:Moquegua', 'A espaldas del banco de crédito frente a un parque ', 'Pacocha', 'Ilo', '105216-INST. DE COCINA EMPOTRABLE ORANGE', '129520-PAP-COCINA EMPOTRABLE DE INDUCCIÓN 4 H ANCHO 77 CM', '1', '1970-01-01', '44331', '', 'Tarde', 'OS COORDINADA', 'TRX 4618, CAJA 80, FECHA 24-04-2021', '0'),
	('521', 'PROPIO', 'SIGMA', '', '2110007897991', '', '568108', '20606026111', 'PRONEGOCIOS AVANZA MOQUEGUA S.A.C -', '', '', 'danielmaynas.95@gmail.com', '990060054', '990060054', '990060054', 'CALLE JUNIN 767-0- Interior:Moquegua', 'A espaldas de la Policía', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '128526-ROPERO CAPRI C/ESPEJO NATURE', '1', '44330', '44330', '44331', 'Mañana', 'OS REPROGRAMADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021797595', '', '564834', '04644718', 'Antonio gonzales', '', '', 'fgonsal69@hotmail.com', '931580373', '931580373', '931580373', 'Jiron ayacuho 526-0- Interior:Moquegua', 'Al frente de la Reniec- cercado ', 'Ilo', 'Ilo', '25874-ARMADO DE MUEBLE 2', '128528-ROPERO CAPRI C/ESPEJO JACARANDA', '1', '44324', '44324', '44331', 'Mañana', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112337-MODULO BAJO 2 CAJONES 60 CM', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112400-PUERTAS 2 CAJONES 60 CMS BLANCO', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100022052624', '', '568061', '25741539', 'PATRICIA ROXANA BRAVA CORNEJO', '', '', 'pbcku2712@hotmail.com', '943429900', '943429900', '943429900', 'CALLE AYACUCHO -350- Interior:Moquegua', 'CASA DE 2 PISOS COLOR AZUL CON REJAS BLANCAS', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '133002-ESTANTE 180 CM BAGAN 2 PUERTAS NATURE', '1', '44331', '44331', '', 'Mañana', 'OS COORDINADA', '', '0'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021933627', '', '566604', '04430228', 'Yovana Torres Chalco -', '', '', 'marianasologuren25@gmail.com', '953984153', '953984153', '953984153', 'villa paisajista alto la villa-0- Interior:Moquegua', 'de la bodega don camilo 200m mas adelante ', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '106599-ROPERO CARTAGENA 2P + 3C + ESPEJO', '1', '44328', '44328', '44331', 'Tarde', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '0', '', '566874', '46762588', 'Katty Sanz linares', '', '', 'kattysanz_17@hotmail.com', '931099565', '931099565', '931099565', 'Bloque H-4 - ciudad nueva  Dpto 5  Pacocha 2 piso-Dpto 5 - Interior:Moquegua', 'A espaldas del banco de crédito frente a un parque ', 'Pacocha', 'Ilo', '105216-INST. DE COCINA EMPOTRABLE ORANGE', '129520-PAP-COCINA EMPOTRABLE DE INDUCCIÓN 4 H ANCHO 77 CM', '1', '44331', '44331', '', 'Tarde', 'OS COORDINADA', 'TRX 4618, CAJA 80, FECHA 24-04-2021', '0'),
	('521', 'PROPIO', 'SIGMA', '', '2110007897991', '', '568108', '20606026111', 'PRONEGOCIOS AVANZA MOQUEGUA S.A.C -', '', '', 'danielmaynas.95@gmail.com', '990060054', '990060054', '990060054', 'CALLE JUNIN 767-0- Interior:Moquegua', 'A espaldas de la Policía', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '128526-ROPERO CAPRI C/ESPEJO NATURE', '1', '44330', '44330', '44331', 'Mañana', 'OS REPROGRAMADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021797595', '', '564834', '04644718', 'Antonio gonzales', '', '', 'fgonsal69@hotmail.com', '931580373', '931580373', '931580373', 'Jiron ayacuho 526-0- Interior:Moquegua', 'Al frente de la Reniec- cercado ', 'Ilo', 'Ilo', '25874-ARMADO DE MUEBLE 2', '128528-ROPERO CAPRI C/ESPEJO JACARANDA', '1', '44324', '44324', '44331', 'Mañana', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112337-MODULO BAJO 2 CAJONES 60 CM', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112400-PUERTAS 2 CAJONES 60 CMS BLANCO', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100022052624', '', '568061', '25741539', 'PATRICIA ROXANA BRAVA CORNEJO', '', '', 'pbcku2712@hotmail.com', '943429900', '943429900', '943429900', 'CALLE AYACUCHO -350- Interior:Moquegua', 'CASA DE 2 PISOS COLOR AZUL CON REJAS BLANCAS', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '133002-ESTANTE 180 CM BAGAN 2 PUERTAS NATURE', '1', '44331', '44331', '', 'Mañana', 'OS COORDINADA', '', '0'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021933627', '', '566604', '04430228', 'Yovana Torres Chalco -', '', '', 'marianasologuren25@gmail.com', '953984153', '953984153', '953984153', 'villa paisajista alto la villa-0- Interior:Moquegua', 'de la bodega don camilo 200m mas adelante ', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '106599-ROPERO CARTAGENA 2P + 3C + ESPEJO', '1', '44328', '44328', '44331', 'Tarde', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '0', '', '566874', '46762588', 'Katty Sanz linares', '', '', 'kattysanz_17@hotmail.com', '931099565', '931099565', '931099565', 'Bloque H-4 - ciudad nueva  Dpto 5  Pacocha 2 piso-Dpto 5 - Interior:Moquegua', 'A espaldas del banco de crédito frente a un parque ', 'Pacocha', 'Ilo', '105216-INST. DE COCINA EMPOTRABLE ORANGE', '129520-PAP-COCINA EMPOTRABLE DE INDUCCIÓN 4 H ANCHO 77 CM', '1', '44331', '44331', '', 'Tarde', 'OS COORDINADA', 'TRX 4618, CAJA 80, FECHA 24-04-2021', '0'),
	('521', 'PROPIO', 'SIGMA', '', '2110007897991', '', '568108', '20606026111', 'PRONEGOCIOS AVANZA MOQUEGUA S.A.C -', '', '', 'danielmaynas.95@gmail.com', '990060054', '990060054', '990060054', 'CALLE JUNIN 767-0- Interior:Moquegua', 'A espaldas de la Policía', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '128526-ROPERO CAPRI C/ESPEJO NATURE', '1', '44330', '44330', '44331', 'Mañana', 'OS REPROGRAMADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021797595', '', '564834', '04644718', 'Antonio gonzales', '', '', 'fgonsal69@hotmail.com', '931580373', '931580373', '931580373', 'Jiron ayacuho 526-0- Interior:Moquegua', 'Al frente de la Reniec- cercado ', 'Ilo', 'Ilo', '25874-ARMADO DE MUEBLE 2', '128528-ROPERO CAPRI C/ESPEJO JACARANDA', '1', '44324', '44324', '44331', 'Mañana', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112337-MODULO BAJO 2 CAJONES 60 CM', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2200022044169', '', '568047', '04639414', 'MIRIAM TORRES DE VARGAS', '', '', 'mjvarga@gmail.com', '+51972628026', '+51972628026', '+51972628026', 'Calle Las Golondrinas Mz-z -Lt-39- Interior:Moquegua', 'URB Temporales Pueblo Nuevo El Barrio Debsauther Peru En La Garita Ya Lo Orientan', 'Moquegua', 'Mariscal Nieto', '113595-ARM.E INST. MODULOS 20-60/UN', '112400-PUERTAS 2 CAJONES 60 CMS BLANCO', '1', '44333', '44333', '44331', 'Mañana', 'OS REPROGRAMADA ANTICIPADA', '', '1'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100022052624', '', '568061', '25741539', 'PATRICIA ROXANA BRAVA CORNEJO', '', '', 'pbcku2712@hotmail.com', '943429900', '943429900', '943429900', 'CALLE AYACUCHO -350- Interior:Moquegua', 'CASA DE 2 PISOS COLOR AZUL CON REJAS BLANCAS', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '133002-ESTANTE 180 CM BAGAN 2 PUERTAS NATURE', '1', '44331', '44331', '', 'Mañana', 'OS COORDINADA', '', '0'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '2100021933627', '', '566604', '04430228', 'Yovana Torres Chalco -', '', '', 'marianasologuren25@gmail.com', '953984153', '953984153', '953984153', 'villa paisajista alto la villa-0- Interior:Moquegua', 'de la bodega don camilo 200m mas adelante ', 'Moquegua', 'Mariscal Nieto', '25874-ARMADO DE MUEBLE 2', '106599-ROPERO CARTAGENA 2P + 3C + ESPEJO', '1', '44328', '44328', '44331', 'Tarde', 'OS REPROGRAMADA', '', '2'),
	('521', 'PROPIO', 'SIGMA', 'EDGAR RONAL TICONA MASCO', '0', '', '566874', '46762588', 'Katty Sanz linares', '', '', 'kattysanz_17@hotmail.com', '931099565', '931099565', '931099565', 'Bloque H-4 - ciudad nueva  Dpto 5  Pacocha 2 piso-Dpto 5 - Interior:Moquegua', 'A espaldas del banco de crédito frente a un parque ', 'Pacocha', 'Ilo', '105216-INST. DE COCINA EMPOTRABLE ORANGE', '129520-PAP-COCINA EMPOTRABLE DE INDUCCIÓN 4 H ANCHO 77 CM', '1', '44331', '44331', '', 'Tarde', 'OS COORDINADA', 'TRX 4618, CAJA 80, FECHA 24-04-2021', '0');
/*!40000 ALTER TABLE `muestra` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
