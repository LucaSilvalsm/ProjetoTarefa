-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/04/2024 às 07:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefa`
--

CREATE TABLE `tarefa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `dataInicial` date DEFAULT NULL,
  `dataFinal` date DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `detalhe` text DEFAULT NULL,
  `nomeTarefa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tarefa`
--

INSERT INTO `tarefa` (`id`, `nome`, `dataInicial`, `dataFinal`, `telefone`, `detalhe`, `nomeTarefa`) VALUES
(25, 'Lucas da Silva Moreira', '2024-05-07', '2024-06-30', '(21) 99346-5865', 'asasasadas            ', 'Venda de Roupa'),
(26, 'David Carvalho de Souza', '2024-05-07', '2025-05-07', '(21) 99346-5865', 'Venda suas roupas onlines', 'Venda de Roupa'),
(27, 'Thiago de Oliveira Ferreira', '2024-05-05', '2024-05-20', '(21) 99346-5865', '                        ', 'Venda de Roupa'),
(28, 'Leonardo Ferreira', '2024-04-05', '2024-04-10', '(11) 98545-1395', '            ', 'Venda de Roupa'),
(29, 'Thomas da Silva Moreira', '2024-02-05', '2024-11-02', '(21) 99346-5865', '                        ', 'Venda de Roupa'),
(30, 'Felipe da Silva Moreira', '2024-05-10', '2024-05-20', '(21) 99346-5865', '                        ', 'Venda de Roupa'),
(34, 'Rayane Maciel De Oliveira', '2024-03-07', '2024-07-15', '(21) 98565-3895', 'Nessa aula sera realizada os topico inicias de farmacia            ', 'Aula de Farmacia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tarefa`
--
ALTER TABLE `tarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefa`
--
ALTER TABLE `tarefa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
