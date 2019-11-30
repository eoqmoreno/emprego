-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2019 às 22:33
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `emprego`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `quantidade`) VALUES
(1, 'Designer', 10),
(2, 'Vendedora', 5),
(3, 'Mecânico', 10),
(4, 'Analista de sistemas', 10),
(5, 'Fisioterapeuta', 5),
(6, 'Engenheiro de software', 5),
(7, 'Estatístico', 5),
(8, 'Maestro', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculo`
--

CREATE TABLE `curriculo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `dataDeNascimento` varchar(255) NOT NULL,
  `escolaridade` varchar(255) NOT NULL,
  `profissao` varchar(255) NOT NULL,
  `experiencia` longtext NOT NULL,
  `curso` longtext NOT NULL,
  `habilidades` longtext NOT NULL,
  `senha` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curriculo`
--

INSERT INTO `curriculo` (`id`, `nome`, `email`, `telefone`, `dataDeNascimento`, `escolaridade`, `profissao`, `experiencia`, `curso`, `habilidades`, `senha`, `foto`) VALUES
(33, 'George Moreno de Oliveira', 'gmodeveloper@gmail.com', '(85) 9 9985-1155', '2000-08-25', 'Ensino superior incompleto', 'Designer', '', '', '', 'gmodev123,', './img/users/'),
(34, 'Oia', 'oia@oia.com', '(88) 8 8888-8888', '', '', '', '', '', '', 'oia', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `horas` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `categoria`, `local`, `horas`, `endereco`, `foto`) VALUES
(1, 'Cozinheira', 'Tâmperro', '10', 'Rua Oscar Barbosa, N: 270', './img/vagas/cozinheira.jpeg'),
(2, 'Designer', 'Gráfic', '5', '', './img/vagas/design.jpg'),
(3, 'Vendedor', 'MaxStore', '5', '', './img/vagas/vendedor.jpg'),
(4, 'Mecânico', 'LosCarros', '5', '', './img/vagas/mecanico.jpg'),
(5, 'Mecânico', 'CarAlindo', '20', '', './img/vagas/mecanico.jpg'),
(6, 'Mecânico', 'AmaCar', '40', '', './img/vagas/mecanico.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curriculo`
--
ALTER TABLE `curriculo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `curriculo`
--
ALTER TABLE `curriculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
