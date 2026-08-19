CREATE DATABASE restaurante_nordsleite

USE restaurante_nordsleite

CREATE TABLE usuario (
    id int auto_increment primary key,
    nome varchar(150) NOT NULL,
    email varchar(200),
)