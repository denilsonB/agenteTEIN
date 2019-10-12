-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2019 às 23:57
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `mensagem` varchar(250) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`

-- --------------------------------------------------------

--
-- Estrutura da tabela `individual`
--

CREATE TABLE `individual` (
  `sus` varchar(15) NOT NULL,
  `parentesco` varchar(25) DEFAULT NULL,
  `escolaridade` varchar(30) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `deficiencia` varchar(20) DEFAULT NULL,
  `criancaFicaCom` varchar(20) DEFAULT NULL,
  `planoDeSaude` varchar(2) DEFAULT NULL,
  `mudanca` varchar(2) DEFAULT NULL,
  `obito` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `individual`

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradia`
--

CREATE TABLE `moradia` (
  `cep` varchar(15) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `abastecimento` varchar(50) DEFAULT NULL,
  `animais` varchar(26) DEFAULT NULL,
  `esgoto` varchar(25) DEFAULT NULL,
  `lixo` varchar(25) DEFAULT NULL,
  `nSus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `moradia`

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradorderua`
--

CREATE TABLE `moradorderua` (
  `sus` varchar(15) NOT NULL,
  `tempoRua` int(11) DEFAULT NULL,
  `alimentaAoDia` varchar(11) DEFAULT NULL,
  `origemAlimentacao` varchar(100) DEFAULT NULL,
  `higienePessoal` varchar(100) DEFAULT NULL,
  `recebeBeneficio` varchar(15) DEFAULT NULL,
  `refFamiliar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `moradorderua`

-- --------------------------------------------------------

--
-- Estrutura da tabela `saude`
--

CREATE TABLE `saude` (
  `sus` varchar(15) NOT NULL,
  `doencaCardiaca` varchar(30) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `doencaRespiratoria` varchar(30) DEFAULT NULL,
  `problemaRins` varchar(30) DEFAULT NULL,
  `fumante` varchar(2) DEFAULT NULL,
  `mudanca` varchar(2) DEFAULT NULL,
  `alcool` varchar(2) DEFAULT NULL,
  `diabetes` varchar(2) DEFAULT NULL,
  `drogas` varchar(2) DEFAULT NULL,
  `avcDerrame` varchar(2) DEFAULT NULL,
  `hipertenso` varchar(2) DEFAULT NULL,
  `cancer` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `saude`

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `sus` varchar(14) DEFAULT NULL,
  `cep` varchar(12) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`sus`);

--
-- Indexes for table `moradia`
--
ALTER TABLE `moradia`
  ADD PRIMARY KEY (`nSus`);

--
-- Indexes for table `moradorderua`
--
ALTER TABLE `moradorderua`
  ADD PRIMARY KEY (`sus`);

--
-- Indexes for table `saude`
--
ALTER TABLE `saude`
  ADD PRIMARY KEY (`sus`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
