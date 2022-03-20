-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2022 às 03:44
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
(2022, 'senha');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(5) NOT NULL,
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

INSERT INTO `cadastro` (`id`, `email`, `apartamento`, `bloco`, `nome`, `celular`, `Data_de_cadastro`, `hora`) VALUES
(1998, 'lubinsebastienlionel@gmail.com', '107', 'F', 'Sebastien Lionel Lubin', '49985048890', '2022-03-19', '21:52:16');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
