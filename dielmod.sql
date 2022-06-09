-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 18:59:21
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
  `Comentario` varchar(365) NOT NULL,
  `Modalidad` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Nombre`, `DNI`, `CUIL`, `Escuela`, `Curso`, `Comentario`, `Modalidad`) VALUES
('Bottarini Matias', '45237992', '23452379929', 'Tecnica', 'G', 'Hola', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `Promedio` float NOT NULL,
  `Fichas` int(3) NOT NULL,
  `Inasistencias` float NOT NULL,
  `Observaciones` int(4) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `ID_Anualidad` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`Promedio`, `Fichas`, `Inasistencias`, `Observaciones`, `DNI`, `ID_Anualidad`) VALUES
(10, 10, 10, 10, '45237992', '1'),
(9, 9, 9, 9, '45237992', '2'),
(8, 7, 25, 6, '45237992', '3');

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
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`DNI`,`ID_Anualidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
