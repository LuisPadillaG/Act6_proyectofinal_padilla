-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2021 a las 05:40:35
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
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `idhabitacion` int(7) NOT NULL,
  `disponibilidad` varchar(50) NOT NULL,
  `tipodehabitacion` varchar(50) NOT NULL,
  `precio` int(15) NOT NULL,
  `huespedesmax` int(100) NOT NULL,
  `tipodeplan` varchar(100) NOT NULL,
  `ganancias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`idhabitacion`, `disponibilidad`, `tipodehabitacion`, `precio`, `huespedesmax`, `tipodeplan`, `ganancias`) VALUES
(233223, 'libre', 'deluxe', 25000, 4, 'turista', '18500'),
(233223, 'ocupado', 'deluxe', 30000, 4, 'libre', '24000'),
(293193, 'ocupado', 'turista', 10000, 5, 'turista', '7000'),
(129344, 'libre', 'normal', 16000, 4, 'visitas', '14000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
