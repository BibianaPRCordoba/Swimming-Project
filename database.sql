CREATE DATABASE proyecto_natacion;
USE proyecto_natacion;

#######################################################################################################################

#####################
### CREATE TABLES ###
#####################

# Table structure for "usuarios"
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

# Table structure for 'sesiones_activas'
DROP TABLE IF EXISTS `sesiones_activas`;
CREATE TABLE `sesiones_activas` (
  `id_sesion` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `hora_ini_sesion` datetime NOT NULL,
  `hora_fin_sesion` datetime NOT NULL,
  `origen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_sesion`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

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

INSERT INTO usuarios (id_usuario, nombre, apaterno, amaterno, telefono, email, username, password, rol, ocupacion, estado) VALUES
(1, 'Admin', 'Admin', 'Admin', '4425879634', 'admin@admin.com', 'admin', '1234', 'SU', 'Super Usuario', 1);

#######################################################################################################################


#######################################################################################################################


#######################################################################################################################
