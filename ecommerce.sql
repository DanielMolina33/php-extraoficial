-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2021 a las 03:25:39
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `idCalificaciones` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `perfil` int(11) NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudades` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `producto` int(11) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentarios`, `descripcion`, `fechaCreacion`, `producto`, `perfil`) VALUES
(8, 'Es un buen producto, la verdad me gustó mucho!', '0000-00-00', 12, 4),
(10, 'Me gustó este producto, gracias', '2021-12-17', 12, 4),
(12, 'Que camisa tan hermosa, gracias!', '2021-12-17', 13, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContactos` int(11) NOT NULL,
  `descripcion` varchar(5) NOT NULL,
  `url` varchar(45) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `usuario` int(11) NOT NULL,
  `entidad` varchar(5) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepartamentos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuarioModifica` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamentos`, `nombre`, `usuarioModifica`, `fechaCreacion`, `fechaModificacion`, `pais`) VALUES
(1, 'AMAZONAS', 0, '2021-10-08', NULL, 3),
(2, 'ARAUCA', 0, '2021-10-08', NULL, 3),
(3, 'CAQUETÁ', 0, '2021-10-08', NULL, 3),
(4, 'GUAVIARE', 0, '2021-10-08', NULL, 3),
(5, 'LA GUAJIRA', 0, '2021-10-08', NULL, 3),
(6, 'MAGDALENA', 0, '2021-10-08', NULL, 3),
(7, 'NORTE DE SANTANDER', 0, '2021-10-08', NULL, 3),
(8, 'PUTUMAYO', 0, '2021-10-08', NULL, 3),
(9, 'SAN ANDRÉS', 0, '2021-10-08', NULL, 3),
(10, 'SUCRE', 0, '2021-10-08', NULL, 3),
(11, 'VAUPÉS', 0, '2021-10-08', NULL, 3),
(12, 'VICHADA', 0, '2021-10-08', NULL, 3),
(13, 'ANTIOQUIA', 0, '2021-10-08', NULL, 3),
(14, 'ATLÁNTICO', 0, '2021-10-08', NULL, 3),
(15, 'BOLÍVAR', 0, '2021-10-08', NULL, 3),
(16, 'BOYACÁ', 0, '2021-10-08', NULL, 3),
(17, 'CALDAS', 0, '2021-10-08', NULL, 3),
(18, 'CAUCA', 0, '2021-10-08', NULL, 3),
(19, 'CESAR', 0, '2021-10-08', NULL, 3),
(20, 'CUNDINAMARCA', 0, '2021-10-08', NULL, 3),
(21, 'CHOCÓ', 0, '2021-10-08', NULL, 3),
(22, 'HUILA', 0, '2021-10-08', NULL, 3),
(23, 'META', 0, '2021-10-08', NULL, 3),
(24, 'NARIÑO', 0, '2021-10-08', NULL, 3),
(25, 'QUINDIO', 0, '2021-10-08', NULL, 3),
(26, 'RISARALDA', 0, '2021-10-08', NULL, 3),
(27, 'SANTANDER', 0, '2021-10-08', NULL, 3),
(28, 'TOLIMA', 0, '2021-10-08', NULL, 3),
(29, 'VALLE DEL CAUCA', 0, '2021-10-08', NULL, 3),
(30, 'CASANARE', 0, '2021-10-08', NULL, 3),
(31, 'CORDOBA', 0, '2021-10-08', NULL, 3),
(32, 'GUAINÍA', 0, '2021-10-08', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefacturas`
--

CREATE TABLE `detallefacturas` (
  `idDetalleFacturas` int(11) NOT NULL,
  `idFactura` int(64) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `detallefacturas`
--

INSERT INTO `detallefacturas` (`idDetalleFacturas`, `idFactura`, `cantidad`, `fechaCreacion`, `producto`) VALUES
(11, 34, 1, '2021-12-17', 12),
(13, 36, 1, '2021-12-17', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `idDirecciones` int(11) NOT NULL,
  `nombreNumVia` varchar(45) NOT NULL,
  `placaDomicilio` varchar(10) NOT NULL,
  `complementos` varchar(150) DEFAULT NULL,
  `codigoPostal` varchar(10) DEFAULT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `perfil` int(11) NOT NULL,
  `entidad` varchar(5) NOT NULL,
  `tipoVia` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades`
--

CREATE TABLE `entidades` (
  `idEntidad` varchar(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numeroDocumento` varchar(12) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `ciudad` int(11) NOT NULL,
  `tipoDocumento` int(11) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `entidades`
--

INSERT INTO `entidades` (`idEntidad`, `nombre`, `numeroDocumento`, `fechaCreacion`, `fechaModificacion`, `ciudad`, `tipoDocumento`, `usuarioModifica`, `estado`) VALUES
('EMP', 'Ecommerce', '12345678', '2021-12-12', NULL, 1253, 2, NULL, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `idFacturas` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `perfil` int(11) NOT NULL,
  `entidad` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`idFacturas`, `total`, `fechaCreacion`, `perfil`, `entidad`) VALUES
(34, 0, '2021-12-17', 4, 'EMP'),
(36, 0, '2021-12-17', 4, 'EMP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `idProductos` int(11) NOT NULL,
  `idPerfiles` int(11) NOT NULL,
  `fechaCreacion` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosproductos`
--

CREATE TABLE `fotosproductos` (
  `idFotosProductos` int(11) NOT NULL,
  `rutaFoto` varchar(100) NOT NULL,
  `nombreFoto` varchar(60) NOT NULL,
  `usuarioModifica` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `producto` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idPagos` int(11) NOT NULL,
  `metodoDePago` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `estadoDePago` varchar(45) NOT NULL,
  `totalPagado` int(11) NOT NULL,
  `fechaDePago` date NOT NULL,
  `referenciaDePago` varchar(45) NOT NULL,
  `emailDePago` varchar(100) NOT NULL,
  `direccionDeEnvio` varchar(150) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idPaises` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `abreviatura` varchar(5) NOT NULL,
  `indicativo` int(11) DEFAULT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idPaises`, `nombre`, `abreviatura`, `indicativo`, `usuarioModifica`, `fechaCreacion`, `fechaModificacion`) VALUES
(3, 'COLOMBIA', 'CO', 57, NULL, '2021-10-08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `idPerfiles` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `numeroDocumento` varchar(12) NOT NULL,
  `rutaFoto` varchar(100) NOT NULL,
  `nombreFoto` varchar(100) NOT NULL,
  `fechaDeNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModifica` date DEFAULT NULL,
  `usuario` int(11) NOT NULL,
  `ciudad` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 8,
  `tipoDocumento` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`idPerfiles`, `nombres`, `apellidos`, `numeroDocumento`, `rutaFoto`, `nombreFoto`, `fechaDeNacimiento`, `fechaCreacion`, `fechaModifica`, `usuario`, `ciudad`, `estado`, `tipoDocumento`, `genero`) VALUES
(4, 'Jorge Ivan', 'Rivera', '123456789', '', '', '0000-00-00', '2021-12-17', NULL, 1, NULL, 8, 1, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrsf`
--

CREATE TABLE `pqrsf` (
  `idPQRSF` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `numeroDocumento` varchar(12) DEFAULT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `estados` int(11) NOT NULL,
  `tipoDocumento` int(11) NOT NULL,
  `tipoSolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` longtext NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `talla` int(11) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `subcategoria` int(11) NOT NULL,
  `precioDescuento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `referencia`, `nombre`, `descripcion`, `precio`, `stock`, `color`, `talla`, `usuarioModifica`, `fechaCreacion`, `fechaModificacion`, `estado`, `subcategoria`, `precioDescuento`) VALUES
(12, '4343', 'Blusa roja talla S', 'Te sorprenderá su comodidad!', 50000, 4, 21, 26, 0, '2021-12-17', NULL, 8, 1, 0),
(13, '4344', 'camisa blanca', 'Camisa blanca mujer', 43000, 2, 23, 27, 0, '2021-12-17', NULL, 8, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idSubcategorias` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `categoria` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idSubcategorias`, `nombre`, `usuarioModifica`, `fechaCreacion`, `fechaModificacion`, `categoria`, `estado`) VALUES
(1, 'Blusas', NULL, '2021-10-08', NULL, 19, 8),
(2, 'Short', NULL, '2021-10-08', NULL, 19, 8),
(3, 'Vestidos de baño', NULL, '2021-10-08', NULL, 19, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `descripcion`, `usuarioModifica`, `fechaCreacion`) VALUES
(1, 'Tipo documento', NULL, '2021-10-08'),
(2, 'Estados', NULL, '2021-10-08'),
(3, 'Roles', NULL, '2021-10-08'),
(4, 'Genero', NULL, '2021-10-08'),
(5, 'Categorias', NULL, '2021-10-08'),
(6, 'Colores', NULL, '2021-10-08'),
(7, 'Tallas', NULL, '2021-10-08'),
(8, 'Tipo via', NULL, '2021-10-08'),
(9, 'Tipo de solicitud', NULL, '2021-10-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `idTipos` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuarioModifica` int(11) DEFAULT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `fechaModificacion` date DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`idTipos`, `descripcion`, `estado`, `usuarioModifica`, `fechaCreacion`, `fechaModificacion`, `tipo`) VALUES
(1, 'Cédula Ciudadanía', 8, NULL, '2021-10-08', NULL, 1),
(2, 'NIT', 8, NULL, '2021-10-08', NULL, 1),
(3, 'RUT', 8, NULL, '2021-10-08', NULL, 1),
(4, 'Pasaporte', 8, NULL, '2021-10-08', NULL, 1),
(5, 'Cédula de Extranjería', 8, NULL, '2021-10-08', NULL, 1),
(6, 'Tarjeta de Identidad', 8, NULL, '2021-10-08', NULL, 1),
(8, 'Activo', 8, NULL, '2021-10-08', NULL, 2),
(9, 'Inactivo', 8, NULL, '2021-10-08', NULL, 2),
(10, 'Pendiente', 8, NULL, '2021-10-08', NULL, 2),
(11, 'Asignado', 8, NULL, '2021-10-08', NULL, 2),
(12, 'Solucionado', 8, NULL, '2021-10-08', NULL, 2),
(13, 'Agotado', 8, NULL, '2021-10-08', NULL, 2),
(14, 'Administrador', 8, NULL, '2021-10-08', NULL, 3),
(15, 'Cliente', 8, NULL, '2021-10-08', NULL, 3),
(16, 'Femenino', 8, NULL, '2021-10-08', NULL, 4),
(17, 'Masculino', 8, NULL, '2021-10-08', NULL, 4),
(18, 'Indefinido', 8, NULL, '2021-10-08', NULL, 4),
(19, 'Mujer', 8, NULL, '2021-10-08', NULL, 5),
(20, 'Hombre', 8, NULL, '2021-12-14', NULL, 5),
(21, 'Rojo', 8, NULL, '2021-10-08', NULL, 6),
(22, 'Azul', 8, NULL, '2021-10-08', NULL, 6),
(23, 'Blanco', 8, NULL, '2021-10-08', NULL, 6),
(25, 'XS', 8, NULL, '2021-10-08', NULL, 7),
(26, 'S', 8, NULL, '2021-10-08', NULL, 7),
(27, 'M', 8, NULL, '2021-10-08', NULL, 7),
(28, 'Avenida', 8, NULL, '2021-10-08', NULL, 8),
(29, 'Calle', 8, NULL, '2021-10-08', NULL, 8),
(30, 'Diagonal', 8, NULL, '2021-10-08', NULL, 8),
(31, 'Carrera', 8, NULL, '2021-10-08', NULL, 8),
(32, 'Pasaje', 8, NULL, '2021-10-08', NULL, 8),
(33, 'Rural', 8, NULL, '2021-10-08', NULL, 8),
(35, 'Transversal', 8, NULL, '2021-10-08', NULL, 8),
(36, 'Petición ', 8, NULL, '2021-10-08', NULL, 9),
(37, 'Queja', 8, NULL, '2021-10-08', NULL, 9),
(38, 'Reclamo', 8, NULL, '2021-10-08', NULL, 9),
(39, 'Sugerencia', 8, NULL, '2021-10-08', NULL, 9),
(40, 'Felicitaciones', 8, NULL, '2021-10-08', NULL, 9),
(41, 'verde', 8, NULL, '2021-10-10', NULL, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE `usuariorol` (
  `idUsuario` int(11) NOT NULL,
  `idRol` int(11) NOT NULL DEFAULT 15
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombreDeUsuario` varchar(30) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `fechaCreacion` date NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `email`, `nombreDeUsuario`, `contraseña`, `fechaCreacion`, `estado`) VALUES
(1, 'jirivera6@misena.edu.co', 'irivera', '1234', '0000-00-00', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`idCalificaciones`) USING BTREE,
  ADD KEY `fk_Calificaciones_Perfiles1_idx` (`perfil`) USING BTREE,
  ADD KEY `fk_Calificaciones_Productos1_idx` (`producto`) USING BTREE;

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudades`),
  ADD KEY `fk_Ciudades_Departamentos1_idx` (`departamento`) USING BTREE;

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`) USING BTREE,
  ADD KEY `fk_Comentarios_Productos1_idx` (`producto`) USING BTREE,
  ADD KEY `fk_Comentarios_Perfiles1_idx` (`perfil`) USING BTREE;

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContactos`) USING BTREE,
  ADD KEY `fk_Contactos_Perfiles1_idx` (`usuario`) USING BTREE,
  ADD KEY `fk_Contactos_Entidades1_idx` (`entidad`) USING BTREE,
  ADD KEY `fk_Contactos_Tipos1_idx` (`estado`) USING BTREE;

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepartamentos`),
  ADD KEY `fk_Departamentos_Paises1_idx` (`pais`) USING BTREE;

--
-- Indices de la tabla `detallefacturas`
--
ALTER TABLE `detallefacturas`
  ADD PRIMARY KEY (`idDetalleFacturas`) USING BTREE,
  ADD KEY `fk_DetalleFacturas_Productos1_idx` (`producto`) USING BTREE,
  ADD KEY `fk_factura_detallefacturaaa` (`idFactura`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`idDirecciones`) USING BTREE,
  ADD KEY `fk_Direcciones_Perfiles1_idx` (`perfil`) USING BTREE,
  ADD KEY `fk_Direcciones_Entidades1_idx` (`entidad`) USING BTREE,
  ADD KEY `fk_Direcciones_Tipos1_idx` (`tipoVia`) USING BTREE,
  ADD KEY `fk_Direcciones_Tipos2_idx` (`estado`) USING BTREE;

--
-- Indices de la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD PRIMARY KEY (`idEntidad`) USING BTREE,
  ADD KEY `fk_Entidades_Ciudades1_idx` (`ciudad`) USING BTREE,
  ADD KEY `fk_Entidades_Tipos1_idx` (`tipoDocumento`) USING BTREE,
  ADD KEY `fk_Entidades_Tipos2_idx` (`estado`) USING BTREE;

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`idFacturas`) USING BTREE,
  ADD KEY `fk_Facturas_Perfiles1_idx` (`perfil`) USING BTREE,
  ADD KEY `fk_Facturas_Entidades1_idx` (`entidad`) USING BTREE;

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idProductos`,`idPerfiles`) USING BTREE,
  ADD KEY `fk_Productos_has_Perfiles_Perfiles1_idx` (`idPerfiles`) USING BTREE,
  ADD KEY `fk_Productos_has_Perfiles_Productos1_idx` (`idProductos`) USING BTREE;

--
-- Indices de la tabla `fotosproductos`
--
ALTER TABLE `fotosproductos`
  ADD PRIMARY KEY (`idFotosProductos`) USING BTREE,
  ADD KEY `fk_FotosProductos_Productos1_idx` (`producto`) USING BTREE,
  ADD KEY `fk_FotosProductos_Tipos1_idx` (`estado`) USING BTREE;

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idPagos`) USING BTREE,
  ADD KEY `fk_Pagos_Facturas1_idx` (`factura`) USING BTREE;

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idPaises`) USING BTREE;

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`idPerfiles`) USING BTREE,
  ADD KEY `fk_Perfiles_Usuarios1_idx` (`usuario`) USING BTREE,
  ADD KEY `fk_Perfiles_Ciudades1_idx` (`ciudad`) USING BTREE,
  ADD KEY `fk_Perfiles_Tipos1_idx` (`estado`) USING BTREE,
  ADD KEY `fk_Perfiles_Tipos2_idx` (`tipoDocumento`) USING BTREE,
  ADD KEY `fk_Perfiles_Tipos3_idx` (`genero`) USING BTREE;

--
-- Indices de la tabla `pqrsf`
--
ALTER TABLE `pqrsf`
  ADD PRIMARY KEY (`idPQRSF`) USING BTREE,
  ADD KEY `fk_PQRSF_Tipos1_idx` (`estados`) USING BTREE,
  ADD KEY `fk_PQRSF_Tipos2_idx` (`tipoDocumento`) USING BTREE,
  ADD KEY `fk_PQRSF_Tipos3_idx` (`tipoSolicitud`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`) USING BTREE,
  ADD KEY `fk_Productos_Subcategorias1_idx` (`subcategoria`) USING BTREE,
  ADD KEY `color` (`color`),
  ADD KEY `talla` (`talla`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idSubcategorias`) USING BTREE,
  ADD KEY `fk_Subcategorias_Tipos1_idx` (`categoria`) USING BTREE,
  ADD KEY `fk_Subcategorias_Tipos2_idx` (`estado`) USING BTREE;

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`) USING BTREE;

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`idTipos`) USING BTREE,
  ADD KEY `fk_Tipos_Tipo1_idx` (`tipo`) USING BTREE;

--
-- Indices de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD PRIMARY KEY (`idUsuario`,`idRol`) USING BTREE,
  ADD KEY `fk_Usuarios_has_Tipos_Tipos1_idx` (`idRol`) USING BTREE,
  ADD KEY `fk_Usuarios_has_Tipos_Usuarios1_idx` (`idUsuario`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`) USING BTREE,
  ADD KEY `fk_Usuarios_Tipos1_idx` (`estado`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `idCalificaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1138;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContactos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepartamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `detallefacturas`
--
ALTER TABLE `detallefacturas`
  MODIFY `idDetalleFacturas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `idDirecciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `idFacturas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `fotosproductos`
--
ALTER TABLE `fotosproductos`
  MODIFY `idFotosProductos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idPagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `idPerfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pqrsf`
--
ALTER TABLE `pqrsf`
  MODIFY `idPQRSF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idSubcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `idTipos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `fk_Calificaciones_Perfiles1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Calificaciones_Productos1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_Ciudades_Departamentos1` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`idDepartamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_Comentarios_Perfiles1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comentarios_Productos1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `fk_Contactos_Entidades1` FOREIGN KEY (`entidad`) REFERENCES `entidades` (`idEntidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contactos_Perfiles1` FOREIGN KEY (`usuario`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contactos_Tipos1` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `fk_Departamentos_Paises1` FOREIGN KEY (`pais`) REFERENCES `paises` (`idPaises`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_depto_pais` FOREIGN KEY (`pais`) REFERENCES `paises` (`idPaises`);

--
-- Filtros para la tabla `detallefacturas`
--
ALTER TABLE `detallefacturas`
  ADD CONSTRAINT `fk_DetalleFacturas_Productos1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_factura_detallefacturaaa` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`idFacturas`);

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `fk_Direcciones_Entidades1` FOREIGN KEY (`entidad`) REFERENCES `entidades` (`idEntidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Direcciones_Perfiles1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Direcciones_Tipos1` FOREIGN KEY (`tipoVia`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Direcciones_Tipos2` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entidades`
--
ALTER TABLE `entidades`
  ADD CONSTRAINT `fk_Entidades_Ciudades1` FOREIGN KEY (`ciudad`) REFERENCES `ciudades` (`idCiudades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entidades_Tipos1` FOREIGN KEY (`tipoDocumento`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entidades_Tipos2` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `fk_Facturas_Entidades1` FOREIGN KEY (`entidad`) REFERENCES `entidades` (`idEntidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Facturas_Perfiles1` FOREIGN KEY (`perfil`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `fk_Productos_has_Perfiles_Perfiles1` FOREIGN KEY (`idPerfiles`) REFERENCES `perfiles` (`idPerfiles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_has_Perfiles_Productos1` FOREIGN KEY (`idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotosproductos`
--
ALTER TABLE `fotosproductos`
  ADD CONSTRAINT `fk_FotosProductos_Productos1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FotosProductos_Tipos1` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_Pagos_Facturas1` FOREIGN KEY (`factura`) REFERENCES `facturas` (`idFacturas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD CONSTRAINT `fk_Perfiles_Ciudades1` FOREIGN KEY (`ciudad`) REFERENCES `ciudades` (`idCiudades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Perfiles_Tipos1` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Perfiles_Tipos2` FOREIGN KEY (`tipoDocumento`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Perfiles_Tipos3` FOREIGN KEY (`genero`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Perfiles_Usuarios1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pqrsf`
--
ALTER TABLE `pqrsf`
  ADD CONSTRAINT `fk_PQRSF_Tipos1` FOREIGN KEY (`estados`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PQRSF_Tipos2` FOREIGN KEY (`tipoDocumento`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PQRSF_Tipos3` FOREIGN KEY (`tipoSolicitud`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_Productos_Subcategorias1` FOREIGN KEY (`subcategoria`) REFERENCES `subcategorias` (`idSubcategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`color`) REFERENCES `tipos` (`idTipos`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`talla`) REFERENCES `tipos` (`idTipos`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`);

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_Subcategorias_Tipos1` FOREIGN KEY (`categoria`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Subcategorias_Tipos2` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD CONSTRAINT `fk_Tipos_Tipo1` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD CONSTRAINT `fk_Usuarios_has_Tipos_Tipos1` FOREIGN KEY (`idRol`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_has_Tipos_Usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Tipos1` FOREIGN KEY (`estado`) REFERENCES `tipos` (`idTipos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
