-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 11:26:15
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
-- Base de datos: `restaurante_js`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Acompañante'),
(2, 'Bebida'),
(3, 'Platillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `tipo_platillo` varchar(120) DEFAULT NULL,
  `imagen` varchar(40) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id`, `nombre`, `tipo_platillo`, `imagen`, `descripcion`) VALUES
(1, 'Asado rojo', 'Guiso', '6764a74ccf2b4b5b74e333016c13388a', 'Carne tierna, cebollas, tomates y especias cocidas a fuego lento, creando una salsa rica y sabrosa. Tiernas verduras aña'),
(2, 'Asado verde', 'Guiso', '6497c66bcc464e26871c046dd5bb86c8', 'Tierna carne de res cocida en una rica salsa verde con chiles y especias, creando un sabor picante y delicioso.'),
(3, 'Chicharrion prensado', 'Guiso', '55c7866df31370ec3299eed6eb63daa1', 'Crujiente chicharrón de cerdo prensado en una textura suave y sazona con especias para un bocado sabroso y auténtico.'),
(4, 'Chicharrion cuerito', 'Guiso', 'de6e3fa0cde8402de4c28e6be0903ada', 'Trozos crujientes de piel de cerdo fritos hasta la perfección, ofreciendo una textura deliciosa y un sabor salado y sabr'),
(5, 'Rajas con carne tocino y queso', 'Guiso', 'cec8c9d7bcb4c19e87d1164bce8fe176', 'Deliciosas tiras de chiles, carne, tocino y queso derretido, creando una explosión de sabores en cada bocado.'),
(6, 'Rajas con crema y elote', 'Guiso', '5332118b8d7690a1b992431802eafab1', 'Tiernas tiras de chiles con granos de elote y crema, fusionando sabores picantes y dulces en una mezcla irresistiblement'),
(7, 'Discada', 'Guiso', '90956ece4adbd9f9ccb8f4ae80dc1537', 'Guiso norteño mexicano con carne de res y cerdo, chorizo, pimientos y especias, cocido al aire libre en un disco, ofreci'),
(8, 'Frijoles', 'Guiso', '9886ffc0d31e4c20a04acc1464630527', 'Legumbres cocidas, generalmente de color negro o rojo, cremosas y llenas de sabor, servidas como acompañamiento en mucha'),
(9, 'Mole rojo', 'Platillo', '3921d02d79df52320817e0ffa9d09925', 'Salsa mexicana espesa y picante, hecha con chiles secos, especias y chocolate, sirviendo como acompañamiento de carnes, '),
(10, 'Mole verde', 'Guiso', '414ffd61380bbf0e9f45cbde4d0cbb7f', 'Deliciosa salsa mexicana de chiles verdes, hierbas, y semillas, cocida con tomatillos y ajo, creando un sabor fresco y p'),
(11, 'Pollo con crema y chipotle', 'Platillo', 'f7d2636d10bab20e9091f0b1cde4eb0b', 'Jugosos trozos de pollo bañados en una cremosa salsa de chipotle, ofreciendo una mezcla de sabores ahumados, picantes y '),
(12, 'Papas con crema', 'Platillo', '2c3826ed507820424386de70c392234c', 'Papas tiernas cocidas en una suave y cremosa salsa, sazonadas con especias, creando un plato reconfortante y delicioso.'),
(13, 'Papas con desehebrada', 'Platillo', '6e34c595e6c2a883737e6169d861036c', 'Papas tiernas acompañadas de carne deshebrada, sazonadas con especias, creando un plato sustancioso y lleno de sabor.'),
(14, 'Pechuga de pollo gravy', 'Platillo', '139a8aa12336d34edcd142d59a5a73f7', 'Jugosa pechuga de pollo con salsa gravy, una mezcla de sabores ricos y cremosos, perfecta para una experiencia reconfort'),
(15, 'espagueti', 'Acompañante', '40e01f5c023c7e74c9c372a8126edd97', 'Pasta larga y delgada, generalmente servida con una variedad de salsas como tomate, boloñesa o alfredo, creando un clási'),
(16, 'Arroz blanco', 'Acompañante', '6d4629dacbed2e4f5a344282ec2f4f76', 'Grano de arroz cocido al vapor, ligero y esponjoso, esencial en muchas cocinas del mundo, ideal como acompañamiento para'),
(17, 'Tortillas', 'Acompañante', '2a41a781d8ae8f0f7a1969c766276b08', 'Delgadas y flexibles, hechas de masa de maíz o harina de trigo'),
(18, 'Agua de sabor', 'Bebida', 'cbfa4d460af235ee7b97bb862668904e', 'Refrescante bebida'),
(23, 'Jugo', 'Bebida', '74a42a140c116c2ed893a8b9cf129828', 'zzzzz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT NULL,
  `token` varchar(13) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `confirmado`, `token`, `admin`) VALUES
(10, ' Jesus', 'Campos', 'bisharpx4@gmail.com', '$2y$10$LN0OneEXRhZ72e0MzvcXuOm2WtTVlkhUb4PqtMV9Ask4PftMYjmTG', 1, '6540cca51eb9a', 1),
(11, ' Jose', 'Fernandez', 'prueba@gmail.com', '$2y$10$zoWSdRW18KheFGUbiZ48wuTmDLbP5N28VrHlr4GeYvCjFuiZ3d1T6', 1, '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
