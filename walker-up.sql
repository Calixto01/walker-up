-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2022 a las 17:12:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `walker-up`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `old_person`
--

CREATE TABLE `old_person` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `healtProblem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `id_walker` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `name_user`, `phone`, `id_walker`, `email`, `passwd`) VALUES
(1, 'admin', '3141234567', 'Q4Q6P6i', 'admin@ucol.mx', '1234'),
(2, 'juan', '3141234567', 'wwzyx', 'juan@ucol.mx', '2020'),
(3, 'Pedro', '3141234567', '28860', 'pedro@ucol.mx', '$2y$10$18Hi'),
(4, 'Marcos', '3141234567', '28864', 'marcos@ucol.mx', '$2y$10$j7sc'),
(5, 'Martha', '+523141060975', '28865', 'martha@ucol.mx', '$2y$10$febc1FiptnUlrx8B5Ol0ZOsg/lwKsTd8um.hL0PrxxFLm6askBRnO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `old_person`
--
ALTER TABLE `old_person`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
