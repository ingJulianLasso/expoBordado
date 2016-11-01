-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2016 a las 17:08:51
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdexpobordados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenador`
--

CREATE TABLE `disenador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `disenador`
--

INSERT INTO `disenador` (`id`, `nombre`, `activo`, `created_at`) VALUES
(6, 'JosÃ© Edy Aguirre Montoya', 1, '2016-11-01 10:34:45'),
(7, 'Julian Lasso', 1, '2016-11-01 10:43:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `imagen` varchar(37) COLLATE utf8_spanish_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `disenador_id` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `valor_social` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `publicado` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`id`, `disenador_id`, `descripcion`, `valor_social`, `precio`, `publicado`, `created_at`) VALUES
(3, 7, '                    s df sd fs df sdf sd fa sdf sad fas df asd fasdf asdf asdfasd fas df asdf asdf asd fasd fas df asdf asdf asdf asdf asf gdghdfgjfg hjfg h sdfgq sfqfasdf asdf asdfasdgg hfghdfgh d ghdfghdfghdfghdfghdfghdf ghdfghdfg hdf ghd fghd fghd', '                    s df sd fs df sdf sd fa sdf sad fas df asd fasdf asdf asdfasd fas df asdf asdf asd fasd fas df asdf asdf asdf asdf asf gdghdfgjfg hjfg h sdfgq sfqfasdf asdf asdfasdgg hfghdfgh d ghdfghdfghdfghdfghdfghdf ghdfghdfg hdf ghd fghd fghd', 3888, 0, '2016-11-01 10:27:36'),
(4, 6, 'hsodhaojf', 'sdfsdfsdf', 444, 0, '2016-11-01 10:27:36'),
(5, 7, 'dsasdhola                  ', '                    mun                  ', 32, 0, '2016-11-01 11:06:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(32) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`) VALUES
(3, 'jalf', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disenador`
--
ALTER TABLE `disenador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `disenador_nombre_Idx` (`nombre`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen_item_id_Idx` (`item_id`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_disenador_id_Idx` (`disenador_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disenador`
--
ALTER TABLE `disenador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
