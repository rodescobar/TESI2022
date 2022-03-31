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

--Banco
--https://file.io/fKBZ2RMROgby
