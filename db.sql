-- CRIA A TABELA
CREATE TABLE IF NOT EXISTS tb_usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha varchar(255)
);

INSERT INTO tb_usuario (nome, email, senha) VALUES ('Chiquim', 'chiquim@email.com', '123');

INSERT INTO tb_usuario (nome, email, senha) VALUES ('Zefina', 'zefina@email.com', '456');

