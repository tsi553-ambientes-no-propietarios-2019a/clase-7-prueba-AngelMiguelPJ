-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2019 a las 07:54:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Codigo` text NOT NULL,
  `Nombre` text NOT NULL,
  `Tipo` set('Alimento','Vestimenta','Salud') NOT NULL,
  `Cantidad` text NOT NULL,
  `Precio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `Nombre_Tienda` varchar(100) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Confir_Clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`Nombre_Tienda`, `Usuario`, `Clave`, `Confir_Clave`) VALUES
('Lusistos', 'angel', 'd41d8cd98f00b204e9800998ecf8427e', 'e2fc714c4727ee9395f324cd2e7f331f'),
('Juanales', 'Betty', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('makelino', 'Boris', 'd41d8cd98f00b204e9800998ecf8427e', 'e2fc714c4727ee9395f324cd2e7f331f'),
('Velas', 'mane', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
('Flores Angeles', 'Miguel', 'd41d8cd98f00b204e9800998ecf8427e', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD UNIQUE KEY `Usuario` (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
