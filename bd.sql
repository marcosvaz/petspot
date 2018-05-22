DROP DATABASE IF EXISTS mascotmatch; -- DELETA O BANCO SE EXISTIR
CREATE DATABASE mascotmatch; -- CRIA O BANCO
CREATE TABLE usuario (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha CHAR(128) NOT NULL,
  PRIMARY KEY (id)
); -- CRIA A TABELA DE USUÁRIOS
INSERT INTO usuario ('nome', 'email', 'senha') VALUES ('Marcos Paulo Vaz de Oliveira', 'marcosvazdeveloper@gmail.com', '4c7d2b5245e87aca9fc4170966d87bd9621ec5c2ac651b2dcb66b578a5a6ffb67735bfbb02a071641bc1bb14ab0917b324e134c7c046226099ed4fda9ab4b67e'); -- INSERE O USUÁRIO PRINCIPAL PARA USO
