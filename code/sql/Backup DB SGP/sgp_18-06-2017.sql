-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2017 a las 20:44:35
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `clientcode` int(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `itemcode` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `itemtype` varchar(20) NOT NULL,
  `projectcode` varchar(20) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`itemcode`, `description`, `itemtype`, `projectcode`, `priority`) VALUES
(1, 'Emisión de turno', '1', '1', 3),
(2, 'Anuncio del Turno', '1', '1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemhistory`
--

CREATE TABLE `itemhistory` (
  `historyid` int(11) NOT NULL,
  `creationdate` datetime NOT NULL,
  `itemcode` varchar(20) NOT NULL,
  `seqstate` int(11) NOT NULL,
  `itemstate` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `responsibleuser` varchar(20) NOT NULL,
  `isLastState` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemhistory`
--

INSERT INTO `itemhistory` (`historyid`, `creationdate`, `itemcode`, `seqstate`, `itemstate`, `description`, `responsibleuser`, `isLastState`) VALUES
(2, '2017-06-18 14:52:39', '1', 1, '0', ' descripcion de prueba', '1', 0),
(3, '2017-06-18 14:53:51', '1', 1, '1', ' descripcion de prueba', '1', 0),
(4, '2017-06-18 14:54:08', '1', 1, '2', ' descripcion de prueba', '1', 0),
(5, '2017-06-18 14:58:12', '1', 1, '3', ' descripcion de prueba', '1', 0),
(6, '2017-06-18 15:20:10', '1', 1, '4', '', '1', 0),
(7, '2017-06-18 15:20:33', '1', 1, '0', '', '1', 0),
(8, '2017-06-18 15:20:54', '1', 1, '3', '', '1', 0),
(9, '2017-06-18 15:21:32', '2', 1, '0', '', '1', 0),
(10, '2017-06-18 15:22:09', '2', 1, '1', '', '1', 1),
(11, '2017-06-18 15:32:17', '1', 1, '1', '', '1', 0),
(12, '2017-06-18 15:32:20', '1', 1, '0', '', '1', 0),
(13, '2017-06-18 15:32:23', '1', 1, '2', '', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemstate`
--

CREATE TABLE `itemstate` (
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

CREATE TABLE `itemtype` (
  `itemtypecode` int(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `itemtype`
--

INSERT INTO `itemtype` (`itemtypecode`, `description`) VALUES
(1, 'Nuevo Requerimiento'),
(2, 'Bug'),
(3, 'Mejora'),
(4, 'Recuperacion de Hardware');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `projectcode` int(20) NOT NULL,
  `clientcode` int(20) DEFAULT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`projectcode`, `clientcode`, `description`) VALUES
(1, NULL, 'SGT virtual Line');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `usercode` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profileid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`usercode`, `password`, `profileid`) VALUES
('mauri', '1234', 1),
('test', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userproject`
--

CREATE TABLE `userproject` (
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
  MODIFY `itemcode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `itemhistory`
--
ALTER TABLE `itemhistory`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `itemtype`
--
ALTER TABLE `itemtype`
  MODIFY `itemtypecode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `project`
--
ALTER TABLE `project`
  MODIFY `projectcode` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
