DROP DATABASE IF EXISTS mascotmatch; -- DELETA O BANCO SE EXISTIR
CREATE DATABASE mascotmatch; -- CRIA O BANCO
CREATE TABLE usuario (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha CHAR(128) NOT NULL,
  imagem VARCHAR(255) NOT NULL DEFAULT 'img/user.png',
  PRIMARY KEY (id)
); -- CRIA A TABELA DE USUÁRIOS
