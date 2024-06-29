

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) ,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `senha` varchar(300) ,
  `tipo` varchar(50)  DEFAULT '2',
  `otp_code` varchar(255) ,
  PRIMARY KEY (`id`)
);



INSERT INTO `administrador` (`id`, `nome`, `usuario`, `email`, `telefone`, `senha`, `tipo`, `otp_code`) VALUES
(1, 'GRUPO 01', 'admin1', 'elidiogoncaloa@gmail.com', '930114106', 'portal123', '1', 's7jR84'),
(3, 'GRUPO 01', 'ADMIN1', 'elidiogoncaloa2@gmail.com', '930114106', 'portal123', '1', '99999'),
(2, 'Sandro Da Costa', 'sandro12', 'sandrodacosta@gmail.com', '923052609', 'sandro123', '2', 'Z3uYr2'),
(18, 'lukenia arsenio', 'luk', 'lukenia@gmail.com', '999999', '$2y$10$VTWGjtDw13HxNUtqUSdUgu8', NULL, NULL),
(19, 'lukenia arsenio', 'luk2', 'lukenia@gmail.com', '666666', '$2y$10$p/Fn9EQS.ovPHLYrnUejRuj', NULL, NULL),
(21, 'ADM2', 'admin2', 'elidiogoncaloa@gmail.com', '930114106', 'portal123', '2', NULL),
(22, 'elidiogoncaloa@gmail.com', 'admin3', 'elidiogoncaloa@gmail.com', '930-114-106', '$2y$10$96pXP3Z4EyIBzTd935A1huXLXPsYut5AUK8mDKxmIcIb2YEasJzBO', '2', NULL);





CREATE TABLE IF NOT EXISTS `contatos` (
  `id_contato` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `mensagem` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id_contato`)
);



INSERT INTO `contatos` (`id_contato`, `nome_contato`, `email`, `telefone`, `mensagem`) VALUES
(24, 'Elidio Arsenio', 'elidiogoncaloa@gmail.com', '930114106', 'test122'),
(11, 'Manuel Miguel ', 'manuel@gmail.com', '923052609', 'teste'),
(25, 'Elidio Arsenio', 'elidiogoncaloa@gmail.com', '930114106', 'test122'),
(26, 'Elidio Arsenio', 'elidiogoncaloa@gmail.com', '930114106', 'testet1t1t1t'),
(21, 'Elidio Arsenio', 'elidiogoncaloa@gmail.com', '930114106', 'bomdia teste!');


CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_esp` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
) ;



INSERT INTO `especialidades` (`id`, `nome_esp`) VALUES
(1, 'Ginecologia/Obstetrícia'),
(5, 'Cardiologia'),
(10, 'Urologia'),
(7, 'Psicologia'),
(11, 'clinica geral'),
(12, 'Pediatria'),
(13, 'Dermatologia'),
(14, 'Ortopedia'),
(15, 'Neurologia'),
(16, 'Psiquiatria'),
(17, 'Otorrinolaringologia');


CREATE TABLE IF NOT EXISTS `exames` (
  `id_exames` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `exames` varchar(255) NOT NULL,
  PRIMARY KEY (`id_exames`)
) ;



INSERT INTO `exames` (`id_exames`, `exames`) VALUES
(1, 'TAC'),
(12, 'Ecografia'),
(10, 'Estomatologia'),
(13, 'Hemograma'),
(14, 'Glicemia');




CREATE TABLE IF NOT EXISTS `exames_marcados` (
  `id_exames_marcados` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `exames_id_exames` int UNSIGNED NOT NULL,
  `nome_paciente` varchar(255) NOT NULL,
  `bilhete` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `data_exames` datetime NOT NULL,
  `data_nasc` date NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_exames_marcados`),
  KEY `exames_marcados_FKIndex1` (`exames_id_exames`)
) ;




CREATE TABLE IF NOT EXISTS `medicos` (
  `id_medico` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `especialidades_id` int UNSIGNED NOT NULL,
  `nome_medico` varchar(255)  NOT NULL,
  `identidade` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(200)  NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `otp_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_medico`),
  KEY `medicos_FKIndex1` (`especialidades_id`)
) ;



INSERT INTO `medicos` (`id_medico`, `especialidades_id`, `nome_medico`, `identidade`, `email`, `telefone`, `senha`, `data_nasc`, `sexo`, `usuario`, `tipo`, `otp_code`) VALUES
(18, 1, 'ADMIN', 'ADMIN1', 'admin1@gmail.com', '999000111', 'portal123', '2000-05-09', 'masculino', 'admin1', 1, 'TnQWzN'),
(16, 1, 'Esther', 'LA123456', 'esther@gmail.com2', '999777888', '202cb962ac59075b964b', '2024-05-19', 'femenino', 'esther', 4, '0'),
(20, 1, 'ANTÓNIO MUANZA', '7788LA72', 'antoniomuanza@gmail.com', '912300044', 'antonio123', '1999-03-07', 'masculino', 'muanza123', NULL, NULL),
(21, 7, 'RUTH DOS SANTOS', '2244242LA', 'ruth1@gmail.com', '911122333', 'ruth123', '1999-06-05', 'femenino', 'ruth', NULL, NULL),
(22, 11, 'ANA FRANCO', '6363663LA222', 'ana@gmail.com', '98288883', 'ana123', '2000-06-13', 'femenino', 'ana123', NULL, NULL),
(23, 5, 'ESTHER MIGUEL', '9292993LA222', 'esther@gmail.com', '98383782', 'esther123', '1899-06-26', 'femenino', 'esther123', NULL, NULL),
(24, 17, 'ANA MARIA FEIJÓ', '838778LA', 'anamaria@gmail.com', '92344443', 'anamaria123', '2000-07-06', 'femenino', 'anamaria123', NULL, NULL);


CREATE TABLE IF NOT EXISTS `pacientes` (
  `idpaciente` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `especialidades_id` int UNSIGNED NOT NULL,
  `nome` varchar(255)  NOT NULL,
  `identidade` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(200)  NOT NULL,
  `data_nasc` date NOT NULL,
  `data_consulta` datetime NOT NULL,
  `sexo` varchar(45) NOT NULL,
  PRIMARY KEY (`idpaciente`),
  KEY `pacientes_FKIndex1` (`especialidades_id`)
) ;

INSERT INTO `pacientes` (`idpaciente`, `especialidades_id`, `nome`, `identidade`, `email`, `telefone`, `senha`, `data_nasc`, `data_consulta`, `sexo`) VALUES
(52, 1, 'Elidio Arsenio', '123456789LA858', 'elidiogoncaloa@gmail.com', '930-114-106', '123', '2024-05-31', '2024-06-05 17:47:00', 'masculino'),
(48, 5, 'Ruth Pinto', '453535LA7473', 'ruthpinto@gmail.com', '933102345', 'ruth123', '2024-05-31', '2024-06-20 10:48:00', 'femenino'),
(54, 5, 'Elidio Arsenio teste', '123456789LA111', 'elidiogoncaloa@gmail.comteste', '910114103', 'teste123', '2024-06-07', '2024-06-27 01:37:00', 'femenino'),
(49, 19, 'Mauro da Costa', '9947LA875', 'maurocosta@gmail.com', '934 675 777', 'mauro123', '2024-05-31', '2024-06-14 10:54:00', 'femenino'),
(47, 1, 'Eduarda Da Fonseca', '1266263LA8748', 'mariaantonio@gmail.com', '923456102', 'eduardaantonio', '2024-05-31', '2024-06-12 10:46:00', 'femenino'),
(58, 5, 'Maria Paulo', '123456789LA858', 'maria@gmail.com', '930-114-106', '123', '2001-05-30', '2024-06-19 17:15:00', 'femenino'),
(61, 19, 'admin1', '123456789LA858', 'elidiogo@gam', '930-114-106', '$2y$10$shRc/DJ09LOaBGK9eddDp.ILKADSimvV2QcbZVqoIubxJ.bxhpaga', '2024-05-30', '2024-06-18 19:49:00', 'masculino');

CREATE TABLE IF NOT EXISTS `receitas` (
  `id_receita` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `medicos_id_medico` int UNSIGNED NOT NULL,
  `paciente` varchar(255) DEFAULT NULL,
  `medicamento1` varchar(255) DEFAULT NULL,
  `dosagem1` varchar(255) DEFAULT NULL,
  `medicamento2` varchar(255) DEFAULT NULL,
  `dosagem2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_receita`),
  KEY `receitas_FKIndex1` (`medicos_id_medico`)
) ;



INSERT INTO `receitas` (`id_receita`, `medicos_id_medico`, `paciente`, `medicamento1`, `dosagem1`, `medicamento2`, `dosagem2`) VALUES
(3, 18, 'paulo2', 'paracetamol2', '300mg2', 'diazepam2', '400mg2'),
(8, 18, 'Carlos Eduardo', 'paracetamol', '500ml', 'diazepam3', '400mg');

CREATE TABLE IF NOT EXISTS `registos_medicos` (
  `id_registo` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `especialidades_id` int UNSIGNED NOT NULL,
  `medicos_id_medico` int UNSIGNED NOT NULL,
  `pacientes_idpaciente` int UNSIGNED NOT NULL,
  `diagnostico` varchar(2000) NOT NULL,
  `prescricao` varchar(2000) NOT NULL,
  `notas` varchar(2000) NOT NULL,
  `data_consulta` datetime DEFAULT NULL,
  PRIMARY KEY (`id_registo`),
  KEY `registos_medicos_FKIndex1` (`pacientes_idpaciente`),
  KEY `registos_medicos_FKIndex2` (`medicos_id_medico`),
  KEY `registos_medicos_FKIndex3` (`especialidades_id`)
) ;

INSERT INTO `registos_medicos` (`id_registo`, `especialidades_id`, `medicos_id_medico`, `pacientes_idpaciente`, `diagnostico`, `prescricao`, `notas`, `data_consulta`) VALUES
(67, 0, 3, 20, 'vjrvburbncovrrimbn gvngmx,jcvc', 'vthvyrj yuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'b uyyyyyyyyyyyyyyyyyyyyyyyyyy', NULL),
(29, 0, 3, 20, 'loco e maluco', 'bom programador', 'nao programe em java', NULL),
(23, 1, 3, 6, 'cansado com sono', 'doenca do programador', 'tem que deixar de programar', NULL),
(81, 0, 0, 0, '', '', '', NULL),
(82, 0, 3, 15, 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', NULL),
(83, 0, 3, 15, 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', 'Embora a programação seja uma habilidade valiosa e essencial em muitos campos, existem algumas considerações importantes a serem feitas sobre por que alguém pode escolher não programar:', NULL),
(87, 0, 3, 22, 'notasste código PHP receberá os dados do formulário HTML, conectará ao banco de dados e inserirá os dados na tabela registos_medicos. Certifique-se de substituir \"seu_usuario\", \"sua_senha\" e \"seu_banco_de_dados\" com as credenciais corretas e o nome do seu banco de dados.', 'ste código PHP receberá os dados do formulário HTML, conectará ao banco de dados e inserirá os dados na tabela registos_medicos. Certifique-se de substituir \"seu_usuario\", \"sua_senha\" e \"seu_banco_de_dados\" com as credenciais corretas e o nome do seu banco de dados.', 'ste código PHP receberá os dados do formulário HTML, conectará ao banco de dados e inserirá os dados na tabela registos_medicos. Certifique-se de substituir \"seu_usuario\", \"sua_senha\" e \"seu_banco_de_dados\" com as credenciais corretas e o nome do seu banco de dados.', NULL),
(86, 0, 0, 0, '', '', '', NULL),
(88, 0, 3, 22, 'faca um inner join das quatro seguintes tabelas especialidades(id,nome_esp)tabela pacientes(idpaciente,nome,telefone, data_nasc,)tabela medicos(  id_medico,nome_medico,)tabela registos_medicos( id_registo,diagnostico  , prescricao   ,notas  )', 'faca um inner join das quatro seguintes tabelas especialidades(id,nome_esp)tabela pacientes(idpaciente,nome,telefone, data_nasc,)tabela medicos(  id_medico,nome_medico,)tabela registos_medicos( id_registo,diagnostico  , prescricao   ,notas  )', 'faca um inner join das quatro seguintes tabelas especialidades(id,nome_esp)tabela pacientes(idpaciente,nome,telefone, data_nasc,)tabela medicos(  id_medico,nome_medico,)tabela registos_medicos( id_registo,diagnostico  , prescricao   ,notas  )', NULL),
(89, 0, 6, 20, 'Não é possível aceder a este siteNão foi possível encontrar o endereço IP do servidor de getbootstrap.com.\r\nExperimente:\r\n\r\nRever a ligação\r\nRever a configuração do proxy, da firewall e de DNS\r\nExecutar o Diagnóstico de rede do Windows\r\nERR_NAME_NOT_RESOLVED', 'Não é possível aceder a este siteNão foi possível encontrar o endereço IP do servidor de getbootstrap.com.\r\nExperimente:\r\n\r\nRever a ligação\r\nRever a configuração do proxy, da firewall e de DNS\r\nExecutar o Diagnóstico de rede do Windows\r\nERR_NAME_NOT_RESOLVED', 'Não é possível aceder a este siteNão foi possível encontrar o endereço IP do servidor de getbootstrap.com.\r\nExperimente:\r\n\r\nRever a ligação\r\nRever a configuração do proxy, da firewall e de DNS\r\nExecutar o Diagnóstico de rede do Windows\r\nERR_NAME_NOT_RESOLVED', '2024-03-16 21:27:00'),
(90, 0, 3, 23, 'ste é um exemplo básico para enviar dados de um formulário para um banco de dados usando Python com Flask e SQLAlchemy. Certifique-se de adaptá-lo às suas necessidades específicas, como configurar um banco de dados MySQL ou PostgreSQL em vez de usar o SQLite para produção, e adicionar validações de entrada de dados conforme necessário.\r\n\r\n\r\n\r\nUser\r\nem php', 'ste é um exemplo básico para enviar dados de um formulário para um banco de dados usando Python com Flask e SQLAlchemy. Certifique-se de adaptá-lo às suas necessidades específicas, como configurar um banco de dados MySQL ou PostgreSQL em vez de usar o SQLite para produção, e adicionar validações de entrada de dados conforme necessário.\r\n\r\n\r\n\r\nUser\r\nem php', 'ste é um exemplo básico para enviar dados de um formulário para um banco de dados usando Python com Flask e SQLAlchemy. Certifique-se de adaptá-lo às suas necessidades específicas, como configurar um banco de dados MySQL ou PostgreSQL em vez de usar o SQLite para produção, e adicionar validações de entrada de dados conforme necessário.\r\n\r\n\r\n\r\nUser\r\nem php', '2024-03-05 18:47:00'),
(91, 0, 5, 23, '01010101010101001010101010100101010101010010100101001', 'nao programar', 'nunca', '2024-04-11 17:49:00'),
(92, 0, 18, 53, 'paludismo', 'paracetamol\r\nquartem', 'evitar mosquitos', '2024-06-21 05:41:00'),
(93, 0, 18, 53, 'paludismo', 'paracetamol\r\nquartem', 'evitar mosquitos', '2024-06-21 05:41:00'),
(94, 0, 18, 53, 'paludismo', 'paracetamol\r\nquartem', 'evitar mosquitos', '2024-06-21 05:41:00');