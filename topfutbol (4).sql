-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 18-01-2022 a les 11:05:10
-- Versió del servidor: 10.4.21-MariaDB
-- Versió de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `topfutbol`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `carrito`
--

CREATE TABLE `carrito` (
  `idListaPedidos` int(100) NOT NULL,
  `idPedido` int(100) NOT NULL,
  `idProducto` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `carrito`
--

INSERT INTO `carrito` (`idListaPedidos`, `idPedido`, `idProducto`, `cantidad`, `nombre`, `precio`) VALUES
(381, 1, 1, 3, 'Camiseta Nike FC Barcelona 2021-2022', 85);

-- --------------------------------------------------------

--
-- Estructura de la taula `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(50) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `imagenCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombre`, `imagenCategoria`) VALUES
(1, 'La Liga', '../img/Ligas/Categorias/laliga_logo.jpg'),
(2, 'Premier League', '../img/Ligas/Categorias/premier_logo.png'),
(3, 'Bundesliga', '../img/Ligas/Categorias/bundesliga_logo.png'),
(4, 'Ligue1', '../img/Ligas/Categorias/ligue1_logo.png'),
(5, 'Serie A', '../img/Ligas/Categorias/serieA_logo.png'),
(6, 'Otras', '../img/Ligas/Categorias/internacional_logo.png');

-- --------------------------------------------------------

--
-- Estructura de la taula `listapedidos`
--

CREATE TABLE `listapedidos` (
  `idPedido` int(100) NOT NULL,
  `idProducto` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `listapedidos`
--

INSERT INTO `listapedidos` (`idPedido`, `idProducto`, `cantidad`, `nombre`, `precio`, `foto`) VALUES
(54, 3, 5, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(54, 5, 2, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(55, 2, 1, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(55, 5, 3, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(56, 3, 5, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(56, 4, 3, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(56, 5, 4, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(57, 2, 3, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(58, 5, 4, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(58, 2, 3, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(58, 4, 1, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(58, 3, 5, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(58, 14, 7, 'Camiseta Inter de Milán 2021-2022', 80, '../img/Ligas/SerieA/Inter/2021-2022.jpg'),
(59, 7, 1, 'Camiseta Puma Manchester City 2021-2022', 115, '../img/Ligas/Premier/MCity/2021-2022.png'),
(60, 2, 1, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(60, 4, 5, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(60, 8, 1, 'Camiseta Pumas Borussia Dortmund 2021-2022', 75, '../img/Ligas/Bundesliga/Borusia/2021-2022.jpg'),
(60, 3, 5, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(61, 8, 5, 'Camiseta Pumas Borussia Dortmund 2021-2022', 75, '../img/Ligas/Bundesliga/Borusia/2021-2022.jpg'),
(61, 2, 3, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(61, 4, 4, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(61, 6, 1, 'Camiseta New Balance Liverpool 2020-2021', 60, '../img/Ligas/Premier/Liverpool/2020-2021.jpg'),
(61, 9, 1, 'Camiseta Adidas LA Galaxy 2020-2021', 50, '../img/Ligas/Otras/LAGalaxy/2020-2021.jpg'),
(62, 2, 1, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(62, 6, 1, 'Camiseta New Balance Liverpool 2020-2021', 60, '../img/Ligas/Premier/Liverpool/2020-2021.jpg'),
(62, 8, 1, 'Camiseta Pumas Borussia Dortmund 2021-2022', 75, '../img/Ligas/Bundesliga/Borusia/2021-2022.jpg'),
(62, 14, 4, 'Camiseta Inter de Milán 2021-2022', 80, '../img/Ligas/SerieA/Inter/2021-2022.jpg'),
(63, 2, 1, 'Camiseta Adidas Juventus 2021-2022', 80, '../img/Ligas/SerieA/Juventus/2021-2022.jpg'),
(63, 13, 6, 'Camiseta Adidas Bayern Münich 2021-2022 Segunda', 100, '../img/Ligas/Bundesliga/Bayern/2021-2022_2a.jpg'),
(63, 6, 1, 'Camiseta New Balance Liverpool 2020-2021', 60, '../img/Ligas/Premier/Liverpool/2020-2021.jpg'),
(64, 3, 5, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(64, 6, 1, 'Camiseta New Balance Liverpool 2020-2021', 60, '../img/Ligas/Premier/Liverpool/2020-2021.jpg'),
(65, 4, 3, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(66, 4, 3, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(67, 5, 1, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(67, 15, 4, 'Camiseta AC Milán 2021-2022', 85, '../img/Ligas/SerieA/Milan/2021-2022.jpg'),
(68, 3, 1, 'Camiseta Adidas Manchester United 2021-2022', 80, '../img/Ligas/Premier/MUnited/2021-2022.jpg'),
(68, 4, 4, 'Camiseta Nike PSG 2021-2022', 110, '../img/Ligas/Ligue1/PSG/2021-2022.jpg'),
(68, 5, 1, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(68, 1, 3, 'Camiseta Nike FC Barcelona 2021-2022', 85, '../img/Ligas/LaLiga/FCBarcelona/2021-2022.jpg'),
(69, 1, 4, 'Camiseta Nike FC Barcelona 2021-2022', 85, '../img/Ligas/LaLiga/FCBarcelona/2021-2022.jpg'),
(69, 14, 6, 'Camiseta Inter de Milán 2021-2022', 80, '../img/Ligas/SerieA/Inter/2021-2022.jpg'),
(70, 1, 3, 'Camiseta Nike FC Barcelona 2021-2022', 85, '../img/Ligas/LaLiga/FCBarcelona/2021-2022.jpg'),
(71, 11, 1, 'Camiseta Exclusiva River Plate Superclásico 2021', 110, '../img/Ligas/Otras/River/exclusiva.png'),
(71, 5, 3, 'Camiseta Adidas Real Madrid 2020-2021', 65, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg'),
(71, 8, 4, 'Camiseta Pumas Borussia Dortmund 2021-2022', 75, '../img/Ligas/Bundesliga/Borusia/2021-2022.jpg'),
(72, 6, 1, 'Camiseta New Balance Liverpool 2020-2021', 60, '../img/Ligas/Premier/Liverpool/2020-2021.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(100) NOT NULL,
  `idUsuario` int(100) NOT NULL,
  `fecha` date NOT NULL,
  `importe_total` int(100) NOT NULL,
  `elementos_totales` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idUsuario`, `fecha`, `importe_total`, `elementos_totales`) VALUES
(50, 15, '2022-01-17', 335, 4),
(51, 15, '2022-01-17', 250, 3),
(52, 15, '2022-01-17', 460, 6),
(53, 15, '2022-01-17', 460, 6),
(54, 15, '2022-01-17', 210, 3),
(55, 15, '2022-01-17', 275, 4),
(56, 16, '2022-01-17', 670, 8),
(57, 16, '2022-01-17', 240, 3),
(58, 16, '2022-01-17', 1570, 20),
(59, 17, '2022-01-17', 115, 1),
(60, 17, '2022-01-17', 1105, 12),
(61, 17, '2022-01-17', 1165, 14),
(62, 18, '2022-01-17', 535, 7),
(63, 18, '2022-01-17', 640, 7),
(64, 15, '2022-01-17', 140, 2),
(65, 15, '2022-01-17', 330, 3),
(66, 15, '2022-01-17', 330, 3),
(67, 15, '2022-01-18', 405, 5),
(68, 18, '2022-01-18', 840, 9),
(69, 18, '2022-01-18', 820, 10),
(70, 19, '2022-01-18', 255, 3),
(71, 19, '2022-01-18', 605, 8),
(72, 18, '2022-01-18', 60, 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(150) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(150) NOT NULL,
  `stock` int(150) NOT NULL,
  `fecha` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `idCategoria` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `precio`, `stock`, `fecha`, `status`, `foto`, `idCategoria`) VALUES
(1, 'Camiseta Nike FC Barcelona 2021-2022', 85, 50, '2021-11-01', 1, '../img/Ligas/LaLiga/FCBarcelona/2021-2022.jpg', 1),
(2, 'Camiseta Adidas Juventus 2021-2022', 80, 30, '2021-11-02', 1, '../img/Ligas/SerieA/Juventus/2021-2022.jpg', 5),
(3, 'Camiseta Adidas Manchester United 2021-2022', 80, 50, '2021-11-17', 1, '../img/Ligas/Premier/MUnited/2021-2022.jpg', 2),
(4, 'Camiseta Nike PSG 2021-2022', 110, 20, '2021-10-27', 1, '../img/Ligas/Ligue1/PSG/2021-2022.jpg', 4),
(5, 'Camiseta Adidas Real Madrid 2020-2021', 65, 10, '2020-11-11', 1, '../img/Ligas/LaLiga/RealMadrid/2020-2021.jpg', 1),
(6, 'Camiseta New Balance Liverpool 2020-2021', 60, 23, '2020-11-24', 1, '../img/Ligas/Premier/Liverpool/2020-2021.jpg', 2),
(7, 'Camiseta Puma Manchester City 2021-2022', 115, 40, '2021-09-23', 1, '../img/Ligas/Premier/MCity/2021-2022.png', 2),
(8, 'Camiseta Pumas Borussia Dortmund 2021-2022', 75, 15, '2021-11-02', 1, '../img/Ligas/Bundesliga/Borusia/2021-2022.jpg', 3),
(9, 'Camiseta Adidas LA Galaxy 2020-2021', 50, 5, '2020-11-18', 1, '../img/Ligas/Otras/LAGalaxy/2020-2021.jpg', 6),
(10, 'Camiseta Nike América Segunda Equipación 2020-2021', 40, 3, '2020-08-31', 1, '../img/Ligas/Otras/America/2020-2021(Segunda).jpg', 6),
(11, 'Camiseta Exclusiva River Plate Superclásico 2021', 110, 10, '2021-09-23', 1, '../img/Ligas/Otras/River/exclusiva.png', 6),
(12, 'Camiseta Adidas Bayern Münich 2021-2022', 110, 50, '2022-01-16', 1, '../img/Ligas/Bundesliga/Bayern/2021-2022.jpg', 3),
(13, 'Camiseta Adidas Bayern Münich 2021-2022 Segunda', 100, 20, '2022-01-16', 1, '../img/Ligas/Bundesliga/Bayern/2021-2022_2a.jpg', 3),
(14, 'Camiseta Inter de Milán 2021-2022', 80, 60, '2022-01-16', 1, '../img/Ligas/SerieA/Inter/2021-2022.jpg', 5),
(15, 'Camiseta AC Milán 2021-2022', 85, 40, '2022-01-16', 1, '../img/Ligas/SerieA/Milan/2021-2022.jpg', 5),
(16, 'Camiseta FC Chelsea 2021-2022', 90, 20, '2022-01-16', 1, '../img/Ligas/Premier/Chelsea/2021-2022.jpg', 2),
(17, 'Camiseta Ajax 2021-2022', 75, 10, '2022-01-09', 1, '../img/Ligas/Otras/Ajax/2021-2022.jpg', 6),
(18, 'Camiseta Olympique de Lyon 2021-2022', 60, 15, '2022-01-16', 1, '../img/Ligas/Ligue1/Lyon/2021-2022.jpg', 4),
(19, 'Camiseta Olympique de Marsella 2021-2022', 60, 25, '2022-01-16', 1, '../img/Ligas/Ligue1/Marsella/2021-2022.jpg', 4),
(20, 'Camiseta AC Monaco 2021-2022', 60, 40, '2022-01-16', 1, '../img/Ligas/Ligue1/Monaco/2021-2022.jpg', 4),
(25, 'Camiseta Atlético de Madrid 2021-2022', 90, 50, '2022-01-16', 1, '../img/Ligas/LaLiga/Atletico/2021-2022.jpg', 1),
(26, 'Camiseta Athletic de Bilbao 2021-2022', 70, 40, '2022-01-16', 1, '../img/Ligas/LaLiga/Bilbao/2021-2022.jpeg', 1),
(27, 'Camiseta Sevilla FC 2021-2022', 90, 20, '2022-01-16', 1, '../img/Ligas/LaLiga/Sevilla/2021-2022.jpg', 1),
(28, 'Camiseta Valencia CF 2021-2022', 75, 10, '2022-01-09', 1, '../img/Ligas/LaLiga/Valencia/2021-2022.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  `codigopostal` int(5) NOT NULL,
  `idUsuario` int(50) NOT NULL,
  `imagenPerfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `usuarios`
--

INSERT INTO `usuarios` (`email`, `nombre`, `apellido1`, `apellido2`, `contraseña`, `direccion`, `poblacion`, `codigopostal`, `idUsuario`, `imagenPerfil`) VALUES
('pablo.ar908@gmail.com', 'Pablo', 'Rod', 'Ber', '$2y$10$ELEsgCzDF7WictlJDytxfuptychaaxgW7s62Au4r8H2qVvBfbSFuu', 'Carrer de gracia 72, bloque C,', 'barcelona', 8201, 1, ''),
('falkor8@protonmail.com', 'Pablo Andrés', 'FFFF', 'Bernardiz', '$2y$10$CcxbXS6zb4KyeARBee7MkO2XMEW4kbe5VBRTF7jX2o24LVq0uJdfi', 'Carrer de gràcia nº72, Bloque ', 'Sabadell', 5555555, 2, ''),
('stanley@gmail.com', 'stanley', 'stanley', 'stanley', '$2y$10$6Qzb8RRZeyhIv4okcjItQuMuZkIVModU/e65JWFjhWWG1SFPexkF6', 'carrer de gracia', 'sabadell', 8203, 3, ''),
('caraplato@gmail.com', 'dsa', 'dwea', 'dwa', '$2y$10$OehH.r8vqhxdgIRto74WYOuxb0/InMVZDKx1A1E2e/Wz0pq.YTYOW', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 4, ''),
('ernest@gmail.com', 'er', 're', 're', '$2y$10$Q46e870woFfrMUS5orUeL.jUVl4tghd61S9Nzv/X9/yYZSIbCm1Zu', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 5, ''),
('fheusow@fe', 'paco', 'fheupife', 'Hernández', '$2y$10$jw2erzTwd2oUu0bfUhUr/.KooCY9Rz8bVa7dK63wVfZfYCNKs6o26', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 6, ''),
('hola@gmail.com', 'dwa', 'dwa', 'dwa', '$2y$10$pt2a2PHv18t7o16N3nskpumR.hwXvD8/RhbvjxoQ6ybuourVzSaz2', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 7, ''),
('gol@gmail.com', '<script></script>ipt', 'dwe', 'dw', '$2y$10$m4TwGCEpZmtBxvsO6SiePu/yw9E1zmOnaO7pszZk8/iue5M3iWVCS', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 8, ''),
('bufalo@gmail.com', 'ipt', 'dewas', 'dwa', '$2y$10$O2tIrlnR4yUoFJLGTAQEJeEvXY55NJYF3dBO4aa.WbsvuVv9nbuzi', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 9, ''),
('dwnbai@gmail.com', 'dhjfi', 'dji', 'ji', '$2y$10$pMDydrW/jxcEPGMw5sOH5.VrstYMDRCNKtJsnUGWBt4Ab7Euprxle', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 10, ''),
('fnhesujok@gmail.com', 'hfiouerp', 'fhepou', 'fehup', '$2y$10$lEmQvFa4XmSk6i8i4YKLreU5sDoRApXLr.FVf/H/hMJfrgYXMFvuC', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 12, ''),
('q@gmail.com', 'dwa', 'dwea', 'dwa', '$2y$10$/6a55NNfSOhnqA7C.PPUZe8PSXGdiV3qxz.YhWsRNF55E6ckAj/Gu', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 13, ''),
('e@gmail.com', 'dwbhau', 'dwhuai', 'dwui', '$2y$10$PQ0rzRdl/MVGZdTSl5j/TuFWH5iOk8AQVNdIpZ91q8q0luHfZCp0C', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 14, ''),
('uno@gmail.com', 'paco', 'dnbwpiuj', 'fehou', '$2y$10$q0jHfh0ADo6tw9njfJtjguswcavB5fIzYAPycWFSiRjbmF9C3zzg6', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 15, ''),
('pepa@gmail.com', 'pepa', 'flores', 'dolores', '$2y$10$ggHpZQkenQJkmC0IaSQ1nO.DIOowJL4hCCbvcWqzLaJsMJLY.dDX2', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 16, ''),
('pepe@gmail.como', 'pepe', 'paco', 'ere', '$2y$10$ysfJ9Oij01fEotIzuUdeI.2GpCvTBK2Yp7/wXC7P5UQUqziVXu14i', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 17, ''),
('adios@gmail.com', 'defu', 'huwed', 'dhwu', '$2y$10$AhahUnuOY7g.ri7XzG4GCe3RyiW4Kd82vLRxLhI51HSmkQvE4DeEO', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 18, 'imagen_perfil_usuario_18'),
('melon@gmail.com', 'Melon', 'dei', 'deji', '$2y$10$99pgOTAf7.nTIBWZOVkL7OBNx7SB5EApCJMaqLBySM6/qgDRlPPkG', 'Carrer del Camp 3B', 'Cerdanyola del Vallès', 8290, 19, '');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idListaPedidos`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Índexs per a la taula `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índexs per a la taula `listapedidos`
--
ALTER TABLE `listapedidos`
  ADD KEY `idPedido` (`idPedido`);

--
-- Índexs per a la taula `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índexs per a la taula `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índexs per a la taula `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idListaPedidos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT per la taula `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT per la taula `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT per la taula `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restriccions per a la taula `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
