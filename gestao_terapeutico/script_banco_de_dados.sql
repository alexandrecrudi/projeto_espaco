CREATE DATABASE IF NOT EXISTS db_blog;

USE db_blog;

CREATE TABLE tab_clientes(
	id integer auto_increment primary key,
	nome varchar(100),
	cpf varchar(20),
	email varchar(50),
	telefone varchar(20),
	celular varchar(20),
	data_nascimento date,
	status varchar(10),
    foto varchar(200),
	data_cadastro timestamp default CURRENT_TIMESTAMP,
	data_alteracao timestamp
);

CREATE DATABASE IF NOT EXISTS db_blog;

USE db_blog;


ALTER TABLE tab_clientes ADD(
	planeta varchar(100),
	aura varchar(20),
	padrao_energetico varchar(50),
	auto_gerado varchar(20),
	mn varchar(20),
	i varchar(20),
	c varchar(20),
	encarnacao varchar(20),
	quanto_tempo varchar(20),
	area_fm varchar(20),
	
	rel_amiz varchar(20),
	amor varchar(20),
	profissional varchar(20),
	lazer varchar(20),
	saude varchar(20),
	financeiro varchar(20),
	espiritual varchar(20),
	prosperidade varchar(20),
	dep_quim varchar(20),
	cr varchar(20),
	dif_gravidez varchar(20),
	trat_psic varchar(20),
	depressao varchar(20),
	compreensao varchar(20),
	aceita_trat varchar(20),
	aparelho_corpo varchar(20),
	meio_tratamento varchar(20),
	apometria varchar(20),
	tdrsp varchar(20),
	tle varchar(20),
	cura varchar(20),
	ciclo_da_vida varchar(20),
	tarot varchar(20),
	gfu varchar(20),
	graficos varchar(20),
	magneto_reiki varchar(20),
	hooponopono varchar(20),
	constelacao varchar(20),
	livros varchar(20),
	cd varchar(20),
	orgonite varchar(20),
	ima varchar(20),
	curso_apometria varchar(20),
	curso_transformacao varchar(20),
	obs varchar(20),
	data_cadastro timestamp default CURRENT_TIMESTAMP,
	data_alteracao timestamp
);

ALTER TABLE tab_clientes ADD(
	mgn varchar(3),
    pai varchar(100),
    pai_ativo varchar(3),
    pai_idade varchar(3),
    pai_profissao varchar(100),
    pai_desenc varchar(3),
    pai_desenc_temp varchar(3),
    pai_desenc_motivo varchar(100),
    pai_sep varchar(3),
    pai_sep_temp varchar(3),
    pai_sep_obs varchar(100),
    pai_filho_rel varchar(3),
    pai_filho_obs varchar(100),
    pai_avos varchar(200),
    mae varchar(100),
    mae_ativo varchar(3),
    mae_idade varchar(3),
    mae_profissao varchar(100),
    mae_desenc varchar(3),
    mae_desenc_temp varchar(3),
    mae_desenc_motivo varchar(100),
    mae_sep varchar(3),
    mae_sep_temp varchar(3),
    mae_sep_obs varchar(100),
    mae_filho_rel varchar(3),
    mae_filho_obs varchar(100),
    mae_avos varchar(200),
);
