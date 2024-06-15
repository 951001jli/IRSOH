-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2024 a las 03:19:05
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
-- Base de datos: `helthy_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_calificacion`
--

CREATE TABLE `tb_calificacion` (
  `ID_CALIFICACION` int(11) NOT NULL COMMENT 'Identificador del',
  `CALIFICACION` int(11) DEFAULT NULL COMMENT 'Número de la calificación',
  `FK_NUTRIOLOGO` int(11) DEFAULT NULL COMMENT 'Id nutriólogo',
  `FK_USUARIO` int(11) NOT NULL,
  `FK_CITA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_calificacion`
--

INSERT INTO `tb_calificacion` (`ID_CALIFICACION`, `CALIFICACION`, `FK_NUTRIOLOGO`, `FK_USUARIO`, `FK_CITA`) VALUES
(1, 4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_carrito_compras`
--

CREATE TABLE `tb_carrito_compras` (
  `ID_CARRITO_COMPRAS` int(11) NOT NULL COMMENT 'Identificador del',
  `FECHA` date DEFAULT NULL COMMENT 'Fecha en la que un producto se añadio al carrito',
  `CANTIDAD` int(11) DEFAULT NULL COMMENT 'Cantidad de productos del carrito',
  `FK_PRODUCTO` int(11) DEFAULT NULL COMMENT 'Id del producto',
  `FK_USUARIO` int(11) DEFAULT NULL COMMENT 'Id del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_carrito_compras`
--

INSERT INTO `tb_carrito_compras` (`ID_CARRITO_COMPRAS`, `FECHA`, `CANTIDAD`, `FK_PRODUCTO`, `FK_USUARIO`) VALUES
(1, '2024-03-13', 1, 1, 2),
(6, '2024-03-29', 1, 3, 3),
(7, '2024-03-29', 1, 2, 3),
(25, '2024-04-01', 1, 3, NULL),
(26, '2024-04-02', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `ID_CATEGORIA` int(11) NOT NULL COMMENT 'Identificador de la categoría',
  `NOMBRE_CATEGORIA` varchar(255) DEFAULT NULL COMMENT 'Nombre de la categoría',
  `FK_ESTATUS_CATEGORIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_categorias`
--

INSERT INTO `tb_categorias` (`ID_CATEGORIA`, `NOMBRE_CATEGORIA`, `FK_ESTATUS_CATEGORIA`) VALUES
(1, 'Prueba', 1),
(2, 'JLK', 2),
(3, 'FGHFGH', 2),
(4, '11', 1),
(5, 'Recetas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas`
--

CREATE TABLE `tb_citas` (
  `ID_CITA` int(11) NOT NULL COMMENT 'Identificador del',
  `TITULO_CITA` varchar(255) DEFAULT NULL COMMENT 'Título de la cita',
  `DESCRIPCION_CITA` varchar(255) DEFAULT NULL COMMENT 'Descripción de la cita',
  `FECHA` date DEFAULT NULL COMMENT 'Fecha de la cita',
  `HORA` time DEFAULT NULL COMMENT 'Hora de la cita',
  `URL_VIDEOLLAMADA` varchar(255) DEFAULT NULL COMMENT 'Liga de la reunión para la cita online',
  `COSTO` decimal(10,2) NOT NULL,
  `FK_TIPO_CITA` int(11) DEFAULT NULL COMMENT 'Presencial, Online',
  `FK_ESTATUS` int(11) DEFAULT NULL COMMENT 'Estatus de la cita (Pendiente, Realizada, Perdida, Cancelada, Pospuesta)',
  `FK_NUTRIOLOGO` int(11) DEFAULT NULL COMMENT 'Id del nutriólogo',
  `FK_USUARIO` int(11) DEFAULT NULL COMMENT 'Id del usuario',
  `FK_PAGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_citas`
--

INSERT INTO `tb_citas` (`ID_CITA`, `TITULO_CITA`, `DESCRIPCION_CITA`, `FECHA`, `HORA`, `URL_VIDEOLLAMADA`, `COSTO`, `FK_TIPO_CITA`, `FK_ESTATUS`, `FK_NUTRIOLOGO`, `FK_USUARIO`, `FK_PAGO`) VALUES
(1, 'Revisión de rutina', 'Es una cita para una revision de rutina', '2024-03-11', '07:36:48', 'http://meet.com/kkdkkdd', 0.00, 2, 1, 2, 4, 0),
(2, 'Revisión de rutina', 'Sin descripción ', '2024-04-08', '22:50:00', NULL, 0.00, 1, 4, 1, 4, 0),
(3, 'Revisión de rutina', 'Sin descripción', '2024-04-22', '22:55:00', NULL, 0.00, 1, 4, 1, 4, 0),
(4, 'Revisión de rutina', 'Sin descripción', '2024-04-22', '22:55:00', NULL, 0.00, 1, 4, 1, 4, 0),
(5, 'Revisión de rutina', 'Descripción de cita', '2024-04-15', '23:05:00', NULL, 0.00, 1, 4, 1, 4, 0),
(6, 'Revisión de rutina', 'Descripción de cita', '2024-04-15', '23:05:00', NULL, 0.00, 1, 4, 1, 4, 0),
(7, 'Revisión de rutina', 'Sin descripción', '2024-04-08', '22:57:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 1, 4, 1, 4, 0),
(8, 'Revisión de rutina', 'Sin descripción', '2024-04-08', '22:57:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 1, 4, 1, 4, 0),
(9, 'Revisión de rutina', 'Descripción de cita', '2024-04-15', '22:07:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 4, 1, 4, 0),
(10, 'Revisión de rutina', 'Descripción de cita', '2024-04-15', '22:07:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 4, 1, 4, 0),
(11, 'Revisión de rutina', 'DEscripcion', '2024-04-15', '19:08:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 1, 4, 1, 4, 0),
(12, 'Revisión de rutina', 'DEscripcion', '2024-04-15', '19:08:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 1, 1, 1, 4, 5),
(13, 'Revisión de rutina', 'Dracias', '2024-04-15', '14:49:00', '', 800.00, 1, 4, 1, 4, 0),
(14, 'Revisión de rutina', 'Dracias', '2024-04-15', '14:49:00', '', 800.00, 1, 1, 1, 4, 6),
(15, 'Revisión de rutina', 'Esta es kla ultima prueba', '2024-04-22', '14:53:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 4, 1, 4, 0),
(16, 'Revisión de rutina', 'Esta es kla ultima prueba', '2024-04-22', '14:53:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 1, 1, 4, 7),
(17, 'Revisión de rutina', 'dsada', '2024-04-22', '14:59:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 4, 1, 4, 0),
(18, 'Revisión de rutina', 'dsada', '2024-04-22', '14:59:00', 'https://meet.google.com/nwz-rhjh-sez', 800.00, 2, 4, 1, 4, 0),
(19, 'Revisión de rutina', 'dsada 2', '2024-04-22', '14:59:00', 'https://meet.google.com/nwz-rhjh-sez', 0.00, 2, 1, 1, 4, 8),
(20, 'Revisión de rutina', 'HOLAAAA', '2024-04-29', '15:09:00', '', 928.00, 1, 1, 1, 4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_detalles_pedido`
--

CREATE TABLE `tb_detalles_pedido` (
  `ID_DETALLE_PEDIDO` int(11) NOT NULL COMMENT 'Identificador de los detalles del pedido',
  `NUMERO_PRODUCTOS` int(11) DEFAULT NULL COMMENT 'Número de articulos por producto',
  `FK_PRODUCTO` int(11) DEFAULT NULL COMMENT 'Id del producto',
  `FK_PEDIDO` int(11) DEFAULT NULL COMMENT 'Id del pedido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_detalles_pedido`
--

INSERT INTO `tb_detalles_pedido` (`ID_DETALLE_PEDIDO`, `NUMERO_PRODUCTOS`, `FK_PRODUCTO`, `FK_PEDIDO`) VALUES
(1, 30, 1, 1),
(2, 1, 2, 0),
(3, 1, 1, 0),
(4, 1, 3, 0),
(5, 2, 2, 0),
(6, 1, 1, 0),
(7, 1, 1, 0),
(8, 12, 1, 0),
(9, 1, 2, 0),
(10, 1, 1, 0),
(11, 1, 1, 27),
(12, 1, 3, 28),
(13, 1, 1, 28),
(14, 9, 1, 29),
(15, 1, 2, 30),
(16, 1, 1, 30),
(17, 1, 3, 30),
(18, 1, 3, 32),
(19, 1, 1, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estatus`
--

CREATE TABLE `tb_estatus` (
  `ID_ESTATUS` int(11) NOT NULL COMMENT 'Identificador del estatus',
  `NOMBRE_ESTATUS` varchar(255) DEFAULT NULL COMMENT 'Nombre del estatus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_estatus`
--

INSERT INTO `tb_estatus` (`ID_ESTATUS`, `NOMBRE_ESTATUS`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Pendiente'),
(4, 'En proceso'),
(5, 'Rechazado'),
(6, 'Validado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_historial_clinico`
--

CREATE TABLE `tb_historial_clinico` (
  `ID_HISTORIAL_CLINICO` int(11) NOT NULL COMMENT 'Identificador del',
  `PESO` decimal(10,0) DEFAULT NULL COMMENT 'Peso del usuario',
  `TALLA` decimal(10,0) DEFAULT NULL COMMENT 'Talla del usuario',
  `CIRCUNFERENCIA_CINTURA` decimal(10,0) DEFAULT NULL COMMENT 'Circunferencia de la cintura del usuario',
  `CIRCUNFERENCIA_ABDOMEN` decimal(10,0) DEFAULT NULL COMMENT 'Circunferencia del abdomen del usuario',
  `CIRCUNFERENCIA_CADERA` decimal(10,0) DEFAULT NULL COMMENT 'Circunferencia de la cadera del usuario',
  `CIRCUNFERENCIA_BRAZO` decimal(10,0) DEFAULT NULL COMMENT 'Circunferencia del brazo del usuario',
  `CIRCUNFERENCIA_ESPALDA` decimal(10,0) DEFAULT NULL COMMENT 'Circunferencia de la espalda-busto del usuario',
  `ICM` decimal(10,0) DEFAULT NULL COMMENT 'Indice de masa corporal',
  `OBJETIVO_PROXIMO` varchar(255) DEFAULT NULL COMMENT 'El usuario escribira el objetivo del proximo registro',
  `FECHA` datetime DEFAULT NULL COMMENT 'Fecha del registro',
  `OBSERVACIONES` varchar(255) DEFAULT NULL COMMENT 'Observaciones del registro',
  `FK_USUARIO` int(11) DEFAULT NULL COMMENT 'Id del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_historial_clinico`
--

INSERT INTO `tb_historial_clinico` (`ID_HISTORIAL_CLINICO`, `PESO`, `TALLA`, `CIRCUNFERENCIA_CINTURA`, `CIRCUNFERENCIA_ABDOMEN`, `CIRCUNFERENCIA_CADERA`, `CIRCUNFERENCIA_BRAZO`, `CIRCUNFERENCIA_ESPALDA`, `ICM`, `OBJETIVO_PROXIMO`, `FECHA`, `OBSERVACIONES`, `FK_USUARIO`) VALUES
(1, 60, 2, 50, 50, 50, 10, 25, 24, 'Bajar un kilo', '2024-04-30 20:49:44', 'Sin observaciones', 4),
(4, 124, 78, 124, 145, 110, 26, 167, 133, 'bajar 1.5 kgs', '2024-04-24 11:30:00', 'dieta blanda', 6),
(5, 39, 4, 46, 38, 37, 10, 65, 39, 'subir 1 kg', '2024-04-30 08:15:00', 'desnutricion extrema', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_horarios_nutriologo`
--

CREATE TABLE `tb_horarios_nutriologo` (
  `ID_HORARIO` int(11) NOT NULL COMMENT 'Identificador del horario del nutriólogo',
  `DIA_SEMANA` int(11) DEFAULT NULL COMMENT 'Lunes, Martes, Miercoles, Jueves, Sabado, Domingo',
  `HORA_INICIO` time DEFAULT NULL COMMENT 'Hora de inicio del horario',
  `HORA_FIN` time DEFAULT NULL COMMENT 'Hora de fin del horario',
  `FK_NUTRIOLOGO` int(11) DEFAULT NULL COMMENT 'Id del nutriólogo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_horarios_nutriologo`
--

INSERT INTO `tb_horarios_nutriologo` (`ID_HORARIO`, `DIA_SEMANA`, `HORA_INICIO`, `HORA_FIN`, `FK_NUTRIOLOGO`) VALUES
(1, 1, '07:37:00', '07:37:00', 1),
(3, 2, '11:30:00', '23:30:00', 2),
(4, 2, '11:37:00', '21:37:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nutriologos`
--

CREATE TABLE `tb_nutriologos` (
  `ID_NUTRIOLOGO` int(11) NOT NULL COMMENT 'Identificador del nutriólogo',
  `DESCRIPCION` varchar(1000) NOT NULL,
  `ESPECIALIDAD` varchar(255) DEFAULT NULL COMMENT 'Especialidad del nutriólogo',
  `CEDULA` varchar(255) DEFAULT NULL COMMENT 'Cédula del nutriólogo',
  `CERTIFICADO` varchar(700) DEFAULT NULL COMMENT 'Cerficado de estudios del nutriólogo',
  `IDENTIFICACION_OFICIAL` varchar(255) DEFAULT NULL COMMENT 'Identificación oficial que valide al nutriólogo (INE, pasaporte, cartilla militar)',
  `CV` varchar(255) DEFAULT NULL COMMENT 'Curriculum vitae del nutriólogo',
  `COSTO_CONSULTA` decimal(10,0) DEFAULT NULL COMMENT 'Precio de la consulta',
  `UBICACION` varchar(255) DEFAULT NULL COMMENT 'Dirección del consultorio o institución donde el nutriólogo ofrece sus servicios',
  `FK_USUARIO` int(11) DEFAULT NULL COMMENT 'Id del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_nutriologos`
--

INSERT INTO `tb_nutriologos` (`ID_NUTRIOLOGO`, `DESCRIPCION`, `ESPECIALIDAD`, `CEDULA`, `CERTIFICADO`, `IDENTIFICACION_OFICIAL`, `CV`, `COSTO_CONSULTA`, `UBICACION`, `FK_USUARIO`) VALUES
(1, '', 'Nutriólogo', 'https://0.academia-photos.com/attachment_thumbnails/64161773/mini_magick20200812-24871-1dvgich.png?1597256751', 'https://th.bing.com/th/id/R.72ef803ff78804b1dd0b231f540838ea?rik=eecQtNBruS47NQ&riu=http%3a%2f%2fimage.slidesharecdn.com%2fconstancia-procadist-octubre-a-2013-nf-140913031915-phpapp02%2f95%2fconstancia-procadistoctubrea2013nf-1-638.jpg%3fcb%3d1410578386&ehk=VWR7XiXatXEb6EAfkxDgUbsYituU1bmW46KN8CctR30%3d&risl=&pid=ImgRaw&r=0', 'https://th.bing.com/th/id/R.abba4c4725b0742a76d199a0d5e436e6?rik=0dZaA1wV6Z1afA&pid=ImgRaw&r=0', 'https://cdn-images.zety.fr/pages/blog_modeles_cv_simples_modele_primo.png', 800, 'Nezahualcoyotl Edo de Mex', 2),
(2, '', 'DOCTRO', 'https://0.academia-photos.com/attachment_thumbnails/64161773/mini_magick20200812-24871-1dvgich.png?1597256751', 'https://th.bing.com/th/id/R.72ef803ff78804b1dd0b231f540838ea?rik=eecQtNBruS47NQ&riu=http%3a%2f%2fimage.slidesharecdn.com%2fconstancia-procadist-octubre-a-2013-nf-140913031915-phpapp02%2f95%2fconstancia-procadistoctubrea2013nf-1-638.jpg%3fcb%3d1410578386&ehk=VWR7XiXatXEb6EAfkxDgUbsYituU1bmW46KN8CctR30%3d&risl=&pid=ImgRaw&r=0', 'https://th.bing.com/th/id/R.abba4c4725b0742a76d199a0d5e436e6?rik=0dZaA1wV6Z1afA&pid=ImgRaw&r=0', 'https://cdn-images.zety.fr/pages/blog_modeles_cv_simples_modele_primo.png', 800, 'CHIMA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pagos`
--

CREATE TABLE `tb_pagos` (
  `ID_PAGO` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `FOLIO` varchar(255) NOT NULL,
  `METODO_PAGO` varchar(255) NOT NULL COMMENT 'Metodo con el que se realizó el pedido (El linea, Transferencia,',
  `FK_ESTATUS_PAGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_pagos`
--

INSERT INTO `tb_pagos` (`ID_PAGO`, `FECHA`, `HORA`, `FOLIO`, `METODO_PAGO`, `FK_ESTATUS_PAGO`) VALUES
(1, '2024-04-07', '00:16:35', '7712350236', 'Tarjeta', 6),
(2, '2024-04-07', '00:27:24', '1225413287', 'Tarjeta', 6),
(3, '2024-04-07', '00:32:50', '6258391106', 'Tarjeta', 6),
(4, '2024-04-07', '03:35:54', '5574969055', 'Tarjeta', 6),
(5, '2024-04-07', '03:37:31', '5958552520', 'Tarjeta', 6),
(6, '2024-04-07', '03:50:09', '8038597972', 'Tarjeta', 6),
(7, '2024-04-07', '03:53:43', '2627739611', 'Tarjeta', 6),
(8, '2024-04-07', '04:04:56', '8297670004', 'Tarjeta', 6),
(9, '2024-04-07', '04:09:58', '6835420114', 'Tarjeta', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `ID_PEDIDO` int(11) NOT NULL COMMENT 'Identificador del',
  `DIRECCION_ENVIO` varchar(255) DEFAULT NULL COMMENT 'Dirección donde se entregaran los productos',
  `TOTAL` decimal(10,0) DEFAULT NULL COMMENT 'Costo total del pedido',
  `FK_ESTATUS_PEDIDO` int(11) DEFAULT NULL COMMENT 'cancelado, pendiente, enviado, entregado, etc',
  `FK_PAGO` int(11) NOT NULL,
  `FK_USUARIO` int(11) DEFAULT NULL COMMENT 'Id del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_pedidos`
--

INSERT INTO `tb_pedidos` (`ID_PEDIDO`, `DIRECCION_ENVIO`, `TOTAL`, `FK_ESTATUS_PEDIDO`, `FK_PAGO`, `FK_USUARIO`) VALUES
(1, 'Nezahualcoyotl', 1500, 3, 0, 1),
(2, 'sdasd123', 35, 3, 0, 1),
(4, 'sdasd123', 35, 3, 0, 1),
(5, 'sdasd123', 35, 3, 0, 1),
(6, 'sdasd123', 35, 3, 0, 1),
(7, 'sdasd123', 35, 3, 0, 1),
(8, 'sdasd123', 35, 3, 0, 1),
(9, 'sdasd123', 35, 3, 0, 1),
(10, 'sdasd123', 35, 3, 0, 1),
(11, 'sdasd123', 23, 3, 0, 1),
(12, 'ds', 23, 3, 0, 1),
(13, 'ss', 23, 3, 0, 1),
(14, 'sds', 23, 3, 0, 1),
(15, 'sds', 23, 3, 0, 1),
(16, 'sds', 23, 3, 0, 1),
(17, 'xdf', 23, 3, 0, 1),
(18, 'gg', 46, 3, 0, 1),
(19, 'df', 278, 3, 0, 1),
(20, 'df', 278, 3, 0, 1),
(21, 'df', 278, 3, 0, 1),
(22, 'df', 278, 3, 0, 1),
(23, 'sdasd123', 278, 3, 0, 1),
(24, 'dsdsf', 278, 3, 0, 1),
(25, 'dfs', 23, 3, 0, 1),
(26, 'RE', 23, 3, 0, 1),
(27, 'SX', 23, 3, 0, 1),
(28, 'SX', 35, 3, 0, 1),
(29, 'SX', 209, 3, 0, 4),
(30, 'San diego california', 35, 3, 1, 4),
(31, 'San diego california', 35, 3, 2, 4),
(32, 'San diego california', 35, 3, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `ID_PRODUCTO` int(11) NOT NULL COMMENT 'Identificador del producto',
  `NOMBRE_PRODUCTO` varchar(255) DEFAULT NULL COMMENT 'Nombre del producto',
  `FOTO` varchar(700) NOT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL COMMENT 'Descripciono del producto',
  `PRECIO` decimal(10,0) DEFAULT NULL COMMENT 'Precio del producto',
  `TAMANO` varchar(255) DEFAULT NULL COMMENT 'Tamaño del producto (Opcional)',
  `STOCK` int(11) DEFAULT NULL COMMENT 'Número de articulos en stock',
  `FK_CATEGORIA` int(11) DEFAULT NULL COMMENT 'Id de la categoría',
  `FK_ESTATUS_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`ID_PRODUCTO`, `NOMBRE_PRODUCTO`, `FOTO`, `DESCRIPCION`, `PRECIO`, `TAMANO`, `STOCK`, `FK_CATEGORIA`, `FK_ESTATUS_PRODUCTO`) VALUES
(1, 'EJEMPLO5', 'vistas/img/productos/113.jpg', 'nudvh hjbj ', 20, 'CHICO', 1511, 1, 1),
(2, 'SUPLMENTO', 'vistas/img/productos/bag-15841_1920.jpg', 'ES5TE ES UN EJEMPLO', 20, 'EXTRA GRANDE', 1511, 4, 2),
(3, 'HOLA', 'vistas/img/productos/banner (2).jpg', '45', 10, 'grande', 15, 3, 2),
(8, 'Proteinassss', 'vistas/img/productos/pexels-pixabay-416405.jpg', 'Producto para cuidar tu ', 5220, 'Grandeeeee', 1511, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `ID_ROL` int(11) NOT NULL COMMENT 'Identificador del rol',
  `NOMBRE_ROL` varchar(255) DEFAULT NULL COMMENT 'Nombre del rol',
  `FK_ESTATUS_ROL` int(11) DEFAULT NULL COMMENT 'Estatus del rol (activo, inactivo)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`ID_ROL`, `NOMBRE_ROL`, `FK_ESTATUS_ROL`) VALUES
(1, 'Paciente', 1),
(2, 'Nutriólogo', 1),
(3, 'Administrador', 1),
(4, 'Gerentes', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_cita`
--

CREATE TABLE `tb_tipo_cita` (
  `ID_TIPO_CITA` int(11) NOT NULL COMMENT 'Identificador del tipo de cita',
  `NOMBRE_TIPO_CITA` varchar(255) DEFAULT NULL COMMENT 'Nombre del tipo de cita (Presencial, Online)',
  `FK_ESTATUS_TIPO_CITA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_tipo_cita`
--

INSERT INTO `tb_tipo_cita` (`ID_TIPO_CITA`, `NOMBRE_TIPO_CITA`, `FK_ESTATUS_TIPO_CITA`) VALUES
(1, 'Presencial', 1),
(2, 'Online', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `ID_USUARIO` int(11) NOT NULL COMMENT 'Identificador del usuario',
  `FOTO_PERFIL` varchar(255) DEFAULT NULL COMMENT 'Foto de perfil de los usuarios',
  `NOMBRE_USUARIO` varchar(255) DEFAULT NULL COMMENT 'Nombre del usuario',
  `APELLIDOS_USUARIO` varchar(255) DEFAULT NULL COMMENT 'Apellidos del usuario',
  `CORREO` varchar(255) DEFAULT NULL COMMENT 'Correo electrónico con el que usuario va acceder al sistema',
  `CONTRASENA` varchar(255) DEFAULT NULL COMMENT 'La contraseña del usuario para acceder al sistema',
  `TELEFONO` varchar(255) DEFAULT NULL COMMENT 'Número de teléfono del usuario',
  `FECHA_NACIMIENTO` date DEFAULT NULL COMMENT 'Edad del usuario',
  `OCUPACION` varchar(255) DEFAULT NULL COMMENT 'Ocupación del usuario',
  `GENERO` varchar(255) DEFAULT NULL COMMENT 'Genero del usuario',
  `FK_ROL` int(11) DEFAULT NULL COMMENT 'EL rol del usuario (Administrador, Cliente, Nutriólogo)',
  `FK_ESTATUS` int(11) DEFAULT NULL COMMENT 'activo, inactivo, validado etc.',
  `ESTUDIOS_LABORATORIO` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`ID_USUARIO`, `FOTO_PERFIL`, `NOMBRE_USUARIO`, `APELLIDOS_USUARIO`, `CORREO`, `CONTRASENA`, `TELEFONO`, `FECHA_NACIMIENTO`, `OCUPACION`, `GENERO`, `FK_ROL`, `FK_ESTATUS`, `ESTUDIOS_LABORATORIO`) VALUES
(1, '../UV HH/vistas/img/perfil/macbook-1093641_1920.jpg', 'Eduardo', 'Reyes', 'eduardo@gmail.com', '123', '5535277700', '2011-01-11', 'Estudiante', 'Hombre', 2, 6, '0'),
(2, 'http://localhost/UV%20HH/vistas/img/perfil/554.png', 'Hugosss', 'Jimenez', 'hugo@gmail.com', '123', '5535277700', '2024-03-06', 'Nutriologo', 'Hombre', 2, 6, '0'),
(3, 'vistas/img/perfil/pexels-pixabay-416405.jpg', 'Emanuel', 'Cardenas Jimenez', 'emanuel.cardenaz@gmail.com', '123', '5565857485', '2024-03-01', 'Trabajador', 'Masculino', 3, 1, '0'),
(4, '../ADMINISTRADOR/vistas/img/perfil/youtuber1 (3).jpg', 'JAvier', 'Milei', 'javier@gmail.com', '123', '', '2024-03-12', '', '', 1, 1, '../UV HH/vistas/img/perfil/EDUARDO AJA REYES-DATA STORAGE.pdf'),
(5, 'vistas/img/perfil/pexels-pixabay-416405.jpg', 'Saul', 'Vazquez Perez', 'saul.perez@gmail.com', '123', '+525547694572', '2024-04-15', 'Gestor de sistemas', 'Masculino', 3, 1, '0'),
(6, NULL, 'Laura', 'Ozorno', 'lauoz@gmail.com', '123', NULL, NULL, NULL, NULL, 1, 1, ''),
(7, NULL, 'Eduardo', 'Aja', 'eduardo@gmail.com', '123', NULL, NULL, NULL, NULL, 1, 1, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_calificacion`
--
ALTER TABLE `tb_calificacion`
  ADD PRIMARY KEY (`ID_CALIFICACION`);

--
-- Indices de la tabla `tb_carrito_compras`
--
ALTER TABLE `tb_carrito_compras`
  ADD PRIMARY KEY (`ID_CARRITO_COMPRAS`);

--
-- Indices de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  ADD PRIMARY KEY (`ID_CITA`);

--
-- Indices de la tabla `tb_detalles_pedido`
--
ALTER TABLE `tb_detalles_pedido`
  ADD PRIMARY KEY (`ID_DETALLE_PEDIDO`);

--
-- Indices de la tabla `tb_estatus`
--
ALTER TABLE `tb_estatus`
  ADD PRIMARY KEY (`ID_ESTATUS`);

--
-- Indices de la tabla `tb_historial_clinico`
--
ALTER TABLE `tb_historial_clinico`
  ADD PRIMARY KEY (`ID_HISTORIAL_CLINICO`);

--
-- Indices de la tabla `tb_horarios_nutriologo`
--
ALTER TABLE `tb_horarios_nutriologo`
  ADD PRIMARY KEY (`ID_HORARIO`);

--
-- Indices de la tabla `tb_nutriologos`
--
ALTER TABLE `tb_nutriologos`
  ADD PRIMARY KEY (`ID_NUTRIOLOGO`);

--
-- Indices de la tabla `tb_pagos`
--
ALTER TABLE `tb_pagos`
  ADD PRIMARY KEY (`ID_PAGO`);

--
-- Indices de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`ID_PEDIDO`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `tb_tipo_cita`
--
ALTER TABLE `tb_tipo_cita`
  ADD PRIMARY KEY (`ID_TIPO_CITA`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_calificacion`
--
ALTER TABLE `tb_calificacion`
  MODIFY `ID_CALIFICACION` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_carrito_compras`
--
ALTER TABLE `tb_carrito_compras`
  MODIFY `ID_CARRITO_COMPRAS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la categoría', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  MODIFY `ID_CITA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tb_detalles_pedido`
--
ALTER TABLE `tb_detalles_pedido`
  MODIFY `ID_DETALLE_PEDIDO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los detalles del pedido', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tb_estatus`
--
ALTER TABLE `tb_estatus`
  MODIFY `ID_ESTATUS` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del estatus', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_historial_clinico`
--
ALTER TABLE `tb_historial_clinico`
  MODIFY `ID_HISTORIAL_CLINICO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_horarios_nutriologo`
--
ALTER TABLE `tb_horarios_nutriologo`
  MODIFY `ID_HORARIO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del horario del nutriólogo', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_nutriologos`
--
ALTER TABLE `tb_nutriologos`
  MODIFY `ID_NUTRIOLOGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del nutriólogo', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_pagos`
--
ALTER TABLE `tb_pagos`
  MODIFY `ID_PAGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `ID_PEDIDO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del producto', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del rol', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_tipo_cita`
--
ALTER TABLE `tb_tipo_cita`
  MODIFY `ID_TIPO_CITA` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de cita', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del usuario', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
