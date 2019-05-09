-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Maio-2019 às 05:30
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anatomy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `pedidoId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `pedidoId`) VALUES
(4, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(3, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(5, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(6, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(7, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(8, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(9, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(10, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7),
(11, 'Produto Finalizado', 'Aqui estÃ¡ seu produto! Do jeitinho que vocÃª pediu!!!', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `produto` varchar(255) NOT NULL,
  `clienteId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pendente',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `categoria`, `titulo`, `descricao`, `produto`, `clienteId`, `status`) VALUES
(5, 'Digital', 'eu quero um serviÃ§o', 'quero que meu serviÃ§o seja assim, assado!!!', 'Folder Paginado atÃ© 10 pgs - Materiais Impressos', 6, 'pendente'),
(6, 'Digital', 'eu gostaria de um serviÃ§o', 'lalalal teste aqui', 'Cover de facebook - Materiais Digitais', 7, 'pendente'),
(7, 'Selecione', 'mais um? serÃ¡ que rola?', 'teste de UTF-8 !@#$%Â¨&*() Ã©Ã©Ã©Ã£Ã£Ã£Ã´Ã´Ã´Ã´', 'Envelope carta - Materiais Impressos', 7, 'pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL DEFAULT 'outros',
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `funcao` varchar(255) DEFAULT 'cliente',
  `sexo` varchar(1) NOT NULL,
  `nascimento` varchar(255) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `cep` varchar(21) DEFAULT NULL,
  `telefone` varchar(21) DEFAULT NULL,
  `funcionario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `email`, `endereco`, `senha`, `funcao`, `sexo`, `nascimento`, `cpf`, `cep`, `telefone`, `funcionario`) VALUES
(1, 'DOM', 'admin', 'agenciadomcc@gmail.com', '', 'saopio19#', 'admin', 'O', '', '', '', '', ''),
(7, 'cliente2', 'cliente2', 'cliente@email.com', 'meu endereÃ§o, nÂº 321', 'cliente2', 'cliente', 'F', '1999-12-29', '999999999', '93044-380', '9999999', 'DOM'),
(6, 'Cliente Teste', 'cliente', 'cliente@email.com', 'Rua dos Bobos, nÂº 0', 'cliente', 'cliente', 'M', '1998-12-12', '123.456.789-10', '12345-678', '(51)99822-1777', 'DOM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
