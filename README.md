# PHP_MVC
Exemplo padrão MVC com PHP e MySQL (XAMMP)

# Script para criar banco de dados com tabela
CREATE DATABASE mvc_app;

USE mvc_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

# Iniciar o XAMPP
Abra o painel de controle do XAMPP.

Inicie os serviços Apache e MySQL clicando nos botões "Start" ao lado de cada um.
