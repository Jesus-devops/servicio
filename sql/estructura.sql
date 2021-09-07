/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.8-MariaDB : Database - alumno
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alumno` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `alumno`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nivel` tinyint(2) NOT NULL,
  PRIMARY KEY (`correo`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  UNIQUE KEY `correo_UNIQUE` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `noControl` int(10) unsigned NOT NULL,
  `foto` varchar(80) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `semestre` int(2) unsigned NOT NULL,
  `grupo` varchar(6) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `edad` tinyint(3) unsigned NOT NULL,
  `email` varchar(55) NOT NULL,
  `CP` int(5) unsigned NOT NULL,
  `escolaridad` varchar(25) NOT NULL,
  `nombreInstitucion` varchar(50) NOT NULL,
  `trabaja` varchar(10) NOT NULL,
  `padre` varchar(8) NOT NULL,
  `madre` varchar(8) NOT NULL,
  `nHermanos` int(2) NOT NULL,
  `becado` varchar(2) NOT NULL,
  `idAsesor` int(10) NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`noControl`),
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_alumno_asesor1_idx` (`idAsesor`),
  CONSTRAINT `fk_alumno_asesor1` FOREIGN KEY (`idAsesor`) REFERENCES `asesor` (`idAsesor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `anexoe` */

DROP TABLE IF EXISTS `anexoe`;

CREATE TABLE `anexoe` (
  `noControl` int(10) unsigned NOT NULL,
  `creditosAcumulados` smallint(3) unsigned NOT NULL,
  `servicioSocial` varchar(2) NOT NULL,
  `residenciasPro` varchar(2) NOT NULL,
  `titulacion` varchar(3) NOT NULL,
  `adeudaMaterias` varchar(2) NOT NULL,
  `C` decimal(2,1) unsigned DEFAULT NULL,
  `CIT` decimal(2,1) unsigned DEFAULT NULL,
  `PDS` decimal(2,1) unsigned DEFAULT NULL,
  `PD` decimal(2,1) unsigned DEFAULT NULL,
  `AE` decimal(2,1) unsigned DEFAULT NULL,
  `CCB` decimal(2,1) unsigned DEFAULT NULL,
  `FE` decimal(2,1) unsigned DEFAULT NULL,
  `tOtrosC` decimal(2,1) unsigned NOT NULL,
  `n1` tinyint(1) unsigned DEFAULT NULL,
  `n2` tinyint(1) unsigned DEFAULT NULL,
  `n3` tinyint(1) unsigned DEFAULT NULL,
  `n4` tinyint(1) unsigned DEFAULT NULL,
  `n5` tinyint(1) unsigned DEFAULT NULL,
  `n6` tinyint(1) unsigned DEFAULT NULL,
  `n7` tinyint(1) unsigned DEFAULT NULL,
  `n8` tinyint(1) unsigned DEFAULT NULL,
  `n9` tinyint(1) unsigned DEFAULT NULL,
  `n10` tinyint(1) unsigned DEFAULT NULL,
  `tIngles` tinyint(1) unsigned NOT NULL,
  `estado` varchar(15) NOT NULL DEFAULT 'activo',
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_anexoe_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_anexoe_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `areafamiliarysocial` */

DROP TABLE IF EXISTS `areafamiliarysocial`;

CREATE TABLE `areafamiliarysocial` (
  `relacionFamilia` varchar(20) NOT NULL,
  `dificultades` varchar(30) DEFAULT NULL,
  `tipoDificultad` varchar(30) DEFAULT NULL,
  `actitudFamilia` varchar(30) NOT NULL,
  `relacionP` varchar(30) DEFAULT NULL,
  `actitudP` varchar(30) DEFAULT NULL,
  `relacionM` varchar(30) DEFAULT NULL,
  `actitudM` varchar(30) DEFAULT NULL,
  `ligadoAfectivamente` varchar(20) NOT NULL,
  `ligadoPorque` varchar(50) NOT NULL,
  `tuEducacion` varchar(30) NOT NULL,
  `decision` varchar(30) NOT NULL,
  `otroDato` varchar(50) DEFAULT NULL,
  `companerosR` varchar(10) NOT NULL,
  `companerosPorque` varchar(100) NOT NULL,
  `amigosR` varchar(10) NOT NULL,
  `tienePareja` varchar(2) NOT NULL,
  `parejaR` varchar(10) DEFAULT NULL,
  `profesoresR` varchar(10) NOT NULL,
  `autoridadesR` varchar(10) NOT NULL,
  `tiempoLibre` varchar(100) NOT NULL,
  `actividades` varchar(100) NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_areafamiliarysocial_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_areafamiliarysocial_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `asesor` */

DROP TABLE IF EXISTS `asesor`;

CREATE TABLE `asesor` (
  `idAsesor` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `nivel` tinyint(2) NOT NULL,
  PRIMARY KEY (`idAsesor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `beca` */

DROP TABLE IF EXISTS `beca`;

CREATE TABLE `beca` (
  `Institucion` varchar(30) DEFAULT NULL,
  `nombreInstitucion` varchar(60) DEFAULT NULL,
  `noControl` int(10) unsigned NOT NULL,
  KEY `fk_beca_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_beca_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `caracteristicaspersonales` */

DROP TABLE IF EXISTS `caracteristicaspersonales`;

CREATE TABLE `caracteristicaspersonales` (
  `idCP` int(10) unsigned NOT NULL,
  `puntual` varchar(9) NOT NULL,
  `timido` varchar(9) NOT NULL,
  `alegre` varchar(9) NOT NULL,
  `agresivo` varchar(9) NOT NULL,
  `abiertoIdeas` varchar(9) NOT NULL,
  `reflexivo` varchar(9) NOT NULL,
  `constante` varchar(9) NOT NULL,
  `optimista` varchar(9) NOT NULL,
  `impulsivo` varchar(9) NOT NULL,
  `silencioso` varchar(9) NOT NULL,
  `generoso` varchar(9) NOT NULL,
  `inquieto` varchar(9) NOT NULL,
  `humor` varchar(9) NOT NULL,
  `dominante` varchar(9) NOT NULL,
  `egoista` varchar(9) NOT NULL,
  `sumiso` varchar(9) NOT NULL,
  `confiado` varchar(9) NOT NULL,
  `imaginativo` varchar(9) NOT NULL,
  `iniciativa` varchar(9) NOT NULL,
  `sociable` varchar(9) NOT NULL,
  `responsable` varchar(9) NOT NULL,
  `perseverante` varchar(9) NOT NULL,
  `motivado` varchar(9) NOT NULL,
  `activo` varchar(9) NOT NULL,
  `independiente` varchar(9) NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCP`),
  UNIQUE KEY `idCP_UNIQUE` (`idCP`),
  KEY `fk_caracteristicaspersonales_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_caracteristicaspersonales_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `celular` */

DROP TABLE IF EXISTS `celular`;

CREATE TABLE `celular` (
  `celular1` int(12) unsigned DEFAULT NULL,
  `celular2` int(12) unsigned DEFAULT NULL,
  `noControl` int(10) unsigned NOT NULL,
  PRIMARY KEY (`noControl`),
  KEY `fk_celular_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_celular_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `estadopsicofisiologico` */

DROP TABLE IF EXISTS `estadopsicofisiologico`;

CREATE TABLE `estadopsicofisiologico` (
  `tienePrescripcion` varchar(2) NOT NULL,
  `cualPrescripcion` varchar(50) DEFAULT NULL,
  `manosPiesHinchados` varchar(15) NOT NULL,
  `dolorVientre` varchar(15) NOT NULL,
  `dolorCabezaVomito` varchar(15) NOT NULL,
  `perdidaEquilibrio` varchar(15) NOT NULL,
  `fatigaAgotamiento` varchar(15) NOT NULL,
  `perdidaVistaOido` varchar(15) NOT NULL,
  `DificilDormir` varchar(15) NOT NULL,
  `pesadillasTerrorNocturnoA` varchar(15) NOT NULL,
  `incontinencia` varchar(15) NOT NULL,
  `tartamudeo` varchar(15) NOT NULL,
  `miedoIntensoA` varchar(15) NOT NULL,
  `observacionesHigiene` varchar(80) DEFAULT NULL,
  `noControl` int(10) unsigned NOT NULL,
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_estadopsicofisiologico_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_estadopsicofisiologico_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `extra` */

DROP TABLE IF EXISTS `extra`;

CREATE TABLE `extra` (
  `primaria` varchar(50) NOT NULL,
  `secundaria` varchar(50) NOT NULL,
  `prepa` varchar(50) NOT NULL,
  `estudiosSuperiores` varchar(50) DEFAULT NULL,
  `fechaDeNacimiento` date NOT NULL,
  `lugarDeNacimiento` varchar(60) NOT NULL,
  `peso` tinyint(3) unsigned NOT NULL,
  `estatura` tinyint(3) unsigned NOT NULL,
  `estadoCivil` varchar(10) NOT NULL,
  `nHijos` tinyint(2) unsigned DEFAULT NULL,
  `domicilioActual` varchar(50) NOT NULL,
  `telefono` int(13) unsigned NOT NULL,
  `tipoVivienda` varchar(15) NOT NULL,
  `viviendaEs` varchar(10) NOT NULL,
  `nPersonas` tinyint(2) unsigned NOT NULL,
  `parentesco` varchar(15) DEFAULT NULL,
  `vivira` varchar(30) NOT NULL,
  `ingresoMfamiliar` int(8) unsigned DEFAULT NULL,
  `tuIngreso` int(8) unsigned DEFAULT NULL,
  `avisarNombre` varchar(45) NOT NULL,
  `avisarTelefono` int(15) unsigned NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_extra_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_extra_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `hermanos` */

DROP TABLE IF EXISTS `hermanos`;

CREATE TABLE `hermanos` (
  `nombre` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `estudios` varchar(30) NOT NULL,
  `comoRelacion` varchar(20) DEFAULT NULL,
  `actitudCon` varchar(20) DEFAULT NULL,
  `noControl` int(10) unsigned NOT NULL,
  KEY `fk_hermanos_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_hermanos_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `madre` */

DROP TABLE IF EXISTS `madre`;

CREATE TABLE `madre` (
  `nombreM` varchar(45) NOT NULL,
  `edadM` tinyint(2) unsigned NOT NULL,
  `maxEscolaridadM` varchar(15) NOT NULL,
  `trabajaM` varchar(2) NOT NULL,
  `profesionM` varchar(45) DEFAULT NULL,
  `lugarDeTrabajoM` varchar(45) DEFAULT NULL,
  `tipoTrabajoM` varchar(45) DEFAULT NULL,
  `domicilioM` varchar(60) NOT NULL,
  `telefonoM` int(12) unsigned NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  KEY `fk_madre_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_madre_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `observaciones` */

DROP TABLE IF EXISTS `observaciones`;

CREATE TABLE `observaciones` (
  `idCP` int(10) unsigned NOT NULL,
  `puntualO` varchar(50) DEFAULT NULL,
  `timidoO` varchar(50) DEFAULT NULL,
  `alegreO` varchar(50) DEFAULT NULL,
  `agresivoO` varchar(50) DEFAULT NULL,
  `abiertoIdeasO` varchar(50) DEFAULT NULL,
  `reflexivoO` varchar(50) DEFAULT NULL,
  `constanteO` varchar(50) DEFAULT NULL,
  `optimistaO` varchar(50) DEFAULT NULL,
  `impulsivoO` varchar(50) DEFAULT NULL,
  `silenciosoO` varchar(50) DEFAULT NULL,
  `generosoO` varchar(50) DEFAULT NULL,
  `inquietoO` varchar(50) DEFAULT NULL,
  `humorO` varchar(50) DEFAULT NULL,
  `dominanteO` varchar(50) DEFAULT NULL,
  `egoistaO` varchar(50) DEFAULT NULL,
  `sumisoO` varchar(50) DEFAULT NULL,
  `confiadoO` varchar(50) DEFAULT NULL,
  `imaginativoO` varchar(50) DEFAULT NULL,
  `iniciativaO` varchar(50) DEFAULT NULL,
  `sociableO` varchar(50) DEFAULT NULL,
  `responsableO` varchar(50) DEFAULT NULL,
  `perseveranteO` varchar(50) DEFAULT NULL,
  `motivadoO` varchar(50) DEFAULT NULL,
  `activoO` varchar(50) DEFAULT NULL,
  `independienteO` varchar(50) DEFAULT NULL,
  KEY `fk_observaciones_caracteristicaspersonales1_idx` (`idCP`),
  CONSTRAINT `fk_observaciones_caracteristicaspersonales1` FOREIGN KEY (`idCP`) REFERENCES `caracteristicaspersonales` (`idCP`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `padre` */

DROP TABLE IF EXISTS `padre`;

CREATE TABLE `padre` (
  `nombreP` varchar(45) NOT NULL,
  `edadP` tinyint(2) unsigned NOT NULL,
  `maxEscolaridadP` varchar(15) NOT NULL,
  `trabajaP` varchar(2) NOT NULL,
  `profesionP` varchar(45) DEFAULT NULL,
  `lugarDeTrabajoP` varchar(45) DEFAULT NULL,
  `tipoTrabajoP` varchar(45) DEFAULT NULL,
  `domicilioP` varchar(60) NOT NULL,
  `telefonoP` int(12) unsigned NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  KEY `fk_padre_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_padre_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `periodo` */

DROP TABLE IF EXISTS `periodo`;

CREATE TABLE `periodo` (
  `idPeriodo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `periodo` varchar(45) NOT NULL,
  `año` year(4) NOT NULL,
  `alumno_noControl` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idPeriodo`),
  KEY `fk_periodo_alumno1_idx` (`alumno_noControl`),
  CONSTRAINT `fk_periodo_alumno1` FOREIGN KEY (`alumno_noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `psicopedagogica` */

DROP TABLE IF EXISTS `psicopedagogica`;

CREATE TABLE `psicopedagogica` (
  `idPP` int(10) unsigned NOT NULL,
  `ser` varchar(80) NOT NULL,
  `ayudaTareas` varchar(2) NOT NULL,
  `problemasPersonales` varchar(80) NOT NULL,
  `rendimientoEscolar` varchar(30) NOT NULL,
  `asignaturasTienes` varchar(80) NOT NULL,
  `favorita` varchar(25) NOT NULL,
  `fPor` varchar(45) DEFAULT NULL,
  `sobresales` varchar(25) NOT NULL,
  `sPor` varchar(45) DEFAULT NULL,
  `desagrada` varchar(25) NOT NULL,
  `dPor` varchar(45) DEFAULT NULL,
  `materiaBaja` varchar(25) NOT NULL,
  `bPor` varchar(45) DEFAULT NULL,
  `vienesTec` varchar(80) NOT NULL,
  `motivaVenir` varchar(80) NOT NULL,
  `promedioAnterior` tinyint(2) unsigned NOT NULL,
  `reprobadas` varchar(80) DEFAULT NULL,
  `inmediatos` varchar(80) NOT NULL,
  `metasVida` varchar(80) NOT NULL,
  `nombre del entrevistador` varchar(60) DEFAULT NULL,
  `yoSoy` varchar(80) NOT NULL,
  `caracterEs` varchar(80) NOT NULL,
  `meGusta` varchar(80) NOT NULL,
  `aspiroVida` varchar(80) NOT NULL,
  `miedoDe` varchar(80) NOT NULL,
  `piensoLograr` varchar(80) NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idPP`),
  UNIQUE KEY `idPP_UNIQUE` (`idPP`),
  UNIQUE KEY `noControl_UNIQUE` (`noControl`),
  KEY `fk_psicopedagogica_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_psicopedagogica_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `reprobadas` */

DROP TABLE IF EXISTS `reprobadas`;

CREATE TABLE `reprobadas` (
  `noControl` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  KEY `fk_reprobadas_psicopedagogica1_idx` (`noControl`),
  CONSTRAINT `fk_reprobadas_psicopedagogica1` FOREIGN KEY (`noControl`) REFERENCES `psicopedagogica` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `trabajo` */

DROP TABLE IF EXISTS `trabajo`;

CREATE TABLE `trabajo` (
  `nombreEmpresa` varchar(60) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `noControl` int(10) unsigned NOT NULL,
  KEY `fk_trabajo_alumno1_idx` (`noControl`),
  CONSTRAINT `fk_trabajo_alumno1` FOREIGN KEY (`noControl`) REFERENCES `alumno` (`noControl`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Trigger structure for table `periodo` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `nuevo_periodo` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `nuevo_periodo` AFTER INSERT ON `periodo` FOR EACH ROW BEGIN 
   UPDATE alumno SET semestre = semestre+1;
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
