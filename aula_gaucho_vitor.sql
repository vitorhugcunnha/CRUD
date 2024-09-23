CREATE DATABASE aula_gaucho_vitor;

USE aula_gaucho_vitor;

CREATE TABLE professor (
	id_professor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_professor VARCHAR(45) NOT NULL,
    email_professor VARCHAR(45) NOT NULL,
    materia_professor VARCHAR(45) NOT NULL,
    data_admissao_professor DATE NOT NULL
);

CREATE TABLE aula (
	id_aula INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	sala_aula VARCHAR(45) NOT NULL,
    materia_aula VARCHAR(45) NOT NULL,
    turma_aula VARCHAR(45) NOT NULL,
    capacidade_sala_aula INT NOT NULL
);

CREATE TABLE diario (
	id_diario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    horario_aula_diario DATETIME NOT NULL, 
	assunto_diario VARCHAR(45) NOT NULL,
    id_professor_diario INT NOT NULL,
    FOREIGN KEY (id_professor_diario) REFERENCES professor(id_professor),
    id_aula_diario INT NOT NULL,
    FOREIGN KEY (id_aula_diario) REFERENCES aula(id_aula)
);