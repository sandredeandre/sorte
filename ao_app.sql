-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.100
-- Tempo de geração: 20-Nov-2022 às 09:57
-- Versão do servidor: 8.0.29-21
-- versão do PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `ao_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--
3333604465134164632936
CREATE TABLE `feed` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `corpo` varchar(555) NOT NULL,
  `gosto` varchar(12) NOT NULL,
  `cpa` varchar(12) NOT NULL,
  `x` varchar(12) NOT NULL,
  `v` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `morada` varchar(32) NOT NULL,
  `gps` varchar(32) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `outronome` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lev`
--

CREATE TABLE `lev` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `conf` varchar(32) NOT NULL,
  `lvt` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `payinfo`
--

CREATE TABLE `payinfo` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `conta` varchar(15) NOT NULL,
  `iban` varchar(32) NOT NULL,
  `Banco` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ut8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_fornece` varchar(12) NOT NULL,
  `prodtipo` varchar(20) NOT NULL,
  `limit` bigint NOT NULL,
  `pchave` varchar(20) NOT NULL,
  `img` varchar(32) NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `key1` int NOT NULL,
  `eve` varchar(32) NOT NULL,
  `datai` date NOT NULL,
  `dataf` date NOT NULL,
  `nome` varchar(32) NOT NULL,
  `modelo` varchar(32) NOT NULL,
  `finalidd` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo`
--

CREATE TABLE `saldo` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `Valor` bigint NOT NULL,
  `cfile` varchar(32) NOT NULL,
  `cvalor` bigint NOT NULL,
  `saldofinal` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sms`
--

CREATE TABLE `sms` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `corpo` varchar(555) NOT NULL,
  `gosto` bigint NOT NULL,
  `cpa` varchar(12) NOT NULL,
  `v` varchar(14) NOT NULL,
  `x` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorteio`
--

CREATE TABLE `sorteio` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `ideve` varchar(32) NOT NULL,
  `eve` varchar(32) NOT NULL,
  `key1` int NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorteiok`
--

CREATE TABLE `sorteiok` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `date` date NOT NULL,
  `ideve` varchar(32) NOT NULL,
  `eve` varchar(32) NOT NULL,
  `key1` int NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `dias` int NOT NULL DEFAULT '0',
  `valor` int NOT NULL,
  `tipo` int NOT NULL,
  `periodo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorteiop`
--

CREATE TABLE `sorteiop` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `key1` int NOT NULL,
  `datai` date NOT NULL,
  `dataf` date NOT NULL,
  `eve` varchar(32) NOT NULL,
  `ideve` varchar(32) NOT NULL,
  `prodtipo` varchar(32) NOT NULL,
  `limit` bigint NOT NULL,
  `pchave` varchar(12) NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `img` varchar(32) NOT NULL,
  `finalidd` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `states`
--

CREATE TABLE `states` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `est` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `img` varchar(32) NOT NULL,
  `nome` varchar(14) NOT NULL,
  `outronome` varchar(14) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(55) CHARACTER SET utf8_general_ci COLLATE utf8_general_ci NOT NULL,
  `situacoe_id` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `phone` varchar(14) NOT NULL,
  `modified` datetime NOT NULL,
  `gps` varchar(30) NOT NULL,
  `rua` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `img`, `nome`, `outronome`, `email`, `password`, `situacoe_id`, `created`, `phone`, `modified`, `gps`, `rua`) VALUES
(1, 'f1.PNG', 'Andre', 'Paul', 'eidjiandre@gmail.com ', 'b0928f2d4ba7ea33b05024f21d937f48', 1, '2022-11-02 23:38:21', '929505147', '2022-11-02 23:38:21', 'Talatona', 'Talatona');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `code_origem` int NOT NULL,
  `id_agent` int NOT NULL,
  `code` varchar(32) NOT NULL,
  `code_venda` varchar(32) NOT NULL,
  `datavenda` datetime NOT NULL,
  `datauso` datetime NOT NULL,
  `valorC` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `winbackup`
--

CREATE TABLE `winbackup` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `ideve` varchar(32) NOT NULL,
  `eve` varchar(32) NOT NULL,
  `key1` int NOT NULL,
  `estado` int NOT NULL DEFAULT '1',
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `winner`
--

CREATE TABLE `winner` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `ideve` varchar(32) NOT NULL,
  `eve` varchar(32) NOT NULL,
  `key1` int NOT NULL,
  `estado` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lev`
--
ALTER TABLE `lev`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `payinfo`
--
ALTER TABLE `payinfo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sorteio`
--
ALTER TABLE `sorteio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sorteiok`
--
ALTER TABLE `sorteiok`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sorteiop`
--
ALTER TABLE `sorteiop`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `winbackup`
--
ALTER TABLE `winbackup`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lev`
--
ALTER TABLE `lev`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sorteio`
--
ALTER TABLE `sorteio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sorteiok`
--
ALTER TABLE `sorteiok`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sorteiop`
--
ALTER TABLE `sorteiop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;


