-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Maio-2024 às 00:50
-- Versão do servidor: 8.2.0
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `novo_nem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) NOT NULL,
  `duracao` varchar(100) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `turno` varchar(100) NOT NULL,
  `turno02` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome_curso`, `duracao`, `modalidade`, `valor`, `turno`, `turno02`) VALUES
(1, 'Pedagogia', '3 anos', 'semipresencial', '350,00', '', ''),
(2, 'Matematica', '2 anos e meio', '', '', '', ''),
(3, 'Educação Física', '4 anos', '', '', '', ''),
(4, 'Engenharia', '5 anos', '', '', '', ''),
(5, 'Pedagogia', '3 anos', '100% online', '230,00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_destaques`
--

DROP TABLE IF EXISTS `cursos_destaques`;
CREATE TABLE IF NOT EXISTS `cursos_destaques` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_curso` int NOT NULL,
  `nome_curso` varchar(100) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `modalidade02` varchar(100) NOT NULL,
  `id_modalidade` int NOT NULL,
  `duracao` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `turno` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cursos_destaques`
--

INSERT INTO `cursos_destaques` (`id`, `id_curso`, `nome_curso`, `modalidade`, `modalidade02`, `id_modalidade`, `duracao`, `preco`, `turno`) VALUES
(1, 1, 'Pedagogia', 'Semipresencial', '100% online', 1, '3 anos', '299,99', 'Noite'),
(2, 0, 'Engenharia', 'Semipresencial', '100% online', 0, '3 anos', '299,99', 'Faz no seu horário'),
(3, 0, 'Educação Física', 'Semipresencial', '100% online', 0, '3 anos', '299,99', 'Faz no seu horário'),
(4, 1, 'Pedagogia', '100% online', 'Semipresencial', 2, '3 anos e meio', '225,99', 'Faz no seu horário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

DROP TABLE IF EXISTS `modalidades`;
CREATE TABLE IF NOT EXISTS `modalidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_modalidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `modalidades`
--

INSERT INTO `modalidades` (`id`, `tipo_modalidade`) VALUES
(1, 'Semipresencial'),
(2, '100% online');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
