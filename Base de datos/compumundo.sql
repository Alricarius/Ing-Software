-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 19:51:50
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compumundo`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerDatosProducto` (IN `id` INT)  BEGIN
SELECT * FROM Producto WHERE id_prod = id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `img` longblob NOT NULL,
  `fk_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `desc_prod` varchar(1000) NOT NULL,
  `carac_prod` varchar(1000) NOT NULL,
  `precio_prod` int(10) NOT NULL,
  `tipo_prod` varchar(20) NOT NULL,
  `fecha_prod` datetime DEFAULT current_timestamp(),
  `cant_prod` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `nom_prod`, `desc_prod`, `carac_prod`, `precio_prod`, `tipo_prod`, `fecha_prod`, `cant_prod`) VALUES
(1, 'asd', 'asd1', 'asd2', 1000, 'Computadoras', '2020-10-19 11:59:39', 0),
(2, 'ggg', 'ggg2', 'ggg3', 999, 'Pieza', '2020-10-19 12:23:30', 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prod_portal`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prod_portal` (
`id_prod` int(11)
,`nom_prod` varchar(50)
,`precio_prod` int(10)
,`img` longblob
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_us` int(11) NOT NULL,
  `nom_us` varchar(40) NOT NULL,
  `ape_us` varchar(40) NOT NULL,
  `telf_us` int(10) DEFAULT NULL,
  `cel_us` int(10) DEFAULT NULL,
  `dep_us` varchar(30) DEFAULT NULL,
  `provincia_us` varchar(30) DEFAULT NULL,
  `dir_us` varchar(70) NOT NULL,
  `tipo_us` tinyint(1) DEFAULT 0,
  `carnet_us` int(8) NOT NULL,
  `email_us` varchar(50) NOT NULL,
  `pass_us` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura para la vista `prod_portal`
--
DROP TABLE IF EXISTS `prod_portal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prod_portal`  AS  select `producto`.`id_prod` AS `id_prod`,`producto`.`nom_prod` AS `nom_prod`,`producto`.`precio_prod` AS `precio_prod`,`imagen`.`img` AS `img` from (`producto` left join `imagen` on(`producto`.`id_prod` = `imagen`.`fk_prod`)) order by `producto`.`fecha_prod` desc ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `fk_prod` (`fk_prod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`fk_prod`) REFERENCES `producto` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
