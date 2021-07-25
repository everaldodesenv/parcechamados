CREATE TABLE IF NOT EXISTS `pc_cliente`(
`cli_Id` INT(11), 
`cli_Nome` VARCHAR(60)NULL DEFAULT NULL,
`cli_Cnpj` VARCHAR(14)NULL DEFAULT NULL,
`cli_Ie` VARCHAR(10)NULL DEFAULT NULL,
`cli_Rua` VARCHAR(50)NULL DEFAULT NULL,
`cli_Numero` VARCHAR(5)NULL DEFAULT NULL,
`cli_Bairro` VARCHAR(50)NULL DEFAULT NULL,
`cli_Cidade` VARCHAR(50)NULL DEFAULT NULL,
`cli_Cep`  VARCHAR(15)NULL DEFAULT NULL,
`cli_Fone1` VARCHAR(10)NULL DEFAULT NULL,
`cli_Fone2` VARCHAR(10)NULL DEFAULT NULL,
`cli_Celular` VARCHAR(10)NULL DEFAULT NULL,
`cli_email` VARCHAR(50)NULL DEFAULT NULL,
`cli_DtCadastro` DATE NULL DEFAULT NULL,
`cli_Produto` INT(1),
PRIMARY KEY (`cli_Id`) 
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;


CREATE TABLE IF NOT EXISTS `pc_usuarios`(
`usu_Id` INT(11),
`cli_Id` INT(11),
`usu_Nome` VARCHAR(60)NULL DEFAULT NULL,
`usu_Email` VARCHAR(60)NULL DEFAULT NULL,
`usu_Celular` VARCHAR(10)NULL DEFAULT NULL,
PRIMARY KEY (`usu_Id`)
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;


CREATE TABLE IF NOT EXISTS `pc_suporte`(

`sup_Id` INT(11), 
`sup_Nome` VARCHAR(50)NULL DEFAULT NULL,
`sup_Dtcadastro` DATE,
`sup_Profissao` VARCHAR(20)NULL DEFAULT NULL,
PRIMARY KEY (`sup_Id`)
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;


CREATE TABLE IF NOT EXISTS `pc_produtos`(
`pro_Id` INT(11),
`pro_Produto` VARCHAR (50)NULL DEFAULT NULL,
`pro_Versao` VARCHAR(15)NULL DEFAULT NULL,
PRIMARY KEY (`pro_Id`)
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;

CREATE TABLE IF NOT EXISTS pc_chamado(
`cha_Id` INT(11),
`cli_Id` INT(11),
`cli_Nome` VARCHAR(50)NULL DEFAULT NULL,
`usu_Id` INT(11),
`usu_Nome` VARCHAR(50)NULL DEFAULT NULL,
`sup_Id` INT(11),
`sup_Nome` VARCHAR(50)NULL DEFAULT NULL,
`cha_Classificacao` VARCHAR(20)NULL DEFAULT NULL,
`cha_Situacao`VARCHAR(10) DEFAULT 'ABERTO',
`cha_DtAbertura` DATE,
`cha_HoraAbertura` TIME,
`cha_DtFechamento` DATE,
`cha_HoraFechamento` TIME,
`cha_Problema`VARCHAR(250)NULL DEFAULT NULL,
`cha_Solucao`VARCHAR(250)NULL DEFAULT NULL,
PRIMARY KEY (`cha_Id`)
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;


CREATE TABLE IF NOT EXISTS `tmp_listachamado`(
`tmp_Linha`INT(11),
`cha_Id` INT(11),
`cli_Id` INT(11),
`cli_Nome` VARCHAR(30)NULL DEFAULT NULL,
`usu_Id` INT(11),
`usu_Nome` VARCHAR(50)NULL DEFAULT NULL,
`sup_Id` INT(11),
`sup_Nome` VARCHAR(50)NULL DEFAULT NULL,
`cha_DtAbertura` DATE NULL DEFAULT NULL,
`cha_HoraAbertura` TIME NULL DEFAULT NULL,
`cha_DtFechamento` DATE NULL DEFAULT NULL,
`cha_HoraFechamento` TIME NULL DEFAULT NULL,
PRIMARY KEY (`tmp_Linha`)
)COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
;

































