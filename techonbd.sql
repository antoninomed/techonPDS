-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jan-2022 às 22:18
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techonbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`email`, `senha`) VALUES
('admin@techon.com', '2e96afd3d0a28fa483f67deb50e1fdd3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(150) NOT NULL,
  `dtnascimento_aluno` date NOT NULL,
  `email_aluno` varchar(150) NOT NULL,
  `senha_aluno` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `dtnascimento_aluno`, `email_aluno`, `senha_aluno`) VALUES
(5, 'Nilton Mangueira', '1990-12-12', 'aluno@gmail.com', '2e96afd3d0a28fa483f67deb50e1fdd3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_curso`
--

CREATE TABLE `aluno_curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(150) NOT NULL,
  `nome_aluno` varchar(150) NOT NULL,
  `email_aluno` varchar(150) NOT NULL,
  `status_curso` varchar(100) NOT NULL,
  `arquivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno_curso`
--

INSERT INTO `aluno_curso` (`id_curso`, `nome_curso`, `nome_aluno`, `email_aluno`, `status_curso`, `arquivo`) VALUES
(27, 'Banco de Dados', 'Nilton Mangueira', 'aluno@gmail.com', 'andamento', 'TESTE_RESPOSTA_BD.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `titulo_curso` varchar(150) NOT NULL,
  `descricao_curso` varchar(255) NOT NULL,
  `nivel_curso` varchar(100) NOT NULL,
  `link_curso` varchar(255) NOT NULL,
  `professor_curso` varchar(150) NOT NULL,
  `link_img` varchar(150) NOT NULL,
  `link_teste` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `titulo_curso`, `descricao_curso`, `nivel_curso`, `link_curso`, `professor_curso`, `link_img`, `link_teste`) VALUES
(27, 'Banco de Dados', 'Curso de Banco de Dados para implementação em grandes sistemas.', 'Avançado', 'https://www.youtube.com/watch?v=3ltZBbKACh4', 'professor@gmail.com', 'img-bd.png', 'TESTE_BD.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_prof` int(11) NOT NULL,
  `nome_prof` varchar(100) NOT NULL,
  `cpf_prof` varchar(50) NOT NULL,
  `dtnascimento_prof` date NOT NULL,
  `numero_prof` varchar(150) NOT NULL,
  `email_prof` varchar(150) NOT NULL,
  `senha_prof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_prof`, `nome_prof`, `cpf_prof`, `dtnascimento_prof`, `numero_prof`, `email_prof`, `senha_prof`) VALUES
(11, 'Antonino Lisboa Medeiros', '12345678999', '1997-12-12', '98989898989', 'professor@gmail.com', '2e96afd3d0a28fa483f67deb50e1fdd3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email_aluno` (`email_aluno`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_prof`),
  ADD UNIQUE KEY `email_prof` (`email_prof`),
  ADD UNIQUE KEY `cpf_prof` (`cpf_prof`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
