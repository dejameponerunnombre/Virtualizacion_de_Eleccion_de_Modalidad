-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2022 a las 22:51:45
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
  `Contrasenia` varchar(365) NOT NULL,
  `Mail` varchar(365) NOT NULL DEFAULT 'alumno.paltamiranda@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `CUIL`, `Nombre`, `Escuela`, `Curso`, `Usuario`, `Contrasenia`, `Mail`) VALUES
('1', '1', 'economia', 'orientada', 'C', '1', '1', 'alumno.paltamiranda@gmail.com'),
('10', '10', 'Infromatica2', 'Tecnica', 'G', '10', '10', 'alumno.paltamiranda@gmail.com'),
('2', '2', 'natu', 'orientada', 'C', '2', '2', 'alumno.paltamiranda@gmail.com'),
('23', '23', 'paulo', 'tecnica', 'B', '23', '23', 'alumno.paltamiranda@gmail.com'),
('3', '3', 'rales', 'orientada\r\n', 'C', '3', '3', 'alumno.paltamiranda@gmail.com'),
('32', '32', 'londra', 'tecnica', 'A', '32', '32', 'alumno.paltamiranda@gmail.com'),
('4', '4', 'elec', 'tecnica', 'A', '4', '4', 'alumno.paltamiranda@gmail.com'),
('5', '5', 'tronica', 'tecnica', 'A', '5', '5', 'alumno.paltamiranda@gmail.com'),
('6', '6', 'informatica', 'tecnica', 'A', '6', '6', 'alumno.paltamiranda@gmail.com'),
('7', '7', 'multi', 'tecnica', 'A', '7', '7', 'alumno.paltamiranda@gmail.com'),
('8', '8', 'medios', 'tecnica', 'A', '8', '8', 'alumno.paltamiranda@gmail.com'),
('9', '9', 'Economia2', 'Orientada', 'C', '9', '9', 'alumno.paltamiranda@gmail.com'),
('99', '99', 'Kachy Chien', 'Tecnica', 'B', '99', '99', 'alumno.paltamiranda@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eleccion`
--

CREATE TABLE `eleccion` (
  `DNI` int(8) NOT NULL,
  `ID_Modalidad` int(1) NOT NULL,
  `Prioridad` int(4) NOT NULL,
  `Situacion` varchar(365) NOT NULL,
  `Cambio` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eleccion`
--

INSERT INTO `eleccion` (`DNI`, `ID_Modalidad`, `Prioridad`, `Situacion`, `Cambio`) VALUES
(1, 1, 1, 'Dentro de la modalidad', 'No'),
(2, 2, 2, 'Dentro de la modalidad', 'No'),
(3, 2, 1, 'Dentro de la modalidad', 'No'),
(4, 3, 2, 'Dentro de la modalidad', 'No'),
(5, 3, 1, 'Dentro de la modalidad', 'No'),
(6, 4, 1, 'Dentro de la modalidad', 'No'),
(7, 5, 2, 'Dentro de la modalidad', 'No'),
(8, 5, 1, 'Dentro de la modalidad', 'No'),
(9, 4, 2, 'Dentro de la modalidad', 'Si'),
(10, 2, 3, 'Dentro de la modalidad', 'Si'),
(23, 3, 3, 'Dentro de la modalidad', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(11) NOT NULL,
  `Nombre` varchar(365) NOT NULL,
  `Usuario` varchar(365) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Contrasenia` varchar(365) NOT NULL,
  `Mail` varchar(365) NOT NULL DEFAULT 'alumno.paltamiranda@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `Nombre`, `Usuario`, `Tipo`, `Contrasenia`, `Mail`) VALUES
(1, 'Pepe', 'Pepe123', 'Secretaria', 'Pepe456', 'alumno.paltamiranda@gmail.com'),
(2, 'Jorge', 'Jorge123', 'Directivo', 'Jorge456', 'alumno.paltamiranda@gmail.com');

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
('1', '1', 1, 1, 1, 1),
('1', '2', 1, 1, 1, 1),
('1', '3', 1, 1, 1, 1),
('10', '1', 10, 10, 10, 10),
('10', '2', 10, 10, 10, 10),
('10', '3', 10, 10, 10, 10),
('2', '1', 2, 2, 2, 2),
('2', '2', 2, 2, 2, 2),
('2', '3', 2, 2, 2, 2),
('23', '1', 2, 2, 2, 2),
('23', '2', 2, 2, 2, 2),
('23', '3', 2, 2, 2, 2),
('3', '1', 3, 3, 3, 3),
('3', '2', 3, 3, 3, 3),
('3', '3', 3, 3, 3, 3),
('32', '1', 9, 1, 1, 1),
('32', '2', 9, 1, 1, 1),
('32', '3', 9, 1, 1, 1),
('4', '1', 4, 4, 4, 4),
('4', '2', 4, 4, 4, 4),
('4', '3', 4, 4, 4, 4),
('5', '1', 5, 5, 5, 5),
('5', '2', 5, 5, 5, 5),
('5', '3', 5, 5, 5, 5),
('6', '1', 1, 6, 6, 6),
('6', '2', 1, 6, 6, 6),
('6', '3', 2, 6, 6, 6),
('7', '1', 7, 7, 7, 7),
('7', '2', 7, 7, 7, 7),
('7', '3', 7, 7, 7, 7),
('8', '1', 8, 8, 8, 8),
('8', '2', 8, 8, 8, 8),
('8', '3', 8, 8, 8, 8),
('9', '1', 9, 9, 9, 9),
('9', '2', 9, 9, 9, 9),
('9', '3', 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `ID_Modalidad` int(1) NOT NULL,
  `Descripcion` varchar(365) NOT NULL,
  `Ingresos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`ID_Modalidad`, `Descripcion`, `Ingresos`) VALUES
(1, 'Economia', 1),
(2, 'Naturales', 3),
(3, 'Electronica', 3),
(4, 'Informatica', 2),
(5, 'Multimedios', 2);

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
  `Comentario` varchar(365) NOT NULL,
  `sin_pendientes` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `total`
--

INSERT INTO `total` (`DNI`, `PromediosT`, `FichasT`, `InasistenciasT`, `ObservacionesT`, `Comentario`, `sin_pendientes`) VALUES
('1', 1, 3, 3, 3, '2', 1),
('10', 10, 30, 30, 30, '11', 1),
('2', 2, 6, 6, 6, '3', 1),
('23', 2, 6, 6, 6, '2', 1),
('3', 3, 9, 9, 9, '3', 1),
('32', 9, 3, 3, 3, 'aaaaaaaaa', 1),
('4', 4, 12, 12, 12, '5', 1),
('5', 5, 15, 15, 15, '6', 1),
('6', 1.33333, 18, 18, 18, '6', 1),
('7', 7, 21, 21, 21, '8', 1),
('8', 8, 24, 24, 24, '8', 1),
('9', 9, 27, 27, 27, '10', 1);

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
  MODIFY `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
