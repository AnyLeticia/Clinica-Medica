CREATE DATABASE IF NOT EXISTS consultas;
USE consultas;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, senha)
VALUES ('admin', SHA2('123', 256));

DROP TABLE IF EXISTS agendamentos;
CREATE TABLE agendamentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  email VARCHAR(100),
  telefone VARCHAR(20),
  especialidade VARCHAR(50),
  data_consulta DATE,
  horario TIME
);