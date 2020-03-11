-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Set-2019 às 02:34
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trofeuunasp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `1bim`
--

CREATE TABLE `1bim` (
  `id_1bim` int(11) NOT NULL,
  `pontos_notas` int(11) NOT NULL,
  `desconto_disciplina` int(11) NOT NULL,
  `total_1bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `1bim`
--

INSERT INTO `1bim` (`id_1bim`, `pontos_notas`, `desconto_disciplina`, `total_1bim`, `turma`) VALUES
(0, 1000, 100, 900, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `1bim_detalhes`
--

CREATE TABLE `1bim_detalhes` (
  `id_1bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `2bim`
--

CREATE TABLE `2bim` (
  `id_2bim` int(11) NOT NULL,
  `pontos_olimpunasp` int(11) NOT NULL,
  `pontos_notas` int(11) NOT NULL,
  `bonus_pontos_notas` int(11) NOT NULL,
  `pontos_humanitario` int(11) NOT NULL,
  `descontos_disciplina` int(11) NOT NULL,
  `total_2bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `pontosb` int(11) NOT NULL,
  `pontosf` int(11) NOT NULL,
  `pontosh` int(11) NOT NULL,
  `pontosv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `2bim`
--

INSERT INTO `2bim` (`id_2bim`, `pontos_olimpunasp`, `pontos_notas`, `bonus_pontos_notas`, `pontos_humanitario`, `descontos_disciplina`, `total_2bim`, `turma`, `pontosb`, `pontosf`, `pontosh`, `pontosv`) VALUES
(1, 1000, 1000, 1000, 1000, 1000, 1000, 7, 1000, 1000, 1000, 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `2bim_detalhes`
--

CREATE TABLE `2bim_detalhes` (
  `id_2bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `3bim`
--

CREATE TABLE `3bim` (
  `id_3bim` int(11) NOT NULL,
  `pontos_notas` int(11) NOT NULL,
  `bonus_pontos_notas` int(11) NOT NULL,
  `merito_academico` int(11) NOT NULL,
  `pontos_humanitario` int(11) NOT NULL,
  `pontos_olimp_gregas` int(11) NOT NULL,
  `pontos_corrida_maluca` int(11) NOT NULL,
  `desconto_disciplina` int(11) NOT NULL,
  `total_3bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `3bim`
--

INSERT INTO `3bim` (`id_3bim`, `pontos_notas`, `bonus_pontos_notas`, `merito_academico`, `pontos_humanitario`, `pontos_olimp_gregas`, `pontos_corrida_maluca`, `desconto_disciplina`, `total_3bim`, `turma`) VALUES
(1, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 1000, 7),
(2, 10000, 1000, 1000, 10000, 100, 0, 0, 22200, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `3bim_detalhes`
--

CREATE TABLE `3bim_detalhes` (
  `id_3bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `4bim`
--

CREATE TABLE `4bim` (
  `id_4bim` int(11) NOT NULL,
  `pontos_jogos_populares` int(11) NOT NULL,
  `pontos_finais` int(11) NOT NULL,
  `resultado` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `desconto_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `4bim`
--

INSERT INTO `4bim` (`id_4bim`, `pontos_jogos_populares`, `pontos_finais`, `resultado`, `turma`, `desconto_disciplina`) VALUES
(1, 10000, 12900, 1, 7, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `4bim_detalhes`
--

CREATE TABLE `4bim_detalhes` (
  `id_4bim` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ra_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) CHARACTER SET utf8 NOT NULL,
  `idade` int(11) NOT NULL,
  `celular` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nome_pai` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nome_mae` varchar(100) CHARACTER SET utf8 NOT NULL,
  `municipio` varchar(100) CHARACTER SET utf8 NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `sexo` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra_aluno`, `nome_aluno`, `idade`, `celular`, `nome_pai`, `nome_mae`, `municipio`, `estado`, `email`, `sexo`, `cep`, `data_nascimento`, `turma`) VALUES
(23057, 'mateus', 16, 'indeterminado', 'indeterminado', 'indeterminado', 'indeterminado', 'indeterminado', 'indeterminado', 1, 1234567, '2019-05-01', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `basquete`
--

CREATE TABLE `basquete` (
  `id_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(100) NOT NULL,
  `numero_camisa` int(11) NOT NULL,
  `sala` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `basquete`
--

INSERT INTO `basquete` (`id_jogador`, `nome_jogador`, `numero_camisa`, `sala`, `genero`) VALUES
(1, 'indeterminado', 10, 5, 1),
(2, 'indeterminado', 25, 5, 1),
(3, 'indeterminado', 9, 5, 0),
(4, 'indeterminado', 25, 5, 1),
(5, 'indeterminado', 3, 5, 1),
(6, 'indeterminado', 9, 5, 1),
(7, 'indeterminado', 9, 5, 1),
(8, 'indeterminado', 25, 5, 1),
(9, 'indeterminado', 34, 5, 1),
(10, 'indeterminado', 25, 5, 1),
(11, 'indeterminado', 3, 5, 1),
(18, 'indeterminado', 342, 5, 1),
(19, 'indeterminado', 34, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_infracoes`
--

CREATE TABLE `cadastro_infracoes` (
  `id_cad_infra` int(11) NOT NULL,
  `infracao` int(11) NOT NULL,
  `nome_infrator` varchar(200) NOT NULL,
  `data_infracao` date NOT NULL,
  `turma` int(11) NOT NULL,
  `bimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_infracoes`
--

INSERT INTO `cadastro_infracoes` (`id_cad_infra`, `infracao`, `nome_infrator`, `data_infracao`, `turma`, `bimestre`) VALUES
(2, 2, 'vinicius', '2019-05-01', 19, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_infracoes_detalhes`
--

CREATE TABLE `cadastro_infracoes_detalhes` (
  `id_cad_infra` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condicao`
--

CREATE TABLE `condicao` (
  `id_condicao` int(11) NOT NULL,
  `descricao_condicao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `condicao`
--

INSERT INTO `condicao` (`id_condicao`, `descricao_condicao`) VALUES
(1, 'Atingiu a meta'),
(2, 'Não atingiu a meta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conselheiro`
--

CREATE TABLE `conselheiro` (
  `id_conselheiro` int(11) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `materia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conselheiro`
--

INSERT INTO `conselheiro` (`id_conselheiro`, `nome_professor`, `telefone`, `materia`) VALUES
(7, 'Gregory', '999999999', 'LPI'),
(8, 'Carlão', '999999999', 'Matematica'),
(9, 'Aracelli', '99999-9999', 'Filo/Soc/Rel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corrida_maluca`
--

CREATE TABLE `corrida_maluca` (
  `id_corrida_maluca` int(11) NOT NULL,
  `provas_concluidas` int(11) NOT NULL,
  `pontos_por_prova` int(11) NOT NULL,
  `total_pontos` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `corrida_maluca`
--

INSERT INTO `corrida_maluca` (`id_corrida_maluca`, `provas_concluidas`, `pontos_por_prova`, `total_pontos`, `turma`) VALUES
(2, 12, 50, 1000, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corrida_maluca_detalhes`
--

CREATE TABLE `corrida_maluca_detalhes` (
  `id_corrida_maluca` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `futebol`
--

CREATE TABLE `futebol` (
  `id_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(100) NOT NULL,
  `numero_camisa` int(11) NOT NULL,
  `sala` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `descricao_genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `descricao_genero`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerenciador`
--

CREATE TABLE `gerenciador` (
  `id_gerenciador` int(11) NOT NULL,
  `nome_tabela` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerenciador`
--

INSERT INTO `gerenciador` (`id_gerenciador`, `nome_tabela`, `estado`) VALUES
(0, '1bim', 2),
(5, 'Turma', 2),
(7, '2bim', 2),
(8, '3bim', 2),
(9, '4bim', 2),
(10, 'Basquete', 2),
(11, 'Final', 2),
(12, 'Futebol', 2),
(13, 'Handbol', 2),
(14, 'Olimpunasp', 2),
(15, 'Volei', 2),
(16, 'Infracoes', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `handbol`
--

CREATE TABLE `handbol` (
  `id_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(100) NOT NULL,
  `numero_camisa` int(11) NOT NULL,
  `sala` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `grau_escolar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_usuario`, `usuario`, `senha`, `class`, `grau_escolar`) VALUES
(1, 'adm', '1234', 'adm', 'ensinoMedio'),
(7, '9E', '1234', 'user', 'ensinofundamental'),
(8, '3TI', '123', 'adm', 'ensinomedio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `olimpiadas_gregas`
--

CREATE TABLE `olimpiadas_gregas` (
  `turma` int(11) NOT NULL,
  `velocidade` varchar(200) NOT NULL,
  `revezamento` varchar(200) NOT NULL,
  `resistencia` varchar(200) NOT NULL,
  `altura` varchar(200) NOT NULL,
  `distancia` varchar(200) NOT NULL,
  `peso` varchar(200) NOT NULL,
  `dardo` varchar(200) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_basquete`
--

CREATE TABLE `pontos_basquete` (
  `id` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `pontosb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos_basquete`
--

INSERT INTO `pontos_basquete` (`id`, `turma`, `pontosb`) VALUES
(1, 7, 10000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_basquete_detalhes`
--

CREATE TABLE `pontos_basquete_detalhes` (
  `id_pontos` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_futebol`
--

CREATE TABLE `pontos_futebol` (
  `id` int(11) NOT NULL,
  `pontosf` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos_futebol`
--

INSERT INTO `pontos_futebol` (`id`, `pontosf`, `turma`) VALUES
(3, 1000, 7),
(4, 1000, 19),
(13, 1000, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_futebol_detalhes`
--

CREATE TABLE `pontos_futebol_detalhes` (
  `id_pontos` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_handbol`
--

CREATE TABLE `pontos_handbol` (
  `id` int(11) NOT NULL,
  `pontosh` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos_handbol`
--

INSERT INTO `pontos_handbol` (`id`, `pontosh`, `turma`) VALUES
(1, 10000, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_handbol_detalhes`
--

CREATE TABLE `pontos_handbol_detalhes` (
  `id_pontos` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_volei`
--

CREATE TABLE `pontos_volei` (
  `id` int(11) NOT NULL,
  `pontosv` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pontos_volei`
--

INSERT INTO `pontos_volei` (`id`, `pontosv`, `turma`) VALUES
(1, 1000, 7),
(2, 1000, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_volei_detalhes`
--

CREATE TABLE `pontos_volei_detalhes` (
  `id_pontos` int(11) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_estado`
--

CREATE TABLE `tipo_estado` (
  `id_estado` int(11) NOT NULL,
  `descricao` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipo_estado`
--

INSERT INTO `tipo_estado` (`id_estado`, `descricao`) VALUES
(1, 'Habilitado'),
(2, 'Desabilitado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_infracao`
--

CREATE TABLE `tipo_infracao` (
  `id_infracao` int(11) NOT NULL,
  `descricao_infracao` varchar(200) NOT NULL,
  `pontuacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_infracao`
--

INSERT INTO `tipo_infracao` (`id_infracao`, `descricao_infracao`, `pontuacao`) VALUES
(1, 'cartao amarelo', 50),
(2, 'cartao vermelho', 100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `nome_turma` varchar(10) NOT NULL,
  `numero_alunos` int(11) NOT NULL,
  `numero_sala` int(11) NOT NULL,
  `professor_conselheiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `nome_turma`, `numero_alunos`, `numero_sala`, `professor_conselheiro`) VALUES
(7, '3TI', 27, 39, 7),
(19, '3B', 42, 520, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vencedores`
--

CREATE TABLE `vencedores` (
  `id_vencedor` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `volei`
--

CREATE TABLE `volei` (
  `id_jogador` int(11) NOT NULL,
  `nome_jogador` varchar(100) NOT NULL,
  `numero_camisa` int(11) NOT NULL,
  `sala` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1bim`
--
ALTER TABLE `1bim`
  ADD PRIMARY KEY (`id_1bim`);

--
-- Indexes for table `1bim_detalhes`
--
ALTER TABLE `1bim_detalhes`
  ADD PRIMARY KEY (`id_1bim`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `2bim`
--
ALTER TABLE `2bim`
  ADD PRIMARY KEY (`id_2bim`);

--
-- Indexes for table `2bim_detalhes`
--
ALTER TABLE `2bim_detalhes`
  ADD PRIMARY KEY (`id_2bim`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `3bim`
--
ALTER TABLE `3bim`
  ADD PRIMARY KEY (`id_3bim`);

--
-- Indexes for table `3bim_detalhes`
--
ALTER TABLE `3bim_detalhes`
  ADD PRIMARY KEY (`id_3bim`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `4bim`
--
ALTER TABLE `4bim`
  ADD PRIMARY KEY (`id_4bim`),
  ADD KEY `resultado` (`resultado`);

--
-- Indexes for table `4bim_detalhes`
--
ALTER TABLE `4bim_detalhes`
  ADD PRIMARY KEY (`id_4bim`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ra_aluno`),
  ADD KEY `turma` (`turma`),
  ADD KEY `sexo` (`sexo`);

--
-- Indexes for table `basquete`
--
ALTER TABLE `basquete`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `sala` (`sala`),
  ADD KEY `genero` (`genero`);

--
-- Indexes for table `cadastro_infracoes`
--
ALTER TABLE `cadastro_infracoes`
  ADD PRIMARY KEY (`id_cad_infra`),
  ADD KEY `infracao` (`infracao`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `cadastro_infracoes_detalhes`
--
ALTER TABLE `cadastro_infracoes_detalhes`
  ADD PRIMARY KEY (`id_cad_infra`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `condicao`
--
ALTER TABLE `condicao`
  ADD PRIMARY KEY (`id_condicao`);

--
-- Indexes for table `conselheiro`
--
ALTER TABLE `conselheiro`
  ADD PRIMARY KEY (`id_conselheiro`);

--
-- Indexes for table `corrida_maluca`
--
ALTER TABLE `corrida_maluca`
  ADD PRIMARY KEY (`id_corrida_maluca`);

--
-- Indexes for table `corrida_maluca_detalhes`
--
ALTER TABLE `corrida_maluca_detalhes`
  ADD PRIMARY KEY (`id_corrida_maluca`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `futebol`
--
ALTER TABLE `futebol`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `sala` (`sala`),
  ADD KEY `genero` (`genero`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD PRIMARY KEY (`id_gerenciador`),
  ADD KEY `estado` (`estado`);

--
-- Indexes for table `handbol`
--
ALTER TABLE `handbol`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `sala` (`sala`),
  ADD KEY `genero` (`genero`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `olimpiadas_gregas`
--
ALTER TABLE `olimpiadas_gregas`
  ADD PRIMARY KEY (`turma`),
  ADD KEY `genero` (`genero`);

--
-- Indexes for table `pontos_basquete`
--
ALTER TABLE `pontos_basquete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_basquete_detalhes`
--
ALTER TABLE `pontos_basquete_detalhes`
  ADD PRIMARY KEY (`id_pontos`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_futebol`
--
ALTER TABLE `pontos_futebol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_futebol_detalhes`
--
ALTER TABLE `pontos_futebol_detalhes`
  ADD PRIMARY KEY (`id_pontos`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_handbol`
--
ALTER TABLE `pontos_handbol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_handbol_detalhes`
--
ALTER TABLE `pontos_handbol_detalhes`
  ADD PRIMARY KEY (`id_pontos`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_volei`
--
ALTER TABLE `pontos_volei`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `pontos_volei_detalhes`
--
ALTER TABLE `pontos_volei_detalhes`
  ADD PRIMARY KEY (`id_pontos`,`turma`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `tipo_estado`
--
ALTER TABLE `tipo_estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `tipo_infracao`
--
ALTER TABLE `tipo_infracao`
  ADD PRIMARY KEY (`id_infracao`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `professor_conselheiro` (`professor_conselheiro`);

--
-- Indexes for table `vencedores`
--
ALTER TABLE `vencedores`
  ADD PRIMARY KEY (`id_vencedor`),
  ADD KEY `turma` (`turma`);

--
-- Indexes for table `volei`
--
ALTER TABLE `volei`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `sala` (`sala`),
  ADD KEY `genero` (`genero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1bim`
--
ALTER TABLE `1bim`
  MODIFY `id_1bim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2bim`
--
ALTER TABLE `2bim`
  MODIFY `id_2bim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `3bim`
--
ALTER TABLE `3bim`
  MODIFY `id_3bim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `4bim`
--
ALTER TABLE `4bim`
  MODIFY `id_4bim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basquete`
--
ALTER TABLE `basquete`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cadastro_infracoes`
--
ALTER TABLE `cadastro_infracoes`
  MODIFY `id_cad_infra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `condicao`
--
ALTER TABLE `condicao`
  MODIFY `id_condicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conselheiro`
--
ALTER TABLE `conselheiro`
  MODIFY `id_conselheiro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `corrida_maluca`
--
ALTER TABLE `corrida_maluca`
  MODIFY `id_corrida_maluca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `futebol`
--
ALTER TABLE `futebol`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gerenciador`
--
ALTER TABLE `gerenciador`
  MODIFY `id_gerenciador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `handbol`
--
ALTER TABLE `handbol`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pontos_basquete`
--
ALTER TABLE `pontos_basquete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pontos_futebol`
--
ALTER TABLE `pontos_futebol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pontos_handbol`
--
ALTER TABLE `pontos_handbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pontos_volei`
--
ALTER TABLE `pontos_volei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_estado`
--
ALTER TABLE `tipo_estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipo_infracao`
--
ALTER TABLE `tipo_infracao`
  MODIFY `id_infracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vencedores`
--
ALTER TABLE `vencedores`
  MODIFY `id_vencedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volei`
--
ALTER TABLE `volei`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `1bim_detalhes`
--
ALTER TABLE `1bim_detalhes`
  ADD CONSTRAINT `1bim_detalhes_ibfk_1` FOREIGN KEY (`id_1bim`) REFERENCES `1bim` (`id_1bim`),
  ADD CONSTRAINT `1bim_detalhes_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `2bim_detalhes`
--
ALTER TABLE `2bim_detalhes`
  ADD CONSTRAINT `2bim_detalhes_ibfk_1` FOREIGN KEY (`id_2bim`) REFERENCES `2bim` (`id_2bim`),
  ADD CONSTRAINT `2bim_detalhes_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `3bim_detalhes`
--
ALTER TABLE `3bim_detalhes`
  ADD CONSTRAINT `3bim_detalhes_ibfk_1` FOREIGN KEY (`id_3bim`) REFERENCES `3bim` (`id_3bim`),
  ADD CONSTRAINT `3bim_detalhes_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `4bim`
--
ALTER TABLE `4bim`
  ADD CONSTRAINT `4bim_ibfk_1` FOREIGN KEY (`resultado`) REFERENCES `condicao` (`id_condicao`);

--
-- Limitadores para a tabela `4bim_detalhes`
--
ALTER TABLE `4bim_detalhes`
  ADD CONSTRAINT `4bim_detalhes_ibfk_1` FOREIGN KEY (`id_4bim`) REFERENCES `4bim` (`id_4bim`),
  ADD CONSTRAINT `4bim_detalhes_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`sexo`) REFERENCES `genero` (`id_genero`);

--
-- Limitadores para a tabela `cadastro_infracoes`
--
ALTER TABLE `cadastro_infracoes`
  ADD CONSTRAINT `cadastro_infracoes_ibfk_1` FOREIGN KEY (`infracao`) REFERENCES `tipo_infracao` (`id_infracao`),
  ADD CONSTRAINT `cadastro_infracoes_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `cadastro_infracoes_detalhes`
--
ALTER TABLE `cadastro_infracoes_detalhes`
  ADD CONSTRAINT `cadastro_infracoes_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `cadastro_infracoes_detalhes_ibfk_2` FOREIGN KEY (`id_cad_infra`) REFERENCES `cadastro_infracoes` (`id_cad_infra`);

--
-- Limitadores para a tabela `corrida_maluca_detalhes`
--
ALTER TABLE `corrida_maluca_detalhes`
  ADD CONSTRAINT `corrida_maluca_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `corrida_maluca_detalhes_ibfk_2` FOREIGN KEY (`id_corrida_maluca`) REFERENCES `corrida_maluca` (`id_corrida_maluca`);

--
-- Limitadores para a tabela `futebol`
--
ALTER TABLE `futebol`
  ADD CONSTRAINT `futebol_ibfk_1` FOREIGN KEY (`sala`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `futebol_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`id_genero`);

--
-- Limitadores para a tabela `gerenciador`
--
ALTER TABLE `gerenciador`
  ADD CONSTRAINT `gerenciador_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `tipo_estado` (`id_estado`);

--
-- Limitadores para a tabela `handbol`
--
ALTER TABLE `handbol`
  ADD CONSTRAINT `handbol_ibfk_1` FOREIGN KEY (`sala`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `handbol_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`id_genero`);

--
-- Limitadores para a tabela `olimpiadas_gregas`
--
ALTER TABLE `olimpiadas_gregas`
  ADD CONSTRAINT `olimpiadas_gregas_ibfk_1` FOREIGN KEY (`genero`) REFERENCES `genero` (`id_genero`);

--
-- Limitadores para a tabela `pontos_basquete`
--
ALTER TABLE `pontos_basquete`
  ADD CONSTRAINT `pontos_basquete_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_basquete_detalhes`
--
ALTER TABLE `pontos_basquete_detalhes`
  ADD CONSTRAINT `pontos_basquete_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_futebol`
--
ALTER TABLE `pontos_futebol`
  ADD CONSTRAINT `pontos_futebol_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `pontos_futebol_ibfk_2` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_futebol_detalhes`
--
ALTER TABLE `pontos_futebol_detalhes`
  ADD CONSTRAINT `pontos_futebol_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_handbol`
--
ALTER TABLE `pontos_handbol`
  ADD CONSTRAINT `pontos_handbol_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_handbol_detalhes`
--
ALTER TABLE `pontos_handbol_detalhes`
  ADD CONSTRAINT `pontos_handbol_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_volei`
--
ALTER TABLE `pontos_volei`
  ADD CONSTRAINT `pontos_volei_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `pontos_volei_detalhes`
--
ALTER TABLE `pontos_volei_detalhes`
  ADD CONSTRAINT `pontos_volei_detalhes_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`professor_conselheiro`) REFERENCES `conselheiro` (`id_conselheiro`);

--
-- Limitadores para a tabela `vencedores`
--
ALTER TABLE `vencedores`
  ADD CONSTRAINT `vencedores_ibfk_1` FOREIGN KEY (`turma`) REFERENCES `turma` (`id_turma`);

--
-- Limitadores para a tabela `volei`
--
ALTER TABLE `volei`
  ADD CONSTRAINT `volei_ibfk_1` FOREIGN KEY (`sala`) REFERENCES `turma` (`id_turma`),
  ADD CONSTRAINT `volei_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
