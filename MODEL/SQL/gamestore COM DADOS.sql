-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2019 às 13:18
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `ID` int(11) NOT NULL,
  `dataPedido` date NOT NULL,
  `dataDevolucao` date NOT NULL,
  `cod_prod` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `situacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ni_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID`, `email`, `password`, `ni_user`) VALUES
(3, 'emanuelluccadapaz_@vcp.com.br', 'ACs44psgRp', 0),
(4, 'iigorruancavalcanti@sociedadeweb.com.br', 'r7XX69qNRD', 0),
(5, 'cesarleonardoaugustodepaula@iaru.com.br', 'DstMem52Sp', 0),
(6, 'lluizkaiquealmada@tecvap.com.br', '3wpqhpQNlh', 0),
(7, 'nnathanvictoryuribarbosa@embraer.com', '0zZjyTOKDa', 0),
(8, 'enzoedsonrezende..enzoedsonrezende@carubelli.com.b', 'W9fGRRYKKN', 0),
(9, 'nnicolascaueosvaldomendes@homtail.com', 'senhaFuncinÃ¡rio', 1),
(10, 'hhenriqueedsonpedrohenriquecavalcanti@wwlimpador.c', 'dDl54ZQCTZ', 0),
(11, 'ccalebmarcosviniciuspaulomoreira@cernizza.com.br', 'senhaFuncinÃ¡rio', 1),
(12, 'benjaminseverinootaviodepaula..benjaminseverinoota', '5QmNF3nZ5P', 0),
(14, 'hugoeliasfogaca..hugoeliasfogaca@damha.com.br', 'hajuC6KPOW', 0),
(15, 'sseverinobenjaminalves@jglima.com.br', '9aNKmJdQ6a', 0),
(16, 'eduardocalebemarciodias-82@atualvendas.com', 'RFDxI3CdEx', 0),
(17, 'gustavomarcosnathandarocha-95@vipsaude.com.br', 'TR0wzonojY', 0),
(18, 'marcosviniciussamuelmartins_@reisereis.com.br', 'cpzEcbc5b6', 0),
(19, 'davileonardodarosa..davileonardodarosa@advocaciand', 'F71ih2ID7n', 0),
(20, 'gaelfilipemarcosdamota__gaelfilipemarcosdamota@br.', 'eiO887Ci02', 0),
(22, 'llevihenriquegomes@helpvale.com.br', 'jW440z1WjT', 0),
(23, 'henriqueantoniotomasferreira@jerasistemas.com.br', '4tYr9tcjUO', 0),
(24, 'geraldothalescauafogaca..geraldothalescauafogaca@i', 'DK1UOfFXfO', 0),
(26, 'geraldothalescauafogaca..fogaca@inbox.com', 'DK1UOfFXfO', 0),
(27, 'matheusfelipedias-71@tecvap.com.br', 'HSGZn3rya0', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento_geral`
--

CREATE TABLE `movimento_geral` (
  `ID` int(11) NOT NULL,
  `data` date NOT NULL,
  `operacao` int(1) NOT NULL,
  `valorP` float NOT NULL,
  `valorM` float NOT NULL,
  `cod_prod` varchar(16) NOT NULL,
  `ps` varchar(200) NOT NULL,
  `fun_email` varchar(50) NOT NULL,
  `cli_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_online`
--

CREATE TABLE `pedido_online` (
  `ID` int(11) NOT NULL,
  `cod_prod` varchar(16) NOT NULL,
  `cli_email` varchar(50) NOT NULL,
  `situacao` int(1) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `cod_prod` varchar(16) NOT NULL,
  `cod_barra` varchar(12) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `valor_custo` float NOT NULL,
  `valor_venda` float NOT NULL,
  `tipo_comercio` int(1) NOT NULL,
  `gen_email` varchar(16) NOT NULL,
  `data_lancamento` int(50) NOT NULL,
  `estado` int(1) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `plataforma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `cod_prod`, `cod_barra`, `nome`, `valor_custo`, `valor_venda`, `tipo_comercio`, `gen_email`, `data_lancamento`, `estado`, `genero`, `plataforma`) VALUES
(1, '15151515', '1515222', 'God of War', 68, 152, 1, 'email@gerente', 18, 1, 'AÃ§Ã£o', 'PC'),
(2, '556656652', '152458596584', 'The Legend of Zelda: Breath of the Wild', 58, 102, 1, 'email@gerente', 3, 1, 'RPG', 'PC, Switch'),
(3, '36666525', '263987565236', 'Grand Theft Auto V', 36.69, 98.65, 1, 'email@gerente', 17, 1, 'AÃ§Ã£o', 'PC,PS4,Xbox ONE'),
(4, '48487545585', '784545236523', 'Far Cry 5', 45.6, 78.69, 1, 'email@gerente', 27, 1, 'AÃ§Ã£o,RPG', 'PC,PS$,Xbox ONE'),
(5, '889988987', '789565412563', 'Resident Evil 7: Biohazard', 56.96, 98.6, 1, 'email@gerente', 24, 1, 'Terror,AÃ§Ã£o', '1'),
(6, '89896666', '789653201450', 'Watch Dogs 2', 58.3, 100.6, 1, 'email@gerente', 15, 1, 'AÃ§Ã£o,RPG', 'PC,Xbox ONE,PS4'),
(7, '55959887', '789652365214', 'Minecraft', 29.99, 109.6, 1, 'email@gerente', 10, 1, 'RPG,Sandbox', 'PC,PS4,Xbox ONE'),
(8, '956995956', '789654102365', 'The Elder Scrolls V: Skyrim', 45.96, 85.99, 1, 'email@gerente', 11, 1, 'AÃ§Ã£o,RPG', 'PC,Xbox ONE,PS4'),
(9, '58955855', '789452635241', 'The Sims 4', 39.99, 89.99, 1, 'email@gerente', 2, 1, 'SimulaÃ§Ã£o', 'PC,PS4,Xbox ONE'),
(10, '48489585565', '789652003214', 'Stardew Valley', 9.99, 19.99, 1, 'email@gerente', 26, 1, 'SimulaÃ§Ã£o,RPG', 'PC,PS4,Xbox ONE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `situacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `email`, `nome`, `data_nasc`, `telefone`, `cpf`, `endereco`, `situacao`) VALUES
(3, 'emanuelluccadapaz_@vcp.com.br', 'Emanuel Lucca da Paz', '1997-10-20', '(82) 2558-3867', '798.898.669-43', 'Rua Manoel Francisco Cazuza', 0),
(4, 'iigorruancavalcanti@sociedadeweb.com.br', 'Igor Ruan Cavalcanti', '1997-11-23', '(61) 2539-3838', '686.963.233-27', 'Quadra Quadra 97', 0),
(5, 'cesarleonardoaugustodepaula@iaru.com.br', 'CÃ©sar Leonardo Augusto de Paula', '1997-11-23', '(62) 3873-5430', '681.787.367-30', 'Avenida Pedro Paulo de Souza', 0),
(6, 'lluizkaiquealmada@tecvap.com.br', 'Luiz Kaique Almada', '2000-03-12', '(24) 2787-0119', '228.705.692-03', 'Avenida Marginal', 0),
(7, 'nnathanvictoryuribarbosa@embraer.com', 'Nathan Victor Yuri Barbosa', '1997-04-20', '(53) 3543-3412', '953.602.297-48', 'Rua Doze', 0),
(8, 'enzoedsonrezende..enzoedsonrezende@carubelli.com.b', 'Enzo Edson Rezende', '2001-11-12', '(98) 3974-9463', '287.272.888-03', 'Parque das MansÃµes', 0),
(9, 'nnicolascaueosvaldomendes@homtail.com', 'Nicolas CauÃª Osvaldo Mendes', '1973-08-21', '(67) 2571-6847', '274.814.910-62', 'Rua MacapÃ¡', 0),
(10, 'hhenriqueedsonpedrohenriquecavalcanti@wwlimpador.c', 'Henrique Edson Pedro Henrique Cavalcanti', '2000-12-13', '(19) 2868-6598', '13056-430', 'Parque Dom Pedro II', 0),
(11, 'ccalebmarcosviniciuspaulomoreira@cernizza.com.br', 'Caleb Marcos Vinicius Paulo Moreira', '1974-01-19', '(67) 2571-6847', '181.484.545-31', 'Rua Francisco Ferreira do Nascimento', 0),
(12, 'benjaminseverinootaviodepaula..benjaminseverinoota', 'Benjamin Severino OtÃ¡vio de Paula', '1992-10-16', '(92) 2506-8668', '723.824.306-72', 'Beco Taumaturgo Vaz', 0),
(14, 'hugoeliasfogaca..hugoeliasfogaca@damha.com.br', 'Hugo Elias FogaÃ§a', '1997-07-09', '(77) 2805-2024', '182.634.231-12', 'Rua Bonfim', 0),
(15, 'sseverinobenjaminalves@jglima.com.br', 'Severino Benjamin Alves', '1997-07-05', '(69) 2738-1457', '671.292.679-33', 'Rua JosÃ© Pires', 0),
(16, 'eduardocalebemarciodias-82@atualvendas.com', 'Eduardo Calebe MÃ¡rcio Dias', '1999-12-08', '(85) 2967-6557', '675.082.317-32', 'Rua Giuliano Rossi', 0),
(17, 'gustavomarcosnathandarocha-95@vipsaude.com.br', 'Gustavo Marcos Nathan da Rocha', '2000-03-20', '(85) 2967-6557', '684.588.897-30', 'Avenida Massangana', 0),
(18, 'marcosviniciussamuelmartins_@reisereis.com.br', 'Marcos Vinicius Samuel Martins', '1996-09-12', '(86) 2775-6896', '456.763.494-25', 'Travessa Felipe Neves', 0),
(19, 'davileonardodarosa..davileonardodarosa@advocaciand', 'Davi Leonardo da Rosa', '1997-04-15', '(44) 3744-0505', '214.505.504-52', 'Rua Mario Schiavon', 0),
(20, 'gaelfilipemarcosdamota__gaelfilipemarcosdamota@br.', 'Gael Filipe Marcos da Mota', '1997-10-12', '(54) 3770-4544', '014.470.588-52', 'Rua Ary Stumpf Albe', 0),
(21, 'arthurbrenojesus__arthurbrenojesus@cdcd.com.br', 'Arthur Breno Jesus', '1997-11-20', '(79) 2631-5134', '109.233.616-85', 'Rua B', 0),
(22, 'llevihenriquegomes@helpvale.com.br', 'Levi Henrique Gomes', '1997-01-05', '(81) 2984-7310', '943.499.574-48', 'Rua Mario Schiavon', 0),
(23, 'henriqueantoniotomasferreira@jerasistemas.com.br', 'Henrique Antonio TomÃ¡s Ferreira', '1998-06-24', '(87) 3966-2750', '380.083.228-37', 'Rua da Serra', 0),
(24, 'geraldothalescauafogaca..geraldothalescauafogaca@i', 'Geraldo Thales CauÃ£ FogaÃ§a', '1999-07-25', '', '532.067.101-62', 'Rua Manoel Batista', 0),
(25, 'matheusfelipedias-71@tecvap.com.br', 'Ana Felipe Dias', '1997-04-10', '(12) 3154-8921', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user` (`email`);

--
-- Indexes for table `movimento_geral`
--
ALTER TABLE `movimento_geral`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pedido_online`
--
ALTER TABLE `pedido_online`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `cod_prod` (`cod_prod`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `cod_user` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `movimento_geral`
--
ALTER TABLE `movimento_geral`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido_online`
--
ALTER TABLE `pedido_online`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
