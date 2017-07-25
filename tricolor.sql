-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2017 a las 14:48:18
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tricolor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoriausuario`
--

CREATE TABLE `auditoriausuario` (
  `id_auditoria` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `nombre` text NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `tiempoInicio` varchar(45) DEFAULT NULL,
  `tiempoFinSesion` varchar(45) NOT NULL,
  `fk_id_auditoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Registro de los movientos de los usuarios' ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `auditoriausuario`
--

INSERT INTO `auditoriausuario` (`id_auditoria`, `usuario`, `nombre`, `fechaInicio`, `tiempoInicio`, `tiempoFinSesion`, `fk_id_auditoria`) VALUES
(1, 'ivans52', 'asdfd', '2017-07-24', '22', '0', 1),
(33, 'asldjf', 'sflkdj', '2017-07-04', 'sdf', 'sdf', 2),
(34, 'ivans51', 'asdfd', '2017-07-25', '5', '0', 1),
(35, 'ivans51', 'asdfd', '2017-07-25', '5', '0', 1),
(36, 'ivans51', 'asdfd', '2017-07-25', '5', '0', 1),
(37, 'ivans51', 'asdfd', '2017-07-25', '5', '0', 1),
(38, 'ivans51', 'asdfd', '2017-07-25', '5', '0', 1),
(39, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(40, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(41, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(42, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(43, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(44, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(45, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(46, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(47, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(48, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(49, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(50, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(51, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(52, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(53, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(54, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(55, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(56, 'ivans51', 'asdfd', '2017-07-25', '6', '0', 1),
(57, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(58, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(59, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(60, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(61, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(62, 'ivans51', 'asdfd', '2017-07-25', '7', '0', 1),
(63, 'ivans52', 'Ivans', '2017-07-25', '7', '0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato`
--

CREATE TABLE `dato` (
  `id_dato` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `edad` text NOT NULL,
  `sexo` text NOT NULL,
  `fk_id_dato_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Datos del usuario' ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `dato`
--

INSERT INTO `dato` (`id_dato`, `nombre`, `apellido`, `edad`, `sexo`, `fk_id_dato_id_usuario`) VALUES
(1, 'asdfd', 'sdf', 'sdfd', 'Femenino', 1),
(2, 'Ivans', 'Del PIno', '18', 'Masculino', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(100) NOT NULL,
  `opciones` text NOT NULL,
  `fecha` date DEFAULT NULL,
  `tipoUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `clave`, `opciones`, `fecha`, `tipoUsuario`) VALUES
(1, 'ivans51', '1234', 'Registrar', '2017-07-25', 'Administrador'),
(2, 'ivans52', '1234', 'Registrar', '2017-07-24', 'Estandar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditoriausuario`
--
ALTER TABLE `auditoriausuario`
  ADD PRIMARY KEY (`id_auditoria`),
  ADD KEY `fk_id_auditoria` (`fk_id_auditoria`);

--
-- Indices de la tabla `dato`
--
ALTER TABLE `dato`
  ADD PRIMARY KEY (`id_dato`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoriausuario`
--
ALTER TABLE `auditoriausuario`
  MODIFY `id_auditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT de la tabla `dato`
--
ALTER TABLE `dato`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoriausuario`
--
ALTER TABLE `auditoriausuario`
  ADD CONSTRAINT `fk_id_auditoria` FOREIGN KEY (`fk_id_auditoria`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `dato`
--
ALTER TABLE `dato`
  ADD CONSTRAINT `fk_id_dato_id_usuario` FOREIGN KEY (`id_dato`) REFERENCES `usuarios` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
