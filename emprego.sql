-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 19:21
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

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
(4, 36, 19, 'Ganhar dinheiro', 1);

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
(10, 'Designer', 1),
(11, 'Vendedor', 1),
(12, 'Mecânico', 1),
(13, 'Analista de sistemas', 1),
(14, 'Fisioterapeuta', 0),
(15, 'Engenheiro de software', 1),
(16, 'Estatístico', 0),
(17, 'Cozinheira', 0),
(18, 'Cabeleireira', 1);

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
(36, 'George Moreno de Oliveira', 'gmodeveloper@gmail.com', '(88) 8 8888-8888', '2000-08-25', 'Ensino superior incompleto', 'Designer', '', '', 'criativo', 'oia', './img/users/designer.png'),
(37, 'Maria Helena', 'helena@gmail.com', '(88) 9 8888-8888', '1998-04-10', 'Ensino médio completo', 'Cabeleireira', '', '', 'experiente', 'oia', './img/users/helena.png');

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
(18, 'Desenvolve', 'desenvolve@gmail.com', 'Soluções tecnológicas', '(88) 8 8888-8888', 'oia', 'Rua N, Nº: 250', '88.888.888/8888-88', '', '', '', './img/users/'),
(19, 'LoCar', 'locar@gmail.com', 'Aluguel de Carros', '(88) 8 8888-8888', 'oia', 'Rua X, Nº: 50', '88.888.888/8888-88', '', '', '', './img/users/'),
(20, 'LaBella', 'labella@gmail.com', 'Salão de Beleza', '(88) 9 8888-8888', 'oia', 'Rua Oscar Barbosa, Nº: 500', '88.888.888/8888-88', '', '', '', './img/users/labella.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dias` varchar(255) NOT NULL,
  `habilidades` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL,
  `criador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `categoria`, `turno`, `foto`, `dias`, `habilidades`, `salario`, `criador`) VALUES
(18, 'Analista de sistemas', 'Matutino', './img/users/analista.png', 'Segunda,Terça,Quarta,Quinta', 'ágil, rápido, equipe', '1.000,00', 18),
(19, 'Designer', 'Matutino', './img/users/designer.png', 'Segunda,Terça,Quarta,Quinta,Sexta,Sabado', 'criativo', '2.000,00', 18),
(20, 'Engenheiro de software', 'Noturno', './img/users/es.png', 'Segunda,Terça,Quarta', 'rápido, seguro', '1.500,00', 18),
(21, 'Mecânico', 'Matutino', './img/users/mecanico.png', 'Segunda,Terça,Quarta,Quinta,Sexta', 'cuidadoso, ágil', '975,00', 19),
(22, 'Vendedor', 'Matutino', './img/users/vendedor.png', 'Segunda,Terça,Quinta,Sexta', 'comunicativo', '1.500,00', 19),
(23, 'Cabeleireira', 'Matutino', './img/users/cabeleleira.png', 'Quinta,Sexta,Sabado', 'experiente', '500,00', 20);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `curriculo`
--
ALTER TABLE `curriculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
