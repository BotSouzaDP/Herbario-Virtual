-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/07/2026 às 21:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acervo_herbario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `base_jabot`
--

CREATE TABLE `base_jabot` (
  `numtombo` varchar(3) DEFAULT NULL,
  `sufixo` varchar(1) DEFAULT NULL,
  `family` varchar(16) DEFAULT NULL,
  `genus` varchar(17) DEFAULT NULL,
  `cf` varchar(10) DEFAULT NULL,
  `sp1` varchar(15) DEFAULT NULL,
  `author1` varchar(48) DEFAULT NULL,
  `rank1` varchar(10) DEFAULT NULL,
  `sp2` varchar(10) DEFAULT NULL,
  `author2` varchar(10) DEFAULT NULL,
  `rank2` varchar(10) DEFAULT NULL,
  `sp3` varchar(10) DEFAULT NULL,
  `author3` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `vernacular` varchar(42) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `typestat` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `majorarea` varchar(20) DEFAULT NULL,
  `minorarea` varchar(20) DEFAULT NULL,
  `gazetteer` varchar(255) DEFAULT NULL,
  `uc` varchar(10) DEFAULT NULL,
  `latitude` varchar(10) DEFAULT NULL,
  `longitude` varchar(10) DEFAULT NULL,
  `latgrau` varchar(255) DEFAULT NULL,
  `lat_min` varchar(10) DEFAULT NULL,
  `lat_seg` varchar(10) DEFAULT NULL,
  `ns` varchar(10) DEFAULT NULL,
  `long_grau` varchar(10) DEFAULT NULL,
  `long_min` varchar(10) DEFAULT NULL,
  `long_seg` varchar(10) DEFAULT NULL,
  `ew` varchar(10) DEFAULT NULL,
  `altprof` varchar(10) DEFAULT NULL,
  `altprofmax` varchar(10) DEFAULT NULL,
  `unidmedaltprof` varchar(10) DEFAULT NULL,
  `locnotes` varchar(100) DEFAULT NULL,
  `flor` varchar(127) DEFAULT NULL,
  `fruto` varchar(81) DEFAULT NULL,
  `fuste` varchar(10) DEFAULT NULL,
  `altura` varchar(6) DEFAULT NULL,
  `unidmedaltura` varchar(2) DEFAULT NULL,
  `collector` varchar(44) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `addcoll` varchar(10) DEFAULT NULL,
  `colldd` varchar(2) DEFAULT NULL,
  `collmm` varchar(2) DEFAULT NULL,
  `collyy` varchar(4) DEFAULT NULL,
  `detby` varchar(44) DEFAULT NULL,
  `detdd` varchar(10) DEFAULT NULL,
  `detmm` varchar(10) DEFAULT NULL,
  `detyy` varchar(10) DEFAULT NULL,
  `sigla_colbot_origem` varchar(10) DEFAULT NULL,
  `dups` varchar(1) DEFAULT NULL,
  `nrdups` varchar(10) DEFAULT NULL,
  `notes` varchar(10) DEFAULT NULL,
  `usos` varchar(10) DEFAULT NULL,
  `uso_especifico` varchar(10) DEFAULT NULL,
  `projeto` varchar(10) DEFAULT NULL,
  `habitat` varchar(26) DEFAULT NULL,
  `habito` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `coletor`
--

CREATE TABLE `coletor` (
  `id` int(11) NOT NULL,
  `instituicao` text NOT NULL,
  `email` text NOT NULL,
  `nomecol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_upload` date NOT NULL DEFAULT current_timestamp(),
  `base_jabot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `matricula` varchar(30) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `situacao` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nome`, `email`, `matricula`, `telefone`, `situacao`, `senha`) VALUES
(22, 'DANILO DE PAULA SOUZA', 'dc0656246@gmail.com', '2023101100910288', '00000000000', 'aluno', 'teste1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `base_jabot`
--
ALTER TABLE `base_jabot`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `coletor`
--
ALTER TABLE `coletor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_base_jabot` (`base_jabot_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `base_jabot`
--
ALTER TABLE `base_jabot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10778;

--
-- AUTO_INCREMENT de tabela `coletor`
--
ALTER TABLE `coletor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_base_jabot` FOREIGN KEY (`base_jabot_id`) REFERENCES `base_jabot` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
