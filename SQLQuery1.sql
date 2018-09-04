CREATE TABLE usuario (
	id INT IDENTITY(1,1) NOT NULL,
	nome VARCHAR(100) NOT NULL,
	senha VARCHAR(12) NOT NULL,
	email VARCHAR(100) NOT NULL,
	nick VARCHAR(16) NOT NULL
	PRIMARY KEY(id)
	);

CREATE TABLE professor (
	id INT NOT NULL,
	matricula VARCHAR(10) NOT NULL,
	PRIMARY KEY(id)
	);


CREATE TABLE conteudos (
	id INT IDENTITY(1,1) NOT NULL,
	nome VARCHAR(100) NOT NULL,
	classificacao VARCHAR(100) NOT NULL,
	id_prof INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (id_prof) REFERENCES professor(id)
	); 
CREATE TABLE arquivos (
	id INT IDENTITY(1,1),
	nome VARCHAR(100),
	id_conteudos INT,
	PRIMARY KEY (id),
	FOREIGN KEY (id_conteudos) REFERENCES conteudos (id)
	);	
CREATE TABLE comentario (
	id INT IDENTITY(1,1) NOT NULL,
	texto VARCHAR(1000) NOT NULL,
	id_usuario INT NOT NULL,
	id_conteudos INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id_usuario) REFERENCES usuario (id),
	FOREIGN KEY (id_conteudos) REFERENCES conteudos (id)
	);


