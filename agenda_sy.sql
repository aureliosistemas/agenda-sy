-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2017 às 20:03
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_sy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao`
--

CREATE TABLE `reuniao` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao_dia`
--

CREATE TABLE `reuniao_dia` (
  `id` int(11) NOT NULL,
  `reuniao_id` int(11) DEFAULT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao_pessoa`
--

CREATE TABLE `reuniao_pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reuniao_id` int(11) DEFAULT NULL,
  `dias` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao_status`
--

CREATE TABLE `reuniao_status` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `reuniao_status`
--

INSERT INTO `reuniao_status` (`id`, `nome`) VALUES
(1, 'Ativa'),
(2, 'Concluida'),
(3, 'Excluida'),
(4, 'Cancelada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reuniao`
--
ALTER TABLE `reuniao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reuniao_dia`
--
ALTER TABLE `reuniao_dia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_118C69844917AA6C` (`reuniao_id`);

--
-- Indexes for table `reuniao_pessoa`
--
ALTER TABLE `reuniao_pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_608CB78D4917AA6C` (`reuniao_id`);

--
-- Indexes for table `reuniao_status`
--
ALTER TABLE `reuniao_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reuniao_dia`
--
ALTER TABLE `reuniao_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reuniao_pessoa`
--
ALTER TABLE `reuniao_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reuniao_status`
--
ALTER TABLE `reuniao_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reuniao_dia`
--
ALTER TABLE `reuniao_dia`
  ADD CONSTRAINT `FK_118C69844917AA6C` FOREIGN KEY (`reuniao_id`) REFERENCES `reuniao` (`id`);

--
-- Limitadores para a tabela `reuniao_pessoa`
--
ALTER TABLE `reuniao_pessoa`
  ADD CONSTRAINT `FK_608CB78D4917AA6C` FOREIGN KEY (`reuniao_id`) REFERENCES `reuniao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
