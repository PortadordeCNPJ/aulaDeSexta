CREATE TABLE IF NOT EXISTS `tb_cidades` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL
);

INSERT INTO `tb_cidades` (`nome`) VALUES 
('Cascavel'),
('Corbélia'),
('Foz do Iguaçu');

CREATE TABLE IF NOT EXISTS `tb_cursos` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL
);

INSERT INTO `tb_cursos` (`nome`) VALUES 
('Administração'),
('Informática'),
('Inglês');

CREATE TABLE IF NOT EXISTS `tb_periodos` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL
);

INSERT INTO `tb_periodos` (`nome`) VALUES 
('Matutino'),
('Vespertino'),
('Noturno');

CREATE TABLE IF NOT EXISTS `tb_observacao` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `observacao` VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tb_clientes` (
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `data_nasc` DATE NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `telefone` VARCHAR(255) NOT NULL,
    `id_cidade` INT,
    `id_curso` INT,
    `id_periodo` INT,
    `id_observacao` INT, 
    FOREIGN KEY(id_cidade) REFERENCES tb_cidades (id), 
    FOREIGN KEY(id_curso) REFERENCES tb_cursos (id), 
    FOREIGN KEY(id_periodo) REFERENCES tb_periodos (id), 
    FOREIGN KEY(id_observacao) REFERENCES tb_observacao (id)
);
