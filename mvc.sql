-- MySQL dump 10.12
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	6.0.0-alpha-community-nt-debug

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `detallefactura`
--

DROP TABLE IF EXISTS `detallefactura`;
CREATE TABLE `detallefactura` (
  `iddetalle` int(10) NOT NULL AUTO_INCREMENT,
  `idfactura` int(10) NOT NULL,
  `idproducto` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `cantidad` int(8) NOT NULL,
  `subtotal` int(10) NOT NULL,
  PRIMARY KEY (`iddetalle`),
  KEY `idproducto` (`idproducto`),
  KEY `idfactura` (`idfactura`),
  CONSTRAINT `detallefactura_ibfk_2` FOREIGN KEY (`idfactura`) REFERENCES `tblventa` (`idfactura`),
  CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `tblproductos` (`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detallefactura`
--

LOCK TABLES `detallefactura` WRITE;
/*!40000 ALTER TABLE `detallefactura` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallefactura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclientes`
--

DROP TABLE IF EXISTS `tblclientes`;
CREATE TABLE `tblclientes` (
  `cedula` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclientes`
--

LOCK TABLES `tblclientes` WRITE;
/*!40000 ALTER TABLE `tblclientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblclientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblproductos`
--

DROP TABLE IF EXISTS `tblproductos`;
CREATE TABLE `tblproductos` (
  `idproducto` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `nitproveedor` int(10) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `nitproveedor` (`nitproveedor`),
  CONSTRAINT `tblproductos_ibfk_1` FOREIGN KEY (`nitproveedor`) REFERENCES `tblproveedores` (`nitproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductos`
--

LOCK TABLES `tblproductos` WRITE;
/*!40000 ALTER TABLE `tblproductos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblproductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblproveedores`
--

DROP TABLE IF EXISTS `tblproveedores`;
CREATE TABLE `tblproveedores` (
  `nitproveedor` int(10) NOT NULL,
  `razonsocial` varchar(40) NOT NULL,
  `telefono` varchar(24) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `nombrecontacto` varchar(30) NOT NULL,
  `cargocontacto` varchar(30) DEFAULT NULL,
  `celular` varchar(24) NOT NULL,
  `pagweb` text,
  PRIMARY KEY (`nitproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproveedores`
--

LOCK TABLES `tblproveedores` WRITE;
/*!40000 ALTER TABLE `tblproveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblproveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblventa`
--

DROP TABLE IF EXISTS `tblventa`;
CREATE TABLE `tblventa` (
  `idfactura` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `totalfactura` int(10) NOT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `cedula` (`cedula`),
  CONSTRAINT `tblventa_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `tblclientes` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblventa`
--

LOCK TABLES `tblventa` WRITE;
/*!40000 ALTER TABLE `tblventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblventa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-18  1:43:12
