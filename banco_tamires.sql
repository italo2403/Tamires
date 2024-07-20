CREATE DATABASE escola;

USE escola;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
insert into usuarios(login, senha) values ('italo', '123');
CREATE TABLE professores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_professor VARCHAR(100) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    instrumentos_avaliativos TEXT NOT NULL,
    nome_alunos VARCHAR(255) NOT NULL
);
select * from professores;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    informacoes_importantes TEXT NOT NULL
);
select * from alunos;
