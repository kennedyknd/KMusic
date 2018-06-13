-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/06/2018 às 19:08
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudMusica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `lancamento` date NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `album`
--

INSERT INTO `album` (`id_album`, `nome`, `lancamento`, `id_artista`, `id_genero`) VALUES
(1, 'Kennys', '2018-06-06', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `datanasci` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `ocupacao` varchar(45) DEFAULT NULL,
  `instrumento` varchar(45) DEFAULT NULL,
  `paginaWeb` varchar(45) DEFAULT NULL,
  `afiliacao` varchar(45) DEFAULT NULL,
  `id_genero` int(11) NOT NULL,
  `id_gravadora` int(11) NOT NULL,
  `id_banda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `artista`
--

INSERT INTO `artista` (`id_artista`, `nome`, `datanasci`, `cidade`, `pais`, `sexo`, `ocupacao`, `instrumento`, `paginaWeb`, `afiliacao`, `id_genero`, `id_gravadora`, `id_banda`) VALUES
(1, 'Kennedy', '2018-06-05', 'Brasília', 'Brasil', 'M', 'Nenhuma', 'Nenhuma', 'Nenhuma', 'Nenhuma', 1, 2, 1),
(3, 'Alok', '2018-06-05', 'Teste', 'Brasil', '', 'Não sei', 'DJ', 'text.com', 'Não sei', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `banda`
--

CREATE TABLE `banda` (
  `id_banda` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `datanasci` date NOT NULL,
  `afiliacao` varchar(45) DEFAULT NULL,
  `paginaWeb` varchar(45) DEFAULT NULL,
  `id_genero` int(11) NOT NULL,
  `id_gravadora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `banda`
--

INSERT INTO `banda` (`id_banda`, `nome`, `cidade`, `pais`, `datanasci`, `afiliacao`, `paginaWeb`, `id_genero`, `id_gravadora`) VALUES
(1, 'Kennys', 'Brasília', 'Brasil', '2018-06-06', 'Nenhuma', 'Nenhuma', 1, 2),
(2, 'Rafael', 'Brasilia ', 'Pais', '1900-05-05', 'Nao sei', 'text.com1', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `nome`, `descricao`) VALUES
(1, 'Rock', 'Rock'),
(3, 'Eletrônica', 'Eletrônica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `gravadora`
--

CREATE TABLE `gravadora` (
  `id_gravadora` int(11) NOT NULL,
  `razaoSocial` varchar(45) NOT NULL,
  `nomeFantasia` varchar(45) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `datanasci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `gravadora`
--

INSERT INTO `gravadora` (`id_gravadora`, `razaoSocial`, `nomeFantasia`, `cnpj`, `pais`, `datanasci`) VALUES
(2, 'Vagalume Records', 'Vagalume Records', '06.696.359/0002-02', 'Brasil', '2018-06-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `musica`
--

CREATE TABLE `musica` (
  `id_musica` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `duracao` time NOT NULL,
  `lancamento` date NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `musica`
--

INSERT INTO `musica` (`id_musica`, `nome`, `duracao`, `lancamento`, `id_artista`, `id_album`, `id_genero`) VALUES
(1, 'Dela sou fã', '00:07:00', '2018-06-06', 1, 1, 1),
(2, 'Ela só quer1', '03:10:00', '2018-06-09', 3, 1, 3);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `fk_album_artista1_idx` (`id_artista`),
  ADD KEY `fk_album_genero1_idx` (`id_genero`);

--
-- Índices de tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`),
  ADD KEY `fk_artista_genero1_idx` (`id_genero`),
  ADD KEY `fk_artista_gravadora1_idx` (`id_gravadora`),
  ADD KEY `fk_artista_banda1_idx` (`id_banda`);

--
-- Índices de tabela `banda`
--
ALTER TABLE `banda`
  ADD PRIMARY KEY (`id_banda`),
  ADD KEY `fk_banda_genero1_idx` (`id_genero`),
  ADD KEY `fk_banda_gravadora1_idx` (`id_gravadora`);

--
-- Índices de tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices de tabela `gravadora`
--
ALTER TABLE `gravadora`
  ADD PRIMARY KEY (`id_gravadora`);

--
-- Índices de tabela `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_musica`),
  ADD KEY `fk_musica_artista1_idx` (`id_artista`),
  ADD KEY `fk_musica_album1_idx` (`id_album`),
  ADD KEY `fk_musica_genero1_idx` (`id_genero`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `banda`
--
ALTER TABLE `banda`
  MODIFY `id_banda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `gravadora`
--
ALTER TABLE `gravadora`
  MODIFY `id_gravadora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `musica`
--
ALTER TABLE `musica`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_album_artista1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_album_genero1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `fk_artista_banda1` FOREIGN KEY (`id_banda`) REFERENCES `banda` (`id_banda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artista_genero1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artista_gravadora1` FOREIGN KEY (`id_gravadora`) REFERENCES `gravadora` (`id_gravadora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `banda`
--
ALTER TABLE `banda`
  ADD CONSTRAINT `fk_banda_genero1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_banda_gravadora1` FOREIGN KEY (`id_gravadora`) REFERENCES `gravadora` (`id_gravadora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `fk_musica_album1` FOREIGN KEY (`id_album`) REFERENCES `album` (`id_album`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_musica_artista1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_musica_genero1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
