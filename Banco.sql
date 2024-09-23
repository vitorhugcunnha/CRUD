create database Aulas;

use Aulas;

create table professores(
	id_professor int primary key auto_increment,
    nome varchar(100),
    email varchar(100),
    materia_professor varchar(100),
    idade int(3),
    data_admissao date
);

create table aula(
	id_aula int primary key auto_increment,
    materia varchar(100),
    assunto varchar(100),
    turma varchar(100),
    sala varchar(100)
);

create table diario(
	id_diario int primary key auto_increment,
    horario_aula datetime, 
    id_professor int not null,
    foreign key (id_professor) references professores(id_professor),
    id_aula int not null,
    foreign key (id_aula) references aula(id_aula)
);

 drop table professores;