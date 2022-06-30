-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2022 a las 22:07:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dielmod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `DNI` varchar(8) NOT NULL,
  `CUIL` varchar(11) NOT NULL,
  `Nombre` varchar(365) NOT NULL,
  `Escuela` varchar(100) NOT NULL,
  `Curso` varchar(1) NOT NULL,
  `Usuario` varchar(365) NOT NULL,
  `Contrasenia` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `CUIL`, `Nombre`, `Escuela`, `Curso`, `Usuario`, `Contrasenia`) VALUES
('45237992', '23452379929', 'Matias Bottarini', 'Tecnica', 'G', '45237992', '23452379929'),
('45685987', '23456859879', 'Patricio Altamiranda', 'Tecnica', 'B', '45685987', '23456859879');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eleccion`
--

CREATE TABLE `eleccion` (
  `DNI` int(8) NOT NULL,
  `ID_Modalidad` int(1) NOT NULL,
  `Prioridad` int(4) NOT NULL,
  `Situacion` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(11) NOT NULL,
  `Nombre` varchar(365) NOT NULL,
  `Usuario` varchar(365) NOT NULL,
  `Contrasenia` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `Nombre`, `Usuario`, `Contrasenia`) VALUES
(1, 'Pepe', 'Pepe123', 'Pepe456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `DNI` varchar(8) NOT NULL,
  `Anio` varchar(1) NOT NULL,
  `Prom` float NOT NULL,
  `Fichas` int(4) NOT NULL,
  `Inasistencias` float NOT NULL,
  `Observaciones` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`DNI`, `Anio`, `Prom`, `Fichas`, `Inasistencias`, `Observaciones`) VALUES
('45237992', '1', 10, 10, 10, 1),
('45237992', '2', 1, 1, 10, 1),
('45237992', '3', 10, 10, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `ID_Modalidad` int(1) NOT NULL,
  `Descripcion` varchar(365) NOT NULL,
  `Ingresos` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`ID_Modalidad`, `Descripcion`, `Ingresos`) VALUES
(1, 'Economia', NULL),
(2, 'Naturales', NULL),
(3, 'Electronica', NULL),
(4, 'Informatica', NULL),
(5, 'Multimedios', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total`
--

CREATE TABLE `total` (
  `DNI` varchar(8) NOT NULL,
  `PromediosT` float NOT NULL,
  `FichasT` float NOT NULL,
  `InasistenciasT` float NOT NULL,
  `ObservacionesT` float NOT NULL,
  `Comentario` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `total`
--

INSERT INTO `total` (`DNI`, `PromediosT`, `FichasT`, `InasistenciasT`, `ObservacionesT`, `Comentario`) VALUES
('45237992', 7, 21, 30, 2, '10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Empleado`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`DNI`,`Anio`);

--
-- Indices de la tabla `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
