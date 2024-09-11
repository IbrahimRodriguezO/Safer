-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2022 a las 03:49:03
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
-- Base de datos: `safer_company_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nombre`, `paterno`, `materno`, `fecha_nac`, `correo`, `telefono`, `genero`, `pais`, `rol`, `usuario`, `clave`) VALUES
(1, 'Ibrahim', 'Rodriguez', 'Olaya', '2003-07-15', 'rodriguez.o.ibra@gmail.com', '2211342967', 'Masculino', '  Mexico', 'Gerente', 'SCIbrahim', 'SC71503'),
(2, 'Edwin Jarett', 'Reyes', 'Lopez', '0000-00-00', 'edwin@gmail.com', '2222490407', 'Masculino', '     Mexico', 'Programador', 'SCEdwinJarett', 'SC12345'),
(3, '-', '-', '-', '0000-00-00', '-', '-', '-', ' -', '-', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `marca`, `modelo`, `descripcion`, `precio`, `activo`) VALUES
(1, 'HONDA ', 'CIVIC 3', 'Tanque de combustible: 47 L <br>\r\nMarca: Honda <br>\r\nRendimiento de combustible: combinado 20-21 km/l (ciudad 16-17, ruta 24-26) <br>\r\nTransmisión: CVT <br>\r\nMotor: 1.5 L 4 motor en lí­nea, 2.0 L 4 motor en lí­nea <br>\r\n\r\n', '500000.00', 1),
(2, 'HONDA ', 'ACCORD', 'Tanque de combustible: 56 L <br>\r\nRendimiento de combustible: combinado 15-20 km/l (ciudad 12-17, ruta 20-24) <br>\r\nMarca: Honda <br>\r\nPotencia: 188 a 247 CV <br>\r\nTransmisión: automática de 10 velocidades, CVT <br>', '500000.00', 1),
(3, 'HONDA', 'CITY', 'Rendimiento de combustible: combinado 19-21 km/l (ciudad 16-18, ruta 22-24) <br>\r\nTanque de combustible: 40 L <br>\r\nDimensiones: 4,560 mm L x 1,477 mm A <br>\r\nMarca: Honda <br>\r\nPotencia: 119 CV <br>', '500000.00', 1),
(4, 'HONDA', 'HR-V', 'Rendimiento de combustible: combinado 16-18 km/l (ciudad 14-15, ruta 20) <br>\r\nTanque de combustible: 50 L <br>\r\nDimensiones: 4,348-4,359 mm L x 1,605 mm A <br>\r\nMarca: Honda <br>\r\nPotencia: 141 CV <br>', '500000.00', 1),
(5, 'HONDA', 'CR-V', 'Rendimiento de combustible: combinado 18 km/l (ciudad 15, ruta 21) <br>\r\nMarca: Honda <br>\r\nTanque de combustible: 57 L <br>\r\nDimensiones: 4,626 mm L x 1,679 mm A <br>\r\nTransmisión: CVT <br>', '500000.00', 1),
(6, 'MAZDA', '3', 'Rendimiento de combustible: combinado 14-17 km/l (ciudad 11-15, ruta 18-20)<br>\r\nDimensiones: 4,662 mm L x 1,797 mm A x 1,445 mm A<br>\r\nTanque de combustible: 51 L<br>\r\nPotencia: 153 a 227 CV<br>\r\nMotor: 2.0 L 4 motor en línea, 2.5 L 4 motor en línea<br>', '500000.00', 1),
(7, 'MAZDA', 'MX-5', 'Potencia: 181 CV<br>\r\nRendimiento de combustible: combinado 15-16 km/l (ciudad 13-14, ruta 20-21)<br>\r\nMotor: 2.0 L 4 motor en línea<br>\r\nDimensiones: 3,915 mm L x 1,918 mm A x 1,230-1,235 mm A<br>\r\nTanque de combustible: 45 L<br>', '500000.00', 1),
(8, 'MAZDA', 'CX-5', 'Rendimiento de combustible: combinado 14-15 km/l (ciudad 12-13, ruta 17-18)<br>\r\nTanque de combustible: 56 L<br>\r\nMarca: Mazda<br>\r\nDimensiones: 4,550 mm L x 1,842 mm A x 1,679-1,684 mm A<br>\r\nPotencia: 188 a 228 CV<br>', '500000.00', 1),
(9, 'MAZDA', 'CX-30', 'Rendimiento de combustible: combinado 14-18 km/l (ciudad 12-16, ruta 19-21)<br>\r\nTanque de combustible: 51 L<br>\r\nPotencia: 153 a 227 CV<br>\r\nMarca: Mazda<br>\r\nMotor: 2.0 L 4 motor en línea, 2.5 L 4 motor en línea<br>\r\n\r\n', '500000.00', 1),
(10, 'MAZDA', '3 SEDÁN', 'La gama del Mazda 3 Sedán 2022 en México queda compuesta por cuatro niveles de<br> equipamiento: i, i Sport, i Grand Touring y Signature. Desde la más accesible incluye faros <br>de LED, encendido por botón, pantalla de 8\" con Android Auto y Apple CarPlay, <br>siete bolsas de aire, sensor de reversa y, como novedad en la versión base,<br> cámara de reversa.', '500000.00', 0),
(11, 'AUDI', 'A3', 'Tanque de combustible: 47 L<br>\r\nMarca: Honda<br>\r\nRendimiento de combustible: combinado 16-17 km/l (ciudad 14-15, ruta 21)<br>\r\nTransmisión: automática de 7 & 8 velocidades<br>\r\nTanque de combustible: 50 L<br>\r\nDimensiones: 4,495 mm L x 1,425 mm A<br>\r\nMotor: 1.4 L 4 motor en línea, 2.0 L 4 motor en línea<br>\r\n\r\n', '500000.00', 1),
(12, 'AUDI', 'A6', 'Transmisión: automática de 7 velocidades<br>\r\nRendimiento de combustible: combinado 13-17 km/l (ciudad 11-14, ruta 17-21)<br>\r\nPotencia: 190 a 340 CV<br>\r\nTanque de combustible: 63 a 73 L<br>\r\nMotor: 2.0 L 4 motor en línea, 3.0 L V6<br>', '500000.00', 1),
(13, 'AUDI', 'Q5', 'Rendimiento de combustible: combinado 13 km/l (ciudad 11, ruta 16)<br>\r\nMarca: Audi<br>\r\nTanque de combustible: 70 L<br>\r\nTransmisión: automática de 7 velocidades<br>\r\nDimensiones: 4,682 mm L x 1,893 mm A x 1,663 mm A<br>', '500000.00', 1),
(14, 'AUDI', 'Q7', 'Rendimiento de combustible: combinado 10 km/l (ciudad 9, ruta 12)<br>\r\nTanque de combustible: 85 L<br>\r\nMotor: 3.0 L V6<br>\r\nTransmisión: automática de 8 velocidades<br>\r\nPasajeros: 5, 7<br>', '500000.00', 1),
(15, 'AUDI', 'R8 SPYDER', 'Sentir sin límites. Sorprenderse sin límites. Disfrutar sin límites. Al <br>conducir el Audi R8 Spyder V10 performance quattro de 610 caballos de fuerza notarás <br>que tu mundo cambia por completo y que todo se mueve de forma distinta. <br>Porque ahora tú tienes el control.<br>\r\nVelocidad máxima: 328 km/h<br>\r\nPotencia: 610 hp<br>', '500000.00', 1),
(16, 'TESLA', 'MODELO 3', 'El Model 3 Performance tiene su máximo foco en la mejora de las prestaciones con <br>una potencia final de salida de 480 caballos y una autonomía de 576 kilómetros.<br> \r\nAlcanza una velocidad punta de 261 km/h y aceleración de 0 a 100 Km/h en 3,4 segundos.<br>\r\nBatería. Autonomía Mayor.<br>\r\nAutonomía. 576 km (est. EPA)<br>\r\nManejo. Motor dual con tracción en todas las ruedas.<br>\r\nAsientos. 5 adultos.<br>\r\nRines. 18\" o 19\"<br>\r\n', '500000.00', 1),
(17, 'TESLA', 'MODELO S', 'Monta dos motores eléctricos.<br>\r\nEl delantero con una potencia de 262 caballos y el posterior con 387 caballos. <br>\r\nLa potencia total del conjunto es de 421 caballos. <br>\r\nEstá asociado a una batería de iones de litio de 100 kWh de capacidad, <br>y muestra una autonomía eléctrica homologada en ciclo WLTP de 610 kilómetros.<br> \r\n', '500000.00', 1),
(18, 'TESLA', 'MODELO Y', 'Presenta un motor trasero que desarrolla un máximo de 271 caballos de potencia. <br>\r\nPresenta una autonomía eléctrica estimada de 430 caballos con una velocidad punta <br>de 225 kilómetros por hora y 5,6 segundos en la aceleración de 0 a 100 kilómetros por hora. <br>\r\nLucen dos motores, uno delantero de 200 caballos y otro trasero <br>con 256 y 287 caballos respectivamente.\r\n\r\n', '500000.00', 1),
(19, 'TESLA', 'MODELO X', 'Cuenta con dos motores eléctricos, uno delantero con 262 caballos y otro posterior con <br>387 caballos. <br>\r\nLa potencia total del conjunto es de 421 caballos, y oficializa una autonomía eléctrica en <br>ciclo WLTP de 507 kilómetros. <br>\r\nLa potencia máxima del conjunto es de 610 caballos, con una autonomía eléctrica <br>homologada en ciclo WLTP de 487 kilómetros. <br>\r\nEn esta unidad se premia las prestaciones, con un 0 a 100 Km/h en 2,8 segundos.', '500000.00', 1),
(20, 'TESLA', 'ROADSTER', 'El Roadster será capaz de acelerar de 0 a 100 Km/h en 2,1 <br>segundos y mostrar una velocidad superior a los 400 kilómetros <br>por hora con un tiempo en el cuarto de milla de 8,8 segundos.<br>\r\nAceleración de 0 a 100 km/h. 2.1 seg.<br>\r\nAceleración 1/4 de milla. 8.8 seg.<br>\r\nVelocidad máxima. Más de 400 km/h.<br>\r\nPar de torsión en las ruedas. 10,000 Nm.<br>\r\nAutonomía. 1000 kilómetros.<br>\r\nManejo. Tracción en todas las ruedas.<br>\r\n', '500000.00', 1),
(21, 'LAMBORGHINI', 'GALLARDO', 'Motor V10 a 90° atmosférico de 4961 a 5204 cm³ (5 a 5,2 litros)<br>\r\nPotencia 500 a 570 CV (493 a 562 HP) (368 a 419 kW)<br>\r\nPar motor 510 a 540 N·m (376 a 398 lb·pie)<br>\r\nMotor V10 de 5,2 litros de cilindrada con una potencia máxima de 560 CV. <br>\r\nVelocidad de 325 CV.', '500000.00', 1),
(22, 'LAMBORGHINI', 'MURCIELAGO', 'Tiene un motor V12 a 60º de 6192 cm³ (6,2 L; 377,9 plg³)<br>\r\nPotencia máxima del motor de 580 CV (572 HP; 427 kW)<br>\r\nVelocidad máxima de 333 km/h (207 mph) <br>\r\nAceleración de 0 a 100 km/h (62 mph) en 3,8 segundos.', '500000.00', 1),
(23, 'LAMBORGHINI', 'HURACAN', 'TIPOV10, 90°, MPI (Multi Point Injection) + IDS (Iniezione Diretta <br>Stratificata, inyección directa estratificada)<br>\r\nCILINDRADA5.204 cm3 (317.57 cu in)<br>\r\nCALIBRE x CARRERA84,5 x 92,8 mm (3.33 x 3.65 in)<br>\r\nRELACIÓN DE COMPRESIÓN12,7:1.<br>\r\nPOTENCIA MÁXIMA610 CV (449 kW) @ 8.250 rpm.<br>\r\nPAR MÁXIMO560 Nm (413 lb.-ft.', '500000.00', 1),
(24, 'LAMBORGHINI', 'VENENO ROADSTER', 'Equipado con un motor V12 aspirado de 6,5 litros<br> \r\nVelocidad máxima de 355 km/h<br>\r\nRepresenta la vanguardia del diseño inspirado en la aeronáutica', '500000.00', 1),
(25, 'LAMBORGHINI', 'URUS', 'Vehículo utilitario supe deportivo. <br>\r\nImpulsado por un motor V8 biturbo de 4,0 litros que genera <br>650 CV de potencia y un par de 850 Nm<br>\r\nEl Urus acelera de 0 a 100 km/h en 3,6 segundos <br>\r\nVelocidad máxima de 305 km/h. <br>', '500000.00', 1),
(26, 'FERRARI', 'ENZO', 'Motor central V12 5.998 cm3<br>\r\n48 válvulas VVT (DOHC)<br>\r\nPotencia 650 hp a 7.800 rpm<br>\r\nTorque máximo: 383 libras pie a 3.000 rpm<br>\r\nLímite: 8.000 rpm<br>\r\nCaja manual de 6 marchas<br>\r\nEmbrague automático <br>\r\nTracción trasera de 0 a 100 km/h en 3,5 s\r\n\r\n', '500000.00', 1),
(27, 'FERRARI', '448', 'Motor de 670 CV colocado en posición central posterior. <br>\r\nEl motor es de ocho cilindros en V de 3.9 litros. <br>\r\nPotencia máxima a 8000 rpm y con un par máximo de 760 Nm. <br>\r\nEl consumo medio homologado es de 11,2 l/100 km. <br>\r\nLa caja de cambios es automática de doble embrague y siete velocidades. <br>\r\n', '500000.00', 1),
(28, 'FERRARI', 'F430', 'Rendimiento de combustible: combinado 16-18 km/l <br>\r\nTanque de combustible: 50 L<br>\r\nDimensiones: 4,348-4,359 mm L x 1,605 mm A<br>\r\nPotencia: 141 CV<br>', '500000.00', 1),
(29, 'FERRARI', '812 SUPERFAST', 'Motor V8 a 90º<br>\r\nDispone de un motor fabricado en aluminio de 12 cilindros <br>en uve con 6.496 centímetros cúbicos. <br>\r\n800 caballos de potencia a 8.500 revoluciones <br>\r\nPar motor máximo de 718 Nm a 7.000 revoluciones. <br>\r\n', '500000.00', 1),
(30, 'FERRARI', '296 GTB', 'El bloque principal es un motor de seis cilindros en uve con<br> 2.992 centímetros cúbicos y sistema turboalimentado. <br>\r\nGenera 663 caballos de potencia a 8.000 revoluciones y 740 Nm <br>de par motor a 6.250 vueltas. <br>\r\nSe acompaña de un motor eléctrico anexo que suma 166 caballos <br>y 315 Nm de par motor. <br>\r\nToda la energía se destina al eje trasero mediante la gestión <br>de un cambio automático de doble embrague y ocho velocidades.', '500000.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `paterno` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `materno` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `paterno`, `materno`, `correo`, `telefono`, `genero`, `ocupacion`, `pais`) VALUES
(1, 'Ibrahim', 'Rodriguez', 'Olaya', 'rodriguez.o.ibra@gmail.com', '2278341927', 'Masculino', 'Estudiante', '  Mexico'),
(2, 'Edwin Jaret', 'Reyes', 'Lopez', 'edwin@gmail.com', '2276142973', 'Masculino', 'Estudiante', 'Mexico'),
(3, 'Mario', 'Rodriguez', 'Monterrosas', 'mario@gmail.com', '2222490407', 'Masculino', 'Estudiante', 'Mexico'),
(4, 'Miguel Ángel', 'Rivera ', 'Polo', 'miguel@gmail.com', '2278341927', 'Masculino', 'Estudiante', 'Mexico'),
(5, 'Rene', 'Sanchez', 'Bautista', 'rene@gmail.com', '2234715267', 'Masculino', 'Estudiante', 'México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `total` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_transaccion`, `fecha`, `status`, `correo`, `id_cliente`, `total`) VALUES
(1, '123456', '0000-00-00 00:00:00', 'COMPLETADO', 'edwin@gmail.com', 'Edwin Jarett', '1000000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `id_cliente`) VALUES
(1, 'IbrahimRO', '12345', 1),
(2, 'jarett', '12345', 2),
(3, 'mario', '12345', 3),
(4, 'MikeJarocho', '12345', 4),
(5, 'rene', '12345', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
