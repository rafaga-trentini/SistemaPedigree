
CREATE DATABASE sistemaPedigre;
USE sistemaPedigre;

CREATE TABLE IF NOT EXISTS usuario (
	id int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(45),
    username varchar(45),
    senha varchar(45)
);

CREATE TABLE IF NOT EXISTS endereco (
	id_usuario int PRIMARY KEY,
	rua varchar(45),
    numero int,
    bairro varchar(45),
    cidade varchar(45),
    estado varchar(45),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE IF NOT EXISTS cachorro (
	id int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(45),
    raca varchar(80),
    cor varchar(80),
    sexo varchar(80),
    pais_origem varchar(80),
    data_nascimento varchar(80),
    id_usuario int,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

INSERT INTO usuario VALUES (1,'Administrador','admin','d033e22ae348aeb5660fc2140aec35850c4da997');
