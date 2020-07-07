-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2020 a las 15:05:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `id_bebida` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `bebida`
--

TRUNCATE TABLE `bebida`;
--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Buena', 0, 'a'),
(2, 'Mala', 0, 'b'),
(3, 'Regular', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id_res` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `edad`
--

TRUNCATE TABLE `edad`;
--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id_res`, `opcion`, `voto`, `seleccion`) VALUES
(1, '1 a 5', 0, 'a'),
(2, '6 a 8', 0, 'b'),
(3, '9 a 10', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `id_empleo` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `empleo`
--

TRUNCATE TABLE `empleo`;
--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Niños', 0, 'a'),
(2, 'Jovenes', 0, 'b'),
(3, 'Adultos Mayores', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `id_fruta` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `fruta`
--

TRUNCATE TABLE `fruta`;
--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`id_fruta`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No tengo tiempo', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `id_music` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `musica`
--

TRUNCATE TABLE `musica`;
--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`id_music`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No estaba informad@', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `acceso` varchar(50) NOT NULL DEFAULT 'Sin Contestar',
  `acceso2` varchar(50) NOT NULL DEFAULT 'Sin Contestar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `virus`
--

CREATE TABLE `virus` (
  `id_virus` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `virus`
--

TRUNCATE TABLE `virus`;
--
-- Volcado de datos para la tabla `virus`
--

INSERT INTO `virus` (`id_virus`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Atletismo', 0, 'a'),
(2, 'Natación', 0, 'b'),
(3, 'Otro', 0, 'c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `edad`
--
ALTER TABLE `edad`
  ADD PRIMARY KEY (`id_res`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`id_empleo`);

--
-- Indices de la tabla `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`id_fruta`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_music`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `virus`
--
ALTER TABLE `virus`
  ADD PRIMARY KEY (`id_virus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fruta`
--
ALTER TABLE `fruta`
  MODIFY `id_fruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `virus`
--
ALTER TABLE `virus`
  MODIFY `id_virus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
