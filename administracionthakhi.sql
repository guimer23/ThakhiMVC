-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2020 a las 04:56:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `administracionthakhi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admclitcliente`
--

CREATE TABLE `admclitcliente` (
  `CLIdni` varchar(8) NOT NULL,
  `CLInombre` varchar(50) NOT NULL,
  `CLIapellido` varchar(50) NOT NULL,
  `CLIcelular` varchar(9) NOT NULL,
  `CLIemail` varchar(50) DEFAULT NULL,
  `CLIclave` varchar(15) DEFAULT NULL,
  `CLIlatitud` double DEFAULT NULL,
  `CLIlongitud` double DEFAULT NULL,
  `CLIfoto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admclitcliente`
--

INSERT INTO `admclitcliente` (`CLIdni`, `CLInombre`, `CLIapellido`, `CLIcelular`, `CLIemail`, `CLIclave`, `CLIlatitud`, `CLIlongitud`, `CLIfoto`) VALUES
('111', 'pepe', 'epep', '977807776', 'pepe@gmai..com', NULL, NULL, NULL, NULL),
('2323', 'sds', 'df', '434', 'sds@gmai.com', NULL, NULL, NULL, NULL),
('45713875', 'juan carlos', 'salazar', '34343', 'jcarlossenati@gmil.com', '123', 0, 0, '12'),
('5955', 'melisa', 'loqis', 'melsa', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admcontconductor`
--

CREATE TABLE `admcontconductor` (
  `CONdni` varchar(8) NOT NULL,
  `CONnombre` varchar(50) NOT NULL,
  `CONapellido` varchar(50) NOT NULL,
  `CONlicencia` varchar(15) NOT NULL,
  `CONvigencialicencia` varchar(15) NOT NULL,
  `CONcelular` varchar(9) NOT NULL,
  `CONemail` varchar(50) NOT NULL,
  `CONclave` varchar(15) NOT NULL,
  `CONdireccion` varchar(50) NOT NULL,
  `CONestado` char(1) NOT NULL,
  `CONfoto` varchar(100) NOT NULL,
  `ruta_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admcontconductor`
--

INSERT INTO `admcontconductor` (`CONdni`, `CONnombre`, `CONapellido`, `CONlicencia`, `CONvigencialicencia`, `CONcelular`, `CONemail`, `CONclave`, `CONdireccion`, `CONestado`, `CONfoto`, `ruta_foto`) VALUES
('333333', 'sofia', 'lupaca', '232323', '2020-06-04', '121212', 'sofia@hotmail.com', '12121212', 'lo sauces 2 etapa', 'A', '', 'public/images/WIN_20200619_15_46_44_Pro.jpg'),
('33443323', 'pepepep', 'epeppe', '32332', '2020-06-12', '232323233', 'jc_nestas@hotmail.com', '12121', 'lo sauces 2 etapa', 'A', '', ''),
('43434343', 'kiara', 'coloma', '23232323', '2020-06-17', '23232', 'kiara@hotmail.com', '232323', 'klejos', 'I', '', 'public/images/img1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admenttentrega`
--

CREATE TABLE `admenttentrega` (
  `ENTid` int(11) NOT NULL,
  `ENTdescripcion` varchar(255) NOT NULL,
  `ENTtipo` varchar(50) NOT NULL,
  `VECid` int(11) NOT NULL,
  `ENTfechahora` date NOT NULL,
  `CLIdni` varchar(8) NOT NULL,
  `ENTprecio` double NOT NULL,
  `ENTestado` char(1) NOT NULL,
  `ENTfoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admenttentrega`
--

INSERT INTO `admenttentrega` (`ENTid`, `ENTdescripcion`, `ENTtipo`, `VECid`, `ENTfechahora`, `CLIdni`, `ENTprecio`, `ENTestado`, `ENTfoto`) VALUES
(3, 'entregas  papas', 'Documentos', 4, '2020-06-23', '2323 ', 12, 'P', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admimgtimagen`
--

CREATE TABLE `admimgtimagen` (
  `IMGid` int(11) NOT NULL,
  `IMGnombre` varchar(500) DEFAULT NULL,
  `IMGruta` varchar(500) DEFAULT NULL,
  `IMGfechaSubida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admusutusuario`
--

CREATE TABLE `admusutusuario` (
  `USUid` int(11) NOT NULL,
  `USUnombre` varchar(50) NOT NULL,
  `USUapellidos` varchar(50) NOT NULL,
  `USUemail` varchar(50) NOT NULL,
  `USUusuario` varchar(50) NOT NULL,
  `USUpassword` varchar(50) NOT NULL,
  `USUestado` char(1) NOT NULL,
  `USUfoto` varchar(100) NOT NULL,
  `ruta_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admusutusuario`
--

INSERT INTO `admusutusuario` (`USUid`, `USUnombre`, `USUapellidos`, `USUemail`, `USUusuario`, `USUpassword`, `USUestado`, `USUfoto`, `ruta_foto`) VALUES
(5, 'sandra', 'Toreees', 'sandriaq@mgailc.om', 'sdads', '2323', 'A', '', 'public/images/user.png'),
(6, 'kiara', 'colma', 'kiara@gmail.com', 'gordiss', '22222', 'I', '', 'public/images/30c38c1282214d9bd6285134ab913ec4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admvectvehiculo_conductor`
--

CREATE TABLE `admvectvehiculo_conductor` (
  `VECid` int(11) NOT NULL,
  `CONdni` varchar(8) NOT NULL,
  `VEHid` int(11) NOT NULL,
  `VECestado` char(1) NOT NULL,
  `VEClatitud` double NOT NULL,
  `VEClongitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admvectvehiculo_conductor`
--

INSERT INTO `admvectvehiculo_conductor` (`VECid`, `CONdni`, `VEHid`, `VECestado`, `VEClatitud`, `VEClongitud`) VALUES
(4, '43434343', 4, 'A', -18.0330753, -70.2412675),
(5, '333333 ', 6, 'A', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admvehtvehiculo`
--

CREATE TABLE `admvehtvehiculo` (
  `VEHid` int(11) NOT NULL,
  `VEHplaca` varchar(10) NOT NULL,
  `VEHmarca` varchar(50) NOT NULL,
  `VEHmodelo` varchar(50) NOT NULL,
  `VEHcolor` varchar(20) NOT NULL,
  `VEHanio_fabricacion` date NOT NULL,
  `VEHsoat` varchar(20) NOT NULL,
  `VEHestado` char(1) NOT NULL,
  `VEHfoto` varchar(100) NOT NULL,
  `ruta_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admvehtvehiculo`
--

INSERT INTO `admvehtvehiculo` (`VEHid`, `VEHplaca`, `VEHmarca`, `VEHmodelo`, `VEHcolor`, `VEHanio_fabricacion`, `VEHsoat`, `VEHestado`, `VEHfoto`, `ruta_foto`) VALUES
(3, '32', '23', 'modelo locosa', 'fd', '2020-06-17', '2020-06-25', 'A', '', ''),
(4, '321', 'sds', '232', 'ded', '2020-06-05', '2020-06-24', 'A', '', 'public/images/iconofoto.png'),
(5, '321', 'caldina', '1111111', 'ded', '2020-06-05', '2020-06-26', 'A', '', 'public/images/'),
(6, '54545', 'toyota', 'clasico', 'verde', '2019-07-10', '2020-06-25', 'A', '', 'public/images/375837_733511.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `profesion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `profesion_id`) VALUES
(4, 'juan carlos', 'torres', '2012-12-12', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_sueldo`
--

CREATE TABLE `empleado_sueldo` (
  `id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` varchar(100) NOT NULL,
  `nombre_estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
('A', 'Activo'),
('I', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `sueldo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `profesion`
--

INSERT INTO `profesion` (`id`, `nombre`, `sueldo`) VALUES
(1, 'Publicista', '5000.00'),
(2, 'Ingeniero', '5000.00'),
(4, 'Médico', '7000.00'),
(5, 'Abogado', '3500.00'),
(6, 'Químico', '8000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admclitcliente`
--
ALTER TABLE `admclitcliente`
  ADD PRIMARY KEY (`CLIdni`);

--
-- Indices de la tabla `admcontconductor`
--
ALTER TABLE `admcontconductor`
  ADD PRIMARY KEY (`CONdni`);

--
-- Indices de la tabla `admenttentrega`
--
ALTER TABLE `admenttentrega`
  ADD PRIMARY KEY (`ENTid`),
  ADD KEY `VECid` (`VECid`),
  ADD KEY `CLIdni` (`CLIdni`);

--
-- Indices de la tabla `admimgtimagen`
--
ALTER TABLE `admimgtimagen`
  ADD PRIMARY KEY (`IMGid`);

--
-- Indices de la tabla `admusutusuario`
--
ALTER TABLE `admusutusuario`
  ADD PRIMARY KEY (`USUid`);

--
-- Indices de la tabla `admvectvehiculo_conductor`
--
ALTER TABLE `admvectvehiculo_conductor`
  ADD PRIMARY KEY (`VECid`),
  ADD KEY `CONdni` (`CONdni`),
  ADD KEY `VEHid` (`VEHid`);

--
-- Indices de la tabla `admvehtvehiculo`
--
ALTER TABLE `admvehtvehiculo`
  ADD PRIMARY KEY (`VEHid`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_profesion` (`profesion_id`);

--
-- Indices de la tabla `empleado_sueldo`
--
ALTER TABLE `empleado_sueldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleado_sueldo` (`empleado_id`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_rol` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admenttentrega`
--
ALTER TABLE `admenttentrega`
  MODIFY `ENTid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `admimgtimagen`
--
ALTER TABLE `admimgtimagen`
  MODIFY `IMGid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `admusutusuario`
--
ALTER TABLE `admusutusuario`
  MODIFY `USUid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `admvectvehiculo_conductor`
--
ALTER TABLE `admvectvehiculo_conductor`
  MODIFY `VECid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `admvehtvehiculo`
--
ALTER TABLE `admvehtvehiculo`
  MODIFY `VEHid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado_sueldo`
--
ALTER TABLE `empleado_sueldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesion`
--
ALTER TABLE `profesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admenttentrega`
--
ALTER TABLE `admenttentrega`
  ADD CONSTRAINT `admenttentrega_ibfk_1` FOREIGN KEY (`VECid`) REFERENCES `admvectvehiculo_conductor` (`VECid`),
  ADD CONSTRAINT `admenttentrega_ibfk_2` FOREIGN KEY (`CLIdni`) REFERENCES `admclitcliente` (`CLIdni`);

--
-- Filtros para la tabla `admvectvehiculo_conductor`
--
ALTER TABLE `admvectvehiculo_conductor`
  ADD CONSTRAINT `admvectvehiculo_conductor_ibfk_1` FOREIGN KEY (`CONdni`) REFERENCES `admcontconductor` (`CONdni`),
  ADD CONSTRAINT `admvectvehiculo_conductor_ibfk_2` FOREIGN KEY (`VEHid`) REFERENCES `admvehtvehiculo` (`VEHid`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_profesion` FOREIGN KEY (`profesion_id`) REFERENCES `profesion` (`id`);

--
-- Filtros para la tabla `empleado_sueldo`
--
ALTER TABLE `empleado_sueldo`
  ADD CONSTRAINT `empleado_sueldo` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
