--Criando o banco de dados
CREATE DATABASE marquinhosveiculos;

--Criando tabela usuários
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60),
    email VARCHAR(100),
    senha VARCHAR(32),
    chave VARCHAR(20),
    admin INT,
    ativo INT,
);

--Removendo tabela veículos.
DROP TABLE veiculo;

--Criando tabela cor
CREATE TABLE cor (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	cor VARCHAR(30)
);

--Criando tabela veículo
CREATE TABLE veiculo (
    id INT AUTO_INCREMENT PRIMARY KEY ,
    marca VARCHAR(30) ,
    modelo VARCHAR(30) ,
    ano INT,
    cor INT,
    valor DECIMAL(10, 2) ,
    estoque INT,
    imagem VARCHAR(100)
);

--Criando relacionamento
ALTER TABLE veiculo
	ADD CONSTRAINT fk_veiculo_cor
	FOREIGN KEY (cor)
	REFERENCES cor(id);

--Adicionando cores
INSERT INTO cor
( cor )
VALUES
( 'Amarelo' ),
( 'Vermelho' ),
( 'Azul' ),
( 'Prata' ),
( 'Preto' ),
( 'Verde' );

--Senha 123
15fe23bb629ca88e5b53c5213a5b3cfb
fulana@gmai.com