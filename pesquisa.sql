-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2020 às 02:58
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitecovid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_profissional` int(4) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `idade` varchar(5) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `instrucao` varchar(20) NOT NULL,
  `profissao` varchar(20) NOT NULL,
  `doenca` varchar(20) NOT NULL,
  `tipodoenca1` varchar(20) DEFAULT NULL,
  `tipodoenca2` varchar(20) DEFAULT NULL,
  `tipodoenca3` varchar(20) DEFAULT NULL,
  `tipodoenca4` varchar(20) DEFAULT NULL,
  `estabelecimento` varchar(20) NOT NULL,
  `tipoest` varchar(20) NOT NULL,
  `epis` varchar(20) NOT NULL,
  `sintomas` varchar(20) NOT NULL,
  `data1` date NOT NULL,
  `teste` varchar(20) NOT NULL,
  `data2` date NOT NULL,
  `tipotest` varchar(20) NOT NULL,
  `resultado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id_profissional`, `sexo`, `idade`, `bairro`, `instrucao`, `profissao`, `doenca`, `tipodoenca1`, `tipodoenca2`, `tipodoenca3`, `tipodoenca4`, `estabelecimento`, `tipoest`, `epis`, `sintomas`, `data1`, `teste`, `data2`, `tipotest`, `resultado`) VALUES
(3, 'M', '30-39', 'Santa Cecilia', 'Superior', 'Farmaceutico', 'sim', 'diabetes', '', '', 'outros', 'publico', 'farmacias', 'sim', 'sim', '2020-08-30', 'sim', '2020-08-31', 'sorologia', 'positivo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id_profissional`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id_profissional` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
