-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2017 a las 14:30:51
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
-- Base de datos: `basedatos`
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
(3, '203400134', 6, 3, 'vip'),
(4, '153056783', 6, 2, 'medios'),
(5, '2503453238', 4, 2, 'platino'),
(6, '4330156340', 4, 4, 'medios'),
(7, '3254221894', 7, 3, 'altos'),
(8, '8798715365', 7, 4, 'vip'),
(10, '3468733234', 4, 3, 'platino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `medios` int(11) NOT NULL,
  `altos` int(11) NOT NULL,
  `vip` int(11) NOT NULL,
  `platino` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `nombre`, `medios`, `altos`, `vip`, `platino`, `fecha`) VALUES
(2, 'Opera Clasica', 20, 30, 10, 5, '2017-12-08'),
(3, 'Concierto Cultural', 50, 20, 15, 10, '2017-11-23'),
(4, 'Eliminatorias Rusia 2018', 2000, 5000, 350, 50, '2018-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `sexo` enum('F','M') NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenya` varchar(10) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `cedula`, `sexo`, `telefono`, `correo`, `direccion`, `usuario`, `contrasenya`, `admin`) VALUES
(1, 'Super', 'User', 'V11111111', 'M', '0426-0000000', 'superuser@gmail.com', 'calle 2 pueblo nuevo', 'admin', '12345', 1),
(4, 'Jesus', 'David', 'V-26066108', 'M', '04247712191', 'jesus.corsales@gmail.com', 'machiri, San Cristobal', 'achernov', 'hola', 0),
(6, 'Marco', 'Polo', 'V - 4898723', 'M', '04167901340', 'marco@hotmail.com', 'Chacao, Miranda', 'marcos29', 'tetris', 0),
(7, 'Maria', 'Cabriles', 'V - 2510340', 'F', '04165449680', 'maria.cabriles@unet.edu.ve', 'Pueblo Nuevo, San Cristobal', 'mariacabriles', '12345', 0);

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
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `id_boleto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
