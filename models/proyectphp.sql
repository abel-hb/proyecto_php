-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 20:53:54
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embalaje`
--

CREATE TABLE `embalaje` (
  `tipo_embalaje` varchar(20) NOT NULL,
  `m_cuadrados` float NOT NULL,
  `m_cubicos` int(11) NOT NULL,
  `aplilable` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `embalaje`
--

INSERT INTO `embalaje` (`tipo_embalaje`, `m_cuadrados`, `m_cubicos`, `aplilable`) VALUES
('Palet', 1.44, 2, 'SI'),
('Caja', 1, 1, 'SI'),
('Barril', 5.76, 7, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logistica`
--

CREATE TABLE `logistica` (
  `nombre_almacen` varchar(20) NOT NULL,
  `m_cuadrados` int(11) NOT NULL,
  `m_cubicos` int(11) NOT NULL,
  `stock_ocupado` float NOT NULL,
  `materiales_peligroso` varchar(15) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logistica`
--

INSERT INTO `logistica` (`nombre_almacen`, `m_cuadrados`, `m_cubicos`, `stock_ocupado`, `materiales_peligroso`, `direccion`) VALUES
('Sevilla', 400, 8000, 8000, '2', 'C/Federico Garcia,19'),
('Madrid', 2500, 25000, 126, 'Acido', 'C/Sol,3'),
('Brenes', 2500, 125000, 0, 'Gas', 'C/Pelayo,13'),
('Malaga', 625, 15625, 11, 'NO', 'C/Amargura,25'),
('Sevilla', 25000, 250000, 8000, 'No', 'asdfasdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(10) NOT NULL,
  `nombre_almacen` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_embalaje` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `material_peligroso` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `stock_ocupado` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` mediumint(8) NOT NULL,
  `Name` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(60) CHARACTER SET utf8 NOT NULL,
  `level` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `level`) VALUES
(1, 'Abel', 'abelherrero.17@campuscamara.es', 'abelito', 'user'),
(2, 'Jose', 'jose@gmail.com', 'jose', 'user'),
(3, 'Antonio', 'antonio@gmail.com', 'antonio', 'user'),
(4, 'Admin', 'admin@admin.com', 'admin', 'admin'),
(5, 'Admin2', 'admin2@admin.com', 'admin2', 'admin'),
(6, 'admin3', 'admin3@admin.es', 'admin3', 'admin'),
(7, 'Javier', 'javier@eusa.es', 'javier', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
