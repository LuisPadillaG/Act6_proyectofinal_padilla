-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2021 a las 05:39:26
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombre` varchar(100) NOT NULL,
  `idcliente` int(15) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Tipodepiso` varchar(15) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombre`, `idcliente`, `Apellido`, `Tipodepiso`, `Direccion`, `Correo`, `Telefono`) VALUES
('Paco', 12034, 'Perez', 'VIP', 'Campanarios', 'paquito@gmail.com', 112354355),
('Luisa', 19233, 'Padilla', 'VIP', 'canarios', 'luiscuenta@gmail.com', 6563149698);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `FecNac` date NOT NULL,
  `sueldo` int(7) NOT NULL,
  `CURP` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `idempleado` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Nombre`, `Apellido`, `FecNac`, `sueldo`, `CURP`, `Direccion`, `idempleado`) VALUES
('Alonso', 'Rodilla', '1999-10-14', 10000, 'GBR01O3999O2', 'estrada', 29848),
('Roberta', 'Guerrero', '1970-04-05', 21000, 'GBR01O3999O2', 'cebollas', 20193),
('Luis', 'Rodilla', '2004-11-24', 20494, 'GBR01O3999O2', 'canarios', 29485);

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
