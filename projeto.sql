-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2018 às 03:53
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `email`, `cpf`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `senha`) VALUES
(9, 'Cesar Adriano dos Santos', '35999206021', 'cesarsantoskdsrl@gmail.com', '09814853674', 'estrada principal', 0, '', 'Bairro dos Maias EstaÃ§Ã£o Dias', 'Brasopolis', 'MG', '202cb962ac59075b964b07152d234b70'),
(15, 'Alexandre Joaquim Pereira', '999136071', 'alexandrejoaquim1999@gmail.com', '11712149601', 'Principal', 0, 'Casa', 'Bom Sucesso', 'BrazÃ³polis', 'MG', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema`
--

CREATE TABLE `problema` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `problema`
--

INSERT INTO `problema` (`id`, `id_cliente`, `descricao`, `situacao`) VALUES
(1, 9, 'o pc estava fora da tomada', 'Finalizado'),
(2, 9, 'cesr', 'Iniciado'),
(4, 9, 'cesar', 'Iniciado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `data_abertura` date NOT NULL,
  `data_termino` date DEFAULT NULL,
  `id_problema` int(11) NOT NULL,
  `tipo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `descricao_servico` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `data_abertura`, `data_termino`, `id_problema`, `tipo`, `id_tecnico`, `descricao_servico`) VALUES
(1, '2018-10-28', '2018-10-28', 1, 'Visita TÃ©cnica', 17, 'tinha acabado a energia e ja tinha voltado'),
(2, '2018-10-28', NULL, 2, '', 17, ''),
(4, '2018-10-30', NULL, 4, '', 22, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE `tecnico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `rua` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `formacao` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `instituicao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `avaliacao` float NOT NULL DEFAULT '0',
  `avaliacao_total` int(11) DEFAULT '0',
  `qtd_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`id`, `nome`, `telefone`, `email`, `cpf`, `data_nasc`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `formacao`, `instituicao`, `login`, `senha`, `status`, `avaliacao`, `avaliacao_total`, `qtd_serv`) VALUES
(13, 'cesar', '03599920602', 'cesarsantoskdsrl@gmail.com', '09814853675', '1989-11-14', 'bairro dos maias estaÃ§Ã£o dias', 0, '', '', '', '', 'tecnico', 'CEP brasopolis', 'cas', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, NULL, 0),
(17, 'Cesar Adriano dos Santos', '35999206021', 'cesarsantoskdsrl@gmail.com', '09814853674', '1989-11-14', 'Estrada Principal', 0, '', 'Bairro dos Maias EstaÃ§Ã£o Dias', 'BrazÃ³polis', 'MG', 'tecnico', 'CEP brasopolis', 'CSantos', '202cb962ac59075b964b07152d234b70', 1, 9.5, 19, 2),
(22, 'cassantos', '35999206021', 'cesarsantoskdsrl@gmail.com', '98765432125', '1989-11-14', 'Rua', 0, 'Complemento', 'Bairro dos Maias EstaÃ§Ã£o Dias', 'Brasopolis', 'MG', 'tecnico', 'CEP brasopolis', 'oooie', '202cb962ac59075b964b07152d234b70', 1, 10, 10, 1),
(23, 'Alexandre Joaquim Pereira', '999136071', 'alexandrejoaquim1999@gmail.com', '11712149601', '1999-09-27', 'Principal', 0, 'Casa', 'Bom Sucesso', 'BrazÃ³polis', 'MG', 'TÃ©cnico em InformÃ¡tica', 'CEP- Centro de EducaÃ§Ã£o Profissional &#34;Tancredo Neves&#34;', 'mandi', 'ebcd1289dab7e8c4c252080c43304e4c', 2, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_problema` (`id_problema`),
  ADD KEY `id_tecnico` (`id_tecnico`);

--
-- Indexes for table `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`,`senha`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `problema`
--
ALTER TABLE `problema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `problema`
--
ALTER TABLE `problema`
  ADD CONSTRAINT `problema_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`id_problema`) REFERENCES `problema` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`id_tecnico`) REFERENCES `tecnico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
