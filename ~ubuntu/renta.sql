-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2021 a las 05:40:47
-- Versión del servidor: 5.7.28-0ubuntu0.18.04.4
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbhotelmario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta`
--

CREATE TABLE `renta` (
  `Noches` int(100) NOT NULL,
  `idhabitacion` int(50) NOT NULL,
  `metododepago` varchar(50) NOT NULL,
  `idcliente` int(15) NOT NULL,
  `tipodehabitacion` varchar(100) NOT NULL,
  `idempleado` int(100) NOT NULL,
  `idrenta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `renta`
--

INSERT INTO `renta` (`Noches`, `idhabitacion`, `metododepago`, `idcliente`, `tipodehabitacion`, `idempleado`, `idrenta`) VALUES
(3, 233223, 'efectivo', 20394, 'deluxe', 29483, 304291),
(4, 233223, 'efectivo', 183754, 'turista', 204839, 4958),
(1, 39424, 'efectivo', 120394, 'turista', 19248, 930592),
(3, 440291, 'tarjeta', 29485, 'normal', 29391, 38542);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
