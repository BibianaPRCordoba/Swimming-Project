CREATE DATABASE proyecto_natacion;
USE proyecto_natacion;

#horarios

#######################################################################################################################

#####################
### CREATE TABLES ###
#####################

# Table structure for "usuarios"
DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_padre` int(11) NOT NULL,
  `id_maestro` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apaterno` varchar(60) NOT NULL,
  `amaterno` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_padre` (`id_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

# Table structure for 'sesiones_activas'
DROP TABLE IF EXISTS `sesiones_activas`;
CREATE TABLE `sesiones_activas` (
  `id_sesion` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `hora_ini_sesion` datetime NOT NULL,
  `hora_fin_sesion` datetime NOT NULL,
  `origen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_sesion`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

# MAESTROS
DROP TABLE IF EXISTS `maestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maestros` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apaterno` varchar(60) NOT NULL,
  `amaterno` varchar(60) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  PRIMARY KEY (`id_maestro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

# NINOS
DROP TABLE IF EXISTS `ninos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ninos` (
  `id_nino` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_nino` varchar(60) DEFAULT NULL,
  `apaterno_nino` varchar(60) DEFAULT NULL,
  `amaterno_nino` varchar(60) DEFAULT NULL,
  `tel_emergencia` varchar(10) NOT NULL,
  `nivel` int(11) NOT NULL,
  `role_nino` varchar(60) DEFAULT NULL,
  `estado_nino` varchar(60) DEFAULT NULL,
  `id_padre` int(11) NOT NULL,
  PRIMARY KEY (`id_nino`),
  KEY `id_padre` (`id_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

# PADRES
DROP TABLE IF EXISTS `padres`;
CREATE TABLE `padres` (
  `id_padre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apaterno` varchar(60) NOT NULL,
  `amaterno` varchar(60) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `id_nino` int(11) NOT NULL,
  PRIMARY KEY (`id_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#######################################################################################################################

##########################
### SEE DATA OF TABLES ###
##########################

SELECT * FROM usuarios;
SELECT * FROM sesiones_activas;

#######################################################################################################################

###################
### DROP TABLES ###
###################

-- !!! 
-- COMMENT ALL THE LINES OF THIS SECTION
-- !!!

#DROP TABLE usuarios;
#DROP TABLE sesiones_activas;

#######################################################################################################################

###################################
### CREATION OF DATA FOR TABLES ###
###################################

# USUARIOS
INSERT INTO `usuarios` VALUES
(1,1,0,'Pepes','Pepe','Pepe','pepe@gmail.com','pepe','1234','Padre',1),
(3,0,0,'Ninguno',' ',' ',' ','','','',0),
(4,0,1,'Maestros','Maestro','Maestro','maestro@gmail.com','Maestro','1234','Maestro',1),
(7,5,0,'ddd','ddd','ddd','ddd','dd','dd','Padre',1);

# MAESTROS
INSERT INTO `maestros` VALUES (1,'Maestros','Maestro','Maestro','54654','dfsad');

# Ninos
INSERT INTO `ninos` VALUES
(0,'Ninguno',' ',' ',' ',0,'Nino','1',0),
(1,'p','p','p','32324',1,'Nino','1',1);

# PADRES
INSERT INTO `padres` VALUES
(0,'Ninguno',' ',' ',' ',' ',0),
(1,'Pepes','Pepe','Pepe','123','p',1),
(5,'ddd','ddd','ddd','ddd','ddd',1);

#######################################################################################################################


#######################################################################################################################


#######################################################################################################################
