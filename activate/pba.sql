-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2016 a las 12:05:03
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_u`
--

CREATE TABLE `ruta_u` (
  `id_ru` int(11) NOT NULL,
  `pasos` double DEFAULT NULL,
  `trayecto` double DEFAULT NULL,
  `tiempo` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta_u`
--

INSERT INTO `ruta_u` (`id_ru`, `pasos`, `trayecto`, `tiempo`, `id_user`) VALUES
(1, 100, 79, '2016-11-07 02:44:02', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `app_user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apm_user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user_log` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass_user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sex_user` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_user` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `create_user` datetime DEFAULT NULL,
  `activo_user` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nom_user`, `app_user`, `apm_user`, `user_log`, `pass_user`, `sex_user`, `rol_user`, `create_user`, `activo_user`) VALUES
(1, 'Jhonatan', 'Gtz', 'Gtz', 'jh', '123', 'M', 'A', '2016-11-06 00:00:00', '1'),
(2, 'Jhonatan', 'Gtz', 'Gtz', 'jho', '123', 'M', 'U', '0000-00-00 00:00:00', '1'),
(3, 'User', 'User2', 'USer2', 'Usuario', '123', NULL, 'U', NULL, '1'),
(4, 'User2', 'User2', 'USer2', 'Usuario2', '123', NULL, 'U', NULL, '1'),
(5, 'User3', 'User2', 'USer2', 'Usuario3', '123', NULL, 'U', NULL, '1'),
(6, 'User4', 'User2', 'USer2', 'Usuario4', '123', NULL, 'U', NULL, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ruta_u`
--
ALTER TABLE `ruta_u`
  ADD PRIMARY KEY (`id_ru`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ruta_u`
--
ALTER TABLE `ruta_u`
  MODIFY `id_ru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ruta_u`
--
ALTER TABLE `ruta_u`
  ADD CONSTRAINT `ruta_u_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
