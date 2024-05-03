-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Maio-2024 às 14:50
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
-- Estrutura da tabela `cursos_cem_online`
--

DROP TABLE IF EXISTS `cursos_cem_online`;
CREATE TABLE IF NOT EXISTS `cursos_cem_online` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_curso_cem` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `modalidade02` varchar(100) NOT NULL,
  `duracao02` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `preco02` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `turno02` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `saiba_mais` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cursos_cem_online`
--

INSERT INTO `cursos_cem_online` (`id`, `nome_curso_cem`, `modalidade02`, `duracao02`, `preco02`, `turno02`, `saiba_mais`, `status`) VALUES
(2, 'Pedagogia', '100% online', '2 anos', '199,00', 'faz seu horário', '', '0'),
(1, 'Letras', '100% online', '2 anos', '199,00', 'faz seu horário', '', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_semipresencial`
--

DROP TABLE IF EXISTS `cursos_semipresencial`;
CREATE TABLE IF NOT EXISTS `cursos_semipresencial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `id_modalidade02` int NOT NULL,
  `duracao` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `turno` varchar(100) NOT NULL,
  `saiba_mais` varchar(100) NOT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cursos_semipresencial`
--

INSERT INTO `cursos_semipresencial` (`id`, `nome_curso`, `modalidade`, `id_modalidade02`, `duracao`, `preco`, `turno`, `saiba_mais`, `status`) VALUES
(1, 'Letras', 'semipresencial', 1, '4 anos', '300,00', 'manhã', '', 0),
(2, 'Pedagogia', 'semipresencial', 2, '4 anos', '300,00', 'noturno', '', 1);

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
