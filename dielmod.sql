-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 21:19:19
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
  `Conducta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `CUIL`, `Nombre`, `Escuela`, `Curso`, `Usuario`, `Contrasenia`,`Conducta`) VALUES
('1', '1', 'economia', 'orientada', 'c', '1', '1','0'),
('2', '2', 'natu', 'orientada', 'c', '2', '2','0'),
('3', '3', 'rales', 'orientada\r\n', 'c', '3', '3','0'),
('4', '4', 'elec', 'tecnica', 'a', '4', '4','0'),
('45237992', '23452379929', 'Matias Bottarini', 'Tecnica', 'G', '45237992', '23452379929','0'),
('45685987', '23456859879', 'Patricio Altamiranda', 'Tecnica', 'B', '45685987', '23456859879','0'),
('5', '5', 'tronica', 'tecnica', 'a', '5', '5','0'),
('6', '6', 'informatica', 'tecnica', 'a', '6', '6','0'),
('7', '7', 'multi', 'tecnica', 'a', '7', '7','0'),
('8', '8', 'medios', 'tecnica', 'a', '8', '8','0');

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

INSERT INTO `eleccion` (`DNI`, `ID_Modalidad`, `Prioridad`, `Situacion`,`Cambio`) VALUES
(45237992, 4, 2, 'Dentro del curso', 'No'),
(45237992, 4, 2, 'Dentro del curso', 'No'),
(45237992, 4, 2, 'Dentro del curso', 'No'),
(45685987, 1, 2, 'Dentro del curso', 'No'),
(1, 1, 1, 'Dentro del curso', 'No'),
(2, 2, 1, 'Dentro del curso', 'No'),
(3, 2, 2, 'Dentro del curso', 'No'),
(4, 3, 1, 'Dentro del curso', 'No'),
(5, 3, 2, 'Dentro del curso', 'No'),
(6, 4, 1, 'Dentro del curso', 'No'),
(7, 5, 1, 'Dentro del curso', 'No'),
(8, 5, 2, 'Dentro del curso', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(11) NOT NULL,
  `Nombre` varchar(365) NOT NULL,
  `Usuario` varchar(365) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Contrasenia` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `Nombre`, `Usuario`, `Tipo`, `Contrasenia`) VALUES
(1, 'Pepe', 'Pepe123', 'Secretaria', 'Pepe456'),
(2, 'Directivo', 'Directivo', 'Directivo', 'Directivo'),
(3, 'Profesor', 'Profesor', 'Profesor', 'Profesor');


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
('45237992', '1', 7, 1, 10, 0),
('45237992', '2', 7, 3, 10, 0),
('45237992', '3', 7, 3, 10, 0);

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
(1, 'Economia', 2),
(2, 'Naturales', 2),
(3, 'Electronica', 2),
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
  `Comentario` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `total`
--

INSERT INTO `total` (`DNI`, `PromediosT`, `FichasT`, `InasistenciasT`, `ObservacionesT`, `Comentario`) VALUES
('1', 7, 8, 9, 10, 'a'),
('2', 10, 9, 8, 7, 'b'),
('3', 9, 8, 7, 10, 'c'),
('4', 6, 5, 4, 3, 'a'),
('45237992', 7, 7, 30, 0, ''),
('45685987', 1, 1, 1, 1, '1'),
('5', 6, 7, 8, 9, '10'),
('6', 7, 6, 9, 10, 'je'),
('7', 8, 9, 10, 1, 'lol'),
('8', 1, 2, 3, 4, 'kkk\r\n');

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
