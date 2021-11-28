-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2021 a las 15:57:17
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
('Luis', 2931, 'Padilla', 'Premium', 'estrada', 'alonsocuenta@gmail.com', 1124940),
('Luis', 29384, 'Rodilla', 'VIP', 'madrid', 'karencuenta@gmail.com', 656314969),
('Maria', 29481, 'Gomez', 'Turista', 'mikasa', 'maria@gmail.com', 65631496);

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
('Luis', 'Padilla', '2004-11-25', 14000, 'PAGA9803MCHNC2', 'mikasa', 8553),
('Luis', 'Padilla', '2004-11-25', 14000, 'PAGA9803MCHNC2', 'mikasa', 38475),
('Alonso', 'Rodilla', '1999-10-14', 10000, 'GBR01O3999O2', 'estrada', 29848),
('Karen', 'Padilla', '1998-09-03', 12000, 'PALA9190230YU821', 'Sabritas', 23884);

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
(233223, 'ocupado', 'deluxe', 30000, 4, 'libre', '24000');

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
(2, 19475, 'tarjeta', 29735, 'deluxe', 39894, 29853);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
