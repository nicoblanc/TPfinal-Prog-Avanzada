-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2017 a las 19:13:25
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sgp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`clientcode` int(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`itemcode` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `projectcode` varchar(20) NOT NULL,
  `prioriry` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`itemcode`, `description`, `itemtype`, `projectcode`, `prioriry`) VALUES
(1, 'Reporte', '1', '1', 0),
(2, 'Nuevo turno', '2', '1', 0),
(3, 'IDC', '1', '1', 0),
(4, 'Perfiles de usuario dinámicos ', '3', '1', 0),
(5, 'No funciona correctamente la autentican por win', '2', '1', 0),
(6, 'No se actualiza el estado de usuario ', '2', '1', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemhistory`
--

CREATE TABLE IF NOT EXISTS `itemhistory` (
`historyid` int(11) NOT NULL,
  `creationdate` datetime NOT NULL,
  `itemcode` varchar(20) NOT NULL,
  `seqstate` int(11) NOT NULL,
  `itemstate` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `responsibleuser` varchar(20) NOT NULL,
  `isLastState` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemhistory`
--

INSERT INTO `itemhistory` (`historyid`, `creationdate`, `itemcode`, `seqstate`, `itemstate`, `description`, `responsibleuser`, `isLastState`) VALUES
(1, '2017-05-06 12:40:36', '1', 1, '1', ' descripcion de prueba', '1', 0),
(2, '2017-05-08 21:45:06', '1', 1, '2', ' descripcion de prueba', '1', 0),
(3, '2017-05-08 21:46:33', '3', 1, '2', ' descripcion de prueba', '1', 0),
(4, '2017-05-08 21:46:47', '3', 1, '3', ' descripcion de prueba', '1', 0),
(5, '2017-05-08 21:47:00', '3', 1, '4', ' descripcion de prueba', '1', 1),
(6, '2017-05-08 22:37:37', '1', 1, '1', ' descripcion de prueba', '1', 0),
(7, '2017-05-08 22:40:46', '1', 1, '1', ' descripcion de prueba', '1', 0),
(8, '2017-05-08 22:40:51', '1', 1, '0', ' descripcion de prueba', '1', 0),
(9, '2017-05-08 22:40:56', '1', 1, '0', ' descripcion de prueba', '1', 0),
(10, '2017-05-08 22:41:03', '1', 1, '0', ' descripcion de prueba', '1', 0),
(11, '2017-05-08 22:41:08', '1', 1, '3', ' descripcion de prueba', '1', 0),
(12, '2017-05-08 22:46:19', '1', 1, '3', ' descripcion de prueba', '1', 0),
(13, '2017-05-08 22:47:13', '1', 1, '3', ' descripcion de prueba', '1', 0),
(14, '2017-05-08 22:47:29', '1', 1, '3', ' descripcion de prueba', '1', 0),
(15, '2017-05-08 22:47:38', '1', 1, '1', ' descripcion de prueba', '1', 0),
(16, '2017-05-08 22:47:47', '1', 1, '0', ' descripcion de prueba', '1', 0),
(17, '2017-05-08 22:48:25', '1', 1, '0', ' descripcion de prueba', '1', 0),
(18, '2017-05-08 22:48:29', '1', 1, '1', ' descripcion de prueba', '1', 0),
(19, '2017-05-08 22:50:43', '1', 1, '1', ' descripcion de prueba', '1', 0),
(20, '2017-05-08 22:51:34', '1', 1, '1', ' descripcion de prueba', '1', 0),
(21, '2017-05-08 22:53:18', '1', 1, '3', ' descripcion de prueba', '1', 0),
(22, '2017-05-08 23:04:16', '1', 1, '0', ' descripcion de prueba', '1', 0),
(23, '2017-05-08 23:04:27', '1', 1, '1', ' descripcion de prueba', '1', 0),
(24, '2017-05-08 23:04:31', '1', 1, '0', ' descripcion de prueba', '1', 0),
(25, '2017-05-08 23:04:35', '1', 1, '3', ' descripcion de prueba', '1', 0),
(26, '2017-05-08 23:14:34', '1', 1, '1', ' descripcion de prueba', '1', 0),
(27, '2017-05-08 23:19:30', '1', 1, '0', ' descripcion de prueba', '1', 0),
(28, '2017-05-08 23:19:35', '1', 1, '2', ' descripcion de prueba', '1', 0),
(29, '2017-05-08 23:19:40', '1', 1, '2', ' descripcion de prueba', '1', 0),
(30, '2017-05-08 23:25:37', '1', 1, '2', ' descripcion de prueba', '1', 0),
(31, '2017-05-08 23:25:52', '1', 1, '2', ' descripcion de prueba', '1', 0),
(32, '2017-05-08 23:26:12', '1', 1, '2', ' descripcion de prueba', '1', 0),
(33, '2017-05-09 00:31:17', '1', 1, '1', ' descripcion de prueba', '1', 0),
(34, '2017-05-09 00:31:22', '1', 1, '3', ' descripcion de prueba', '1', 0),
(35, '2017-05-09 00:31:28', '1', 1, '4', ' descripcion de prueba', '1', 0),
(36, '2017-05-09 00:31:37', '1', 1, '4', ' descripcion de prueba', '1', 0),
(37, '2017-05-09 00:31:41', '1', 1, '2', ' descripcion de prueba', '1', 0),
(38, '2017-05-09 00:34:13', '1', 1, '3', ' descripcion de prueba', '1', 0),
(39, '2017-05-09 00:34:17', '1', 1, '0', ' descripcion de prueba', '1', 0),
(40, '2017-05-09 00:34:22', '1', 1, '0', ' descripcion de prueba', '1', 0),
(41, '2017-05-09 00:34:28', '1', 1, '4', ' descripcion de prueba', '1', 0),
(42, '2017-05-09 00:34:34', '1', 1, '0', ' descripcion de prueba', '1', 0),
(43, '2017-05-09 00:35:57', '1', 1, '0', ' descripcion de prueba', '1', 0),
(44, '2017-05-09 00:36:01', '1', 1, '0', ' descripcion de prueba', '1', 0),
(45, '2017-05-09 00:36:06', '1', 1, '2', ' descripcion de prueba', '1', 0),
(46, '2017-05-09 00:36:11', '1', 1, '3', ' descripcion de prueba', '1', 0),
(47, '2017-05-09 00:36:17', '1', 1, '4', ' descripcion de prueba', '1', 0),
(48, '2017-05-09 00:36:42', '1', 1, '2', ' descripcion de prueba', '1', 0),
(49, '2017-05-11 18:51:39', '1', 1, '2', ' descripcion de prueba', '1', 0),
(50, '2017-05-11 18:52:15', '1', 1, '1', ' descripcion de prueba', '1', 0),
(51, '2017-05-11 18:52:21', '1', 1, '2', ' descripcion de prueba', '1', 1),
(52, '2017-05-11 18:54:20', '4', 1, '1', ' descripcion de prueba', '1', 0),
(53, '2017-05-11 18:54:29', '4', 1, '1', ' descripcion de prueba', '1', 0),
(54, '2017-05-11 18:54:34', '4', 1, '3', ' descripcion de prueba', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemstate`
--

CREATE TABLE IF NOT EXISTS `itemstate` (
  `itemstatecode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemstate`
--

INSERT INTO `itemstate` (`itemstatecode`, `description`) VALUES
('0', 'Sin Estado'),
('1', 'Análisis'),
('2', 'Desarrollo'),
('3', 'Testing'),
('4', 'Implementación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemtype`
--

CREATE TABLE IF NOT EXISTS `itemtype` (
  `itemtypecode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemtype`
--

INSERT INTO `itemtype` (`itemtypecode`, `description`) VALUES
('1', 'Nuevo Requerimiento'),
('2', 'Bug'),
('3', 'Mejora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`projectcode` int(20) NOT NULL,
  `clientcode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`projectcode`, `clientcode`, `description`) VALUES
(1, '', 'SGT turnos ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usercode` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profileid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`usercode`, `password`, `profileid`) VALUES
('mauri', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userproject`
--

CREATE TABLE IF NOT EXISTS `userproject` (
  `usercode` varchar(20) NOT NULL,
  `projectcode` varchar(20) NOT NULL,
  `itemcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`clientcode`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`itemcode`);

--
-- Indices de la tabla `itemhistory`
--
ALTER TABLE `itemhistory`
 ADD PRIMARY KEY (`historyid`);

--
-- Indices de la tabla `itemstate`
--
ALTER TABLE `itemstate`
 ADD PRIMARY KEY (`itemstatecode`);

--
-- Indices de la tabla `itemtype`
--
ALTER TABLE `itemtype`
 ADD PRIMARY KEY (`itemtypecode`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`projectcode`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`usercode`);

--
-- Indices de la tabla `userproject`
--
ALTER TABLE `userproject`
 ADD PRIMARY KEY (`usercode`,`projectcode`,`itemcode`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
MODIFY `clientcode` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
MODIFY `itemcode` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `itemhistory`
--
ALTER TABLE `itemhistory`
MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
MODIFY `projectcode` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
