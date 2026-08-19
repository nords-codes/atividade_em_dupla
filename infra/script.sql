CREATE DATABASE restaurante_nordsleite

USE restaurante_nordsleite

CREATE TABLE usuario (
    id int auto_increment primary key,
    nome varchar(150) NOT NULL,
    email varchar(200) NOT NULL,
)
CREATE TABLE pratos(
    id int auto_increment primary key,
    nome_prato varchar(100) NOT NULL,
    preco decimal (10, 2) NOT NULL,
    categoria varchar(100) NOT NULL,
    descricao varchar(200),
)