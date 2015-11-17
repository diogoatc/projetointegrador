-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2015 às 17:22
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `ra` int(11) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `regime` varchar(512) NOT NULL,
  `curso` varchar(512) NOT NULL,
  PRIMARY KEY (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra`, `nome`, `regime`, `curso`) VALUES
(1, 'aaa', 'aaaa', 'aaaaaa'),
(2, '11', '111', '1111'),
(3, '111', '1111', '11111'),
(4, '11111', '11111', '1111'),
(5, '11', '11', '1'),
(6, '111', '1', '11'),
(7, '213', '123', '123'),
(8, '123', '123', '123'),
(9, '99', '99', '9'),
(10, '11', '11', '11'),
(12, '11', '1', '11'),
(13, '11', '11', '111'),
(14, '111', '11', '11'),
(15, '11', '11', '111'),
(97528, 'Wesley Silva', 'Externato', 'Sistemas'),
(100461, 'Wesley Ramos', 'Internato', 'Sistemas'),
(104696, 'Diogo Lopes', 'Externato', 'Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE IF NOT EXISTS `materiais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materiais` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id`, `materiais`) VALUES
(1, 'Bola de Campo'),
(2, 'Bola de Basquete'),
(3, 'Bola de Volei'),
(4, 'Bola de Handball'),
(5, 'Bola de Tenis'),
(6, 'Kit Tenis de mesa'),
(7, 'Coletes'),
(8, 'Bola de futsal'),
(9, 'Bola quadra de areia'),
(10, 'Bicicleta'),
(11, 'Bola de Vôlei de areia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relac_aluno_material`
--

CREATE TABLE IF NOT EXISTS `relac_aluno_material` (
  `ordemservico` int(11) NOT NULL AUTO_INCREMENT,
  `ra_aluno` int(11) DEFAULT NULL,
  `id_material` int(11) DEFAULT NULL,
  PRIMARY KEY (`ordemservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Extraindo dados da tabela `relac_aluno_material`
--

INSERT INTO `relac_aluno_material` (`ordemservico`, `ra_aluno`, `id_material`) VALUES
(57, 104696, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
