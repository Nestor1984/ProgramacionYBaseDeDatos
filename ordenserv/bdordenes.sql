-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 03:37:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdordenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombre`, `ci`, `direccion`, `telefono`, `email`) VALUES
(1, 'UTB S.A.', '148406028', NULL, '800101818', NULL),
(3, 'EMI', '786907651', NULL, '', NULL),
(4, 'UNIFRANZ', '148875634', NULL, '2324567', NULL),
(5, 'TIGO', ' 3534534543', 'Camacho 1234', '+591 76487564', 'tigo@gmail.com'),
(6, 'ENTEL S.A.', ' 45345345345', 'Miraflores', '36534666', 'entel@gmail.com'),
(7, 'VIVA', '456456456', '', '436534664', ' viva@gmail.com'),
(12, 'Juan', '737487777', 'Ciudad Satélite Plan 482 calle 18 #1964', '36534666', ' dis107@boliviaplay.com'),
(13, '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasenia` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombre`, `ci`, `direccion`, `telefono`, `email`, `contrasenia`) VALUES
(1, 'Carlos Guisbert Salazar', '2680785', NULL, '76737464', 'carlosgsuac@gmail.com', 'hola123'),
(2, 'Marco Villan', '2680783', NULL, '76767543', 'mvillan@gmail.com', 'hola123'),
(3, 'Ramiro Villan', '2465443', NULL, '72567544', 'rvillan@gmail.com', 'hola'),
(4, 'Brian Guisbert', '14809875', NULL, '72012345', 'bguisbert@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordservicios`
--

CREATE TABLE `ordservicios` (
  `idos` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `situacion` varchar(150) NOT NULL,
  `equipo` varchar(200) NOT NULL,
  `servicio` varchar(200) DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `idcliente` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordservicios`
--

INSERT INTO `ordservicios` (`idos`, `fecha`, `situacion`, `equipo`, `servicio`, `costo`, `idcliente`, `idempleado`) VALUES
(1, '2023-01-17 17:32:19', 'Ingreso equipo', 'Dell Optiplex', NULL, NULL, 1, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idempleado`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `ci` (`ci`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `ordservicios`
--
ALTER TABLE `ordservicios`
  ADD PRIMARY KEY (`idos`),
  ADD KEY `fk_cliente_os` (`idcliente`),
  ADD KEY `fk_empleado_os` (`idempleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ordservicios`
--
ALTER TABLE `ordservicios`
  MODIFY `idos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ordservicios`
--
ALTER TABLE `ordservicios`
  ADD CONSTRAINT `fk_cliente_os` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `fk_empleado_os` FOREIGN KEY (`idempleado`) REFERENCES `empleados` (`idempleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
