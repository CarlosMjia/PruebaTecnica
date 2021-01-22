-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2021 a las 03:15:01
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `softseguros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `#` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Cliente` text NOT NULL,
  `Numero_Documento` varchar(10) NOT NULL,
  `Email` text NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  `Activar_Registro` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`#`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`#`, `Nombre_Cliente`, `Numero_Documento`, `Email`, `Fecha_Nacimiento`, `Fecha_Creacion`, `Activar_Registro`) VALUES
(13, 'carlos', '2323', 'esasadas@mejsd.com', '5422-04-05', '0000-00-00', '0'),
(14, '', '', '', '0000-00-00', '0000-00-00', '0'),
(15, 'Carlos Augusto Mejia ', '2321323', 'carlosmejia@unitecnica.ned', '2001-05-14', '2021-01-22', '1'),
(16, 'mejia', '2321323', 'carlosmejia@unitecnica', '1999-02-15', '2021-01-21', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
