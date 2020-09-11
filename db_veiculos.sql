-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 11-Set-2020 às 02:19
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nmCliente` varchar(255) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL,
  `enderecoCliente` varchar(255) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`idCliente`, `nmCliente`, `cpfCliente`, `enderecoCliente`) VALUES
(1, 'Rodrigo Walckiers', '120.456.789-02', 'Rua Teste - Teste, 000'),
(2, 'Admin teste', '000000000000', 'Rua Teste - Teste, 000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locacao`
--

DROP TABLE IF EXISTS `tb_locacao`;
CREATE TABLE IF NOT EXISTS `tb_locacao` (
  `idLocacao` int(11) NOT NULL AUTO_INCREMENT,
  `codLocacao` varchar(20) NOT NULL,
  `cpfUsuario` varchar(14) NOT NULL,
  `dtInicio` date NOT NULL,
  `dtTermino` date NOT NULL,
  `precoTotal` double(18,2) NOT NULL,
  `placaVeiculo` varchar(8) NOT NULL,
  `statusLocacao` varchar(50) NOT NULL,
  PRIMARY KEY (`idLocacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

DROP TABLE IF EXISTS `tb_veiculos`;
CREATE TABLE IF NOT EXISTS `tb_veiculos` (
  `idVeiculo` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `ano` int(4) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `precoDiario` double(18,2) NOT NULL,
  `statusAluguel` int(1) DEFAULT '0',
  PRIMARY KEY (`idVeiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`idVeiculo`, `placa`, `modelo`, `ano`, `cor`, `precoDiario`, `statusAluguel`) VALUES
(1, 'API-0000', 'Corsa', 2008, 'Preto', 250.00, 0),
(2, 'API-1000', 'Civic', 2012, 'Parta', 250.00, 0),
(5, 'API-2020', 'Fusca', 1967, 'Fusca', 65.00, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
