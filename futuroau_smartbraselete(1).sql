-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2014 às 02:45
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futuroau_smartbraselete`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(45) COLLATE utf8_bin NOT NULL,
  `endCliente` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefoneCliente` varchar(11) COLLATE utf8_bin NOT NULL,
  `rgCliente` bigint(11) NOT NULL,
  `cpfCliente` bigint(11) NOT NULL,
  `niverCliente` date NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `endCliente`, `telefoneCliente`, `rgCliente`, `cpfCliente`, `niverCliente`) VALUES
(45, 'Marlon Oliveira Barbosa', 'Rua vale do rio doce 106', '960304672', 491339781, 41541140850, '1993-06-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_has_pulseira`
--

CREATE TABLE IF NOT EXISTS `cliente_has_pulseira` (
  `statusPulseira` tinyint(1) NOT NULL,
  `dataEntrada` date DEFAULT NULL,
  `idPulseira` int(25) NOT NULL,
  `idCliente` varchar(11) COLLATE utf8_bin NOT NULL,
  `idClientePuseira` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idClientePuseira`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=75 ;

--
-- Extraindo dados da tabela `cliente_has_pulseira`
--

INSERT INTO `cliente_has_pulseira` (`statusPulseira`, `dataEntrada`, `idPulseira`, `idCliente`, `idClientePuseira`) VALUES
(1, '2014-05-09', 161664136, '45', 74);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFuncionario` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefoneFuncionario` varchar(14) COLLATE utf8_bin NOT NULL,
  `endFuncionario` varchar(45) COLLATE utf8_bin NOT NULL,
  `rgFuncionario` varchar(15) COLLATE utf8_bin NOT NULL,
  `cpfFuncionario` varchar(13) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nomeFuncionario`, `telefoneFuncionario`, `endFuncionario`, `rgFuncionario`, `cpfFuncionario`) VALUES
(7, 'Marlon Oliveira Barbosa', '1139794291', 'rua vale do rio doce 106', '491339785', '41541145850'),
(10, 'Jessica Tomoda', '39794291', 'Rua Cerri', '491339781', '41541140850'),
(11, 'Diego Goulart', '962244874', 'Rua daniel cerri 369', '1111111111', '11111111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idFuncionario` int(11) NOT NULL,
  `login` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(130) COLLATE latin1_general_ci NOT NULL,
  `data_login` datetime NOT NULL,
  `permissao` int(11) NOT NULL,
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idLogin`),
  KEY `idFuncionario` (`idFuncionario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idFuncionario`, `login`, `senha`, `data_login`, `permissao`, `idLogin`) VALUES
(7, 'Marlon', 'e10adc3949ba59abbe56e057f20f883e', '2014-02-21 21:53:00', 0, 1),
(10, 'jessica', 'e10adc3949ba59abbe56e057f20f883e', '2014-05-09 23:05:03', 0, 3),
(11, 'Diego', 'e10adc3949ba59abbe56e057f20f883e', '2014-05-12 23:05:44', 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `idFuncionario` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `valorTotalPedido` double NOT NULL,
  `dataPedido` datetime NOT NULL,
  `numeroPedidoUniqid` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idFuncionario_idx` (`idFuncionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `idFuncionario`, `idCliente`, `valorTotalPedido`, `dataPedido`, `numeroPedidoUniqid`) VALUES
(41, 7, 4, 811.68, '2014-04-19 05:24:52', '8797ed46d54e3ac160d23458621bf9e4'),
(42, 7, 4, 1082.24, '2014-04-19 05:27:03', 'c37a4b8d1fcf081c1184ff8a1aa13de7'),
(43, 7, 4, 230.36, '2014-04-19 05:28:50', '3ae13e5dde749e7ef166de7d14a015a7'),
(44, 7, 4, 270.56, '2014-04-19 05:29:16', 'ee3e8c51fff5e327de2f75748d8e6c51'),
(45, 7, 4, 270.56, '2014-04-19 05:30:34', 'e387701de6bcf38df382adb8c4271a64'),
(46, 7, 4, 270.56, '2014-04-19 08:08:53', 'a991d91f8c19d95ca98ad36f53fa37c8'),
(47, 7, 4, 961.64, '2014-04-19 08:12:50', 'a03e7ae2f055cef1493559868055dedb'),
(48, 7, 4, 230, '2014-04-19 09:30:17', '43c3a99f4ab2ba255bafa54fbff4755d');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_has_produto`
--

CREATE TABLE IF NOT EXISTS `pedido_has_produto` (
  `QuantProduto` int(5) NOT NULL,
  `totalProduto` float NOT NULL,
  `idPedidoProduto` int(11) NOT NULL AUTO_INCREMENT,
  `idPedido` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPedidoProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `pedido_has_produto`
--

INSERT INTO `pedido_has_produto` (`QuantProduto`, `totalProduto`, `idPedidoProduto`, `idPedido`, `idProduto`) VALUES
(1, 270.56, 6, 41, 4),
(2, 541.12, 7, 41, 4),
(1, 270.56, 8, 42, 4),
(3, 811.68, 9, 42, 4),
(1, 230.36, 10, 43, 12),
(1, 270.56, 11, 44, 4),
(1, 270.56, 12, 45, 4),
(1, 270.56, 13, 46, 4),
(1, 270.56, 14, 47, 4),
(3, 691.08, 15, 47, 12),
(1, 230, 16, 48, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(45) COLLATE utf8_bin NOT NULL,
  `valorProduto` double NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nomeProduto`, `valorProduto`) VALUES
(4, 'catuaba', 270.56),
(12, 'Viagra', 230.36),
(13, 'Viagra', 230),
(14, 'Viagra', 230),
(15, 'Viagra', 230),
(16, 'Viagra', 230),
(17, 'Viagra', 230),
(18, 'Viagra', 230);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pulseira`
--

CREATE TABLE IF NOT EXISTS `pulseira` (
  `idPulseira` int(11) NOT NULL AUTO_INCREMENT,
  `corPulseira` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idPulseira`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pulseira_id`
--

CREATE TABLE IF NOT EXISTS `pulseira_id` (
  `idTag` int(25) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idTag`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
