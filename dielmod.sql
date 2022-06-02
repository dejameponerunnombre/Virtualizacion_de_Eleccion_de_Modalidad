-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2022 a las 21:09:54
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
  `Nombre` varchar(365) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `CUIL` varchar(11) NOT NULL,
  `Escuela` varchar(365) NOT NULL,
  `Curso` varchar(1) NOT NULL,
  `ID_Alumno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Nombre`, `DNI`, `CUIL`, `Escuela`, `Curso`, `ID_Alumno`) VALUES
('Matias Bottarini', '45237992', '23452379929', 'Tecnica', 'G', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anualidad`
--

CREATE TABLE `anualidad` (
  `ID_Anualidad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID_Modalidad` int(1) NOT NULL,
  `ID_Alumno` int(4) NOT NULL,
  `ID_Total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `Promedio` float NOT NULL,
  `Fichas` int(3) NOT NULL,
  `Inasistencias` float NOT NULL,
  `Observaciones` int(4) NOT NULL,
  `ID_Alumno` varchar(4) NOT NULL,
  `ID_Anualidad` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `ID_Modalidad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total`
--

CREATE TABLE `total` (
  `Promedio` float NOT NULL,
  `Fichas_Totales` int(7) NOT NULL,
  `Inasistencias_Totales` float NOT NULL,
  `Observaciones_Totales` int(7) NOT NULL,
  `Comentario` varchar(365) NOT NULL,
  `ID_Alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `DNI` varchar(8) NOT NULL,
  `Nombre` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- Indices de la tabla `anualidad`
--
ALTER TABLE `anualidad`
  ADD PRIMARY KEY (`ID_Anualidad`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID_Alumno`,`ID_Anualidad`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`ID_Modalidad`);

--
-- Indices de la tabla `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_Alumno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `anualidad`
--
ALTER TABLE `anualidad`
  MODIFY `ID_Anualidad` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `ID_Modalidad` int(1) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
