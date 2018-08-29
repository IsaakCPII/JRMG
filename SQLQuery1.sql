CREATE TABLE usuario (
	id_usuario INT IDENTITY(1,1) NOT NULL,
	nome VARCHAR(100) NOT NULL,
	senha VARCHAR(12) NOT NULL,
	email VARCHAR(100) NOT NULL,
	nick VARCHAR(16) NOT NULL
	PRIMARY KEY(id_usuario)
	);

CREATE TABLE professor (
	id_prof INT NOT NULL,
	matricula VARCHAR(10) NOT NULL
	PRIMARY KEY(id_prof)
	);


CREATE TABLE conteudos (
	id_conteudos INT IDENTITY(1,1) NOT NULL,
	nome VARCHAR(100) NOT NULL,
	classificacao VARCHAR(100) NOT NULL,
	id_prof INT NOT NULL
	PRIMARY KEY(id_conteudos)
	FOREIGN KEY (id_prof) REFERENCES professor(id_prof)
	); 
CREATE TABLE arquivos (
	id_arquivos INT IDENTITY(1,1),
	nome VARCHAR(100),
	id_conteudos INT
	PRIMARY KEY (id_arquivos)
	);	
CREATE TABLE comentario (
	id_comentarios INT IDENTITY(1,1) NOT NULL,
	texto VARCHAR(1000) NOT NULL,
	id_usuario INT NOT NULL
	PRIMARY KEY (id_comentarios)
	);


