-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2017 a las 20:40:01
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
  `clientcode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`itemcode` int(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `projectcode` varchar(20) NOT NULL,
  `prioriry` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`itemcode`, `description`, `itemtype`, `projectcode`, `prioriry`) VALUES
(1, 'Reporte', '1', '001', 0),
(2, 'Nuevo turno', '2', '001', 0),
(3, 'IDC', '1', '001', 0),
(4, 'Perfiles de usuario dinámicos ', '3', '001', 0),
(5, 'No funciona correctamente la autentican por win', '2', '001', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemhistory`
--

CREATE TABLE IF NOT EXISTS `itemhistory` (
`historyid` int(11) NOT NULL,
  `creationdate` date NOT NULL,
  `itemcode` varchar(20) NOT NULL,
  `seqstate` int(11) NOT NULL,
  `itemstate` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `responsibleuser` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemhistory`
--

INSERT INTO `itemhistory` (`historyid`, `creationdate`, `itemcode`, `seqstate`, `itemstate`, `description`, `responsibleuser`) VALUES
(1, '2017-05-02', '1', 1, '1', ' descripcion de prueba', '1'),
(2, '2017-05-02', '2', 1, '2', ' descripcion de prueba', '1'),
(3, '2017-05-02', '1', 1, '1', ' descripcion de prueba', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemstate`
--

CREATE TABLE IF NOT EXISTS `itemstate` (
  `itemstatecode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `projectcode` varchar(20) NOT NULL,
  `clientcode` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`projectcode`, `clientcode`, `description`) VALUES
('001', '', 'SGT turnos ');

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
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
MODIFY `itemcode` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `itemhistory`
--
ALTER TABLE `itemhistory`
MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
