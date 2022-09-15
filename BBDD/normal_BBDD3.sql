-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 01:18:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `normal1_`
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
  `fk_carrera_id` int(11) NOT NULL,
  `pass` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `fnacimiento`, `genero`, `dni`, `email`, `cod_area`, `telefono`, `contacto_mail`, `cod_area_cont`, `telefonocont`, `direccion`, `provincia`, `localidad`, `titulos`, `fe_alta`, `estado`, `observaciones`, `pasaporte`, `fk_carrera_id`, `pass`) VALUES
(10, 'Leandro', 'gonzales', '2000-02-09', 'mas', '40800999', 'elprofedescartable@hotmail.com', '221', '123123', 'elpadredelelprofedescartable@hotmail.com', '221', '34534554', '6 y 89', 'Buenos aires', 'LAPLATA', 'secundario', '2022-09-15', 'Inscripto', 'ningun,cero, sin nada destacable.', '40800999', 3, NULL),
(11, 'matias ', 'botello', '0000-00-00', 'mas', '643664', 'matiasbotella@gmail.com', '332', '221743847', 'matiaspapi@gmail.com', '443', '221454368', '56 y 3', 'la plata', 'la plata ', 'maestro gardinero ', '2021-10-06', 'Inscripto', '..', '643664', 2, NULL),
(12, 'Alex', 'zarofla', '2002-02-05', 'otro', '23213213', 'selecto@gerlos.com', '221', '23423444', 'selecto@gerlos.com', '223', '34534577', '55 2 y 3', 'Buenos Aires', 'La Plata', 'secundario', '2022-09-21', 'Inscripto', 'ninguna por  ahora', '23213213', 1, NULL),
(13, 'Alberto', 'Masutti', '1997-02-11', 'mas', '22222', 'electrochongo@gegegeg.gog', '333', '123456', 'elevtrochongopadre@electrochongoloso.com.ar', '222', '456789', '13 y camino Gral belg', 'Buenos aires', 'La Plata', 'Progrmador', '2022-09-14', 'Regular', 'es una persona de buen comer', '22222', 3, NULL),
(14, 'Alexandra', 'Mazzutti', '1992-02-26', 'mas', '30567876', 'ellaesunamina@lareminaes.com', '445', '123451', 'nadiepasadeestacorner@gmail.com', '3476', '5566777', '44 y ruta 2', 'Catamarca', 'PaloBañado', 'Investigadora ', '2022-09-20', 'Inscripto', '.', '30567876', 2, NULL),
(15, 'Matis', 'urubertis', '2000-02-13', 'fem', '20345654', 'haciaallavoy@novengas.con', '221', '23445433', 'the_toxicgirl@jajalapor.com', '333', '234325555', '1 y la matanza', 'Buenos Aires', 'Berisso', 'secundario', '2022-09-01', 'Regular', '.._', '20345654', 1, NULL);

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
(3, 'Seguridad e higiene', 'Seguridad e higiene', '', '', '', '', '', '', NULL);

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
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DNI` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`, `apellido`, `titulo`, `email`, `telefono`, `DNI`) VALUES
(1, 'Juan', 'Dominguez', 'Abogado', 'juanD@gmail.com', '221567800', '20890988'),
(2, 'Eugenia', 'Benitez', 'Investigadora ', 'eugeniaBB@araucaria.com', '221345654', '45999999'),
(3, 'Antonio', 'Yanini', 'Progrmador', 'antoniofagot@hothot.com', '2216666666', '54678876'),
(4, 'Mauro', 'Gonzales', 'Ciencias Politicas', 'mauroGon83@jaleuolo.com', '2213334455', '18900334');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
