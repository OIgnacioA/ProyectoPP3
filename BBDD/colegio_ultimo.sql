-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-10-2022 a las 16:58:16
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
  `pass` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `fnacimiento`, `genero`, `dni`, `email`, `cod_area`, `telefono`, `contacto_mail`, `cod_area_cont`, `telefonocont`, `direccion`, `provincia`, `localidad`, `titulos`, `fe_alta`, `estado`, `observaciones`, `pasaporte`, `fk_carrera_id`, `pass`, `rol`) VALUES
(46, 'ana', 'lopez', '1900-12-31', 'Femenino', '45212135', '', '221', '4528812', 'ana@gmail.com', '011', '1653434', 'lavalle perez 4532 aldana lopez entre / 1900 aldanaaaaaafgkfdgdfkggrgktkkt56546456hy6th56y5', 'Buenos Aires', 'la plata', 'analista', '0000-00-00', 'Noregular', '.............', '', 2, NULL, 'Alumno'),
(47, 'Antonella', 'Giordano', '0000-00-00', 'Femenino', '1', 'antonella_giordano@hotmail.com', '', '', '', '', '', '', 'Cordoba', '', '', '0000-00-00', 'Noregular', '', '', 1, NULL, 'Alumno'),
(48, 'andrea', 'martinez', '0000-00-00', '', '33999123', 'andre@hotmail.com', '', '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', 2, NULL, 'Alumno'),
(49, 'borrar', 'borrado', '0000-00-00', 'Femenino', '1111111', 'sehent@hotmail.com', '', '', '', '', '', '', 'Cordoba', '', '', '0000-00-00', 'Noregular', '', '', 1, NULL, 'Alumno');

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
  `comentarios` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cursada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`, `ESTADO`, `codigo`, `duracion`, `resolucion`, `anio_caducidad`, `anio_resolucion`, `alta`, `comentarios`, `cursada`, `plan`) VALUES
(1, 'Analista de sistemas', 1, '003', '1', '1515', '10/10/2025', '10/10/2000', '10/10/2021', NULL, 'lun vier 18hs-20hs.', ''),
(2, 'Desarrollador de software', 1, '002', '8', '1515', '10/10/2028', '10/10/2005', '10/10/2018', NULL, 'lun vier 18hs-20hs.', ''),
(3, 'Seguridad e higiene', 1, '001', '3', '1508', '10/10/2029', '10/10/2001', '10/10/2015', NULL, 'lun vier 18hs-20hs.', ''),
(8, 'Alienologia', 0, '004', ' 2', '132', '2022-10-11', '2022-10-04', '2022-10-04', 'estructurada desde luego. ', 'lun vier 18hs-20hs.', ''),
(9, 'lauftologia', 0, '006', '2', '156', '10/10/2025', '10/10/2000', '10/10/2011', '', 'lun vier 18hs-20hs.', '');

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
(2, 'Logica', 'propedeutica', '001', NULL),
(4, 'MatemÃ¡ticas', 'Propedeutica', '002', 2),
(9, 'Practicas Profecionalizantes', 'Propedeutica', '011', 3),
(10, 'Historia', 'Propedeutica', '007', 1),
(11, 'rectangulologÃ­a basica', 'Correlativa', '013', 3);

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
(2, 1),
(2, 2),
(2, 3),
(4, 1),
(4, 2),
(4, 3),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1);

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
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `pasaporte` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellido`, `dni`, `pasaporte`, `email`, `rol`, `id_carrera`) VALUES
(4, 'Antonella', 'Leguizamon', '31422222', '31423345', 'ejemplo@esomismo', 'Director', 1),
(38, 'nicol', 'Cruz', '45000000', '45000000', 'elenan@jklalkja', 'Director', 2),
(41, 'andres', 'fernandez', '34050123', '', 'juanf@gmail.com', 'Director', 1),
(42, 'Andy ', 'Perez', '22345543', '', 'andy@gmail.com', 'Secretario', 1),
(43, 'Gerardo', 'Lauff', '28671163', '', 'gerlauff@hotmail.com', 'Director', 1),
(45, 'john', 'Doe', '123456789', '', 'login@login', 'Director', 1),
(46, 'aldana', ' lopez', '11222333', '', 'aldana_tam_lopez@hotmail.com', 'Director', 1);

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
  `DNI` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasaporte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`, `apellido`, `titulo`, `email`, `telefono`, `DNI`, `pasaporte`, `rol`) VALUES
(1, 'Juan', 'Dominguez', 'Abogado', 'juanD@gmail.com', '221567800', '20890988', '', ''),
(2, 'Eugenia', 'Benitez', 'Investigadora ', 'eugeniaBB@araucaria.com', '221345654', '45999999', '', ''),
(3, 'Antonio', 'Yanini', 'Progrmador', 'antoniofagot@hothot.com', '2216666666', '54678876', '', ''),
(4, 'Mauro', 'Gonzales', 'Ciencias Politicas', 'mauroGon83@jaleuolo.com', '2213334455', '18900334', '', ''),
(5, 'Oscar', 'AvendaÃ±o', 'terciario', 'elefantopolis@saraza.com', '2218526598', '32666555', '', ''),
(6, 'profe', 'borrar', '', 'sehent@hotmail.com', '', '555', '', 'Docente');

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
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_carrera` (`id_carrera`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
