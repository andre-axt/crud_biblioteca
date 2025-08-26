create database biblioteca_db;

use biblioteca_db;

create table autores (
    id_autor int primary key not null AUTO_INCREMENT,
    nome varchar(45) not null,
    nacionalidade varchar(20) not null,
    ano_nascimento date not null

);

create table livros (
    id_livro int primary key not null AUTO_INCREMENT,
    titulo varchar(45) not null,
    genero varchar(45) not null,
    ano_publicacao date not null,
    fk_autor int,
    foreign key (fk_autor) references id_autor(autores)

);

create table leitores (
    id_leitor int not null primary key AUTO_INCREMENT,
    nome varchar(45) not null,
    email varchar(45) not null,
    telefone varchar (11) not null

)

create table emprestimos (
    id_emprestimo int not null primary key AUTO_INCREMENT,
    fk_livro int,
    fk_leitor int,
    data_emprestimo date not null,
    data_devolucao date not null,
    foreign key (fk_livro) REFERENCES livros(id_livro),
    foreign key (fk_leitor) REFERENCES leitores(id_leitor),
)


