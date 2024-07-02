-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/07/2024 às 21:27
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `AutoBD`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `automoveis`
--

INSERT INTO `automoveis` (`id`, `marca`, `modelo`, `ano`, `km`, `preco`) VALUES
(16, 'Nissan', 'Versa', 2021, 31679, 89000),
(17, 'Citroen', 'Cactus ', 2019, 20000, 80000),
(18, 'teste', 'teste', 1978, 1, 20000),
(19, 'Fiat1', 'Fiat1', 2024, 1, 100000),
(20, 'Ferrari', 'Ferrari', 1994, 123, 1000000),
(21, 'Volvo', 'V', 2014, 100, 778788),
(22, 'teste', 'teste', 2000, 12, 5000),
(23, 'BYD', 'BYD', 2024, 0, 150000),
(24, 'Nissan', 'Versa', 2024, 0, 100000),
(25, 'Ferrari', 'Ferrari', 1996, 12, 7000000),
(26, 'fiat', 'Toro', 2018, 100, 10000),
(27, 'Nissan', 'Versa', 2023, 0, 56700),
(28, 'teste', 'teste', 2005, 123, 34000),
(29, 'Chevrollet', 'Onyx', 2021, 40000, 60000);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
