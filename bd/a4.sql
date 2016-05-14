-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 04:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a4`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `contrasena` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `contrasena`) VALUES
(2, 'Mariam', 'Torres', '4146376903', 'mariamtorres06@gmail.com', '123'),
(3, 'David', 'Basabe', '04146309265', 'edubasabe1@gmail.com', '456456'),
(4, 'Edison', 'Villalobos', '4146183921', 'EDISON2@GMAIL.COM', 'EDI'),
(5, 'JULIAN', 'JUL', '5445678', 'JUL@GMAIL.COM', '1231234'),
(6, 'julio', 'lopez', '85853937', 'juito@gmail.com', '123123'),
(7, 'juan', 'perez', '8394004', 'j@tal.com', '1234'),
(8, 'calamardo', 'arenita', '12322233', 'cal@tal.com', '1234234'),
(9, 'luis', 'landa', '3334445', 'll@l.com', '456567'),
(10, 'daniel', 'lo', '22334', 'j@ta.as', '1233'),
(11, 'dayana', 'mendoza', '0298', 'dy@r.com', '4556'),
(12, 'carlos', 'gol', '9887', 'cg@g.com', '998665'),
(13, 'jose', 'blah', '131312', 'm@gmail.com', '1323123'),
(14, 'laura', 'lopez', '4567', 'l@lo.com', '123'),
(15, 'ofe', 'lion', '458', 'o@le.com', '123'),
(16, 'lucas', 'lu', '458', 'llu@lu.com', '123'),
(17, 'lo', 'ren', '487', 'zo@as.com', '123'),
(18, 'lorenzo', ' mendoza', '457', 'l@me.com', '145');

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
--

CREATE TABLE `detalle` (
  `idDetalle` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detalle`
--

INSERT INTO `detalle` (`idDetalle`, `Nombre`) VALUES
(1, 'tamano'),
(2, 'papel'),
(4, 'caras'),
(5, 'observaciones'),
(6, 'calidad'),
(7, 'armado'),
(8, 'copias'),
(9, 'pag-internas'),
(10, 'uv'),
(11, 'bordes'),
(12, 'anillado');

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `Producto_idProducto` int(11) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL,
  `nombrearchivo` varchar(45) NOT NULL,
  `Link` varchar(45) NOT NULL,
  `Cantidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orden_has_detalle`
--

CREATE TABLE `orden_has_detalle` (
  `Orden_idOrden` int(11) NOT NULL,
  `Detalle_idDetalle` int(11) NOT NULL,
  `Valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreproducto` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreproducto`, `Descripcion`) VALUES
(1, 'tarjetapresentacion', ''),
(2, 'volantes', ''),
(3, 'pendones', ''),
(4, 'factureros', ''),
(5, 'calendarios', ''),
(6, 'impindividual', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`,`Producto_idProducto`,`Cliente_idCliente`),
  ADD KEY `fk_Orden_Producto_idx` (`Producto_idProducto`),
  ADD KEY `fk_Orden_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indexes for table `orden_has_detalle`
--
ALTER TABLE `orden_has_detalle`
  ADD PRIMARY KEY (`Orden_idOrden`,`Detalle_idDetalle`),
  ADD KEY `fk_Orden_has_Detalle_Detalle1_idx` (`Detalle_idDetalle`),
  ADD KEY `fk_Orden_has_Detalle_Orden1_idx` (`Orden_idOrden`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `detalle`
--
ALTER TABLE `detalle`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `fk_Orden_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_Producto` FOREIGN KEY (`Producto_idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orden_has_detalle`
--
ALTER TABLE `orden_has_detalle`
  ADD CONSTRAINT `fk_Orden_has_Detalle_Detalle1` FOREIGN KEY (`Detalle_idDetalle`) REFERENCES `detalle` (`idDetalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_has_Detalle_Orden1` FOREIGN KEY (`Orden_idOrden`) REFERENCES `orden` (`idOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
