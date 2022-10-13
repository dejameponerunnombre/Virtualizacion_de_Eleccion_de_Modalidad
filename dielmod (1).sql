-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 22:59:41
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

INSERT INTO `alumnos` (`DNI`, `Nombre`, `Escuela`, `Curso`, `Usuario`, `Contrasenia`, `Mail`) VALUES
('1', 'economia', 'orientada', 'C', '1', '1', 'alumno.paltamiranda@gmail.com'),
('10', 'Infromatica2', 'Tecnica', 'G', '10', '10', 'alumno.paltamiranda@gmail.com'),
('11', 'Once', 'Tecnica', 'B', '11', '11', 'alumno.paltamiranda@gmail.com'),
('12', 'Doce', 'Tecnica', 'B', '12', '12', 'alumno.paltamiranda@gmail.com'),
('13', 'Trece', 'Tecnica', 'B', '13', '13', 'alumno.paltamiranda@gmail.com'),
('14', 'Catorce', 'Tecnica', 'B', '14', '14', 'alumno.paltamiranda@gmail.com'),
('15', 'Quince', 'Tecnica', 'B', '15', '15', 'alumno.paltamiranda@gmail.com'),
('16', 'Dieciseis', 'Tecnica', 'B', '16', '16', 'alumno.paltamiranda@gmail.com'),
('17', 'Diecisiete', 'Tecnica', 'B', '17', '17', 'alumno.paltamiranda@gmail.com'),
('18', 'Dieciocho', 'Tecnica', 'B', '18', '18', 'alumno.paltamiranda@gmail.com'),
('19', 'DieciNUEVE', 'Tecnica', 'B', '19', '19', 'alumno.paltamiranda@gmail.com'),
('2', 'natu', 'orientada', 'C', '2', '2', 'alumno.paltamiranda@gmail.com'),
('20', 'Veinte', 'Tecnica', 'B', '20', '20', 'alumno.paltamiranda@gmail.com'),
('21', 'Veintiuno', 'Tecnica', 'B', '21', '21', 'alumno.paltamiranda@gmail.com'),
('22', 'Veintidos', 'Tecnica', 'B', '22', '22', 'alumno.paltamiranda@gmail.com'),
('23', 'paulo', 'tecnica', 'B', '23', '23', 'alumno.paltamiranda@gmail.com'),
('24', 'Veinticuatro', 'Tecnica', 'B', '24', '24', 'alumno.paltamiranda@gmail.com'),
('25', 'Veinticinco', 'Tecnica', 'B', '25', '25', 'alumno.paltamiranda@gmail.com'),
('26', 'Veintiseis', 'Tecnica', 'B', '26', '26', 'alumno.paltamiranda@gmail.com'),
('27', 'Veinticiete', 'Tecnica', 'B', '27', '27', 'alumno.paltamiranda@gmail.com'),
('28', 'Veintiocho', 'Tecnica', 'B', '28', '28', 'alumno.paltamiranda@gmail.com'),
('29', 'Veintinueve', 'Tecnica', 'B', '29', '29', 'alumno.paltamiranda@gmail.com'),
('3', 'rales', 'orientada\r\n', 'C', '3', '3', 'alumno.paltamiranda@gmail.com'),
('30', 'Treinta', 'Tecnica', 'B', '30', '30', 'alumno.paltamiranda@gmail.com'),
('31', 'Treintaiuno', 'Tecnica', 'B', '31', '31', 'alumno.paltamiranda@gmail.com'),
('32', 'londra', 'tecnica', 'A', '32', '32', 'alumno.paltamiranda@gmail.com'),
('33', 'Treintaitres', 'Tecnica', 'B', '33', '33', 'alumno.paltamiranda@gmail.com'),
('34', 'Treintaicuatro', 'Tecnica', 'B', '34', '34', 'alumno.paltamiranda@gmail.com'),
('35', 'Treintaicinco', 'Tecnica', 'B', '35', '35', 'alumno.paltamiranda@gmail.com'),
('36', 'Treintaiseis', 'Tecnica', 'B', '36', '36', 'alumno.paltamiranda@gmail.com'),
('37', 'Trintaisiete', 'Tecnica', 'B', '37', '37', 'alumno.paltamiranda@gmail.com'),
('38', 'Treintaiocho', 'Tecnica', 'B', '38', '38', 'alumno.paltamiranda@gmail.com'),
('39', 'Treintainueve', 'Tecnica', 'B', '39', '39', 'alumno.paltamiranda@gmail.com'),
('4', 'elec', 'tecnica', 'A', '4', '4', 'alumno.paltamiranda@gmail.com'),
('40', 'Cuarenta', 'Tecnica', 'A', '40', '40', 'alumno.paltamiranda@gmail.com'),
('41', 'Cuarentaiuno', 'Tecnica', 'A', '41', '41', 'alumno.paltamiranda@gmail.com'),
('42', 'Cuarentaidos', 'Tecnica', 'A', '42', '42', 'alumno.paltamiranda@gmail.com'),
('43', 'Cuarentaitres', 'Tecnica', 'A', '43', '43', 'alumno.paltamiranda@gmail.com'),
('44', 'Cuarentaicuatro', 'Tecnica', 'A', '44', '44', 'alumno.paltamiranda@gmail.com'),
('45', 'Cuarentaicinco', 'Tecnica', 'A', '45', '45', 'alumno.paltamiranda@gmail.com'),
('46', 'Cuarentaiseis', 'Tecnica', 'A', '46', '46', 'alumno.paltamiranda@gmail.com'),
('47', 'Cuarentaisiete', 'Tecnica', 'A', '47', '47', 'alumno.paltamiranda@gmail.com'),
('48', 'cuarentaiocho', 'Tecnica', 'A', '48', '48', 'alumno.paltamiranda@gmail.com'),
('49', 'Cuarentainueve', 'Tecnica', 'A', '49', '49', 'alumno.paltamiranda@gmail.com'),
('5', 'tronica', 'tecnica', 'A', '5', '5', 'alumno.paltamiranda@gmail.com'),
('50', 'Cincuenta', 'Tecnica', 'G', '50', '50', 'alumno.paltamiranda@gmail.com'),
('51', 'Cincuentaiuno', 'Tecnica', 'G', '51', '51', 'alumno.paltamiranda@gmail.com'),
('52', 'Cincuentaidos', 'Tecnica', 'G', '52', '52', 'alumno.paltamiranda@gmail.com'),
('53', 'Cincuentaitres', 'Tecnica', 'G', '53', '53', 'alumno.paltamiranda@gmail.com'),
('54', 'Cincuentaicuatro', 'Tecnica', 'G', '54', '54', 'alumno.paltamiranda@gmail.com'),
('55', 'Cincuentaicinco', 'Tecnica', 'G', '55', '55', 'alumno.paltamiranda@gmail.com'),
('56', 'Cincuentaiseis', 'Tecnica', 'G', '56', '56', 'alumno.paltamiranda@gmail.com'),
('57', 'Cincuentaisiete', 'Tecnica', 'G', '57', '57', 'alumno.paltamiranda@gmail.com'),
('58', 'Cincuentaicocho', 'Tecnica', 'G', '58', '58', 'alumno.paltamiranda@gmail.com'),
('59', 'Cincuentainueve', 'Tecnica', 'G', '59', '59', 'alumno.paltamiranda@gmail.com'),
('6', 'informatica', 'tecnica', 'A', '6', '6', 'alumno.paltamiranda@gmail.com'),
('60', 'Sesenta', 'Tecnica', 'G', '60', '60', 'alumno.paltamiranda@gmail.com'),
('61', 'Sesentaiuno', 'Tecnica', 'G', '61', '61', 'alumno.paltamiranda@gmail.com'),
('62', 'Sesentaidos', 'Tecnica', 'G', '62', '62', 'alumno.paltamiranda@gmail.com'),
('63', 'Sesentaitres', 'Tecnica', 'G', '63', '63', 'alumno.paltamiranda@gmail.com'),
('64', 'Sesentaicuatro', 'Tecnica', 'G', '64', '64', 'alumno.paltamiranda@gmail.com'),
('65', 'Sesentaicinco', 'Tecnica', 'G', '65', '65', 'alumno.paltamiranda@gmail.com'),
('66', 'Sesentaiseis', 'Tecnica', 'G', '66', '66', 'alumno.paltamiranda@gmail.com'),
('67', 'Sesentaisiete', 'Tecnica', 'G', '67', '67', 'alumno.paltamiranda@gmail.com'),
('68', 'Sesentaiocho', 'Tecnica', 'G', '68', '68', 'alumno.paltamiranda@gmail.com'),
('69', 'Sesentainueve', 'Tecnica', 'G', '69', '69', 'alumno.paltamiranda@gmail.com'),
('7', 'multi', 'tecnica', 'A', '7', '7', 'alumno.paltamiranda@gmail.com'),
('8', 'medios', 'tecnica', 'A', '8', '8', 'alumno.paltamiranda@gmail.com'),
('9', 'Economia2', 'Orientada', 'C', '9', '9', 'alumno.paltamiranda@gmail.com'),
('99', 'Kachy Chien', 'Tecnica', 'B', '99', '99', 'alumno.paltamiranda@gmail.com');

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
(6, 4, 19, 'Dentro de la modalidad', 'No'),
(7, 5, 2, 'Dentro de la modalidad', 'No'),
(8, 5, 1, 'Dentro de la modalidad', 'No'),
(9, 4, 30, 'Dentro de la modalidad', 'Si'),
(10, 2, 3, 'Dentro de la modalidad', 'Si'),
(23, 3, 3, 'Dentro de la modalidad', 'No'),
(11, 4, 20, 'Dentro de la modalidad', 'No'),
(12, 4, 29, 'Dentro de la modalidad', 'No'),
(13, 4, 24, 'Dentro de la modalidad', 'No'),
(14, 4, 18, 'Dentro de la modalidad', 'No'),
(15, 4, 17, 'Dentro de la modalidad', 'No'),
(16, 4, 16, 'Dentro de la modalidad', 'No'),
(17, 4, 15, 'Dentro de la modalidad', 'No'),
(18, 4, 25, 'Dentro de la modalidad', 'No'),
(19, 4, 27, 'Dentro de la modalidad', 'No'),
(20, 4, 31, 'Dentro de la modalidad', 'No'),
(21, 4, 32, 'Dentro de la modalidad', 'No'),
(22, 4, 33, 'Dentro de la modalidad', 'No'),
(24, 4, 34, 'Dentro de la modalidad', 'No'),
(25, 4, 35, 'Dentro de la modalidad', 'No'),
(26, 4, 36, 'Dentro de la modalidad', 'No'),
(27, 4, 37, 'Dentro de la modalidad', 'No'),
(28, 4, 38, 'Dentro de la modalidad', 'No'),
(29, 4, 39, 'Dentro de la modalidad', 'No'),
(50, 4, 11, 'Dentro de la modalidad', 'No'),
(51, 4, 14, 'Dentro de la modalidad', 'No'),
(52, 4, 23, 'Dentro de la modalidad', 'No'),
(53, 4, 26, 'Dentro de la modalidad', 'No'),
(54, 4, 28, 'Dentro de la modalidad', 'No'),
(55, 4, 12, 'Dentro de la modalidad', 'No'),
(56, 4, 10, 'Dentro de la modalidad', 'No'),
(57, 4, 8, 'Dentro de la modalidad', 'No'),
(58, 4, 6, 'Dentro de la modalidad', 'No'),
(59, 4, 3, 'Dentro de la modalidad', 'No'),
(60, 4, 4, 'Dentro de la modalidad', 'No'),
(61, 4, 13, 'Dentro de la modalidad', 'No'),
(62, 4, 22, 'Dentro de la modalidad', 'No'),
(63, 4, 21, 'Dentro de la modalidad', 'No'),
(64, 4, 9, 'Dentro de la modalidad', 'No'),
(65, 4, 7, 'Dentro de la modalidad', 'No'),
(66, 4, 5, 'Dentro de la modalidad', 'No'),
(67, 4, 2, 'Dentro de la modalidad', 'No'),
(68, 4, 1, 'Dentro de la modalidad', 'No'),
(69, 4, 40, 'En lista de espera', 'No');

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
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `ID_mes` int(11) NOT NULL,
  `mes` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`ID_mes`, `mes`) VALUES
(1, 'Noviembre'),
(2, 'Diciembre'),
(3, 'Febrero'),
(4, 'Marzo');

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
('11', '1', 1, 1, 1, 1),
('11', '2', 1, 1, 1, 1),
('11', '3', 1, 1, 1, 1),
('12', '1', 1, 1, 2, 2),
('12', '2', 2, 2, 1, 1),
('12', '3', 1, 1, 2, 2),
('13', '1', 1, 1, 3, 3),
('13', '2', 3, 3, 1, 1),
('13', '3', 1, 1, 3, 3),
('14', '1', 1, 1, 4, 4),
('14', '2', 4, 4, 1, 1),
('14', '3', 1, 1, 4, 4),
('15', '1', 1, 1, 5, 5),
('15', '2', 5, 5, 1, 1),
('15', '3', 1, 1, 5, 5),
('16', '1', 1, 1, 6, 6),
('16', '2', 6, 6, 1, 1),
('16', '3', 1, 1, 6, 6),
('17', '1', 1, 1, 7, 7),
('17', '2', 7, 7, 1, 1),
('17', '3', 1, 1, 7, 7),
('18', '1', 8, 8, 1, 1),
('18', '2', 1, 1, 8, 8),
('18', '3', 8, 8, 1, 1),
('19', '1', 9, 9, 1, 1),
('19', '2', 1, 1, 9, 9),
('19', '3', 9, 9, 1, 1),
('2', '1', 2, 2, 2, 2),
('2', '2', 2, 2, 2, 2),
('2', '3', 2, 2, 2, 2),
('23', '1', 2, 2, 2, 2),
('23', '2', 2, 2, 2, 2),
('23', '3', 2, 2, 2, 2),
('3', '1', 3, 3, 3, 3),
('3', '2', 3, 3, 3, 3),
('3', '3', 3, 3, 3, 3),
('30', '1', 3, 3, 3, 3),
('30', '2', 3, 3, 3, 3),
('30', '3', 3, 3, 3, 3),
('31', '1', 3, 3, 1, 1),
('31', '2', 1, 1, 3, 3),
('31', '3', 3, 3, 1, 1),
('32', '1', 9, 1, 1, 1),
('32', '2', 9, 1, 1, 1),
('32', '3', 9, 1, 1, 1),
('33', '1', 3, 3, 3, 3),
('33', '2', 3, 3, 3, 3),
('33', '3', 3, 3, 3, 3),
('34', '1', 3, 3, 4, 4),
('34', '2', 4, 4, 3, 3),
('34', '3', 3, 3, 4, 4),
('35', '1', 3, 3, 5, 5),
('35', '2', 5, 5, 3, 3),
('35', '3', 3, 3, 5, 5),
('36', '1', 3, 3, 6, 3),
('36', '2', 6, 3, 3, 6),
('36', '3', 3, 6, 6, 3),
('37', '1', 3, 3, 3, 3),
('37', '2', 7, 7, 7, 7),
('37', '3', 7, 7, 7, 3),
('38', '1', 3, 3, 8, 8),
('38', '2', 8, 3, 3, 3),
('38', '3', 8, 3, 3, 3),
('39', '1', 9, 3, 3, 9),
('39', '2', 3, 9, 9, 3),
('39', '3', 9, 3, 3, 3),
('4', '1', 4, 4, 4, 4),
('4', '2', 4, 4, 4, 4),
('4', '3', 4, 4, 4, 4),
('5', '1', 5, 5, 5, 5),
('5', '2', 5, 5, 5, 5),
('5', '3', 5, 5, 5, 5),
('50', '1', 5, 5, 5, 5),
('50', '2', 5, 5, 5, 5),
('50', '3', 5, 5, 5, 5),
('51', '1', 5, 5, 1, 1),
('51', '2', 1, 1, 5, 5),
('51', '3', 5, 5, 1, 1),
('52', '1', 5, 5, 2, 2),
('52', '2', 3, 2, 5, 5),
('52', '3', 5, 5, 2, 2),
('53', '1', 5, 5, 3, 3),
('53', '2', 3, 3, 5, 5),
('53', '3', 5, 5, 3, 3),
('54', '1', 5, 5, 4, 4),
('54', '2', 4, 4, 5, 5),
('54', '3', 5, 5, 4, 4),
('55', '1', 5, 5, 5, 5),
('55', '2', 5, 5, 5, 5),
('55', '3', 5, 5, 5, 5),
('56', '1', 5, 5, 6, 6),
('56', '2', 6, 6, 5, 5),
('56', '3', 5, 5, 6, 6),
('57', '1', 5, 5, 7, 7),
('57', '2', 7, 7, 5, 5),
('57', '3', 5, 5, 7, 7),
('58', '1', 5, 5, 8, 8),
('58', '2', 8, 8, 5, 5),
('58', '3', 5, 5, 8, 8),
('59', '1', 5, 5, 9, 9),
('59', '2', 9, 9, 5, 5),
('59', '3', 5, 5, 9, 9),
('6', '1', 1, 6, 6, 6),
('6', '2', 1, 6, 6, 6),
('6', '3', 2, 6, 6, 6),
('60', '1', 6, 6, 6, 6),
('60', '2', 6, 6, 6, 6),
('60', '3', 6, 6, 6, 6),
('61', '1', 6, 6, 1, 6),
('61', '2', 1, 6, 6, 1),
('61', '3', 6, 1, 1, 6),
('62', '1', 6, 6, 2, 2),
('62', '2', 2, 2, 6, 6),
('62', '3', 6, 6, 2, 2),
('63', '1', 6, 6, 3, 3),
('63', '2', 3, 3, 6, 6),
('63', '3', 6, 6, 3, 3),
('64', '1', 6, 6, 4, 4),
('64', '2', 4, 4, 6, 6),
('64', '3', 6, 6, 4, 4),
('65', '1', 6, 6, 5, 5),
('65', '2', 5, 5, 6, 6),
('65', '3', 6, 6, 5, 5),
('66', '1', 6, 6, 6, 6),
('66', '2', 6, 6, 6, 6),
('66', '3', 6, 6, 6, 6),
('67', '1', 6, 6, 7, 7),
('67', '2', 7, 7, 6, 6),
('67', '3', 6, 6, 7, 7),
('68', '1', 6, 6, 8, 8),
('68', '2', 8, 8, 6, 6),
('68', '3', 6, 6, 8, 8),
('69', '1', 10, 0, 0, 0),
('69', '2', 10, 0, 0, 0),
('69', '3', 10, 0, 0, 0),
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
(4, 'Informatica', 40),
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
('11', 1, 3, 3, 3, '11', 1),
('12', 1.33333, 4, 5, 5, '12', 4),
('13', 1.66667, 5, 7, 7, '13', 2),
('14', 2, 6, 9, 9, '14', 1),
('15', 2.33333, 7, 11, 11, '15', 1),
('16', 2.66667, 8, 13, 13, '16', 1),
('17', 3, 9, 15, 15, '17', 1),
('18', 5.66667, 17, 10, 10, '18', 3),
('19', 6.33333, 19, 11, 11, '19', 4),
('2', 2, 6, 6, 6, '3', 1),
('23', 2, 6, 6, 6, '2', 1),
('3', 3, 9, 9, 9, '3', 1),
('30', 3, 9, 9, 9, '30', 1),
('31', 2.33333, 7, 5, 5, '31', 1),
('32', 9, 3, 3, 3, 'aaaaaaaaa', 1),
('33', 3, 9, 9, 9, '33', 3),
('34', 3.33333, 10, 11, 11, '34', 4),
('35', 3.66667, 11, 13, 13, '35', 1),
('36', 4, 12, 15, 12, '36', 2),
('37', 5.66667, 17, 17, 13, '37', 3),
('38', 6.33333, 9, 14, 14, '38', 1),
('39', 7, 15, 15, 15, '39', 1),
('4', 4, 12, 12, 12, '5', 1),
('5', 5, 15, 15, 15, '6', 1),
('50', 5, 15, 15, 15, '50', 1),
('51', 3.66667, 11, 7, 7, '51', 1),
('52', 4.33333, 12, 9, 9, '52', 2),
('53', 4.33333, 13, 11, 11, '53', 3),
('54', 4.66667, 14, 13, 13, '54', 4),
('55', 5, 15, 15, 15, '55', 1),
('56', 5.33333, 16, 17, 17, '56', 1),
('57', 5.66667, 17, 19, 19, '57', 1),
('58', 6, 18, 21, 21, '58', 1),
('59', 6.33333, 19, 23, 23, '59', 1),
('6', 1.33333, 18, 18, 18, '6', 1),
('60', 6, 18, 18, 18, '60', 1),
('61', 4.33333, 13, 8, 13, '61', 1),
('62', 4.66667, 14, 10, 10, '62', 2),
('63', 5, 15, 12, 12, '63', 2),
('64', 5.33333, 16, 14, 14, '64', 1),
('65', 5.66667, 17, 16, 16, '65', 1),
('66', 6, 18, 18, 18, '66', 1),
('67', 6.33333, 19, 20, 20, '67', 1),
('68', 6.66667, 20, 22, 22, '68', 1),
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
