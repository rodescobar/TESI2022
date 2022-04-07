CREATE DATABASE marquinhosveiculos;

CREATE TABLE veiculo(
    id INT AUTO_INCREMENT PRIMARY KEY ,
    marca VARCHAR( 30 ) ,
    modelo VARCHAR( 30 ) ,
    ano INT,
    cor VARCHAR( 20 ) ,
    valor DECIMAL( 10, 2 ) ,
    estoque INT,
    imagem VARCHAR(100)
);

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60),
    email VARCHAR(100),
    senha VARCHAR(32),
    chave VARCHAR(20),
    admin INT,
    ativo INT,
)


SELECT count(1) as total 
FROM usuario
WHERE email='fulano@gmai.com'


SELECT count(1) as total 
FROM usuario
WHERE email='sadasdasdaad'
    AND chave='sdadasasda'


UPDATE usuario 
    SET senha='sadadasdasdada'
WHERE email='sdasdadas'
    and chave='sdadada'






















