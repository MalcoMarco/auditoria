-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2018 a las 04:37:47
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auditoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compatitibilidades`
--

CREATE TABLE `compatitibilidades` (
  `id` int(11) NOT NULL,
  `c1` text COLLATE latin1_spanish_ci,
  `c2` text COLLATE latin1_spanish_ci,
  `c3` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `compatitibilidades`
--

INSERT INTO `compatitibilidades` (`id`, `c1`, `c2`, `c3`, `empresa_id`) VALUES
(1, 'Tiene la capacidad de coexistencia', 'Intercambia información con otro software', 'Lleva a cabo sus funciones requeridas cuando comparten el mismo entorno hardware y software', 1),
(2, 'Tiene la capacidad de coexistencia', 'Intercambia información con otro software', 'Lleva a cabo sus funciones requeridas cuando comparten el mismo entorno hardware y software', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eficiencias`
--

CREATE TABLE `eficiencias` (
  `id` int(11) NOT NULL,
  `e1` text COLLATE latin1_spanish_ci,
  `e2` text COLLATE latin1_spanish_ci,
  `e3` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `eficiencias`
--

INSERT INTO `eficiencias` (`id`, `e1`, `e2`, `e3`, `empresa_id`) VALUES
(1, 'Proporciona tiempos de respuesta, tiempo de proceso y potencia apropiados, bajo condiciones determinadas', NULL, NULL, 1),
(2, 'Proporciona tiempos de respuesta, tiempo de proceso y potencia apropiados, bajo condiciones determinadas', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `ruc` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `ruc`, `direccion`) VALUES
(1, 'Empresa Telesup', '12312312312', 'Jr comas 320 San Lorenzo'),
(2, 'Empresa Bitec', '98765423214', 'Jr Ramon Castilla 190');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fiabilidades`
--

CREATE TABLE `fiabilidades` (
  `id` int(11) NOT NULL,
  `fi1` text COLLATE latin1_spanish_ci,
  `fi2` text COLLATE latin1_spanish_ci,
  `fi3` text COLLATE latin1_spanish_ci,
  `fi4` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `fiabilidades`
--

INSERT INTO `fiabilidades` (`id`, `fi1`, `fi2`, `fi3`, `fi4`, `empresa_id`) VALUES
(1, 'Evita fallar como resultado de fallos en el software', 'Mantiene un nivel especificado de prestaciones de fallos de software o de infringir sus interfaces especificados', 'Reestablece un nivel de prestaciones especificados y de recuperar los datos direcctamente afectados en caso de fallo', NULL, 1),
(2, NULL, 'Mantiene un nivel especificado de prestaciones de fallos de software o de infringir sus interfaces especificados', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidades`
--

CREATE TABLE `funcionalidades` (
  `id` int(11) NOT NULL,
  `fu1` text COLLATE latin1_spanish_ci,
  `fu2` text COLLATE latin1_spanish_ci,
  `fu3` text COLLATE latin1_spanish_ci,
  `fu4` text COLLATE latin1_spanish_ci,
  `fu5` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `funcionalidades`
--

INSERT INTO `funcionalidades` (`id`, `fu1`, `fu2`, `fu3`, `fu4`, `fu5`, `empresa_id`) VALUES
(1, 'Proporciona un conjunto apropiado de funciones para tareas y objetivos de usuarios especificados', NULL, NULL, NULL, 'Adheriré a normas, convenciones o regulaciones en leyes y prescripciones similares relacionadas con funcionabilidad', 1),
(2, 'Proporciona un conjunto apropiado de funciones para tareas y objetivos de usuarios especificados', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenibilidades`
--

CREATE TABLE `mantenibilidades` (
  `id` int(11) NOT NULL,
  `m1` text COLLATE latin1_spanish_ci,
  `m2` text COLLATE latin1_spanish_ci,
  `m3` text COLLATE latin1_spanish_ci,
  `m4` text COLLATE latin1_spanish_ci,
  `m5` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `mantenibilidades`
--

INSERT INTO `mantenibilidades` (`id`, `m1`, `m2`, `m3`, `m4`, `m5`, `empresa_id`) VALUES
(1, 'Tiene la Capacidad para serle diagnosticadas las deficiencias o causas de los fallos en el software, o para indentificar las partes que han de ser modificadas', NULL, 'Evita efectos inesperados debidos a modificaciones de software', NULL, 'Tiene la capacidad para adherirse a normas o convenciones relacionadas con la mantenibilidad', 1),
(2, 'Tiene la Capacidad para serle diagnosticadas las deficiencias o causas de los fallos en el software, o para indentificar las partes que han de ser modificadas', 'Permite que una determinada modificación sea implementada', 'Evita efectos inesperados debidos a modificaciones de software', 'Permite que el software modificado sea validado', 'Tiene la capacidad para adherirse a normas o convenciones relacionadas con la mantenibilidad', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portabilidades`
--

CREATE TABLE `portabilidades` (
  `id` int(11) NOT NULL,
  `p1` text COLLATE latin1_spanish_ci,
  `p2` text COLLATE latin1_spanish_ci,
  `p3` text COLLATE latin1_spanish_ci,
  `p4` text COLLATE latin1_spanish_ci,
  `p5` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `portabilidades`
--

INSERT INTO `portabilidades` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `empresa_id`) VALUES
(1, 'Puede ser adaptado a diferentes entornos especificados, sin aplicar acciones o mecanismos distintos de aquellos proporcionados para este proposito por el propio software considerado', 'Puede ser instalado en un entorno especificado', 'Capacidad para coexistir con otro software independiente, en un entorno común, compartiendo recursos comunes', 'Puede ser usado en lugar de otro producto de software, para el mismo propósito en el mismo entorno', 'Capacidad para adherirse a normas o convenciones relacionadas con la portabilidad', 1),
(2, 'Puede ser adaptado a diferentes entornos especificados, sin aplicar acciones o mecanismos distintos de aquellos proporcionados para este proposito por el propio software considerado', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridades`
--

CREATE TABLE `seguridades` (
  `id` int(11) NOT NULL,
  `s1` text COLLATE latin1_spanish_ci,
  `s2` text COLLATE latin1_spanish_ci,
  `s3` text COLLATE latin1_spanish_ci,
  `s4` text COLLATE latin1_spanish_ci,
  `s5` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `seguridades`
--

INSERT INTO `seguridades` (`id`, `s1`, `s2`, `s3`, `s4`, `s5`, `empresa_id`) VALUES
(1, 'Logra niveles aceptables de daño a las personas, negocios, software, bienes o el entorno en un contexto de uso especifico', NULL, NULL, NULL, 'Asignación de funcionalidades a los usuarios', 1),
(2, 'Logra niveles aceptables de daño a las personas, negocios, software, bienes o el entorno en un contexto de uso especifico', NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usabilidades`
--

CREATE TABLE `usabilidades` (
  `id` int(11) NOT NULL,
  `u1` text COLLATE latin1_spanish_ci,
  `u2` text COLLATE latin1_spanish_ci,
  `u3` text COLLATE latin1_spanish_ci,
  `u4` text COLLATE latin1_spanish_ci,
  `u5` text COLLATE latin1_spanish_ci,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usabilidades`
--

INSERT INTO `usabilidades` (`id`, `u1`, `u2`, `u3`, `u4`, `u5`, `empresa_id`) VALUES
(1, 'Permite al usuario entender si el software es adecuado y cómo puede ser usado para unas tareas o condiciones de uso particulares', NULL, NULL, NULL, 'Capacidad de adherirse a normas, convenciones o regulaciones relacionadas con la usabilidad', 1),
(2, 'Permite al usuario entender si el software es adecuado y cómo puede ser usado para unas tareas o condiciones de uso particulares', NULL, NULL, NULL, NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compatitibilidades`
--
ALTER TABLE `compatitibilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `eficiencias`
--
ALTER TABLE `eficiencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fiabilidades`
--
ALTER TABLE `fiabilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `funcionalidades`
--
ALTER TABLE `funcionalidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `mantenibilidades`
--
ALTER TABLE `mantenibilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `portabilidades`
--
ALTER TABLE `portabilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `seguridades`
--
ALTER TABLE `seguridades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `usabilidades`
--
ALTER TABLE `usabilidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compatitibilidades`
--
ALTER TABLE `compatitibilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eficiencias`
--
ALTER TABLE `eficiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fiabilidades`
--
ALTER TABLE `fiabilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `funcionalidades`
--
ALTER TABLE `funcionalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mantenibilidades`
--
ALTER TABLE `mantenibilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `portabilidades`
--
ALTER TABLE `portabilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `seguridades`
--
ALTER TABLE `seguridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usabilidades`
--
ALTER TABLE `usabilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compatitibilidades`
--
ALTER TABLE `compatitibilidades`
  ADD CONSTRAINT `compatitibilidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eficiencias`
--
ALTER TABLE `eficiencias`
  ADD CONSTRAINT `eficiencias_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fiabilidades`
--
ALTER TABLE `fiabilidades`
  ADD CONSTRAINT `fiabilidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcionalidades`
--
ALTER TABLE `funcionalidades`
  ADD CONSTRAINT `funcionalidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenibilidades`
--
ALTER TABLE `mantenibilidades`
  ADD CONSTRAINT `mantenibilidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `portabilidades`
--
ALTER TABLE `portabilidades`
  ADD CONSTRAINT `portabilidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguridades`
--
ALTER TABLE `seguridades`
  ADD CONSTRAINT `seguridades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usabilidades`
--
ALTER TABLE `usabilidades`
  ADD CONSTRAINT `usabilidades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
