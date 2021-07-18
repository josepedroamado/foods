-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2018 at 08:21 PM
-- Server version: 5.5.60
-- PHP Version: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--
CREATE DATABASE `web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCat` varchar(255) NOT NULL,
  `eliminado` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `comentario_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `detalle` longtext NOT NULL,
  `respuesta` longtext NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `publicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`comentario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `favorito_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `publicacion_id` int(11) NOT NULL,
  PRIMARY KEY (`favorito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `publicacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` longtext NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `eliminado` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`publicacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `tipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipo` varchar(255) NOT NULL,
  PRIMARY KEY (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`tipo_id`, `nombreTipo`) VALUES
(1, 'Receta'),
(2, 'Nota');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsr` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  `eliminado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombreUsr`, `apellido`, `email`, `password`, `administrador`, `eliminado`) VALUES
(1, 'Admin', 'Prueba', 'admin@prueba.com', '823da4223e46ec671a10ea13d7823534', 1, 0),
(2, 'Usuario', 'Prueba', 'usuario@prueba.com', '823da4223e46ec671a10ea13d7823534', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
