-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2022 a las 15:15:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `normal!`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fnacimiento` date NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_area_cont` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonocont` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fe_alta` date NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasaporte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_carrera_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `fnacimiento`, `genero`, `dni`, `email`, `cod_area`, `telefono`, `contacto_mail`, `cod_area_cont`, `telefonocont`, `direccion`, `provincia`, `localidad`, `titulos`, `fe_alta`, `estado`, `observaciones`, `pasaporte`, `fk_carrera_id`) VALUES
(2, 'Gerardo ', 'Lauff', '1980-03-05', 'fem', '28333333', 'gerlauff@heithitler.com', '221', '5554444', 'gerlauffmadre@heithitler.com', '9221', '65465465465', 'altos de san lorenzo', 'Buenos Aires', 'La Plata', 'secundario', '2022-09-14', 'Egresado', 'tipazo', '28333333', 2),
(4, 'Oscar Ignacio', 'Avendaño', '2022-09-05', 'mas', '1111111', 'sehent@hotmail.com', '221', '5923054', 'sehent@hotmail.com', '221', '5923054', '137 e/ 66 y 67', 'Los Hornos', 'Los Hornos', 'Secundario Completo', '2022-09-13', 'Regular', 'tipazo', '1111111', 2),
(5, 'Antonella', 'Giordano', '2022-09-13', 'fem', '1111111', 'antonella_giordano@hotmail.com', '9221', '5525126', 'antonella_giordano@hotmail.com', '9221', '5525126', '6 n 1480 e/ 62 y 63', 'La Plata, Buenos Aires, Argentina', 'La Plata, Buenos Aires, Argentina', 'secundario', '0000-00-00', 'Regular', '.', '1111111', 1),
(6, 'baneza', 'Giordano', '0000-00-00', 'mas', '31462883', 'antonella_giordano@hotmail.com', '9221', '5525126', 'antonella_giordano@hotmail.com', '9221', '5525126', '6 n 1480 e/ 62 y 63', 'La Plata, Buenos Aires, Argentina', 'La Plata, Buenos Aires, Argentina', 'secundario', '2022-09-15', 'Noregular', 'tipazo', '31462883', 2),
(7, 'Antonella', 'Giordano', '0000-00-00', 'fem', '31462883', 'antonella_giordano@hotmail.com', '9221', '5525126', 'antonella_giordano@hotmail.com', '9221', '5923054', '6 n 1480 e/ 62 y 63', 'La Plata, Buenos Aires, Argentina', 'La Plata, Buenos Aires, Argentina', 'Secundario Completo', '2022-09-20', 'Noregular', 'tipazo', '31462883', 2),
(8, 'coco', 'Giordano', '2022-09-13', 'mas', '2222', 'antonella_giordano@hotmail.com', '9221', '5525126', 'antonella_giordano@hotmail.com', '9221', '5525126', '6 n 1480 e/ 62 y 63', 'La Plata, Buenos Aires, Argentina', 'La Plata, Buenos Aires, Argentina', 'Secundario Completo', '2022-09-13', 'Inscripto', 'tipazo', '2222', 3),
(9, 'curt cobain', 'cobaindije', '2022-09-12', 'fem', '654654', 'antonella_giordano@hotmail.com', '9221', '5525126', 'antonella_giordano@hotmail.com', '9221', '5923054', '6 n 1480 e/ 62 y 63', 'La Plata, Buenos Aires, Argentina', 'La Plata, Buenos Aires, Argentina', 'secundario', '2022-09-20', 'Regular', 'tipazo', '654654', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `carrera` (`id`, `nombre`, `descripcion`, `codigo`, `duracion`, `resolucion`, `anio_caducidad`, `anio_resolucion`, `alta`, `comentarios`) VALUES
(1, 'Analista de sistemas', 'Analista de sistemas', '', '', '', '', '', '', NULL),
(2, 'Desarrollador de software', 'Desarrollador de software', '', '', '', '', '', '', NULL),
(3, 'Seguridad e higiene', 'Seguridad e higiene', '', '', '', '', '', '', NULL),
(4, 'Ingenieria de Software', 'esta re buena', '4', ' 6', '14.526', '2018', '1920', 'Registrar', NULL),
(5, 'scatolanga', 'esta re buena', '1', ' 6', '14.526', '2018', '1920', 'Registrar', NULL),
(6, 'alambreta', 'esta re buena', '15', ' ', '14.526', '2018', '1920', 'Registrar', 'es una cosa de locos viste como eh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `descripcion`, `codigo`, `profesor_id`) VALUES
(2, 'Logica', 'propedeutica', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_carrera`
--

CREATE TABLE `materia_carrera` (
  `materia_id` int(11) NOT NULL,
  `carrera_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materia_carrera`
--

INSERT INTO `materia_carrera` (`materia_id`, `carrera_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1435D52D361F7E9C` (`fk_carrera_id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6DF05284E52BD977` (`profesor_id`);

--
-- Indices de la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  ADD PRIMARY KEY (`materia_id`,`carrera_id`),
  ADD KEY `IDX_AC5DF516B54DBBCB` (`materia_id`),
  ADD KEY `IDX_AC5DF516C671B40F` (`carrera_id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52D361F7E9C` FOREIGN KEY (`fk_carrera_id`) REFERENCES `carrera` (`id`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `FK_6DF05284E52BD977` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`);

--
-- Filtros para la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  ADD CONSTRAINT `FK_AC5DF516B54DBBCB` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AC5DF516C671B40F` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
