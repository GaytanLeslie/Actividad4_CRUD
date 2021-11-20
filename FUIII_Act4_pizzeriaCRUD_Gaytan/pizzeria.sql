-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 01:51:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `IDpedido` int(50) NOT NULL,
  `NombreCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `IngresaPedido` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `MetodoPago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Propina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`IDpedido`, `NombreCliente`, `IngresaPedido`, `Direccion`, `MetodoPago`, `Propina`) VALUES
(1, 'Leslie Gaytan', '1 pizza de pepperoni con orilla de queso', 'Tucan #2235', 'Tarjeta', 9),
(4, 'Isaac Navarrete', '1 pizza hawaina', 'coral #3646', 'vales de despensa', 0),
(6, 'Juan ', '1 pizza de jamon', 'pavo real #8754', 'Efectivo', 70);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`IDpedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `IDpedido` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
