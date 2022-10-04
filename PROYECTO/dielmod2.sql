-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2022 a las 02:31:46
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
  `Nombre` varchar(365) NOT NULL,
  `Usuario` varchar(365) NOT NULL,
  `Contrasenia` varchar(365) NOT NULL,
  `Mail` varchar(365) NOT NULL DEFAULT 'alumno.paltamiranda@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `Nombre`, `Usuario`, `Contrasenia`, `Mail`) VALUES
('1', 'economia', '1', '1', 'alumno.paltamiranda@gmail.com'),
('10', 'Infromatica2', '10', '10', 'alumno.paltamiranda@gmail.com'),
('2', 'natu', '2', '2', 'alumno.paltamiranda@gmail.com'),
('23', 'paulo', '23', '23', 'alumno.paltamiranda@gmail.com'),
('261', 'T', '261', '261', 'alumno.paltamiranda@gmail.com'),
('262', 't', '262', '262', 'alumno.paltamiranda@gmail.com'),
('263', 'S', '263', '263', 'alumno.paltamiranda@gmail.com'),
('264', 's', '264', '264', 'alumno.paltamiranda@gmail.com'),
('265', 'R', '265', '265', 'alumno.paltamiranda@gmail.com'),
('266', 'r', '266', '266', 'alumno.paltamiranda@gmail.com'),
('267', 'Q', '267', '267', 'alumno.paltamiranda@gmail.com'),
('268', 'q', '268', '268', 'alumno.paltamiranda@gmail.com'),
('269', 'P', '269', '269', 'alumno.paltamiranda@gmail.com'),
('270', 'p', '270', '270', 'alumno.paltamiranda@gmail.com'),
('271', 'O', '271', '271', 'alumno.paltamiranda@gmail.com'),
('272', 'o', '272', '272', 'alumno.paltamiranda@gmail.com'),
('273', 'N', '273', '273', 'alumno.paltamiranda@gmail.com'),
('274', 'n', '274', '274', 'alumno.paltamiranda@gmail.com'),
('275', 'M', '275', '275', 'alumno.paltamiranda@gmail.com'),
('276', 'm', '276', '276', 'alumno.paltamiranda@gmail.com'),
('277', 'L', '277', '277', 'alumno.paltamiranda@gmail.com'),
('278', 'l', '278', '278', 'alumno.paltamiranda@gmail.com'),
('279', 'K', '279', '279', 'alumno.paltamiranda@gmail.com'),
('280', 'k', '280', '280', 'alumno.paltamiranda@gmail.com'),
('281', 'J', '281', '281', 'alumno.paltamiranda@gmail.com'),
('282', 'j', '282', '282', 'alumno.paltamiranda@gmail.com'),
('283', 'I', '283', '283', 'alumno.paltamiranda@gmail.com'),
('284', 'i', '284', '284', 'alumno.paltamiranda@gmail.com'),
('285', 'H', '285', '285', 'alumno.paltamiranda@gmail.com'),
('286', 'h', '286', '286', 'alumno.paltamiranda@gmail.com'),
('287', 'G', '287', '287', 'alumno.paltamiranda@gmail.com'),
('288', 'g', '288', '288', 'alumno.paltamiranda@gmail.com'),
('289', 'F', '289', '289', 'alumno.paltamiranda@gmail.com'),
('290', 'f', '290', '290', 'alumno.paltamiranda@gmail.com'),
('291', 'E', '291', '291', 'alumno.paltamiranda@gmail.com'),
('292', 'e', '292', '292', 'alumno.paltamiranda@gmail.com'),
('293', 'D', '293', '293', 'alumno.paltamiranda@gmail.com'),
('294', 'd', '294', '294', 'alumno.paltamiranda@gmail.com'),
('295', 'C', '295', '295', 'alumno.paltamiranda@gmail.com'),
('296', 'c', '296', '296', 'alumno.paltamiranda@gmail.com'),
('297', 'B', '297', '297', 'alumno.paltamiranda@gmail.com'),
('298', 'b', '298', '298', 'alumno.paltamiranda@gmail.com'),
('299', 'A', '299', '299', 'alumno.paltamiranda@gmail.com'),
('3', 'rales', '3', '3', 'alumno.paltamiranda@gmail.com'),
('300', 'a', '300', '300', 'alumno.paltamiranda@gmail.com'),
('32', 'londra', '32', '32', 'alumno.paltamiranda@gmail.com'),
('4', 'elec', '4', '4', 'alumno.paltamiranda@gmail.com'),
('41', 'Dirk', '41', '41', 'alumno.paltamiranda@gmail.com'),
('5', 'tronica', '5', '5', 'alumno.paltamiranda@gmail.com'),
('6', 'informatica', '6', '6', 'alumno.paltamiranda@gmail.com'),
('7', 'multi', '7', '7', 'alumno.paltamiranda@gmail.com'),
('8', 'medios', '8', '8', 'alumno.paltamiranda@gmail.com'),
('9', 'Economia2', '9', '9', 'alumno.paltamiranda@gmail.com');

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
(6, 4, 6, 'Dentro de la modalidad', 'No'),
(7, 5, 0, 'Dentro de la modalidad', 'No'),
(8, 5, 0, 'Dentro de la modalidad', 'No'),
(9, 4, 22, 'Dentro de la modalidad', 'Si'),
(10, 2, 3, 'Dentro de la modalidad', 'Si'),
(300, 4, 21, 'Dentro de la modalidad', 'No'),
(299, 4, 3, 'Dentro de la modalidad', 'No'),
(298, 4, 4, 'Dentro de la modalidad', 'No'),
(297, 4, 9, 'Dentro de la modalidad', 'No'),
(296, 4, 11, 'Dentro de la modalidad', 'No'),
(295, 4, 12, 'Dentro de la modalidad', 'No'),
(294, 4, 15, 'Dentro de la modalidad', 'No'),
(293, 4, 16, 'Dentro de la modalidad', 'No'),
(292, 4, 17, 'Dentro de la modalidad', 'No'),
(291, 4, 19, 'Dentro de la modalidad', 'No'),
(290, 4, 18, 'Dentro de la modalidad', 'No'),
(289, 4, 5, 'Dentro de la modalidad', 'No'),
(288, 4, 7, 'Dentro de la modalidad', 'No'),
(287, 4, 10, 'Dentro de la modalidad', 'No'),
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
(271, 4, 1, 'Dentro de la modalidad', 'No'),
(270, 4, 0, '-', 'No'),
(269, 4, 2, 'Dentro de la modalidad', 'No'),
(268, 4, 8, 'Dentro de la modalidad', 'No'),
(267, 4, 0, '-', 'No'),
(266, 4, 0, '-', 'No'),
(265, 4, 13, 'Dentro de la modalidad', 'No'),
(264, 4, 0, '-', 'No'),
(263, 4, 0, '-', 'No'),
(262, 4, 20, 'Dentro de la modalidad', 'No'),
(261, 4, 14, 'Dentro de la modalidad', 'No');

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
  `Anio` int(1) NOT NULL,
  `Prom` float NOT NULL,
  `Fichas` int(2) NOT NULL,
  `Inasistencias` float NOT NULL,
  `Observaciones` int(2) NOT NULL,
  `Ciclo_Lectivo` year(4) NOT NULL DEFAULT 2022,
  `Curso` varchar(1) NOT NULL,
  `Escuela` varchar(10) NOT NULL,
  `sin_pendientes` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`DNI`,`Ciclo_Lectivo`);

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
