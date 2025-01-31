# PHP_MVC
Exemplo padrão MVC com PHP e MySQL (XAMMP)

# Script para criar banco de dados com tabela
CREATE DATABASE mvc;

USE mvc;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

# Iniciar o XAMPP
Abra o painel de controle do XAMPP.

Inicie os serviços Apache e MySQL clicando nos botões "Start" ao lado de cada um.

# Estrutura de Pastas e Arquivos
Crie a estrutura de pastas e arquivos conforme descrito anteriormente:

/mvc

    /controllers
    
        UserController.php
        
    /models
  
        User.php
   
    /views
    
        /user
        
            index.php
            
            create.php
    
    /config
    
        database.php
    
    /public
    
        index.php

# Acessar a Aplicação no Navegador
Abra o navegador e acesse http://localhost/mvc_app/public/index.php.
