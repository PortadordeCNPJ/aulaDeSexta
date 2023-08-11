CREATE DATABASE IF EXISTS `bd_castro` DEFAULT CHAR SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_castro`;

CREATE TABLE IF NOT EXISTS `tb_cidades`(
    cod INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(120) NOT NULL
);

INSERT INTO `tb_cidades`(`nome`) VALUES
    ('Cascavel'),
    ('Corbéblia'),
    ('Foz do Iguaçu');


CREATE TABLE IF NOT EXISTS `tb_clientes`(
    cod INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(120) NOT NULL,
    data_nascimento DATE NOT NULL,
    email VARCHAR(50),
    telefone BIGINT NOT NULL,
    cod_cidade INTEGER,
    FOREIGN KEY (cod_cidade) REFERENCES tb_cidades(cod)
);

CREATE TABLE IF NOT EXISTS `tb_cidades`(
    cod INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(120) NOT NULL
);

INSERT INTO `tb_cidades`(`nome`) VALUES
    ('Cascavel'),
    ('Corbéblia'),
    ('Foz do Iguaçu');

SELECT tb_clientes.cod_cidade, tb_cidades.cod
FROM tb_clientes, tb_cidades
WHERE tb_cidades.cod = tb_clientes.cod_cidade;



