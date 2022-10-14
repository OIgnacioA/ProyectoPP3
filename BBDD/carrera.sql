-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-10-2022 a las 17:02:28
-- Versión del servidor: 10.5.15-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u143332576_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio_caducidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio_resolucion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentarios` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`, `ESTADO`, `codigo`, `duracion`, `resolucion`, `anio_caducidad`, `anio_resolucion`, `alta`, `comentarios`) VALUES
(1, 'Analista de sistemas', 1, '003', '6', '1515', '10/10/2025', '10/10/2000', '10/10/2021', NULL),
(2, 'Desarrollador de software', 1, '002', '6', '1515', '10/10/2028', '10/10/2005', '10/10/2018', NULL),
(3, 'Seguridad e higiene', 1, '001', '3', '1508', '10/10/2029', '10/10/2001', '10/10/2015', NULL),
(8, 'Alienologia', 0, '004', ' 2', '132', '2022-10-11', '2022-10-04', '2022-10-04', 'estructurada desde luego. '),
(9, 'lauftologia', 0, '006', '2', '156', '10/10/2025', '10/10/2000', '10/10/2011', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
