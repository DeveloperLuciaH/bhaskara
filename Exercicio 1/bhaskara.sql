-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jul-2021 às 05:41
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bhaskara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bhaskara_php`
--

CREATE TABLE `bhaskara_php` (
  `id` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `delta` int(11) NOT NULL,
  `x1` decimal(6,2) NOT NULL,
  `x2` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bhaskara_php`
--

INSERT INTO `bhaskara_php` (`id`, `a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES
(1, 22, 1999, 22, 3994065, '0.00', '-91.00'),
(2, 150, 150, 30, 4500, '0.00', '-1.00'),
(3, 22, 1999, 22, 3994065, '-0.01', '-90.85'),
(4, 22, 1999, 22, 3994065, '-0.01', '-90.85'),
(5, 22, 1999, 22, 3994065, '-0.01', '-90.85'),
(6, 150, 150, 30, 4500, '-0.28', '-0.72');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bhaskara_php`
--
ALTER TABLE `bhaskara_php`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bhaskara_php`
--
ALTER TABLE `bhaskara_php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
