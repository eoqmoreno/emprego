-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2019 às 04:07
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
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `idc` int(255) NOT NULL,
  `idv` int(255) NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  `coracao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `idc`, `idv`, `objetivo`, `coracao`) VALUES
(2, 33, 10, 'Ganhar dinheiro', 0);

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

INSERT INTO `categorias` (`nome`, `quantidade`) VALUES
('Designer', 0),
('Vendedora', 0),
('Mecânico', 0),
('Analista de sistemas', 0),
('Fisioterapeuta', 0),
('Engenheiro de software', 0),
('Estatístico', 0),
('Cozinheira', 0);

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
(33, 'George Moreno de Oliveira', 'gmodeveloper@gmail.com', '(85) 9 9985-1155', '2000-08-25', 'Ensino superior incompleto', 'Designer', '', '', '', 'gmodev123,', './img/users/george.png'),
(34, 'Oia', 'oia@oia.com', '(88) 8 8888-8888', '2000-08-25', 'Ensino superior incompleto', 'Designer', '', '', '', 'oia', './img/users/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `sobreE` longtext NOT NULL,
  `sobreS` longtext NOT NULL,
  `sobreF` longtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `email`, `area`, `telefone`, `senha`, `endereco`, `cnpj`, `sobreE`, `sobreS`, `sobreF`, `foto`) VALUES
(1, 'Bora Produtora', 'bora@gmail.com', 'Produtora Audiovisual', '(85) 9 9985-1155', 'oia', 'Rua Oscar Barbosa, 270, Baviera', '88.888.888/8888-88', '', '', '', './img/users/'),
(12, 'Guiar', 'guiar@gmail.com', 'Produtora Cultural', '(85) 9 9985-1155', 'oia', 'Rua Oscar Barbosa, 270, Baviera', '88.888.888/8888-88', '', '', '', './img/users/video2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `criador` int(255) NOT NULL,
  `candidatos` varchar(255) NOT NULL,
  `dias` varchar(255) NOT NULL,
  `habilidades` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `categoria`, `turno`, `foto`, `criador`, `candidatos`, `dias`, `habilidades`, `salario`) VALUES
(1, 'Cozinheira', 'Matutino', './img/vagas/cozinheira.jpeg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', '10000'),
(2, 'Designer', '5', './img/vagas/design.jpg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', ''),
(3, 'Vendedor', '5', './img/vagas/vendedor.jpg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', ''),
(4, 'Mecânico', '5', './img/vagas/mecanico.jpg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', ''),
(5, 'Mecânico', '20', './img/vagas/mecanico.jpg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', ''),
(6, 'Mecânico', '40', './img/vagas/mecanico.jpg', 1, '', 'Segunda,Terça,Quarta,Quinta,Sexta', '', ''),
(10, 'Designer', 'Matutino', './img/users/george.png', 12, '', 'Segunda,Terça,Quarta,Quinta,Sexta', 'Produtivo', '100,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
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
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `curriculo`
--
ALTER TABLE `curriculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
