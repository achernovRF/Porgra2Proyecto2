-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2017 a las 10:53:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuboloeto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `id_boleto` int(11) NOT NULL,
  `serial` varchar(10) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `ubicacion` enum('medios','altos','vip','platino') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boleto`
--

INSERT INTO `boleto` (`id_boleto`, `serial`, `id_usuario`, `id_evento`, `ubicacion`) VALUES
(7, '3434443', 2, 3, 'vip'),
(8, '3434343', 6, 1, 'vip');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`id_boleto`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `id_boleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
