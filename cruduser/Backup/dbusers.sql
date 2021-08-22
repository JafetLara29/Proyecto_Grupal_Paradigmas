-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2021 a las 00:03:48
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbusers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusers`
--

CREATE TABLE `tbusers` (
  `tbusersid` int(10) NOT NULL,
  `tbusersidentificationdocument` varchar(13) NOT NULL,
  `tbusersname` varchar(100) NOT NULL,
  `tbuserslastname` varchar(100) NOT NULL,
  `tbusersaddress` varchar(300) NOT NULL,
  `tbusersphonenumber` varchar(12) NOT NULL,
  `tbusersemail` varchar(100) NOT NULL,
  `tbusersibanaccount` varchar(50) NOT NULL,
  `tbusersactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbusers`
--

INSERT INTO `tbusers` (`tbusersid`, `tbusersidentificationdocument`, `tbusersname`, `tbuserslastname`, `tbusersaddress`, `tbusersphonenumber`, `tbusersemail`, `tbusersibanaccount`, `tbusersactive`) VALUES
(1, '702810062', 'Jafet', 'Lara Lopez', '150 m norte de la parada de la chavez', '61051138', 'jafet@gmail.com', '#123412341241', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`tbusersid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
