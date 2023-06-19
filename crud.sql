-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/06/2023 às 04:12
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudhenning`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `crud`
--

CREATE TABLE `crud` (
  `id` int(100) NOT NULL,
  `nome_jogo` varchar(100) NOT NULL,
  `genero_jogo` varchar(100) NOT NULL,
  `preco_jogo` varchar(100) NOT NULL,
  `prioridade` varchar(100) NOT NULL,
  `pretende_comprar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `crud`
--

INSERT INTO `crud` (`id`, `nome_jogo`, `genero_jogo`, `preco_jogo`, `prioridade`, `pretende_comprar`) VALUES
(7, 'Metal Gear', 'Stealth', 'R$40,00', '1', 'sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
