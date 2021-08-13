-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Ago-2021 às 20:22
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
(6, 150, 150, 30, 4500, '-0.28', '-0.72'),
(7, 22, 1999, 22, 3994065, '-0.01', '-90.85'),
(8, 2, 5, 3, 1, '-1.00', '-1.50'),
(9, 2, 6, 3, 12, '-0.63', '-2.37'),
(10, 2, 6, 4, 4, '-1.00', '-2.00'),
(11, 2, 5, 3, 1, '-1.00', '-1.50'),
(12, 2, 6, 3, 12, '-0.63', '-2.37'),
(13, 2, 6, 4, 4, '-1.00', '-2.00'),
(14, 2, 5, 3, 1, '-1.00', '-1.50'),
(15, 2, 6, 3, 12, '-0.63', '-2.37'),
(16, 2, 6, 4, 4, '-1.00', '-2.00'),
(17, 2, 5, 3, 1, '-1.00', '-1.50'),
(18, 2, 6, 3, 12, '-0.63', '-2.37'),
(19, 2, 6, 4, 4, '-1.00', '-2.00'),
(20, 2, 5, 3, 1, '-1.00', '-1.50'),
(21, 2, 6, 3, 12, '-0.63', '-2.37'),
(22, 2, 6, 4, 4, '-1.00', '-2.00'),
(23, 2, 6, 4, 4, '-1.00', '-2.00'),
(24, 2, 7, 4, 17, '-0.72', '-2.78'),
(25, 2, 7, 5, 9, '-1.00', '-2.50'),
(26, 2, 7, 6, 1, '-1.50', '-2.00'),
(27, 3, 7, 4, 1, '-1.00', '-1.33');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
