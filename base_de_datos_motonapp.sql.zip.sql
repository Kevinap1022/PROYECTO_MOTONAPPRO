-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 02-04-2024 a las 11:50:32
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_de_datos_motonapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE `contactenos` (
  `id` int(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Asunto` varchar(230) NOT NULL,
  `Mensaje` varchar(239) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`id`, `Correo`, `Nombre`, `Asunto`, `Mensaje`) VALUES
(1, 'jaimerodriguez12@gmail.com', 'Jaime Rodriguez', 'Mantenimiento de moto ', 'Necesito saber cuanto pude valer el plan mensual de la aplicacion ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_moto`
--

CREATE TABLE `ingreso_moto` (
  `id` int(11) NOT NULL,
  `Nombre de usuario` varchar(200) NOT NULL,
  `Cedula` int(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Fecha de Ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ingreso_moto`
--

INSERT INTO `ingreso_moto` (`id`, `Nombre de usuario`, `Cedula`, `Direccion`, `Fecha de Ingreso`) VALUES
(1, 'Jairo Jimenez', 2147483647, 'Cr 43 #43 sur ', '2024-03-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento_moto`
--

CREATE TABLE `mantenimiento_moto` (
  `id` int(11) NOT NULL,
  `Nombre_usuario` varchar(100) NOT NULL,
  `tipo_de_mantenimiento` varchar(200) NOT NULL,
  `kilometraje` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `Fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mantenimiento_moto`
--

INSERT INTO `mantenimiento_moto` (`id`, `Nombre_usuario`, `tipo_de_mantenimiento`, `kilometraje`, `descripcion`, `Fecha_salida`) VALUES
(1, 'Kevin_ap01', 'frenos', 'Kevin_ap01', 'Yamaha 2022', '2024-03-01'),
(2, 'Kevin_ap01', 'frenos', 'Kevin_ap01', 'Yamaha 2022', '2024-03-01'),
(3, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo ', '2024-04-10'),
(4, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo', '2024-04-10'),
(5, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo', '2024-04-10'),
(6, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo', '2024-04-10'),
(7, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo', '2024-04-10'),
(8, 'KevinDavid', 'Cadena', 'KevinDavid', 'MI moto es una yamaha y necesito reparar la  cadena que ha estado fallando hace tiempo', '2024-04-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motos`
--

CREATE TABLE `motos` (
  `id` int(11) NOT NULL,
  `marca_moto` varchar(100) NOT NULL,
  `modelo_moto` varchar(100) NOT NULL,
  `cilindraje_moto` varchar(100) NOT NULL,
  `fecha_fabricacion` date NOT NULL,
  `tecnomecanica` varchar(100) NOT NULL,
  `sincronizacion` varchar(100) NOT NULL,
  `fecha_tecnomecanica` date NOT NULL,
  `Placa` varchar(100) NOT NULL,
  `Numero_poliza` varchar(200) NOT NULL,
  `fecha_soat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `motos`
--

INSERT INTO `motos` (`id`, `marca_moto`, `modelo_moto`, `cilindraje_moto`, `fecha_fabricacion`, `tecnomecanica`, `sincronizacion`, `fecha_tecnomecanica`, `Placa`, `Numero_poliza`, `fecha_soat`) VALUES
(1, 'Ferrari', 'zafiro', '300cc', '2024-03-07', 'Electrico ', 'cadena', '2024-03-08', '333 CCC', '35345435', '2024-03-07'),
(2, 'Ferrari', 'zafiro', '300cc', '2024-03-14', 'Electrico ', 'cadena', '2024-03-29', '333 CCC', '35345435', '2023-07-07'),
(3, 'Ferrari', 'zafiro', '300cc', '2024-03-14', 'Electrico ', 'cadena', '2024-03-29', '333 CCC', '35345435', '2023-07-07'),
(4, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00'),
(5, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11'),
(6, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11'),
(7, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11'),
(8, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11'),
(9, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11'),
(10, 'yamaha', 'discovery', '343cc', '2024-04-18', 'gasolina', 'automatico', '2019-06-12', '213-EWQ', '2144364562', '2024-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombres` varchar(60) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Nombre_usuario` varchar(100) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Celular` int(80) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombres`, `Apellidos`, `Nombre_usuario`, `Correo`, `Celular`, `Direccion`, `Contraseña`) VALUES
(2, 'Olga Lucia', 'Perez Vilvoa', 'Olgapere0101', 'olgaperezp02@gmail.com', 2147483647, 'cr 92 #34sur ', '1234'),
(3, 'Jhon Jairo', 'Arias Guzman ', 'Jairo_arias21', 'Jairo_arias21@gmail.com', 2147483647, 'Cr 32 #34 sur ', '1234'),
(4, 'Hellen Joana', 'Perez Carrasco', 'Hellen21', 'hellen21@gmail.com', 2147483647, 'cr 92 #34sur ', '1234'),
(11, 'kevin arias ', 'david', 'KevinDavid_ap1022', 'kevindavid@gmail.com', 2147483647, 'cr 92 #34 sur', '1234'),
(12, 'kevin arias ', 'david', 'KevinDavid_ap1022', 'kevindavid@gmail.com', 2147483647, 'cr 92 #34 sur', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso_moto`
--
ALTER TABLE `ingreso_moto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimiento_moto`
--
ALTER TABLE `mantenimiento_moto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motos`
--
ALTER TABLE `motos`
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
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ingreso_moto`
--
ALTER TABLE `ingreso_moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mantenimiento_moto`
--
ALTER TABLE `mantenimiento_moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `motos`
--
ALTER TABLE `motos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
