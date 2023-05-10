CREATE DATABASE alunos;

USE alunos;


CREATE TABLE participante(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(32),
    cpf varchar(32),
    telefone varchar(32),
    origem_publica boolean


);