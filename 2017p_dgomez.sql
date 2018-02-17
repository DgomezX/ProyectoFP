-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-12-2017 a las 17:57:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2017p_dgomez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `categoria` varchar(20) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `valor energetico` int(10) NOT NULL,
  `proteina` decimal(6,2) NOT NULL,
  `hidratos` decimal(6,2) NOT NULL,
  `azucar` decimal(6,2) NOT NULL,
  `grasa` decimal(6,2) NOT NULL,
  `saturada` decimal(6,2) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `nombre`, `marca`, `categoria`, `tipo`, `valor energetico`, `proteina`, `hidratos`, `azucar`, `grasa`, `saturada`, `foto`) VALUES
(1, 'Leche entera', 'Central Lechera Astu', 'Lacteos y derivados', 'Leche', 63, '3.10', '4.60', '4.60', '3.60', '2.40', '/images/alimentos/lasturiana_ent.png'),
(2, 'Leche semidesnatada', 'Central Lechera Astu', 'Lacteos y derivados', 'Leche', 45, '3.15', '4.65', '4.65', '1.55', '1.00', '/images/alimentos/lasturiana_sem.png'),
(3, 'Leche desnatada', 'Central Lechera Astu', 'Lacteos y derivados', 'Leche', 34, '3.20', '4.70', '4.70', '0.25', '0.17', '/images/alimentos/lasturiana_des.png'),
(4, 'Nata para cocinar', 'Central Lechera Astu', 'Lacteos y derivados', 'Nata', 189, '2.40', '4.40', '3.70', '18.00', '12.20', '/images/alimentos/nasturiana_cocina.png'),
(5, 'Nata para montar', 'Central Lechera Astu', 'Lacteos y derivados', 'Nata', 360, '1.80', '2.70', '2.70', '38.00', '35.70', '/images/alimentos/nasturiana_monta.png'),
(6, 'Nata montada spray', 'Central Lechera Astu', 'Lacteos y derivados', 'Nata', 312, '2.40', '11.90', '11.90', '28.30', '18.50', '/images/alimentos/nasturiana_spray.png'),
(7, 'Queso fresco', 'Burgo de Arias', 'Lacteos y derivados', 'Queso', 182, '10.50', '3.50', '3.50', '14.00', '9.60', '/images/alimentos/barias.jpg'),
(8, 'Queso fresco 0%', 'Burgo de Arias', 'Lacteos y derivados', 'Queso', 66, '12.00', '4.00', '3.80', '0.20', '0.00', '/images/alimentos/barias_0.jpg'),
(9, 'Mozzarella fresca', 'Galbani', 'Lacteos y derivados', 'Queso', 238, '17.00', '2.00', '1.00', '18.00', '12.50', '/images/alimentos/moza_galbani.jpg'),
(10, 'Queso camembert', 'President', 'Lacteos y derivados', 'Queso', 240, '9.00', '7.00', '7.00', '19.50', '14.00', '/images/alimentos/camemb_presid.jpg'),
(11, 'Queso emmental', 'Carrefour', 'Lacteos y derivados', 'Queso', 369, '27.00', '0.00', '0.00', '29.00', '19.00', '/images/alimentos/emmental_carre.jpg'),
(12, 'Yogurt natural', 'Danone', 'Lacteos y derivados', 'Yogurt', 58, '3.20', '4.00', '4.00', '2.90', '1.80', '/images/alimentos/danone_natur.jpg'),
(13, 'Yogurt natural azucarado', 'Danone', 'Lacteos y derivados', 'Yogurt', 82, '3.00', '12.50', '12.50', '1.90', '1.10', '/images/alimentos/danone_azuc.jpg'),
(14, 'Yogurt Oikos griego', 'Danone', 'Lacteos y derivados', 'Yogurt', 123, '3.70', '3.90', '3.90', '10.00', '6.20', '/images/alimentos/danone_oikosnatur.png'),
(15, 'Cuajada', 'Danone', 'Lacteos y derivados', 'Yogurt', 94, '4.90', '6.70', '6.60', '5.30', '3.20', '/images/alimentos/danone_cuaj.jpg'),
(16, 'Huevo gallina fresco', NULL, 'Huevo', NULL, 159, '12.90', '0.00', '0.00', '10.00', '3.00', '/images/alimentos/huevog_fresco.jpg'),
(17, 'Clara huevo pasteurizada', 'Mercadona', 'Huevo', NULL, 50, '11.00', '0.00', '0.00', '0.10', '0.00', '/images/alimentos/clara_huevo.jpg'),
(18, 'Huevo codorniz fresco', NULL, 'Huevo', NULL, 158, '13.00', '0.00', '0.00', '11.00', '3.50', '/images/alimentos/huevoc_fresco.jpg'),
(19, 'Pechuga de pollo', NULL, 'Carne', 'Aves', 145, '22.20', '0.00', '0.00', '6.20', '0.00', '/images/alimentos/p_pollo.jpg'),
(20, 'Pechuga de pavo', NULL, 'Carne', 'Aves', 115, '24.00', '0.00', '0.00', '2.00', '1.00', '/images/alimentos/p_pavo.jpg'),
(21, 'Muslo de pollo', NULL, 'Carne', 'Aves', 183, '20.60', '0.00', '0.00', '11.20', '3.00', '/images/alimentos/m_pollo.jpg'),
(22, 'Muslo de pavo', NULL, 'Carne', 'Aves', 114, '21.00', '0.00', '0.00', '4.00', '0.00', '/images/alimentos/m_pavo.jpg'),
(23, 'Solomillo de cerdo', NULL, 'Carne', 'Cerdo', 158, '22.00', '0.00', '0.00', '7.00', '1.00', '/images/alimentos/s_cerdo.jpg'),
(24, 'lomo de cerdo', NULL, 'Carne', 'Cerdo', 311, '16.00', '0.00', '0.00', '27.00', '10.00', '/images/alimentos/l_cerdo.jpg'),
(25, 'Chuleta de cerdo', NULL, 'Carne', 'Cerdo', 352, '22.00', '0.00', '0.00', '30.00', '11.00', '/images/alimentos/c_cerdo.jpg'),
(26, 'Carne de cerdo semimagra', NULL, 'Carne', 'Cerdo', 219, '18.00', '0.00', '0.00', '16.00', '0.00', '/images/alimentos/semi_cerdo.jpg'),
(27, 'Chuleta de cordero', NULL, 'Carne', 'Cordero', 250, '16.00', '0.00', '0.00', '21.00', '9.00', '/images/alimentos/c_cordero.jpg'),
(28, 'Carne de ternera 2ª', NULL, 'Carne', 'Vacuno', 212, '20.65', '0.00', '0.00', '14.00', '6.00', '/images/alimentos/ternera_2.jpg'),
(29, 'Solomillo ternera', NULL, 'Carne', 'Vacuno', 103, '20.00', '0.00', '0.00', '3.00', '1.00', '/images/alimentos/s_ternera.jpg'),
(30, 'ternera magra', NULL, 'Carne', 'Vacuno', 131, '21.00', '0.00', '0.00', '5.00', '2.00', '/images/alimentos/magra_ternera.jpg'),
(31, 'ternera magra', NULL, 'Carne', 'Vacuno', 131, '21.00', '0.00', '0.00', '5.00', '2.00', '/images/alimentos/magra_ternera.jpg'),
(32, 'Almeja', NULL, 'Pescado', 'Mariscos y derivados', 77, '15.40', '1.50', '1.50', '1.00', '0.00', '/images/alimentos/almeja.jpg'),
(33, 'Bogavante', NULL, 'Pescado', 'Mariscos y derivados', 83, '15.90', '0.70', '0.70', '2.00', '0.00', '/images/alimentos/bogavante.jpg'),
(34, 'Calamar', NULL, 'Pescado', 'Mariscos y derivados', 80, '16.00', '1.00', '1.00', '1.40', '0.00', '/images/alimentos/calamar.png'),
(35, 'Pulpo', NULL, 'Pescado', 'Mariscos y derivados', 84, '17.00', '2.00', '0.00', '1.00', '0.00', '/images/alimentos/pulpo.jpg'),
(36, 'Sepia', NULL, 'Pescado', 'Mariscos y derivados', 75, '16.10', '0.70', '0.70', '0.90', '0.00', '/images/alimentos/sepia.jpg'),
(37, 'Atún', NULL, 'Pescado', 'Pescado azul', 226, '22.00', '0.00', '0.00', '16.00', '4.00', '/images/alimentos/atun.jpg'),
(38, 'Bonito', NULL, 'Pescado', 'Pescado azul', 153, '25.00', '0.00', '0.00', '6.00', '2.00', '/images/alimentos/bonito.jpg'),
(39, 'Pez Espada', NULL, 'Pescado', 'Pescado azul', 117, '19.00', '0.00', '0.00', '6.00', '4.00', '/images/alimentos/espada.jpg'),
(40, 'Salmón', NULL, 'Pescado', 'Pescado azul', 179, '20.00', '0.00', '0.00', '12.00', '2.00', '/images/alimentos/salmon.jpg'),
(41, 'Sardina', NULL, 'Pescado', 'Pescado azul', 157, '18.00', '0.00', '0.00', '9.40', '2.50', '/images/alimentos/sardina.jpg'),
(42, 'Bacalao fresco', NULL, 'Pescado', 'Pescado blanco', 80, '18.00', '0.00', '0.00', '1.00', '0.00', '/images/alimentos/bacalao.jpg'),
(43, 'Dorada', NULL, 'Pescado', 'Pescado blanco', 230, '18.00', '1.00', '0.00', '17.00', '3.00', '/images/alimentos/dorada.jpg'),
(44, 'Lenguado', NULL, 'Pescado', 'Pescado blanco', 84, '18.00', '0.00', '0.00', '1.00', '0.00', '/images/alimentos/lenguado.jpg'),
(45, 'Merluza', NULL, 'Pescado', 'Pescado blanco', 81, '18.00', '0.00', '0.00', '1.00', '0.00', '/images/alimentos/merluza.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comidas`
--

CREATE TABLE `comidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comidas`
--

INSERT INTO `comidas` (`id`, `nombre`) VALUES
(1, 'Desayuno'),
(2, 'Almuerzo'),
(3, 'Merienda'),
(4, 'Cena'),
(5, 'Comida 1'),
(6, 'Comida 2'),
(7, 'Comida 3'),
(8, 'Comida 4'),
(9, 'Comida 5'),
(10, 'Comida 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `estatura` smallint(3) NOT NULL,
  `peso` decimal(4,1) NOT NULL,
  `calorias` int(5) NOT NULL,
  `proteinas` decimal(5,2) NOT NULL,
  `hidratos` decimal(5,2) NOT NULL,
  `grasas` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `id_usr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas_rel_alimentos`
--

CREATE TABLE `dietas_rel_alimentos` (
  `id` int(11) NOT NULL,
  `id_diet` int(11) NOT NULL,
  `id_alim` int(11) NOT NULL,
  `id_comida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'editor'),
(3, 'usuario_comun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `password`, `id_nivel`) VALUES
(1, 'dgomez', 'admin10', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comidas`
--
ALTER TABLE `comidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usr` (`id_usr`);

--
-- Indices de la tabla `dietas_rel_alimentos`
--
ALTER TABLE `dietas_rel_alimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_diet` (`id_diet`),
  ADD KEY `id_alim` (`id_alim`),
  ADD KEY `id_comida` (`id_comida`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dietas`
--
ALTER TABLE `dietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dietas_rel_alimentos`
--
ALTER TABLE `dietas_rel_alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD CONSTRAINT `datos_usuarios_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD CONSTRAINT `dietas_ibfk_1` FOREIGN KEY (`id_usr`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `dietas_rel_alimentos`
--
ALTER TABLE `dietas_rel_alimentos`
  ADD CONSTRAINT `dietas_rel_alimentos_ibfk_1` FOREIGN KEY (`id_diet`) REFERENCES `dietas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dietas_rel_alimentos_ibfk_2` FOREIGN KEY (`id_alim`) REFERENCES `alimentos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dietas_rel_alimentos_ibfk_3` FOREIGN KEY (`id_comida`) REFERENCES `comidas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
