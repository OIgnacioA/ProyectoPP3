-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2022 a las 00:58:35
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
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
  `FechaCambio` date DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasaporte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `fnacimiento`, `genero`, `dni`, `email`, `cod_area`, `telefono`, `contacto_mail`, `cod_area_cont`, `telefonocont`, `direccion`, `provincia`, `localidad`, `titulos`, `fe_alta`, `estado`, `FechaCambio`, `observaciones`, `pasaporte`, `pass`, `rol`) VALUES
(101, 'Antonella', 'Giordano', '2022-12-02', 'Masculino', '31444493', 'antonella_giordano@hotmail.co', '333', '542215923054', 'antonella_giordano@hotmail.co', 'Null', '', '', 'Buenos Aires', '', '', '0000-00-00', 'Regular', '2022-12-22', 'NULL', '31444493', NULL, 'Alumno'),
(102, 'caballo', 'Golpeador', '0000-00-00', 'Masculino', '23456987', 'araucariano@hotmail.com', '333', '5923054', 'araucariano@hotmail.com', 'Null', '5923054', ' 62 y 63 8', 'Buenos Aires', 'La Plata, Buenos Aires, Argentina', 'Buenos Aires', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '23456987', NULL, 'Alumno'),
(113, 'crissshna', 'Giordano', '0000-00-00', 'Seleccione una opción', '31666443', 'iordano@hotmail.com', '333', '2121', 'iordano@hotmail.com', 'Null', '5923054', '', 'Buenos Aires', '', '', '0000-00-00', 'NULL', '0000-00-00', 'NULL', '', NULL, 'Alumno'),
(114, 'paco', 'delucia', '0000-00-00', 'Femenino', '22444555', 't@hotmail.com', '333', '2121', 't@hotmail.com', 'Null', '5923054', '', 'Buenos Aires', '', '', '0000-00-00', 'NULL', NULL, 'NULL', '', NULL, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `ESTADO` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `carrera` (`id`, `ESTADO`, `nombre`, `codigo`, `duracion`, `resolucion`, `anio_caducidad`, `anio_resolucion`, `alta`, `comentarios`, `cursada`, `plan`) VALUES
(1, 'on', 'Analista de sistemas', '003', '55', '1515', '10/10/2025', '10/10/2000', '10/10/2021', NULL, 'lun vier 17hs-20hs.', '333'),
(2, 'on', 'Desarrollador de software', '002', '45', '1515', '10/10/2028', '10/10/2005', '10/10/2018', NULL, 'lun vier 18hs-20hs.', '555'),
(3, 'on', 'Seguridad e Higiene', '004', ' 2333', '132', '2022-10-11', '2022-10-04', '2022-10-04', 'estructurada desde luego. ', 'lun vier 18hs-20hs.', '666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras_alumnos`
--

CREATE TABLE `carreras_alumnos` (
  `ID` int(10) NOT NULL,
  `ID_Carrera` int(10) NOT NULL,
  `ID_Alumno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras_alumnos`
--

INSERT INTO `carreras_alumnos` (`ID`, `ID_Carrera`, `ID_Alumno`) VALUES
(25, 1, 113),
(30, 1, 101),
(32, 2, 113),
(33, 2, 101);

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
(4, 'MatemÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¡ticas', 'Propedeutica', '002', 2),
(9, 'Practicas Profecionalizantes', 'Propedeutica', '011', 3),
(10, 'Historia', 'Propedeutica', '007', 1),
(11, 'rectangulologÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â­a basica', 'Correlativa', '013', 3);

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
(4, 1),
(4, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
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
  `telefono` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `pasaporte` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellido`, `telefono`, `dni`, `pasaporte`, `email`, `rol`, `id_carrera`) VALUES
(38, 'nicol', 'Cruz', '', '45000000', '45000000', 'elenan@jklalkja', 'Director', 2),
(41, 'andres', 'fernandez', '', '34050123', '', 'juanf@gmail.com', 'Director', 1),
(42, 'Andy ', 'Perez', '', '22345543', '', 'andy@gmail.com', 'Secretario', 1),
(43, 'Gerardo', 'Lauff', '', '28671163', '', 'gerlauff@hotmail.com', 'Director', 1),
(46, 'aldana', ' lopez', '', '11222333', '', 'aldana_tam_lopez@hotmail.com', 'Director', 1),
(49, 'andy', 'garcia', '', '11122233', '', '', '', 1),
(50, 'andres', 'garcia', '', '12312312', '', 'andres@andres', 'Director', 1),
(51, 'aldana', 'lopez', '', '12345699', '', 'super@super', 'super', 1),
(52, 'Hector', 'Caputo', '', '12345677', '', 'preceptor@preceptor', 'Preceptor', 1),
(53, 'persona', 'prueba', '', '12345678', '', 'login@login', 'Director', 1),
(55, 'eee', 'eeee', '', '44444444', '', 'sehent@hotmail.com', 'Director', 1);

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
(5, 'Oscar', 'AvendaÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â±o', 'terciario', 'elefantopolis@saraza.com', '2218526598', '32666555', '', ''),
(6, 'profe', 'borrar', '', 'sehent@hotmail.com', '', '555', '', 'Docente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras_alumnos`
--
ALTER TABLE `carreras_alumnos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Carrera` (`ID_Carrera`),
  ADD KEY `ID_Alumno` (`ID_Alumno`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `carreras_alumnos`
--
ALTER TABLE `carreras_alumnos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras_alumnos`
--
ALTER TABLE `carreras_alumnos`
  ADD CONSTRAINT `carreras_alumnos_ibfk_2` FOREIGN KEY (`ID_Carrera`) REFERENCES `carrera` (`id`),
  ADD CONSTRAINT `carreras_alumnos_ibfk_3` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `FK_6DF05284E52BD977` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`id`);

--
-- Filtros para la tabla `materia_carrera`
--
ALTER TABLE `materia_carrera`
  ADD CONSTRAINT `materia_carrera_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_carrera_ibfk_2` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
