-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 01:52:49
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

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
('261', '261', '261', 'Tecnica', 'B', '261', '261', 'alumno.paltamiranda@gmail.com'),
('262', '262', '262', 'Tecnica', 'B', '262', '262', 'alumno.paltamiranda@gmail.com'),
('263', '263', '263', 'Tecnica', 'B', '263', '263', 'alumno.paltamiranda@gmail.com'),
('264', '264', '264', 'Tecnica', 'B', '264', '264', 'alumno.paltamiranda@gmail.com'),
('265', '265', '265', 'Tecnica', 'B', '265', '265', 'alumno.paltamiranda@gmail.com'),
('266', '266', '266', 'Tecnica', 'B', '266', '266', 'alumno.paltamiranda@gmail.com'),
('267', '267', '267', 'Tecnica', 'B', '267', '267', 'alumno.paltamiranda@gmail.com'),
('268', '268', '268', 'Tecnica', 'B', '268', '268', 'alumno.paltamiranda@gmail.com'),
('269', '269', '269', 'Tecnica', 'B', '269', '269', 'alumno.paltamiranda@gmail.com'),
('270', '270', '270', 'Tecnica', 'B', '270', '270', 'alumno.paltamiranda@gmail.com'),
('271', '271', '271', 'Tecnica', 'B', '271', '271', 'alumno.paltamiranda@gmail.com'),
('272', '272', '272', 'Tecnica', 'B', '272', '272', 'alumno.paltamiranda@gmail.com'),
('273', '273', '273', 'Tecnica', 'B', '273', '273', 'alumno.paltamiranda@gmail.com'),
('274', '274', '274', 'Tecnica', 'B', '274', '274', 'alumno.paltamiranda@gmail.com'),
('275', '275', '275', 'Tecnica', 'B', '275', '275', 'alumno.paltamiranda@gmail.com'),
('276', '276', '276', 'Tecnica', 'B', '276', '276', 'alumno.paltamiranda@gmail.com'),
('277', '277', '277', 'Tecnica', 'B', '277', '277', 'alumno.paltamiranda@gmail.com'),
('278', '278', '278', 'Tecnica', 'B', '278', '278', 'alumno.paltamiranda@gmail.com'),
('279', '279', '279', 'Tecnica', 'B', '279', '279', 'alumno.paltamiranda@gmail.com'),
('280', '280', '280', 'Tecnica', 'B', '280', '280', 'alumno.paltamiranda@gmail.com'),
('281', '281', '281', 'Tecnica', 'B', '281', '281', 'alumno.paltamiranda@gmail.com'),
('282', '282', '282', 'Tecnica', 'B', '282', '282', 'alumno.paltamiranda@gmail.com'),
('283', '283', '283', 'Tecnica', 'B', '283', '283', 'alumno.paltamiranda@gmail.com'),
('284', '284', '284', 'Tecnica', 'B', '284', '284', 'alumno.paltamiranda@gmail.com'),
('285', '285', '285', 'Tecnica', 'B', '285', '285', 'alumno.paltamiranda@gmail.com'),
('286', '286', '286', 'Tecnica', 'B', '286', '286', 'alumno.paltamiranda@gmail.com'),
('287', '287', '287', 'Tecnica', 'B', '287', '287', 'alumno.paltamiranda@gmail.com'),
('288', '288', '288', 'Tecnica', 'B', '288', '288', 'alumno.paltamiranda@gmail.com'),
('289', '289', '289', 'Tecnica', 'B', '289', '289', 'alumno.paltamiranda@gmail.com'),
('290', '290', '290', 'Tecnica', 'B', '290', '290', 'alumno.paltamiranda@gmail.com'),
('291', '291', '291', 'Tecnica', 'B', '291', '291', 'alumno.paltamiranda@gmail.com'),
('292', '292', '292', 'Tecnica', 'B', '292', '292', 'alumno.paltamiranda@gmail.com'),
('293', '293', '293', 'Tecnica', 'B', '293', '293', 'alumno.paltamiranda@gmail.com'),
('294', '294', '294', 'Tecnica', 'B', '294', '294', 'alumno.paltamiranda@gmail.com'),
('295', '295', '295', 'Tecnica', 'B', '295', '295', 'alumno.paltamiranda@gmail.com'),
('296', '296', '296', 'Tecnica', 'B', '296', '296', 'alumno.paltamiranda@gmail.com'),
('297', '297', '297', 'Tecnica', 'B', '297', '297', 'alumno.paltamiranda@gmail.com'),
('298', '298', '298', 'Tecnica', 'B', '298', '298', 'alumno.paltamiranda@gmail.com'),
('299', '299', '299', 'Tecnica', 'B', '299', '299', 'alumno.paltamiranda@gmail.com'),
('3', '3', 'rales', 'orientada\r\n', 'C', '3', '3', 'alumno.paltamiranda@gmail.com'),
('300', '300', '300', 'Tecnica', 'B', '300', '300', 'alumno.paltamiranda@gmail.com'),
('32', '32', 'londra', 'tecnica', 'E', '32', '32', 'alumno.paltamiranda@gmail.com'),
('4', '4', 'elec', 'tecnica', 'A', '4', '4', 'alumno.paltamiranda@gmail.com'),
('41', '41', '41', 'Tecnica', 'D', '41', '41', 'alumno.paltamiranda@gmail.com'),
('5', '5', 'tronica', 'tecnica', 'A', '5', '5', 'alumno.paltamiranda@gmail.com'),
('6', '6', 'informatica', 'tecnica', 'A', '6', '6', 'alumno.paltamiranda@gmail.com'),
('7', '7', 'multi', 'tecnica', 'A', '7', '7', 'alumno.paltamiranda@gmail.com'),
('8', '8', 'medios', 'tecnica', 'A', '8', '8', 'alumno.paltamiranda@gmail.com'),
('9', '9', 'Economia2', 'Orientada', 'C', '9', '9', 'alumno.paltamiranda@gmail.com');

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
(6, 4, 10, 'Dentro de la modalidad', 'No'),
(7, 5, 0, 'Dentro de la modalidad', 'No'),
(8, 5, 0, 'Dentro de la modalidad', 'No'),
(9, 4, 11, 'Dentro de la modalidad', 'Si'),
(10, 2, 3, 'Dentro de la modalidad', 'Si'),
(300, 4, 8, 'Dentro de la modalidad', 'No'),
(299, 4, 1, 'Dentro de la modalidad', 'No'),
(298, 4, 7, 'Dentro de la modalidad', 'No'),
(297, 4, 5, 'Dentro de la modalidad', 'No'),
(296, 4, 4, 'Dentro de la modalidad', 'No'),
(295, 4, 2, 'Dentro de la modalidad', 'No'),
(294, 4, 6, 'Dentro de la modalidad', 'No'),
(293, 4, 3, 'Dentro de la modalidad', 'No'),
(292, 4, 9, 'Dentro de la modalidad', 'No'),
(291, 4, 0, '-', 'No'),
(290, 4, 0, '-', 'No'),
(289, 4, 0, '-', 'No'),
(288, 4, 0, '-', 'No'),
(287, 4, 0, '-', 'No'),
(286, 4, 0, '-', 'No'),
(285, 4, 0, '-', 'No'),
(284, 4, 0, '-', 'No'),
(283, 4, 0, '-', 'No'),
(282, 4, 0, '-', 'No'),
(281, 4, 0, '-', 'No'),
(280, 4, 0, '-', 'No'),
(278, 4, 0, '-', 'No'),
(277, 4, 0, '-', 'No'),
(276, 4, 0, '-', 'No'),
(275, 4, 0, '-', 'No'),
(274, 4, 0, '-', 'No'),
(273, 4, 0, '-', 'No'),
(272, 4, 0, '-', 'No'),
(271, 4, 0, '-', 'No'),
(270, 4, 0, '-', 'No'),
(269, 4, 0, '-', 'No'),
(268, 4, 0, '-', 'No'),
(267, 4, 0, '-', 'No'),
(266, 4, 0, '-', 'No'),
(265, 4, 0, '-', 'No'),
(264, 4, 0, '-', 'No'),
(263, 4, 0, '-', 'No'),
(262, 4, 0, '-', 'No'),
(261, 4, 0, '-', 'No');

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
('261', '1', 2, 6, 1, 3),
('261', '2', 2, 6, 1, 3),
('261', '3', 2, 6, 1, 3),
('262', '1', 2, 6, 2, 3),
('262', '2', 2, 6, 2, 3),
('262', '3', 2, 6, 2, 3),
('263', '1', 2, 6, 3, 3),
('263', '2', 2, 6, 3, 3),
('263', '3', 2, 6, 3, 3),
('264', '1', 2, 6, 4, 3),
('264', '2', 2, 6, 4, 3),
('264', '3', 2, 6, 4, 3),
('265', '1', 2, 6, 5, 3),
('265', '2', 2, 6, 5, 3),
('265', '3', 2, 6, 5, 3),
('266', '1', 2, 6, 6, 3),
('266', '2', 2, 6, 6, 3),
('266', '3', 2, 6, 6, 3),
('267', '1', 2, 6, 7, 3),
('267', '2', 2, 6, 7, 3),
('267', '3', 2, 6, 7, 3),
('268', '1', 2, 6, 8, 3),
('268', '2', 2, 6, 8, 3),
('268', '3', 2, 6, 8, 3),
('269', '1', 2, 6, 9, 3),
('269', '2', 2, 6, 9, 3),
('269', '3', 2, 6, 9, 3),
('270', '1', 2, 7, 0, 3),
('270', '2', 2, 7, 0, 3),
('270', '3', 2, 7, 0, 3),
('271', '1', 2, 7, 1, 3),
('271', '2', 2, 7, 1, 3),
('271', '3', 2, 7, 1, 3),
('272', '1', 2, 7, 2, 3),
('272', '2', 2, 7, 2, 3),
('272', '3', 2, 7, 2, 3),
('273', '1', 2, 7, 3, 3),
('273', '2', 2, 7, 3, 3),
('273', '3', 2, 7, 3, 3),
('274', '1', 2, 7, 4, 3),
('274', '2', 2, 7, 4, 3),
('274', '3', 2, 7, 4, 3),
('275', '1', 2, 7, 5, 3),
('275', '2', 2, 7, 5, 3),
('275', '3', 2, 7, 5, 3),
('276', '1', 2, 7, 6, 3),
('276', '2', 2, 7, 6, 3),
('276', '3', 2, 7, 6, 3),
('277', '1', 2, 7, 7, 3),
('277', '2', 2, 7, 7, 3),
('277', '3', 2, 7, 7, 3),
('278', '1', 2, 7, 8, 3),
('278', '2', 2, 7, 8, 3),
('278', '3', 2, 7, 8, 3),
('279', '1', 2, 7, 9, 3),
('279', '2', 2, 7, 9, 3),
('279', '3', 2, 7, 9, 3),
('280', '1', 2, 8, 0, 3),
('280', '2', 2, 8, 0, 3),
('280', '3', 2, 8, 0, 3),
('281', '1', 2, 8, 1, 3),
('281', '2', 2, 8, 1, 3),
('281', '3', 2, 8, 1, 3),
('282', '1', 2, 8, 2, 3),
('282', '2', 2, 8, 2, 3),
('282', '3', 2, 8, 2, 3),
('283', '1', 2, 8, 3, 3),
('283', '2', 2, 8, 3, 3),
('283', '3', 2, 8, 3, 3),
('284', '1', 2, 8, 4, 3),
('284', '2', 2, 8, 4, 3),
('284', '3', 2, 8, 4, 3),
('285', '1', 2, 8, 5, 3),
('285', '2', 2, 8, 5, 3),
('285', '3', 2, 8, 5, 3),
('286', '1', 2, 8, 6, 3),
('286', '2', 2, 8, 6, 3),
('286', '3', 2, 8, 6, 3),
('287', '1', 2, 8, 7, 3),
('287', '2', 2, 8, 7, 3),
('287', '3', 2, 8, 7, 3),
('288', '1', 2, 8, 8, 3),
('288', '2', 2, 8, 8, 3),
('288', '3', 2, 8, 8, 3),
('289', '1', 2, 8, 9, 3),
('289', '2', 2, 8, 9, 3),
('289', '3', 2, 8, 9, 3),
('290', '1', 2, 9, 0, 3),
('290', '2', 2, 9, 0, 3),
('290', '3', 2, 9, 0, 3),
('291', '1', 2, 9, 1, 3),
('291', '2', 2, 9, 1, 3),
('291', '3', 2, 9, 1, 3),
('292', '1', 2, 9, 2, 3),
('292', '2', 2, 9, 2, 3),
('292', '3', 2, 9, 2, 3),
('293', '1', 2, 9, 3, 3),
('293', '2', 2, 9, 3, 3),
('293', '3', 2, 9, 3, 3),
('294', '1', 2, 9, 4, 3),
('294', '2', 2, 9, 4, 3),
('294', '3', 2, 9, 4, 3),
('295', '1', 2, 9, 5, 3),
('295', '2', 2, 9, 5, 3),
('295', '3', 2, 9, 5, 3),
('296', '1', 2, 9, 6, 3),
('296', '2', 2, 9, 6, 3),
('296', '3', 2, 9, 6, 3),
('297', '1', 2, 9, 7, 3),
('297', '2', 2, 9, 7, 3),
('297', '3', 2, 9, 7, 3),
('298', '1', 2, 9, 8, 3),
('298', '2', 2, 9, 8, 3),
('298', '3', 2, 9, 8, 3),
('299', '1', 2, 9, 9, 3),
('299', '2', 2, 9, 9, 3),
('299', '3', 2, 9, 9, 3),
('3', '1', 3, 3, 3, 3),
('3', '2', 3, 3, 3, 3),
('3', '3', 3, 3, 3, 3),
('300', '1', 3, 0, 0, 3),
('300', '2', 3, 0, 0, 3),
('300', '3', 3, 0, 0, 3),
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
(3, 'Electronica', 2),
(4, 'Informatica', 41),
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
('1', 1, 3, 3, 3, '2'),
('10', 10, 30, 30, 30, '11'),
('2', 2, 6, 6, 6, '3'),
('23', 2, 6, 6, 6, '2'),
('292', 4.33333, 13, 20, 20, '92'),
('293', 7, 21, 15, 15, '93'),
('294', 5.66667, 17, 22, 22, '94'),
('295', 7.66667, 23, 19, 19, '95'),
('296', 7, 21, 24, 24, '96'),
('297', 6, 6, 9, 17, '9'),
('298', 5, 6, 24, 15, '0'),
('299', 8, 6, 15, 3, '3'),
('3', 3, 9, 9, 9, '3'),
('300', 5, 6, 24, 19, '9'),
('32', 9, 3, 3, 3, 'aaaaaaaaa'),
('4', 4, 12, 12, 12, '5'),
('5', 5, 15, 15, 15, '6'),
('6', 1.33333, 18, 18, 18, '6'),
('7', 7, 21, 21, 21, '8'),
('8', 8, 24, 24, 24, '8'),
('9', 9, 27, 27, 27, '10');

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
