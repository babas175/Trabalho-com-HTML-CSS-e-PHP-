-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2022 às 18:04
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `senha`) VALUES
(2023, 'senha'),
(2024, 'senha'),
(2025, 'senha'),
(2026, 'senha'),
(0, 'Babas175');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `nome` varchar(60) NOT NULL,
  `bloco` varchar(1) NOT NULL,
  `apartamento` varchar(3) NOT NULL,
  `tipo_de_mudancas` varchar(50) NOT NULL,
  `data_escolhida` varchar(50) NOT NULL,
  `hora` time NOT NULL DEFAULT current_timestamp(),
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`nome`, `bloco`, `apartamento`, `tipo_de_mudancas`, `data_escolhida`, `hora`, `data`) VALUES
('', '', '', '', '', '11:43:16', '2022-01-05'),
('', '', '', '', '', '11:43:21', '2022-01-05'),
('Sebastien Lionel Lubin', 'C', '109', 'Entra', '20/06/2022', '11:43:34', '2022-01-05'),
('Rosnord Cupidon', 'D', '366', 'Saida', '20/06/2022', '13:22:18', '2022-01-05'),
('felanda saint juste', 'D', '107', 'Entra', '21/06/2022', '13:33:18', '2022-01-05'),
('Kerby Lovince', 'C', '206', 'Saida', '25/12/2022', '13:34:56', '2022-01-05'),
('Richarlisson Andrade', 'B', '654', 'Entra', '26/04/2022', '13:35:37', '2022-01-05'),
('Edson Santos', 'G', '987', 'Entra', '21/06/2022', '13:37:23', '2022-01-05'),
('Black Parents', 'B', '109', 'Entra', '20/06/2022', '13:42:14', '2022-01-05'),
('', '', '', '', '', '14:26:32', '2022-01-05'),
('', '', '', '', '', '15:07:26', '2022-01-05'),
('', '', '', '', '', '15:07:48', '2022-01-05'),
('', '', '', '', '', '15:17:46', '2022-01-05'),
('', '', '', '', '', '15:19:06', '2022-01-05'),
('', '', '', '', '', '22:29:36', '2022-01-09'),
('bababs lubin', 'D', '109', 'Entrada', '6000', '22:33:47', '2022-01-09'),
('', '', '', '', '', '15:29:01', '2022-01-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `email` varchar(40) NOT NULL,
  `apartamento` varchar(3) NOT NULL,
  `bloco` varchar(1) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `Data_de_cadastro` date DEFAULT current_timestamp(),
  `hora` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`email`, `apartamento`, `bloco`, `nome`, `celular`, `Data_de_cadastro`, `hora`) VALUES
('', '', '', '', '', '2022-01-05', '16:44:18'),
('', '', '', '', '', '2022-01-05', '16:45:53'),
('', '', '', '', '', '2022-01-05', '16:47:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservacao`
--

CREATE TABLE `reservacao` (
  `nome` varchar(20) NOT NULL,
  `bloco` varchar(1) NOT NULL,
  `apartamento` varchar(3) NOT NULL,
  `espaco` varchar(60) NOT NULL,
  `data_escolhida` varchar(60) NOT NULL,
  `hora` varchar(60) NOT NULL,
  `data e hora no site` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservacao`
--

INSERT INTO `reservacao` (`nome`, `bloco`, `apartamento`, `espaco`, `data_escolhida`, `hora`, `data e hora no site`) VALUES
('', '', '', '', '', '', '2022-01-05 14:21:55'),
('', '', '', '', '', '', '2022-01-05 14:23:34'),
('', '', '', '', '', '', '2022-01-05 14:23:37'),
('', '', '', '', '', '', '2022-01-05 14:24:06'),
('', '', '', '', '', '', '2022-01-05 14:25:50'),
('', '', '', '', '', '', '2022-01-05 14:26:36'),
('Sebastien Lionel Lub', 'D', '', 'Saida', '21/06/2022', 'Saida', '2022-01-05 14:28:06'),
('Sebastien Lionel Lub', 'D', '109', 'Saida', '21/06/2022', 'Saida', '2022-01-05 14:28:44'),
('Black Parents', 'F', '107', 'Kiosque 4', '21/06/2022', 'Saida', '2022-01-05 14:33:31'),
('Black Parents', 'F', '107', 'Kiosque 4', '21/06/2022', 'Saida', '2022-01-05 14:33:59'),
('felanda saint juste', 'B', '107', 'Salao de festa 1', '20/06/2022', '12h', '2022-01-05 14:34:51'),
('Rosnord Cupidon', 'D', '109', 'Kiosque 1', '21/06/2022', '21h', '2022-01-05 14:41:09'),
('Sebastien Lionel Lub', 'C', '109', 'Kiosque 2', '25/12/2022', '12h', '2022-01-05 14:44:04'),
('Rosnord Cupidon', 'G', '', 'Kiosque 1', '21/06/2022', '11h', '2022-01-05 14:45:08'),
('Black Parents', 'F', '107', 'Kiosque 1', '20/06/2022', '11h', '2022-01-05 14:45:19'),
('', 's', '', 'selecione', '', 'selecione', '2022-01-05 14:45:39'),
('', 's', '', 'selecione', '', 'selecione', '2022-01-05 14:46:11'),
('', '', '', '', '', '', '2022-01-09 22:17:01'),
('felanda saint juste', 'C', '109', 'Kiosque 2', '26/04/2022', '19h', '2022-01-09 22:17:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
