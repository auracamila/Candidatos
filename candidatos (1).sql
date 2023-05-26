-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2023 a las 20:30:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminstracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nombreapellido` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `fecha` datetime(6) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `hojadevida` varchar(50) NOT NULL,
  `ingles` varchar(50) NOT NULL,
  `comentarios` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `nombreapellido`, `numero`, `correo`, `ciudad`, `fecha`, `linkedin`, `hojadevida`, `ingles`, `comentarios`) VALUES
(10, 'Aura Camila Luna Torres', '3147364547', 'lunatorresauracamila@gmail.com', 'Soacha', '2023-05-31 17:00:00.000000', 'https://www.linkedin.com/in/aura-luna-b56897173/', 'Hojadevida-AuraLuna.pdf', 'A1', 'N.A'),
(11, 'Diana Marcela Suarez Velandia', '3233064830', 'dianasuarez428@gmail.com', 'Sutarmachan', '2023-05-29 13:25:00.000000', 'https://www.linkedin.com/in/diana-suarez-82bb70152/', 'HV_DianaMarcelaSuarezVelandia.pdf', 'A2', 'N.A'),
(12, 'Juana Valentina Cardona Gomez', '3045269532', 'jcardonagomez25@gmail.com', 'Soacha', '2023-05-29 14:00:00.000000', 'https://www.linkedin.com/in/juana-cardona-gomez-9a3ab31ba', 'HojadevidaJuanaValentinaCardona(1)(3).pdf', 'A1', 'N.A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
