-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2016 a las 00:41:24
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tp_final_p_a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`ID` bigint(20) unsigned NOT NULL,
  `profile` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`ID`, `profile`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`ID` bigint(20) unsigned NOT NULL,
  `date` date DEFAULT NULL,
  `username` varchar(100) COLLATE armscii8_bin NOT NULL,
  `password` text COLLATE armscii8_bin,
  `profile` int(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `name` text COLLATE armscii8_bin,
  `surname` text COLLATE armscii8_bin,
  `email` text COLLATE armscii8_bin,
  `phone` text COLLATE armscii8_bin
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `date`, `username`, `password`, `profile`, `status`, `name`, `surname`, `email`, `phone`) VALUES
(1, '2016-02-06', 'mbessonFruta', '<p>\r\n	sasdsa</p>\r\n', 1, 1, '<p>\r\n	Mauricio</p>\r\n', '<p>\r\n	Besson</p>\r\n', '<p>\r\n	mauribesson@gmail.com</p>\r\n', '<p>\r\n	03447 497119</p>\r\n'),
(2, '2016-09-06', 'ngarnier', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1, 'Nicolas ', 'Garnier', 'ng@gmail.com', '343434344'),
(4, '2016-02-06', 'mbessonFruta', 'fafafa', 1, 1, 'Mauricio', 'Besson', 'mauribesson@gmail.com', '03447 508045'),
(5, '2016-02-06', 'mbessonFruta', 'fafafa', 1, 1, 'Mauricio', 'Besson', 'mauribesson@gmail.com', '03447 508045'),
(6, '2016-09-06', 'mbessonFruta', '6e72e2305334d10f70a70776356d4669', 1, 1, 'Mauricio', 'Besson', 'mauribesson@gmail.com', '03447 508045'),
(7, '2016-02-06', 'mbessonFruta', 'fafafa', 1, 1, 'Mauricio', 'Besson', 'mauribesson@gmail.com', '03447 508045'),
(8, '2016-02-06', 'mbessonFruta', 'fafafa', 1, 1, 'Mauricio', 'Besson', 'mauribesson@gmail.com', '03447 508045'),
(9, '2016-09-06', 'mauricio', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 'Mauricio', 'Besson', '2@2', '12344555'),
(10, '2016-09-10', 'usuarioGroceryCRUD', '<p>\r\n	123456</p>\r\n', 1, 1, '<p>\r\n	GroceryCRUD</p>\r\n', '<p>\r\n	GROCERY</p>\r\n', '<p>\r\n	a@a</p>\r\n', '<p>\r\n	1234567</p>\r\n'),
(11, '2016-09-20', 'Mauricio test', '<p>\r\n	123</p>\r\n', 1, 1, '<p>\r\n	Mauricio</p>\r\n', '<p>\r\n	Besson</p>\r\n', '<p>\r\n	a@a</p>\r\n', '<p>\r\n	q1qq</p>\r\n'),
(12, NULL, '', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(13, NULL, '', NULL, NULL, 0, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`ID`,`username`), ADD UNIQUE KEY `ID` (`ID`), ADD FULLTEXT KEY `password` (`password`,`name`,`surname`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
